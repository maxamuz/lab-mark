<?php

/**
 * The front page template file
 *
 * @package lab-mark
 */

get_header();
?>

<!-- 1. Hero -->
<section class="hero">
	<div id="hero-bg"></div>
	<div class="container">
		<div class="hero-content">
			<div class="hero-text">
				<h1 class="hero-title">
					Создаем сайты, которые <br />
					<span class="typing"></span>
				</h1>
				<p>
					Создаём индивидуальные веб-решения, которые работают на рост
					вашего бизнеса. Чистый код, современный дизайн и надёжность на
					каждом этапе.
				</p>
				<div class="hero-buttons">
					<a href="#cta" class="btn btn-primary">Рассчитать проект</a>
					<a href="#pricing" class="btn btn-outline">Смотреть цены</a>
				</div>
			</div>
			<div class="hero-visual">
				<div class="code-container">
					<div class="code-block animated-scroll">
						<span class="code-line"><span class="cl-purple">const</span> <span class="cl-blue">project</span> = {</span>
						<span class="code-line">&nbsp;&nbsp;type: <span class="cl-green">'Custom Development'</span>,</span>
						<span class="code-line">&nbsp;&nbsp;quality: <span class="cl-green">'Premium'</span>,</span>
						<span class="code-line">&nbsp;&nbsp;support: <span class="cl-green">'24/7'</span>,</span>
						<span class="code-line">&nbsp;&nbsp;stack: [<span class="cl-yellow">'React'</span>, <span class="cl-yellow">'Node.js'</span>]</span>
						<span class="code-line">};</span>

						<span class="code-line"><span class="cl-purple">const</span> <span class="cl-blue">features</span> = [</span>
						<span class="code-line">&nbsp;&nbsp;<span class="cl-green">'Authentication'</span>,</span>
						<span class="code-line">&nbsp;&nbsp;<span class="cl-green">'Real-time Updates'</span>,</span>
						<span class="code-line">&nbsp;&nbsp;<span class="cl-green">'Data Encryption'</span></span>
						<span class="code-line">];</span>

						<span class="code-line"><span class="cl-purple">const</span> <span class="cl-blue">config</span> = {</span>
						<span class="code-line">&nbsp;&nbsp;debug: <span class="cl-blue">true</span>,</span>
						<span class="code-line">&nbsp;&nbsp;port: <span class="cl-orange">3000</span>,</span>
						<span class="code-line">&nbsp;&nbsp;ssl: <span class="cl-blue">false</span></span>
						<span class="code-line">};</span>

						<span class="code-line"><span class="cl-purple">function</span> <span class="cl-blue">initApp</span><span class="cl-blue">()</span> {</span>
						<span class="code-line">&nbsp;&nbsp;<span class="cl-comment">// Initialize core modules</span></span>
						<span class="code-line">&nbsp;&nbsp;console.log(<span class="cl-green">'App started'</span>);</span>
						<span class="code-line">}</span>

						<span class="code-line"><span class="cl-purple">const</span> <span class="cl-blue">project</span> = {</span>
						<span class="code-line">&nbsp;&nbsp;type: <span class="cl-green">'Custom Development'</span>,</span>
						<span class="code-line">&nbsp;&nbsp;quality: <span class="cl-green">'Premium'</span>,</span>
						<span class="code-line">&nbsp;&nbsp;support: <span class="cl-green">'24/7'</span>,</span>
						<span class="code-line">&nbsp;&nbsp;stack: [<span class="cl-yellow">'React'</span>, <span class="cl-yellow">'Node.js'</span>]</span>
						<span class="code-line">};</span>

						<span class="code-line"><span class="cl-purple">const</span> <span class="cl-blue">features</span> = [</span>
						<span class="code-line">&nbsp;&nbsp;<span class="cl-green">'Authentication'</span>,</span>
						<span class="code-line">&nbsp;&nbsp;<span class="cl-green">'Real-time Updates'</span>,</span>
						<span class="code-line">&nbsp;&nbsp;<span class="cl-green">'Data Encryption'</span></span>
						<span class="code-line">];</span>

						<span class="code-line"><span class="cl-purple">const</span> <span class="cl-blue">config</span> = {</span>
						<span class="code-line">&nbsp;&nbsp;debug: <span class="cl-blue">true</span>,</span>
						<span class="code-line">&nbsp;&nbsp;port: <span class="cl-orange">3000</span>,</span>
						<span class="code-line">&nbsp;&nbsp;ssl: <span class="cl-blue">false</span></span>
						<span class="code-line">};</span>

						<span class="code-line"><span class="cl-purple">function</span> <span class="cl-blue">initApp</span><span class="cl-blue">()</span> {</span>
						<span class="code-line">&nbsp;&nbsp;<span class="cl-comment">// Initialize core modules</span></span>
						<span class="code-line">&nbsp;&nbsp;console.log(<span class="cl-green">'App started'</span>);</span>
						<span class="code-line">}</span>


						<span class="code-line"><span class="cl-purple">export default</span> { project, features, config, initApp };</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- 2. USP -->
