<?php

/**
 * The header for our theme
 *
 * @package lab-mark
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<!-- Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Manrope:wght@600;700;800&display=swap" rel="stylesheet">

	<style>
		body {
			visibility: hidden;
			opacity: 0;
			transition: opacity 0.15s ease;
		}

		body.fonts-loaded {
			visibility: visible;
			opacity: 1;
		}
	</style>
	<script>
		var fontsLoaded = false;

		function showPage() {
			if (fontsLoaded) return;
			fontsLoaded = true;
			document.body.classList.add("fonts-loaded");
		}
		if (document.fonts && document.fonts.ready) {
			document.fonts.ready.then(showPage);
		}
		setTimeout(showPage, 3000);
	</script>

	<!-- Yandex.Metrika counter -->
	<script type="text/javascript">
		(function(m, e, t, r, i, k, a) {
			m[i] = m[i] || function() {
				(m[i].a = m[i].a || []).push(arguments)
			};
			m[i].l = 1 * new Date();
			for (var j = 0; j < document.scripts.length; j++) {
				if (document.scripts[j].src === r) {
					return;
				}
			}
			k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
		})(window, document, 'script', 'https://mc.yandex.ru/metrika/tag.js?id=110450796', 'ym');

		ym(110450796, 'init', {
			ssr: true,
			webvisor: true,
			clickmap: true,
			ecommerce: "dataLayer",
			referrer: document.referrer,
			url: location.href,
			accurateTrackBounce: true,
			trackLinks: true
		});
	</script>
	<noscript>
		<div><img src="https://mc.yandex.ru/watch/110450796" style="position:absolute; left:-9999px;" alt="" /></div>
	</noscript>
	<!-- /Yandex.Metrika counter -->

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>

	<!-- Header -->
	<header>
		<div class="container">
			<div class="nav-wrapper">
				<div class="logo">
					<!-- Выводим логотип из настроек темы или стандартный, если не установлен -->
					<?php
					if (function_exists('the_custom_logo') && has_custom_logo()) {
						the_custom_logo(); // Используем стандартную функцию WordPress для вывода кастомного логотипа
					} else {
						// Если кастомный логотип не установлен, можно вывести текстовое название
						bloginfo('name');
					}
					?>
					<!-- Альтернативно, если всегда нужен текстовый логотип, даже если изображение загружено -->
					<!-- bloginfo('name'); -->
					</a>
				</div>
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_class'     => 'nav-menu',
						'container'      => false,
						'fallback_cb'    => false,
					)
				);
				?>
				<div class="top-contacts">
					<a href="tel:+79800618943" class="contacts-phone" style="padding: 10px 24px; font-size: 0.9rem">+7 (980) 061-89-43</a>
					<a href="#cta" class="btn btn-primary" style="padding: 10px 24px; font-size: 0.9rem">Обсудить проект</a>
				</div>


				<button class="burger" aria-label="Меню">☰</button>
			</div>
		</div>
	</header>