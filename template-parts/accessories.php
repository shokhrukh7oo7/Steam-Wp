<div class="row">
    <?php
    $tags = get_terms(array(
        'taxonomy' => 'product_accessories',
        'hide_empty' => false,
        'fields' => 'ids',
    ));

    $args = [
        'post_type' => 'products',
        'posts_per_page' => 8,
        'orderby' => 'date',
        'order' => 'DESC',
        'tax_query' => array(
            array(
                'taxonomy' => 'product_accessories',
                'field' => 'id',
                'terms' => $tags,
            )
        ),
    ];

    $accessories_query = new WP_Query($args);

    if ($accessories_query->have_posts()):
        // Сохраняем записи в массив
        $posts = $accessories_query->posts;
        wp_reset_postdata();

        // Перебираем записи через foreach
        foreach ($posts as $post):
            setup_postdata($post); ?>

            <div class="col-12 col-sm-6 col-lg-4 col-xl-3 my-3">
                <div class="item">
                    <div class="item-header">
                        <!-- <div class="accessories-fashion">ХИТ</div> -->
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
                    </div>
                    <div class="item-body">
                        <h3 class="item-body-header"><?php the_title(); ?></h3>
                        <p class="item-body-sale"><?php the_field('price'); ?> UZS</p>
                        <p class="item-body-summ"><?php the_field('sale_price'); ?></p>
                        <a href="<?php the_field('btn_link'); ?>" class="btn accessories-btn">
                            <?php the_field('btn_text'); ?>
                        </a>
                    </div>
                </div>
            </div>

        <?php endforeach;
        wp_reset_postdata();
    else:
        echo '<p>Продукты не найдены.</p>';
    endif;
    ?>
</div>