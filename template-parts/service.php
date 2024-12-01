<?php
/*
    Template name: Услуги
*/
get_header();
?>

<!-- MAIN START -->
<main>
  <section>
    <div class="container">
      <?php
      if (function_exists('yoast_breadcrumb')) {
        yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
      }
      ?>
      <div class="servise-top-information-wrapper">
        <div class="service-top-information-header">
          <?php the_field('service_header_title') ?>
        </div>

        <div class="row">
          <div class="col-12 col-xl-4">
            <div class="service-top-left-wrapper">
              <div class="service-info">
                <h2 class="service-info-header"><?php the_field('service_info_header') ?></h2>
                <p class="service-info-description">
                  <?php the_field('service_info_description') ?>
                </p>
              </div>
              <div class="service-info">
                <h2 class="service-info-header">
                  <?php the_field('service_info_header_middle') ?>
                </h2>
                <p class="service-info-description">
                  <?php the_field('service_info_description_middle') ?>
                </p>
              </div>
              <div class="service-info">
                <h2 class="service-info-header">
                  <?php the_field('service_info_header_bottom') ?>
                </h2>
                <p class="service-info-description">
                  <?php the_field('service_info_description_bottom') ?>
                </p>
              </div>
            </div>
          </div>


          <div class="col-12 col-xl-4">
            <div class="video-container">
              <video controls>
                <source src="<?php the_field('video_file') ?>" type="video/mp4">
              </video>
              <div class="play-button" onclick="togglePlay()"></div>
            </div>
          </div>


          <div class="col-12 col-xl-4">
            <div class="service-top-right-wrapper">
              <div class="service-info">
                <h2 class="service-info-header">
                  <?php the_field('service_info_header_right') ?>
                </h2>
                <p class="service-info-description">
                  <?php the_field('service_info_description_right') ?>
                </p>
              </div>
              <div class="service-info">
                <h2 class="service-info-header">
                  <?php the_field('service_info_header_middle_right') ?>
                </h2>
                <p class="service-info-description">
                  <?php the_field('service_info_description_middle_right') ?>
                </p>
              </div>
              <div class="service-info">
                <h2 class="service-info-header">
                  <?php the_field('service_info_header_bottom_right') ?>
                </h2>
                <p class="service-info-description">
                  <?php the_field('service_info_description_bottom_right') ?>
                </p>
              </div>
            </div>
          </div>
        </div>

        <div class="service-top-info-btn">
          <button class="btn service-leave-request-btn" id="service-leave-request-btn">
            <?php the_field('service_btn_title') ?>
          </button>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="container">
      <div class="service-bottom-information-wrapper">
        <div class="row">
          <div class="col-12 col-xl-6 my-3">
            <div class="service-bottom-info-wrapper">
              <h1 class="top-header">
                <?php the_field('service_header_bottom_block') ?>
              </h1>

              <p class="top-header-description">
                <?php the_field('service_title_under_header') ?>
              </p>

              <p class="top-header-description">
                <?php the_field('service_description_bottom_block') ?>
              </p>

              <p class="bottom-header">
                <?php the_field('service_list_header') ?>
              </p>

              <?php if (have_rows('services_list')): ?>
                <ul>
                  <?php while (have_rows('services_list')):
                    the_row();
                    $icon = get_sub_field('service_icon');
                    $text = get_sub_field('service_text');
                    ?>
                    <li>
                      <?php if ($icon): ?>
                        <img src="<?php echo esc_url($icon); ?>" alt="<?php echo esc_attr($icon); ?>">
                      <?php endif; ?>
                      <?php echo esc_html($text); ?>
                    </li>
                  <?php endwhile; ?>
                </ul>
              <?php endif; ?>
            </div>
          </div>

          <div class="col-12 col-xl-6 my-3">
            <div class="service-bottom-info-image-wrapper">
              <img src="<?php the_field('service_big_image') ?>" alt="image" />
              <div class="service-image-info">
                <img src="<?php the_field('service_small_image') ?>" alt="image" />
                <div class="service-image-title">
                  <p class="top-title">
                    <?php the_field('service_header_small_image') ?>
                  </p>
                  <h5 class="middle-title">
                    <?php the_field('service_description_small_image') ?>
                  </h5>
                  <p class="bottom-title">
                    <?php the_field('service_extra_description_small_image') ?>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
<!-- MAIN END -->

<?php
get_footer();
?>