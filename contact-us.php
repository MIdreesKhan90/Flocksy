<?php 

/*
 * Template Name: Contact Us
 
 
 */

get_header(); ?>
<div class="container">

                    <div class="hero-banner-section custom-section custom-margin-bottom">
                        <div class="text-holder">
                            <h1 class="title-block"><?php echo get_field( "cs_hero_section_title" ); ?></h1>
                            <div class="text-block">
                                <?php echo get_field( "cs_hero_section_textblock" ); ?>
                            </div>
                            <a href="<?php echo get_field( "cs_hero_section_button_link" ); ?>" class="btn"><?php echo get_field( "cs_hero_section_button_text" ); ?></a>
                        </div>
                        <div class="image-holder">
                            <picture>
                                <source srcset="<?php echo get_field( "cs_hero_section_image" ); ?>" media="(min-width: 768px)">
                                <source srcset="<?php echo get_field( "cs_hero_section_image_mobile" ); ?>">
                                <img src="<?php echo get_field( "cs_hero_section_image" ); ?>" alt="<?php echo wp_strip_all_tags(get_field( "cs_hero_section_title" )); ?>">
                            </picture>
                        </div>
                    </div>
                     <?php
                  
                    
                   
                    	/*$find_page = get_page_by_path('dev-home', OBJECT, 'page');
                    	$home_page_id=$find_page->ID;*/
                        $home_page_id = FLOCKSY_HOME_PAGE_ID;
                    
                    ?>
                </div>

<div class="container">
    <div class="logo-banner-section custom-section">
        <ul class="logo-list">
            <?php
            $rows = get_field('logo_banner_images',$home_page_id);
            $i=0;
            if( $rows )
            {
                foreach( $rows as $row )
                {
                    foreach( $row as $row1 ) {

                        ?>
                        <li class="logo-item">
                            <a href="#" target="_blank"><img src="<?php echo $row1; ?>" alt="logo"></a>
                        </li>
                        <?php
                    }
                    $i++;
                }
            }
            ?>


        </ul>
    </div>
</div>

    <div class="container">
        <div class="contact-section">
            <div class="text-holder">
                <h2 class="title-global-section"><?php echo get_field( "cs_contact_section_global_title" ); ?></h2>
                <div class="text-block"></div>
            </div>
            <div class="contact-holder">
                <div class="contact-text-block">
                    <div class="contact-text-holder bg-green">
                        <div class="image-block">
                            <img src="<?php echo get_field( "contact_section_image" ); ?>" alt="Keep in Touch">
                        </div>
                        <div class="contact-text">
                            <?php echo get_field( "cs_contact_textblock" ); ?>
                        </div>
                    </div>
                </div>
                <div class="contact-form-block">
                    <div class="contact-form-holder">
                        <?php echo get_field( "cs_contact-form" ); ?>
                        <div class="contact-form-message bg-green" style="display: none">
                            <p>Your message was successfully sent!</p>
                        </div>
                        <!-- <form class="form form-send">
                            <input type="hidden" name="action" value="Contact Us">
                            <input type="hidden" name="form_id" value="contact-us">
                            <p>Response time is usually within an hour during business hours</p>
                            <div class="form-row">
                                <label for="name">Subject</label>
                                <input type="text" id="subject" name="subject" class="form-control" required>
                            </div>
                            <div class="form-row">
                                <label for="email">Email</label>
                                <input type="email" id="email" name="email" class="form-control" required>
                            </div>
                            <div class="form-row">
                                <label for="message">Message</label>
                                <textarea class="form-control" name="message" id="message" required></textarea>
                            </div>
                            <div class="text-right">
                                <button type="submit" class="btn">Submit message</button>
                            </div>
                        </form> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>