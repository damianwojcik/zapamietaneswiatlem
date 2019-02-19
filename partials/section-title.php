<section class="nbr-page-section">
    <div class="container">
        <div class="col-md-8 offset-md-2">
            <div class="nbr-page-content text-center">
            <?php if (is_category()) { ?>
                <h2><?php single_cat_title(); ?></h2>
                <p><?php echo category_description(); ?></p>
            <?php } else { ?>
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <h2><?php the_title(); ?></h2>
                    <p><?php the_content(); ?></p>
                <?php endwhile; endif; ?>
            <?php } ?>
            </div>
        </div>
    </div>
</section>