<section class="usp section-padding">
	<div class="container">
		<div class="section-header">
			<h2>Почему выбирают нас</h2>
			<p>
				Мы не используем шаблоны. Каждый проект — уникальная разработка под
				задачи клиента.
			</p>
		</div>
		<div class="usp-grid">
			<div class="usp-card animate">
				<div class="usp-icon">
					<svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
						<polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2" />
					</svg>
				</div>
				<h3>Опыт и экспертиза</h3>
				<p>
					Более 5 лет на рынке. Реализовали 120+ проектов различной
					сложности.
				</p>
			</div>
			<div class="usp-card animate">
				<div class="usp-icon">
					<svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
						<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
					</svg>
				</div>
				<h3>Гарантия качества</h3>
				<p>
					12 месяцев гарантии на код. Тестирование на всех устройствах и в
					браузерах.
				</p>
			</div>
			<div class="usp-card animate">
				<div class="usp-icon">
					<svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
						<circle cx="12" cy="12" r="10" />
						<polyline points="12 6 12 12 16 14" />
					</svg>
				</div>
				<h3>Соблюдение сроков</h3>
				<p>
					Чёткое планирование и прозрачные этапы. Вы всегда знаете, что
					происходит с проектом.
				</p>
			</div>
			<div class="usp-card animate">
				<div class="usp-icon">
					<svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
						<path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z" />
					</svg>
				</div>
				<h3>Поддержка 24/7</h3>
				<p>
					Всегда на связи. Оперативно решаем любые вопросы и помогаем с
					развитием проекта.
				</p>
			</div>
		</div>
	</div>
</section>

