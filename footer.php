<?php
    $logo_text = get_field('logo_text', 'option');
    $logo_img = get_field('logo_img', 'option');
?>

        </div><!-- /.barba-container -->
    </div><!-- /#barba-wrapper -->

    <!-- Footer -->
    <footer class="nbr-footer-section text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="text-center">
                        <?php if( have_rows('socialmedia', 'option') ): ?>
                        <ul class="nbr-social-link">
                            <?php while( have_rows('socialmedia', 'option') ): the_row(); ?>
                                <li>
                                    <a target="_blank" rel="noopener" href="<?php the_sub_field('socialmedia_link'); ?>">
                                    <i class="<?php the_sub_field('socialmedia_icon'); ?>"></i>
                                </a>
                                </li>
                            <?php endwhile; ?>
                        </ul>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="brand">
                        <a href="<?= SITE_URL; ?>">
                            <?php if( !empty($logo_text) ): ?>
                                <?php echo $logo_text ?>
                            <?php endif; ?>
                            <?php if( !empty($logo_img) ): ?>
                                <img src="<?php echo $logo_img['url']; ?>" alt="<?php echo $logo_img['alt']; ?>" />
                            <?php endif; ?>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <?php if( have_rows('footerbtn', 'option') ): ?>
                        <?php while( have_rows('footerbtn', 'option') ): the_row(); ?>
                        <?php
                            $footerbtn_link = get_sub_field('footerbtn_link');
                        ?>
                            <a href="<?php echo $footerbtn_link['url'] ?>" class="nbr-btn"><?php the_sub_field('footerbtn_text'); ?></a>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p class="copright">2019 © <a target="_blank" rel="noopener" href="http://dwojcik.pro/">dwojcik.pro</a></p>
                </div>
            </div>
        </div>
    </footer>
    <?php wp_footer(); ?>
</body>
</html>