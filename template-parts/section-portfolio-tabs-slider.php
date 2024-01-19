<?php
$portfolio_tabs_slider_section = get_field('portfolio_tabs_slider_section');

$title = $portfolio_tabs_slider_section['title'];
$description = $portfolio_tabs_slider_section['description'];
$portfolio_categories = $portfolio_tabs_slider_section['portfolio_categories'];
$terms = $portfolio_tabs_slider_section['portfolio_display_category'];

if( $portfolio_tabs_slider_section ): ?>
<div class="custom-anchor-scroll-section js-custom-anchor" id="custom-anchor-scroll-section">
    <div class="container">
        <div class="custom-anchor-header text-center">
            <h2 class="title-global-section"><?php echo $title; ?></h2>
            <?php if($description){ ?>
                <p><?php echo $description; ?></p>
            <?php } ?>
        </div>
        <div class="anchor-nav-section">
            <ul class="anchor-nav">
                <?php
                $k = 0;
                if (is_iterable($portfolio_categories)) {
                    foreach ($portfolio_categories as $pcat_id) {
                        $pcat = get_term($pcat_id);
                        $pslug = $pcat->slug;
                        if ($k == 0) {
                            $active_class = "active";
                        } else {
                            $active_class = 0;
                        }
                        $k++;
                        ?>
                        <li class="anchor-nav-item"><a class="<?php echo $active_class; ?>" href="#<?php echo $pslug; ?>"><?php echo $pcat->name; ?></a></li>
                        <?php
                    }
                } ?>
            </ul>
        </div>
        <?php
        $k = 0;
        if (is_iterable($portfolio_categories)) {
            ?>
            <div class="custom-container-scroll-holder">
                <div class="scroll-holder-block scroll-pane">
                    <?php
                    foreach ($portfolio_categories as $pcat_id) {
                        $pcat = get_term($pcat_id);
                        $k++;
                        $j = 0;

                        $args = array(
                            "post_type" => "portfolio",
                            "posts_per_page" => -1,

                            "tax_query" => array(
                                'relation' => "AND",
                                array(
                                    'taxonomy' => 'portfolio_category',
                                    'field' => 'slug',
                                    'terms' => $pcat->slug
                                ),
                                array(
                                    'taxonomy' => 'portfolio_display',
                                    'field' => 'ID',
                                    'terms' => $terms
                                )
                            ),
                        );
                        $branding_q = new WP_Query($args);

                        while ($branding_q->have_posts()) : $branding_q->the_post();
                            $post_id = get_the_ID();
                            $port_title = get_the_title();
                            $port_type = get_field("preview_type");
                            $port_terms = get_the_terms($post_id, 'portfolio_category');
                            $port_term = array_pop($port_terms);
                            $port_preview_img = get_field("preview_image");
                            $port_preview_video = get_field("video_popup_content");
                            $port_popup_img = get_field("preview_popup_image");
                            $port_author = get_field("caption_block_by");
                            ?>
                            <div class="custom-anchor-block-holder js-block-holder <?php if ($j == 1) echo "active"; ?>" id="<?php if ($j == 0) echo $pcat->slug; ?>">
                                <a href="javascript:;" data-src="#popup-<?php echo $pcat->slug; ?>-<?php echo $k; ?>" data-fancybox class="custom-anchor-block">
                                    <div class="preview-image <?php if ($pcat->slug == "logo" || $pcat->slug == "hand-drawn-characters") echo "bg-white"; ?>">
                                        <img src="<?php echo $port_preview_img; ?>" alt="<?php echo $port_title; ?>">
                                    </div>
                                </a>
                                <div id="popup-<?php echo $pcat->slug; ?>-<?php echo $k; ?>" class="popup-content" style="display: none;">
                                    <div class="preview-image">
                                        <?php
                                        if (!empty($port_preview_video)) {
                                            echo $port_preview_video;
                                        } else {
                                            if (get_field("more_than_one_image") == 'yes') {
                                                $rows = get_field("preview_popup_images");
                                                echo '<a href="#" class="btn no-animate js-btn">Continued…</a>';
                                                $f = 0;
                                                foreach ($rows as $row) {
                                                    if ($f == 0) {
                                                        echo '<img src="' . $row['ppi_images'] . '" alt="Copywriting">';
                                                        $f = 1;
                                                    } else {
                                                        echo '<img class="hide" src="' . $row['ppi_images'] . '" alt="Copywriting">';
                                                    }
                                                }

                                            } else {
                                                echo '<img src="' . get_field("preview_popup_image") . '" alt="Copywriting">';
                                            }
                                            ?>
                                            <?php
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <?php
                            $j++;
                            $k++;
                        endwhile;
                        wp_reset_postdata();
                    }
                    ?>
                </div>
            </div>
            <?php
        }
        ?>
    </div>
</div>


<?php endif; ?>