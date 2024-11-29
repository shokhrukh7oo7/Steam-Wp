<?php
global $post;
$products = get_posts([
    'post_type' => 'products',
    'numberposts' => 8,
    'tax_query' => array(
        array(
            'taxonomy' => 'products_category',
            'field' => 'id',
            'terms' => array(get_queried_object()->term_id)
        )
    ),
]);

foreach ($products as $post) {
    setup_postdata($post);
    echo the_title();
}
wp_reset_postdata();
?>

<h1>restar</h1>