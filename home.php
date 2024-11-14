<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package steam
 */

get_header();
?>

<!-- MAIN START -->
<main>
	<!-- BANNER SLIDER START -->
	<?php
	$background_image_banner = get_field('banner_bg');
	$background_url_banner = $background_image_banner ? $background_image_banner['url'] : '';
	?>

	<section id="banner-swiper" style=" background: linear-gradient(#28273973 45%, #282739a6 65%),
	url('<?php echo get_template_directory_uri() ?>/assets/images/home/swiper/banner.png');">
		<div class="container">
			<div class="slider">
				<div class="slide active">
					<div class="text-content">
						<p>Создаем арт объекты для парения и отдыха</p>
						<h1>ЭКСКЛЮЗИВНАЯ ОТДЕЛКА БАНЬ, САУН, ХАММАМОВ "ПОД КЛЮЧ"</h1>
						<a class="button" href="#">Подробнее о строительстве</a>
						<div class="pagination">
							<i class="fas fa-chevron-left" onclick="prevSlide()"></i>
							<span id="current-slide">1</span>
							<span>—</span>
							<span id="total-slides">2</span>
							<i class="fas fa-chevron-right" onclick="nextSlide()"></i>
						</div>
					</div>
					<div class="image-content">
						<img src="<?php echo get_template_directory_uri() ?>/assets/images/home/swiper/s-1.png"
							alt="image">
						<!-- <div class="quality-guarantee">
						<span>⚡ Индивидуальный подход</span>
						<span class="badge">ГАРАНТИЯ КАЧЕСТВА</span>
					</div> -->
					</div>
				</div>

				<div class="slide">
					<div class="text-content">
						<p>Создаем арт объекты для парения и отдыха</p>
						<h1>ПРОВОДИМ ДИАГНОСТИКУ И ОБСЛУЖИВАЕМ ЛЮБУЮ НЕИСПРАВНОСТЬ САУНЫ</h1>
						<a class="button" href="#">Подробнее о строительстве</a>
						<div class="pagination">
							<i class="fas fa-chevron-left" onclick="prevSlide()"></i>
							<span id="current-slide">2</span>
							<span>—</span>
							<span id="total-slides">2</span>
							<i class="fas fa-chevron-right" onclick="nextSlide()"></i>
						</div>
					</div>
					<div class="image-content">
						<img src="<?php echo get_template_directory_uri() ?>/assets/images/catalog/materials.png"
							alt="image">
						<!-- <div class="quality-guarantee">
						<span>⚡ Индивидуальный подход</span>
						<span class="badge">ГАРАНТИЯ КАЧЕСТВА</span>
					</div> -->
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- BANNER SLIDER END -->

	<!-- CATEGORY PRODUCT START -->
	<section id="category-product">
		<div class="container">
			<div class="category-product-wrapper">
				<div class="category-product-header-wrapper">
					<h1 class="category-product-header">Категории товаров</h1>
				</div>

				<!-- tab links start -->
				<div class="ap-tab">
					<ul class="ap-tab-list">
						<li class="ap-tab-item active" data-category="sauna-stoves">
							Печи для саун
						</li>
						<li class="ap-tab-item" data-category="stones-for-steam-room">
							Камни для парных
						</li>
						<li class="ap-tab-item" data-category="lightting-and-decor">
							Освещение и декор
						</li>
						<li class="ap-tab-item" data-category="bath-accessories">
							Аксессуары для бани
						</li>
						<li class="ap-tab-item" data-category="finishing-materials">
							Материалы для отделки
						</li>
					</ul>
				</div>
				<!-- tab links end -->

				<!-- tab description start -->
				<div class="ap-tab-content">
					<div class="row ap-tab-row">
						<!-- sauna-stoves -->
						<div class="col-12 col-sm-6 col-lg-4 col-xl-3 my-2">
							<div class="card" data-category="sauna-stoves">
								<swiper-container class="mySwiper" navigation="true">
									<swiper-slide>
										<img src="<?php echo get_template_directory_uri() ?>/assets/images/home/product-swiper/sauna-stoves-1.png"
											alt="images" /></swiper-slide>
									<swiper-slide>
										<img src="<?php echo get_template_directory_uri() ?>/assets/images/home/product-swiper/sauna-stoves-1.png"
											alt="images" />
									</swiper-slide>
								</swiper-container>
								<h4>Печи для саун</h4>
								<p class="sale">3 990 000 UZS</p>
								<p class="product-summ">2 990 000 UZS</p>
								<a href="/assets/pages/catalog.html" class="btn view-products" id="view-products">
									Смотреть товары
								</a>
							</div>
						</div>
						<div class="col-12 col-sm-6 col-lg-4 col-xl-3 my-2">
							<div class="card" data-category="sauna-stoves">
								<swiper-container class="mySwiper" navigation="true">
									<swiper-slide><img
											src="<?php echo get_template_directory_uri() ?>/assets/images/home/product-swiper/sauna-stoves-2.png"
											alt="images" /></swiper-slide>
									<swiper-slide><img
											src="<?php echo get_template_directory_uri() ?>/assets/images/home/product-swiper/sauna-stoves-2.png"
											alt="images" /></swiper-slide>
									<swiper-slide><img
											src="<?php echo get_template_directory_uri() ?>/assets/images/home/product-swiper/sauna-stoves-2.png"
											alt="images" /></swiper-slide>
								</swiper-container>
								<h4>Печи для саун</h4>
								<p class="sale">3 990 000 UZS</p>
								<p class="product-summ">2 990 000 UZS</p>
								<a href="/assets/pages/catalog.html" class="btn view-products" id="view-products">
									Смотреть товары
								</a>
							</div>
						</div>
						<div class="col-12 col-sm-6 col-lg-4 col-xl-3 my-2">
							<div class="card" data-category="sauna-stoves">
								<swiper-container class="mySwiper" navigation="true">
									<swiper-slide><img
											src="<?php echo get_template_directory_uri() ?>/assets/images/home/product-swiper/sauna-stoves-3.png"
											alt="images" /></swiper-slide>
									<swiper-slide><img
											src="<?php echo get_template_directory_uri() ?>/assets/images/home/product-swiper/sauna-stoves-3.png"
											alt="images" /></swiper-slide>
									<swiper-slide><img
											src="<?php echo get_template_directory_uri() ?>/assets/images/home/product-swiper/sauna-stoves-3.png"
											alt="images" /></swiper-slide>
								</swiper-container>
								<h4>Печи для саун</h4>
								<p class="sale">3 990 000 UZS</p>
								<p class="product-summ">2 990 000 UZS</p>
								<a href="/assets/pages/catalog.html" class="btn view-products" id="view-products">
									Смотреть товары
								</a>
							</div>
						</div>
						<div class="col-12 col-sm-6 col-lg-4 col-xl-3 my-2">
							<div class="card" data-category="sauna-stoves">
								<swiper-container class="mySwiper" navigation="true">
									<swiper-slide><img
											src="<?php echo get_template_directory_uri() ?>/assets/images/home/product-swiper/sauna-stoves-4.png"
											alt="images" /></swiper-slide>
									<swiper-slide><img
											src="<?php echo get_template_directory_uri() ?>/assets/images/home/product-swiper/sauna-stoves-4.png"
											alt="images" /></swiper-slide>
									<swiper-slide><img
											src="<?php echo get_template_directory_uri() ?>/assets/images/home/product-swiper/sauna-stoves-4.png"
											alt="images" /></swiper-slide>
								</swiper-container>
								<h4>Печи для саун</h4>
								<p class="sale">3 990 000 UZS</p>
								<p class="product-summ">2 990 000 UZS</p>
								<a href="/assets/pages/catalog.html" class="btn view-products" id="view-products">
									Смотреть товары
								</a>
							</div>
						</div>
						<div class="col-12 col-sm-6 col-lg-4 col-xl-3 my-2">
							<div class="card" data-category="sauna-stoves">
								<swiper-container class="mySwiper" navigation="true">
									<swiper-slide><img
											src="<?php echo get_template_directory_uri() ?>/assets/images/home/product-swiper/sauna-stoves-5.png"
											alt="images" /></swiper-slide>
									<swiper-slide><img
											src="<?php echo get_template_directory_uri() ?>/assets/images/home/product-swiper/sauna-stoves-5.png"
											alt="images" /></swiper-slide>
									<swiper-slide><img
											src="<?php echo get_template_directory_uri() ?>/assets/images/home/product-swiper/sauna-stoves-5.png"
											alt="images" /></swiper-slide>
								</swiper-container>
								<h4>Печи для саун</h4>
								<p class="sale">3 990 000 UZS</p>
								<p class="product-summ">2 990 000 UZS</p>
								<a href="/assets/pages/catalog.html" class="btn view-products" id="view-products">
									Смотреть товары
								</a>
							</div>
						</div>
						<div class="col-12 col-sm-6 col-lg-4 col-xl-3 my-2">
							<div class="card" data-category="sauna-stoves">
								<swiper-container class="mySwiper" navigation="true">
									<swiper-slide><img
											src="<?php echo get_template_directory_uri() ?>/assets/images/home/product-swiper/sauna-stoves-6.png"
											alt="images" /></swiper-slide>
									<swiper-slide><img
											src="<?php echo get_template_directory_uri() ?>/assets/images/home/product-swiper/sauna-stoves-6.png"
											alt="images" /></swiper-slide>
									<swiper-slide><img
											src="<?php echo get_template_directory_uri() ?>/assets/images/home/product-swiper/sauna-stoves-6.png"
											alt="images" /></swiper-slide>
								</swiper-container>
								<h4>Печи для саун</h4>
								<p class="sale">3 990 000 UZS</p>
								<p class="product-summ">2 990 000 UZS</p>
								<a href="/assets/pages/catalog.html" class="btn view-products" id="view-products">
									Смотреть товары
								</a>
							</div>
						</div>
						<div class="col-12 col-sm-6 col-lg-4 col-xl-3 my-2">
							<div class="card" data-category="sauna-stoves">
								<swiper-container class="mySwiper" navigation="true">
									<swiper-slide><img
											src="<?php echo get_template_directory_uri() ?>/assets/images/home/product-swiper/sauna-stoves-7.png"
											alt="images" /></swiper-slide>
									<swiper-slide><img
											src="<?php echo get_template_directory_uri() ?>/assets/images/home/product-swiper/sauna-stoves-7.png"
											alt="images" /></swiper-slide>
									<swiper-slide><img
											src="<?php echo get_template_directory_uri() ?>/assets/images/home/product-swiper/sauna-stoves-7.png"
											alt="images" /></swiper-slide>
								</swiper-container>
								<h4>Печи для саун</h4>
								<p class="sale">3 990 000 UZS</p>
								<p class="product-summ">2 990 000 UZS</p>
								<a href="/assets/pages/catalog.html" class="btn view-products" id="view-products">
									Смотреть товары
								</a>
							</div>
						</div>
						<div class="col-12 col-sm-6 col-lg-4 col-xl-3 my-2">
							<div class="card" data-category="sauna-stoves">
								<swiper-container class="mySwiper" navigation="true">
									<swiper-slide><img
											src="<?php echo get_template_directory_uri() ?>/assets/images/home/product-swiper/sauna-stoves-8.png"
											alt="images" /></swiper-slide>
									<swiper-slide><img
											src="<?php echo get_template_directory_uri() ?>/assets/images/home/product-swiper/sauna-stoves-8.png"
											alt="images" /></swiper-slide>
									<swiper-slide><img
											src="<?php echo get_template_directory_uri() ?>/assets/images/home/product-swiper/sauna-stoves-8.png"
											alt="images" /></swiper-slide>
								</swiper-container>
								<h4>Печи для саун</h4>
								<p class="sale">3 990 000 UZS</p>
								<p class="product-summ">2 990 000 UZS</p>
								<a href="/assets/pages/catalog.html" class="btn view-products" id="view-products">
									Смотреть товары
								</a>
							</div>
						</div>

						<!-- stones for steam room -->
						<div class="col-12 col-sm-6 col-lg-4 col-xl-3 my-2">
							<div class="card" data-category="stones-for-steam-room">
								<swiper-container class="mySwiper" navigation="true">
									<swiper-slide><img
											src="<?php echo get_template_directory_uri() ?>/assets/images/home/product-swiper/sauna-stoves-8.png"
											alt="images" /></swiper-slide>
									<swiper-slide><img
											src="<?php echo get_template_directory_uri() ?>/assets/images/home/product-swiper/sauna-stoves-8.png"
											alt="images" /></swiper-slide>
									<swiper-slide><img
											src="<?php echo get_template_directory_uri() ?>/assets/images/home/product-swiper/sauna-stoves-8.png"
											alt="images" /></swiper-slide>
								</swiper-container>
								<h4>Печи для саун</h4>
								<p class="sale">3 990 000 UZS</p>
								<p class="product-summ">2 990 000 UZS</p>
								<a href="/assets/pages/catalog.html" class="btn view-products" id="view-products">
									Смотреть товары
								</a>
							</div>
						</div>
						<div class="col-12 col-sm-6 col-lg-4 col-xl-3 my-2">
							<div class="card" data-category="stones-for-steam-room">
								<swiper-container class="mySwiper" navigation="true">
									<swiper-slide><img
											src="<?php echo get_template_directory_uri() ?>/assets/images/home/product-swiper/sauna-stoves-8.png"
											alt="images" /></swiper-slide>
									<swiper-slide><img
											src="<?php echo get_template_directory_uri() ?>/assets/images/home/product-swiper/sauna-stoves-8.png"
											alt="images" /></swiper-slide>
									<swiper-slide><img
											src="<?php echo get_template_directory_uri() ?>/assets/images/home/product-swiper/sauna-stoves-8.png"
											alt="images" /></swiper-slide>
								</swiper-container>
								<h4>Печи для саун</h4>
								<p class="sale">3 990 000 UZS</p>
								<p class="product-summ">2 990 000 UZS</p>
								<a href="/assets/pages/catalog.html" class="btn view-products" id="view-products">
									Смотреть товары
								</a>
							</div>
						</div>

						<!-- lightting-and-decor -->
						<div class="col-12 col-sm-6 col-lg-4 col-xl-3 my-2">
							<div class="card" data-category="lightting-and-decor">
								<swiper-container class="mySwiper" navigation="true">
									<swiper-slide><img
											src="<?php echo get_template_directory_uri() ?>/assets/images/home/product-swiper/sauna-stoves-8.png"
											alt="images" /></swiper-slide>
									<swiper-slide><img
											src="<?php echo get_template_directory_uri() ?>/assets/images/home/product-swiper/sauna-stoves-8.png"
											alt="images" /></swiper-slide>
									<swiper-slide><img
											src="<?php echo get_template_directory_uri() ?>/assets/images/home/product-swiper/sauna-stoves-8.png"
											alt="images" /></swiper-slide>
								</swiper-container>
								<h4>Печи для саун</h4>
								<p class="sale">3 990 000 UZS</p>
								<p class="product-summ">2 990 000 UZS</p>
								<a href="/assets/pages/catalog.html" class="btn view-products" id="view-products">
									Смотреть товары
								</a>
							</div>
						</div>
						<div class="col-12 col-sm-6 col-lg-4 col-xl-3 my-2">
							<div class="card" data-category="lightting-and-decor">
								<swiper-container class="mySwiper" navigation="true">
									<swiper-slide><img
											src="<?php echo get_template_directory_uri() ?>/assets/images/home/product-swiper/sauna-stoves-8.png"
											alt="images" /></swiper-slide>
									<swiper-slide><img
											src="<?php echo get_template_directory_uri() ?>/assets/images/home/product-swiper/sauna-stoves-8.png"
											alt="images" /></swiper-slide>
									<swiper-slide><img
											src="<?php echo get_template_directory_uri() ?>/assets/images/home/product-swiper/sauna-stoves-8.png"
											alt="images" /></swiper-slide>
								</swiper-container>
								<h4>Печи для саун</h4>
								<p class="sale">3 990 000 UZS</p>
								<p class="product-summ">2 990 000 UZS</p>
								<a href="/assets/pages/catalog.html" class="btn view-products" id="view-products">
									Смотреть товары
								</a>
							</div>
						</div>
						<div class="col-12 col-sm-6 col-lg-4 col-xl-3 my-2">
							<div class="card" data-category="lightting-and-decor">
								<swiper-container class="mySwiper" navigation="true">
									<swiper-slide><img
											src="<?php echo get_template_directory_uri() ?>/assets/images/home/product-swiper/sauna-stoves-8.png"
											alt="images" /></swiper-slide>
									<swiper-slide><img
											src="<?php echo get_template_directory_uri() ?>/assets/images/home/product-swiper/sauna-stoves-8.png"
											alt="images" /></swiper-slide>
									<swiper-slide><img
											src="<?php echo get_template_directory_uri() ?>/assets/images/home/product-swiper/sauna-stoves-8.png"
											alt="images" /></swiper-slide>
								</swiper-container>
								<h4>Печи для саун</h4>
								<p class="sale">3 990 000 UZS</p>
								<p class="product-summ">2 990 000 UZS</p>
								<a href="/assets/pages/catalog.html" class="btn view-products" id="view-products">
									Смотреть товары
								</a>
							</div>
						</div>

						<!-- bath-accessories -->
						<div class="col-12 col-sm-6 col-lg-4 col-xl-3 my-2">
							<div class="card" data-category="bath-accessories">
								<swiper-container class="mySwiper" navigation="true">
									<swiper-slide><img
											src="<?php echo get_template_directory_uri() ?>/assets/images/home/product-swiper/sauna-stoves-5.png"
											alt="images" /></swiper-slide>
									<swiper-slide><img
											src="<?php echo get_template_directory_uri() ?>/assets/images/home/product-swiper/sauna-stoves-5.png"
											alt="images" /></swiper-slide>
									<swiper-slide><img
											src="<?php echo get_template_directory_uri() ?>/assets/images/home/product-swiper/sauna-stoves-5.png"
											alt="images" /></swiper-slide>
								</swiper-container>
								<h4>Печи для саун</h4>
								<p class="sale">3 990 000 UZS</p>
								<p class="product-summ">2 990 000 UZS</p>
								<a href="/assets/pages/catalog.html" class="btn view-products" id="view-products">
									Смотреть товары
								</a>
							</div>
						</div>

						<!-- finishing-materials -->
						<div class="col-12 col-sm-6 col-lg-4 col-xl-3 my-2">
							<div class="card" data-category="finishing-materials">
								<swiper-container class="mySwiper" navigation="true">
									<swiper-slide><img
											src="<?php echo get_template_directory_uri() ?>/assets/images/home/product-swiper/sauna-stoves-3.png"
											alt="images" /></swiper-slide>
									<swiper-slide><img
											src="<?php echo get_template_directory_uri() ?>/assets/images/home/product-swiper/sauna-stoves-3.png"
											alt="images" /></swiper-slide>
									<swiper-slide><img
											src="<?php echo get_template_directory_uri() ?>/assets/images/home/product-swiper/sauna-stoves-3.png"
											alt="images" /></swiper-slide>
								</swiper-container>
								<h4>Печи для саун</h4>
								<p class="sale">3 990 000 UZS</p>
								<p class="product-summ">2 990 000 UZS</p>
								<a href="/assets/pages/catalog.html" class="btn view-products" id="view-products">
									Смотреть товары
								</a>
							</div>
						</div>
						<div class="col-12 col-sm-6 col-lg-4 col-xl-3 my-2">
							<div class="card" data-category="finishing-materials">
								<swiper-container class="mySwiper" navigation="true">
									<swiper-slide><img
											src="<?php echo get_template_directory_uri() ?>/assets/images/home/product-swiper/sauna-stoves-3.png"
											alt="images" /></swiper-slide>
									<swiper-slide><img
											src="<?php echo get_template_directory_uri() ?>/assets/images/home/product-swiper/sauna-stoves-3.png"
											alt="images" /></swiper-slide>
									<swiper-slide><img
											src="<?php echo get_template_directory_uri() ?>/assets/images/home/product-swiper/sauna-stoves-3.png"
											alt="images" /></swiper-slide>
								</swiper-container>
								<h4>Печи для саун</h4>
								<p class="sale">3 990 000 UZS</p>
								<p class="product-summ">2 990 000 UZS</p>
								<a href="/assets/pages/catalog.html" class="btn view-products" id="view-products">
									Смотреть товары
								</a>
							</div>
						</div>
					</div>
				</div>
				<!-- tab description end -->
			</div>
		</div>
	</section>
	<!-- CATEGORY PRODUCT END -->

	<!-- CONSTRUCTION SERVICE START -->
	<section id="c-service">
		<div class="container">
			<div class="construction-service-wrapper">
				<div class="construction-service-info">
					<div class="row">
						<div class="col-12 col-sm-6 col-md-4 col-lg-3 my-3">
							<div class="item">
								<img src="<?php echo get_template_directory_uri() ?>/assets/images/home/c-service-1.png"
									alt="image" />
								<h3 class="construction-service-info-header-title">
									Гарантия качества
								</h3>
								<p class="construction-service-info-description-title">
									Используем только сертифицированные материалы.
								</p>
							</div>
						</div>
						<div class="col-12 col-sm-6 col-md-4 col-lg-3 my-3">
							<div class="item">
								<img src="<?php echo get_template_directory_uri() ?>/assets/images/home/c-service-2.png"
									alt="image" />
								<h3 class="construction-service-info-header-title">
									Опыт работы
								</h3>
								<p class="construction-service-info-description-title">
									15 лет в строительстве бань и саун.
								</p>
							</div>
						</div>
						<div class="col-12 col-sm-6 col-md-4 col-lg-3 my-3">
							<div class="item">
								<img src="<?php echo get_template_directory_uri() ?>/assets/images/home/c-service-3.png"
									alt="image" />
								<h3 class="construction-service-info-header-title">
									Индивидуальный подход
								</h3>
								<p class="construction-service-info-description-title">
									Проект под ключ по вашим пожеланиям.
								</p>
							</div>
						</div>
						<div class="col-12 col-sm-6 col-md-4 col-lg-3 my-3">
							<div class="item">
								<img src="<?php echo get_template_directory_uri() ?>/assets/images/home/c-service-4.png"
									alt="image" />
								<h3 class="construction-service-info-header-title">
									Быстрая доставка
								</h3>
								<p class="construction-service-info-description-title">
									Быстрая доставка товаров по всей стране
								</p>
							</div>
						</div>
					</div>
				</div>

				<div class="construction-service-banner" style="
				background-image: url('<?php echo get_template_directory_uri() ?>/assets/images/home/c-service-banner.png');
			  ">
					<!-- <img src="/assets/images/home/c-service-banner.png" alt="image"> -->
					<div class="construction-service-banner-title-wrapper">
						<h1 class="construction-service-banner-header-title">
							Услуги по строительству
						</h1>
						<p class="construction-service-banner-description-title">
							Мы создаем сауны и бани вашей мечты. Полный цикл - от
							проектирования до установки
						</p>

						<a href="/assets/pages/about-us.html" class="btn constuction-service-banner-btn">Подробное о
							строительстве</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- CONSTRUCTION SERVICE END -->

	<!-- CATALOG PRODUCTS START -->
	<section id="catalog-products">
		<div class="container">
			<div class="catalog-products-wrapper">
				<div class="catalog-products-wrapper-header-wrapper">
					<h1 class="catalog-products-wrapper-header-title">
						Каталог товаров steam
					</h1>
					<a href="#" class="download-file">Скачать каталог STEAM <i class="fa-solid fa-arrow-right"></i></a>
				</div>

				<div class="row">
					<div class="col-12 col-md-6 col-xl-4 my-3">
						<div class="catalog-item">
							<img class="catalog-header-image"
								src="<?php echo get_template_directory_uri() ?>/assets/images/home/c-product-1.png"
								alt="image" />
							<!-- catalog product header -->
							<div class="catalog-product-header">
								<h3 class="catalog-product-header-title">
									Русские бани и сауны
								</h3>
								<img src="<?php echo get_template_directory_uri() ?>/assets/images/home/c-product-1-1.png"
									alt="image" />
							</div>
							<!-- catalog product body -->
							<div class="catalog-product-body">
								<p class="catalog-product-body-description">
									Баня работает при высоком уровне влажности (до 100%),
									температура обычно колеблется от 60°C до 100°C (от 140°F
									до 212°F). Сочетание влажного тепла и пара отличает ее от
									сухой сауны. Вода льется на горячие камни, чтобы
									образовался пар.
								</p>
							</div>

							<div class="catalog-product-btn">
								<a href="<?php echo get_template_directory_uri() ?>/assets/pages/catalog.html"
									class="btn catalog-product-btn">Смотреть каталог <i
										class="fa-solid fa-arrow-right"></i></a>
							</div>
						</div>
					</div>

					<div class="col-12 col-md-6 col-xl-4 my-3">
						<div class="catalog-item">
							<img class="catalog-header-image"
								src="<?php echo get_template_directory_uri() ?>/assets/images/home/c-product-2.png"
								alt="image" />
							<!-- catalog product header -->
							<div class="catalog-product-header">
								<h3 class="catalog-product-header-title">
									Плетеная корзина
								</h3>
								<img src="<?php echo get_template_directory_uri() ?>/assets/images/home/c-product-2-2.png"
									alt="image" />
							</div>
							<!-- catalog product body -->
							<div class="catalog-product-body">
								<p class="catalog-product-body-description">
									В сауне тепло в основном исходит от печи с горячими
									камнями. Хотя вы можете плеснуть воды на камни, чтобы
									получить немного пара (по-фински это называется löyly),
									общее впечатление гораздо суше, чем в бане.
								</p>
							</div>

							<div class="catalog-product-btn">
								<a href="<?php echo get_template_directory_uri() ?>/assets/pages/catalog.html"
									class="btn catalog-product-btn">Смотреть каталог <i
										class="fa-solid fa-arrow-right"></i></a>
							</div>
						</div>
					</div>

					<div class="col-12 col-md-6 col-xl-4 my-3">
						<div class="catalog-item">
							<img class="catalog-header-image"
								src="<?php echo get_template_directory_uri() ?>/assets/images/home/c-product-3.png"
								alt="image" />
							<!-- catalog product header -->
							<div class="catalog-product-header">
								<h3 class="catalog-product-header-title">
									Деревянный баскет для сауны
								</h3>
								<img src="<?php echo get_template_directory_uri() ?>/assets/images/home/c-product-3-3.png"
									alt="image" />
							</div>
							<!-- catalog product body -->
							<div class="catalog-product-body">
								<p class="catalog-product-body-description">
									Деревянное ведро для сауны — традиционный аксессуар,
									используемый как в русских банях, так и в саунах. Обычно
									его изготавливают из натурального дерева, например,
									березы, дуба или кедра, и используют для хранения воды,
									которую выливают на горячие камни для создания пара в
									сауне или бане.
								</p>
							</div>

							<div class="catalog-product-btn">
								<a href="<?php echo get_template_directory_uri() ?>/assets/pages/catalog.html"
									class="btn catalog-product-btn">Смотреть каталог <i
										class="fa-solid fa-arrow-right"></i></a>
							</div>
						</div>
					</div>

					<div class="col-12 col-md-6 col-xl-4 my-3">
						<div class="catalog-item">
							<img class="catalog-header-image"
								src="<?php echo get_template_directory_uri() ?>/assets/images/home/c-product-1.png"
								alt="image" />
							<!-- catalog product header -->
							<div class="catalog-product-header">
								<h3 class="catalog-product-header-title">
									Русские бани и сауны
								</h3>
								<img src="<?php echo get_template_directory_uri() ?>/assets/images/home/c-product-1-1.png"
									alt="image" />
							</div>
							<!-- catalog product body -->
							<div class="catalog-product-body">
								<p class="catalog-product-body-description">
									Баня работает при высоком уровне влажности (до 100%),
									температура обычно колеблется от 60°C до 100°C (от 140°F
									до 212°F). Сочетание влажного тепла и пара отличает ее от
									сухой сауны. Вода льется на горячие камни, чтобы
									образовался пар.
								</p>
							</div>

							<div class="catalog-product-btn">
								<a href="<?php echo get_template_directory_uri() ?>/assets/pages/catalog.html"
									class="btn catalog-product-btn">Смотреть каталог <i
										class="fa-solid fa-arrow-right"></i></a>
							</div>
						</div>
					</div>

					<div class="col-12 col-md-6 col-xl-4 my-3">
						<div class="catalog-item">
							<img class="catalog-header-image"
								src="<?php echo get_template_directory_uri() ?>/assets/images/home/c-product-2.png"
								alt="image" />
							<!-- catalog product header -->
							<div class="catalog-product-header">
								<h3 class="catalog-product-header-title">
									Деревянный баскет для сауны
								</h3>
								<img src="<?php echo get_template_directory_uri() ?>/assets/images/home/c-product-2-2.png"
									alt="image" />
							</div>
							<!-- catalog product body -->
							<div class="catalog-product-body">
								<p class="catalog-product-body-description">
									Деревянное ведро для сауны — традиционный аксессуар,
									используемый как в русских банях, так и в саунах. Обычно
									его изготавливают из натурального дерева, например,
									березы, дуба или кедра, и используют для хранения воды,
									которую выливают на горячие камни для создания пара в
									сауне или бане.
								</p>
							</div>

							<div class="catalog-product-btn">
								<a href="<?php echo get_template_directory_uri() ?>/assets/pages/catalog.html"
									class="btn catalog-product-btn">Смотреть каталог <i
										class="fa-solid fa-arrow-right"></i></a>
							</div>
						</div>
					</div>

					<div class="col-12 col-md-6 col-xl-4 my-3">
						<div class="catalog-item">
							<img class="catalog-header-image"
								src="<?php echo get_template_directory_uri() ?>/assets/images/home/c-product-3.png"
								alt="image" />
							<!-- catalog product header -->
							<div class="catalog-product-header">
								<h3 class="catalog-product-header-title">
									Русские бани и сауны
								</h3>
								<img src="<?php echo get_template_directory_uri() ?>/assets/images/home/c-product-3-3.png"
									alt="image" />
							</div>
							<!-- catalog product body -->
							<div class="catalog-product-body">
								<p class="catalog-product-body-description">
									Баня работает при высоком уровне влажности (до 100%),
									температура обычно колеблется от 60°C до 100°C (от 140°F
									до 212°F). Сочетание влажного тепла и пара отличает ее от
									сухой сауны. Вода льется на горячие камни, чтобы
									образовался пар.
								</p>
							</div>

							<div class="catalog-product-btn">
								<a href="<?php echo get_template_directory_uri() ?>/assets/pages/catalog.html"
									class="btn catalog-product-btn">Смотреть каталог <i
										class="fa-solid fa-arrow-right"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- CATALOG PRODUCTS END -->

	<!-- ACCESSORIEST START -->
	<section id="accessories">
		<div class="container">
			<div class="accessories-card-wrapper">
				<h1 class="accessories-header-titile">Аксесуары</h1>
				<div class="row">
					<div class="col-12 col-sm-6 col-lg-4 col-xl-3 my-3">
						<div class="item">
							<div class="item-header">
								<div class="accessories-fashion">ХИТ</div>
								<img src="<?php echo get_template_directory_uri() ?>/assets/images/home/accessories-1.png"
									alt="image" />
							</div>
							<div class="item-body">
								<h3 class="item-body-header">Сумки</h3>

								<p class="item-body-sale">3 990 000 UZS</p>

								<p class="item-body-summ">2 990 000 UZS</p>

								<a href="#" class="btn accessories-btn">Смотреть товары</a>
							</div>
						</div>
					</div>
					<div class="col-12 col-sm-6 col-lg-4 col-xl-3 my-3">
						<div class="item">
							<div class="item-header">
								<div class="accessories-fashion">ХИТ</div>
								<img src="<?php echo get_template_directory_uri() ?>/assets/images/home/accessories-2.png"
									alt="image" />
							</div>
							<div class="item-body">
								<h3 class="item-body-header">Простыни</h3>

								<p class="item-body-sale">3 990 000 UZS</p>

								<p class="item-body-summ">2 990 000 UZS</p>

								<a href="#" class="btn accessories-btn">Смотреть товары</a>
							</div>
						</div>
					</div>
					<div class="col-12 col-sm-6 col-lg-4 col-xl-3 my-3">
						<div class="item">
							<div class="item-header">
								<div class="accessories-fashion">ХИТ</div>
								<img src="<?php echo get_template_directory_uri() ?>/assets/images/home/accessories-1.png"
									alt="image" />
							</div>
							<div class="item-body">
								<h3 class="item-body-header">Сумки</h3>

								<p class="item-body-sale">3 990 000 UZS</p>

								<p class="item-body-summ">2 990 000 UZS</p>

								<a href="#" class="btn accessories-btn">Смотреть товары</a>
							</div>
						</div>
					</div>
					<div class="col-12 col-sm-6 col-lg-4 col-xl-3 my-3">
						<div class="item">
							<div class="item-header">
								<div class="accessories-fashion">ХИТ</div>
								<img src="<?php echo get_template_directory_uri() ?>/assets/images/home/accessories-2.png"
									alt="image" />
							</div>
							<div class="item-body">
								<h3 class="item-body-header">Простыни</h3>

								<p class="item-body-sale">3 990 000 UZS</p>

								<p class="item-body-summ">2 990 000 UZS</p>

								<a href="#" class="btn accessories-btn">Смотреть товары</a>
							</div>
						</div>
					</div>
					<div class="col-12 col-sm-6 col-lg-4 col-xl-3 my-3">
						<div class="item">
							<div class="item-header">
								<div class="accessories-fashion">ХИТ</div>
								<img src="<?php echo get_template_directory_uri() ?>/assets/images/home/accessories-1.png"
									alt="image" />
							</div>
							<div class="item-body">
								<h3 class="item-body-header">Сумки</h3>

								<p class="item-body-sale">3 990 000 UZS</p>

								<p class="item-body-summ">2 990 000 UZS</p>

								<a href="#" class="btn accessories-btn">Смотреть товары</a>
							</div>
						</div>
					</div>
					<div class="col-12 col-sm-6 col-lg-4 col-xl-3 my-3">
						<div class="item">
							<div class="item-header">
								<div class="accessories-fashion">ХИТ</div>
								<img src="<?php echo get_template_directory_uri() ?>/assets/images/home/accessories-2.png"
									alt="image" />
							</div>
							<div class="item-body">
								<h3 class="item-body-header">Простыни</h3>

								<p class="item-body-sale">3 990 000 UZS</p>

								<p class="item-body-summ">2 990 000 UZS</p>

								<a href="#" class="btn accessories-btn">Смотреть товары</a>
							</div>
						</div>
					</div>
					<div class="col-12 col-sm-6 col-lg-4 col-xl-3 my-3">
						<div class="item">
							<div class="item-header">
								<div class="accessories-fashion">ХИТ</div>
								<img src="<?php echo get_template_directory_uri() ?>/assets/images/home/accessories-1.png"
									alt="image" />
							</div>
							<div class="item-body">
								<h3 class="item-body-header">Сумки</h3>

								<p class="item-body-sale">3 990 000 UZS</p>

								<p class="item-body-summ">2 990 000 UZS</p>

								<a href="#" class="btn accessories-btn">Смотреть товары</a>
							</div>
						</div>
					</div>
					<div class="col-12 col-sm-6 col-lg-4 col-xl-3 my-3">
						<div class="item">
							<div class="item-header">
								<div class="accessories-fashion">ХИТ</div>
								<img src="<?php echo get_template_directory_uri() ?>/assets/images/home/accessories-2.png"
									alt="image" />
							</div>
							<div class="item-body">
								<h3 class="item-body-header">Простыни</h3>

								<p class="item-body-sale">3 990 000 UZS</p>

								<p class="item-body-summ">2 990 000 UZS</p>

								<a href="#" class="btn accessories-btn">Смотреть товары</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- ACCESSORIEST END -->

	<!-- FOOTER SWIPER START -->
	<section class="section slider-section">
		<div class="container slider-column">
			<h1 class="slider-section-header">Популярные товары</h1>
			<div class="slider-inner" id="slider">
				<div class="slider-image">
					<div class="row switcher">
						<div class="col-12 col-xl-5 my-2 slider-left-wrapper">
							<div class="switcher-top">
								<img src="https://cdn.pixabay.com/photo/2023/05/22/10/49/houses-8010401_1280.jpg"
									width="100%" />
							</div>
							<div class="switcher-bottom">
								<img src="https://cdn.pixabay.com/photo/2023/05/22/10/49/houses-8010401_1280.jpg"
									width="100%" data-id="1" class="slider_click" />
								<img src="https://cdn.pixabay.com/photo/2023/07/13/05/36/mountains-8123933_1280.jpg"
									width="100%" data-id="2" class="slider_click" />
								<img src="https://cdn.pixabay.com/photo/2022/12/12/21/35/stream-7651969_1280.jpg"
									width="100%" data-id="3" class="slider_click" />
								<img src="https://cdn.pixabay.com/photo/2022/10/24/20/22/muhlviertel-7544316_1280.jpg"
									width="100%" />
								<img src="https://cdn.pixabay.com/photo/2024/02/21/14/14/mountains-8587802_1280.jpg"
									width="100%" />
							</div>

							<div class="switcher-bottom-title">
								<p class="switcher-bottom-sale">3 990 000 UZS</p>
								<p class="switcher-bottom-summ">2 990 000 UZS</p>
							</div>
						</div>
						<div class="col-12 col-xl-7 my-2 slider-right-content">
							<h3 class="slider-right-content-header">Баня гормония</h3>
							<div class="right-content-wrapper">
								<div class="right-content-info">
									<p class="right-content-left-title">Площадь:</p>
									<p class="right-content-right-title">9,84 кВ м</p>
								</div>
								<div class="right-content-info">
									<p class="right-content-left-title">Сроки</p>
									<p class="right-content-right-title">9 дней</p>
								</div>
								<div class="right-content-info">
									<p class="right-content-left-title">Печь</p>
									<p class="right-content-right-title">Aito AK-68</p>
								</div>
							</div>
							<div class="materials-wrapper">
								<h1 class="materials-header">Материалы:</h1>
								<p class="materials-description">
									Ольха, Натуральный камень талькомагнезит
								</p>
							</div>
							<div class="decor-elements-wrapper">
								<h1 class="decor-elements-header">Декоративные элементы</h1>
								<p class="decor-elements-description">
									Светодиодная подсветка потолка и парильного слота,
									талькомагнезит. Столярная вырезка, Краны для подачи воды.
								</p>
							</div>
							<a href="#" class="btn buy-btn" id="buy-btn">Купить</a>
						</div>
					</div>
				</div>

				<div class="slider-image">
					<div class="row switcher">
						<div class="col-12 col-xl-5 my-2 slider-left-wrapper">
							<div class="switcher-top">
								<img src="https://cdn.pixabay.com/photo/2023/05/22/10/49/houses-8010401_1280.jpg"
									width="100%" />
							</div>
							<div class="switcher-bottom">
								<img src="https://cdn.pixabay.com/photo/2023/05/22/10/49/houses-8010401_1280.jpg"
									width="100%" />
								<img src="https://cdn.pixabay.com/photo/2023/07/13/05/36/mountains-8123933_1280.jpg"
									width="100%" />
								<img src="https://cdn.pixabay.com/photo/2022/12/12/21/35/stream-7651969_1280.jpg"
									width="100%" />
								<img src="https://cdn.pixabay.com/photo/2022/10/24/20/22/muhlviertel-7544316_1280.jpg"
									width="100%" />
								<img src="https://cdn.pixabay.com/photo/2024/02/21/14/14/mountains-8587802_1280.jpg"
									width="100%" />
							</div>

							<div class="switcher-bottom-title">
								<p class="switcher-bottom-sale">3 990 000 UZS</p>
								<p class="switcher-bottom-summ">2 990 000 UZS</p>
							</div>
						</div>
						<div class="col-12 col-xl-7 my-2 slider-right-content">
							<h3 class="slider-right-content-header">Баня гормония</h3>
							<div class="right-content-wrapper">
								<div class="right-content-info">
									<p class="right-content-left-title">Площадь:</p>
									<p class="right-content-right-title">9,84 кВ м</p>
								</div>
								<div class="right-content-info">
									<p class="right-content-left-title">Сроки</p>
									<p class="right-content-right-title">9 дней</p>
								</div>
								<div class="right-content-info">
									<p class="right-content-left-title">Печь</p>
									<p class="right-content-right-title">Aito AK-68</p>
								</div>
							</div>
							<div class="materials-wrapper">
								<h1 class="materials-header">Материалы:</h1>
								<p class="materials-description">
									Ольха, Натуральный камень талькомагнезит
								</p>
							</div>
							<div class="decor-elements-wrapper">
								<h1 class="decor-elements-header">Декоративные элементы</h1>
								<p class="decor-elements-description">
									Светодиодная подсветка потолка и парильного слота,
									талькомагнезит. Столярная вырезка, Краны для подачи воды.
								</p>
							</div>
							<a href="#" class="btn buy-btn" id="buy-btn">Купить</a>
						</div>
					</div>
				</div>

				<div class="slider-image">
					<div class="row switcher">
						<div class="col-12 col-xl-5 my-2 slider-left-wrapper">
							<div class="switcher-top">
								<img src="https://cdn.pixabay.com/photo/2023/05/22/10/49/houses-8010401_1280.jpg"
									width="100%" />
							</div>
							<div class="switcher-bottom">
								<img src="https://cdn.pixabay.com/photo/2023/05/22/10/49/houses-8010401_1280.jpg"
									width="100%" />
								<img src="https://cdn.pixabay.com/photo/2023/07/13/05/36/mountains-8123933_1280.jpg"
									width="100%" />
								<img src="https://cdn.pixabay.com/photo/2022/12/12/21/35/stream-7651969_1280.jpg"
									width="100%" />
								<img src="https://cdn.pixabay.com/photo/2022/10/24/20/22/muhlviertel-7544316_1280.jpg"
									width="100%" />
								<img src="https://cdn.pixabay.com/photo/2024/02/21/14/14/mountains-8587802_1280.jpg"
									width="100%" />
							</div>

							<div class="switcher-bottom-title">
								<p class="switcher-bottom-sale">3 990 000 UZS</p>
								<p class="switcher-bottom-summ">2 990 000 UZS</p>
							</div>
						</div>
						<div class="col-12 col-xl-7 my-2 slider-right-content">
							<h3 class="slider-right-content-header">Баня гормония</h3>
							<div class="right-content-wrapper">
								<div class="right-content-info">
									<p class="right-content-left-title">Площадь:</p>
									<p class="right-content-right-title">9,84 кВ м</p>
								</div>
								<div class="right-content-info">
									<p class="right-content-left-title">Сроки</p>
									<p class="right-content-right-title">9 дней</p>
								</div>
								<div class="right-content-info">
									<p class="right-content-left-title">Печь</p>
									<p class="right-content-right-title">Aito AK-68</p>
								</div>
							</div>
							<div class="materials-wrapper">
								<h1 class="materials-header">Материалы:</h1>
								<p class="materials-description">
									Ольха, Натуральный камень талькомагнезит
								</p>
							</div>
							<div class="decor-elements-wrapper">
								<h1 class="decor-elements-header">Декоративные элементы</h1>
								<p class="decor-elements-description">
									Светодиодная подсветка потолка и парильного слота,
									талькомагнезит. Столярная вырезка, Краны для подачи воды.
								</p>
							</div>
							<a href="#" class="btn buy-btn" id="buy-btn">Купить</a>
						</div>
					</div>
				</div>
			</div>
			<span role="tablist" class="pagination"></span>
			<span class="slider-prev"><i class="fa-solid fa-angle-left"></i></span>
			<span class="slider-next"><i class="fa-solid fa-angle-right"></i></span>
		</div>
	</section>
	<!-- FOOTER SWIPER END -->
</main>
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
				<input type="text" class="form-control request-modal-input" placeholder="Введите свое имя" required />
				<input type="tel" class="form-control request-modal-input" placeholder="+998(__) ___-__-__" required />
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
			<img src="<?php echo get_template_directory_uri() ?>/assets/images/modal/request-modal.png" alt="image" />
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
			<img src="<?php echo get_template_directory_uri() ?>/assets/images/modal/request-modal.png" alt="image" />
			<div class="around-image"></div>
		</div>
	</div>
</div>
<!-- ----- order call modal end ----- -->

<div class="overlay hidden" id="overlay"></div>
<!-- MAIN END -->

<?php
get_footer();