<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package lab-mark
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-header">
		<?php
		if (is_singular()) :
			the_title('<h1 class="entry-title">', '</h1>');
		else :
			the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
		endif;

		if ('post' === get_post_type()) :
		?>
			<div class="entry-meta">
				<?php
				lab_mark_posted_on();
				lab_mark_posted_by();
				?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</div><!-- .entry-header -->

	<?php // lab_mark_post_thumbnail(); 
	?>

	<div class="entry-content">
		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__('Continue reading<span class="screen-reader-text"> "%s"</span>', 'lab-mark'),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post(get_the_title())
			)
		);

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__('Pages:', 'lab-mark'),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->
	<section class="cta-section section-padding" id="cta">
		<div class="container">
			<div class="cta-box animate">
				<h2>Обсудить проект</h2>
				<p class="cta-box-text">
					Оставьте заявку — свяжемся в течение 30 минут для бесплатной
					консультации.
				</p>
				<?php echo do_shortcode('[contact-form-7 id="fc1dbbe" title="Главная форма"]'); ?>
				<!-- <form id="contactForm" onsubmit="handleFormSubmit(event)">
				<div class="form-grid">
					<input
						type="text"
						class="form-input"
						placeholder="Ваше имя"
						required>
					<input
						type="tel"
						class="form-input"
						placeholder="Телефон"
						required>
					<input
						type="email"
						class="form-input full-width"
						placeholder="Email">
					<textarea
						class="form-input full-width"
						placeholder="Кратко опишите задачу..."
						rows="4"></textarea>
				</div>
				<button
					type="submit"
					class="btn btn-primary"
					style="width: 100%; padding: 16px">
					Отправить заявку
				</button>
			</form> -->
			</div>
		</div>
	</section>
	<footer class="entry-footer">
		<?php lab_mark_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->