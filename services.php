<?php 

/*
 * Template Name: Services Page
 */
get_header(); 
?>
<div class="container">

    <div class="service-banner-section">
        <div class="text-holder">
            <h1 class="title-global-section big-title"><?php echo get_field( "sv_service_bannerglobal_title" ); ?></h1>
            <div class="text-block">
                <p><?php echo get_field( "sv_service_bannerglobal_textblock" ); ?></p>
            </div>
            <a href="<?php echo get_field( "sv_service_banner_button_link" ); ?>" class="btn no-animate"><?php echo get_field( "sv_service_banner_button_text" ); ?></a>
        </div>
        <div class="service-list">
            
            <?php
               // $rows = get_field('sv_service_banner_service_items');
                if( have_rows('sv_service_banner_service_items') ) {
                    while( have_rows('sv_service_banner_service_items') ) {
                        the_row();
                        ?>
                        <div class="service-item">
                            <div class="number-block"><?php echo get_sub_field('sbsi_number_block'); ?> <span class="tooltip" title="<?php echo get_sub_field('sbsi_tooltip'); ?>"></span></div>
                            <div class="subtitle-block"><?php echo get_sub_field('sbsi_sub_title_block'); ?></div>
                            <div class="title-block"><?php echo get_sub_field('sbsi_title_block'); ?></div>
                        </div>
                        <?php
                    }
                }
            ?>
            
            
            
        </div>
        <div class="image-holder">
            <div class="image-block">
                <picture>
                    <source srcset="<?php echo get_field( "sv_service_banner_image" ); ?>" media="(min-width: 768px)">
                    <source srcset="<?php echo get_field( "sv_service_banner_image_mobile" ); ?>">
                    <img src="<?php echo get_field( "sv_service_banner_image" ); ?>" alt="img">
                </picture>
            </div>
        </div>
    </div>

        <div class="service-tabs-section">
            <ul class="tabs">
                  <?php
                    $i=1;
                   // $rows = get_field('sv_service_tab_items');
                    if( have_rows('sv_service_tab_items') ) {
                        while( have_rows('sv_service_tab_items') ) {
                            the_row();
                            ?>
                            <li>
                                <button data-tab="#service-tab-<?php echo $i;?>"><?php echo get_sub_field('sti_service_tab_name'); ?></button>
                            </li>
                            <?php
                            $i++;
                        }
                    }
                ?>
               
                
            </ul>
            <div class="tab-content">
                <?php
                $i=1;
                 if( have_rows('sv_service_tab_items') ) {
                        while( have_rows('sv_service_tab_items') ) {
                            the_row();
                            ?>
                           <div id="service-tab-<?php echo $i;?>">
                    <div class="service-tab-header text-center">
                        <h2 class="title-global-section"><?php echo get_sub_field('sti_service_tab_title'); ?></h2>
                        <div class="text-block"><?php echo get_sub_field('sti_service_tab_textblock'); ?></div>
                    </div>

                    <div class="service-column-block text-center">
                        <h3 class="title-block"><?php echo get_sub_field('sti_service_column_title'); ?></h3>
                        <div class="text-block"><?php echo get_sub_field('sti_service_column_textblock'); ?></div>
                        <div class="column-block">
                            <?php
                         //   $rows1=$row['sti_service_column_item'];
                           if( have_rows('sti_service_column_item') ) {
                                while( have_rows('sti_service_column_item') ) {
                                    the_row();
                           
                                ?>
                                <div class="column-item">
                                    <div class="image">
                                        <img  width="auto" height="auto" src="<?php echo get_sub_field('sci_column_image'); ?>" alt="image">
                                    </div>
                                    <h4 class="title"><?php echo get_sub_field('sci_column_title'); ?> </h4>
                                    <div class="text"><?php echo get_sub_field('sci_column_textblock'); ?></div>
                                </div>
                                <?php
                                
                            }
                                
                            }
                            ?>
                            
                           
                        </div>
                    </div>
                    <?php 
                    // Code need to changed start
                    ?>
                    <div class="custom-anchor-scroll-section js-custom-anchor">
                        <div class="custom-anchor-header text-center">
                            <h2 class="title-global-section"><?php echo get_sub_field('service_tab_portfolio_section_title'); ?></h2>
                            <p><?php echo get_sub_field('service_tab_portfolio_section_text'); ?></p>
                        </div>
                        
                        <?php 
                            $portfolio_cats = get_sub_field('service_tab_portfolio_categories');
                        ?>

                        <div class="anchor-nav-section">
                            <ul class="anchor-nav">
                                <?php
                                $k=0;
                                if(is_iterable($portfolio_cats)){

                                    foreach($portfolio_cats as $pcat_id){
                                        $pcat = get_term($pcat_id);
                                        $k++;
                                        $active_class = "";
                                        if($k==1){
                                            $active_class = "active";
                                        }
                                        ?>
                                        <li class="anchor-nav-item"><a class="<?php echo $active_class;?>" href="#holder-<?php echo $i;?>-<?php echo $k;?>"><?php echo $pcat->name;?></a></li>
                                        <?php
                                    }
                                }
                                ?>
                            </ul>
                        </div>
                                
                        <?php 
                        if(is_iterable($portfolio_cats)){
                        ?>
                            <div class="custom-container-scroll-holder">
                                <div class="scroll-holder-block scroll-pane">
                            <?php
                                $cats = 1;
                                foreach($portfolio_cats as $pcat_id){
                                    
                                    $pcat = get_term($pcat_id);
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
                                                'terms' => "services"
                                            )
                
                                        ),
                                    );
                                    $branding_q = new WP_Query($args);
                                    
                                    $posts = 1;
                                    
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
                                        $block_active = "";
                                        if($posts==2){
                                            $block_active = "active";
                                        }
                                        ?>
                                        <div class="custom-anchor-block-holder js-block-holder <?php echo $block_active; ?>" id="<?php if($posts==1) echo "holder-".$i."-". $cats;?>">
                                            <a href="javascript:;" data-src="#popup-<?php echo $pcat->slug; ?>-<?php echo $posts;?>" data-fancybox class="custom-anchor-block">
                                                <!-- <span class="btn btn-outline-gray no-dot">
                                                    <?php
                                                    echo $port_term->name;
                                                    ?>
                                                </span> -->
                                                <div class="preview-image <?php if($pcat->slug == "logo" || $pcat->slug=="hand-drawn-characters") echo "bg-white"; ?>">
                                                    <img src="<?php echo $port_preview_img;?>" alt="<?php echo $port_title;?>">
                                                </div>
                                                <?php
												
                                                if(empty( get_field("audio_url"))){
                                                            
                                                        ?>
                                                <!--<span class="caption-block">By <strong><?php echo $port_author;?></strong></span>-->
                                                <?php 
                                                    
                                                }
                                                ?>
                                            </a>
                                            <div id="popup-<?php echo $pcat->slug; ?>-<?php echo $posts;?>" class="popup-content <?php if($i==2){echo "popup-copywriting";}?>" style="display: none;">
                                                <?php 
                                                        if(!empty( get_field("audio_url"))){
                                                            
                                                            ?>
                                                            <div class="popup-audio-holder">
                                                                <div class='audio-container js-audio-container'>
                                                                    <audio src="<?php echo get_stylesheet_directory_uri(); ?><?php echo get_field("audio_url"); ?>" controls class='audio-player js-audio-player'></audio>
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
                                                            <?php
                                                            
                                                        }
                                                        else {
															if($i != 2){
																$preview_class = "preview-image";
															}
															else {
																$preview_class = "preview-copywriting";
															}
                                                            ?>
                                                            
                                                             <div class="<?php echo $preview_class; ?> js-copywriting-images">
                                                            <?php 
                                                                if(!empty($port_preview_video)){
                                                                    echo $port_preview_video;
                                                                }
                                                                else {
                                                                    if(get_field("more_than_one_image")=='yes')
                                                                    {
                                                                      //  $rows=get_field("preview_popup_images");
                                                                        $f=0;
                                                                         while( have_rows('preview_popup_images') ) {
                                                                                the_row();
                                                                            if($f==0)
                                                                            {
                                                                                echo '<img src="'.get_sub_field('ppi_images').'" alt="Copywriting">';     
                                                                                $f=1;
																				echo '<a href="#" class="btn no-animate js-btn">Continued…</a>';
                                                                     
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
                                                                }
                                                            ?>
                                                        </div>
                                                            <?php
                                                        }
                                                        if(empty( get_field("audio_url"))){
                                                            
                                                        ?>
                                                        <span class="caption-block">By <strong><?php echo $port_author;?></strong></span>
                                                <?php
                                                    }
                                                ?>
                                            </div>
                                        </div>
                                        <?php
                                        $posts++;
                                    endwhile;
                                wp_reset_postdata();
                                $cats++;
                                }
                                ?>
                                
                                </div>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                    <?php 
                    // Code need to changed end
                    ?>    
                    <div class="banner-free-section">
                        <div class="image-block image-left">
                            <img src="<?php echo get_sub_field('sti_service_banner_left_image'); ?>" alt="images">
                        </div>
                        <div class="image-block image-right">
                            <img src="<?php echo get_sub_field('sti_service_banner_right_image'); ?>" alt="images">
                        </div>
                        <div class="text-holder text-center">
                            <h2 class="title-global-section"><?php echo get_sub_field('sti_service_banner_title'); ?></h2>
                            <ul class="banner-free-list">
                                <?php 
                                $bfl = explode("\n", str_replace("\r", "", get_sub_field('sti_service_banner_list')));
                                foreach($bfl as $b)
                                {
                                    echo "<li>".$b."</li>";
                                }
                                
                                ?>
                            </ul>
                            <h2 class="title-global-section font-weight-bold"><?php echo get_sub_field('sti_service_banner_footer_title'); ?></h2>
                            <a href="<?php echo get_sub_field('sti_service_banner_button_link'); ?>" class="btn"><?php echo get_sub_field('sti_service_banner_button_text'); ?></a>
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

        <div class="slider-image-section custom-section reverse-section">
            <div class="slider-image js-slider">
                 <?php
                    $custom_terms=get_field("sv_review_category");
                   
                    $args = array(  
                        'post_type' => 'review',
                        'post_status' => 'publish',
                        'posts_per_page' => -1, 
                        'orderby' => 'date',
                        'tax_query' => array(             
                         array(
                            'taxonomy' => 'reviews_category',
                            'field' => 'id',
                            'terms' => $custom_terms, // or the category name e.g. Germany
                        ),
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
                            <h3 class="subtitle-block"><?php echo get_field("review_title"); ?></h3>
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
                                    <img src="<?php echo get_field("client_image"); ?>"   width="460" height="610" alt="See What Our Happy Clients Say">
                                </picture>
                            </li>
                            <li class="image-item image-project">
                                <picture>
                                    <source srcset="<?php echo get_field("product_image"); ?>" media="(min-width: 768px)">
                                    <source srcset="<?php echo get_field("product_image_mobile"); ?>">
                                    <img src="<?php echo get_field("product_image"); ?>"   width="460" height="610" alt="See What Our Happy Clients Say">
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
        <?php
        $find_page = get_page_by_path('home', OBJECT, 'page');
        	$home_page_id=$find_page->ID;
        ?>
        <!--<div class="banner-gray-section">
        <div class="text-holder">
            <h2 class="title-block"><?php echo get_field("banner_grey_title",$home_page_id); ?></h2>
            <div class="btn-group">
                <a href="<?php echo get_field("banner_button1_link",$home_page_id); ?>" class="btn btn-outline"><?php echo get_field("banner_button1_text",$home_page_id); ?></a>
                <a href="<?php echo get_field("banner_button2_link",$home_page_id); ?>" class="btn"><?php echo get_field("banner_button2_text",$home_page_id); ?></a>
            </div>
        </div>
        <div class="image-holder">
            <div class="lottie-custom" data-animation-path="<?php echo get_field("banner_grey_image_json",$home_page_id); ?>"></div>
            </div>
        </div>-->

    </div>
<?php get_footer(); ?>