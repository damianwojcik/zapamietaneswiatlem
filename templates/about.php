<?php /* Template Name: O mnie */ ?>

<?php get_header(); ?>

    <!-- About Section -->
    <section class="nbr-about-section nbr-about-inner-page">
        <div class="container">
            <div class="row nbr-about-inner">
                <div class="col-md-6">
                <?php
                    $image = get_field('photo');
                    if( !empty($image) ): ?>
                        <img class="nbr-about-img" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                <?php endif; ?>
                </div>
                <div class="col-md-6">
                    <div class="nbr-about-info">
                        <h2><?php the_field('heading'); ?></h2>
                        <p><?php the_field('content'); ?></p>
                        <p class="nbr-signature-dark"><?php the_field('signature'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Testimonials -->
    <?php get_template_part("partials/section", "testimonials"); ?>

<?php get_footer(); ?>