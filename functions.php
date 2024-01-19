<?php

/**
 * Theme functions and definitions
 *
 * @package HelloElementorChild
 */

/**
 * Load child theme css and optional scripts
 *
 * @return void
 */
function hello_elementor_child_enqueue_scripts()
{
    wp_enqueue_style(
        'hello-elementor-child-style',
        get_stylesheet_directory_uri() . '/style.css',
        [
            'hello-elementor-theme-style',
        ],
        '1.0.0'
    );
}

add_action('wp_enqueue_scripts', 'hello_elementor_child_enqueue_scripts', 20);

DEFINE("FLOCKSY_VERSION", "0.0.1");
DEFINE("FLOCKSY_HOME_PAGE_ID", 20163);
DEFINE("FLOCKSY_PORTFOLIO_PAGE_ID", 20168);
//adding file to create CPT

require("create-cpt.php");

// adding Theme support
add_theme_support('menus');
add_theme_support('widgets');
add_theme_support('custom-logo');

function flocksy_theme_setup()
{
    register_nav_menus(array(
        'header' => 'Header menu'
    ));
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'flocksy_theme_setup');

// Adding stylesheet
function flocksy_theme_style()
{
    wp_enqueue_style('flocksy-main-style', get_stylesheet_directory_uri() . '/css/main.css');

    wp_dequeue_style('hello-elementor', 11);

    if (is_page_template('home.php')) {
        wp_enqueue_style('flocksy-home-style', get_stylesheet_directory_uri() . '/css/home-style.css');
    }
    if (is_page_template('how-it-works.php')) {
        wp_enqueue_style('flocksy-How-it-works-style', get_stylesheet_directory_uri() . '/css/how-it-works-new-style.css');
    }

    if (is_page_template('services.php')) {
        wp_enqueue_style('flocksy-services-style', get_stylesheet_directory_uri() . '/css/service-new-style.css');
    }
    if (is_page_template('the-new-services.php')) {
        wp_enqueue_style('flocksy-services-style', get_stylesheet_directory_uri() . '/css/service-new-style.css');
    }
    if (is_page_template('portfolio.php')) {
        wp_enqueue_style('flocksy-services-style', get_stylesheet_directory_uri() . '/css/portfolio-style.css');
    }
    if (is_page_template('portfoliopages.php')) {
        wp_enqueue_style('flocksy-services-style', get_stylesheet_directory_uri() . '/css/portfolios-style.css');
    }
    if (is_page_template('pricing.php')) {
        wp_enqueue_style('flocksy-services-style', get_stylesheet_directory_uri() . '/css/pricing-style.css');
    }

    if (is_page_template('about-us.php')) {
        wp_enqueue_style('flocksy-services-style', get_stylesheet_directory_uri() . '/css/about-us-style.css');
    }

    if (is_page_template('how-unlimited-copywriting-works.php')) {
        wp_enqueue_style('flocksy-services-style', get_stylesheet_directory_uri() . '/css/copywriting-style.css');
    }

    if (is_page_template('how-unlimited-graphic-design-works.php')) {
        wp_enqueue_style('flocksy-services-style', get_stylesheet_directory_uri() . '/css/graphic-design-style.css');
    }

    if (is_page_template('unlimited-custom-illustration.php')) {
        wp_enqueue_style('flocksy-services-style', get_stylesheet_directory_uri() . '/css/custom-illustration-style.css');
    }

    if (is_page_template('unlimited-video-editing.php')) {
        wp_enqueue_style('flocksy-services-style', get_stylesheet_directory_uri() . '/css/video-team-style.css');
    }

    if (is_page_template('unlimited-voice-overs.php')) {
        wp_enqueue_style('flocksy-services-style', get_stylesheet_directory_uri() . '/css/custom-grapics-design-style-new.css');
    }
    if (is_page_template('faq.php')) {
        wp_enqueue_style('flocksy-services-style', get_stylesheet_directory_uri() . '/css/faq-style.css');
    }
    if (is_page_template('contact-us.php')) {
        wp_enqueue_style('flocksy-services-style', get_stylesheet_directory_uri() . '/css/contact-us-style.css');
    }

    if (is_page_template('schedule-demo.php')) {
        wp_enqueue_style('flocksy-services-style', get_stylesheet_directory_uri() . '/css/schedule-a-demo-style.css');
    }

}

