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

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>

	<!-- Header -->
	<header>
		<div class="container">
			<div class="nav-wrapper">
				<div class="logo">
					<a href="<?php echo esc_url(home_url('/')); ?>">
						Лаборатория<span>Маркетинга</span>
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

				<a href="#cta" class="btn btn-primary" style="padding: 10px 24px; font-size: 0.9rem">Обсудить проект</a>

				<button class="burger" aria-label="Меню">☰</button>
			</div>
		</div>
	</header>