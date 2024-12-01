<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package steam
 */

?>

<div class="container">
	<div class="search-card">
		<div class="card-top">
			<img class="main-img" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="img">
		</div>
		<div class="card-bottom">
			<a href="<?php the_permalink(); ?>">
				<h6><?php the_title(); ?></h6>
			</a>
			<p class="card-body-title"><?php echo get_the_excerpt(); ?></p>
			<div class="card-last-seen-recently">
				<?php date_show(get_the_date('Y-m-d H:i')); ?>
			</div>
		</div>
	</div>
</div>