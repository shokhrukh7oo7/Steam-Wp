<?php
/*
    Template name: Главная страница
*/
get_header();
?>

<!-- MAIN START -->
<main>
    <!-- BANNER SLIDER START (✅)-->
    <?php
    $banner_image = get_field('banner_bg'); // Получаем URL изображения
    ?>
    <section id="banner-swiper" style="--banner-image: url('<?php echo esc_url($banner_image); ?>');">
        <div class="container">
            <div class="slider">
                <?php if (have_rows('slider')): ?>
                    <?php $slide_index = 1;
                    $total_slides = count(get_field('slider')); ?>
                    <?php while (have_rows('slider')):
                        the_row(); ?>
                        <div class="slide <?php echo $slide_index === 1 ? 'active' : ''; ?>">
                            <div class="text-content">
                                <p><?php the_sub_field('slide_text'); ?></p>
                                <h1><?php the_sub_field('slide_heading'); ?></h1>
                                <a class="button" href="<?php echo get_the_permalink(30) ?>">
                                    <?php the_field('button_text'); ?>
                                </a>
                                <div class="pagination">
                                    <i class="fas fa-chevron-left" onclick="prevSlide()"></i>
                                    <span id="current-slide"><?php echo $slide_index; ?></span>
                                    <span>—</span>
                                    <span id="total-slides"><?php echo $total_slides; ?></span>
                                    <i class="fas fa-chevron-right" onclick="nextSlide()"></i>
                                </div>
                            </div>
                            <div class="image-content">
                                <img src="<?php echo get_sub_field('slide_image') ?>"
                                    alt="<?php echo get_sub_field('slide_image') ?>">
                            </div>
                        </div>
                        <?php $slide_index++; ?>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <!-- BANNER SLIDER END (✅)-->

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
                        <?php
                        // $taxonomy = get_taxonomy("products_category");
                        $args = [
                            'taxonomy' => ['products_category'], // название таксономии с WP 4.5
                            'orderby' => 'id',
                            'order' => 'ASC',
                            'hide_empty' => false,
                        ];

                        $terms = get_terms($args);

                        foreach ($terms as $term) {
                            $showInTabs = get_field('show_in_tabs', $term);
                            if ($showInTabs == "yes") {
                                ?>
                                <li class="ap-tab-item active" data-category="products_category_<?= $term->term_id; ?>">
                                    <?php
                                    echo $term->name;
                                    ?>
                                </li>
                            <?
                            }
                        }
                        ?>
                    </ul>
                </div>
                <!-- tab links end -->

                <!-- tab description start -->
                <div class="ap-tab-content">
                    <div class="ap-tab-row">

                        <?php
                        global $post;
                        foreach ($terms as $term) {
                            $products = get_posts([
                                'post_type' => 'products',
                                'numberposts' => 8,
                                'tax_query' => array(
                                    array(
                                        'taxonomy' => 'products_category',
                                        'field' => 'id',
                                        'terms' => array($term->term_id)
                                    )
                                ),
                            ]);
                            foreach ($products as $post) {
                                setup_postdata($post);
                                ?>

                                <div class="col-12 col-sm-6 col-lg-4 col-xl-3 my-2">
                                    <div class="card" data-category="products_category_<?= $term->term_id; ?>">
                                        <?php
                                        // echo get_term_link($term->term_id);
                                        if (has_term('hit', 'product_tags', $post->ID)) {
                                            ?>
                                            <p class="red-tag">ХИТ</p>
                                        <?
                                        } elseif (has_term('new', 'product_tags', $post->ID)) {
                                            ?>
                                            <p class="green-tag">Новинка</p>
                                        <?
                                        } ?>
                                        <div class="swiper mySwiper">
                                            <div class="swiper-wrapper">
                                                <?php if (have_rows('gallery')): // Проверяем, есть ли записи в повторителе ?>
                                                    <?php while (have_rows('gallery')):
                                                        the_row(); // Перебираем записи повторителя ?>
                                                        <?php $photo = get_sub_field('photo'); // Получаем поле photo из повторителя ?>
                                                        <?php if ($photo): // Проверяем, что поле photo заполнено ?>
                                                            <div class="swiper-slide">
                                                                <img src="<?php echo esc_url($photo); ?>" alt="image">
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endwhile; ?>
                                                <?php endif; ?>
                                            </div>
                                            <!-- Элементы управления -->
                                            <div class="swiper-button-next"></div>
                                            <div class="swiper-button-prev"></div>
                                        </div>

                                        <h4><?php the_title(); ?></h4>
                                        <p class="sale"><?php the_field('price') ?> UZS</p>
                                        <p class="product-summ"><?php the_field('sale_price') ?> UZS</p>
                                        <a href="/assets/pages/catalog.html" class="btn view-products" id="view-products">
                                            <?php the_field('btn_text') ?>
                                        </a>
                                    </div>
                                </div>
                                <?php
                            }
                            wp_reset_postdata();
                        }
                        ?>
                    </div>
                </div>
                <!-- tab description end -->
            </div>
        </div>
    </section>
    <!-- CATEGORY PRODUCT END -->

    <!-- CONSTRUCTION SERVICE START (✅)-->
    <section id="c-service">
        <div class="container">
            <div class="construction-service-wrapper">
                <div class="construction-service-info">
                    <div class="row">
                        <?php if (have_rows('services')): ?>
                            <?php while (have_rows('services')):
                                the_row(); ?>
                                <div class="col-12 col-sm-6 col-md-4 col-lg-3 my-3">
                                    <div class="item">
                                        <img src="<?php the_sub_field('service_image'); ?>" alt="image" />
                                        <h2 class="construction-service-info-header-title">
                                            <?php the_sub_field('service_title'); ?>
                                        </h2>
                                        <p class="construction-service-info-description-title">
                                            <?php the_sub_field('service_description'); ?>
                                        </p>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>


                <div class="construction-service-banner" style="
                background-image: url('<?php the_field('service_banner_image'); ?>');">
                    <!-- <img src="/assets/images/home/c-service-banner.png" alt="image"> -->
                    <div class="construction-service-banner-title-wrapper">
                        <h1 class="construction-service-banner-header-title">
                            <?php the_field('service_banner_header_title') ?>
                        </h1>
                        <p class="construction-service-banner-description-title">
                            <?php the_field('service_banner_description') ?>
                        </p>

                        <a href="<?php echo get_the_permalink(30) ?>" class="btn constuction-service-banner-btn">
                            <?php the_field('service_banner_button_text') ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- CONSTRUCTION SERVICE END (✅)--->

    <!-- CATALOG PRODUCTS START (✅)-->
    <section id="catalog-products">
        <div class="container">
            <div class="catalog-products-wrapper">
                <div class="catalog-products-wrapper-header-wrapper">
                    <h1 class="catalog-products-wrapper-header-title">
                        <?php the_field('catalog_header_title') ?>
                    </h1>
                    <?php
                    $catalog_text = get_field('catalog_download_text'); // Текст ссылки
                    $catalog_file = get_field('catalog_file_url'); // URL файла
                    if ($catalog_text && $catalog_file): ?>
                        <a href="<?php echo esc_url($catalog_file); ?>" class="download-file" target="_blank">
                            <?php echo esc_html($catalog_text); ?> <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    <?php endif; ?>
                </div>

                <?php get_template_part('template-parts/catalog-section') ?>
            </div>
        </div>
    </section>
    <!-- CATALOG PRODUCTS END (✅)-->

    <!-- ACCESSORIEST START (✅)-->
    <section id="accessories">
        <div class="container">
            <div class="accessories-card-wrapper">
                <h1 class="accessories-header-titile"><?php the_field('accessories_header_title') ?></h1>

                <?php get_template_part('template-parts/accessories') ?>

            </div>
        </div>
    </section>
    <!-- ACCESSORIEST END (✅)-->

    <!-- FOOTER SWIPER START  (✅) -->
    <section class="section slider-section">
        <div class="container slider-column">
            <h1 class="slider-section-header">Популярные товары</h1>
            <?php if (have_rows('slider_items')): ?>
                <div class="slider-inner" id="slider">
                    <?php while (have_rows('slider_items')):
                        the_row(); ?>
                        <div class="slider-image">
                            <div class="row switcher">
                                <div class="col-12 col-xl-5 my-2 slider-left-wrapper">
                                    <div class="switcher-top">
                                        <img src="<?php echo get_sub_field('top_image'); ?>"
                                            alt="<?php echo get_sub_field('top_image'); ?>" width="100%" />
                                    </div>
                                    <div class="switcher-bottom">
                                        <?php if (have_rows('bottom_images')): ?>
                                            <?php while (have_rows('bottom_images')):
                                                the_row(); ?>
                                                <img src="<?php echo get_sub_field('image'); ?>"
                                                    alt="<?php echo get_sub_field('image'); ?>" width="100%"
                                                    data-id="<?php echo get_sub_field('data_id'); ?>" class="slider_click" />
                                            <?php endwhile; ?>
                                        <?php endif; ?>
                                    </div>
                                    <div class="switcher-bottom-title">
                                        <p class="switcher-bottom-sale"><?php the_sub_field('old_price'); ?> UZS</p>
                                        <p class="switcher-bottom-summ"><?php the_sub_field('new_price'); ?> UZS</p>
                                    </div>
                                </div>

                                <div class="col-12 col-xl-7 my-2 slider-right-content">
                                    <h3 class="slider-right-content-header"><?php the_sub_field('title'); ?></h3>
                                    <div class="right-content-wrapper">
                                        <?php if (have_rows('features')): ?>
                                            <?php while (have_rows('features')):
                                                the_row(); ?>
                                                <div class="right-content-info">
                                                    <p class="right-content-left-title"><?php the_sub_field('feature_title'); ?></p>
                                                    <p class="right-content-right-title"><?php the_sub_field('feature_description'); ?>
                                                    </p>
                                                </div>
                                            <?php endwhile; ?>
                                        <?php endif; ?>
                                    </div>
                                    <div class="materials-wrapper">
                                        <h1 class="materials-header"><?php the_sub_field('materials_header') ?></h1>
                                        <p class="materials-description"><?php the_sub_field('materials'); ?></p>
                                    </div>
                                    <div class="decor-elements-wrapper">
                                        <h1 class="decor-elements-header"><?php the_sub_field('decor_elements_header') ?></h1>
                                        <p class="decor-elements-description"><?php the_sub_field('decor_elements'); ?></p>
                                    </div>
                                    <a href="#" class="btn buy-btn" id="buy-btn"><?php the_sub_field('text_btn') ?></a>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>

            <span role="tablist" class="pagination"></span>
            <span class="slider-prev"><i class="fa-solid fa-angle-left"></i></span>
            <span class="slider-next"><i class="fa-solid fa-angle-right"></i></span>
        </div>
    </section>
    <!-- FOOTER SWIPER END -->
</main>

<?php
get_footer();
?>