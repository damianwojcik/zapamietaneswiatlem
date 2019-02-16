<?php get_header(); ?>

    <!-- Title Header -->
    <section class="nbr-page-section">
        <div class="container">
            <div class="col-md-8 offset-md-2">
                <div class="nbr-page-content text-center">
                    <h2><?php echo get_the_title(); ?></h2>
                    <div class="nbr-meta-info">
                        <span><i class="ti-time"></i> <?php echo get_the_date(); ?></span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Post Section -->
    <?php
        $image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'post-title' );
    ?>
    <section class="nbr-blog-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="nbr-blog-items nbr-single-post">
                       <div class="entry-thumb">
                           <img src="<?php echo $image[0]; ?>" alt="<?php echo get_the_title(); ?>">
                       </div>

                       <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                        <?php the_content(); ?>

                        <?php echo do_shortcode('[DISPLAY_ULTIMATE_SOCIAL_ICONS]'); ?>

                        <?php
                            if(is_single()) {
                                comments_template();
                            }
                        ?>

                        <?php endwhile; endif; ?>

                    </div>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>