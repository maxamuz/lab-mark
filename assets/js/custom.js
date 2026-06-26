/**
 * Lab-Mark Theme Custom Scripts
 */

(function () {
  "use strict";

  // Мобильное меню
  const burger = document.querySelector(".burger");
  const nav = document.querySelector(".nav-menu");
  if (burger && nav) {
    burger.addEventListener("click", function () {
      nav.classList.toggle("active");
      burger.textContent = nav.classList.contains("active") ? "✕" : "☰";
    });
    nav.querySelectorAll("a").forEach(function (link) {
      link.addEventListener("click", function () {
        nav.classList.remove("active");
        burger.textContent = "☰";
      });
    });
  }

  // FAQ Аккордеон
  document.querySelectorAll(".faq-question").forEach(function (q) {
    q.addEventListener("click", function () {
      var item = q.parentElement;
      var isActive = item.classList.contains("active");
      document.querySelectorAll(".faq-item").forEach(function (i) {
        i.classList.remove("active");
      });
      if (!isActive) item.classList.add("active");
    });
  });

  // Плавный скролл
  document.querySelectorAll('a[href^="#"]').forEach(function (anchor) {
    anchor.addEventListener("click", function (e) {
      if (anchor.classList.contains("btn-read-full")) return;
      e.preventDefault();
      var target = document.querySelector(this.getAttribute("href"));
      if (target) {
        target.scrollIntoView({ behavior: "smooth", block: "start" });
      }
    });
  });

  // Scroll to contact with tariff
  window.scrollToContact = function (tariff) {
    var formSection = document.getElementById("cta");
    if (!formSection) return;
    var textarea = formSection.querySelector("textarea");
    formSection.scrollIntoView({ behavior: "smooth" });
    setTimeout(function () {
      if (textarea) {
        textarea.value = 'Интересует тариф "' + tariff + '". ';
        textarea.focus();
      }
    }, 800);
  };

  // Form submit handler
  window.handleFormSubmit = function (e) {
    e.preventDefault();
    var notif = document.getElementById("notification");
    if (notif) {
      notif.style.display = "block";
      e.target.reset();
      setTimeout(function () {
        notif.style.display = "none";
      }, 4000);
    }
  };

  // Анимации при скролле
  var observer = new IntersectionObserver(
    function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add("visible");

          // Анимация skill-fill
          var skillFill = entry.target.querySelector(".skill-fill");
          if (skillFill) {
            var width = skillFill.getAttribute("data-width");
            setTimeout(function () {
              skillFill.style.width = width + "%";
            }, 200);
          }

          observer.unobserve(entry.target);
        }
      });
    },
    { threshold: 0.1, rootMargin: "0px 0px -50px 0px" },
  );
  document.querySelectorAll(".animate").forEach(function (el) {
    observer.observe(el);
  });

  // Typing effect
  function initTypingEffect() {
    var typingSpan = document.querySelector(".typing");
    if (!typingSpan) return;

    var phrases = ["приносят прибыль", "решают задачи", "масштабируют бизнес"];
    var phraseIndex = 0;
    var charIndex = 0;
    var isDeleting = false;
    var typeSpeed = 100;

    function type() {
      var currentPhrase = phrases[phraseIndex];

      if (isDeleting) {
        typingSpan.textContent = currentPhrase.substring(0, charIndex - 1);
        charIndex--;
        typeSpeed = 50;
      } else {
        typingSpan.textContent = currentPhrase.substring(0, charIndex + 1);
        charIndex++;
        typeSpeed = 150;
      }

      if (!isDeleting && charIndex === currentPhrase.length) {
        isDeleting = true;
        typeSpeed = 2000;
      } else if (isDeleting && charIndex === 0) {
        isDeleting = false;
        phraseIndex = (phraseIndex + 1) % phrases.length;
        typeSpeed = 500;
      }

      setTimeout(type, typeSpeed);
    }

    type();
  }
  initTypingEffect();

  // Three.js background
  function initThreeJS() {
    var heroBg = document.getElementById("hero-bg");
    if (!heroBg) return;

    // Ждём THREE если ещё не загружен
    if (typeof THREE === "undefined") {
      var attempts = 0;
      var interval = setInterval(function () {
        attempts++;
        if (typeof THREE !== "undefined") {
          clearInterval(interval);
          initThreeJS();
        } else if (attempts > 20) {
          clearInterval(interval); // Прекращаем через ~2 сек
        }
      }, 100);
      return;
    }

    // Чистим предыдущий canvas если есть (защита от двойного вызова)
    var existing = heroBg.querySelector("canvas");
    if (existing) heroBg.removeChild(existing);

    // Проверяем поддержку WebGL
    var testCanvas = document.createElement("canvas");
    var gl =
      testCanvas.getContext("webgl") ||
      testCanvas.getContext("experimental-webgl");
    if (!gl) {
      console.warn("WebGL не поддерживается");
      return;
    }

    var scene = new THREE.Scene();
    var camera = new THREE.PerspectiveCamera(
      75,
      window.innerWidth / window.innerHeight,
      0.1,
      1000,
    );

    var renderer = new THREE.WebGLRenderer({
      alpha: true,
      antialias: true,
    });
    renderer.setSize(window.innerWidth, window.innerHeight);
    renderer.setPixelRatio(window.devicePixelRatio);
    heroBg.appendChild(renderer.domElement);

    var geometry = new THREE.IcosahedronGeometry(10, 1);
    var material = new THREE.MeshBasicMaterial({
      color: 0x6366f1,
      wireframe: true,
      transparent: true,
      opacity: 0.3,
    });
    var sphere = new THREE.Mesh(geometry, material);
    scene.add(sphere);
    camera.position.z = 30;

    var animationId;
    function animate() {
      animationId = requestAnimationFrame(animate);
      sphere.rotation.x += 0.005;
      sphere.rotation.y += 0.005;
      renderer.render(scene, camera);
    }
    animate();

    function onResize() {
      camera.aspect = window.innerWidth / window.innerHeight;
      camera.updateProjectionMatrix();
      renderer.setSize(window.innerWidth, window.innerHeight);
    }
    window.addEventListener("resize", onResize);

    // Очистка при выгрузке страницы
    window.addEventListener("beforeunload", function () {
      cancelAnimationFrame(animationId);
      window.removeEventListener("resize", onResize);
      renderer.dispose();
    });
  }

  // Безопасный запуск: после DOM + после загрузки скриптов
  if (document.readyState === "loading") {
    document.addEventListener("DOMContentLoaded", initThreeJS);
  } else {
    initThreeJS();
  }

  // Маска телефона
  document.querySelectorAll('input[type="tel"]').forEach(function (input) {
    input.addEventListener("input", function (e) {
      var v = e.target.value.replace(/\D/g, "");
      if (v.length > 0) {
        if (v[0] === "7" || v[0] === "8") v = v.substring(1);
        var f = "+7";
        if (v.length > 0) f += " (" + v.substring(0, 3);
        if (v.length >= 3) f += ") " + v.substring(3, 6);
        if (v.length >= 6) f += "-" + v.substring(6, 8);
        if (v.length >= 8) f += "-" + v.substring(8, 10);
        e.target.value = f;
      }
    });
  });
  // === ФИЛЬТРЫ ПОРТФОЛИО ===
  document.addEventListener("DOMContentLoaded", function () {
    const filterBtns = document.querySelectorAll(".filter-btn");
    // ❌ Старый код: находил .project-card, который теперь внутри <a>
    // const projectCards = document.querySelectorAll(".project-card");

    // ✅ Новый код: находим ссылки, оборачивающие карточки
    const projectCardLinks = document.querySelectorAll(
      ".portfolio-grid .project-card-link",
    ); // Используем более специфичный селектор

    // Если элементов нет — выходим, чтобы не было ошибок
    // ❌ Старый код:
    // if (!filterBtns.length || !projectCards.length) return;

    // ✅ Новый код:
    if (!filterBtns.length || !projectCardLinks.length) return;

    filterBtns.forEach(function (btn) {
      btn.addEventListener("click", function (e) {
        e.preventDefault();

        // 1. Переключаем активный класс на кнопках
        filterBtns.forEach(function (b) {
          b.classList.remove("active");
        });
        btn.classList.add("active");

        // 2. Получаем значение фильтра, нормализуем
        const filterValue = btn
          .getAttribute("data-filter")
          .trim()
          .toLowerCase();

        // 3. Фильтруем карточки (теперь это ссылки .project-card-link)
        // ❌ Старый код: projectCards.forEach(function (card) {
        projectCardLinks.forEach(function (cardLink) {
          // Переименовал переменную для ясности

          // ❌ Старый код: const categoryAttr = card.getAttribute("data-category") || "";
          // ✅ Новый код: получаем атрибут с родительской ссылки
          const categoryAttr = cardLink.getAttribute("data-category") || "";

          // Разбиваем на массив категорий (поддержка пробелов как разделителя)
          const cardCategories = categoryAttr
            .toLowerCase()
            .split(/\s+/)
            .filter(Boolean);

          // Проверяем: "all" или вхождение категории в список
          const shouldShow =
            filterValue === "all" || cardCategories.includes(filterValue);

          // ❌ Старый код: обращался к card.style.display и т.д.
          // ✅ Новый код: обращаемся к cardLink.style.display и т.д.
          if (shouldShow) {
            // Показываем карточку с анимацией (через ссылку)
            cardLink.style.display = "block"; // Изменено: card -> cardLink
            // Небольшая задержка для запуска CSS-transition
            void cardLink.offsetWidth; // принудительный reflow // Изменено: card -> cardLink
            cardLink.style.opacity = "1"; // Изменено: card -> cardLink
            cardLink.style.transform = "translateY(0) scale(1)"; // Изменено: card -> cardLink
          } else {
            // Скрываем карточку с анимацией (через ссылку)
            cardLink.style.opacity = "0"; // Изменено: card -> cardLink
            cardLink.style.transform = "translateY(20px) scale(0.95)"; // Изменено: card -> cardLink

            // После завершения анимации скрываем элемент
            setTimeout(function () {
              // Дополнительная проверка: не изменился ли фильтр за время анимации
              const currentFilter = document
                .querySelector(".filter-btn.active")
                ?.getAttribute("data-filter")
                ?.trim()
                .toLowerCase();
              // ❌ Старый код: const stillHidden = currentFilter !== "all" && !cardCategories.includes(currentFilter);
              // ✅ Новый код: снова получаем атрибут с cardLink
              const categoryAttrForCheck =
                cardLink.getAttribute("data-category") || "";
              const cardCategoriesForCheck = categoryAttrForCheck
                .toLowerCase()
                .split(/\s+/)
                .filter(Boolean);
              const stillHidden =
                currentFilter !== "all" &&
                !cardCategoriesForCheck.includes(currentFilter);
              if (stillHidden) {
                cardLink.style.display = "none"; // Изменено: card -> cardLink
              }
            }, 300); // 300ms — должно совпадать с duration в CSS transition
          }
        });
      });
    });
  });

  // Карточки проектов

  // --- Функция для сброса видимости карточек к начальному состоянию ---
  function resetCardVisibility() {
    const allCards = Array.from(
      portfolioGrid.querySelectorAll(".project-card-link:not(.filtered-out)"),
    ); // Берём только неотфильтрованные

    allCards.forEach((card, index) => {
      // Удаляем класс, добавленный PHP, чтобы он не мешал inline-стилю
      card.classList.remove("hidden-card");

      if (index < 9) {
        card.style.display = ""; // Показываем первые 9
      } else {
        card.style.display = "none"; // Скрываем остальные
      }
    });

    // Обновляем состояние кнопок после сброса
    updateExpandCollapseButtons();
  }

  // --- Функция для обновления видимости карточек при фильтрации ---
  function applyFilter(filterValue) {
    const cards = portfolioGrid.querySelectorAll(".project-card-link"); // Используем portfolioGrid

    cards.forEach((card) => {
      const categories = card.getAttribute("data-category");
      // Скрываем карточку, если она не соответствует фильтру
      if (filterValue === "all" || categories.includes(filterValue)) {
        card.classList.remove("filtered-out"); // Убираем класс фильтрации
        card.style.display = ""; // Сбрасываем inline стиль display
        // Удаляем класс, добавленный PHP, чтобы он не мешал
        card.classList.remove("hidden-card");
      } else {
        card.classList.add("filtered-out"); // Добавляем класс фильтрации
        card.style.display = "none"; // Прячем через display
      }
    });

    // Обновляем состояние кнопок после применения фильтра
    updateExpandCollapseButtons();
  }

  // --- Обработчики кликов по кнопкам Раскрыть/Свернуть ---
  if (openButton) {
    openButton.addEventListener("click", function (e) {
      e.preventDefault();

      const allCards = Array.from(
        portfolioGrid.querySelectorAll(".project-card-link:not(.filtered-out)"),
      ); // Только неотфильтрованные

      allCards.forEach((card, index) => {
        // Удаляем класс, добавленный PHP, перед тем как показать
        card.classList.remove("hidden-card");
        card.style.display = ""; // Показываем все неотфильтрованные карточки
      });

      // Обновляем состояние кнопок
      updateExpandCollapseButtons();
    });
  }

  if (closeButton) {
    closeButton.addEventListener("click", function (e) {
      e.preventDefault();

      // Скрываем все карточки, кроме первых 9 (для "все")
      const allCards = Array.from(
        portfolioGrid.querySelectorAll(".project-card-link:not(.filtered-out)"),
      ); // Только неотфильтрованные

      allCards.forEach((card, index) => {
        // Удаляем класс, добавленный PHP, перед тем как манипулировать видимостью
        card.classList.remove("hidden-card");

        if (index < 9) {
          card.style.display = ""; // Показываем первые 9
        } else {
          card.style.display = "none"; // Скрываем остальные
        }
      });

      // Обновляем состояние кнопок
      updateExpandCollapseButtons();

      // Прокрутка к началу блока портфолио
      if (portfolioSection) {
        portfolioGrid.scrollIntoView({ block: "start" }); // Прокрутка к самой сетке, чтобы заголовок был виден
      }
    });
  }
})();
