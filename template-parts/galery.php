<?php
/*
    Template name: Галерея
*/
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
            <div class="galery-container">
                <div class="galery-header-wrapper">
                    <h1 class="galery-header-title">
                        <?php the_field('galery_header_title') ?>
                    </h1>
                </div>

                <div class="galery-image-wrapper">
                    <div class="galery_box">
                        <?php if (have_rows('gallery_images')): ?>
                            <?php while (have_rows('gallery_images')):
                                the_row();
                                $image = get_sub_field('image');
                                ?>
                                <div class="galery_item">
                                    <?php if ($image): ?>
                                        <img src="<?php echo esc_url($image); ?>" alt="<?php echo esc_attr($image); ?>">
                                    <?php endif; ?>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>

                    <div class="galery-video-container">
                        <video controls>
                            <source src="<?php the_field('video_file') ?>" type="video/mp4">
                        </video>
                        <div class="play-button" onclick="togglePlay()">
                        </div>
                    </div>
                </div>
            </div>
    </section>
</main>

<?php
get_footer();
?>