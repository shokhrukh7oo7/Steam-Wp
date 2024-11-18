<div class="row">
    <?php
    // Настраиваем WP_Query для каталога
    $args = [
        'post_type' => 'catalog_steam', // Ваш тип записи
        'posts_per_page' => 6, // Количество записей (6 — последние 6 записи)
        'orderby' => 'date', // Упорядочивание по дате
        'order' => 'DESC', // В порядке убывания (самые новые первыми)
    ];
    $catalog_query = new WP_Query($args);

    if ($catalog_query->have_posts()):
        while ($catalog_query->have_posts()):
            $catalog_query->the_post();
            // Получаем данные из ACF
            $header_image = get_field('catalog_header_image'); // Изображение продукта
            $header_title = get_field('catalog_product_title'); // Заголовок продукта
            $header_icon = get_field('catalog_header_icon'); // Иконка/изображение в заголовке
            $description = get_field('catalog_description'); // Описание продукта
            $catalog_link = get_field('catalog_link'); // Ссылка на каталог
            ?>
            <div class="col-12 col-md-6 col-xl-4 my-3">
                <div class="catalog-item">
                    <img class="catalog-header-image" src="<?php echo esc_url($header_image); ?>"
                        alt="<?php echo esc_attr($header_image); ?>" />
                    <!-- catalog product header -->
                    <div class="catalog-product-header">
                        <h3 class="catalog-product-header-title">
                            <?php echo esc_html($header_title); ?>
                        </h3>
                        <img src="<?php echo esc_url($header_icon); ?>" alt="<?php echo esc_attr($header_icon); ?>" />
                    </div>
                    <!-- catalog product body -->
                    <div class="catalog-product-body">
                        <p class="catalog-product-body-description">
                            <?php echo esc_html($description); ?>
                        </p>
                    </div>

                    <div class="catalog-product-btn">
                        <a href="<?php echo esc_url($catalog_link); ?>" class="btn catalog-product-btn">Смотреть каталог <i
                                class="fa-solid fa-arrow-right"></i></a>
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