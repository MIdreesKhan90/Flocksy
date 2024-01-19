<?php

/*
 * Template Name: Unlimited Custom Illustration New Page
 */
get_header();
?>

    <div class="container">
        <div class="hero-banner-section custom-section custom-margin-bottom">
            <div class="text-holder">
                <h1 class="title-block"><?php echo get_field("uci_hero_section_title"); ?></h1>
                <div class="text-block">
                    <?php echo get_field("uci_hero_section_textblock"); ?>
                </div>
                <a href="<?php echo get_field("uci_hero_section_button_link"); ?>"
                   class="btn"><?php echo get_field("uci_hero_section_button_text"); ?></a>
            </div>
            <div class="image-holder">
                <picture>
                    <source srcset="<?php echo get_field("uci_hero_section_image"); ?>" media="(min-width: 768px)">
                    <source srcset="<?php echo get_field("uci_hero_section_image_mobile"); ?>">
                    <img src="<?php echo get_field("uci_hero_section_image"); ?>" alt="Graphic Design">
                </picture>
            </div>
        </div>
    </div>
<?php get_template_part('template-parts/section', 'logo-banner') ?>

    <div class="container">
        <div class="info-member-section">
            <div class="text-holder pb-0">
                <div class="text-holder-header">
                    <div class="title-global-section"><?php echo get_field("uci_info_member_section_title"); ?></div>
                    <div class="text-block">
                        <?php echo get_field("uci_info_member_section_texblock"); ?>
                    </div>
                </div>
                <div class="image-block">
                    <img src="<?php echo get_field("uci_info_member_section_image"); ?>" alt="Recent Work">
                </div>
            </div>
            <div class="slider-holder">
                <div class="work-slider js-info-slider">
                    <?php
                    $rows = get_field("uci_info_member_item");
                    if ($rows) {
                        ?>
                        <div class="work-slide-item">
                            <?php
                            foreach ($rows as $key => $row) {
                                ?>
                                <div class="member-holder">
                                    <div class="work-slide-body">
                                        <a href="javascript:;" data-src="#popup-member-<?php echo $key; ?>"
                                           data-fancybox class="img-box">
                                            <img src="<?php echo $row['member_body_image']; ?>"
                                                 alt="<?php echo $row['member_name']; ?>">
                                        </a>
                                        <div id="popup-member-<?php echo $key; ?>" class="popup-content"
                                             style="display: none;">
                                            <div class="preview-image">
                                                <?php
                                                $popup_content = $row['popup_content'];
                                                if ($popup_content) {
                                                    echo '<img src="' . $popup_content . '" alt="Flocksy Design">';
                                                } ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                if ((($key + 1) < count($rows)) && (($key + 1) % 2 == 0)) {
                                    echo "</div><div class='work-slide-item'>";
                                }
                            } ?>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>

<?php get_template_part('template-parts/section', 'portfolio-tabs-slider') ?>
    <div class="container">
        <div class="banner-free-section">
            <div class="image-block image-left">
                <img src="<?php echo get_field("uci_banner_free_left_image"); ?>" alt="images">
            </div>
            <div class="image-block image-right">
                <img src="<?php echo get_field("uci_banner_free_right_image"); ?>" alt="images">
            </div>
            <div class="text-holder text-center">
                <h2 class="title-global-section"><?php echo get_field("uci_banner_free_title"); ?></h2>
                <ul class="banner-free-list">
                    <?php
                    $bfl = explode("\n", str_replace("\r", "", get_field("uci_banner_free_list")));
                    foreach ($bfl as $b) {
                        echo "<li>" . $b . "</li>";
                    }
                    ?>

                </ul>
                <h2 class="title-global-section font-weight-bold"><?php echo get_field("uci_banner_free_footer_title"); ?></h2>
                <a href="<?php echo get_field("uci_banner_free_button_link"); ?>"
                   class="btn"><?php echo get_field("uci_banner_free_button_text"); ?></a>
            </div>
        </div>
    </div>
<?php get_template_part('template-parts/section', 'statistics') ?>

<?php get_template_part('template-parts/section', 'reviews-slider') ?>

<?php get_template_part('template-parts/section', 'accordion-tabs') ?>

    <section class="py-70 bg-light-grey illustrator-content-section footer-top-content-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="text-black-200"><?php echo get_field("block_1_left_title"); ?></h1>
                    <?php echo get_field("block_1_left_content"); ?>
                </div>
                <div class="col-md-6">
                    <h1><?php echo get_field("block_1_right_title"); ?></h1>
                    <?php echo get_field("block_1_right_content"); ?>
                </div>
            </div>

            <img src="<?php echo get_field("block_1_section_bottom_image"); ?>" alt="panel-image">

            <div class="white-box">
                <div class="row">
                    <div class="col-md-5">
                        <?php echo get_field("white_box_left_content"); ?>
                    </div>
                    <div class="col">
                        <?php echo get_field("white_box_center_content"); ?>
                    </div>
                    <div class="col">
                        <?php echo get_field("white_box_right_content"); ?>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-5">
                    <?php echo get_field("block_2_left_content"); ?>
                </div>
                <div class="col-md-7">
                    <?php echo get_field("block_2_right_content"); ?>
                </div>
            </div>

            <div>
                <h2><?php echo get_field("block_3_title"); ?></h2>
                <?php echo get_field("block_3_content"); ?>
            </div>
        </div>
    </section>

    <section class="py-70 bg-green text-white green-section footer-top-content-section">
        <div class="container">
            <div class="row">
                <div class="col">
                    <?php echo get_field("green_left_section_text"); ?>
                </div>
                <div class="col">
                    <img src="<?php echo get_field("green_right_section_image"); ?>" alt="green-section-image">
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>