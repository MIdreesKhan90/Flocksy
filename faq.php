<?php 

/*
 * Template Name: FAQ
 
 
 */

get_header(); ?>
<div class="container">

    <div class="hero-banner-section custom-section custom-margin-bottom">
        <div class="text-holder">
            <h1 class="title-block"><strong><?php echo get_field( "faq_hero_section_title" ); ?></strong></h1>
            <div class="text-block">
                <?php echo get_field("faq_hero_section_textblock"); ?>
            </div>
            <a href="<?php echo get_field("faq_hero_section_button_link"); ?>" class="btn"><?php echo get_field("faq_hero_section_button_text"); ?></a>
        </div>
        <div class="image-holder custom-margin-top">
            <picture>
                <source srcset="<?php echo get_field("faq_hero_section_image"); ?>" media="(min-width: 768px)">
                <source srcset="<?php echo get_field("faq_hero_section_image_mobile"); ?>">
                <img src="<?php echo get_field("faq_hero_section_image"); ?>" alt="<?php echo get_field( "faq_hero_section_title" ); ?>">
            </picture>
        </div>
    </div>

     <?php

    	//$find_page = get_page_by_path('home', OBJECT, 'page');
    	//$home_page_id=$find_page->ID;
        $home_page_id = FLOCKSY_HOME_PAGE_ID;
    ?>
</div>

<?php get_template_part('template-parts/section', 'logo-banner') ?>

<div class="container">
    <div class="accordion-tabs-section">
        <div class="accordion-tabs-text-header">

            <h2 class="title-global-section"><?php echo get_field( "faq_accordion_global_title", $post_id ); ?></h2>
            <div class="text-holder-section"></div>
        </div>
        <div class="accordion-tabs-content">
            <ul class="accordion-tab-tabset">

                <?php
                if(have_rows("faq_accordion_tab_list") ):
                    $i=1;
                    while ( have_rows('faq_accordion_tab_list') ) : the_row();

                        $faq_atl_title = get_sub_field("faq_atl_title");
                        ?>
                        <li>
                            <a href="javascript:;" data-tab="#accordion-tabs-<?php echo $i; $i++;?>"><?php echo $faq_atl_title; ?></a>
                        </li>


                        <?php
                    endwhile;
                endif;
                ?>

            </ul>
            <div class="accordion-tabs-list js-accordion-tab">


                <?php

                if(have_rows("faq_accordion_tab_list") ):
                    $i=1;
                    while ( have_rows('faq_accordion_tab_list') ) : the_row();
                        $faq_atl_image = get_sub_field("faq_atl_image");
                        $faq_atl_image_mobile = get_sub_field("faq_atl_image_mobile");
                        $faq_atl_title = get_sub_field("faq_atl_title");
                        ?>
                        <div class="accordion-tabs-item <?php echo ($i == 1) ? 'active' : '' ?>" id="accordion-tabs-<?php echo $i; $i++;?>">
                            <a href="#" class="accordion-tabs-opener js-opener"><?php echo $faq_atl_title; ?></a>
                            <div class="accordion-tabs-holder js-slide">
                                <div class="accordion-tabs-text-holder">
                                    <div class="image-block">
                                        <picture>
                                            <source srcset="<?php echo $faq_atl_image; ?>" media="(min-width: 768px)">
                                            <source srcset="<?php echo $faq_atl_image_mobile; ?>">
                                            <img src="<?php echo $faq_atl_image_mobile; ?>" alt="<?php echo $faq_atl_title; ?>">
                                        </picture>
                                    </div>

                                    <?php

                                    if(have_rows("faq_atl_faq") ):
                                        ?>
                                        <ul class="accordion-block js-accordion-second">
                                            <?php
                                            $c=0;
                                            // $fc == 5;
                                            while( have_rows('faq_atl_faq') ): the_row();
                                                $aq_atl_question = get_sub_field("faq_atl_question");
                                                $faq_atl_answer = get_sub_field("faq_atl_answer");
                                                ?>

                                                <li <?php echo $c == 0 ? 'class = "active"': ''; $c++?>>
                                                    <a class="js-opener" href="#"><?php echo $aq_atl_question; ?></a>
                                                    <div class="js-slide">
                                                        <?php echo $faq_atl_answer; ?>
                                                    </div>
                                                </li>

                                                <?php
                                            endwhile;
                                            ?>
                                        </ul>
                                        <?php
                                    endif;
                                    ?>
                                </div>
                            </div>
                        </div>


                        <?php
                    endwhile;
                endif;
                ?>
            </div>
        </div>
        <div class="text-center">
            <a href="<?php echo get_field( "faq_accordion_button_link" ); ?>" class="btn"><?php echo get_field( "faq_accordion_button_text" ); ?></a>
        </div>
    </div>
</div>

<?php get_footer(); ?>