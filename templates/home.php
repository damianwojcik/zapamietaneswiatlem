<?php /* Template Name: Strona główna */ ?>

<?php get_header(); ?>

    <!-- Background Image -->
    <?php
    if( have_rows('section_intro') ):
        while ( have_rows('section_intro') ) : the_row();
            $photo = get_sub_field('photo');
    ?>
    <div class="nbr-background-img-section">
        <div class="nbr-profile-info">
            <div class="d-flex align-items-center w-100">
                <div class="mx-auto nbr-profile-inner">
                    <h2>
                        <?php the_sub_field('heading'); ?>
                        <span><?php the_sub_field('description'); ?></span>
                    </h2>
                </div>
            </div>
        </div>
        <div class="nbr-background-wrap">
            <div class="background-img-item" style="background-image: url('<?php echo $photo['url']; ?>');"></div>
        </div>
    </div>
    <?php
        endwhile;
    else :
    endif;
    ?>

    <!-- About Me -->
    <?php
    if( have_rows('section_introduction') ):
        while ( have_rows('section_introduction') ) : the_row();
    ?>
    <section class="nbr-about-section-home">
        <div class="container">
            <div class="nbr-about-content text-center">
                <?php the_sub_field('content'); ?>
                <span><?php the_sub_field('signature'); ?></span>
            </div>
        </div>
    </section>
    <?php
        endwhile;
    else :
    endif;
    ?>

    <!-- Portfolio -->
    <?php get_template_part("partials/section", "portfolio"); ?>

<?php get_footer(); ?>