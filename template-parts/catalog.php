<?php
/*
    Template name: Каталог
*/
get_header();

$terms = get_terms(array(

    'taxonomy' => 'products_category',
    'hide_empty' => false,
    'fields' => 'all',
));

?>

<!-- MAIN START -->
<main>
    <section class="catalog-page-section" id="catalog-page-section">
        <div class="container">
            <div class="catalog-page-wrapper">
                <h1 class="catalog-header"><?php the_title(); ?></h1>
                <div class="row">
                    <?php
                    foreach ($terms as $term) {
                        $imgUrl = get_field('photo', $term);
                        ?>
                        <div class="col-12 col-sm-6 col-lg-4 col-xl-3 my-2">
                            <div class="item">
                                <a href="<?php echo get_term_link($term) ?>"><?php echo $term->name ?></a>
                                <div class="catalog-page-img">
                                    <img src="<?php echo $imgUrl ?>" alt="image" />
                                </div>
                            </div>
                        </div>
                    <?
                    }
                    ?>
                    <!-- <div class="col-12 col-sm-6 col-lg-4 col-xl-3 my-2">
                        <div class="item">
                            <a href="#">Печи</a>
                            <div class="catalog-page-img">
                                <img src="/assets/images/catalog/pech.png" alt="image" />
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4 col-xl-3 my-2">
                        <div class="item">
                            <a href="#">Камни для сауны</a>
                            <div class="catalog-page-img">
                                <img src="/assets/images/catalog/stone.png" alt="image" />
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4 col-xl-3 my-2">
                        <div class="item">
                            <a href="#">Аксессуары</a>
                            <div class="catalog-page-img">
                                <img src="/assets/images/catalog/accessories.png" alt="image" />
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4 col-xl-3 my-2">
                        <div class="item">
                            <a href="#">Материалы для строительства</a>
                            <div class="catalog-page-img">
                                <img src="/assets/images/catalog/materials.png" alt="image" />
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4 col-xl-3 my-2">
                        <div class="item">
                            <a href="#">Парогене раторы</a>
                            <div class="catalog-page-img">
                                <img src="/assets/images/catalog/rator.png" alt="image" />
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4 col-xl-3 my-2">
                        <div class="item">
                            <a href="#">Освещение</a>
                            <div class="catalog-page-img">
                                <img src="/assets/images/catalog/lightning.png" alt="image" />
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </section>
</main>
<!-- MAIN END -->

<?php
get_footer();
?>