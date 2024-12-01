<?php
global $post;
$queried_object = get_queried_object();
$term_id = isset($queried_object->term_id) ? $queried_object->term_id : null;

$products = get_posts([
    'post_type' => 'products',
    'numberposts' => 8,
    'tax_query' => array(
        array(
            'taxonomy' => 'products_category',
            'field' => 'id',
            'terms' => array($term_id)
        )
    ),
]);

get_header();
?>

<main>
    <section>
        <div class="container">
            <?php
            if (function_exists('yoast_breadcrumb')) {
                yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
            }
            ?>
            <div class="catalog-item">
                <div class="catalog-item-header-wrapper">
                    <h1 class="catalog-item-header-title"><?php single_term_title(); ?></h1>
                </div>
                <div class="row">
                    <?php if ($products): ?>
                        <?php foreach ($products as $post): ?>
                            <?php setup_postdata($post); ?>

                            <div class="col-12 col-sm-6 col-lg-4 col-xl-3 my-2">
                                <div class="card">
                                    <div class="swiper mySwiper">
                                        <div class="swiper-wrapper">
                                            <?php if (have_rows('gallery')): ?>
                                                <?php while (have_rows('gallery')):
                                                    the_row(); ?>
                                                    <?php $photo = get_sub_field('photo'); ?>
                                                    <?php if ($photo): ?>
                                                        <div class="swiper-slide">
                                                            <img src="<?php echo esc_url($photo); ?>" alt="image">
                                                        </div>
                                                    <?php endif; ?>
                                                <?php endwhile; ?>
                                            <?php endif; ?>
                                        </div>
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
                        <?php endforeach; ?>
                        <?php wp_reset_postdata(); ?>
                    <?php else: ?>
                        <p>Нет доступных продуктов.</p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>