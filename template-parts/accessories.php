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

    if($accessories_query->have_posts()):
        while($accessories_query->have_posts()):
            $accessories_query->the_post();

            $accessories_image = get_field('accessories_header_image');
            $accessories_header_title = get_field('accessories_product_title');
            $accessories_sale_title = get_field('accessories_sale_title');
            $accessories_summ = get_field('accessories_summ');
    ?>

    <div class="col-12 col-sm-6 col-lg-4 col-xl-3 my-3">
        <div class="item">
            <div class="item-header">
                <div class="accessories-fashion">ХИТ</div>
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/home/accessories-1.png"
                    alt="image" />
            </div>
            <div class="item-body">
                <h3 class="item-body-header">Сумки</h3>

                <p class="item-body-sale">3 990 000 UZS</p>

                <p class="item-body-summ">2 990 000 UZS</p>

                <a href="#" class="btn accessories-btn">Смотреть товары</a>
            </div>
        </div>
    </div>
    <div class="col-12 col-sm-6 col-lg-4 col-xl-3 my-3">
        <div class="item">
            <div class="item-header">
                <div class="accessories-fashion">ХИТ</div>
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/home/accessories-2.png"
                    alt="image" />
            </div>
            <div class="item-body">
                <h3 class="item-body-header">Простыни</h3>

                <p class="item-body-sale">3 990 000 UZS</p>

                <p class="item-body-summ">2 990 000 UZS</p>

                <a href="#" class="btn accessories-btn">Смотреть товары</a>
            </div>
        </div>
    </div>
    <div class="col-12 col-sm-6 col-lg-4 col-xl-3 my-3">
        <div class="item">
            <div class="item-header">
                <div class="accessories-fashion">ХИТ</div>
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/home/accessories-1.png"
                    alt="image" />
            </div>
            <div class="item-body">
                <h3 class="item-body-header">Сумки</h3>

                <p class="item-body-sale">3 990 000 UZS</p>

                <p class="item-body-summ">2 990 000 UZS</p>

                <a href="#" class="btn accessories-btn">Смотреть товары</a>
            </div>
        </div>
    </div>
    <div class="col-12 col-sm-6 col-lg-4 col-xl-3 my-3">
        <div class="item">
            <div class="item-header">
                <div class="accessories-fashion">ХИТ</div>
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/home/accessories-2.png"
                    alt="image" />
            </div>
            <div class="item-body">
                <h3 class="item-body-header">Простыни</h3>

                <p class="item-body-sale">3 990 000 UZS</p>

                <p class="item-body-summ">2 990 000 UZS</p>

                <a href="#" class="btn accessories-btn">Смотреть товары</a>
            </div>
        </div>
    </div>
    <div class="col-12 col-sm-6 col-lg-4 col-xl-3 my-3">
        <div class="item">
            <div class="item-header">
                <div class="accessories-fashion">ХИТ</div>
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/home/accessories-1.png"
                    alt="image" />
            </div>
            <div class="item-body">
                <h3 class="item-body-header">Сумки</h3>

                <p class="item-body-sale">3 990 000 UZS</p>

                <p class="item-body-summ">2 990 000 UZS</p>

                <a href="#" class="btn accessories-btn">Смотреть товары</a>
            </div>
        </div>
    </div>
    <div class="col-12 col-sm-6 col-lg-4 col-xl-3 my-3">
        <div class="item">
            <div class="item-header">
                <div class="accessories-fashion">ХИТ</div>
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/home/accessories-2.png"
                    alt="image" />
            </div>
            <div class="item-body">
                <h3 class="item-body-header">Простыни</h3>

                <p class="item-body-sale">3 990 000 UZS</p>

                <p class="item-body-summ">2 990 000 UZS</p>

                <a href="#" class="btn accessories-btn">Смотреть товары</a>
            </div>
        </div>
    </div>
    <div class="col-12 col-sm-6 col-lg-4 col-xl-3 my-3">
        <div class="item">
            <div class="item-header">
                <div class="accessories-fashion">ХИТ</div>
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/home/accessories-1.png"
                    alt="image" />
            </div>
            <div class="item-body">
                <h3 class="item-body-header">Сумки</h3>

                <p class="item-body-sale">3 990 000 UZS</p>

                <p class="item-body-summ">2 990 000 UZS</p>

                <a href="#" class="btn accessories-btn">Смотреть товары</a>
            </div>
        </div>
    </div>
    <div class="col-12 col-sm-6 col-lg-4 col-xl-3 my-3">
        <div class="item">
            <div class="item-header">
                <div class="accessories-fashion">ХИТ</div>
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/home/accessories-2.png"
                    alt="image" />
            </div>
            <div class="item-body">
                <h3 class="item-body-header">Простыни</h3>

                <p class="item-body-sale">3 990 000 UZS</p>

                <p class="item-body-summ">2 990 000 UZS</p>

                <a href="#" class="btn accessories-btn">Смотреть товары</a>
            </div>
        </div>
    </div>
</div>