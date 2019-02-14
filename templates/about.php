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

    <!-- Testimional -->
    <section id="testimonial" class="nbr-testimonial-section">
        <div class="container">
            <ul id="testimonial-carousel" class="testimonial-items owl-carousel">
                <li class="testimonial-item">
                    <i class="fa fa-quote-left"></i>
                    <p>If you do good work for good clients,<br />it will lead to other good work for<br />other good clients.</p>
                    <h4>J. Anna / HR Manager</h4>
                </li>
                <li class="testimonial-item">
                    <i class="fa fa-quote-left"></i>
                    <p>If you do good work for good clients,<br />it will lead to other good work for<br />other good clients.</p>
                    <h4>Q. Brown / SLCM Manager</h4>
                </li>
                <li class="testimonial-item">
                    <i class="fa fa-quote-left"></i>
                    <p>If you do good work for good clients,<br />it will lead to other good work for<br />other good clients.</p>
                    <h4>A. Emily / MM Manager</h4>
                </li>
            </ul>
        </div>
    </section>

<?php get_footer(); ?>