<!-- 3. Услуги -->
<section class="services section-padding" id="services">
	<div class="container">
		<div class="section-header">
			<h2>Наши услуги</h2>
			<p>Полный цикл разработки: от идеи до запуска и поддержки</p>
		</div>
		<div class="services-grid">
			<div class="service-column highlight animate">
				<h3>Разработка <span class="badge">Full-stack</span></h3>
				<ul class="service-list">
					<li>
						<a href="/services/razrabotka-lendingov">Лендинги</a>
						<span class="arrow-icon">
							<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
								<title>Arrow Circle Right Outline Rounded SVG Icon</title>
								<path fill="#00a3ff" d="m13.412 12.5l-1.766 1.766q-.14.14-.13.334q.009.194.15.335q.14.14.347.14t.34-.14l2.37-2.37q.243-.242.243-.565t-.243-.565l-2.388-2.389q-.14-.14-.335-.14t-.334.14t-.141.348t.14.34l1.747 1.766H9q-.213 0-.356.144t-.144.357t.144.356T9 12.5zM12.003 21q-1.866 0-3.51-.708q-1.643-.709-2.859-1.924t-1.925-2.856T3 12.003t.709-3.51Q4.417 6.85 5.63 5.634t2.857-1.925T11.997 3t3.51.709q1.643.708 2.859 1.922t1.925 2.857t.709 3.509t-.708 3.51t-1.924 2.859t-2.856 1.925t-3.509.709M12 20q3.35 0 5.675-2.325T20 12t-2.325-5.675T12 4T6.325 6.325T4 12t2.325 5.675T12 20m0-8" />
							</svg>
						</span>
					</li>
					<li>
						<a href="/services/razrabotka-korporativnyh-sajtov">Корпоративные сайты</a>
						<span class="arrow-icon">
							<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
								<title>Arrow Circle Right Outline Rounded SVG Icon</title>
								<path fill="#00a3ff" d="m13.412 12.5l-1.766 1.766q-.14.14-.13.334q.009.194.15.335q.14.14.347.14t.34-.14l2.37-2.37q.243-.242.243-.565t-.243-.565l-2.388-2.389q-.14-.14-.335-.14t-.334.14t-.141.348t.14.34l1.747 1.766H9q-.213 0-.356.144t-.144.357t.144.356T9 12.5zM12.003 21q-1.866 0-3.51-.708q-1.643-.709-2.859-1.924t-1.925-2.856T3 12.003t.709-3.51Q4.417 6.85 5.63 5.634t2.857-1.925T11.997 3t3.51.709q1.643.708 2.859 1.922t1.925 2.857t.709 3.509t-.708 3.51t-1.924 2.859t-2.856 1.925t-3.509.709M12 20q3.35 0 5.675-2.325T20 12t-2.325-5.675T12 4T6.325 6.325T4 12t2.325 5.675T12 20m0-8" />
							</svg>
						</span>
					</li>
					<li>
						<a href="/services/razrabotka-internet-magazinov">Интернет-магазины</a>
						<span class="arrow-icon">
							<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
								<title>Arrow Circle Right Outline Rounded SVG Icon</title>
								<path fill="#00a3ff" d="m13.412 12.5l-1.766 1.766q-.14.14-.13.334q.009.194.15.335q.14.14.347.14t.34-.14l2.37-2.37q.243-.242.243-.565t-.243-.565l-2.388-2.389q-.14-.14-.335-.14t-.334.14t-.141.348t.14.34l1.747 1.766H9q-.213 0-.356.144t-.144.357t.144.356T9 12.5zM12.003 21q-1.866 0-3.51-.708q-1.643-.709-2.859-1.924t-1.925-2.856T3 12.003t.709-3.51Q4.417 6.85 5.63 5.634t2.857-1.925T11.997 3t3.51.709q1.643.708 2.859 1.922t1.925 2.857t.709 3.509t-.708 3.51t-1.924 2.859t-2.856 1.925t-3.509.709M12 20q3.35 0 5.675-2.325T20 12t-2.325-5.675T12 4T6.325 6.325T4 12t2.325 5.675T12 20m0-8" />
							</svg>
						</span>
					</li>
					<!-- <li>
						<a href="/services/seo-optimizacziya">SEO-оптимизация и продвижение</a>
						<span class="arrow-icon">→</span>
					</li> -->
					<li>
						<a href="/services/cotirating">Напонение контентом (копирайтинг)</a>
						<span class="arrow-icon">
							<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
								<title>Arrow Circle Right Outline Rounded SVG Icon</title>
								<path fill="#00a3ff" d="m13.412 12.5l-1.766 1.766q-.14.14-.13.334q.009.194.15.335q.14.14.347.14t.34-.14l2.37-2.37q.243-.242.243-.565t-.243-.565l-2.388-2.389q-.14-.14-.335-.14t-.334.14t-.141.348t.14.34l1.747 1.766H9q-.213 0-.356.144t-.144.357t.144.356T9 12.5zM12.003 21q-1.866 0-3.51-.708q-1.643-.709-2.859-1.924t-1.925-2.856T3 12.003t.709-3.51Q4.417 6.85 5.63 5.634t2.857-1.925T11.997 3t3.51.709q1.643.708 2.859 1.922t1.925 2.857t.709 3.509t-.708 3.51t-1.924 2.859t-2.856 1.925t-3.509.709M12 20q3.35 0 5.675-2.325T20 12t-2.325-5.675T12 4T6.325 6.325T4 12t2.325 5.675T12 20m0-8" />
							</svg>
						</span>
					</li>
					<li>
						<a href="/services/tehnicheskij-audit-sajtov">Технический аудит сайтов</a>
						<span class="arrow-icon">
							<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
								<title>Arrow Circle Right Outline Rounded SVG Icon</title>
								<path fill="#00a3ff" d="m13.412 12.5l-1.766 1.766q-.14.14-.13.334q.009.194.15.335q.14.14.347.14t.34-.14l2.37-2.37q.243-.242.243-.565t-.243-.565l-2.388-2.389q-.14-.14-.335-.14t-.334.14t-.141.348t.14.34l1.747 1.766H9q-.213 0-.356.144t-.144.357t.144.356T9 12.5zM12.003 21q-1.866 0-3.51-.708q-1.643-.709-2.859-1.924t-1.925-2.856T3 12.003t.709-3.51Q4.417 6.85 5.63 5.634t2.857-1.925T11.997 3t3.51.709q1.643.708 2.859 1.922t1.925 2.857t.709 3.509t-.708 3.51t-1.924 2.859t-2.856 1.925t-3.509.709M12 20q3.35 0 5.675-2.325T20 12t-2.325-5.675T12 4T6.325 6.325T4 12t2.325 5.675T12 20m0-8" />
							</svg>
						</span>
					</li>
					<!-- <li>
						<a href="/services/razrabotka-veb-servisov-i-crm">Веб-сервисы и CRM</a>
						<span class="arrow-icon">→</span>
					</li> -->
					<!-- <li>
						<a href="/services/razrabotka-i-nastrojka-api-integraczij">API-интеграции</a>
						<span class="arrow-icon">→</span>
					</li> -->
				</ul>
			</div>
			<div class="service-column highlight animate">
				<h3>Техподдержка <span class="badge">Сопровождение</span></h3>
				<ul class="service-list">
					<li>
						<a href="/services/obnovlenie-kontenta">Обновление контента</a>
						<span class="arrow-icon">
							<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
								<title>Arrow Circle Right Outline Rounded SVG Icon</title>
								<path fill="#00a3ff" d="m13.412 12.5l-1.766 1.766q-.14.14-.13.334q.009.194.15.335q.14.14.347.14t.34-.14l2.37-2.37q.243-.242.243-.565t-.243-.565l-2.388-2.389q-.14-.14-.335-.14t-.334.14t-.141.348t.14.34l1.747 1.766H9q-.213 0-.356.144t-.144.357t.144.356T9 12.5zM12.003 21q-1.866 0-3.51-.708q-1.643-.709-2.859-1.924t-1.925-2.856T3 12.003t.709-3.51Q4.417 6.85 5.63 5.634t2.857-1.925T11.997 3t3.51.709q1.643.708 2.859 1.922t1.925 2.857t.709 3.509t-.708 3.51t-1.924 2.859t-2.856 1.925t-3.509.709M12 20q3.35 0 5.675-2.325T20 12t-2.325-5.675T12 4T6.325 6.325T4 12t2.325 5.675T12 20m0-8" />
							</svg>
						</span>
					</li>
					<!-- <li>
						<a href="/services/monitoring-bezopasnosti">Мониторинг безопасности</a>
						<span class="arrow-icon">→</span>
					</li> -->
					<!-- <li>
						<a href="/services/optimizacziya-skorosti-zagruzki">Оптимизация скорости</a>
						<span class="arrow-icon">→</span>
					</li> -->
					<li>
						<a href="/services/dorabotka-funkczionala">Доработка функционала</a>
						<span class="arrow-icon">
							<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
								<title>Arrow Circle Right Outline Rounded SVG Icon</title>
								<path fill="#00a3ff" d="m13.412 12.5l-1.766 1.766q-.14.14-.13.334q.009.194.15.335q.14.14.347.14t.34-.14l2.37-2.37q.243-.242.243-.565t-.243-.565l-2.388-2.389q-.14-.14-.335-.14t-.334.14t-.141.348t.14.34l1.747 1.766H9q-.213 0-.356.144t-.144.357t.144.356T9 12.5zM12.003 21q-1.866 0-3.51-.708q-1.643-.709-2.859-1.924t-1.925-2.856T3 12.003t.709-3.51Q4.417 6.85 5.63 5.634t2.857-1.925T11.997 3t3.51.709q1.643.708 2.859 1.922t1.925 2.857t.709 3.509t-.708 3.51t-1.924 2.859t-2.856 1.925t-3.509.709M12 20q3.35 0 5.675-2.325T20 12t-2.325-5.675T12 4T6.325 6.325T4 12t2.325 5.675T12 20m0-8" />
							</svg>
						</span>
					</li>
					<li>
						<a href="/services/tehpodderzhka-sajtov-na-drupal">Техподдержка сайтов Drupal 7 и выше</a>
						<span class="arrow-icon">
							<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
								<title>Arrow Circle Right Outline Rounded SVG Icon</title>
								<path fill="#00a3ff" d="m13.412 12.5l-1.766 1.766q-.14.14-.13.334q.009.194.15.335q.14.14.347.14t.34-.14l2.37-2.37q.243-.242.243-.565t-.243-.565l-2.388-2.389q-.14-.14-.335-.14t-.334.14t-.141.348t.14.34l1.747 1.766H9q-.213 0-.356.144t-.144.357t.144.356T9 12.5zM12.003 21q-1.866 0-3.51-.708q-1.643-.709-2.859-1.924t-1.925-2.856T3 12.003t.709-3.51Q4.417 6.85 5.63 5.634t2.857-1.925T11.997 3t3.51.709q1.643.708 2.859 1.922t1.925 2.857t.709 3.509t-.708 3.51t-1.924 2.859t-2.856 1.925t-3.509.709M12 20q3.35 0 5.675-2.325T20 12t-2.325-5.675T12 4T6.325 6.325T4 12t2.325 5.675T12 20m0-8" />
							</svg>
						</span>
					</li>
					<li>
						<a href="/services/tehpodderzhka-sajtov-na-wordpress">Техподдержка сайтов WordPress</a>
						<span class="arrow-icon">
							<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
								<title>Arrow Circle Right Outline Rounded SVG Icon</title>
								<path fill="#00a3ff" d="m13.412 12.5l-1.766 1.766q-.14.14-.13.334q.009.194.15.335q.14.14.347.14t.34-.14l2.37-2.37q.243-.242.243-.565t-.243-.565l-2.388-2.389q-.14-.14-.335-.14t-.334.14t-.141.348t.14.34l1.747 1.766H9q-.213 0-.356.144t-.144.357t.144.356T9 12.5zM12.003 21q-1.866 0-3.51-.708q-1.643-.709-2.859-1.924t-1.925-2.856T3 12.003t.709-3.51Q4.417 6.85 5.63 5.634t2.857-1.925T11.997 3t3.51.709q1.643.708 2.859 1.922t1.925 2.857t.709 3.509t-.708 3.51t-1.924 2.859t-2.856 1.925t-3.509.709M12 20q3.35 0 5.675-2.325T20 12t-2.325-5.675T12 4T6.325 6.325T4 12t2.325 5.675T12 20m0-8" />
							</svg>
						</span>
					</li>
					<li>
						<a href="/services/tehpodderzhka-sajtov-na-1s-bitriks">Техподдержка сайтов 1С Битрикс</a>
						<span class="arrow-icon">
							<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
								<title>Arrow Circle Right Outline Rounded SVG Icon</title>
								<path fill="#00a3ff" d="m13.412 12.5l-1.766 1.766q-.14.14-.13.334q.009.194.15.335q.14.14.347.14t.34-.14l2.37-2.37q.243-.242.243-.565t-.243-.565l-2.388-2.389q-.14-.14-.335-.14t-.334.14t-.141.348t.14.34l1.747 1.766H9q-.213 0-.356.144t-.144.357t.144.356T9 12.5zM12.003 21q-1.866 0-3.51-.708q-1.643-.709-2.859-1.924t-1.925-2.856T3 12.003t.709-3.51Q4.417 6.85 5.63 5.634t2.857-1.925T11.997 3t3.51.709q1.643.708 2.859 1.922t1.925 2.857t.709 3.509t-.708 3.51t-1.924 2.859t-2.856 1.925t-3.509.709M12 20q3.35 0 5.675-2.325T20 12t-2.325-5.675T12 4T6.325 6.325T4 12t2.325 5.675T12 20m0-8" />
							</svg>
						</span>
					</li>
				</ul>
			</div>
		</div>
	</div>
