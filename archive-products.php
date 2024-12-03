<?php

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
            <?php
            if (function_exists('yoast_breadcrumb')) {
                yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
            }
            ?>
            <div class="catalog-page-wrapper">
                <h1 class="catalog-header">Каталог</h1>
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
                </div>
            </div>
        </div>
    </section>
</main>
<!-- MAIN END -->

<?php
get_footer();
?>