<div class="row">

    <?php
    // Настраиваем WP_Query для аксессуары
    $args = [
        'post_type' => 'accessories', // Ваш тип записи
        'posts_per_page' => 8, // Количество записей (8 - последние 8 записи)
        'orderby' => 'date',
        'order' => 'DESC',
    ];
    $accessories_query = new WP_Query($args);

    if ($accessories_query->have_posts()):
        while ($accessories_query->have_posts()):
            $accessories_query->the_post();

            $accessories_image = get_field('accessories_header_image'); 
            $accessories_header_title = get_field('accessories_product_title'); 
            $accessories_sale_title = get_field('accessories_sale_title'); 
            $accessories_summ = get_field('accessories_summ'); 
            $accessories_btn_link = get_field('accessories_btn_link'); 
            ?>

            <div class="col-12 col-sm-6 col-lg-4 col-xl-3 my-3">
                <div class="item">
                    <div class="item-header">
                        <div class="accessories-fashion">ХИТ</div>
                        <img src="<?php echo esc_url($accessories_image) ?>" alt="<?php echo esc_attr($accessories_image) ?>" />
                    </div>
                    <div class="item-body">
                        <h3 class="item-body-header">
                            <?php echo esc_html($accessories_header_title) ?>
                        </h3>

                        <p class="item-body-sale">
                            <?php echo esc_html($accessories_sale_title) ?>
                        </p>

                        <p class="item-body-summ">
                            <?php echo esc_html($accessories_summ) ?>
                        </p>

                        <a href="<?php echo esc_url($accessories_btn_link) ?>"
                            class="btn accessories-btn"><?php the_field('accessories_btn_title') ?>
                        </a>
                    </div>
                </div>
            </div>

            <?php
        endwhile;
        wp_reset_postdata();
    else:
        echo '<p>Продукты не найдены.</p>';
    endif;
    ?>
</div>