</section>

<!-- 4. Цены -->
<section class="pricing section-padding" id="pricing">
	<div class="container">
		<div class="section-header">
			<h2>Стоимость разработки</h2>
			<p>
				Прозрачное ценообразование без скрытых платежей. Выберите подходящий
				пакет или получите индивидуальное предложение.
			</p>
		</div>
		<div class="pricing-grid">
			<div class="pricing-card animate">
				<div class="pricing-header">
					<h3 class="pricing-name">Старт</h3>
					<p class="pricing-description">
						Идеально для лендингов и небольших проектов
					</p>
					<div class="pricing-amount">от 50 000 ₽</div>
					<div class="pricing-period">разовая оплата</div>
				</div>
				<div class="pricing-features">
					<div class="pricing-feature included">
						<span class="feature-check yes">✓</span><span>Уникальный дизайн</span>
					</div>
					<div class="pricing-feature included">
						<span class="feature-check yes">✓</span><span>Адаптивная вёрстка</span>
					</div>
					<div class="pricing-feature included">
						<span class="feature-check yes">✓</span><span>Базовая SEO-оптимизация</span>
					</div>
					<div class="pricing-feature included">
						<span class="feature-check yes">✓</span><span>Форма обратной связи</span>
					</div>
					<div class="pricing-feature included">
						<span class="feature-check yes">✓</span><span>Срок: 2-3 недели</span>
					</div>
					<div class="pricing-feature">
						<span class="feature-check no">—</span><span>CMS система</span>
					</div>
					<div class="pricing-feature">
						<span class="feature-check no">—</span><span>Техподдержка</span>
					</div>
				</div>
				<button class="pricing-button secondary" onclick="scrollToContact('Старт')">
					Выбрать
				</button>
			</div>
			<div class="pricing-card popular animate">
				<div class="popular-badge">Популярный</div>
				<div class="pricing-header">
					<h3 class="pricing-name">Бизнес</h3>
					<p class="pricing-description">
						Для корпоративных сайтов и интернет-магазинов
					</p>
					<div class="pricing-amount">от 120 000 ₽</div>
					<div class="pricing-period">разовая оплата</div>
				</div>
				<div class="pricing-features">
					<div class="pricing-feature included">
						<span class="feature-check yes">✓</span><span>Всё из пакета «Старт»</span>
					</div>
					<div class="pricing-feature included">
						<span class="feature-check yes">✓</span><span>CMS (WordPress/Bitrix)</span>
					</div>
					<div class="pricing-feature included">
						<span class="feature-check yes">✓</span><span>Интеграция с CRM</span>
					</div>
					<div class="pricing-feature included">
						<span class="feature-check yes">✓</span><span>Мультиязычность</span>
					</div>
					<div class="pricing-feature included">
						<span class="feature-check yes">✓</span><span>Срок: 4-6 недель</span>
					</div>
					<div class="pricing-feature included">
						<span class="feature-check yes">✓</span><span>1 месяц поддержки</span>
					</div>
					<div class="pricing-feature">
						<span class="feature-check no">—</span><span>Сложный функционал</span>
					</div>
				</div>
				<button class="pricing-button primary" onclick="scrollToContact('Бизнес')">
					Выбрать
				</button>
			</div>
			<div class="pricing-card animate">
				<div class="pricing-header">
					<h3 class="pricing-name">Premium</h3>
					<p class="pricing-description">
						Сложные веб-сервисы и высоконагруженные проекты
					</p>
					<div class="pricing-amount">от 250 000 ₽</div>
					<div class="pricing-period">разовая оплата</div>
				</div>
				<div class="pricing-features">
					<div class="pricing-feature included">
						<span class="feature-check yes">✓</span><span>Всё из пакета «Бизнес»</span>
					</div>
					<div class="pricing-feature included">
						<span class="feature-check yes">✓</span><span>Индивидуальная разработка</span>
					</div>
					<!-- <div class="pricing-feature included">
						<span class="feature-check yes">✓</span><span>Сложные интеграции API</span>
					</div> -->
					<div class="pricing-feature included">
						<span class="feature-check yes">✓</span><span>Сложный функционал</span>
					</div>
					<div class="pricing-feature included">
						<span class="feature-check yes">✓</span><span>Срок: от 8 недель</span>
					</div>
					<div class="pricing-feature included">
						<span class="feature-check yes">✓</span><span>3 месяца поддержки</span>
					</div>
					<div class="pricing-feature included">
						<span class="feature-check yes">✓</span><span>Приоритетная поддержка</span>
					</div>
				</div>
				<button class="pricing-button secondary" onclick="scrollToContact('Premium')">
					Выбрать
				</button>
			</div>
		</div>
		<div class="pricing-note">
			<p>
				💡 Нужен индивидуальный расчёт?
				<a href="#cta">Обсудите проект с нами</a>
			</p>
			<p style="margin-top: 10px; font-size: 0.85rem">
				Также предлагаем <strong>ежемесячную техподдержку</strong> от 15 000
				₽/мес
			</p>
		</div>
	</div>
