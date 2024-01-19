<?php 

/*
 * Template Name: Unlimited Video Editing Page
 */
get_header(); 
?>
<div class="container">

                    <div class="hero-banner-section custom-section custom-margin-bottom">
                        <div class="text-holder">
                            <h1 class="title-block"><?php echo get_field("uve_hero_section_title"); ?></h1>
                            <div class="text-block">
                                <?php echo get_field("uve_hero_section_textblock"); ?>
                            </div>
                            <a href="<?php echo get_field("uve_hero_section_button_link"); ?>" class="btn"><?php echo get_field("uve_hero_section_button_text"); ?></a>
                        </div>
                        <div class="image-holder">
                            <picture>
                                <source srcset="<?php echo get_field("uve_hero_section_image"); ?>" media="(min-width: 768px)">
                                <source srcset="<?php echo get_field("uve_hero_section_image_mobile"); ?>">
                                <img src="<?php echo get_field("uve_hero_section_image"); ?>" alt="Graphic Design">
                            </picture>
                        </div>
                    </div>

                   <?php
                        $home_page_id = FLOCKSY_HOME_PAGE_ID;
                    ?>
                   <div class="logo-banner-section custom-section">
                        <ul class="logo-list">
                            <?php
                            $rows = get_field('logo_banner_images',$home_page_id);
                            if( $rows ) {
                                foreach( $rows as $row ) {
                            ?>
                                <li class="logo-item">
                                    <a href="#" target="_blank"><img src="<?php echo $row['logo_images']; ?>" alt="logo"></a>
                                </li>
                            <?php
                                }
                            }
                            ?>
                        </ul>
                    </div>


                  <div class="info-member-section">
                        <div class="text-holder">
                            <div class="text-holder-header">
                                <div class="title-global-section"><?php echo get_field("uve_info_member_section_title"); ?></div>
                                <div class="text-block">
                                    <?php echo get_field("uve_info_member_section_texblock"); ?>
                                </div>
                            </div>
                            <div class="image-block">
                                <img src="<?php echo get_field("uve_info_member_section_image"); ?>" alt="Featured Graphic Designers">
                            </div>
                        </div>
                        <div class="slider-holder">
                            <div class="member-work-slider js-info-slider">
                                
                                  <?php

                                       // $rows=get_field("uve_info_member_item");
                                        if( have_rows('uve_info_member_item') ) {
                                            $i=1;
                                            while( have_rows('uve_info_member_item') ) {
                                                the_row();
                                        
                                        	    ?>
                                        	     <div class="member-item">
                                                    <div class="member-holder">
                                                        <div class="member-header">
                                                            <div class="member-image">
                                                                <img src="<?php echo get_sub_field('member_image'); ?>" alt="<?php echo get_sub_field('member_name'); ?>">
                                                            </div>
                                                            <div class="member-text">
                                                                <span class="sub-name-block">Made by:</span>
                                                                <h3 class="name-block"><?php echo get_sub_field('member_name'); ?></h3>
                                                                <h4 class="position-block"><?php echo get_sub_field('member_position'); ?></h4>
                                                            </div>
                                                        </div>
                                                        <div class="member-body">
                                                            <a href="javascript:;" data-src="#popup-video-member-<?php echo $i; ?>" data-fancybox class="member-image-body">
                                                                <img src="<?php echo get_sub_field('member_body_image'); ?>" alt="<?php echo get_sub_field('member_name'); ?>">
                                                                <span class="caption-block">By <strong><?php echo get_sub_field('member_name'); ?></strong></span>
                                                            </a>
                                                            <div id="popup-video-member-<?php echo $i; ?>" class="popup-content" style="display: none; height: 90vh;">
                                                                <div class="preview-image">
                                                                    <?php echo get_sub_field('pop_image_list'); ?>
                                                                </div>
                                                                <span class="caption-block">By <strong><?php echo get_sub_field('member_name'); ?></strong></span>
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
                    </div>


                    <div class="image-banner-section">
                        <div class="image-holder">
                            <picture>
                                <source srcset="<?php echo get_field("uve_image_banner_section"); ?>" media="(min-width: 768px)">
                                <source srcset="<?php echo get_field("uve_image_banner_section_mobile"); ?>">
                                <img src="<?php echo get_field("uve_image_banner_section"); ?>" alt="image banner">
                            </picture>
                        </div>
                    </div>

                    <div class="custom-anchor-scroll-section js-custom-anchor">
                        <div class="custom-anchor-header text-center">
                            <h2 class="title-global-section"><?php echo get_field('service_tab_portfolio_section_title'); ?></h2>
                            <p><?php echo get_field('service_tab_portfolio_section_text'); ?></p>
                        </div>
                        
                        <?php 
                        $portfolio_cats = get_field('service_tab_portfolio_categories');
                        
                        
                        ?>
                        
                        <ul class="anchor-nav">
                            <?php 
                            $k=0;
                            if(is_iterable($portfolio_cats)){
                                
                                foreach($portfolio_cats as $pcat_id){
                                    $pcat = get_term($pcat_id);
                                    $pslug = $pcat->slug;
                                     if($k==0){
                                        $active_class = "active";
                                    }
                                    else{
                                        $active_class = "";
                                    }
                                    $k++;
                                    ?>
                                    <li class="anchor-nav-item"><a class="<?php echo $active_class;?>" href="#<?php echo $pslug;?>"><?php echo $pcat->name;?></a></li>
                                    <?php
                                }
                            }
                            ?>
                        </ul>
                                
                        <?php 
                        $k=0;
                        if(is_iterable($portfolio_cats)){
                        ?>
                            <div class="custom-container-scroll-holder">
                                <div class="scroll-holder-block scroll-pane">
                            <?php
                                foreach($portfolio_cats as $pcat_id){
                                    $pcat = get_term($pcat_id);
                                    $k++;
                                    $j=0;
                                    $args = array(
                                        "post_type" => "portfolio",
                                        "posts_per_page" => 6,
                                        
                                        "tax_query" => array(
                                            'relation' => "AND",
                                            array(
                                                'taxonomy' => 'portfolio_category',
                                                'field' => 'slug',
                                                'terms' => $pcat->slug
                                            ),
                                            array(
                                                'taxonomy' => 'portfolio_display',
                                                'field' => 'slug',
                                                'terms' => "unlimited-video-editing"
                                            )
                
                                        ),
                                    );
                                    $branding_q = new WP_Query($args);
                                    while ( $branding_q->have_posts() ) : $branding_q->the_post();
                                        $post_id = get_the_ID();
                                        $port_title = get_the_title();
                                        $port_type = get_field("preview_type");
                                        $port_terms = get_the_terms( $post_id, 'portfolio_category' );
                                        $port_term = array_pop($port_terms);
                                        $port_preview_img = get_field("preview_image");
                                        $port_preview_video = get_field("video_popup_content");
                                        $port_popup_img = get_field("preview_popup_image");
                                        $port_author = get_field("caption_block_by");
                                        
                                        ?>
                                        <div class="custom-anchor-block-holder js-block-holder <?php if($j==1) echo "active";?>" id="<?php if($j==0) echo "$pcat->slug";?>">
                                            <a href="javascript:;" data-src="#popup-<?php echo $pcat->slug; ?>-<?php echo $j+1;?>" data-fancybox class="custom-anchor-block">
                                                <span class="btn btn-outline-gray no-dot">
                                                    <?php
                                                    echo $port_term->name;
                                                    ?>
                                                </span>
                                                <div class="preview-image">
                                                    <img src="<?php echo $port_preview_img;?>" alt="<?php echo $port_title;?>">
                                                </div>
                                                <span class="caption-block">By <strong><?php echo $port_author;?></strong></span>
                                            </a>
                                            <div id="popup-<?php echo $pcat->slug; ?>-<?php echo $j+1;?>" class="popup-content" style="display: none;">
                                                <div class="preview-image">
                                                    <?php 
                                                        if(!empty($port_preview_video)){
                                                            echo $port_preview_video;
                                                        }
                                                        else {
                                                            if(get_field("more_than_one_image")=='yes')
                                                            {
                                                              //  $rows=get_field("preview_popup_images");
                                                                echo '<a href="#" class="btn no-animate js-btn">Continued…</a>';
                                                                $f=0;
                                                                
                                                                        while( have_rows('preview_popup_images') ) {
                                                                            the_row();
                                                              
                                                                
                                                                    if($f==0)
                                                                    {
                                                                        echo '<img src="'.get_sub_field('ppi_images').'" alt="Copywriting">';     
                                                                        $f=1;
                                                                    }
                                                                    else
                                                                    {
                                                                        echo '<img class="hide" src="'.get_sub_field('ppi_images').'" alt="Copywriting">';            
                                                                    }
                                                                }
                                                                
                                                            }
                                                            else
                                                            {
                                                                echo '<img src="'.get_field("preview_popup_image").'" alt="Copywriting">';
                                                            }
                                                            ?>
                                                            <?php
                                                        }
                                                    ?>
                                                </div>
                                                <span class="caption-block">By <strong><?php echo $port_author;?></strong></span>
                                            </div>
                                        </div>
                                        <?php
                                        $i++;
                                        $j++;
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

                    <div class="banner-free-section">
                        <div class="image-block image-left">
                            <img src="<?php echo get_field("uve_banner_free_left_image"); ?>" alt="images">
                        </div>
                        <div class="image-block image-right">
                            <img src="<?php echo get_field("uve_banner_free_right_image"); ?>" alt="images">
                        </div>
                        <div class="text-holder text-center">
                            <h2 class="title-global-section"><?php echo get_field("uve_banner_free_title"); ?></h2>
                            <br>
                            <br>
                            <ul class="banner-free-list">
                                <?php
                                $bfl = explode("\n", str_replace("\r", "", get_field("uve_banner_free_list")));
                                foreach($bfl as $b)
                                            {
                                                echo "<li>".$b."</li>";
                                            }
                                ?>
                                
                            </ul>
                            <br>
                            <br>
                            <h2 class="title-global-section font-weight-bold"><?php echo get_field("uve_banner_free_footer_title"); ?></h2>
                            <a href="<?php echo get_field("uve_banner_free_button_link"); ?>" class="btn"><?php echo get_field("uve_banner_free_button_text"); ?></a>
                        </div>
                    </div>

                    <div class="banner-statistic-section">
                        <div class="banner-statistic-header text-center">
                            <h2 class="title-global-section"><?php echo get_field("uve_statistics_title"); ?></h2>
                        </div>
                        <div class="column-list">
                            <div class="column-item column-item-big">
                                <div class="statistic-image-block">
                                    <picture>
                                        <source srcset="<?php echo get_field("uve_statistics_image"); ?>" media="(min-width: 768px)">
                                        <source srcset="<?php echo get_field("uve_statistics_mobile_image"); ?>">
                                        <img src="<?php echo get_field("uve_statistics_image"); ?>" alt="Statistics">
                                    </picture>
                                </div>
                            </div>
                            <div class="column-item column-item-small">
                                
                                 
                                <?php

                                     //   $rows=get_field("uve_statistics_item");
                                        if( have_rows('uve_statistics_item') ) {
                                            while( have_rows('uve_statistics_item') ) {
                                                the_row();
                                       
                                        		?>
                                        	
                                                
                                                 <div class="statistic-item bg-gray text-right">
                                                    <h5 class="title-block"><?php echo get_sub_field('title'); ?></h5>
                                                    <div class="number-block">
                                                        <?php echo get_sub_field('number'); ?>
                                                        <span><?php echo get_sub_field('time');?></span>
                                                    </div>
                                                    <div class="text-block">
                                                        <?php echo get_sub_field('textblock');?>
                                                    </div>
                                                </div>
                                        		<?php
                                        	}
                                        }
                                
                                ?>
                                
                            </div>
                        </div>
                    </div>

                     <div class="slider-image-section custom-section reverse-section">
        <div class="slider-image js-slider">
        <?php
            $custom_terms=get_field("review_category");
           
            $args = array(  
                'post_type' => 'review',
                'post_status' => 'publish',
                'posts_per_page' => -1, 
                'orderby' => 'date',
                'order'   => 'ASC',
                'tax_query' => array(             
                 array(
                    'taxonomy' => 'reviews_category',
                    'field' => 'slug',
                    'terms' => 'unlimited-video-editing'
                )
             )
            );
            $loop = new WP_Query( $args ); 
            $i=1;
            while ( $loop->have_posts() ) : $loop->the_post(); 
		?>
									
		       <div class="slide">
                    <div class="text-holder">
                        <div class="slide-text-header">
                            <h2 class="title-global-section">We make <br><span class="text-green">your life</span> easier</h2>
                            <div class="title-small-text">What clients are saying:</div>
                        </div>
                        <div class="slide-text-body">
                            <h3 class="subtitle-block">“<?php echo get_field("review_title"); ?>”</h3>
                            <div class="text-block">
                                <?php echo get_field("review_textblock"); ?>
                            </div>
                            <div class="name-block"><?php echo get_field("client_name"); ?></div>
                            <div class="position-block"><?php echo get_field("client_position"); ?></div>
                        </div>
                    </div>
                    <div class="image-holder">
                        <ul class="image-list js-hover-image">
                            <li class="image-item is-active">
                                <picture>
                                    <source srcset="<?php echo get_field("client_image"); ?>" media="(min-width: 768px)">
                                    <source srcset="<?php echo get_field("client_image_mobile"); ?>">
                                    <img src="<?php echo get_field("client_image"); ?>" width="460" height="610" alt="See What Our Happy Clients Say">
                                </picture>
                            </li>
                            <li class="image-item image-project">
                                <picture>
                                    <source srcset="<?php echo get_field("product_image"); ?>" media="(min-width: 768px)">
                                    <source srcset="<?php echo get_field("product_image_mobile"); ?>">
                                    <img src="<?php echo get_field("product_image"); ?>"  width="460" height="610" alt="See What Our Happy Clients Say">
                                </picture>
                            </li>
                        </ul>
                    </div>
                </div>
            <?php
			endwhile;
            wp_reset_postdata();
            ?>
        </div>
    </div>
    

                     <div class="slider-image-section custom-section-2">
                        <div class="slider-image js-slider">
                            
                            <?php

                             //   $rows=get_field("uve_slider_image_items");
                                if( have_rows('uve_slider_image_items') ) {
                                    while( have_rows('uve_slider_image_items') ) {
                                        the_row();
                                
                                		?>
                                		
                                		<div class="slide">
                                            <div class="text-holder">
                                                <div class="slide-text-header">
                                                    <h2 class="title-global-section"><?php echo get_sub_field('title');?></span></h2>
                                                </div>
                                                <div class="slide-text-body">
                                                    <h3 class="subtitle-block">“<?php echo get_sub_field('sub_title');?>”</h3>
                                                    <div class="text-block">
                                                        <?php echo get_sub_field('textblock');?>
                                                    </div>
                                                    <div class="slider-image-member-header">
                                                        <div class="member-image">
                                                            <img src="<?php echo get_sub_field('member_image');?>" alt="<?php echo get_sub_field('member_name');?>">
                                                        </div>
                                                        <div class="member-text">
                                                            <h3 class="name-block"><?php echo get_sub_field('member_name');?></h3>
                                                            <h4 class="position-block"><?php echo get_sub_field('member_position');?></h4>
                                                        </div>
                                                    </div>
                                                    <ul class="slider-image-member-info">
                                                        <?php
                                                         $bfl = explode("\n", str_replace("\r", "", get_sub_field('member_info')));
                                                            foreach($bfl as $b)
                                                            {
                                                                echo "<li>".$b."</li>";
                                                            }
                                                            ?>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="image-holder">
                                                <a href="javascript:;" data-src="#popup-video-slider" data-fancybox class="image-block">
                                                    <picture>
                                                        <source srcset="<?php echo get_sub_field('slider_image');?>" media="(min-width: 768px)">
                                                        <source srcset="<?php echo get_sub_field('slider_image_mobile');?>">
                                                        <img src="<?php echo get_sub_field('slider_image');?>" alt="See What Our Happy Clients Say">
                                                    </picture>
                                                </a>
                                                <div id="popup-video-slider" class="popup-content" style="display: none;">
                                                    <div class="preview-image">
                                                        <?php echo get_sub_field('popup_image'); ?>
                                                       
                                                       
                                                    </div>
                                                    <span class="caption-block">By <strong><?php echo get_sub_field('member_name'); ?></strong></span>
                                                </div>
                                            </div>
                                        </div>
                            
                                		<?php
                                	}
                                }
                                
                                ?>
                           
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                        </div>
                    </div>
                    
                    

                    <div class="accordion-tabs-section">
        <div class="accordion-tabs-text-header">
            <h2 class="title-global-section"><?php echo get_field("accordion_tab_title",$home_page_id); ?></h2>
        </div>
        <div class="accordion-tabs-content">
            <ul class="accordion-tab-tabset">
            <?php
            //   $rows = get_field('accordion_tab_lists',$home_page_id);
               // field_61601063bd424
                if( have_rows('accordion_tab_lists',$home_page_id) ) {
                    $i=1;
                while( have_rows('accordion_tab_lists',$home_page_id) ) {
                    the_row();
               
            ?>
                        <li>
                            <a href="javascript:;" data-tab="#accordion-tabs-<?php echo $i; ?>"><?php echo get_sub_field('accordion_tab_opener'); ?></a>
                        </li>
            <?php
                        $i++;
                    }
                }
            ?>
                                
                                
            </ul>
            <div class="accordion-tabs-list js-accordion-tab">
                <?php
                if( have_rows('accordion_tab_lists',$home_page_id) ) {
                    $i=1;
                    $flag=0;
                   while( have_rows('accordion_tab_lists',$home_page_id) ) {
                       the_row();
                ?>
                        <div class="accordion-tabs-item <?php print ($flag ==0) ? "active" : ""; $flag=1;?>" id="accordion-tabs-<?php echo $i; ?>">
                            <a href="#" class="accordion-tabs-opener js-opener"><?php echo get_sub_field('accordion_tab_opener'); ?></a>
                            <div class="accordion-tabs-holder js-slide">
                                <div class="accordion-tabs-text-holder">
                                    <div class="icon-block">
                                        <img src="<?php echo get_sub_field('accordion_tab_image'); ?>" alt="Same-Day Responses">
                                    </div>
                                    <div class="text-block">
                                        <p><?php echo get_sub_field('accordion_tab_textblock'); ?></p>
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
            <a href="<?php echo get_field("accordion_tab_button_link",$home_page_id); ?>" class="btn"><?php echo get_field("accordion_tab_button_text",$home_page_id); ?></a>
        </div>
    </div>

                </div>
<?php get_footer(); ?>