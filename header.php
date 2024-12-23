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
							<a href="#" class="order-call-btn" id="order-call-btn">
								<?php the_field('order_call_text', 'option') ?>
							</a>

							<div class="social-box">
								<?php if (have_rows('social_links', 'option')): ?>
									<?php while (have_rows('social_links', 'option')):
										the_row();
										$url = get_sub_field('link_url', 'option');
										$icon = get_sub_field('link_image', 'option');
										?>
										<a href="<?php echo esc_url($url, 'option'); ?>" target="_blank">
											<img src="<?php echo esc_html($icon, 'option'); ?>" alt="Social Link" />
										</a>
									<?php endwhile; ?>
								<?php endif; ?>
							</div>
						</div>

						<div class="navbar-top-call-wrapper">
							<a href="tel: <?php the_field('phone_number', 'option') ?>">
								<?php the_field('phone_number', 'option') ?>
								<img src="<?php the_field('phone_image', 'option') ?>" alt="image" />
							</a>
						</div>
					</div>
				</div>
			</div>

			<div class="container">
				<nav class="navbar navbar-expand-lg">
					<?php echo get_custom_logo(); ?>
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse"
						data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
						aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<div class="search-wrapper">
							<a href="<?php echo get_the_permalink(35) ?>" class="catalog-button">
								<i class="fas fa-bars"></i> <?php the_field('btn_catalog', 'option') ?>
							</a>
							<form role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
								<input type="text" name="s" class="searchTerm" placeholder="Поиск..."
									value="<?php echo get_search_query(); ?>" />
								<button type="submit" class="searchButton">
									<i class="fa fa-search"></i>
								</button>
							</form>
						</div>
						<div class="navbar-leave-request-btn-wrapper">
							<button class="btn leave-request-btn" id="leave-request-btn">
								<?php the_field('btn_request', 'option') ?>
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
							'theme_location' => 'header',
							'container' => true,
							'menu_class' => 'navbar-nav',
							'menu_id' => false,
							'echo' => true,
							'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
						]);
						?>
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
			<h1 class="request-modal-header-title">
				<?php the_field('request_header', 'options') ?>
			</h1>
			<button class="btn close-btn" id="close-btn">
				<i class="fas fa-close"></i>
			</button>
		</div>
		<div class="request-modal-body">
			<div class="requset-modal-left">
				<p class="requset-modal-description">
					<?php the_field('request_description_under_header', 'options') ?>
				</p>

				<form>
					<input type="text" class="form-control request-modal-input" placeholder="Введите свое имя"
						required />
					<input type="tel" class="form-control request-modal-input" placeholder="+998(__) ___-__-__"
						required />
					<button class="btn request-modal-btn" id="request-modal-btn">
						<?php the_field('request_btn_title', 'options') ?>
					</button>
				</form>

				<div class="request-modal-checkbox-wrapper">
					<input type="checkbox" class="request-checkbox" />
					<p class="request-modal-checkbox-title">
						<?php the_field('request_privacy_policy_title', 'options') ?>
						<a href="#"><?php the_field('request_privacy_policy_title_color', 'options') ?></a>
					</p>
				</div>
			</div>
			<div class="requset-modal-right">
				<img src="<?php the_field('request_image', 'options') ?>" alt="image" />
				<div class="around-image"></div>
			</div>
		</div>
	</div>
	<!-- ----- request modal end ----- -->

	<!-- ----- order call modal start ----- -->
	<div class="order-call-modal hidden" id="order-call-modal">
		<div class="order-call-modal-header">
			<h1 class="order-call-modal-header-title">
				<?php the_field('order_header', 'options') ?>
			</h1>
			<button class="btn close-btn" id="order-close-btn">
				<i class="fas fa-close"></i>
			</button>
		</div>
		<div class="order-call-modal-body">
			<div class="order-call-modal-left">
				<p class="order-call-modal-description">
					<?php the_field('order_description_title', 'options') ?>
				</p>

				<form>
					<input type="tel" class="form-control order-call-modal-input" placeholder="+998(__) ___-__-__"
						required />
					<button class="btn order-call-modal-btn" id="order-call-modal-btn">
						<?php the_field('order_btn_title', 'options') ?>
					</button>
				</form>

				<div class="order-call-modal-checkbox-wrapper">
					<input type="checkbox" class="order-call-checkbox" />
					<p class="order-call-modal-checkbox-title">
						<?php the_field('order_privacy_policy_title', 'options') ?>
						<a href="#"><?php the_field('order_privacy_policy_title_color', 'options') ?></a>
					</p>
				</div>
			</div>
			<div class="order-call-modal-right">
				<img src="<?php the_field('order_image', 'options') ?>" alt="image" />
				<div class="around-image"></div>
			</div>
		</div>
	</div>
	<!-- ----- order call modal end ----- -->

	<!-- ----- view products modal start ----- -->
	<div class="view-products-modal hidden" id="view-products-modal">
		<div class="view-products-modal-header">
			<button class="btn close-btn" id="view-close-btn">
				<i class="fas fa-close"></i>
			</button>
		</div>

		<div class="view-products-modal-body ">
			<div class="view-products-modal-body-left">
				<div class="switcher-top">
					<img src="https://cdn.pixabay.com/photo/2023/05/22/10/49/houses-8010401_1280.jpg" width="100%" />
				</div>
				<div class="switcher-bottom">
					<img src="https://cdn.pixabay.com/photo/2023/05/22/10/49/houses-8010401_1280.jpg" width="100%"
						data-id="1" class="slider_click" />
					<img src="https://cdn.pixabay.com/photo/2023/07/13/05/36/mountains-8123933_1280.jpg" width="100%"
						data-id="2" class="slider_click" />
					<img src="https://cdn.pixabay.com/photo/2022/12/12/21/35/stream-7651969_1280.jpg" width="100%"
						data-id="3" class="slider_click" />
					<img src="https://cdn.pixabay.com/photo/2022/10/24/20/22/muhlviertel-7544316_1280.jpg"
						width="100%" />
					<img src="https://cdn.pixabay.com/photo/2024/02/21/14/14/mountains-8587802_1280.jpg" width="100%" />
				</div>
			</div>
			<div class="view-products-modal-body-right">
				<h3 class="slider-right-content-header">Баня гормония</h3>
				<div class="right-content-wrapper">
					<div class="right-content-info">
						<p class="right-content-left-title">Площадь:</p>
						<p class="right-content-right-title">9,84 кВ м</p>
					</div>
					<div class="right-content-info">
						<p class="right-content-left-title">Сроки:</p>
						<p class="right-content-right-title">9 дней</p>
					</div>
					<div class="right-content-info">
						<p class="right-content-left-title">Печь:</p>
						<p class="right-content-right-title">Aito AK-68</p>
					</div>
				</div>
				<div class="materials-wrapper">
					<h1 class="materials-header">Материалы:</h1>
					<p class="materials-description">
						Ольха, Натуральный камень талькомагнезит
					</p>
				</div>
				<div class="product-sum">
					<p class="switcher-bottom-sale">3 990 000 UZS</p>
					<p class="switcher-bottom-summ">2 990 000 UZS</p>
				</div>
				<a href="#" class="btn buy-btn" id="buy-btn">Купить</a>
			</div>
		</div>
	</div>
	<!-- ----- view products modal end ----- -->


	<div class="overlay hidden" id="overlay"></div>
	<!-- MAIN END -->