add_action('wp_enqueue_scripts', 'flocksy_theme_style');

// Adding scripts
function flocksy_theme_scripts()
{
    wp_enqueue_script("jquery");
    wp_enqueue_script("flocksy-jquery", get_stylesheet_directory_uri() . "/js/jquery-3.3.1.min.js", "jquery", FLOCKSY_VERSION);
    wp_enqueue_script("flocksy-common-head", get_stylesheet_directory_uri() . "/js/common_head.js", "jquery", FLOCKSY_VERSION);
    wp_enqueue_script("flocksy-main", get_stylesheet_directory_uri() . "/js/jquery.main.js", "jquery", FLOCKSY_VERSION);
    wp_enqueue_script("flocksy-common-footer", get_stylesheet_directory_uri() . "/js/common_footer.js", "jquery", FLOCKSY_VERSION, true);
    wp_enqueue_script("flocksy-lottie", get_stylesheet_directory_uri() . "/js/lottie.js", "", FLOCKSY_VERSION);
    wp_enqueue_script("awin-tracking", "https://www.dwin1.com/19038.js");

    wp_localize_script('flocksy_local', 'flocksyAjax', array('ajaxurl' => admin_url('admin-ajax.php')));

    wp_enqueue_script('flocksy_local');
}

add_action('wp_enqueue_scripts', 'flocksy_theme_scripts');

// Adding sidebars

// Hide money back guarantee if its set for the page.


add_action("wp_footer", function () {

    global $post;
    $post_id = $post->ID;

    $mbg = get_field("show_moneyback_guarantee");

    if (!$mbg) {
        ?>
        <script>
            jQuery("document").ready(function () {
                jQuery(".money-back-gurantee").remove();
            });
        </script>
        <?php
    }
});

// Footer Left
function flocksy_widgets_init()
{
    register_sidebar(array(
        'name' => __('Footer Left Sidebar', 'flocksy'),
        'id' => 'footer-left',
        'description' => __('Widgets in this area will be shown on all posts and pages.', 'flocksy'),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h3 class="widgettitle">',
        'after_title' => '</h3>',
    ));
    register_sidebar(array(
        'name' => __('Footer Right Sidebar 1', 'flocksy'),
        'id' => 'footer-right-1',
        'description' => __('Widgets in this area will be shown on all posts and pages.', 'flocksy'),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h3 class="widgettitle">',
        'after_title' => '</h3>',
    ));
    register_sidebar(array(
        'name' => __('Footer Right Sidebar 2', 'flocksy'),
        'id' => 'footer-right-2',
        'description' => __('Widgets in this area will be shown on all posts and pages.', 'flocksy'),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h3 class="widgettitle">',
        'after_title' => '</h3>',
    ));
    register_sidebar(array(
        'name' => __('Footer Right Sidebar 3', 'flocksy'),
        'id' => 'footer-right-3',
        'description' => __('Widgets in this area will be shown on all posts and pages.', 'flocksy'),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h3 class="widgettitle">',
        'after_title' => '</h3>',
    ));

}

add_action('widgets_init', 'flocksy_widgets_init');

add_filter('manage_portfolio_posts_columns', function ($columns) {
    if (is_array($columns) && !isset($columns['disp_image']))
        $columns['disp_image'] = __('Image');
    return $columns;
});

add_action('manage_portfolio_posts_custom_column', function ($column_name, $post_id) {
    if ($column_name == 'disp_image') {
        $image_url = "<img  width=100px src='" . get_field("preview_image", $post_id) . "'>";
        echo $image_url;
    }


}, 10, 2);

