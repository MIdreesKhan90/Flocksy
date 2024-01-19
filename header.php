<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico" type="image/x-icon">
    <?php wp_head(); ?>
    <!-- DO NOT MODIFY -->
    <!-- Quora Pixel Code (JS Helper) -->
    <script>
        !function(q,e,v,n,t,s){if(q.qp) return; n=q.qp=function(){n.qp?n.qp.apply(n,arguments):n.queue.push(arguments);}; n.queue=[];t=document.createElement(e);t.async=!0;t.src=v; s=document.getElementsByTagName(e)[0]; s.parentNode.insertBefore(t,s);}(window, 'script', 'https://a.quora.com/qevents.js');
        qp('init', '4c12245c79e54df7923ead6600a03274');
        qp('track', 'ViewContent');
    </script>
    <noscript><img height="1" width="1" style="display:none" src="https://q.quora.com/_/ad/4c12245c79e54df7923ead6600a03274/pixel?tag=ViewContent&noscript=1"/></noscript>
    <!-- End of Quora Pixel Code -->
    <!-- Hotjar Tracking Code for Flocksy.com -->
    <script>
        (function(h,o,t,j,a,r){
            h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
            h._hjSettings={hjid:1741545,hjsv:6};
            a=o.getElementsByTagName('head')[0];
            r=o.createElement('script');r.async=1;
            r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
            a.appendChild(r);
        })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
    </script>
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(). '/css/portfolio-style.css' ?>">
    <meta name="__TOKEN__" content="TKNc0717a31d04fdd1a837919841d87526c2250d842a23aeda4b62d952640a2c9fb">
</head>
<body <? body_class(); ?>>
<div class="page-holder">
    <div id="wrapper">
        <header id="header" class="header">
            <div class="container">
                <div class="logo">
                    <a href="<?php echo get_site_url();?>">
                        <?php
                        $custom_logo_id = get_theme_mod( 'custom_logo' );
                        $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                        $home_page_id=20163;

                        ?>
                        <img src="<?php echo esc_url( $logo[0] ); ?>" alt="Flocksy">
                    </a>
                </div>
                <button class="hamburger" type="button">
                      <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                      </span>
                </button>
                <div class="menu-holder">
                    <div class="menu-block">
                        <nav id="flocksy-navigation" class="site-navigation flocksy-navigation" role="navigation">
                            <?php wp_nav_menu( array( 'theme_location' => 'header', 'menu_class' => 'menu', 'fallback_cb' => false ) ); ?>
                        </nav>
                        <ul class="menu-btn">
                            <li><a href="./signup" class="btn btn-green no-dot">Sign up</a></li>
                            <li><a href="./login" class="btn btn-outline-gray no-dot">Login</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
        <main id="main" class="main">