<?php /* Template Name: Kontakt */ ?>

<?php get_header(); ?>

    <!-- Title Header -->
    <?php
    if( have_rows('section_title') ):
        while ( have_rows('section_title') ) : the_row();
    ?>
    <section class="nbr-page-section">
        <div class="container">
            <div class="col-md-8 offset-md-2">
                <div class="nbr-page-content text-center">
                    <h2><?php the_sub_field('title_heading'); ?></h2>
                    <p><?php the_sub_field('title_subheading'); ?></p>
                </div>
            </div>
        </div>
    </section>
    <?php
        endwhile;
    else :
    endif;
    ?>

    <!-- Contact Section -->
    <?php
    if( have_rows('section_contact') ):
        while ( have_rows('section_contact') ) : the_row();
    ?>
    <section class="nbr-contact-section">
        <div id="nbr-contactMap"></div>
        <div id="coords"><?php the_field('coordinates'); ?></div>
        <div class="container">
            <div class="row nbr-contact-wrap">
                <div class="col-md-6 xs-padding">
                    <div class="nbr-contact-info">
                        <h3><?php the_sub_field('contact_heading'); ?></h3>
                        <p><?php the_sub_field('contact_subheading'); ?></p>
                        <?php
                        if( have_rows('contact_data') ):
                        ?>
                        <ul>
                        <?php
                            while ( have_rows('contact_data') ) : the_row();
                        ?>
                            <li><i class="<?php the_sub_field('icon'); ?>"></i>&nbsp;<?php the_sub_field('data'); ?></li>
                        <?php
                            endwhile;
                        ?>
                        </ul>
                        <?php
                        else :
                        endif;
                        ?>
                    </div>
                </div>
                <div class="col-md-6 xs-padding">
                    <div class="nbr-contact-form">
                        <h3>Wanna Work Together?</h3>
                        <p>Qualamy nisl sodales sit amet sapien id, placerat sodales oiter. Vivamus nec magna rhoncus felis, faucibus printy.</p>
                        <?php echo do_shortcode( '[contact-form-7 id="69" title="Formularz kontaktowy" html_class="form-horizontal"]' ); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
        endwhile;
    else :
    endif;
    ?>

<?php get_footer(); ?>