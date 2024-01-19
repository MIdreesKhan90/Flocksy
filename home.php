<?php

/*
 * Template Name: Home Page updated
 */
get_header();
?>

    <div class="containerr">
    <div class="hero-banner-section">
        <div class="container">
            <div class="text-holder">
                <h1 class="title-block">
                    <?php echo get_field("hbs_left_heading"); ?>
                    <!-- <span class="string-replacement">
                <?php
                    //  $rows = get_field('hbs_changing_text');

                    if (have_rows('hbs_changing_text')) {
                        while (have_rows('hbs_changing_text')) {
                            the_row();
                            echo '<span class="' . get_sub_field('hbs_class_name') . '">' . get_sub_field('hbs_rotate_text') . '</span>';
                        }
                    }
                    ?>
                </span>-->
                    <?php echo get_field("hbs_right_heading"); ?>
                </h1>
                <div class="text-block">
                    <p><?php echo get_field("hbs_text_block"); ?></p>
                </div>
                <a href="<?php echo get_field("hbs_button_link"); ?>" class="btn"><?php echo get_field("hbs_button_text"); ?></a>
            </div>
        </div>
        <div class="image-holder">

            <div class="lottie-custom" data-animation-path="<?php echo get_field("hbs_json_animation_url"); ?>"></div>
        </div>
    </div>

    <?php get_template_part('template-parts/section', 'logo-banner') ?>

    <div class="accordion-section">
        <div class="container">
            <h2 class="title-global-section"><?php echo get_field("accordion_title"); ?></h2>
            <div class="accordion-default js-accordion-anim">
                <?php

                //$rows = get_field('accordion_items');

                if (have_rows('accordion_items')):
                    $accordion_counter = 1;
                    while (have_rows('accordion_items')) : the_row();
                        $sub_value1 = get_sub_field('accordion_opener');
                        $sub_value2 = get_sub_field('accordion_text_block');
                        $sub_value3 = get_sub_field('accordion_image_json');

                        //if( $rows ) {
                        $flag = 0;

                        ?>
                        <div class="accordion-item <?php if ($accordion_counter == 1) {
                            echo "active";
                        } ?>">
                            <a href="#" class="accordion-opener js-opener"><?php echo $sub_value1; //echo $row['accordion_opener']; ?> </a>
                            <div class="accordion-holder js-slide">
                                <div class="text-holder">
                                    <div class="text-block">
                                        <?php echo $sub_value2; //echo $row['accordion_text_block']; ?>
                                    </div>
                                </div>
                                <div class="image-holder">
                                    <div class="lottie-custom lottie0<?php echo $accordion_counter; ?>"
                                         data-animation-path="<?php echo $sub_value3;//echo $row['accordion_image_json']; ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                        $accordion_counter++;

                        // }
                    endwhile;
                endif;
                ?>
            </div>
        </div>
    </div>

    <?php get_template_part('template-parts/section', 'portfolio-slider') ?>

    <div class="slider-animate-image-section">
        <div class="container">
            <div class="slider-animate-image js-slider">
                <?php
                $rows = get_field('sa_slides');
                if (have_rows('sa_slides')):
                    while (have_rows('sa_slides')) : the_row();
                        $sub_value1 = get_sub_field('slide_title');
                        $sub_value2 = get_sub_field('slide_textblock');
                        $sub_value3 = get_sub_field('slide_list_block');
                        $sub_value4 = get_sub_field('slide_image_json');
                        $sub_value5 = get_sub_field('slide_dots_color');
                        if ($rows) {
                            $i = 0;
                            //foreach( $rows as $row ) {
                            $i++;
                            ?>
                            <div class="slide">
                                <div class="text-holder">
                                    <h2 class="title-global-section"><?php echo $sub_value1; ?></h2>
                                    <div class="text-block">
                                        <?php echo $sub_value2; ?>
                                    </div>
                                    <?php
                                    $dots_color = !empty($sub_value5) ? $sub_value5 : "green";
                                    ?>
                                    <ul class="list-block dots-<?php echo $row["slide_dots_color"]; ?>">
                                        <?php
                                        $text = trim($sub_value3);
                                        $textAr = explode("\n", $text);
                                        $textAr = array_filter($textAr, 'trim'); // remove any extra \r characters left behind
                                        foreach ($textAr as $line) {
                                            echo "<li>" . $line . "</li>";
                                        }
                                        ?>
                                    </ul>
                                </div>
                                <div class="image-holder">
                                    <div class="lottie-custom lottie0<?php echo $i; ?>" data-animation-path="<?php echo $sub_value4; ?>"></div>
                                </div>
                            </div>
                            <?php
                        }
                    endwhile;
                endif;
                // }
                ?>
            </div>
        </div>
    </div>

    <?php get_template_part('template-parts/section', 'reviews-slider') ?>

    <?php get_template_part('template-parts/section', 'portfolio-tabs-slider') ?>

    <div class="box-section">
        <div class="container">
            <div class="box-list">
                <?php
                $i = 1;
                $border_color = "";
                $rows = get_field('box_items');
                if (have_rows('box_items')):
                    while (have_rows('box_items')) : the_row();
                        $sub_value1 = get_sub_field('box_title');
                        $sub_value2 = get_sub_field('box_image');
                        $sub_value3 = get_sub_field('box_textblock');
                        if ($rows) {
                            // foreach( $rows as $row ) {
                            if ($i % 3 == 0) {
                                $border_color = "";
                            } else {
                                if ($i % 2 == 0) {
                                    $border_color = "border-green";
                                } else {
                                    if ($i % 1 == 0) {
                                        $border_color = "border-red";
                                    }

                                }
                            }
                            $i++;
                            ?>
                            <div class="box-item">
                                <div class="box-holder <?php echo $border_color; ?>">
                                    <h3 class="title-block"><?php echo $sub_value1; ?></h3>
                                    <div class="image-block">
                                        <img src="<?php echo $sub_value2; ?>" alt="Select a plan">
                                    </div>
                                    <div class="text-block">
                                        <p><?php echo $sub_value3; ?></p>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                    endwhile;
                endif;
                // }
                ?>
            </div>
        </div>
    </div>

    <?php get_template_part('template-parts/section', 'accordion-tabs') ?>

<?php get_footer(); ?>