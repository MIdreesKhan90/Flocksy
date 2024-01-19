<?php 

/*
 * Template Name: About Us Page
 */

get_header(); 

?>
    <div class="container">
        <div class="hero-banner-column-section">
            <div class="text-holder">
                <h1 class="title-global-section big-title"><?php echo get_field("au_hero_section_title"); ?></h1>
                <div class="text-block">
                    <?php echo get_field("au_hero_section_textblock"); ?>
                </div>
            </div>
            <div class="image-holder">
                <div class="image-block">
                    <picture>
                        <source srcset="<?php echo get_field("au_hero_section_image"); ?>" media="(min-width: 768px)">
                        <source srcset="<?php echo get_field("au_hero_section_image_mobile"); ?>">
                        <img src="<?php echo get_field("au_hero_section_image"); ?>" alt="Our Company Culture">
                    </picture>
                </div>
            </div>
        </div>

        <div class="column-text-section custom-margin-bottom">
            <div class="column-text-holder">
                <div class="text-holder">
                    <h2 class="title-global-section"><?php echo get_field("au_our_mission_section_title"); ?></h2>
                </div>
                <div class="text-holder">
                    <?php echo get_field("au_our_mission_section_textblock"); ?>
                </div>
            </div>
        </div>
        
        <div class="column-text-image-section image-left custom-margin-bottom-1">
            <div class="text-holder">
                <h2 class="title-global-section"><?php echo get_field("au_all_in_one_solution_section_title"); ?></h2>
                <div class="text-block">
                   <?php echo get_field("au_all_in_one_solution_section_textblock"); ?>
                </div>
            </div>
            <div class="image-holder">
                <picture>
                    <source srcset="<?php echo get_field("au_all_in_one_solution_section_image"); ?>" media="(min-width: 768px)">
                    <source srcset="<?php echo get_field("au_all_in_one_solution_section_image_mobile"); ?>">
                    <img src="<?php echo get_field("au_all_in_one_solution_section_image"); ?>" alt="The All-In-One Solution for Your Business: Multiple Creative Services">
                </picture>
            </div>
        </div>
                    
        <div class="column-text-image-section">
            <div class="text-holder">
                <h2 class="title-global-section"><?php echo get_field("au_flexible_custom_title"); ?></h2>
                <div class="text-block">
                    <?php echo get_field("au_flexible_custom_textblock"); ?>
                </div>
            </div>
            <div class="image-holder">
                <picture>
                    <source srcset="<?php echo get_field("au_flexible_custom_image"); ?>" media="(min-width: 768px)">
                    <source srcset="<?php echo get_field("au_flexible_custom_image_mobile"); ?>">
                    <img src="<?php echo get_field("au_flexible_custom_image"); ?>" alt="Flexible Custom Teams">
                </picture>
            </div>
        </div>

        <div class="column-text-image-section image-left custom-margin-bottom-2">
            <div class="text-holder">
                <h2 class="title-global-section"><?php echo get_field("au_easy_brand_section_title"); ?></h2>
                <div class="text-block">
                   <?php echo get_field("au_easy_brand_section_textblock"); ?>
                </div>
            </div>
            <div class="image-holder">
                <picture>
                    <source srcset="<?php echo get_field("au_easy_brand_section_image"); ?>" media="(min-width: 768px)">
                    <source srcset="<?php echo get_field("au_easy_brand_section_image_mobile"); ?>">
                    <img src="<?php echo get_field("au_easy_brand_section_image"); ?>" alt="Easy Brand Development">
                </picture>
            </div>
        </div>

        <div class="leader-section">
            <h2 class="title-global-section"><?php echo get_field("au_meet_our_team_title"); ?></h2>
            
            <div class="leader-list">
                 
                 <?php
                 
                 if( have_rows('au_leader_list') ): ?>
                    <?php while( have_rows('au_leader_list') ): the_row(); 
                
                        // Get all values for this row.
                        $row = get_row();
                        ?>
                        <div class="leader-item align-item">
                                <div class="image-holder">
                                    <img src="<?php echo the_sub_field("leader_image"); ?>" alt="<?php echo the_sub_field("leader_name"); ?>">
                                </div>
                                <div class="text-holder">
                                    <div class="name-block"><?php echo the_sub_field("leader_name");?></div>
                                    <div class="position-block"><?php echo the_sub_field("leader_position"); ?></div>
                                    <div class="text-block">
                                        <?php the_sub_field("leader_textblock");?>
                                    </div>
                                </div>
                            </div>
                    <?php
                        
                     endwhile;
                endif;
                         
                 
                 ?>
            </div>
        </div>

        <div class="journey-section">
            <h2 class="title-global-section"><?php echo get_field("au_journey_section_title"); ?></h2>
            <div class="journey-scroll-holder scroll-pane">
                
                <?php
                 
                 if( have_rows('au_journey_items') ): ?>
                    <?php while( have_rows('au_journey_items') ): the_row(); 
                
                        // Get all values for this row.
                        $row = get_row();
                        ?>
                        <div class="journey-item">
                                <div class="journey-holder">
                                    <div class="image-block">
                                        <img src="<?php echo the_sub_field("image"); ?>" alt="2016">
                                    </div>
                                    <div class="year-block"><?php echo the_sub_field('year'); ?></div>
                                    <div class="text-block">
                                        <?php echo the_sub_field('textblock'); ?>
                                    </div>
                                </div>
                            </div>
                        
                    <?php
                        
                     endwhile;
                endif;
                ?>
            </div>
        </div>

        <div class="column-text-image-section mob-hide custom-margin-bottom-3">
            <div class="text-holder">
                <h2 class="title-global-section"><?php echo get_field("au_company_culture_title"); ?></h2>
                <div class="text-block">
                    <?php echo get_field("au_company_culture_textblock"); ?>
                </div>
            </div>
            <div class="image-holder">
                <picture>
                    <source srcset="<?php echo get_field("au_company_culture_image"); ?>" media="(min-width: 768px)">
                    <source srcset="<?php echo get_field("au_company_culture_image_mobile"); ?>">
                    <img src="<?php echo get_field("au_company_culture_image"); ?>" alt="<?php echo get_field("au_company_culture_title"); ?>">
                </picture>
            </div>
        </div>

        <div class="team-slider-section">
            <h2 class="title-global-section"><?php echo get_field("au_featured_team_section_global_title"); ?></h2>
            <div class="team-slider-block">
                <h3 class="title-block"><?php echo get_field("au_featured_team_section_title"); ?></h3>
                <div class="team-slider">  
                
                <?php
                 
                 if( have_rows('au_featured_team_section_list') ): ?>
                    <?php while( have_rows('au_featured_team_section_list') ): the_row(); 
                
                        // Get all values for this row.
                        $row = get_row();
                        ?>
                        <div class="team-slide-item">
                                <div class="image-holder">
                                    <img src="<?php echo the_sub_field("image"); ?>" alt="<?php echo the_sub_field("name"); ?>">
                                </div>
                                <div class="name-block"><?php echo the_sub_field("name"); ?></div>
                                <div class="position-block"><?php echo the_sub_field("position"); ?></div>
                            </div>
                    <?php
                        
                     endwhile;
                endif;
                
                 ?>     
                </div>
            </div>
        </div>

        <div class="team-slider-section custom-team-slider-section">
            <h2 class="title-global-section"><?php echo get_field("au_feature_team_leader_global_title"); ?></h2>
            <div class="team-slider-block">
                <h3 class="title-block"><?php echo get_field("au_feature_team_designer_title"); ?></h3>
                <div class="team-slider">
                    <?php
                         if( have_rows('au_designer_list') ): ?>
                            <?php while( have_rows('au_designer_list') ): the_row(); 
                        
                                // Get all values for this row.
                                $row = get_row();
                                ?>
                                <div class="team-slide-item">
                                        <div class="image-holder">
                                            <img src="<?php echo the_sub_field("image"); ?>" alt="<?php echo the_sub_field("name"); ?>">
                                        </div>
                                        <div class="name-block"><?php echo the_sub_field("name"); ?></div>
                                    </div>
                            <?php
                                
                             endwhile;
                        endif;
                     ?>
                </div>
            </div>
            <div class="team-slider-block">
                <h3 class="title-block"><?php echo get_field("au_featured_illustrators_title"); ?></h3>
                <div class="team-slider">
                    <?php
                    if( have_rows('au_illustrators_list') ): ?>
                            <?php while( have_rows('au_illustrators_list') ): the_row();
                        
                                // Get all values for this row.
                                $row = get_row();
                                ?>
                                <div class="team-slide-item">
                                        <div class="image-holder">
                                            <img src="<?php echo the_sub_field("image"); ?>" alt="<?php echo the_sub_field("name"); ?>">
                                        </div>
                                        <div class="name-block"><?php echo the_sub_field("name"); ?></div>
                                    </div>
                            <?php
                                
                             endwhile;
                        endif;
                         
                     ?>
                </div>
            </div>
            <div class="team-slider-block">
                <h3 class="title-block"><?php echo get_field("au_featured_copywriters_title"); ?></h3>
                <div class="team-slider">
                    <?php
                    if( have_rows('au_copywriters_list') ): ?>
                            <?php while( have_rows('au_copywriters_list') ): the_row();
                        
                                // Get all values for this row.
                                $row = get_row();
                                ?>
                                <div class="team-slide-item">
                                        <div class="image-holder">
                                            <img src="<?php echo the_sub_field("image"); ?>" alt="<?php echo the_sub_field("name"); ?>">
                                        </div>
                                        <div class="name-block"><?php echo the_sub_field("name"); ?></div>
                                    </div>
                            <?php
                                
                             endwhile;
                        endif;
                     ?>
                </div>
            </div>
            <div class="team-slider-block">
                <h3 class="title-block"><?php echo get_field("au_featured_web_developers_title"); ?></h3>
                <div class="team-slider">
                    <?php
                    if( have_rows('au_web_developers_list') ): ?>
                            <?php while( have_rows('au_web_developers_list') ): the_row();
                        
                                // Get all values for this row.
                                $row = get_row();
                                ?>
                                <div class="team-slide-item">
                                        <div class="image-holder">
                                            <img src="<?php echo the_sub_field("image"); ?>" alt="<?php echo the_sub_field("name"); ?>">
                                        </div>
                                        <div class="name-block"><?php echo the_sub_field("name"); ?></div>
                                    </div>
                            <?php
                                
                             endwhile;
                        endif;
                     ?>
                </div>
            </div>
            <div class="team-slider-block">
                <h3 class="title-block"><?php echo get_field("au_featured_video_editors_title"); ?></h3>
                <div class="team-slider">
                    <?php
                    if( have_rows('au_video_editors_list') ): ?>
                        <?php while( have_rows('au_video_editors_list') ): the_row();

                            // Get all values for this row.
                            $row = get_row();
                            ?>
                            <div class="team-slide-item">
                                <div class="image-holder">
                                    <img src="<?php echo the_sub_field("image"); ?>" alt="<?php echo the_sub_field("name"); ?>">
                                </div>
                                <div class="name-block"><?php echo the_sub_field("name"); ?></div>
                            </div>
                            <?php

                        endwhile;
                    endif;
                    ?>
                </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>