<?php
$scroll_holder_section = get_field('scroll_holder_section');

$title = $scroll_holder_section['title'];
$description = $scroll_holder_section['description'];
$terms = $scroll_holder_section['portfolio_display_category'];


if( $scroll_holder_section ): ?>
    <div class="scroll-holder-section">
        <div class="container">
            <h2 class="title-global-section"><?php echo $title; ?></h2>
            <div class="text-holder">
                <p><?php echo $description; ?></p>
            </div>

            <div class="container-scroll-holder">
                <div class="scroll-holder-block scroll-pane">
                    <?php
                    $args = array(
                        'post_type' => 'portfolio',
                        'post_status' => 'publish',
                        'posts_per_page' => -1,
                        'orderby' => 'date',
                        'order' => 'ASC',
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'portfolio_display',
                                'field' => 'ID',
                                'terms' => $terms
                            )
                        )
                    );

                    $loop = new WP_Query($args);
                    $i = 1;
                    while ($loop->have_posts()) : $loop->the_post();
                        $post_id = get_the_ID();
                        if (get_field("preview_type") == "image") {
                            ?>
                            <div class="preview-block-holder">
                                <a href="javascript:;" data-src="#popup-<?php echo $i; ?>" data-fancybox class="preview-block-popup">
                                    <div class="preview-image">
                                        <img src="<?php echo get_field("preview_image"); ?>" alt="Logo">
                                    </div>
                                 </a>
                                <div id="popup-<?php echo $i; ?>" class="popup-content" style="display: none;">
                                    <div class="preview-image">
                                        <?php

                                        echo '<img src="' . get_field("preview_popup_image") . '" alt="Image">';

                                        ?>
                                    </div>
                                    <span class="caption-block">By <strong><?php echo get_field("caption_block_by"); ?></strong></span>
                                </div>
                            </div>
                            <?php
                        } elseif (get_field("preview_type") == "copywriting") {
                            ?>
                            <div class="preview-block-holder" data-post-id="<?php echo $post_id; ?>">
                                <a href="javascript:;" data-src="#popup-<?php echo $i; ?>" data-fancybox class="preview-block-popup">
                                    <div class="preview-copywriting">
                                        <p class="text"><?php echo get_field("preview_copyright"); ?></p>
                                    </div>
                                 </a>
                                <?php
                                //var_dump("pop");
                                // var_dump(get_post_meta($post_id));
                                ?>
                                <div id="popup-<?php echo $i; ?>" class="popup-content popup-copywriting" style="display: none;">
                                    <div class="preview-copywriting js-copywriting-images">
                                        <?php

                                        $rows = get_field("preview_popup_images");
                                        if (!empty($rows)) {
                                            $rows = get_field("preview_popup_images");
                                            echo '<a href="#" class="btn no-animate js-btn">Continued…</a>';
                                            $f = 0;
                                            foreach ($rows as $row) {
                                                if ($f == 0) {
                                                    echo '<img src="' . $row['ppi_images'] . '" alt="Copywriting">';
                                                    echo '<a href="#" class="btn no-animate js-btn">Continued…</a>';
                                                    $f = 1;
                                                } else {
                                                    echo '<img class="hide" src="' . $row['ppi_images'] . '" alt="Copywriting">';
                                                }
                                            }
                                        } else {
                                            echo '<img src="' . get_field("preview_popup_image") . '" alt="Copywriting">';
                                        }
                                        ?>

                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                        $i++;
                    endwhile;
                    wp_reset_postdata();
                    ?>
                </div>
            </div>
        </div>
    </div>

<?php endif; ?>


