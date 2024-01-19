<?php
$reviews_slider_section = get_field('reviews_slider_section');

$title = $reviews_slider_section['title'];
$terms = $reviews_slider_section['reviews_category'];


if( $reviews_slider_section ): ?>

<div class="reviews-slider-section">
    <div class="container">
        <div class="slide-text-header">
            <h2 class="title-global-section"><?php echo $title ?></h2>
        </div>
        <div class="slider-image js-slider">
            <?php
            $args = array(
                'post_type' => 'review',
                'post_status' => 'publish',
                'posts_per_page' => -1,
                'orderby' => 'date',
                'order' => 'ASC',
                'tax_query' => array(
                    array(
                        'taxonomy' => 'reviews_category',
                        'field' => 'ID',
                        'terms' => $terms,
                    )
                )
            );
            $loop = new WP_Query($args);
            $i = 1;
            while ($loop->have_posts()) : $loop->the_post();
                ?>
                <div class="slide">
                    <div class="text-holder">
                        <div class="slide-text-body">
                            <div class="flex">
                                <h3 class="subtitle-block">“<?php echo get_field("review_title"); ?>”
                                </h3>
                                <div class="img-cont">
                                    <picture>
                                        <source srcset="<?php echo get_field("client_image"); ?>" media="(min-width: 768px)">
                                        <source srcset="<?php echo get_field("client_image_mobile"); ?>">
                                        <img src="<?php echo get_field("client_image"); ?>"
                                             width="180" height="180" alt="See What Our Happy Clients Say">
                                    </picture>
                                </div>
                            </div>
                            <div class="text-block">
                                <?php echo get_field("review_textblock"); ?>
                            </div>
                            <div class="name-block"><?php echo get_field("client_name"); ?>
                                <?php if (get_field("client_position")) { ?>
                                    <span class="position-block">- <?php echo get_field("client_position"); ?></span>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            endwhile;
            wp_reset_postdata();
            ?>
        </div>
    </div>
</div>

<?php endif; ?>