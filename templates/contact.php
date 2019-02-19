<?php /* Template Name: Kontakt */ ?>

<?php get_header(); ?>

    <!-- Title Header -->
    <?php get_template_part("partials/section", "title"); ?>

    <!-- Contact Section -->
    <section class="nbr-contact-section">
        <div id="nbr-contactMap"></div>
        <div id="coords"><?php the_field('coordinates'); ?></div>
        <div class="container">
            <div class="row nbr-contact-wrap">
                <?php
                if( have_rows('section_contact') ):
                    while ( have_rows('section_contact') ) : the_row();
                ?>
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
                <?php
                    endwhile;
                else :
                endif;
                ?>
                <?php
                if( have_rows('section_form') ):
                    while ( have_rows('section_form') ) : the_row();
                ?>
                <div class="col-md-6 xs-padding">
                    <div class="nbr-contact-form">
                        <h3><?php the_sub_field('form_heading'); ?></h3>
                        <p><?php the_sub_field('form_subheading'); ?></p>
                        <?php echo do_shortcode( '[contact-form-7 id="69" title="Formularz kontaktowy" html_class="form-horizontal"]' ); ?>
                    </div>
                </div>
                <?php
                    endwhile;
                else :
                endif;
                ?>
            </div>
        </div>
    </section>

<?php get_footer(); ?>