</section>

<!-- 5. ПОРТФОЛИО -->
<section class="portfolio section-padding" id="portfolio">
	<div class="container">
		<div class="section-header">
			<h2>Наши проекты</h2>
			<p>Решения, которые приносят прибыль клиентам</p>
		</div>

		<?php
		// Получаем все категории проектов для фильтров.
		$project_categories = get_terms(array(
			'taxonomy'   => 'project_category',
			'hide_empty' => true,
		));
		?>

		<?php if ($project_categories) : ?>
			<!-- Фильтры -->
			<div class="portfolio-filters">
				<button class="filter-btn active" data-filter="all">
					Все проекты
				</button>
				<?php foreach ($project_categories as $cat) : ?>
					<button class="filter-btn" data-filter="<?php echo esc_attr($cat->slug); ?>">
						<?php echo esc_html($cat->name); ?>
					</button>
				<?php endforeach; ?>
			</div>
		<?php endif; ?>

		<?php
		// Запрос проектов.
		$projects_query = new WP_Query(array(
			'post_type'      => 'project',
			'posts_per_page' => -1, // Получаем все для фильтрации, но будем показывать только первые 6
			'orderby'        => 'meta_value_num',
			'meta_key'       => '_labmark_sort_order',
			'order'          => 'ASC',
		));

		// Счётчик для карточек
		$card_counter = 0;
		?>

		<?php if ($projects_query->have_posts()) : ?>
			<!-- Сетка проектов -->
			<div class="portfolio-grid" id="portfolioGrid">
				<?php while ($projects_query->have_posts()) : $projects_query->the_post();
					$card_counter++; // Увеличиваем счётчик перед каждой карточкой

					// Получаем данные мета-полей.
					$case_description = get_post_meta(get_the_ID(), '_labmark_case_description', true);
					$project_duration = get_post_meta(get_the_ID(), '_labmark_project_duration', true);
					$project_result   = get_post_meta(get_the_ID(), '_labmark_project_result', true);
					$preview_url      = get_post_meta(get_the_ID(), '_labmark_preview_url', true);
					$bg_gradient      = get_post_meta(get_the_ID(), '_labmark_bg_gradient', true);

					// ✅ Получаем ВСЕ категории проекта для фильтра (через пробел)
					$cats = get_the_terms(get_the_ID(), 'project_category');
					$category_slugs = '';
					if ($cats && ! is_wp_error($cats)) {
						$slugs = array_map(function ($cat) {
							return strtolower($cat->slug);
						}, $cats);
						$category_slugs = implode(' ', $slugs);
					}

					// Получаем метки (для project-tags).
					$tags = get_the_terms(get_the_ID(), 'project_tag');

					// Изображение.
					$img_src = '';
					if (has_post_thumbnail()) {
						$img_src = get_the_post_thumbnail_url(get_the_ID(), 'large');
					} elseif ($preview_url) {
						$img_src = esc_url($preview_url);
					}

					// Определяем класс для скрытия карточки
					$additional_class = ($card_counter > 9) ? ' hidden-card' : '';

				?>
					<!-- Оборачиваем всю карточку в ссылку -->
					<a href="<?php echo esc_url(get_permalink()); ?>" class="project-card-link<?php echo esc_attr($additional_class); ?>"
						data-category="<?php echo esc_attr($category_slugs); ?>"
						data-title="<?php echo esc_attr(get_the_title()); ?>"
						data-desc="<?php echo esc_attr($case_description ? $case_description : get_the_excerpt()); ?>"
						data-tags="<?php if ($tags && ! is_wp_error($tags)) {
										echo esc_attr(implode(', ', wp_list_pluck($tags, 'name')));
									} ?>"
						data-bg="<?php echo esc_attr($bg_gradient ? $bg_gradient : 'linear-gradient(135deg, #0a2540, #0e3254, #050d1a)'); ?>"
						data-duration="<?php echo esc_attr($project_duration ? $project_duration : '—'); ?>"
						data-result="<?php echo esc_attr($project_result ? $project_result : '—'); ?>"
						data-permalink="<?php echo esc_url(get_permalink()); ?>">
						<div class="project-card">
							<div class="project-img">
								<?php if ($img_src) : ?>
									<img
										src="<?php echo esc_url($img_src); ?>"
										alt="<?php echo esc_attr(get_the_title()); ?>"
										style="width: 100%; height: 245px; object-fit: cover">
								<?php else : ?>
									<div class="mockup" style="background: <?php echo esc_attr($bg_gradient ? $bg_gradient : 'var(--bg-card)'); ?>;">
										🖥
									</div>
								<?php endif; ?>
								<div class="project-overlay">

								</div>
							</div>
							<div class="project-info">
								<h4><?php echo esc_html(get_the_title()); ?></h4>
								<p><?php echo esc_html(get_the_excerpt()); ?></p>
								<?php if ($tags && ! is_wp_error($tags)) : ?>
									<div class="project-tags">
										<?php foreach ($tags as $tag) : ?>
											<span><?php echo esc_html($tag->name); ?></span>
										<?php endforeach; ?>
									</div>
								<?php endif; ?>
								<span class="btn btn-primary">Смотреть кейс</span>
							</div>

						</div>
					</a>
				<?php endwhile; ?>
			</div>
			<?php wp_reset_postdata(); ?>
		<?php else : ?>
			<p style="text-align: center; color: var(--text-muted);">
				<?php esc_html_e('Проекты ещё не добавлены. Загляните позже!', 'lab-mark'); ?>
			</p>
		<?php endif; ?>
		<!-- Добавляем атрибут data-total для JavaScript -->
		<a href="#" class="button-open" style="display: block;" data-total="<?php echo esc_attr($projects_query->post_count); ?>">Раскрыть все проекты</a>
		<a href="#" class="button-close" style="display:none;">Свернуть проекты</a>
	</div>
