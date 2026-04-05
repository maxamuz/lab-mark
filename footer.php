<?php
/**
 * The footer for our theme
 *
 * @package lab-mark
 */
?>

<!-- 11. Footer -->
<footer id="contact">
	<div class="container">
		<div class="footer-grid">
			<div class="footer-col">
				<div class="logo" style="margin-bottom: 20px">
					Лаборатория<span>Маркетинга</span>
				</div>
				<p style="line-height: 1.8; max-width: 300px">
					Создаём надёжные веб-решения для бизнеса любого масштаба.
					Разработка, сопровождение, поддержка.
				</p>
				<div class="social-links">
					<a href="#" class="social-link" aria-label="Telegram">✈</a>
					<a href="#" class="social-link" aria-label="WhatsApp">💬</a>
					<a href="#" class="social-link" aria-label="VK">V</a>
					<a href="#" class="social-link" aria-label="GitHub">⌨</a>
				</div>
			</div>
			<div class="footer-col">
				<h4>Услуги</h4>
				<ul style="line-height: 2.2">
					<li><a href="#services">Разработка сайтов</a></li>
					<li><a href="#services">Техподдержка</a></li>
					<li><a href="#pricing">Цены</a></li>
					<li><a href="#">SEO-оптимизация</a></li>
					<li><a href="#">Хостинг и домены</a></li>
				</ul>
			</div>
			<div class="footer-col">
				<h4>Компания</h4>
				<ul style="line-height: 2.2">
					<li><a href="#about">О нас</a></li>
					<li><a href="#portfolio">Портфолио</a></li>
					<li><a href="#reviews">Отзывы</a></li>
					<li><a href="#blog">Блог</a></li>
					<li><a href="#faq">FAQ</a></li>
				</ul>
			</div>
			<div class="footer-col">
				<h4>Контакты</h4>
				<div class="contact-line">
					<div class="contact-icon">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
							<path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z" />
							<circle cx="12" cy="10" r="3" />
						</svg>
					</div>
					<span>Москва, ул. Примерная, 10, оф. 505</span>
				</div>
				<div class="contact-line">
					<div class="contact-icon">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
							<path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z" />
						</svg>
					</div>
					<a href="tel:+79990000000">+7 (999) 000-00-00</a>
				</div>
				<div class="contact-line">
					<div class="contact-icon">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
							<rect width="20" height="16" x="2" y="4" rx="2" />
							<path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7" />
						</svg>
					</div>
					<a href="mailto:hello@webstudio.ru">hello@webstudio.ru</a>
				</div>
				<div class="map-placeholder" style="margin-top: 15px; padding: 0; overflow: hidden; border: none;">
					<img
						src="https://images.unsplash.com/photo-1524661135-423995f22d0b?w=600&q=80"
						alt="Карта — наш офис"
						loading="lazy"
						style="width: 100%; height: 100%; object-fit: cover; border-radius: 14px;"
					>
				</div>
			</div>
		</div>
		<div class="copyright">
			&copy; <?php echo date( 'Y' ); ?> <?php bloginfo( 'name' ); ?>. Все права защищены. Разработка и техническая поддержка сайтов.
		</div>
	</div>
</footer>

<!-- Модальное окно кейса -->
<div class="modal-overlay" id="caseModal">
	<div class="modal-content">
		<button class="modal-close">&times;</button>
		<div class="modal-image" id="modalImage"></div>
		<div class="modal-body">
			<h3 class="modal-title" id="modalTitle"></h3>
			<p class="modal-description" id="modalDesc"></p>
			<div class="modal-meta">
				<div class="meta-item">
					<h5>Сроки</h5>
					<p id="modalMetaDuration">—</p>
				</div>
				<div class="meta-item">
					<h5>Стек</h5>
					<p id="modalMetaTech">—</p>
				</div>
				<div class="meta-item">
					<h5>Результат</h5>
					<p id="modalMetaResult">—</p>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Уведомление -->
<div id="notification">
	✅ Заявка отправлена! Мы свяжемся с вами.
</div>

<?php wp_footer(); ?>

</body>
</html>
