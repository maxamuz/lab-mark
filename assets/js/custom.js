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
})();
