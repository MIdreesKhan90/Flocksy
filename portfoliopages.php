<?php
/*
 * Template Name: Portfolio Page New
 */
get_header();
?>
    <style>
        .vertical-portfolio .portfolio-tab-content > div{
            display:none;
        }
        .vertical-portfolio .portfolio-tab-content > div.active{
            display:block;
        }
    </style>
    <div class="container">
        <div class="hero-banner-section custom-section">
            <div class="text-holder">
                <h1 class="title-block"><?php echo get_field( "pf_hero_section_title" ); ?></h1>
                <div class="text-block">
                    <?php echo get_field( "pf_hero_section_textblock" ); ?>
                </div>
            </div>
            <div class="image-holder">
                <picture>
                    <source srcset="<?php echo get_field( "pf_hero_section_image" ); ?>" media="(min-width: 768px)">
                    <source srcset="<?php echo get_field( "pf_hero_section_image_mobile" ); ?>">
                    <img src="<?php echo get_field( "pf_hero_section_image" ); ?>" alt="Hire your perfect Creative team">
                </picture>
            </div>
        </div>
        <div class="portfolio-tabs-section">
            <h2 class="title-global-section"><?php echo get_field( "portfolio_tabs_section_title" ); ?></h2>
            <!--<div class="portfolio-current-tabset">Design</div> -->
            <div class="vertical-portfolio">
                <ul id="accordion" class="portfolio-tabset accordion">
                    <li class="portfolio-tabset-item firstt">
                        <button data-tab="#tab-04" class="active">Favorites</button>
                    </li>
                    <li>
                        <div class="link">Design<i class="fa fa-chevron-down"></i></div>
                        <ul class="submenu">
                            <li class="portfolio-tabset-item">
                                <button data-tab="#tab-01">All Design Projects</button>
                            </li>
                            <li class="portfolio-tabset-item">
                                <button data-tab="#tab-02">Banner</button>
                            </li>
                            <li class="portfolio-tabset-item">
                                <button data-tab="#tab-03">Flyer</button>
                            </li>
                            <li class="portfolio-tabset-item">
                                <button data-tab="#tab-91">Infographic</button>
                            </li>
                            <li class="portfolio-tabset-item">
                                <button data-tab="#tab-05">Logo</button>
                            </li>
                            <li class="portfolio-tabset-item">
                                <button data-tab="#tab-06">Social media ad/post</button>
                            </li>
                            <li class="portfolio-tabset-item">
                                <button data-tab="#tab-07">T-Shirt</button>
                            </li>
                            <li class="portfolio-tabset-item">
                                <button data-tab="#tab-08">Webpage</button>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <div class="link">Copywriting<i class="fa fa-chevron-down"></i></div>
                        <ul class="submenu">
                            <li class="portfolio-tabset-item">
                                <button data-tab="#tab-09">All Copywriting projects</button>
                            </li>
                            <li class="portfolio-tabset-item">
                                <button data-tab="#tab-10">Ad</button>
                            </li>
                            <li class="portfolio-tabset-item">
                                <button data-tab="#tab-11">Article</button>
                            </li>
                            <li class="portfolio-tabset-item">
                                <button data-tab="#tab-12">Blog Post</button>
                            </li>
                            <li class="portfolio-tabset-item">
                                <button data-tab="#tab-13">Email</button>
                            </li>
                            <li class="portfolio-tabset-item">
                                <button data-tab="#tab-14">Landing Page</button>
                            </li>
                            <li class="portfolio-tabset-item">
                                <button data-tab="#tab-15">Press Release</button>
                            </li>
                            <li class="portfolio-tabset-item">
                                <button data-tab="#tab-16">Social Media Post</button>
                            </li>
                            <li class="portfolio-tabset-item">
                                <button data-tab="#tab-17">Webpage</button>
                            </li>
                        </ul>
                    <li>
                        <div class="link">Video<i class="fa fa-chevron-down"></i></div>
                        <ul class="submenu">
                            <li class="portfolio-tabset-item">
                                <button data-tab="#tab-18">All Video Projects</button>
                            </li>
                            <li class="portfolio-tabset-item">
                                <button data-tab="#tab-19">Ad</button>
                            </li>
                            <li class="portfolio-tabset-item">
                                <button data-tab="#tab-20">Video</button>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <div class="link">Illustrations<i class="fa fa-chevron-down"></i></div>
                        <ul class="submenu">
                            <li class="portfolio-tabset-item">
                                <button data-tab="#tab-21">All Illustrations Projects</button>
                            </li>
                            <li class="portfolio-tabset-item">
                                <button data-tab="#tab-22">Avatar</button>
                            </li>
                            <li class="portfolio-tabset-item">
                                <button data-tab="#tab-23">Character</button>
                            </li>
                            <li class="portfolio-tabset-item">
                                <button data-tab="#tab-24">Comic</button>
                            </li>
                            <li class="portfolio-tabset-item">
                                <button data-tab="#tab-25">Custom Brand Illustration</button>
                            </li>
                            <li class="portfolio-tabset-item">
                                <button data-tab="#tab-26">Illustrated Manuals</button>
                            </li>
                            <li class="portfolio-tabset-item">
                                <button data-tab="#tab-27">Mascot</button>
                            </li>
                            <li class="portfolio-tabset-item">
                                <button data-tab="#tab-28">Merch</button>
                            </li>
                            <li class="portfolio-tabset-item">
                                <button data-tab="#tab-29">Portrait Illustration</button>
                            </li>
                            <li class="portfolio-tabset-item">
                                <button data-tab="#tab-30">Storybook Illustration</button>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <div class="link">Voice Over<i class="fa fa-chevron-down"></i></div>
                        <ul class="submenu">
                            <li class="portfolio-tabset-item">
                                <button data-tab="#tab-31">All Voice Over</button>
                            </li>
                        </ul>
                    <li>
                        <div class="link">Motion Graphics<i class="fa fa-chevron-down"></i></div>
                        <ul class="submenu">
                            <li class="portfolio-tabset-item">
                                <button data-tab="#tab-32">All Motion Graphics</button>
                            </li>
                            <li class="portfolio-tabset-item">
                                <button data-tab="#tab-33">Character Animations & Storytelling</button>
                            </li>
                            <li class="portfolio-tabset-item">
                                <button data-tab="#tab-34">Logo Reveals</button>
                            </li>
                            <li class="portfolio-tabset-item">
                                <button data-tab="#tab-35">Products & Images Simple Animation</button>
                            </li>
                            <li class="portfolio-tabset-item">
                                <button data-tab="#tab-36">Text and Graphics Animations</button>
                            </li>
                        </ul>
                    <li>
                        <div class="link">Web Development<i class="fa fa-chevron-down"></i></div>
                        <ul class="submenu">
                            <li class="portfolio-tabset-item">
                                <button data-tab="#tab-37">All Web Development Projects </button>
                            </li>
                        </ul>
                    </li>
                </ul>
                <div class="portfolio-tab-content">
                    <div id="tab-91" class="portfolio-tab-content-item js-content-holder">
                        <div class="portfolio-scroll-content">
                            <div class="portfolio-list js-list">
                                <?php
                                $args = array(
                                    'post_type' => 'portfolio',
                                    'post_status' => 'publish',
                                    'posts_per_page' => 56,
                                    'orderby' => 'date',
                                    'order'   => 'ASC',
                                    'tax_query' => array(
                                        'relation' => 'AND',
                                        array(
                                            'taxonomy' => 'portfolio_display',
                                            'field' => 'slug',
                                            'terms' => 'portfolio'
                                        ),
                                        array(
                                            'taxonomy' => 'portfolio_category',
                                            'field' => 'slug',
                                            'terms' => 'infographics'
                                        )
                                    )
                                );

                                $loop = new WP_Query( $args );
                                $i=1;
                                while ( $loop->have_posts() ) : $loop->the_post();

                                    ?>
                                    <div class="portfolio-item">
                                        <a href="javascript:;" data-src="#popup-portfolio-tab-91-<?php echo $i; ?>" data-fancybox  class="portfolio-holder">
                                            <div class="image-block">
                                                <img width="auto" height="auto"  src="<?php echo get_field("preview_image"); ?>" data-src="<?php echo get_field("preview_image"); ?>" class="lazyload" alt="Portfolio">
                                            </div>
                                        </a>
                                        <div id="popup-portfolio-tab-91-<?php echo $i; ?>" class="popup-content" style="display: none;">
                                            <div class="preview-image">
                                                <img loading=lazy src="<?php echo get_field("preview_popup_image"); ?>" data-src="<?php echo get_field("preview_popup_image"); ?>" class="lazyload" alt="Portfolio">
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                    $i++;
                                endwhile;
                                wp_reset_postdata();
                                ?>
                            </div>
                        </div>
                        <div class="text-center btn-block js-btn">
                            <a href="javascript:;" class="btn btn-outline">Load more</a>
                        </div>
                    </div>
                    <div id="tab-01" class="portfolio-tab-content-item js-content-holder">
                        <div class="portfolio-scroll-content">
                            <div class="portfolio-list js-list">
                                <?php
                                $args = array(
                                    'post_type' => 'portfolio',
                                    'post_status' => 'publish',
                                    'posts_per_page' => 156,
                                    'orderby' => 'date',
                                    'order'   => 'ASC',
                                    'tax_query' => array(
                                        'relation' => 'AND',
                                        array(
                                            'taxonomy' => 'portfolio_display',
                                            'field' => 'slug',
                                            'terms' => 'portfolio'
                                        ),
                                        array(
                                            'taxonomy' => 'portfolio_category',
                                            'field' => 'slug',
                                            'terms' => 'design'
                                        )
                                    )
                                );

                                $loop = new WP_Query( $args );
                                $i=1;
                                while ( $loop->have_posts() ) : $loop->the_post();

                                    ?>
                                    <div class="portfolio-item">
                                        <a href="javascript:;" data-src="#popup-portfolio-tab-01-<?php echo $i; ?>" data-fancybox  class="portfolio-holder">
                                            <div class="image-block">
                                                <img width="auto" height="auto"  src="<?php echo get_field("preview_image"); ?>" data-src="<?php echo get_field("preview_image"); ?>" class="lazyload" alt="Portfolio">
                                            </div>
                                        </a>
                                        <div id="popup-portfolio-tab-01-<?php echo $i; ?>" class="popup-content" style="display: none;">
                                            <div class="preview-image">
                                                <img loading=lazy src="<?php echo get_field("preview_popup_image"); ?>" data-src="<?php echo get_field("preview_popup_image"); ?>" class="lazyload" alt="Portfolio">
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                    $i++;
                                endwhile;
                                wp_reset_postdata();
                                ?>
                            </div>
                        </div>
                        <div class="text-center btn-block js-btn">
                            <a href="javascript:;" class="btn btn-outline">Load more</a>
                        </div>
                    </div>
                    <div id="tab-02" class="portfolio-tab-content-item js-content-holder">
                        <div class="portfolio-scroll-content">
                            <div class="portfolio-list js-list">
                                <?php
                                $args = array(
                                    'post_type' => 'portfolio',
                                    'post_status' => 'publish',
                                    'posts_per_page' => 56,
                                    'orderby' => 'date',
                                    'order'   => 'ASC',
                                    'tax_query' => array(
                                        'relation' => 'AND',
                                        array(
                                            'taxonomy' => 'portfolio_display',
                                            'field' => 'slug',
                                            'terms' => 'portfolio'
                                        ),
                                        array(
                                            'taxonomy' => 'portfolio_category',
                                            'field' => 'slug',
                                            'terms' => 'banners'
                                        )
                                    )
                                );

                                $loop = new WP_Query( $args );
                                $i=1;
                                while ( $loop->have_posts() ) : $loop->the_post();

                                    ?>
                                    <div class="portfolio-item">
                                        <a href="javascript:;" data-src="#popup-portfolio-tab-02-<?php echo $i; ?>" data-fancybox  class="portfolio-holder">
                                            <div class="image-block">
                                                <img width="auto" height="auto"  src="<?php echo get_field("preview_image"); ?>" data-src="<?php echo get_field("preview_image"); ?>" class="lazyload" alt="Portfolio">
                                            </div>
                                        </a>
                                        <div id="popup-portfolio-tab-02-<?php echo $i; ?>" class="popup-content" style="display: none;">
                                            <div class="preview-image">
                                                <img loading=lazy src="<?php echo get_field("preview_popup_image"); ?>" data-src="<?php echo get_field("preview_popup_image"); ?>" class="lazyload" alt="Portfolio">
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                    $i++;
                                endwhile;
                                wp_reset_postdata();
                                ?>
                            </div>
                        </div>
                        <div class="text-center btn-block js-btn">
                            <a href="javascript:;" class="btn btn-outline">Load more</a>
                        </div>
                    </div>
                    <div id="tab-03" class="portfolio-tab-content-item js-content-holder">
                        <div class="portfolio-scroll-content">
                            <div class="portfolio-list js-list">
                                <?php
                                $args = array(
                                    'post_type' => 'portfolio',
                                    'post_status' => 'publish',
                                    'posts_per_page' => 56,
                                    'orderby' => 'date',
                                    'order'   => 'ASC',
                                    'tax_query' => array(
                                        'relation' => 'AND',
                                        array(
                                            'taxonomy' => 'portfolio_display',
                                            'field' => 'slug',
                                            'terms' => 'portfolio'
                                        ),
                                        array(
                                            'taxonomy' => 'portfolio_category',
                                            'field' => 'slug',
                                            'terms' => 'flyer'
                                        )
                                    )
                                );

                                $loop = new WP_Query( $args );
                                $i=1;
                                while ( $loop->have_posts() ) : $loop->the_post();

                                    ?>
                                    <div class="portfolio-item">
                                        <a href="javascript:;" data-src="#popup-portfolio-tab-03-<?php echo $i; ?>" data-fancybox  class="portfolio-holder">
                                            <div class="image-block">
                                                <img width="auto" height="auto"  src="<?php echo get_field("preview_image"); ?>" data-src="<?php echo get_field("preview_image"); ?>" class="lazyload" alt="Portfolio">
                                            </div>
                                        </a>
                                        <div id="popup-portfolio-tab-03-<?php echo $i; ?>" class="popup-content" style="display: none;">
                                            <div class="preview-image">
                                                <img loading=lazy src="<?php echo get_field("preview_popup_image"); ?>" data-src="<?php echo get_field("preview_popup_image"); ?>" class="lazyload" alt="Portfolio">
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                    $i++;
                                endwhile;
                                wp_reset_postdata();
                                ?>
                            </div>
                        </div>
                        <div class="text-center btn-block js-btn">
                            <a href="javascript:;" class="btn btn-outline">Load more</a>
                        </div>
                    </div>
                    <div id="tab-04" class="portfolio-tab-content-item active js-content-holder">
                        <div class="portfolio-scroll-content">
                            <div class="portfolio-list js-list">
                                <?php
                                $args = array(
                                    'post_type' => 'portfolio',
                                    'post_status' => 'publish',
                                    'posts_per_page' => 56,
                                    'orderby' => 'date',
                                    'order'   => 'ASC',
                                    'tax_query' => array(
                                        'relation' => 'AND',
                                        array(
                                            'taxonomy' => 'portfolio_display',
                                            'field' => 'slug',
                                            'terms' => 'portfolio'
                                        ),
                                        array(
                                            'taxonomy' => 'portfolio_category',
                                            'field' => 'slug',
                                            'terms' => 'favorites'
                                        )
                                    )
                                );

                                $loop = new WP_Query( $args );
                                $i=1;
                                while ( $loop->have_posts() ) : $loop->the_post();

                                    ?>
                                    <div class="portfolio-item">
                                        <a href="javascript:;" data-src="#popup-portfolio-tab-04-<?php echo $i; ?>" data-fancybox  class="portfolio-holder">
                                            <div class="image-block">
                                                <img width="auto" height="auto"  src="<?php echo get_field("preview_image"); ?>" data-src="<?php echo get_field("preview_image"); ?>" alt="Portfolio">
                                            </div>
                                        </a>
                                        <div id="popup-portfolio-tab-04-<?php echo $i; ?>" class="popup-content" style="display: none;">
                                            <div class="preview-image">
                                                <img loading=lazy src="<?php echo get_field("preview_popup_image"); ?>" data-src="<?php echo get_field("preview_popup_image"); ?>" class="lazyload" alt="">
                                                <?php echo get_field("video_popup_content"); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                    $i++;
                                endwhile;
                                wp_reset_postdata();
                                ?>
                            </div>
                        </div>
                        <div class="text-center btn-block js-btn">
                            <a href="javascript:;" class="btn btn-outline">Load more</a>
                        </div>
                    </div>
                    <div id="tab-05" class="portfolio-tab-content-item js-content-holder">
                        <div class="portfolio-scroll-content">
                            <div class="portfolio-list js-list">
                                <?php
                                $args = array(
                                    'post_type' => 'portfolio',
                                    'post_status' => 'publish',
                                    'posts_per_page' => 56,
                                    'orderby' => 'date',
                                    'order'   => 'ASC',
                                    'tax_query' => array(
                                        'relation' => 'AND',
                                        array(
                                            'taxonomy' => 'portfolio_display',
                                            'field' => 'slug',
                                            'terms' => 'portfolio'
                                        ),
                                        array(
                                            'taxonomy' => 'portfolio_category',
                                            'field' => 'slug',
                                            'terms' => 'logo'
                                        )
                                    )
                                );

                                $loop = new WP_Query( $args );
                                $i=1;
                                while ( $loop->have_posts() ) : $loop->the_post();

                                    ?>
                                    <div class="portfolio-item">
                                        <a href="javascript:;" data-src="#popup-portfolio-tab-05-<?php echo $i; ?>" data-fancybox  class="portfolio-holder">
                                            <div class="image-block">
                                                <img width="auto" height="auto"  src="<?php echo get_field("preview_image"); ?>" data-src="<?php echo get_field("preview_image"); ?>" class="lazyload" alt="Portfolio">
                                            </div>
                                        </a>
                                        <div id="popup-portfolio-tab-05-<?php echo $i; ?>" class="popup-content" style="display: none;">
                                            <div class="preview-image">
                                                <img loading=lazy src="<?php echo get_field("preview_popup_image"); ?>" data-src="<?php echo get_field("preview_popup_image"); ?>" class="lazyload" alt="Portfolio">
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                    $i++;
                                endwhile;
                                wp_reset_postdata();
                                ?>
                            </div>
                        </div>
                        <div class="text-center btn-block js-btn">
                            <a href="javascript:;" class="btn btn-outline">Load more</a>
                        </div>
                    </div>
                    <div id="tab-06" class="portfolio-tab-content-item js-content-holder">
                        <div class="portfolio-scroll-content">
                            <div class="portfolio-list js-list">
                                <?php
                                $args = array(
                                    'post_type' => 'portfolio',
                                    'post_status' => 'publish',
                                    'posts_per_page' => 56,
                                    'orderby' => 'date',
                                    'order'   => 'ASC',
                                    'tax_query' => array(
                                        'relation' => 'AND',
                                        array(
                                            'taxonomy' => 'portfolio_display',
                                            'field' => 'slug',
                                            'terms' => 'portfolio'
                                        ),
                                        array(
                                            'taxonomy' => 'portfolio_category',
                                            'field' => 'slug',
                                            'terms' => 'social-media-graphics'
                                        )
                                    )
                                );

                                $loop = new WP_Query( $args );
                                $i=1;
                                while ( $loop->have_posts() ) : $loop->the_post();

                                    ?>
                                    <div class="portfolio-item">
                                        <a href="javascript:;" data-src="#popup-portfolio-tab-06-<?php echo $i; ?>" data-fancybox  class="portfolio-holder">
                                            <div class="image-block">
                                                <img width="auto" height="auto"  src="<?php echo get_field("preview_image"); ?>" data-src="<?php echo get_field("preview_image"); ?>" class="lazyload" alt="Portfolio">
                                            </div>
                                        </a>
                                        <div id="popup-portfolio-tab-06-<?php echo $i; ?>" class="popup-content" style="display: none;">
                                            <div class="preview-image">
                                                <img loading=lazy src="<?php echo get_field("preview_popup_image"); ?>" data-src="<?php echo get_field("preview_popup_image"); ?>" class="lazyload" alt="Portfolio">
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                    $i++;
                                endwhile;
                                wp_reset_postdata();
                                ?>
                            </div>
                        </div>
                        <div class="text-center btn-block js-btn">
                            <a href="javascript:;" class="btn btn-outline">Load more</a>
                        </div>
                    </div>
                    <div id="tab-07" class="portfolio-tab-content-item js-content-holder">
                        <div class="portfolio-scroll-content">
                            <div class="portfolio-list js-list">
                                <?php
                                $args = array(
                                    'post_type' => 'portfolio',
                                    'post_status' => 'publish',
                                    'posts_per_page' => 56,
                                    'orderby' => 'date',
                                    'order'   => 'ASC',
                                    'tax_query' => array(
                                        'relation' => 'AND',
                                        array(
                                            'taxonomy' => 'portfolio_display',
                                            'field' => 'slug',
                                            'terms' => 'portfolio'
                                        ),
                                        array(
                                            'taxonomy' => 'portfolio_category',
                                            'field' => 'slug',
                                            'terms' => 't-shirt'
                                        )
                                    )
                                );

                                $loop = new WP_Query( $args );
                                $i=1;
                                while ( $loop->have_posts() ) : $loop->the_post();

                                    ?>
                                    <div class="portfolio-item">
                                        <a href="javascript:;" data-src="#popup-portfolio-tab-07-<?php echo $i; ?>" data-fancybox  class="portfolio-holder">
                                            <div class="image-block">
                                                <img width="auto" height="auto"  src="<?php echo get_field("preview_image"); ?>" data-src="<?php echo get_field("preview_image"); ?>" class="lazyload" alt="Portfolio">
                                            </div>
                                        </a>
                                        <div id="popup-portfolio-tab-07-<?php echo $i; ?>" class="popup-content" style="display: none;">
                                            <div class="preview-image">
                                                <img loading=lazy src="<?php echo get_field("preview_popup_image"); ?>" data-src="<?php echo get_field("preview_popup_image"); ?>" class="lazyload" alt="Portfolio">
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                    $i++;
                                endwhile;
                                wp_reset_postdata();
                                ?>
                            </div>
                        </div>
                        <div class="text-center btn-block js-btn">
                            <a href="javascript:;" class="btn btn-outline">Load more</a>
                        </div>
                    </div>
                    <div id="tab-08" class="portfolio-tab-content-item js-content-holder">
                        <div class="portfolio-scroll-content">
                            <div class="portfolio-list js-list">
                                <?php
                                $args = array(
                                    'post_type' => 'portfolio',
                                    'post_status' => 'publish',
                                    'posts_per_page' => 56,
                                    'orderby' => 'date',
                                    'order'   => 'ASC',
                                    'tax_query' => array(
                                        'relation' => 'AND',
                                        array(
                                            'taxonomy' => 'portfolio_display',
                                            'field' => 'slug',
                                            'terms' => 'portfolio'
                                        ),
                                        array(
                                            'taxonomy' => 'portfolio_category',
                                            'field' => 'slug',
                                            'terms' => 'websites'
                                        )
                                    )
                                );

                                $loop = new WP_Query( $args );
                                $i=1;
                                while ( $loop->have_posts() ) : $loop->the_post();

                                    ?>
                                    <div class="portfolio-item">
                                        <a href="javascript:;" data-src="#popup-portfolio-tab-08-<?php echo $i; ?>" data-fancybox  class="portfolio-holder">
                                            <div class="image-block">
                                                <img width="auto" height="auto"  src="<?php echo get_field("preview_image"); ?>" data-src="<?php echo get_field("preview_image"); ?>" class="lazyload" alt="Portfolio">
                                            </div>
                                        </a>
                                        <div id="popup-portfolio-tab-08-<?php echo $i; ?>" class="popup-content" style="display: none;">
                                            <div class="preview-image">
                                                <img loading=lazy src="<?php echo get_field("preview_popup_image"); ?>" data-src="<?php echo get_field("preview_popup_image"); ?>" class="lazyload" alt="Portfolio">
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                    $i++;
                                endwhile;
                                wp_reset_postdata();
                                ?>
                            </div>
                        </div>
                        <div class="text-center btn-block js-btn">
                            <a href="javascript:;" class="btn btn-outline">Load more</a>
                        </div>
                    </div>
                    <div id="tab-09" class="portfolio-tab-content-item js-content-holder">
                        <div class="portfolio-scroll-content">
                            <div class="portfolio-list js-list">
                                <?php
                                $args = array(
                                    'post_type' => 'portfolio',
                                    'post_status' => 'publish',
                                    'posts_per_page' => 256,
                                    'orderby' => 'date',
                                    'order'   => 'ASC',
                                    'tax_query' => array(
                                        'relation' => 'AND',
                                        array(
                                            'taxonomy' => 'portfolio_display',
                                            'field' => 'slug',
                                            'terms' => 'portfolio'
                                        ),
                                        array(
                                            'taxonomy' => 'portfolio_category',
                                            'field' => 'slug',
                                            'terms' => 'copywriting'
                                        )
                                    )
                                );

                                $loop = new WP_Query( $args );
                                $i=1;
                                while ( $loop->have_posts() ) : $loop->the_post();

                                    ?>
                                    <div class="portfolio-item">
                                        <a href="javascript:;" data-src="#popup-portfolio-tab-09-<?php echo $i; ?>" data-fancybox  class="portfolio-holder">
                                            <div class="image-block">
                                                <img width="auto" height="auto"  src="<?php echo get_field("preview_image"); ?>" data-src="<?php echo get_field("preview_image"); ?>" class="lazyload" alt="Portfolio">
                                            </div>
                                        </a>
                                        <div id="popup-portfolio-tab-09-<?php echo $i; ?>" class="popup-content popup-copywriting" style="display: none;">
                                            <div class="preview-copywriting js-copywriting-images">
                                                <?php
                                                if(get_field("more_than_one_image")=='yes')
                                                {

                                                    if(have_rows("preview_popup_images")) :

                                                        echo '<a href="#" class="btn no-animate js-btn">Continued…</a>';
                                                        $f=0;

                                                        while(have_rows("preview_popup_images")) : the_row();
                                                            if($f==0)
                                                            {
                                                                echo '<img src="'.get_sub_field("ppi_images").'" alt="Copywriting">';
                                                                $f=1;
                                                            }
                                                            else
                                                            {
                                                                echo '<img class="hide" src="'.get_sub_field("ppi_images").'" alt="Copywriting">';
                                                            }

                                                        endwhile;
                                                    endif;
                                                }
                                                else
                                                {
                                                    echo '<img src="'.get_field("preview_popup_image").'" alt="Copywriting">';
                                                }
                                                ?>
                                            </div>
                                            <span class="caption-block"><strong><?php echo get_field("caption_block_by"); ?></strong></span>
                                        </div>
                                    </div>
                                    <?php
                                    $i++;
                                endwhile;
                                wp_reset_postdata();
                                ?>
                            </div>
                        </div>
                        <div class="text-center btn-block js-btn">
                            <a href="javascript:;" class="btn btn-outline">Load more</a>
                        </div>
                    </div>
                    <div id="tab-10" class="portfolio-tab-content-item js-content-holder">
                        <div class="portfolio-scroll-content">
                            <div class="portfolio-list js-list">
                                <?php
                                $args = array(
                                    'post_type' => 'portfolio',
                                    'post_status' => 'publish',
                                    'posts_per_page' => 56,
                                    'orderby' => 'date',
                                    'order'   => 'ASC',
                                    'tax_query' => array(
                                        'relation' => 'AND',
                                        array(
                                            'taxonomy' => 'portfolio_display',
                                            'field' => 'slug',
                                            'terms' => 'portfolio'
                                        ),
                                        array(
                                            'taxonomy' => 'portfolio_category',
                                            'field' => 'slug',
                                            'terms' => 'ad-copywriting'
                                        )
                                    )
                                );

                                $loop = new WP_Query( $args );
                                $i=1;
                                while ( $loop->have_posts() ) : $loop->the_post();

                                    ?>
                                    <div class="portfolio-item">
                                        <a href="javascript:;" data-src="#popup-portfolio-tab-10-<?php echo $i; ?>" data-fancybox  class="portfolio-holder">
                                            <div class="image-block">
                                                <img width="auto" height="auto"  src="<?php echo get_field("preview_image"); ?>" data-src="<?php echo get_field("preview_image"); ?>" class="lazyload" alt="Portfolio">
                                            </div>
                                        </a>
                                        <div id="popup-portfolio-tab-10-<?php echo $i; ?>" class="popup-content popup-copywriting" style="display: none;">
                                            <div class="preview-copywriting js-copywriting-images">
                                                <?php
                                                if(get_field("more_than_one_image")=='yes')
                                                {
                                                    $rows=get_field("preview_popup_images");
                                                    echo '<a href="#" class="btn no-animate js-btn">Continued…</a>';
                                                    $f=0;
                                                    foreach($rows as $row)
                                                    {
                                                        if($f==0)
                                                        {
                                                            echo '<img src="'.$row['ppi_images'].'" alt="Copywriting">';
                                                            $f=1;
                                                        }
                                                        else
                                                        {
                                                            echo '<img class="hide" src="'.$row['ppi_images'].'" alt="Copywriting">';
                                                        }
                                                    }

                                                }
                                                else
                                                {
                                                    echo '<img src="'.get_field("preview_popup_image").'" alt="Copywriting">';
                                                }
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                    $i++;
                                endwhile;
                                wp_reset_postdata();
                                ?>
                            </div>
                            <div class="text-center btn-block js-btn">
                                <a href="javascript:;" class="btn btn-outline">Load more</a>
                            </div>
                        </div>
                    </div>
                    <div id="tab-11" class="portfolio-tab-content-item js-content-holder">
                        <div class="portfolio-scroll-content">
                            <div class="portfolio-list js-list">
                                <?php
                                $args = array(
                                    'post_type' => 'portfolio',
                                    'post_status' => 'publish',
                                    'posts_per_page' => 56,
                                    'orderby' => 'date',
                                    'order'   => 'ASC',
                                    'tax_query' => array(
                                        'relation' => 'AND',
                                        array(
                                            'taxonomy' => 'portfolio_display',
                                            'field' => 'slug',
                                            'terms' => 'portfolio'
                                        ),
                                        array(
                                            'taxonomy' => 'portfolio_category',
                                            'field' => 'slug',
                                            'terms' => 'article'
                                        )
                                    )
                                );

                                $loop = new WP_Query( $args );
                                $i=1;
                                while ( $loop->have_posts() ) : $loop->the_post();
                                    $post_id = get_the_ID();
                                    ?>
                                    <div class="portfolio-item">
                                        <a href="javascript:;" data-src="#popup-portfolio-tab-11-<?php echo $i; ?>" data-fancybox  class="portfolio-holder">
                                            <div class="image-block">
                                                <img width="auto" height="auto"  src="<?php echo get_field("preview_image"); ?>" data-src="<?php echo get_field("preview_image"); ?>" class="lazyload" alt="Portfolio">
                                            </div>
                                        </a>
                                        <div id="popup-portfolio-tab-11-<?php echo $i; ?>" class="popup-content popup-copywriting" style="display: none;">
                                            <div class="preview-copywriting js-copywriting-images">
                                                <?php
                                                if(get_field("more_than_one_image")=='yes')
                                                {

                                                    if(have_rows("preview_popup_images")) :

                                                        echo '<a href="#" class="btn no-animate js-btn">Continued…</a>';
                                                        $f=0;

                                                        while(have_rows("preview_popup_images")) : the_row();
                                                            if($f==0)
                                                            {
                                                                echo '<img src="'.get_sub_field("ppi_images").'" alt="Copywriting">';
                                                                $f=1;
                                                            }
                                                            else
                                                            {
                                                                echo '<img class="hide" src="'.get_sub_field("ppi_images").'" alt="Copywriting">';
                                                            }

                                                        endwhile;
                                                    endif;
                                                }
                                                else
                                                {
                                                    echo '<img src="'.get_field("preview_popup_image").'" alt="Copywriting">';
                                                }
                                                ?>
                                            </div>
                                            <span class="caption-block"><strong><?php echo get_field("caption_block_by"); ?></strong></span>
                                        </div>
                                    </div>
                                    <?php
                                    $i++;
                                endwhile;
                                wp_reset_postdata();
                                ?>
                            </div>
                            <div class="text-center btn-block js-btn">
                                <a href="javascript:;" class="btn btn-outline">Load more</a>
                            </div>
                        </div>
                    </div>
                    <div id="tab-12" class="portfolio-tab-content-item js-content-holder">
                        <div class="portfolio-scroll-content">
                            <div class="portfolio-list js-list">
                                <?php
                                $args = array(
                                    'post_type' => 'portfolio',
                                    'post_status' => 'publish',
                                    'posts_per_page' => 56,
                                    'orderby' => 'date',
                                    'order'   => 'ASC',
                                    'tax_query' => array(
                                        'relation' => 'AND',
                                        array(
                                            'taxonomy' => 'portfolio_display',
                                            'field' => 'slug',
                                            'terms' => 'portfolio'
                                        ),
                                        array(
                                            'taxonomy' => 'portfolio_category',
                                            'field' => 'slug',
                                            'terms' => 'blog'
                                        )
                                    )
                                );

                                $loop = new WP_Query( $args );
                                $i=1;
                                while ( $loop->have_posts() ) : $loop->the_post();
                                    $post_id = get_the_ID();
                                    ?>
                                    <div class="portfolio-item">
                                        <a href="javascript:;" data-src="#popup-portfolio-tab-12-<?php echo $i; ?>" data-fancybox  class="portfolio-holder">
                                            <div class="image-block">
                                                <img width="auto" height="auto"  src="<?php echo get_field("preview_image"); ?>" data-src="<?php echo get_field("preview_image"); ?>" class="lazyload" alt="Portfolio">
                                            </div>
                                        </a>
                                        <div id="popup-portfolio-tab-12-<?php echo $i; ?>" class="popup-content popup-copywriting" style="display: none;">
                                            <div class="preview-copywriting js-copywriting-images">
                                                <?php
                                                if(get_field("more_than_one_image")=='yes')
                                                {


                                                    if(have_rows("preview_popup_images")) :

                                                        echo '<a href="#" class="btn no-animate js-btn">Continued…</a>';
                                                        $f=0;

                                                        while(have_rows("preview_popup_images")) : the_row();


                                                            if($f==0)
                                                            {
                                                                echo '<img src="'.get_sub_field("ppi_images").'" alt="Copywriting">';
                                                                $f=1;
                                                            }
                                                            else
                                                            {
                                                                echo '<img class="hide" src="'.get_sub_field("ppi_images").'" alt="Copywriting">';
                                                            }

                                                        endwhile;
                                                    endif;
                                                }
                                                else
                                                {
                                                    echo '<img src="'.get_field("preview_popup_image").'" alt="Copywriting">';
                                                }
                                                ?>
                                            </div>
                                            <span class="caption-block"><strong><?php echo get_field("caption_block_by"); ?></strong></span>
                                        </div>
                                    </div>
                                    <?php
                                    $i++;
                                endwhile;
                                wp_reset_postdata();
                                ?>
                            </div>
                            <div class="text-center btn-block js-btn">
                                <a href="javascript:;" class="btn btn-outline">Load more</a>
                            </div>
                        </div>
                    </div>
                    <div id="tab-13" class="portfolio-tab-content-item js-content-holder">
                        <div class="portfolio-scroll-content">
                            <div class="portfolio-list js-list">
                                <?php
                                $args = array(
                                    'post_type' => 'portfolio',
                                    'post_status' => 'publish',
                                    'posts_per_page' => 56,
                                    'orderby' => 'date',
                                    'order'   => 'ASC',
                                    'tax_query' => array(
                                        'relation' => 'AND',
                                        array(
                                            'taxonomy' => 'portfolio_display',
                                            'field' => 'slug',
                                            'terms' => 'portfolio'
                                        ),
                                        array(
                                            'taxonomy' => 'portfolio_category',
                                            'field' => 'slug',
                                            'terms' => 'email'
                                        )
                                    )
                                );

                                $loop = new WP_Query( $args );
                                $i=1;
                                while ( $loop->have_posts() ) : $loop->the_post();
                                    $post_id = get_the_ID();
                                    ?>
                                    <div class="portfolio-item">
                                        <a href="javascript:;" data-src="#popup-portfolio-tab-13-<?php echo $i; ?>" data-fancybox  class="portfolio-holder">
                                            <div class="image-block">
                                                <img width="auto" height="auto"  src="<?php echo get_field("preview_image"); ?>" data-src="<?php echo get_field("preview_image"); ?>" class="lazyload" alt="Portfolio">
                                            </div>
                                        </a>
                                        <div id="popup-portfolio-tab-13-<?php echo $i; ?>" class="popup-content popup-copywriting" style="display: none;">
                                            <div class="preview-copywriting js-copywriting-images">
                                                <?php
                                                if(get_field("more_than_one_image")=='yes')
                                                {


                                                    if(have_rows("preview_popup_images")) :

                                                        echo '<a href="#" class="btn no-animate js-btn">Continued…</a>';
                                                        $f=0;

                                                        while(have_rows("preview_popup_images")) : the_row();


                                                            if($f==0)
                                                            {
                                                                echo '<img src="'.get_sub_field("ppi_images").'" alt="Copywriting">';
                                                                $f=1;
                                                            }
                                                            else
                                                            {
                                                                echo '<img class="hide" src="'.get_sub_field("ppi_images").'" alt="Copywriting">';
                                                            }

                                                        endwhile;
                                                    endif;
                                                }
                                                else
                                                {
                                                    echo '<img src="'.get_field("preview_popup_image").'" alt="Copywriting">';
                                                }
                                                ?>
                                            </div>
                                            <span class="caption-block"><strong><?php echo get_field("caption_block_by"); ?></strong></span>
                                        </div>
                                    </div>
                                    <?php
                                    $i++;
                                endwhile;
                                wp_reset_postdata();
                                ?>
                            </div>
                            <div class="text-center btn-block js-btn">
                                <a href="javascript:;" class="btn btn-outline">Load more</a>
                            </div>
                        </div>
                    </div>
                    <div id="tab-14" class="portfolio-tab-content-item js-content-holder">
                        <div class="portfolio-scroll-content">
                            <div class="portfolio-list js-list">
                                <?php
                                $args = array(
                                    'post_type' => 'portfolio',
                                    'post_status' => 'publish',
                                    'posts_per_page' => 56,
                                    'orderby' => 'date',
                                    'order'   => 'ASC',
                                    'tax_query' => array(
                                        'relation' => 'AND',
                                        array(
                                            'taxonomy' => 'portfolio_display',
                                            'field' => 'slug',
                                            'terms' => 'portfolio'
                                        ),
                                        array(
                                            'taxonomy' => 'portfolio_category',
                                            'field' => 'slug',
                                            'terms' => 'landing-page'
                                        )
                                    )
                                );

                                $loop = new WP_Query( $args );
                                $i=1;
                                while ( $loop->have_posts() ) : $loop->the_post();
                                    $post_id = get_the_ID();
                                    ?>
                                    <div class="portfolio-item">
                                        <a href="javascript:;" data-src="#popup-portfolio-tab-14-<?php echo $i; ?>" data-fancybox  class="portfolio-holder">
                                            <div class="image-block">
                                                <img width="auto" height="auto"  src="<?php echo get_field("preview_image"); ?>" data-src="<?php echo get_field("preview_image"); ?>" class="lazyload" alt="Portfolio">
                                            </div>
                                        </a>
                                        <div id="popup-portfolio-tab-14-<?php echo $i; ?>" class="popup-content popup-copywriting" style="display: none;">
                                            <div class="preview-copywriting js-copywriting-images">
                                                <?php
                                                if(get_field("more_than_one_image")=='yes')
                                                {


                                                    if(have_rows("preview_popup_images")) :

                                                        echo '<a href="#" class="btn no-animate js-btn">Continued…</a>';
                                                        $f=0;

                                                        while(have_rows("preview_popup_images")) : the_row();


                                                            if($f==0)
                                                            {
                                                                echo '<img src="'.get_sub_field("ppi_images").'" alt="Copywriting">';
                                                                $f=1;
                                                            }
                                                            else
                                                            {
                                                                echo '<img class="hide" src="'.get_sub_field("ppi_images").'" alt="Copywriting">';
                                                            }

                                                        endwhile;
                                                    endif;
                                                }
                                                else
                                                {
                                                    echo '<img src="'.get_field("preview_popup_image").'" alt="Copywriting">';
                                                }
                                                ?>
                                            </div>
                                            <span class="caption-block"><strong><?php echo get_field("caption_block_by"); ?></strong></span>
                                        </div>
                                    </div>
                                    <?php
                                    $i++;
                                endwhile;
                                wp_reset_postdata();
                                ?>
                            </div>
                            <div class="text-center btn-block js-btn">
                                <a href="javascript:;" class="btn btn-outline">Load more</a>
                            </div>
                        </div>
                    </div>
                    <div id="tab-15" class="portfolio-tab-content-item js-content-holder">
                        <div class="portfolio-scroll-content">
                            <div class="portfolio-list js-list">
                                <?php
                                $args = array(
                                    'post_type' => 'portfolio',
                                    'post_status' => 'publish',
                                    'posts_per_page' => 56,
                                    'orderby' => 'date',
                                    'order'   => 'ASC',
                                    'tax_query' => array(
                                        'relation' => 'AND',
                                        array(
                                            'taxonomy' => 'portfolio_display',
                                            'field' => 'slug',
                                            'terms' => 'portfolio'
                                        ),
                                        array(
                                            'taxonomy' => 'portfolio_category',
                                            'field' => 'slug',
                                            'terms' => 'press-release'
                                        )
                                    )
                                );

                                $loop = new WP_Query( $args );
                                $i=1;
                                while ( $loop->have_posts() ) : $loop->the_post();
                                    $post_id = get_the_ID();
                                    ?>
                                    <div class="portfolio-item">
                                        <a href="javascript:;" data-src="#popup-portfolio-tab-15-<?php echo $i; ?>" data-fancybox  class="portfolio-holder">
                                            <div class="image-block">
                                                <img width="auto" height="auto"  src="<?php echo get_field("preview_image"); ?>" data-src="<?php echo get_field("preview_image"); ?>" class="lazyload" alt="Portfolio">
                                            </div>
                                        </a>
                                        <div id="popup-portfolio-tab-15-<?php echo $i; ?>" class="popup-content popup-copywriting" style="display: none;">
                                            <div class="preview-copywriting js-copywriting-images">
                                                <?php
                                                if(get_field("more_than_one_image")=='yes')
                                                {


                                                    if(have_rows("preview_popup_images")) :

                                                        echo '<a href="#" class="btn no-animate js-btn">Continued…</a>';
                                                        $f=0;

                                                        while(have_rows("preview_popup_images")) : the_row();


                                                            if($f==0)
                                                            {
                                                                echo '<img src="'.get_sub_field("ppi_images").'" alt="Copywriting">';
                                                                $f=1;
                                                            }
                                                            else
                                                            {
                                                                echo '<img class="hide" src="'.get_sub_field("ppi_images").'" alt="Copywriting">';
                                                            }

                                                        endwhile;
                                                    endif;
                                                }
                                                else
                                                {
                                                    echo '<img src="'.get_field("preview_popup_image").'" alt="Copywriting">';
                                                }
                                                ?>
                                            </div>
                                            <span class="caption-block"><strong><?php echo get_field("caption_block_by"); ?></strong></span>
                                        </div>
                                    </div>
                                    <?php
                                    $i++;
                                endwhile;
                                wp_reset_postdata();
                                ?>
                            </div>
                            <div class="text-center btn-block js-btn">
                                <a href="javascript:;" class="btn btn-outline">Load more</a>
                            </div>
                        </div>
                    </div>
                    <div id="tab-16" class="portfolio-tab-content-item js-content-holder">
                        <div class="portfolio-scroll-content">
                            <div class="portfolio-list js-list">
                                <?php
                                $args = array(
                                    'post_type' => 'portfolio',
                                    'post_status' => 'publish',
                                    'posts_per_page' => 56,
                                    'orderby' => 'date',
                                    'order'   => 'ASC',
                                    'tax_query' => array(
                                        'relation' => 'AND',
                                        array(
                                            'taxonomy' => 'portfolio_display',
                                            'field' => 'slug',
                                            'terms' => 'portfolio'
                                        ),
                                        array(
                                            'taxonomy' => 'portfolio_category',
                                            'field' => 'slug',
                                            'terms' => 'social-media-post'
                                        )
                                    )
                                );

                                $loop = new WP_Query( $args );
                                $i=1;
                                while ( $loop->have_posts() ) : $loop->the_post();
                                    $post_id = get_the_ID();
                                    ?>
                                    <div class="portfolio-item">
                                        <a href="javascript:;" data-src="#popup-portfolio-tab-16-<?php echo $i; ?>" data-fancybox  class="portfolio-holder">
                                            <div class="image-block">
                                                <img width="auto" height="auto"  src="<?php echo get_field("preview_image"); ?>" data-src="<?php echo get_field("preview_image"); ?>" class="lazyload" alt="Portfolio">
                                            </div>
                                        </a>
                                        <div id="popup-portfolio-tab-16-<?php echo $i; ?>" class="popup-content popup-copywriting" style="display: none;">
                                            <div class="preview-copywriting js-copywriting-images">
                                                <?php
                                                if(get_field("more_than_one_image")=='yes')
                                                {


                                                    if(have_rows("preview_popup_images")) :

                                                        echo '<a href="#" class="btn no-animate js-btn">Continued…</a>';
                                                        $f=0;

                                                        while(have_rows("preview_popup_images")) : the_row();


                                                            if($f==0)
                                                            {
                                                                echo '<img src="'.get_sub_field("ppi_images").'" alt="Copywriting">';
                                                                $f=1;
                                                            }
                                                            else
                                                            {
                                                                echo '<img class="hide" src="'.get_sub_field("ppi_images").'" alt="Copywriting">';
                                                            }

                                                        endwhile;
                                                    endif;
                                                }
                                                else
                                                {
                                                    echo '<img src="'.get_field("preview_popup_image").'" alt="Copywriting">';
                                                }
                                                ?>
                                            </div>
                                            <span class="caption-block"><strong><?php echo get_field("caption_block_by"); ?></strong></span>
                                        </div>
                                    </div>
                                    <?php
                                    $i++;
                                endwhile;
                                wp_reset_postdata();
                                ?>
                            </div>
                            <div class="text-center btn-block js-btn">
                                <a href="javascript:;" class="btn btn-outline">Load more</a>
                            </div>
                        </div>
                    </div>
                    <div id="tab-17" class="portfolio-tab-content-item js-content-holder">
                        <div class="portfolio-scroll-content">
                            <div class="portfolio-list js-list">
                                <?php
                                $args = array(
                                    'post_type' => 'portfolio',
                                    'post_status' => 'publish',
                                    'posts_per_page' => 56,
                                    'orderby' => 'date',
                                    'order'   => 'ASC',
                                    'tax_query' => array(
                                        'relation' => 'AND',
                                        array(
                                            'taxonomy' => 'portfolio_display',
                                            'field' => 'slug',
                                            'terms' => 'portfolio'
                                        ),
                                        array(
                                            'taxonomy' => 'portfolio_category',
                                            'field' => 'slug',
                                            'terms' => 'website-content'
                                        )
                                    )
                                );

                                $loop = new WP_Query( $args );
                                $i=1;
                                while ( $loop->have_posts() ) : $loop->the_post();
                                    $post_id = get_the_ID();
                                    ?>
                                    <div class="portfolio-item">
                                        <a href="javascript:;" data-src="#popup-portfolio-tab-17-<?php echo $i; ?>" data-fancybox  class="portfolio-holder">
                                            <div class="image-block">
                                                <img width="auto" height="auto"  src="<?php echo get_field("preview_image"); ?>" data-src="<?php echo get_field("preview_image"); ?>" class="lazyload" alt="Portfolio">
                                            </div>
                                        </a>
                                        <div id="popup-portfolio-tab-17-<?php echo $i; ?>" class="popup-content popup-copywriting" style="display: none;">
                                            <div class="preview-copywriting js-copywriting-images">
                                                <?php
                                                if(get_field("more_than_one_image")=='yes')
                                                {


                                                    if(have_rows("preview_popup_images")) :

                                                        echo '<a href="#" class="btn no-animate js-btn">Continued…</a>';
                                                        $f=0;

                                                        while(have_rows("preview_popup_images")) : the_row();


                                                            if($f==0)
                                                            {
                                                                echo '<img src="'.get_sub_field("ppi_images").'" alt="Copywriting">';
                                                                $f=1;
                                                            }
                                                            else
                                                            {
                                                                echo '<img class="hide" src="'.get_sub_field("ppi_images").'" alt="Copywriting">';
                                                            }

                                                        endwhile;
                                                    endif;
                                                }
                                                else
                                                {
                                                    echo '<img src="'.get_field("preview_popup_image").'" alt="Copywriting">';
                                                }
                                                ?>
                                            </div>
                                            <span class="caption-block"><strong><?php echo get_field("caption_block_by"); ?></strong></span>
                                        </div>
                                    </div>
                                    <?php
                                    $i++;
                                endwhile;
                                wp_reset_postdata();
                                ?>
                            </div>
                            <div class="text-center btn-block js-btn">
                                <a href="javascript:;" class="btn btn-outline">Load more</a>
                            </div>
                        </div>
                    </div>
                    <div id="tab-18" class="portfolio-tab-content-item js-content-holder">
                        <div class="portfolio-scroll-content">
                            <div class="portfolio-list js-list">
                                <?php
                                $args = array(
                                    'post_type' => 'portfolio',
                                    'post_status' => 'publish',
                                    'posts_per_page' => 156,
                                    'orderby' => 'date',
                                    'order'   => 'ASC',
                                    'tax_query' => array(
                                        'relation' => 'AND',
                                        array(
                                            'taxonomy' => 'portfolio_display',
                                            'field' => 'slug',
                                            'terms' => 'portfolio'
                                        ),
                                        array(
                                            'taxonomy' => 'portfolio_category',
                                            'field' => 'slug',
                                            'terms' => 'video'
                                        )
                                    )
                                );

                                $loop = new WP_Query( $args );
                                $i=1;
                                while ( $loop->have_posts() ) : $loop->the_post();

                                    ?>
                                    <div class="portfolio-item">
                                        <a href="javascript:;" data-src="#popup-portfolio-tab-18-<?php echo $i; ?>" data-fancybox  class="portfolio-holder">
                                            <div class="image-block">
                                                <img width="auto" height="auto" src="<?php echo get_field("preview_image"); ?>" alt="Portfolio">
                                            </div>
                                        </a>
                                        <div id="popup-portfolio-tab-18-<?php echo $i; ?>" class="popup-content" style="display: none;">
                                            <div class="preview-image">
                                                <?php echo get_field("video_popup_content"); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                    $i++;
                                endwhile;
                                wp_reset_postdata();
                                ?>
                            </div>
                            <div class="text-center btn-block js-btn">
                                <a href="javascript:;" class="btn btn-outline">Load more</a>
                            </div>
                        </div>
                    </div>
                    <div id="tab-19" class="portfolio-tab-content-item js-content-holder">
                        <div class="portfolio-scroll-content">
                            <div class="portfolio-list js-list">
                                <?php
                                $args = array(
                                    'post_type' => 'portfolio',
                                    'post_status' => 'publish',
                                    'posts_per_page' => 56,
                                    'orderby' => 'date',
                                    'order'   => 'ASC',
                                    'tax_query' => array(
                                        'relation' => 'AND',
                                        array(
                                            'taxonomy' => 'portfolio_display',
                                            'field' => 'slug',
                                            'terms' => 'portfolio'
                                        ),
                                        array(
                                            'taxonomy' => 'portfolio_category',
                                            'field' => 'slug',
                                            'terms' => 'ad-videos'
                                        )
                                    )
                                );

                                $loop = new WP_Query( $args );
                                $i=1;
                                while ( $loop->have_posts() ) : $loop->the_post();

                                    ?>
                                    <div class="portfolio-item">
                                        <a href="javascript:;" data-src="#popup-portfolio-tab-19-<?php echo $i; ?>" data-fancybox  class="portfolio-holder">
                                            <div class="image-block">
                                                <img width="auto" height="auto" src="<?php echo get_field("preview_image"); ?>" alt="Portfolio">
                                            </div>
                                        </a>
                                        <div id="popup-portfolio-tab-19-<?php echo $i; ?>" class="popup-content" style="display: none;">
                                            <div class="preview-image">
                                                <?php echo get_field("video_popup_content"); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                    $i++;
                                endwhile;
                                wp_reset_postdata();
                                ?>
                            </div>
                            <div class="text-center btn-block js-btn">
                                <a href="javascript:;" class="btn btn-outline">Load more</a>
                            </div>
                        </div>
                    </div>
                    <div id="tab-20" class="portfolio-tab-content-item js-content-holder">
                        <div class="portfolio-scroll-content">
                            <div class="portfolio-list js-list">
                                <?php
                                $args = array(
                                    'post_type' => 'portfolio',
                                    'post_status' => 'publish',
                                    'posts_per_page' => 56,
                                    'orderby' => 'date',
                                    'order'   => 'ASC',
                                    'tax_query' => array(
                                        'relation' => 'AND',
                                        array(
                                            'taxonomy' => 'portfolio_display',
                                            'field' => 'slug',
                                            'terms' => 'portfolio'
                                        ),
                                        array(
                                            'taxonomy' => 'portfolio_category',
                                            'field' => 'slug',
                                            'terms' => 'explainer-videos'
                                        )
                                    )
                                );

                                $loop = new WP_Query( $args );
                                $i=1;
                                while ( $loop->have_posts() ) : $loop->the_post();

                                    ?>
                                    <div class="portfolio-item">
                                        <a href="javascript:;" data-src="#popup-portfolio-tab-20-<?php echo $i; ?>" data-fancybox  class="portfolio-holder">
                                            <div class="image-block">
                                                <img width="auto" height="auto" src="<?php echo get_field("preview_image"); ?>" alt="Portfolio">
                                            </div>
                                        </a>
                                        <div id="popup-portfolio-tab-20-<?php echo $i; ?>" class="popup-content" style="display: none;">
                                            <div class="preview-image">
                                                <?php echo get_field("video_popup_content"); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                    $i++;
                                endwhile;
                                wp_reset_postdata();
                                ?>
                            </div>
                            <div class="text-center btn-block js-btn">
                                <a href="javascript:;" class="btn btn-outline">Load more</a>
                            </div>
                        </div>
                    </div>
                    <div id="tab-21" class="portfolio-tab-content-item js-content-holder">
                        <div class="portfolio-scroll-content">
                            <div class="portfolio-list js-list">
                                <?php
                                $args = array(
                                    'post_type' => 'portfolio',
                                    'post_status' => 'publish',
                                    'posts_per_page' => 256,
                                    'orderby' => 'date',
                                    'order'   => 'ASC',
                                    'tax_query' => array(
                                        'relation' => 'AND',
                                        array(
                                            'taxonomy' => 'portfolio_display',
                                            'field' => 'slug',
                                            'terms' => 'portfolio'
                                        ),
                                        array(
                                            'taxonomy' => 'portfolio_category',
                                            'field' => 'slug',
                                            'terms' => 'illustrations'
                                        )
                                    )
                                );

                                $loop = new WP_Query( $args );
                                $i=1;
                                while ( $loop->have_posts() ) : $loop->the_post();

                                    ?>
                                    <div class="portfolio-item">
                                        <a href="javascript:;" data-src="#popup-portfolio-tab-21-<?php echo $i; ?>" data-fancybox  class="portfolio-holder">
                                            <div class="image-block">
                                                <img width="auto" height="auto"  src="<?php echo get_field("preview_image"); ?>" data-src="<?php echo get_field("preview_image"); ?>" class="lazyload" alt="Portfolio">
                                            </div>
                                        </a>
                                        <div id="popup-portfolio-tab-21-<?php echo $i; ?>" class="popup-content" style="display: none;">
                                            <div class="preview-image">
                                                <img loading=lazy src="<?php echo get_field("preview_popup_image"); ?>" data-src="<?php echo get_field("preview_popup_image"); ?>" class="lazyload" alt="Portfolio">
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                    $i++;
                                endwhile;
                                wp_reset_postdata();
                                ?>
                            </div>
                            <div class="text-center btn-block js-btn">
                                <a href="javascript:;" class="btn btn-outline">Load more</a>
                            </div>
                        </div>
                    </div>
                    <div id="tab-22" class="portfolio-tab-content-item js-content-holder">
                        <div class="portfolio-scroll-content">
                            <div class="portfolio-list js-list">
                                <?php
                                $args = array(
                                    'post_type' => 'portfolio',
                                    'post_status' => 'publish',
                                    'posts_per_page' => 56,
                                    'orderby' => 'date',
                                    'order'   => 'ASC',
                                    'tax_query' => array(
                                        'relation' => 'AND',
                                        array(
                                            'taxonomy' => 'portfolio_display',
                                            'field' => 'slug',
                                            'terms' => 'portfolio'
                                        ),
                                        array(
                                            'taxonomy' => 'portfolio_category',
                                            'field' => 'slug',
                                            'terms' => 'avatar'
                                        )
                                    )
                                );

                                $loop = new WP_Query( $args );
                                $i=1;
                                while ( $loop->have_posts() ) : $loop->the_post();

                                    ?>
                                    <div class="portfolio-item">
                                        <a href="javascript:;" data-src="#popup-portfolio-tab-22-<?php echo $i; ?>" data-fancybox  class="portfolio-holder">
                                            <div class="image-block">
                                                <img width="auto" height="auto"  src="<?php echo get_field("preview_image"); ?>" data-src="<?php echo get_field("preview_image"); ?>" class="lazyload" alt="Portfolio">
                                            </div>
                                        </a>
                                        <div id="popup-portfolio-tab-22-<?php echo $i; ?>" class="popup-content" style="display: none;">
                                            <div class="preview-image">
                                                <img loading=lazy src="<?php echo get_field("preview_popup_image"); ?>" data-src="<?php echo get_field("preview_popup_image"); ?>" class="lazyload" alt="Portfolio">
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                    $i++;
                                endwhile;
                                wp_reset_postdata();
                                ?>
                            </div>
                            <div class="text-center btn-block js-btn">
                                <a href="javascript:;" class="btn btn-outline">Load more</a>
                            </div>
                        </div>
                    </div>
                    <div id="tab-23" class="portfolio-tab-content-item js-content-holder">
                        <div class="portfolio-scroll-content">
                            <div class="portfolio-list js-list">
                                <?php
                                $args = array(
                                    'post_type' => 'portfolio',
                                    'post_status' => 'publish',
                                    'posts_per_page' => 56,
                                    'orderby' => 'date',
                                    'order'   => 'ASC',
                                    'tax_query' => array(
                                        'relation' => 'AND',
                                        array(
                                            'taxonomy' => 'portfolio_display',
                                            'field' => 'slug',
                                            'terms' => 'portfolio'
                                        ),
                                        array(
                                            'taxonomy' => 'portfolio_category',
                                            'field' => 'slug',
                                            'terms' => 'character'
                                        )
                                    )
                                );

                                $loop = new WP_Query( $args );
                                $i=1;
                                while ( $loop->have_posts() ) : $loop->the_post();

                                    ?>
                                    <div class="portfolio-item">
                                        <a href="javascript:;" data-src="#popup-portfolio-tab-23-<?php echo $i; ?>" data-fancybox  class="portfolio-holder">
                                            <div class="image-block">
                                                <img width="auto" height="auto"  src="<?php echo get_field("preview_image"); ?>" data-src="<?php echo get_field("preview_image"); ?>" class="lazyload" alt="Portfolio">
                                            </div>
                                        </a>
                                        <div id="popup-portfolio-tab-23-<?php echo $i; ?>" class="popup-content" style="display: none;">
                                            <div class="preview-image">
                                                <img loading=lazy src="<?php echo get_field("preview_popup_image"); ?>" data-src="<?php echo get_field("preview_popup_image"); ?>" class="lazyload" alt="Portfolio">
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                    $i++;
                                endwhile;
                                wp_reset_postdata();
                                ?>
                            </div>
                            <div class="text-center btn-block js-btn">
                                <a href="javascript:;" class="btn btn-outline">Load more</a>
                            </div>
                        </div>
                    </div>
                    <div id="tab-24" class="portfolio-tab-content-item js-content-holder">
                        <div class="portfolio-scroll-content">
                            <div class="portfolio-list js-list">
                                <?php
                                $args = array(
                                    'post_type' => 'portfolio',
                                    'post_status' => 'publish',
                                    'posts_per_page' => 56,
                                    'orderby' => 'date',
                                    'order'   => 'ASC',
                                    'tax_query' => array(
                                        'relation' => 'AND',
                                        array(
                                            'taxonomy' => 'portfolio_display',
                                            'field' => 'slug',
                                            'terms' => 'portfolio'
                                        ),
                                        array(
                                            'taxonomy' => 'portfolio_category',
                                            'field' => 'slug',
                                            'terms' => 'comic-illustrations'
                                        )
                                    )
                                );

                                $loop = new WP_Query( $args );
                                $i=1;
                                while ( $loop->have_posts() ) : $loop->the_post();

                                    ?>
                                    <div class="portfolio-item">
                                        <a href="javascript:;" data-src="#popup-portfolio-tab-24-<?php echo $i; ?>" data-fancybox  class="portfolio-holder">
                                            <div class="image-block">
                                                <img width="auto" height="auto"  src="<?php echo get_field("preview_image"); ?>" data-src="<?php echo get_field("preview_image"); ?>" class="lazyload" alt="Portfolio">
                                            </div>
                                        </a>
                                        <div id="popup-portfolio-tab-24-<?php echo $i; ?>" class="popup-content" style="display: none;">
                                            <div class="preview-image">
                                                <img loading=lazy src="<?php echo get_field("preview_popup_image"); ?>" data-src="<?php echo get_field("preview_popup_image"); ?>" class="lazyload" alt="Portfolio">
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                    $i++;
                                endwhile;
                                wp_reset_postdata();
                                ?>
                            </div>
                            <div class="text-center btn-block js-btn">
                                <a href="javascript:;" class="btn btn-outline">Load more</a>
                            </div>
                        </div>
                    </div>
                    <div id="tab-25" class="portfolio-tab-content-item js-content-holder">
                        <div class="portfolio-scroll-content">
                            <div class="portfolio-list js-list">
                                <?php
                                $args = array(
                                    'post_type' => 'portfolio',
                                    'post_status' => 'publish',
                                    'posts_per_page' => 56,
                                    'orderby' => 'date',
                                    'order'   => 'ASC',
                                    'tax_query' => array(
                                        'relation' => 'AND',
                                        array(
                                            'taxonomy' => 'portfolio_display',
                                            'field' => 'slug',
                                            'terms' => 'portfolio'
                                        ),
                                        array(
                                            'taxonomy' => 'portfolio_category',
                                            'field' => 'slug',
                                            'terms' => 'custom-brand-illustration'
                                        )
                                    )
                                );

                                $loop = new WP_Query( $args );
                                $i=1;
                                while ( $loop->have_posts() ) : $loop->the_post();

                                    ?>
                                    <div class="portfolio-item">
                                        <a href="javascript:;" data-src="#popup-portfolio-tab-25-<?php echo $i; ?>" data-fancybox  class="portfolio-holder">
                                            <div class="image-block">
                                                <img width="auto" height="auto"  src="<?php echo get_field("preview_image"); ?>" data-src="<?php echo get_field("preview_image"); ?>" class="lazyload" alt="Portfolio">
                                            </div>
                                        </a>
                                        <div id="popup-portfolio-tab-25-<?php echo $i; ?>" class="popup-content" style="display: none;">
                                            <div class="preview-image">
                                                <img loading=lazy src="<?php echo get_field("preview_popup_image"); ?>" data-src="<?php echo get_field("preview_popup_image"); ?>" class="lazyload" alt="Portfolio">
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                    $i++;
                                endwhile;
                                wp_reset_postdata();
                                ?>
                            </div>
                            <div class="text-center btn-block js-btn">
                                <a href="javascript:;" class="btn btn-outline">Load more</a>
                            </div>
                        </div>
                    </div>
                    <div id="tab-26" class="portfolio-tab-content-item js-content-holder">
                        <div class="portfolio-scroll-content">
                            <div class="portfolio-list js-list">
                                <?php
                                $args = array(
                                    'post_type' => 'portfolio',
                                    'post_status' => 'publish',
                                    'posts_per_page' => 56,
                                    'orderby' => 'date',
                                    'order'   => 'ASC',
                                    'tax_query' => array(
                                        'relation' => 'AND',
                                        array(
                                            'taxonomy' => 'portfolio_display',
                                            'field' => 'slug',
                                            'terms' => 'portfolio'
                                        ),
                                        array(
                                            'taxonomy' => 'portfolio_category',
                                            'field' => 'slug',
                                            'terms' => 'illustrated-manuals'
                                        )
                                    )
                                );

                                $loop = new WP_Query( $args );
                                $i=1;
                                while ( $loop->have_posts() ) : $loop->the_post();

                                    ?>
                                    <div class="portfolio-item">
                                        <a href="javascript:;" data-src="#popup-portfolio-tab-26-<?php echo $i; ?>" data-fancybox  class="portfolio-holder">
                                            <div class="image-block">
                                                <img width="auto" height="auto"  src="<?php echo get_field("preview_image"); ?>" data-src="<?php echo get_field("preview_image"); ?>" class="lazyload" alt="Portfolio">
                                            </div>
                                        </a>
                                        <div id="popup-portfolio-tab-26-<?php echo $i; ?>" class="popup-content" style="display: none;">
                                            <div class="preview-image">
                                                <img loading=lazy src="<?php echo get_field("preview_popup_image"); ?>" data-src="<?php echo get_field("preview_popup_image"); ?>" class="lazyload" alt="Portfolio">
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                    $i++;
                                endwhile;
                                wp_reset_postdata();
                                ?>
                            </div>
                            <div class="text-center btn-block js-btn">
                                <a href="javascript:;" class="btn btn-outline">Load more</a>
                            </div>
                        </div>
                    </div>
                    <div id="tab-27" class="portfolio-tab-content-item js-content-holder">
                        <div class="portfolio-scroll-content">
                            <div class="portfolio-list js-list">
                                <?php
                                $args = array(
                                    'post_type' => 'portfolio',
                                    'post_status' => 'publish',
                                    'posts_per_page' => 56,
                                    'orderby' => 'date',
                                    'order'   => 'ASC',
                                    'tax_query' => array(
                                        'relation' => 'AND',
                                        array(
                                            'taxonomy' => 'portfolio_display',
                                            'field' => 'slug',
                                            'terms' => 'portfolio'
                                        ),
                                        array(
                                            'taxonomy' => 'portfolio_category',
                                            'field' => 'slug',
                                            'terms' => 'custom-mascots'
                                        )
                                    )
                                );

                                $loop = new WP_Query( $args );
                                $i=1;
                                while ( $loop->have_posts() ) : $loop->the_post();

                                    ?>
                                    <div class="portfolio-item">
                                        <a href="javascript:;" data-src="#popup-portfolio-tab-27-<?php echo $i; ?>" data-fancybox  class="portfolio-holder">
                                            <div class="image-block">
                                                <img width="auto" height="auto"  src="<?php echo get_field("preview_image"); ?>" data-src="<?php echo get_field("preview_image"); ?>" class="lazyload" alt="Portfolio">
                                            </div>
                                        </a>
                                        <div id="popup-portfolio-tab-27-<?php echo $i; ?>" class="popup-content" style="display: none;">
                                            <div class="preview-image">
                                                <img loading=lazy src="<?php echo get_field("preview_popup_image"); ?>" data-src="<?php echo get_field("preview_popup_image"); ?>" class="lazyload" alt="Portfolio">
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                    $i++;
                                endwhile;
                                wp_reset_postdata();
                                ?>
                            </div>
                            <div class="text-center btn-block js-btn">
                                <a href="javascript:;" class="btn btn-outline">Load more</a>
                            </div>
                        </div>
                    </div>
                    <div id="tab-28" class="portfolio-tab-content-item js-content-holder">
                        <div class="portfolio-scroll-content">
                            <div class="portfolio-list js-list">
                                <?php
                                $args = array(
                                    'post_type' => 'portfolio',
                                    'post_status' => 'publish',
                                    'posts_per_page' => 56,
                                    'orderby' => 'date',
                                    'order'   => 'ASC',
                                    'tax_query' => array(
                                        'relation' => 'AND',
                                        array(
                                            'taxonomy' => 'portfolio_display',
                                            'field' => 'slug',
                                            'terms' => 'portfolio'
                                        ),
                                        array(
                                            'taxonomy' => 'portfolio_category',
                                            'field' => 'slug',
                                            'terms' => 'merch-illustrations'
                                        )
                                    )
                                );

                                $loop = new WP_Query( $args );
                                $i=1;
                                while ( $loop->have_posts() ) : $loop->the_post();

                                    ?>
                                    <div class="portfolio-item">
                                        <a href="javascript:;" data-src="#popup-portfolio-tab-28-<?php echo $i; ?>" data-fancybox  class="portfolio-holder">
                                            <div class="image-block">
                                                <img width="auto" height="auto"  src="<?php echo get_field("preview_image"); ?>" data-src="<?php echo get_field("preview_image"); ?>" class="lazyload" alt="Portfolio">
                                            </div>
                                        </a>
                                        <div id="popup-portfolio-tab-28-<?php echo $i; ?>" class="popup-content" style="display: none;">
                                            <div class="preview-image">
                                                <img loading=lazy src="<?php echo get_field("preview_popup_image"); ?>" data-src="<?php echo get_field("preview_popup_image"); ?>" class="lazyload" alt="Portfolio">
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                    $i++;
                                endwhile;
                                wp_reset_postdata();
                                ?>
                            </div>
                            <div class="text-center btn-block js-btn">
                                <a href="javascript:;" class="btn btn-outline">Load more</a>
                            </div>
                        </div>
                    </div>
                    <div id="tab-29" class="portfolio-tab-content-item js-content-holder">
                        <div class="portfolio-scroll-content">
                            <div class="portfolio-list js-list">
                                <?php
                                $args = array(
                                    'post_type' => 'portfolio',
                                    'post_status' => 'publish',
                                    'posts_per_page' => 56,
                                    'orderby' => 'date',
                                    'order'   => 'ASC',
                                    'tax_query' => array(
                                        'relation' => 'AND',
                                        array(
                                            'taxonomy' => 'portfolio_display',
                                            'field' => 'slug',
                                            'terms' => 'portfolio'
                                        ),
                                        array(
                                            'taxonomy' => 'portfolio_category',
                                            'field' => 'slug',
                                            'terms' => 'portrait-illustration'
                                        )
                                    )
                                );

                                $loop = new WP_Query( $args );
                                $i=1;
                                while ( $loop->have_posts() ) : $loop->the_post();

                                    ?>
                                    <div class="portfolio-item">
                                        <a href="javascript:;" data-src="#popup-portfolio-tab-29-<?php echo $i; ?>" data-fancybox  class="portfolio-holder">
                                            <div class="image-block">
                                                <img width="auto" height="auto"  src="<?php echo get_field("preview_image"); ?>" data-src="<?php echo get_field("preview_image"); ?>" class="lazyload" alt="Portfolio">
                                            </div>
                                        </a>
                                        <div id="popup-portfolio-tab-29-<?php echo $i; ?>" class="popup-content" style="display: none;">
                                            <div class="preview-image">
                                                <img loading=lazy src="<?php echo get_field("preview_popup_image"); ?>" data-src="<?php echo get_field("preview_popup_image"); ?>" class="lazyload" alt="Portfolio">
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                    $i++;
                                endwhile;
                                wp_reset_postdata();
                                ?>
                            </div>
                            <div class="text-center btn-block js-btn">
                                <a href="javascript:;" class="btn btn-outline">Load more</a>
                            </div>
                        </div>
                    </div>
                    <div id="tab-30" class="portfolio-tab-content-item js-content-holder">
                        <div class="portfolio-scroll-content">
                            <div class="portfolio-list js-list">
                                <?php
                                $args = array(
                                    'post_type' => 'portfolio',
                                    'post_status' => 'publish',
                                    'posts_per_page' => 56,
                                    'orderby' => 'date',
                                    'order'   => 'ASC',
                                    'tax_query' => array(
                                        'relation' => 'AND',
                                        array(
                                            'taxonomy' => 'portfolio_display',
                                            'field' => 'slug',
                                            'terms' => 'portfolio'
                                        ),
                                        array(
                                            'taxonomy' => 'portfolio_category',
                                            'field' => 'slug',
                                            'terms' => 'storybook-illustrations'
                                        )
                                    )
                                );

                                $loop = new WP_Query( $args );
                                $i=1;
                                while ( $loop->have_posts() ) : $loop->the_post();

                                    ?>
                                    <div class="portfolio-item">
                                        <a href="javascript:;" data-src="#popup-portfolio-tab-30-<?php echo $i; ?>" data-fancybox  class="portfolio-holder">
                                            <div class="image-block">
                                                <img width="auto" height="auto"  src="<?php echo get_field("preview_image"); ?>" data-src="<?php echo get_field("preview_image"); ?>" class="lazyload" alt="Portfolio">
                                            </div>
                                        </a>
                                        <div id="popup-portfolio-tab-30-<?php echo $i; ?>" class="popup-content" style="display: none;">
                                            <div class="preview-image">
                                                <img loading=lazy src="<?php echo get_field("preview_popup_image"); ?>" data-src="<?php echo get_field("preview_popup_image"); ?>" class="lazyload" alt="Portfolio">
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                    $i++;
                                endwhile;
                                wp_reset_postdata();
                                ?>
                            </div>
                            <div class="text-center btn-block js-btn">
                                <a href="javascript:;" class="btn btn-outline">Load more</a>
                            </div>
                        </div>
                    </div>
                    <div id="tab-31" class="portfolio-tab-content-item js-content-holder">
                        <div class="portfolio-scroll-content">
                            <div class="portfolio-list js-list">
                                <?php
                                $args = array(
                                    'post_type' => 'portfolio',
                                    'post_status' => 'publish',
                                    'posts_per_page' => 56,
                                    'orderby' => 'date',
                                    'order'   => 'ASC',
                                    'tax_query' => array(
                                        'relation' => 'AND',
                                        array(
                                            'taxonomy' => 'portfolio_display',
                                            'field' => 'slug',
                                            'terms' => 'portfolio'
                                        ),
                                        array(
                                            'taxonomy' => 'portfolio_category',
                                            'field' => 'slug',
                                            'terms' => 'voice-over'
                                        )
                                    )
                                );

                                $loop = new WP_Query( $args );
                                $i=1;
                                while ( $loop->have_posts() ) : $loop->the_post();

                                    ?>
                                    <div class="portfolio-item">
                                        <a href="javascript:;" data-src="#popup-portfolio-tab-31-<?php echo $i; ?>" data-fancybox  class="portfolio-holder bg-black">
                                            <div class="image-block">
                                                <img width="auto" height="auto" src="<?php echo get_field("preview_image"); ?>" alt="Portfolio">
                                            </div>
                                        </a>
                                        <div id="popup-portfolio-tab-31-<?php echo $i; ?>" class="popup-content" style="display: none;">
                                            <div class="popup-audio-holder">
                                                <div class='audio-container js-audio-container'>
                                                    <audio src="<?php //echo get_template_directory_uri(); ?><?php echo get_field("audio_url"); ?>" controls class='audio-player js-audio-player'></audio>
                                                    <div class='audio-control'>
                                                        <div class='audio-play js-audio-play'></div>
                                                        <div class='audio-progress js-audio-progress'>
                                                            <span class="slide-progress js-slide-progress" style="width: 0%"></span>
                                                        </div>
                                                        <div class="volume-block">
                                                            <div class='audio-mute js-audio-mute'></div>
                                                            <div class="audio-volume js-audio-volume">
                                                                <span class="audio-volume-range js-audio-volume-range" style="width: 100%"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                    $i++;
                                endwhile;
                                wp_reset_postdata();
                                ?>
                            </div>
                            <div class="text-center btn-block js-btn">
                                <a href="javascript:;" class="btn btn-outline">Load more</a>
                            </div>
                        </div>
                    </div>
                    <div id="tab-32" class="portfolio-tab-content-item js-content-holder">
                        <div class="portfolio-scroll-content">
                            <div class="portfolio-list js-list">
                                <?php
                                $args = array(
                                    'post_type' => 'portfolio',
                                    'post_status' => 'publish',
                                    'posts_per_page' => 256,
                                    'orderby' => 'date',
                                    'order'   => 'ASC',
                                    'tax_query' => array(
                                        'relation' => 'AND',
                                        array(
                                            'taxonomy' => 'portfolio_display',
                                            'field' => 'slug',
                                            'terms' => 'portfolio'
                                        ),
                                        array(
                                            'taxonomy' => 'portfolio_category',
                                            'field' => 'slug',
                                            'terms' => 'motion-graphics'
                                        )
                                    )
                                );

                                $loop = new WP_Query( $args );
                                $i=1;
                                while ( $loop->have_posts() ) : $loop->the_post();
                                    $port_preview_img = get_field("preview_image");
                                    ?>
                                    <div class="portfolio-item">
                                        <a href="javascript:;" data-src="#popup-portfolio-tab-32-<?php echo $i; ?>" data-fancybox  class="portfolio-holder">
                                            <div class="image-block">
                                                <img width="auto" height="auto" src="<?php echo get_field("preview_image"); ?>" alt="Portfolio">
                                            </div>
                                        </a>
                                        <div id="popup-portfolio-tab-32-<?php echo $i; ?>" class="popup-content" style="display: none;">
                                            <div class="preview-image">
                                                <?php echo get_field("video_popup_content"); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                    $i++;
                                endwhile;
                                wp_reset_postdata();
                                ?>
                            </div>
                            <div class="text-center btn-block js-btn">
                                <a href="javascript:;" class="btn btn-outline">Load more</a>
                            </div>
                        </div>
                    </div>
                    <div id="tab-33" class="portfolio-tab-content-item js-content-holder">
                        <div class="portfolio-scroll-content">
                            <div class="portfolio-list js-list">
                                <?php
                                $args = array(
                                    'post_type' => 'portfolio',
                                    'post_status' => 'publish',
                                    'posts_per_page' => 56,
                                    'orderby' => 'date',
                                    'order'   => 'ASC',
                                    'tax_query' => array(
                                        'relation' => 'AND',
                                        array(
                                            'taxonomy' => 'portfolio_display',
                                            'field' => 'slug',
                                            'terms' => 'portfolio'
                                        ),
                                        array(
                                            'taxonomy' => 'portfolio_category',
                                            'field' => 'slug',
                                            'terms' => 'character-animations-storytelling'
                                        )
                                    )
                                );

                                $loop = new WP_Query( $args );
                                $i=1;
                                while ( $loop->have_posts() ) : $loop->the_post();

                                    ?>
                                    <div class="portfolio-item">
                                        <a href="javascript:;" data-src="#popup-portfolio-tab-33-<?php echo $i; ?>" data-fancybox  class="portfolio-holder">
                                            <div class="image-block">
                                                <img width="auto" height="auto" src="<?php echo get_field("preview_image"); ?>" alt="Portfolio">
                                            </div>
                                        </a>
                                        <div id="popup-portfolio-tab-33-<?php echo $i; ?>" class="popup-content" style="display: none;">
                                            <div class="preview-image">
                                                <?php echo get_field("video_popup_content"); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                    $i++;
                                endwhile;
                                wp_reset_postdata();
                                ?>
                            </div>
                            <div class="text-center btn-block js-btn">
                                <a href="javascript:;" class="btn btn-outline">Load more</a>
                            </div>
                        </div>
                    </div>
                    <div id="tab-34" class="portfolio-tab-content-item js-content-holder">
                        <div class="portfolio-scroll-content">
                            <div class="portfolio-list js-list">
                                <?php
                                $args = array(
                                    'post_type' => 'portfolio',
                                    'post_status' => 'publish',
                                    'posts_per_page' => 56,
                                    'orderby' => 'date',
                                    'order'   => 'ASC',
                                    'tax_query' => array(
                                        'relation' => 'AND',
                                        array(
                                            'taxonomy' => 'portfolio_display',
                                            'field' => 'slug',
                                            'terms' => 'portfolio'
                                        ),
                                        array(
                                            'taxonomy' => 'portfolio_category',
                                            'field' => 'slug',
                                            'terms' => 'logo-reveals'
                                        )
                                    )
                                );

                                $loop = new WP_Query( $args );
                                $i=1;
                                while ( $loop->have_posts() ) : $loop->the_post();

                                    ?>
                                    <div class="portfolio-item">
                                        <a href="javascript:;" data-src="#popup-portfolio-tab-34-<?php echo $i; ?>" data-fancybox  class="portfolio-holder">
                                            <div class="image-block">
                                                <img width="auto" height="auto" src="<?php echo get_field("preview_image"); ?>" alt="Portfolio">
                                            </div>
                                        </a>
                                        <div id="popup-portfolio-tab-34-<?php echo $i; ?>" class="popup-content" style="display: none;">
                                            <div class="preview-image">
                                                <?php echo get_field("video_popup_content"); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                    $i++;
                                endwhile;
                                wp_reset_postdata();
                                ?>
                            </div>
                            <div class="text-center btn-block js-btn">
                                <a href="javascript:;" class="btn btn-outline">Load more</a>
                            </div>
                        </div>
                    </div>
                    <div id="tab-35" class="portfolio-tab-content-item js-content-holder">
                        <div class="portfolio-scroll-content">
                            <div class="portfolio-list js-list">
                                <?php
                                $args = array(
                                    'post_type' => 'portfolio',
                                    'post_status' => 'publish',
                                    'posts_per_page' => 56,
                                    'orderby' => 'date',
                                    'order'   => 'ASC',
                                    'tax_query' => array(
                                        'relation' => 'AND',
                                        array(
                                            'taxonomy' => 'portfolio_display',
                                            'field' => 'slug',
                                            'terms' => 'portfolio'
                                        ),
                                        array(
                                            'taxonomy' => 'portfolio_category',
                                            'field' => 'slug',
                                            'terms' => 'products-images-simple-animation'
                                        )
                                    )
                                );

                                $loop = new WP_Query( $args );
                                $i=1;
                                while ( $loop->have_posts() ) : $loop->the_post();

                                    ?>
                                    <div class="portfolio-item">
                                        <a href="javascript:;" data-src="#popup-portfolio-tab-35-<?php echo $i; ?>" data-fancybox  class="portfolio-holder">
                                            <div class="image-block">
                                                <img width="auto" height="auto" src="<?php echo get_field("preview_image"); ?>" alt="Portfolio">
                                            </div>
                                        </a>
                                        <div id="popup-portfolio-tab-35-<?php echo $i; ?>" class="popup-content" style="display: none;">
                                            <div class="preview-image">
                                                <?php echo get_field("video_popup_content"); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                    $i++;
                                endwhile;
                                wp_reset_postdata();
                                ?>
                            </div>
                            <div class="text-center btn-block js-btn">
                                <a href="javascript:;" class="btn btn-outline">Load more</a>
                            </div>
                        </div>
                    </div>
                    <div id="tab-36" class="portfolio-tab-content-item js-content-holder">
                        <div class="portfolio-scroll-content">
                            <div class="portfolio-list js-list">
                                <?php
                                $args = array(
                                    'post_type' => 'portfolio',
                                    'post_status' => 'publish',
                                    'posts_per_page' => 56,
                                    'orderby' => 'date',
                                    'order'   => 'ASC',
                                    'tax_query' => array(
                                        'relation' => 'AND',
                                        array(
                                            'taxonomy' => 'portfolio_display',
                                            'field' => 'slug',
                                            'terms' => 'portfolio'
                                        ),
                                        array(
                                            'taxonomy' => 'portfolio_category',
                                            'field' => 'slug',
                                            'terms' => 'text-and-graphics-animations'
                                        )
                                    )
                                );

                                $loop = new WP_Query( $args );
                                $i=1;
                                while ( $loop->have_posts() ) : $loop->the_post();

                                    ?>
                                    <div class="portfolio-item">
                                        <a href="javascript:;" data-src="#popup-portfolio-tab-36-<?php echo $i; ?>" data-fancybox  class="portfolio-holder">
                                            <div class="image-block">
                                                <img width="auto" height="auto" src="<?php echo get_field("preview_image"); ?>" alt="Portfolio">
                                            </div>
                                        </a>
                                        <div id="popup-portfolio-tab-36-<?php echo $i; ?>" class="popup-content" style="display: none;">
                                            <div class="preview-image">
                                                <?php echo get_field("video_popup_content"); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                    $i++;
                                endwhile;
                                wp_reset_postdata();
                                ?>
                            </div>
                            <div class="text-center btn-block js-btn">
                                <a href="javascript:;" class="btn btn-outline">Load more</a>
                            </div>
                        </div>
                    </div>
                    <div id="tab-37" class="portfolio-tab-content-item js-content-holder">
                        <div class="portfolio-scroll-content">
                            <div class="portfolio-list js-list">
                                <?php
                                $args = array(
                                    'post_type' => 'portfolio',
                                    'post_status' => 'publish',
                                    'posts_per_page' => 56,
                                    'orderby' => 'date',
                                    'order'   => 'ASC',
                                    'tax_query' => array(
                                        'relation' => 'AND',
                                        array(
                                            'taxonomy' => 'portfolio_display',
                                            'field' => 'slug',
                                            'terms' => 'portfolio'
                                        ),
                                        array(
                                            'taxonomy' => 'portfolio_category',
                                            'field' => 'slug',
                                            'terms' => 'web-development'
                                        )
                                    )
                                );

                                $loop = new WP_Query( $args );
                                $i=1;
                                while ( $loop->have_posts() ) : $loop->the_post();

                                    ?>
                                    <div class="portfolio-item">
                                        <a href="javascript:;" data-src="#popup-portfolio-tab-37-<?php echo $i; ?>" data-fancybox  class="portfolio-holder">
                                            <div class="image-block">
                                                <img width="auto" height="auto"  src="<?php echo get_field("preview_image"); ?>" data-src="<?php echo get_field("preview_image"); ?>" class="lazyload" alt="Portfolio">
                                            </div>
                                        </a>
                                        <div id="popup-portfolio-tab-37-<?php echo $i; ?>" class="popup-content" style="display: none;">
                                            <div class="preview-image">
                                                <img loading=lazy src="<?php echo get_field("preview_popup_image"); ?>" data-src="<?php echo get_field("preview_popup_image"); ?>" class="lazyload" alt="Portfolio">
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                    $i++;
                                endwhile;
                                wp_reset_postdata();
                                ?>
                            </div>
                            <div class="text-center btn-block js-btn">
                                <a href="javascript:;" class="btn btn-outline">Load more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="testimonial-slider-section">
            <h2 class="title-global-section">Testimonials</h2>
            <div class="testimonial-slider">
                <?php
                $args = array(
                    'post_type' => 'review',
                    'post_status' => 'publish',
                    'posts_per_page' => 3,
                    'orderby' => 'date',
                    'order'   => 'ASC',
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'reviews_category',
                            'field' => 'slug',
                            'terms' => 'portfolio', // or the category name e.g. Germany
                        ),
                    )
                );
                $loop = new WP_Query( $args );
                $i=1;
                while ( $loop->have_posts() ) : $loop->the_post();
                    ?>
                    <div class="testimonial-slide">
                        <div class="testimonial-slide-holder">
                            <h3 class="title-block">“<?php echo get_field("review_title"); ?>”</h3>
                            <div class="text-block">
                                <?php echo get_field("review_textblock"); ?>
                            </div>
                        </div>
                    </div>
                    <?php
                endwhile;
                wp_reset_postdata();
                ?>
            </div>
        </div>
        <div class="slider-image-section custom-section reviews-slider-section">
            <div class="slide-text-header">
                <h2 class="title-global-section">We make <span class="text-green">your life</span> easier</h2>
            </div>
            <div class="slider-image js-slider">
                <?php
                $custom_terms = get_field("review_category");

                $args = array(
                    'post_type' => 'review',
                    'post_status' => 'publish',
                    'posts_per_page' => -1,
                    'orderby' => 'date',
                    'order' => 'ASC',
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'reviews_category',
                            'field' => 'slug',
                            'terms' => 'portfolio', // or the category name e.g. Germany
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
        <?php
        $portfolios_page_id=FLOCKSY_PORTFOLIO_PAGE_ID;
        ?>
        <div class="accordion-tabs-section">
            <div class="accordion-tabs-text-header">
                <h2 class="title-global-section"><?php echo get_field("pf_accordion_tab_title",$portfolios_page_id); ?></h2>
            </div>
            <div class="accordion-tabs-content">
                <ul class="accordion-tab-tabset">
                    <?php
                    $rows = get_field('pf_accordion_tab_lists',$portfolios_page_id);
                    if( have_rows('pf_accordion_tab_lists',$portfolios_page_id) ) {
                        $i=1;
                        while( have_rows('pf_accordion_tab_lists',$portfolios_page_id) ) {
                            the_row();

                            ?>
                            <li>
                                <a href="javascript:;" data-tab="#accordion-tabs-<?php echo $i; ?>"><?php echo get_sub_field('pf_accordion_tab_opener'); ?></a>
                            </li>
                            <?php
                            $i++;
                        }
                    }
                    ?>
                </ul>
                <div class="accordion-tabs-list js-accordion-tab">
                    <?php
                    if( have_rows('pf_accordion_tab_lists',$portfolios_page_id) ) {
                        $i=1;
                        $flag=0;
                        while( have_rows('pf_accordion_tab_lists',$portfolios_page_id) ) {
                            the_row();
                            ?>
                            <div class="accordion-tabs-item <?php print ($flag ==0) ? "active" : ""; $flag=1;?>" id="accordion-tabs-<?php echo $i; ?>">
                                <a href="#" class="accordion-tabs-opener js-opener"><?php echo get_sub_field('pf_accordion_tab_opener'); ?></a>
                                <div class="accordion-tabs-holder js-slide">
                                    <div class="accordion-tabs-text-holder">
                                        <div class="icon-block">
                                            <img src="<?php echo get_sub_field('pf_accordion_tab_image'); ?>" alt="Same-Day Responses">
                                        </div>
                                        <div class="text-block">
                                            <p><?php echo get_sub_field('pf_accordion_tab_textblock'); ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                            $i++;
                        }
                    }
                    ?>
                </div>
            </div>
            <div class="text-center">
                <a href="<?php echo get_field("pf_accordion_tab_button_link",$portfolios_page_id); ?>" class="btn"><?php echo get_field("pf_accordion_tab_button_text",$portfolios_page_id); ?></a>
            </div>
        </div>
        <div class="custom-anchor-scroll-section js-custom-anchor">
            <div class="get-help-section">
                <div class="text-holder">
                    <h2 class="title-global-section big-title"><?php echo get_field("pf_get_help_title"); ?></h2>
                    <a href="<?php echo get_field("pf_get_help_button_link"); ?>" class="btn"><?php echo get_field("pf_get_help_button_text"); ?></a>
                </div>
                <div class="image-holder">
                    <div class="image-block">
                        <picture>
                            <source srcset="<?php echo get_field("pf_get_help_image"); ?>" media="(min-width: 768px)">
                            <source srcset="<?php echo get_field("pf_get_help_image_mobile"); ?>">
                            <img src="<?php echo get_field("pf_get_help_image"); ?>" alt="img">
                        </picture>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(function() {
            $("ul#accordion li").click(function() {
                if ($(this).hasClass("open")) {
                    $("ul#accordion li").removeClass("open");
                }
                else{
                    $("ul#accordion li").removeClass("open");
                    $(this).addClass("open");
                }
            });
        });
    </script>
    <style>
        .portfolio-list .portfolio-holder {
            background: #ffffff;
            min-height:250px;
        }
        .portfolio-list .submenu button:hover{
            border-radius:0px;
        }
        ul li.open ul.submenu {
            display: block;
            -webkit-transition: all .525s ease;
            -moz-transition: all .525s ease;
            -ms-transition: all .525s ease;
            -o-transition: all .525s ease;
            transition: all .525s ease;
        }
        #accordion > li.firstt button.active {
            border-radius:0px !important;
        }
        .portfolio-list .portfolio-holder.bg-black{
            background:#fff !important;
        }
        .popup-content .caption-block::before {
            width: 0;
            height: 0;
        }

        @media (min-width: 768px){
            .testimonial-slider-nav .testimonial-slide {
                padding: 0 10px;
                width: 380px !important;
                float: left;
            }
            .testimonial-slider {
                max-height: 415px !important;
                overflow: hidden;
            }
            .accordion-tabs-list {
                max-height: 370px !important;
                overflow: hidden;
            }
            .testimonial-slider-section {
                margin-bottom: 202px;
                min-height: 766px;
            }
        }

        @media only screen and (max-width: 768px) {
            .vertical-portfolio ul.portfolio-tabset {
                width: 100% !important;
                display: block;
                padding-left: 0;
                list-style: none;
                padding-right: 0;
            }
            .vertical-portfolio .portfolio-tab-content {
                width: 100%;
                float: unset;
            }
        }
    </style>
<?php get_footer(); ?>