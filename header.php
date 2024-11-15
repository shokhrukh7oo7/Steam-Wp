<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package steam
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>

	<!-- HEADER START -->
	<header>
		<!-- NAV START -->
		<div class="navbar-wrapper">
			<div class="navbar-top-wrapper">
				<div class="container">
					<div class="navbar-top-wrapper-container">
						<div class="navbar-top-social-links-wrapper">
							<a href="#" class="order-call-btn" id="order-call-btn">Заказать звонок</a>
							<div class="social-box">
								<a href="#">
									<img src="<?php echo get_template_directory_uri() ?>/assets/images/header/viber.svg"
										alt="image" />
								</a>
								<a href="#">
									<img src="<?php echo get_template_directory_uri() ?>/assets/images/header/whatsapp.svg"
										alt="image" />
								</a>
								<a href="#">
									<img src="<?php echo get_template_directory_uri() ?>/assets/images/header/telegram.svg"
										alt="image" />
								</a>
							</div>
						</div>

						<div class="navbar-top-call-wrapper">
							<a href="#">+998 (50) 074 20 00
								<img src="<?php echo get_template_directory_uri() ?>/assets/images/header/call.svg"
									alt="image" />
							</a>
						</div>
					</div>
				</div>
			</div>

			<div class="container">
				<nav class="navbar navbar-expand-lg">
					<a class="navbar-brand" href="/index.html">STEAM</a>
					<a class="navbar-brand" href="/index.html">
						<!-- <img src="<?= get_template_directory_uri() ?>/assets/images/logo.svg" alt="image"> -->
					</a>
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse"
						data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
						aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<div class="search-wrapper">
							<a href="/assets/pages/catalog.html" class="catalog-button">
								<i class="fas fa-bars"></i> Каталог
							</a>
							<input type="text" class="searchTerm" placeholder="Поиск..." />
							<button type="submit" class="searchButton">
								<i class="fa fa-search"></i>
							</button>
						</div>
						<div class="navbar-leave-request-btn-wrapper">
							<button class="btn leave-request-btn" id="leave-request-btn">
								Оставить заявку
							</button>
						</div>
					</div>
				</nav>
			</div>

			<div class="navbar-bottom-wrapper-box">
				<div class="container">
					<div class="navbar-bottom-wrapper" id="mobile-menu">
						<?php
						wp_nav_menu([
							'menu' => 'Меню',
							'container' => true,

						])
							?>

						<!-- <ul>
							<li>
								<a href="/assets/pages/service.html">Услуги</a>
							</li>
							<li>
								<a href="/assets/pages/about-us.html">О компании</a>
							</li>
							<li>
								<a href="/assets/pages/galery.html">Галерея</a>
							</li>
							<li>
								<a href="/assets/pages/contact.html">Контакты</a>
							</li>
							<li>
								<a href="#" class="promo">
									Акции <i class="fa-solid fa-percent"></i>
								</a>
							</li>
						</ul> -->
					</div>
				</div>
			</div>
		</div>
		<!-- NAV END -->
	</header>
	<!-- HEADER END -->

	<!-- ----- request modal start ----- -->
	<div class="request-modal hidden" id="request-modal">
		<div class="request-modal-header">
			<h1 class="request-modal-header-title">ОСТАВЬТЕ ВАШИ КОНТАКТЫ</h1>
			<button class="btn close-btn" id="close-btn">
				<i class="fas fa-close"></i>
			</button>
		</div>
		<div class="request-modal-body">
			<div class="requset-modal-left">
				<p class="requset-modal-description">
					Мы свяжимся с вами и рассчитаем стоимость проекта
				</p>

				<form>
					<input type="text" class="form-control request-modal-input" placeholder="Введите свое имя"
						required />
					<input type="tel" class="form-control request-modal-input" placeholder="+998(__) ___-__-__"
						required />
					<button class="btn request-modal-btn" id="request-modal-btn">
						Оставить заявку
					</button>
				</form>

				<div class="request-modal-checkbox-wrapper">
					<input type="checkbox" class="request-checkbox" />
					<p class="request-modal-checkbox-title">
						Нажимая на кнопку, вы соглашаетесь на обработку персональных
						данных и <a href="#">политикой конфиденциальности</a>
					</p>
				</div>
			</div>
			<div class="requset-modal-right">
				<img src="<?php echo get_template_directory_uri() ?>/assets/images/modal/request-modal.png"
					alt="image" />
				<div class="around-image"></div>
			</div>
		</div>
	</div>
	<!-- ----- request modal end ----- -->

	<!-- ----- order call modal start ----- -->
	<div class="order-call-modal hidden" id="order-call-modal">
		<div class="order-call-modal-header">
			<h1 class="order-call-modal-header-title">
				МЕНЕДЖЕР ПОЗВОНИТ ВАМ В ТЕЧЕНИИ 5 МИНУТ
			</h1>
			<button class="btn close-btn" id="order-close-btn">
				<i class="fas fa-close"></i>
			</button>
		</div>
		<div class="order-call-modal-body">
			<div class="order-call-modal-left">
				<p class="order-call-modal-description">
					ответит на все вопросы и прокосультирует по продуктам Steam
				</p>

				<form>
					<input type="tel" class="form-control order-call-modal-input" placeholder="+998(__) ___-__-__"
						required />
					<button class="btn order-call-modal-btn" id="order-call-modal-btn">
						Позвоните мне
					</button>
				</form>

				<div class="order-call-modal-checkbox-wrapper">
					<input type="checkbox" class="order-call-checkbox" />
					<p class="order-call-modal-checkbox-title">
						Нажимая на кнопку, вы соглашаетесь на обработку персональных
						данных и <a href="#">политикой конфиденциальности</a>
					</p>
				</div>
			</div>
			<div class="order-call-modal-right">
				<img src="<?php echo get_template_directory_uri() ?>/assets/images/modal/request-modal.png"
					alt="image" />
				<div class="around-image"></div>
			</div>
		</div>
	</div>
	<!-- ----- order call modal end ----- -->


	<div class="overlay hidden" id="overlay"></div>
	<!-- MAIN END -->