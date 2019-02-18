<?php get_header(); ?>

    <!-- Title Header -->
    <section class="nbr-page-section">
        <div class="container">
            <div class="col-md-8 offset-md-2">
                <div class="nbr-page-content text-center">
                    <h2><?php the_field('blog_heading', 'option'); ?></h2>
                    <p><?php the_field('blog_subheading', 'option'); ?></p>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog Section -->
    <section class="nbr-blog-section">
        <div class="container">
            <div class="nbr-blog-items grid-list row">
            <?php if ( have_posts() ) :
                    while ( have_posts() ) : the_post();
                    $title = get_the_title();
                    $date = get_the_date();
                    $content = get_the_content();
                    $trimmed_content = wp_trim_words( $content, 30 );
                    $image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'post-thumb' );
            ?>

            <div class="col-md-6">
                <div class="nbr-blog-post">
                    <a href="<?php the_permalink(); ?>"><img src="<?php echo $image[0]; ?>" alt="<?php echo $title; ?>"></a>
                    <div class="nbr-blog-content">
                        <p class="nbr-date-user">
                            <span class="date"><i class="ti-time"></i> <?php echo $date; ?></span>
                        </p>
                        <h3><a href="<?php the_permalink(); ?>"><?php echo $title; ?></a></h3>
                        <p><?php echo $trimmed_content; ?></p>
                        <a href="<?php the_permalink(); ?>" class="nbr-post-meta">Czytaj więcej <span class="ti-shift-right-alt"></span></a>
                    </div>
                </div>
            </div>

            <?php endwhile; ?>
            </div>

            <?php the_posts_pagination( array(
                'mid_size' => 2,
                'screen_reader_text' => ' ',
                'prev_text'          => __('<i class="ti-arrow-left"></i>'),
                'next_text'          => __('<i class="ti-arrow-right"></i>'),
            )); ?>

            <?php else : ?>

                <p><?php _e('Przepraszamy, niestety nie znaleziono żadnych wpisów spełniających Twoje kryteria.'); ?></p>

            <?php endif; ?>
        </div>
    </section>

<?php get_footer(); ?>