</section>

<!-- 6. О студии -->
<section class="about section-padding" id="about">
	<div class="container">
		<div class="about-content">
			<div class="about-img animate">
				<img
					src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/team.jpg'); ?>"
					alt="Наша команда за работой"
					style="width: 100%; height: 100%; object-fit: cover; border-radius: 20px;">
			</div>
			<div class="about-text animate">
				<h2>Больше, чем просто разработчики</h2>
				<p>
					Мы — команда инженеров и дизайнеров, увлечённых технологиями. Наш
					подход строится на прозрачности процессов и партнёрских отношениях
					с клиентом.
				</p>
				<p>
					Мы не просто пишем код — мы решаем бизнес-задачи. Перед стартом
					проводим аудит потребностей, чтобы предложить наиболее эффективное
					техническое решение.
				</p>
				<div class="stats-row">
					<div class="stat-item">
						<h4>120+</h4>
						<span>Проектов запущено</span>
					</div>
					<div class="stat-item">
						<h4>15</h4>
						<span>Специалистов в штате</span>
					</div>
					<div class="stat-item">
						<h4>98%</h4>
						<span>Клиентов довольны</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- 6.5 Наш стек -->
<section class="tech-stack-section section-padding" id="tech-stack">
	<div class="container">
		<div class="section-header">
			<h2>Наш стек</h2>
			<p>Мы используем только проверенные и эффективные технологии.</p>
		</div>

		<div class="tech-grid">
			<div class="tech-item animate" data-level="expert">
				<div class="tech-icon">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
						<path d="M12 2L2 7l10 5 10-5-10-5z" />
						<path d="M2 17l10 5 10-5" />
						<path d="M2 12l10 5 10-5" />
					</svg>
				</div>
				<div class="tech-info">
					<span class="tech-name">WordPress</span>
					<div class="skill-bar">
						<div class="skill-fill" data-width="100"></div>
					</div>
				</div>
			</div>

			<div class="tech-item animate" data-level="expert">
				<div class="tech-icon">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
						<polyline points="16 18 22 12 16 6" />
						<polyline points="8 6 2 12 8 18" />
					</svg>
				</div>
				<div class="tech-info">
					<span class="tech-name">1С Битрикс</span>
					<div class="skill-bar">
						<div class="skill-fill" data-width="95"></div>
					</div>
				</div>
			</div>

			<div class="tech-item animate" data-level="expert">
				<div class="tech-icon">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
						<circle cx="12" cy="12" r="2" />
						<path d="M12 2a10 10 0 0 0-10 10c0 5.25 10 10 10 10s10-4.75 10-10A10 10 0 0 0 12 2z" />
					</svg>
				</div>
				<div class="tech-info">
					<span class="tech-name">Drupal</span>
					<div class="skill-bar">
						<div class="skill-fill" data-width="90"></div>
					</div>
				</div>
			</div>

			<div class="tech-item animate" data-level="advanced">
				<div class="tech-icon">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
						<path d="M12 8l-4 7h8l-4-7z" />
					</svg>
				</div>
				<div class="tech-info">
					<span class="tech-name">JavaScrit</span>
					<div class="skill-bar">
						<div class="skill-fill" data-width="85"></div>
					</div>
				</div>
			</div>

			<div class="tech-item animate" data-level="advanced">
				<div class="tech-icon">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
						<path d="M5 5.5A6.5 6.5 0 0 1 11.5 12c0 3.6-2.4 6-5.5 7" />
						<path d="M19 5.5A6.5 6.5 0 0 0 12.5 12c0 3.6 2.4 6 5.5 7" />
						<line x1="12" y1="12" x2="12" y2="22" />
					</svg>
				</div>
				<div class="tech-info">
					<span class="tech-name">CSS</span>
					<div class="skill-bar">
						<div class="skill-fill" data-width="80"></div>
					</div>
				</div>
			</div>

			<div class="tech-item animate" data-level="advanced">
				<div class="tech-icon">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
						<path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2z" />
						<path d="M8 14s1.5 2 4 2 4-2 4-2" />
						<line x1="9" y1="9" x2="9.01" y2="9" />
						<line x1="15" y1="9" x2="15.01" y2="9" />
					</svg>
				</div>
				<div class="tech-info">
					<span class="tech-name">HTML</span>
					<div class="skill-bar">
						<div class="skill-fill" data-width="75"></div>
					</div>
				</div>
			</div>

			<div class="tech-item animate" data-level="advanced">
				<div class="tech-icon">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
						<path d="M3 3v18h18" />
						<path d="M18.7 8l-5.1 5.2-2.8-2.7L7 14.3" />
					</svg>
				</div>
				<div class="tech-info">
					<span class="tech-name">PHP</span>
					<div class="skill-bar">
						<div class="skill-fill" data-width="90"></div>
					</div>
				</div>
			</div>

			<div class="tech-item animate" data-level="advanced">
				<div class="tech-icon">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
						<circle cx="12" cy="12" r="10" />
						<path d="M12 6v6l4 2" />
					</svg>
				</div>
				<div class="tech-info">
					<span class="tech-name">Я.Метрика</span>
					<div class="skill-bar">
						<div class="skill-fill" data-width="85"></div>
					</div>
				</div>
			</div>

			<div class="tech-item animate" data-level="advanced">
				<div class="tech-icon">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
						<rect x="3" y="3" width="7" height="7" />
						<rect x="14" y="3" width="7" height="7" />
						<rect x="14" y="14" width="7" height="7" />
						<rect x="3" y="14" width="7" height="7" />
					</svg>
				</div>
				<div class="tech-info">
					<span class="tech-name">Google Tag Manager</span>
					<div class="skill-bar">
						<div class="skill-fill" data-width="80"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- 6.6 Процесс работы -->
