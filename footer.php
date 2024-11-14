<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package steam
 */

?>

<!-- FOOTER START -->
<footer>
	<div class="footer-top-wrapper">
		<!-- footer top start -->
		<div class="container">
			<div class="footer-top-wrapper-box">
				<div class="row">
					<div class="col-12 col-md-6 my-3">
						<p class="footer-top-title">
							Оставьте свой адрес электронной почты и получите первыми
							скидку на новые продукты
						</p>
					</div>
					<div class="col-12 col-md-6 my-3">
						<form>
							<input type="email" class="form-control" placeholder="Введите Ваш email" />
							<button class="btn footer-top-btn" id="footer-top-btn">
								Подписаться
							</button>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- footer top start -->
	</div>
	<div class="footer-middle-wrapper">
		<div class="container">
			<div class="row">
				<div class="col-12 col-lg-6 my-2">
					<div class="row">
						<div class="col-12 col-sm-6 my-2">
							<h3 class="footer-middle-header">Каталог товаров</h3>
							<ul class="footer-middle-links">
								<li class="link">
									<a href="#">Печи</a>
								</li>
								<li class="link">
									<a href="#">Камни для сауны</a>
								</li>
								<li class="link">
									<a href="#">Аксессуары</a>
								</li>
								<li class="link">
									<a href="#">Материалы для строительства</a>
								</li>
							</ul>
						</div>
						<div class="col-12 col-sm-6 my-2">
							<h3 class="footer-middle-header">Покупателям</h3>
							<ul class="footer-middle-links">
								<li class="link">
									<a href="#">Услуги</a>
								</li>
								<li class="link">
									<a href="#">О компании</a>
								</li>
								<li class="link">
									<a href="#">Контакты</a>
								</li>
								<li class="link">
									<a href="#">Акции</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-12 col-lg-6 my-2">
					<div class="row">
						<div class="col-12 col-sm-6 col-lg-6 col-xl-4 my-2">
							<h3 class="footer-middle-header">Контакты</h3>
							<ul class="footer-middle-links">
								<li class="link">Call-центр</li>
								<li class="link-phone">
									<a href="#">+998 (50) 074 20 00</a>
								</li>
								<li class="link">Пн-Вс 10:00 - 20:00</li>
							</ul>
						</div>
						<div class="col-12 col-sm-6 col-lg-6 col-xl-4 my-2">
							<h3 class="footer-middle-header footer-middle-header-none">
								Контакты
							</h3>
							<ul class="footer-middle-links">
								<li class="link">Call-центр</li>
								<li class="link-phone">
									<a href="#">+998 (50) 074 20 00</a>
								</li>
								<li class="link">Пн-Вс 10:00 - 20:00</li>
							</ul>
						</div>
						<div class="col-12 col-lg-6 col-xl-4 my-2">
							<button class="btn footer-middle-btn" id="footer-middle-btn">
								Заказать зваонок
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="footer-bottom-wrapper">
		<div class="container">
			<div class="footer-bottom-wrapper-box">
				<div class="footer-bottom-items">
					<div class="footer-bootom-left-wrapper">
						<a href="#" class="details">Реквизиты</a>
						<a href="#" class="details">Политика конфиденциальности</a>
					</div>
					<div class="footer-bottom-right-wrapper">
						<div class="pay-wrapper">
							<a href="#">
								<img src="<?php echo get_template_directory_uri()?>/assets/images/footer/GooglePay.svg" alt="image" />
							</a>
							<a href="#">
								<img src="<?php echo get_template_directory_uri()?>/assets/images/footer/ApplePay.svg" alt="image" />
							</a>
							<a href="#">
								<img src="<?php echo get_template_directory_uri()?>/assets/images/footer/visa-logo.svg" alt="image" />
							</a>
							<a href="#">
								<img src="<?php echo get_template_directory_uri()?>/assets/images/footer/Mastercard.svg" />
							</a>
							<a href="#">
								<img src="<?php echo get_template_directory_uri()?>/assets/images/footer/Maestro.svg" alt="image" />
							</a>
							<a href="#">
								<img src="<?php echo get_template_directory_uri()?>/assets/images/footer/Webmoney.svg" alt="image" />
							</a>
							<a href="#">
								<img src="<?php echo get_template_directory_uri()?>/assets/images/footer/Qiwi.svg" alt="image" />
							</a>
						</div>

						<div class="online-chat-wrapper">
							<p class="online-chat-title">Онлайн чат :</p>
							<div class="footer-social-wrapper">
								<a href="#"><img src="<?php echo get_template_directory_uri()?>/assets/images/header/viber.svg" alt="image" /></a>
								<a href="#"><img src="<?php echo get_template_directory_uri()?>/assets/images/header/whatsapp.svg" alt="image" /></a>
								<a href="#"><img src="<?php echo get_template_directory_uri()?>/assets/images/header/telegram.svg" alt="image" /></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>
<!-- FOOTER END -->

<?php wp_footer(); ?>

</body>

</html>