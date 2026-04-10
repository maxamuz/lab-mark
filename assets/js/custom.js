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
    if (!heroBg || typeof THREE === "undefined") return;

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

    function animate() {
      requestAnimationFrame(animate);
      sphere.rotation.x += 0.005;
      sphere.rotation.y += 0.005;
      renderer.render(scene, camera);
    }

    animate();

    window.addEventListener("resize", function () {
      camera.aspect = window.innerWidth / window.innerHeight;
      camera.updateProjectionMatrix();
      renderer.setSize(window.innerWidth, window.innerHeight);
    });
  }
  initThreeJS();

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
    const projectCards = document.querySelectorAll(".project-card");

    // Если элементов нет — выходим, чтобы не было ошибок
    if (!filterBtns.length || !projectCards.length) return;

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

        // 3. Фильтруем карточки
        projectCards.forEach(function (card) {
          const categoryAttr = card.getAttribute("data-category") || "";
          // Разбиваем на массив категорий (поддержка пробелов как разделителя)
          const cardCategories = categoryAttr
            .toLowerCase()
            .split(/\s+/)
            .filter(Boolean);

          // Проверяем: "all" или вхождение категории в список
          const shouldShow =
            filterValue === "all" || cardCategories.includes(filterValue);

          if (shouldShow) {
            // Показываем карточку с анимацией
            card.style.display = "block";
            // Небольшая задержка для запуска CSS-transition
            void card.offsetWidth; // принудительный reflow
            card.style.opacity = "1";
            card.style.transform = "translateY(0) scale(1)";
          } else {
            // Скрываем карточку с анимацией
            card.style.opacity = "0";
            card.style.transform = "translateY(20px) scale(0.95)";

            // После завершения анимации скрываем элемент
            setTimeout(function () {
              // Дополнительная проверка: не изменился ли фильтр за время анимации
              const currentFilter = document
                .querySelector(".filter-btn.active")
                ?.getAttribute("data-filter")
                ?.trim()
                .toLowerCase();
              const stillHidden =
                currentFilter !== "all" &&
                !cardCategories.includes(currentFilter);
              if (stillHidden) {
                card.style.display = "none";
              }
            }, 300); // 300ms — должно совпадать с duration в CSS transition
          }
        });
      });
    });
  });

  // --- МОДАЛЬНОЕ ОКНО КЕЙСОВ ---
  var modal = document.getElementById("caseModal");
  var openBtns = document.querySelectorAll(".open-case-btn");
  var closeBtn = document.querySelector(".modal-close");

  if (modal) {
    function openModal() {
      var scrollBarWidth =
        window.innerWidth - document.documentElement.offsetWidth;
      modal.classList.add("open");
      document.body.style.overflow = "hidden";
      document.body.style.paddingRight = scrollBarWidth + "px";
    }

    function closeModal() {
      modal.classList.remove("open");
      document.body.style.overflow = "";
      document.body.style.paddingRight = "";
    }

    if (openBtns.length) {
      openBtns.forEach(function (btn) {
        btn.addEventListener("click", function (e) {
          e.preventDefault();
          var card = btn.closest(".project-card");

          var modalTitle = document.getElementById("modalTitle");
          var modalDesc = document.getElementById("modalDesc");
          if (modalTitle) modalTitle.textContent = card.dataset.title;
          if (modalDesc) modalDesc.textContent = card.dataset.desc;

          // Ссылка на полную запись
          var readMoreLink = document.getElementById("modalReadMore");
          if (readMoreLink) readMoreLink.href = card.dataset.permalink || "#";

          // Сроки, стек (из тегов), результат
          var modalDuration = document.getElementById("modalMetaDuration");
          var modalMetaTech = document.getElementById("modalMetaTech");
          var modalMetaResult = document.getElementById("modalMetaResult");
          if (modalDuration)
            modalDuration.textContent = card.dataset.duration || "—";
          if (modalMetaTech)
            modalMetaTech.textContent = card.dataset.tags || "—";
          if (modalMetaResult)
            modalMetaResult.textContent = card.dataset.result || "—";

          // Получаем src изображения из карточки
          var cardImg = card.querySelector(".project-img img");
          var modalImageEl = document.getElementById("modalImage");
          if (cardImg && modalImageEl) {
            modalImageEl.innerHTML =
              '<img src="' +
              cardImg.src +
              '" alt="' +
              cardImg.alt +
              '" style="width:100%;height:100%;object-fit:cover;border-radius:20px 20px 0 0">';
          } else if (modalImageEl) {
            modalImageEl.style.background = card.dataset.bg;
          }

          openModal();
        });
      });
    }

    if (closeBtn) {
      closeBtn.addEventListener("click", closeModal);
    }
    modal.addEventListener("click", function (e) {
      if (e.target === modal) closeModal();
    });
    document.addEventListener("keydown", function (e) {
      if (e.key === "Escape" && modal.classList.contains("open")) closeModal();
    });
  }
})();