function slugify($text, string $divider = '-')
{
    // replace non letter or digits by divider
    $text = preg_replace('~[^\pL\d]+~u', $divider, $text);

    // transliterate
    $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

    // remove unwanted characters
    $text = preg_replace('~[^-\w]+~', '', $text);

    // trim
    $text = trim($text, $divider);

    // remove duplicate divider
    $text = preg_replace('~-+~', $divider, $text);

    // lowercase
    $text = strtolower($text);

    if (empty($text)) {
        return 'n-a';
    }

    return $text;
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


function contactFormSubmission()
{

    $to = "support@flocksy.com"; // this is your Email address
    $from = "admin@flocksycom.ph.stgnew.com"; // this is the sender's Email address
    $subject = "Form submission";
    $action = test_input($_POST['action']);
    $subject = test_input($_POST['name']);
    $email = test_input($_POST['email']);
    $text_msg = test_input($_POST['message']);


    $formId = '';
    $formAction = 'Message';

    if (isset($_REQUEST['form_id'])) {
        $formId = $_REQUEST['form_id'];
        if ($formId == 'schedule-demo') {
            $DemoMessage = ' - demo request';
        } elseif ($formId == 'contact-us') {
            $DemoMessage = '';
        }
    }

    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    $headers .= 'From: ' . $from . "\r\n" .
        'Reply-To: ' . $email . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    $message = '<html><body>';
    if ($formId == 'contact-us') {
        $message .= '' . $text_msg . '';
    } else {
        //$message .= '<p style="font-size:18px;">Name: '.$name.'</p>'; sam commented out 1/14/22
        $message .= '' . $text_msg . '';
    }
    $message .= '</body></html>';

    $result = mail($to, $subject . '' . $DemoMessage . '', $message, $headers);

    if ($result) {
        echo json_encode([
            'success' => true,
        ], JSON_FORCE_OBJECT);
    } else {
        echo json_encode([
            'success' => false,
        ], JSON_FORCE_OBJECT);
    }


    wp_die();
}

add_action('wp_ajax_contactFormSubmission', 'contactFormSubmission');
add_action('wp_ajax_nopriv_contactFormSubmission', 'contactFormSubmission');


function getPortfolioItems()
{
    $ppp = (isset($_POST["ppp"])) ? $_POST["ppp"] : -1;
    $page = (isset($_POST['pageNumber'])) ? $_POST['pageNumber'] : 0;
    $offset = (isset($_POST['offset'])) ? $_POST['offset'] : 0;
    $slug = $_REQUEST['slug'];

    $args = array(
        'post_type' => 'portfolio',
        'post_status' => 'publish',
        'posts_per_page' => $ppp,
        'offset' => $offset,
        'orderby' => 'date',
        'order' => 'ASC',
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
                'terms' => $slug
            )
        )
    );

    $response = [];

    $loop = new WP_Query($args);
    while ($loop->have_posts()) : $loop->the_post();

        $id = get_the_ID();
        $preview_image = get_field("preview_image");
        $preview_popup_image = get_field("preview_popup_image");
        $preview_popup_images = get_field("preview_popup_images");
        $video_popup_content = get_field("video_popup_content");
        $audio_url = get_field("audio_url");
        $portfolio_type = get_field("preview_type");
        $more_than_one_image = get_field("more_than_one_image");

        preg_match('/https?:\/\/[-a-zA-Z0-9@:%._\+~#=]{2,256}\.[a-z]{2,6}\b[-a-zA-Z0-9@:%_\+.~#?&\/=]*\.jsonp/i', $video_popup_content, $video_url);

        array_push($response, array(
            'id' => $id,
            'preview_image' => $preview_image,
            'preview_popup_image' => $preview_popup_image,
            'preview_popup_images' => $preview_popup_images,
            'video_popup_content' => preg_replace('/<script\b[^<]*(?:(?!<\/script>)<[^<]*)*<\/script>/i', '', $video_popup_content),
            'audio_url' => $audio_url,
            'video_url' => $video_url[0],
            'portfolio_type' => $portfolio_type,
            'more_than_one_image' => $more_than_one_image,
        ));

    endwhile;
    wp_reset_postdata();


    echo json_encode([
        'data' => $response,
        'success' => true,
        'total' => $loop->found_posts,
    ]);


    wp_die();
}

add_action('wp_ajax_getPortfolioItems', 'getPortfolioItems');
add_action('wp_ajax_nopriv_getPortfolioItems', 'getPortfolioItems');

?>