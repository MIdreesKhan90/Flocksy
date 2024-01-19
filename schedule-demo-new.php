<?php 

/*
 * Template Name: Schedule Demo
 */

get_header(); ?>


                <div class="container">
                    <div class="hero-banner-section is-video" style="display:block;">
                        <div class="text-holder">
                            <h1 class="title-block"><?php echo get_field( "sd_hero_section_title" ); ?></h1>
                            <div class="text-block">
                                <?php echo get_field( "sd_hero_section_textblock" ); ?>
                            </div>
                        </div>
                        <?php echo get_field( "sd_hero_section_video" ); ?>

                    </div>
<div class="banner-demo-section" style="display:block;">
                        <div class="banner-demo-header text-center">
                            <h2 class="title-global-section" style="display:none;"><?php echo get_field( "sd_banner_demo_title" ); ?></h2>
                            <div class="text-block" style="display:none;">
                                <?php echo get_field( "sd_banner_demo_textblock" ); ?>
                            </div>
                        </div>
                        <div class="column-list">
                            <div class="column-item">
                                <div class="image-block text-left">
                                <div class="left-col-block">
                                    <img src="<?php echo get_field( "sd_banner_demo_column_image" ); ?>" alt="image">
                                </div>
                                <div class="right-col-block">
                                   <img src="https://flocksy.com/wp-content/uploads/2022/02/PhoneIcon.png"> <p>Need a call? <b>(877) 263-7389</b></p>
                                   <h2>Or schedule <br><b>a live Demo</b></h2>
                                </div>
                                </div>
                                <div class="text-block customul">
                                <?php echo get_field( "sd_banner_demo_textblock" ); ?>
                            </div>
                            </div>
                            <div class="column-item">
                                
                                 <div class="image-block text-center">
                                    <?php echo get_field( "sd_banner_demo_column_form" ); ?>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="contact-section">
                        <div class="text-holder text-center">
                            <h2 class="title-global-section"><strong><?php echo get_field( "sd_contact_section_title" ); ?></strong></h2>
                            <div class="text-block"></div>
                        </div>
                        <div class="contact-holder">
                            <div class="contact-text-block">
                                <div class="contact-text-holder custom-block">
                                    <div class="questions-image-block">
                                        <!-- <img src="<?php echo get_field( "sd_contact_section_image" ); ?>" alt="<?php echo get_field( "sd_contact_section_title" ); ?>"> -->
                                    </div>
                                    <div class="questions-text">
                                       <?php echo get_field( "sd_contact_section_question_text" ); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="contact-form-block">
                                <div class="contact-form-holder">
                                    <div class="contact-form-message bg-green" style="display: none">
                                        <p>Your message was successfully sent!</p>
                                    </div>
                                     <?php echo get_field( "sd_schedule_a_demo" ); ?>
                                    <!-- <form class="form form-send">
                                        <input type="hidden" name="action" value="Have Questions?">
                                        <input type="hidden" name="form_id" value="schedule-demo">
                                        <p style="margin-bottom:20px;">Response time is usually within an hour during business hours.</p>
                                        <p>You can also call us at <strong>(877) 263-7389</strong>. We would love to talk. </p>
                                        <div class="form-row">
                                            <label for="name">Name</label>
                                            <input type="text" id="name" name="name" class="form-control" required>
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

                    <div class="title-global-section only-section text-center" style="display:none;"><?php echo get_field( "sd_only_title_section" ); ?></div>

                    

                    <div class="banner-text-section text-center" style="padding:50px 0;">
                        <div class="text-block">
                            <?php echo get_field( "sd_banner_green_textblock" ); ?>
                        </div>
                        <a href="<?php echo get_field( "sd_banner_green_button_link" ); ?>" class="btn no-animate"><?php echo get_field( "sd_banner_green_button_text" ); ?></a>
                    </div>

                   

                </div>
<?php get_footer(); ?>