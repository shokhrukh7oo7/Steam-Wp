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
							<?php the_field("footer_email_title", "option") ?>
						</p>
					</div>
					<div class="col-12 col-md-6 my-3">
						<form>
							<input type="email" class="form-control"
								placeholder="<?php the_field("footer_email_placeholder", "option") ?>" />
							<a href="<?php the_field("footer_email_button_url", "option") ?>" class="btn footer-top-btn"
								id="footer-top-btn">
								<?php the_field("footer_email_button_text", "option") ?>
							</a>
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
							<?php wp_nav_menu([
								'theme_location' => 'footer_left',
								'container' => false, // Убирает контейнер <div>
								'menu_class' => 'footer-middle-links', // Класс для <ul>
								'menu_id' => false, // Убирает id у <ul>
								'items_wrap' => '<h3 class="footer-middle-header">Каталог товаров</h3><ul class="%2$s">%3$s</ul>', // Контролирует структуру <ul>
								'depth' => 2, // Глубина вложенности меню
							]) ?>
						</div>

						<div class="col-12 col-sm-6 my-2">
							<?php wp_nav_menu([
								'theme_location' => 'footer_right',
								'container' => false, // Убирает контейнер <div>
								'menu_class' => 'footer-middle-links', // Класс для <ul>
								'menu_id' => false, // Убирает id у <ul>
								'items_wrap' => '<h3 class="footer-middle-header">Покупателям</h3><ul class="%2$s">%3$s</ul>', // Контролирует структуру <ul>
								'depth' => 2, // Глубина вложенности меню
							]) ?>
						</div>
					</div>
				</div>

				<div class="col-12 col-lg-6 my-2">
					<div class="row">
						<div class="col-12 col-sm-6 col-lg-6 col-xl-4 my-2">
							<?php if (!dynamic_sidebar('sidebar-footer-contacts')):
								dynamic_sidebar('sidebar-footer-contacts');
							endif; ?>
						</div>

						<div class="col-12 col-sm-6 col-lg-6 col-xl-4 my-2">
							<?php if (!dynamic_sidebar('sidebar-footer-contacts-2')):
								dynamic_sidebar('sidebar-footer-contacts-2');
							endif; ?>
						</div>

						<div class="col-12 col-lg-6 col-xl-4 my-2">
							<button class="btn footer-middle-btn" id="footer-middle-btn">
								<?php if (!dynamic_sidebar('sidebar-footer-order-call')):
									dynamic_sidebar('sidebar-footer-order-call');
								endif; ?>
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
						<?php if (have_rows('details_links', 'option')): ?>
							<?php while (have_rows('details_links', 'option')):
								the_row(); ?>
								<a href="<?php the_sub_field('link_url'); ?>" class="details">
									<?php the_sub_field('link_text'); ?>
								</a>
							<?php endwhile; ?>
						<?php endif; ?>
					</div>

					<div class="footer-bottom-right-wrapper">
						<div class="pay-wrapper">
							<?php if (have_rows('payment_icons', 'option')): ?>
								<?php while (have_rows('payment_icons', 'option')):
									the_row(); ?>
									<a href="<?php the_sub_field('icon_link', 'option'); ?>">
										<img src="<?php the_sub_field('icon_url', 'option'); ?>" alt="icon">
									</a>
								<?php endwhile; ?>
							<?php endif; ?>
						</div>

						<div class="online-chat-wrapper">
							<p class="online-chat-title">
								<?php the_field("online-chat", "option"); ?>
							</p>
							<div class="footer-social-wrapper">
								<?php if (have_rows('social_links', 'option')): ?>
									<?php while (have_rows('social_links', 'option')):
										the_row();
										$url_foot = get_sub_field('link_url', 'option');
										$icon_foot = get_sub_field('link_image', 'option');
										?>
										<a href="<?php echo esc_url($url_foot, 'option'); ?>">
											<img src="<?php echo esc_html($icon_foot, 'option'); ?>" alt="icon">
										</a>
									<?php endwhile; ?>
								<?php endif; ?>
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