<section class="process-section section-padding" id="process">
	<div class="container">
		<div class="section-header">
			<h2>Процесс работы</h2>
			<p>Прозрачные этапы и чёткие сроки реализации.</p>
		</div>

		<div class="timeline">
			<div class="timeline-item animate">
				<div class="timeline-dot"></div>
				<div class="timeline-content">
					<span class="timeline-step">Этап 01</span>
					<h3>Аналитика и ТЗ</h3>
					<p>
						Изучаем ваш бизнес, конкурентов и целевую аудиторию. Формируем
						подробное техническое задание.
					</p>
					<span class="timeline-duration">1–2 недели</span>
				</div>
			</div>

			<div class="timeline-item animate">
				<div class="timeline-dot"></div>
				<div class="timeline-content">
					<span class="timeline-step">Этап 02</span>
					<h3>Проектирование и UI/UX</h3>
					<p>
						Создаём прототипы и современный дизайн, ориентированный на
						пользователя и конверсию.
					</p>
					<span class="timeline-duration">2–3 недели</span>
				</div>
			</div>

			<div class="timeline-item animate">
				<div class="timeline-dot"></div>
				<div class="timeline-content">
					<span class="timeline-step">Этап 03</span>
					<h3>Разработка и интеграция</h3>
					<p>
						Вёрстка, программирование функционала и интеграция с внешними
						сервисами.
					</p>
					<span class="timeline-duration">4–8 недель</span>
				</div>
			</div>

			<div class="timeline-item animate">
				<div class="timeline-dot"></div>
				<div class="timeline-content">
					<span class="timeline-step">Этап 04</span>
					<h3>Тестирование и QA</h3>
					<p>
						Проверка работоспособности во всех браузерах и на всех
						устройствах, исправление ошибок.
					</p>
					<span class="timeline-duration">1 неделя</span>
				</div>
			</div>

			<div class="timeline-item animate">
				<div class="timeline-dot"></div>
				<div class="timeline-content">
					<span class="timeline-step">Этап 05</span>
					<h3>Запуск и поддержка</h3>
					<p>
						Перенос на боевой хостинг, обучение персонала и дальнейшее
						сопровождение проекта.
					</p>
					<span class="timeline-duration">Пожизненно</span>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- 7. Отзывы -->
