<?php
/*
    Template name: Контакты
*/
get_header();
?>

<section>
  <div class="container">
    <?php
    if (function_exists('yoast_breadcrumb')) {
      yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
    }
    ?>
    <div class="contact-wrapper">
      <div class="row">
        <div class="col-12 col-lg-6 my-3">
          <div class="contact-left-wrapper">
            <h1 class="contact-left-header">
              <?php the_field('contact_header_title') ?>
            </h1>

            <div class="contact-info">
              <div class="contact-info-img contact-info-img-loc">
                <img src="<?php the_field('address_section_image') ?>" alt="image" />
              </div>

              <div class="contact-info-title">
                <p class="contact-info-head">
                  <?php the_field('address_title') ?>
                </p>
                <p class="contact-info-desc">
                  <?php the_field('work_day') ?>
                </p>
                <p class="contact-info-desc">
                  <?php the_field('day_off') ?>
                </p>
              </div>
            </div>
            <div class="contact-info">
              <div class="contact-info-img">
                <img src="<?php the_field('phone_section_image') ?>" alt="image" />
              </div>

              <div class="contact-info-title">
                <p class="contact-info-head">
                  <?php the_field('phone_number') ?>
                </p>
              </div>
            </div>
            <div class="contact-info">
              <div class="contact-info-img extra-info">
                <img src="<?php the_field('extra_information_section_image') ?>" alt="image" />
              </div>

              <div class="contact-info-title">
                <p class="contact-info-desc">
                  <?php the_field('extra_information_description') ?>
                  <span><?php the_field('extra_information_bold') ?></span>
                </p>
              </div>
            </div>
          </div>
        </div>

        <div class="col-12 col-lg-6 my-3">
          <div class="contact-right-wrapper">
            <?php
            $google_maps_url = get_field('google_maps_url'); // Получаем ссылку на карту
            if ($google_maps_url): ?>
              <iframe src="<?php echo esc_url($google_maps_url); ?>" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
              </iframe>
            <?php endif; ?>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>

<?php
get_footer();
?>