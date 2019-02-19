<?php
    $galleries_array = get_posts(
        array(
            'posts_per_page' => -1,
            'category' => 4,
        )
    );
    $args = array('child_of' => 4);
    $categories = get_categories( $args );
?>

<section class="nbr-homepage-portfolio-section">
    <div class="container">
        <div class="row">
            <ul class="nbr-portfolio-filter align-center">
                <li class="active" data-filter="*">Wszystkie</li>
                <?php foreach($categories as $category) { ?>
                    <li data-filter=".<?php echo slugify($category->name); ?>"><?php echo $category->name; ?></li>
                <?php } ?>
            </ul>
        </div>
        <div class="row nbr-portfolio-items">
            <?php
                foreach($galleries_array as $gallery) {
                    $category_name = get_the_category($gallery->ID)[0]->name;
                    $image = wp_get_attachment_image_src( get_post_thumbnail_id($gallery->ID), 'large' );
            ?>
            <div class="col-md-6 single-item <?php echo strtolower($category_name); ?>">
                <div class="nbr-portfolio-wrap">
                    <a href="<?php echo get_permalink( $gallery->ID ) ?>">
                        <img src="<?php echo $image[0]; ?>" alt="<?php echo $gallery->post_title; ?>">
                    </a>
                    <div class="nbr-portfolio-content">
                    <h2><?php echo $image_size; ?></h2>
                        <p><?php echo $category_name; ?></p>
                        <h3><a href="<?php echo get_permalink( $gallery->ID ) ?>"><?php echo $gallery->post_title; ?></a></h3>
                        <a href="<?php echo get_permalink( $gallery->ID ) ?>" class="nbr-portfolio-link"></a>
                    </div>
                </div>
            </div>
            <?php
                }
            ?>
        </div>
    </div>
</section>