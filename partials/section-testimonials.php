<?php
    $testimonials = get_field('testimonials', 'option');
    if( $testimonials ) {
?>
    <section id="testimonial" class="nbr-testimonial-section">
        <div class="container">
            <ul id="testimonial-carousel" class="testimonial-items owl-carousel">
                <?php foreach($testimonials as $testimonial) { ?>
                <li class="testimonial-item">
                    <i class="fa fa-quote-left"></i>
                    <p><?php echo $testimonial['testimonial_content'] ?></p>
                    <h4><?php echo $testimonial['testimonial_author'] ?></h4>
                </li>
                <?php } ?>
            </ul>
        </div>
    </section>
<?php } ?>