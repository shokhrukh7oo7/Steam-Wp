<?php
/*
    Template name: О нас
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
            <div class="about-page-wrapper">
                <div class="row">
                    <div class="col-12 col-xl-8 my-3">
                        <div class="about-left-wrapper">
                            <h1 class="about-left-header">
                                <?php the_field('about_top_header_title') ?>
                            </h1>

                            <div class="about-middle-content-wrapper">
                                <h3 class="about-middle-header-title">
                                    <?php the_field('about_title_under_header') ?>
                                </h3>
                                <p class="about-middle-content-description">
                                    <?php the_field('about_top_description') ?>
                                </p>
                            </div>

                            <div class="about-bottom-content-wrapper">
                                <h3 class="about-bottom-header-title">
                                    <?php the_field('about_list_header') ?>
                                </h3>

                                <?php if (have_rows('about_list')): ?>
                                    <ul>
                                        <?php while (have_rows('about_list')):
                                            the_row();
                                            $icon = get_sub_field('about_icon');
                                            $text = get_sub_field('about_text');
                                            ?>
                                            <li>
                                                <?php if ($icon): ?>
                                                    <img src="<?php echo esc_url($icon); ?>" alt="<?php echo esc_attr($icon) ?>">
                                                <? endif; ?>
                                                <?php echo esc_html($text) ?>
                                            </li>
                                        <?php endwhile; ?>
                                    </ul>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>


                    <div class="col-12 col-xl-4 my-3">
                        <div class="about-swiper-wrapper">
                            <?php if (have_rows('certificates')): ?>
                                <div class="swiper mySwiper">
                                    <div class="swiper-wrapper">
                                        <?php while (have_rows('certificates')):
                                            the_row();
                                            $image = get_sub_field('certificate_image');
                                            ?>
                                            <div class="swiper-slide">
                                                <img src="<?php echo esc_url($image); ?>"
                                                    alt="<?php echo esc_attr(basename($image)); ?>" />
                                            </div>
                                        <?php endwhile; ?>
                                    </div>
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                </div>
                            <?php endif; ?>

                        </div>
                    </div>
                    <!-- <?php if (have_rows('certificates')): ?>
                        <div class="col-12 col-xl-4 my-3">
                            <div class="about-swiper-wrapper">
                                <swiper-container class="mySwiper" navigation="true">
                                    <?php while (have_rows('certificates')):
                                        the_row();
                                        $image = get_sub_field('certificate_image');
                                        ?>
                                        <swiper-slide>
                                            <img src="<?php echo esc_url($image); ?>" alt="<?php echo esc_attr($image); ?>" />
                                        </swiper-slide>
                                    <?php endwhile; ?>
                                </swiper-container>
                            </div>
                        </div>
                    <?php endif; ?> -->

                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="about-us-card-container">
                <div class="about-us-card-header-wrapper">
                    <h1 class="about-us-card-header-title">
                        <?php the_field('about_header_title_bottom') ?>
                    </h1>
                    <p class="about-us-card-header-description">
                        <?php the_field('about_description_title_bottom') ?>
                    </p>
                </div>

                <div class="about-us-card-wrapper">
                    <div class="row">

                        <?php if (have_rows('about_cards')): ?>
                            <?php while (have_rows('about_cards')):
                                the_row();
                                $image = get_sub_field('card_image');
                                $title = get_sub_field('card_header');
                                $description = get_sub_field('card_description');
                                ?>
                                <div class="col-12 col-md-6 col-xl-4 my-2">
                                    <div class="item">
                                        <?php if ($image): ?>
                                            <img src="<?php echo esc_url($image); ?>" alt="<?php echo esc_attr($image); ?>" />
                                        <?php endif; ?>
                                        <?php if ($title): ?>
                                            <h3 class="card-header-title"><?php echo esc_html($title); ?></h3>
                                        <?php endif; ?>
                                        <?php if ($description): ?>
                                            <p class="card-description"><?php echo esc_html($description); ?></p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>

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