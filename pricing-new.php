<?php

/*
 * Template Name: Pricing Page New
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

    <div class="container">
        <div class="plan-section" id="plan-section">
            <div class="text-holder">
                <h2 class="title-global-section">Choose Your Plan</h2>
                <img src="https://flocksy.com/wp-content/uploads/2022/08/14DaysMoneyBackGuarantee_Img1-01.svg"
                     alt="14 Days Money Back Guarantee">
                <div class="text-block">
                    <p>All plans come with our hassle free <b>14 Day Money Back Guarantee.</b></p>
                </div>
            </div>

            <div class="plan-tabs-holder">
                <div class="row">
                    <div class="col-md-4">
                        <div class="plan-tabs-card">
                            <h3>Silver Plan
                                <span><img src="https://flocksy.com/wp-content/uploads/2023/01/info-icon.png" alt="/">
                                    <div class="tooltip">
                                        <p>Perfect for Small Businesses</p>
                                    </div>
                                </span>
                            </h3>
                            <h2><span class="text-green">$499</span> /Month</h2>

                            <ul class="mt-48">
                                <li>
                                    <span>
                                        <img src="https://flocksy.com/wp-content/uploads/2022/12/Untitled-2.pngsdfsd.png"
                                             alt="/">
                                                                        <div class="tooltip1">
                                        <p>We will work through your projects one at a time as fast as possible. If there are revisions needed, we will start the next one.</p>
                                    </div>
                                    </span>
                                    Queue
                                </li>
                                <li>
                                                                        <span>
                                        <img src="https://flocksy.com/wp-content/uploads/2022/12/Untitled-2.pngsdfsd.png"
                                             alt="/">
                                                                        <div class="tooltip1">
                                        <p>Like the work of a particular team member? You can work with them on project
                                            after project as they fine tune the particular creative style you like.</p>
                                    </div>
                                    </span>
                                    Designated Creative Team
                                </li>
                                <li>
                                    <span>
                                        <img src="https://flocksy.com/wp-content/uploads/2022/12/Untitled-2.pngsdfsd.png"
                                             alt="/">
                                                                        <div class="tooltip1">
                                        <p>The graphic design team is here to work on all your marketing projects! Get
                                            ready to sit back and have work done by a vetted and talented team. The team
                                            works Monday-Friday.</p>
                                    </div>
                                    </span>
                                    Graphic Design
                                </li>
                                <li>
                                                                        <span>
                                        <img src="https://flocksy.com/wp-content/uploads/2022/12/Untitled-2.pngsdfsd.png"
                                             alt="/">
                                                                        <div class="tooltip1">
                                        <p>Most projects are completed within 24-48 hours once started, but some can
                                            take longer, depending on what’s needed. The team works Monday-Friday.</p>
                                    </div>
                                    </span>
                                    Custom Illustrations
                                </li>
                                <li>
                                    <span>
                                        <img src="https://flocksy.com/wp-content/uploads/2022/12/Untitled-2.pngsdfsd.png"
                                             alt="/">
                                                                        <div class="tooltip1">
                                        <p>Our creative teams operate in the USA timezone for fast responses. We also
                                            operate in Australia, the UK and other counties. This way you know you'll
                                            get fast responses and great communication.</p>
                                    </div>
                                    </span>
                                    USA Daytime Team Creatives
                                </li>
                                <li>
                                                                        <span>
                                        <img src="https://flocksy.com/wp-content/uploads/2022/12/Untitled-2.pngsdfsd.png"
                                             alt="/">
                                                                        <div class="tooltip1">
                                        <p>Design and illustration can take 24-48 hours in some cases. If you are
                                            looking for faster turnaround times, our Gold Plan is a great choice.</p>
                                    </div>
                                    </span>
                                    Fast Turnaround
                                </li>
                                <li class="py-4 pl">
                                                                        <span>
                                        <img src="https://flocksy.com/wp-content/uploads/2022/12/Untitled-2.pngsdfsd.png"
                                             alt="/">
                                                                        <div class="tooltip1">
                                        <p>Easily connect Flocksy to your favorite application including, Slack, Trello,
                                            G-Suite and more.</p>
                                    </div>
                                    </span>
                                    Zapier Integration
                                    <span class="block pl-20 span-innner-text">(Slack, Trello, Email + more)</span>
                                </li>
                                <li class="list-none py-4">Dedicated Project Manager
                                    <span class="block span-innner-text">(available by phone, email and video chat)</span>
                                    <div class="tooltip1">
                                        <p>With your dedicated Project Manager you can expect fast responses to any
                                            questions or concerns you have about projects or anything else.</p>
                                    </div>
                                </li>
                            </ul>
                            <a href="https://app.flocksy.com/signup" class="btn btn-green no-animate">Next</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="plan-tabs-card plan-tabs-card-after footer-top-content-section">
                            <h3>Gold Plan
                                <span><img src="https://flocksy.com/wp-content/uploads/2023/01/info-icon.png" alt="/">
                                    <div class="tooltip">
                                        <p>Perfect for Medium Businesses</p>
                                    </div>
                                </span>
                            </h3>
                            <h2><span class="text-green">$995</span> /Month</h2>

                            <ul>
                                <li class="list-none pl-20 f-bold">EVERYTHING IN <span class="text-green m-0">SILVER</span>, PLUS:
                                </li>
                                <li class="list-none pl-20 f-bold">Double the Output of the Silver Plan
                                </li>
                                <li>
                                    <span>
                                        <img src="https://flocksy.com/wp-content/uploads/2022/12/Untitled-2.pngsdfsd.png"
                                             alt="/">
                                                                        <div class="tooltip1">
                                        <p>The copywriting team is here to work on your marketing projects. Whether it's
                                            a blog post or a website, we have you covered. The team is based in the USA
                                            and can work in any timezone.
                                            The team works Monday-Friday.</p>
                                    </div>
                                    </span>
                                    Copywriting
                                </li>
                                <li>
                                                                        <span>
                                        <img src="https://flocksy.com/wp-content/uploads/2022/12/Untitled-2.pngsdfsd.png"
                                             alt="/">
                                                                        <div class="tooltip1">
                                        <p>Some video projects can take longer than 24 hours, depending on how
                                            complicated they are. However, the team always sends it over asap. The team
                                            works Monday-Friday.</p>
                                    </div>
                                    </span>
                                    Video Editing
                                </li>
                                <li>
                                            <span>
                                        <img src="https://flocksy.com/wp-content/uploads/2022/12/Untitled-2.pngsdfsd.png"
                                             alt="/">
                                                                        <div class="tooltip1">
                                        <p>We will create your next visual ad, motion graphic or animated design</p>
                                    </div>
                                    </span>
                                    Motion Graphics
                                </li>
                                <li>
                                    <span>
                                        <img src="https://flocksy.com/wp-content/uploads/2022/12/Untitled-2.pngsdfsd.png"
                                             alt="/">
                                                                        <div class="tooltip1">
                                        <p>All our logos are creative, beautifully designed and 100% custom. Our
                                            branding guides help your brand stay on track and maintain consistency as
                                            you scale it up.</p>
                                    </div>
                                    </span>
                                    Logos and Branding Guides
                                </li>
                                <li>
                                                                        <span>
                                        <img src="https://flocksy.com/wp-content/uploads/2022/12/Untitled-2.pngsdfsd.png"
                                             alt="/">
                                                                        <div class="tooltip1">
                                        <p>Looking for talented and vetted voice over artists. We have you covered. The
                                            team works Monday-Friday.</p>
                                    </div>
                                    </span>
                                    Voice Over and Audio
                                </li>
                                <li>
                                                                        <span>
                                        <img src="https://flocksy.com/wp-content/uploads/2022/12/Untitled-2.pngsdfsd.png"
                                             alt="/">
                                                                        <div class="tooltip1">
                                        <p>You can expect same day to 24 hour turnaround for most of your projects. More
                                            complicated projects (including video and websites) can take longer but
                                            we’ll update you on the progress as we work through them.</p>
                                    </div>
                                    </span>
                                    Expedited Turnaround
                                </li>
                                <li>
                                    <span>
                                        <img src="https://flocksy.com/wp-content/uploads/2022/12/Untitled-2.pngsdfsd.png"
                                             alt="/">
                                                                        <div class="tooltip1">
                                        <p>Easily provide video feedback to the team. Loom is integrated into our system
                                            so you can effortlessly share your screen and give direct feedback.</p>
                                    </div>
                                    </span>
                                    Request Revisions via Video & Audio
                                </li>
                            </ul>
                            <a href="https://app.flocksy.com/signup" class="btn no-animate">Next</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="plan-tabs-card height">
                            <h3 class="platinum">Platinum Plan
                                <span><img src="https://flocksy.com/wp-content/uploads/2023/01/info-icon.png" alt="/">
                                    <div class="tooltip">
                                        <p>Perfect for Agencies or Large Businesses</p>
                                    </div>
                                </span>
                            </h3>
                            <h2><span class="text-green">$1,495</span> /Month</h2>

                            <ul>
                                <li class="list-none pl-20 f-bold">EVERYTHING IN <span class="text-green m-0">GOLD</span>, PLUS:
                                </li>
                                <li class="list-none pl-20 f-bold">Triple the Output of the Silver Plan
                                </li>
                                <li>
                                                                        <span>
                                        <img src="https://flocksy.com/wp-content/uploads/2022/12/Untitled-2.pngsdfsd.png"
                                             alt="/">
                                                                        <div class="tooltip1">
                                        <p>We can convert your Figma or PSD file to the most popular drag and drop
                                            builders. We work with Elementor and Divi. You can have up to three active
                                            projects at a time with the Platinum Plan. One of those can be a PSD to HTML
                                            or PSD to Drag and Drop. Once we finish one web project, we move onto the
                                            next one.</p>
                                    </div>
                                    </span>
                                    PSD to Drag and Drop Builders
                                </li>
                                <li>
                                           <span>
                                        <img src="https://flocksy.com/wp-content/uploads/2022/12/Untitled-2.pngsdfsd.png"
                                             alt="/">
                                                                        <div class="tooltip1">
                                        <p>Have a Figma or PSD file? Have our dev team convert it over to HTML/CSS for
                                            you. We follow the best principles when it comes to coding. You can have up
                                            to three active projects at a time with the Platinum Plan. One of those can
                                            be a PSD to HTML or PSD to Drag and Drop. Once we finish one web project, we
                                            move onto the next one.</p>
                                    </div>
                                    </span>
                                    PSD to HTML
                                </li>
                                <li>
                                    <span>
                                        <img src="https://flocksy.com/wp-content/uploads/2022/12/Untitled-2.pngsdfsd.png"
                                             alt="/">
                                                                        <div class="tooltip1">
                                        <p>You can post projects and submit revisions easily via email. This is great
                                            for agencies.</p>
                                    </div>
                                    </span>
                                    Submit Projects and Revisions via Email
                                </li>
                            </ul>
                            <a href="https://app.flocksy.com/signup" class="btn btn-green no-animate">Next</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="plans-include">
                <h2 class="title-global-section">All plans include:</h2>

                <div class="plans-include-content">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="https://flocksy.com/wp-content/uploads/2022/05/LicensedStockPhotos_Img1.jpg"
                                 alt="Licensed Stock Photos and Video Footage Image">
                            <p>Licensed Stock Photos <br>and Video Footage </p>
                        </div>
                        <div class="col-md-4">
                            <img src="https://flocksy.com/wp-content/uploads/2022/05/UnlimitedUsers_Img1.jpg"
                                 alt="Unlimited Users and Brand Buckets Image">
                            <p>Unlimited Users and <br>Brand Buckets</p>
                        </div>
                        <div class="col-md-4">
                            <img src="https://flocksy.com/wp-content/uploads/2022/08/14DaysMoneyBackGuarantee_Img1-01.svg"
                                 alt="30 Day Money Back Guarantee Image">
                            <p>14 Day Money Back <br>Guarantee</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="our-pricing">
                <h2 class="title-global-section">Our Pricing</h2>
                <h3>Many Projects</h3>

                <div class="row">
                    <div class="col-md-4">
                        <div class="pricing-card text-center">
                            <h1>105,632</h1>
                            <p>Successful Projects</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="pricing-card text-center">
                            <h1>1,023,758</h1>
                            <p>Proofs Sent to Clients</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="pricing-card text-center">
                            <h1>8.02</h1>
                            <p>Hour Average Turnaround*
                                <span>*Usually less, depending on the type of project</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="container">
        <div class="column-banner-section">
            <div class="text-holder">
                <h2 class="title-global-section"><?php echo get_field("column_banner_title"); ?></h2>
                <div class="text-block">
                    <?php echo get_field("column_banner_textblock"); ?>
                </div>
            </div>
            <div class="image-holder">
                <picture>
                    <source srcset="<?php echo get_field("column_banner_image"); ?>" media="(min-width: 768px)">
                    <source srcset="<?php echo get_field("column_banner_mobile_image"); ?>">
                    <img src="<?php echo get_field("column_banner_image"); ?>" alt="Meet Our Creatives">
                </picture>
            </div>
        </div>
    </div>

<?php get_template_part('template-parts/section', 'accordion-tabs') ?>

<?php get_template_part('template-parts/section', 'reviews-slider') ?>

    <div class="container">
        <div class="get-help-section">
            <div class="text-holder">
                <h2 class="title-global-section big-title"><?php echo get_field("get_help_title"); ?></h2>
                <a href="<?php echo get_field("get_help_button_link"); ?>"
                   class="btn"><?php echo get_field("get_help_button_text"); ?></a>
            </div>
            <div class="image-holder">
                <div class="image-block">
                    <picture>
                        <source srcset="<?php echo get_field("get_help_image"); ?>" media="(min-width: 768px)">
                        <source srcset="<?php echo get_field("get_help_image_mobile"); ?>">
                        <img src="<?php echo get_field("get_help_image"); ?>" alt="img">
                    </picture>
                </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>