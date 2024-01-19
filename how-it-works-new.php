<?php

/*
 * Template Name: How it works New
 */
get_header(); ?>


<div class="hero-banner-section custom-section custom-margin-bottom">
    <div class="container">
        <div class="text-holder mb-70">
            <h1 class="title-block"><?php echo get_field("hiw_hero_section_title"); ?></h1>
            <div class="text-block">
                <p><?php echo get_field("hiw_hero_section_textblock"); ?></p>
            </div>
            <a href="<?php echo get_field("hiw_hero_section_button_link"); ?>"
               class="btn"><?php echo get_field("hiw_hero_section_button_text"); ?></a>
        </div>
        <div class="image-holder" style="margin-top: 20px">
            <picture>
                <source srcset="<?php echo get_field("hiw_hero_section_image"); ?>" media="(min-width: 768px)">
                <source srcset="<?php echo get_field("hiw_hero_section_image_mobile"); ?>">
                <img src="<?php echo get_field("hiw_hero_section_image"); ?>" alt="Web Development">
            </picture>
        </div>
    </div>
</div>

<?php get_template_part('template-parts/section', 'logo-banner') ?>

<div class="project-instantly-section custom-section footer-top-content-section">
    <div class="container">
        <h1 class="text-center title-global-section"><?php echo get_field('project_steps_title') ?></h1>
        <div class="row">
            <?php
            if (have_rows('project_steps')) {
                while (have_rows('project_steps')) {
                    the_row();
                    ?>
                    <div class="col-md-4 text-center">
                        <div class="project-instantly-card">
                            <div class="card-img">
                                <img src="<?php echo get_sub_field('image') ?>"
                                     alt="<?php echo get_sub_field('title') ?>">
                            </div>

                            <h3><?php echo get_sub_field('title') ?></h3>
                            <p><?php echo get_sub_field('content') ?></p>
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

<div class="text-accordion-section footer-top-content-section" id="brief">
    <div class="container">
        <h2 class="title-global-section text-green"><?php echo get_field("hiw_brief_section_global_title"); ?></h2>
        <div class="text-accordion-holder">
            <div class="text-holder">
                <h3 class="title-block"><?php echo get_field("hiw_brief_section_title"); ?></h3>
                <div class="text-block">
                    <?php echo get_field("hiw_brief_section_textblock"); ?>
                </div>
                <div class="image-block">
                    <picture>
                        <source srcset="<?php echo get_field("hiw_brief_section_image"); ?>" media="(min-width: 768px)">
                        <source srcset="<?php echo get_field("hiw_brief_section_image_mobile"); ?>">
                        <img src="<?php echo get_field("hiw_brief_section_image"); ?>" alt="brief">
                    </picture>
                </div>
            </div>
            <div class="accordion-holder">
                <div class="accordion-default accordion-default-white js-accordion-collapsible">
                    <?php
                    $i = 0;
                    $rows = get_field('hiw_brief_section_accordion_items');
                    if (have_rows('hiw_brief_section_accordion_items')):
                        while (have_rows('hiw_brief_section_accordion_items')) : the_row();
                            $sub_value1 = get_sub_field('bsai_title');
                            $sub_value2 = get_sub_field('bsai_textblock');

                            if ($rows) {
                                ?>
                                <div class="accordion-item <?php echo ($i == 0) ? 'active' : '' ?>">
                                    <a href="#" class="accordion-opener js-opener"><?php echo $sub_value1; ?></a>
                                    <div class="accordion-holder js-slide">
                                        <div class="text-holder">
                                            <p><?php echo $sub_value2; ?></p>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                $i++;
                            }
                        endwhile;
                    endif;
                    //}
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="text-accordion-section footer-top-content-section" id="finalize">
    <div class="container">
        <h2 class="title-global-section text-green"><?php echo get_field("finalize_section_global_title"); ?></h2>
        <div class="text-accordion-holder">
            <div class="text-holder">
                <h3 class="title-block"><?php echo get_field("finalize_section_title"); ?></h3>
                <div class="text-block">
                    <?php echo get_field("finalize_section_textblock"); ?>
                </div>
                <div class="image-block">
                    <picture>
                        <source srcset="<?php echo get_field("finalize_section_image"); ?>" media="(min-width: 768px)">
                        <source srcset="<?php echo get_field("finalize_section_image_mobile"); ?>">
                        <img src="<?php echo get_field("finalize_section_image"); ?>" alt="brief">
                    </picture>
                </div>
            </div>
            <div class="accordion-holder">
                <div class="accordion-default accordion-default-white js-accordion-collapsible">
                    <?php
                    $i = 0;
                    $rows = get_field('finalize_section_accordion_items');
                    if (have_rows('finalize_section_accordion_items')):
                        while (have_rows('finalize_section_accordion_items')) : the_row();
                            $sub_value1 = get_sub_field('bsai_title');
                            $sub_value2 = get_sub_field('bsai_textblock');

                            if ($rows) {
                                ?>
                                <div class="accordion-item <?php echo ($i == 0) ? 'active' : '' ?>">
                                    <a href="#" class="accordion-opener js-opener"><?php echo $sub_value1; ?></a>
                                    <div class="accordion-holder js-slide">
                                        <div class="text-holder">
                                            <p><?php echo $sub_value2; ?></p>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                $i++;
                            }
                        endwhile;
                    endif;
                    //}
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="text-accordion-section footer-top-content-section" id="repeat">
    <div class="container">
        <h2 class="title-global-section text-green"><?php echo get_field("repeat_section_global_title"); ?></h2>
        <div class="text-accordion-holder mb-75">
            <div class="text-holder">
                <h3 class="title-block"><?php echo get_field("repeat_section_title"); ?></h3>
                <div class="text-block">
                    <?php echo get_field("repeat_section_textblock"); ?>
                </div>
                <div class="image-block">
                    <picture>
                        <source srcset="<?php echo get_field("repeat_section_image"); ?>" media="(min-width: 768px)">
                        <source srcset="<?php echo get_field("repeat_section_image_mobile"); ?>">
                        <img src="<?php echo get_field("repeat_section_image"); ?>" alt="brief">
                    </picture>
                </div>
            </div>
            <div class="accordion-holder">
                <div class="accordion-default accordion-default-white js-accordion-collapsible">
                    <?php
                    $i = 0;
                    $rows = get_field('repeat_section_accordion_items');
                    if (have_rows('repeat_section_accordion_items')):
                        while (have_rows('repeat_section_accordion_items')) : the_row();
                            $sub_value1 = get_sub_field('bsai_title');
                            $sub_value2 = get_sub_field('bsai_textblock');

                            if ($rows) {
                                ?>
                                <div class="accordion-item <?php echo ($i == 0) ? 'active' : '' ?>">
                                    <a href="#" class="accordion-opener js-opener"><?php echo $sub_value1; ?></a>
                                    <div class="accordion-holder js-slide">
                                        <div class="text-holder">
                                            <p><?php echo $sub_value2; ?></p>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                $i++;
                            }
                        endwhile;
                    endif;
                    //}
                    ?>
                </div>
            </div>
        </div>

        <div class="process-more-button text-center">
            <a href="https://flocksy.com/solutions/" class="btn no-animate mb-15">See our services</a>
            <a href="https://flocksy.com/portfolio/" class="btn btn-green no-animate">See our portfolio</a>
        </div>
    </div>
</div>

<div class="categories-tab-section footer-top-content-section">
    <div class="container">
        <h2 class="title-global-section text-center">Professional, personal teams</h2>
        <div class="categories-bottoms">
            <?php
            if (have_rows('category_tabs')):
                $tab_i = 0;
                while (have_rows('category_tabs')) : the_row();
                    $tab_title = get_sub_field('tab_title');
                    $body_title = get_sub_field('body_title');
                    $image = get_sub_field('image');
                    $services = get_sub_field('services');
                    ?>
                    <button class="tablinks <?php echo ($tab_i == 0) ? 'active' : '' ?>"
                            onclick="openTab(event, '<?php echo 'tab-' . slugify($tab_title) ?>')"> <?php echo $tab_title; ?></button>
                    <?php
                    $tab_i++;
                endwhile;
            endif;
            ?>
        </div>

        <?php
        if (have_rows('category_tabs')):
            $tab_i = 0;
            while (have_rows('category_tabs')) : the_row();
                $tab_title = get_sub_field('tab_title');
                $body_title = get_sub_field('body_title');
                $image = get_sub_field('image');
                $services = get_sub_field('services');
                $tab_link_url = get_sub_field('tab_link_url');
                $tab_link_text = get_sub_field('tab_link_text');
                $first_button_url = get_sub_field('first_button_url');
                $first_button_title = get_sub_field('first_button_title');
                $second_button_url = get_sub_field('second_button_url');
                $second_button_title = get_sub_field('second_button_title');
                ?>
                <div id="<?php echo 'tab-' . slugify($tab_title) ?>" class="tabcontent">
                    <div class="row heading">
                        <h3><?php echo $body_title; ?></h3>
                        <img src="<?php echo $image ?>" alt="graphic-design-banner-image">
                    </div>
                    <div class="row design-list">
                        <div class="col">
                            <ul>
                                <?php
                                if ($services){
                                $per_col_services = ceil(count($services) / 5) < 3 ? 3 : ceil(count($services) / 5);
                                foreach ($services

                                as $key => $item) {
                                ?>
                                <li><?php echo $item['title']; ?></li>
                                <?php
                                if (($key + 1) % $per_col_services == 0){
                                ?>
                            </ul>
                        </div>
                        <div class="col">
                            <ul>
                                <?php
                                }
                                }
                                } ?>
                            </ul>
                        </div>
                    </div>
                    <p class="much-more-text"><?php echo $tab_link_text; ?></p>
                    <div class="process-more-button">
                        <a href="<?php echo $first_button_url; ?>" class="btn"><?php echo $first_button_title; ?></a>
                        <a href="<?php echo $second_button_url; ?>"
                           class="btn btn-green no-animate"><?php echo $second_button_title; ?></a>
                    </div>
                </div>
                <?php
                $tab_i++;
            endwhile;
        endif;
        ?>

    </div>
</div>

<?php get_template_part('template-parts/section', 'portfolio-tabs-slider') ?>

<?php get_template_part('template-parts/section', 'reviews-slider') ?>

<div class="integrations-section footer-top-content-section">
    <div class="container">
        <h1 class="text-center title-global-section">
            <img src="<?php echo get_field("integrations_image_title"); ?>"
                 alt="zapier-heading-image"><?php echo get_field("integrations_title_text"); ?></h1>
        <p class="text-center quote"><?php echo get_field("integration_sub_title"); ?></p>
        <div class="row">
            <?php
            $integration_features = get_field('integration_features');
            if ($integration_features) {
                foreach ($integration_features as $item) {
                    ?>
                    <div class="col">
                        <div class="integrations-card mr">
                            <p class="quote"><?php echo $item['title']; ?></p>
                            <p><?php echo $item['description']; ?></p>
                        </div>
                    </div>
                    <?php
                }
            } ?>
        </div>
        <div class="row justify-center contact-app mr">
            <?php
            $app_contact = get_field('app_contact');
            if ($app_contact) {
                foreach ($app_contact as $item) {
                    ?>
                    <div class="col text-center mr-80">
                        <div class="row contact-app-logo">
                            <img class="project-via-logo" src="<?php echo $item['app_logo_1']; ?>" alt="logo-image">
                            <img class="project-via-logo ml-60" src="<?php echo $item['app_logo_2']; ?>"
                                 alt="logo-image">
                        </div>
                        <p class="quote"><?php echo $item['title']; ?></p>
                        <p><?php echo $item['description']; ?></p>
                    </div>
                    <?php
                }
            } ?>
        </div>
    </div>
</div>


<?php get_footer(); ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script src="/fslightbox.js"></script>
<script>
    function openTab(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }
</script>