<section class="testimonials section-padding" id="reviews">
	<div class="container">
		<div class="section-header">
			<h2>Что говорят клиенты</h2>
			<p>Долгосрочное сотрудничество — наша цель</p>
		</div>
		<div class="reviews-grid">
			<div class="review-card animate">
				<div class="review-stars">★★★★★</div>
				<p class="review-text">
					«Ребята сделали невозможное: перенесли нашу сложную CRM на новый
					движок без потери данных. Техподдержка реагирует моментально.»
				</p>
				<div class="review-author">
					<div class="author-avatar">АП</div>
					<div class="author-info">
						<h5>Алексей Петров</h5>
						<span>CTO, LogisticGroup</span>
					</div>
				</div>
			</div>
			<div class="review-card animate">
				<div class="review-stars">★★★★★</div>
				<p class="review-text">
					«Заказывали интернет-магазин. Сроки соблюдены идеально. Конверсия
					выросла на 40% после редизайна и оптимизации.»
				</p>
				<div class="review-author">
					<div class="author-avatar">МИ</div>
					<div class="author-info">
						<h5>Мария Иванова</h5>
						<span>Владелец, BeautyStore</span>
					</div>
				</div>
			</div>
			<div class="review-card animate">
				<div class="review-stars">★★★★★</div>
				<p class="review-text">
					«Профессиональный подход к документации и передаче прав. Очень
					удобно работать, рекомендую всем.»
				</p>
				<div class="review-author">
					<div class="author-avatar">ДВ</div>
					<div class="author-info">
						<h5>Дмитрий Волков</h5>
						<span>Директор, AutoParts</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- 8. FAQ -->
<section class="faq section-padding" id="faq">
	<div class="container">
		<div class="section-header">
			<h2>Частые вопросы</h2>
		</div>
		<div class="faq-list">
			<div class="faq-item animate">
				<div class="faq-question">
					Сколько стоит разработка сайта? <span class="faq-icon">+</span>
				</div>
				<div class="faq-answer">
					Стоимость зависит от сложности. Лендинги от 50 000 ₽,
					корпоративные сайты от 120 000 ₽, сложные сервисы от 250 000 ₽.
					Точная смета после ТЗ.
				</div>
			</div>
			<div class="faq-item animate">
				<div class="faq-question">
					Какие сроки разработки? <span class="faq-icon">+</span>
				</div>
				<div class="faq-answer">
					Средний срок лендинга — 2-3 недели, корпоративного сайта — 4–6
					недель, сложных сервисов — от 8 недель.
				</div>
			</div>
			<div class="faq-item animate">
				<div class="faq-question">
					Что входит в техподдержку? <span class="faq-icon">+</span>
				</div>
				<div class="faq-answer">
					Мониторинг работоспособности, регулярные бэкапы, обновление
					контента (до 5 часов в месяц), исправление ошибок, консультации.
				</div>
			</div>
			<div class="faq-item animate">
				<div class="faq-question">
					Вы даёте гарантию? <span class="faq-icon">+</span>
				</div>
				<div class="faq-answer">
					Да, 12 месяцев гарантии на техническую исправность кода. Также
					передаём все исходники и права доступа вам.
				</div>
			</div>
			<div class="faq-item animate">
				<div class="faq-question">
					Как происходит передача проекта? <span class="faq-icon">+</span>
				</div>
				<div class="faq-answer">
					По завершении работ мы передаём полный доступ к репозиторию,
					серверу, базам данных. Проводим обучение вашей команды.
				</div>
			</div>
			<div class="faq-item animate">
				<div class="faq-question">
					Можно ли доработать существующий сайт?
					<span class="faq-icon">+</span>
				</div>
				<div class="faq-answer">
					Конечно. Проводим аудит текущего решения и предлагаем план
					доработок с оценкой сроков и стоимости.
				</div>
			</div>
		</div>
	</div>
</section>

<!-- 9. CTA -->
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

<!-- 10. Блог -->
<section class="blog section-padding" id="blog">
	<div class="container">
		<div class="section-header">
			<h2>Полезные статьи</h2>
			<p>Экспертные материалы о веб-разработке</p>
		</div>
		<div class="blog-grid">
			<?php
			// Запрос последних 3 статей из категории 'blog' (или любая другая логика получения записей)
			$args = array(
				'post_type' => 'post', // или ваш custom post type, например, 'blog'
				'posts_per_page' => 3,
				'post_status' => 'publish',
				// 'category_name' => 'blog' // Раскомментируйте, если используете категорию
			);

			$blog_query = new WP_Query($args);

			if ($blog_query->have_posts()) :
				while ($blog_query->have_posts()) : $blog_query->the_post();
					$thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'medium'); // Используйте 'full', если нужна большая картинка
					if (!$thumbnail_url) {
						// Если миниатюра не установлена, используйте заглушку
						$thumbnail_url = 'https://via.placeholder.com/800x400?text=No+Image'; // Замените на вашу заглушку
					}
					$permalink = get_permalink();
					$title = get_the_title();
					$excerpt = get_the_excerpt() ?: wp_trim_words(get_the_content(), 20, '...'); // Получаем excerpt или обрезанный content
					// Пример получения тега/рубрики - можно адаптировать под свои таксономии (например, category или custom taxonomy)
					$categories = get_the_category();
					$tag_name = !empty($categories) ? esc_html($categories[0]->name) : 'Статья'; // Берём первую рубрику или используем заглушку
			?>
					<div class="article-card animate">
						<div class="article-img">
							<img
								src="<?php echo esc_url($thumbnail_url); ?>"
								alt="<?php echo esc_attr($title); ?>"
								style="width: 100%; height: 100%; object-fit: cover">
						</div>
						<div class="article-content">
							<span class="article-tag"><?php echo $tag_name; ?></span>
							<h4><?php echo $title; ?></h4>
							<a href="<?php echo $permalink; ?>" class="article-link">Читать далее →</a>
						</div>
					</div>
			<?php
				endwhile;
				wp_reset_postdata(); // Важно сбросить глобальную переменную поста после своего запроса
			else :
				// Опционально: Вывести сообщение, если статьи не найдены
				echo '<p>Статей пока нет.</p>';
			endif;
			?>
		</div>
	</div>
</section>

<?php
get_footer();
