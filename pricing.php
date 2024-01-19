<?php

/*
 * Template Name: Pricing Page
 */
get_header();
?>
    <div class="container">

        <div class="hero-banner-section custom-section">
            <div class="text-holder">
                <h1 class="title-block"><?php echo get_field("hero_banner_section_title"); ?></strong></h1>
                <div class="text-block">
                    <?php echo get_field("hero_banner_section_textblock"); ?>
                </div>
                <a href="<?php echo get_field("hero_banner_section_button_link"); ?>" class="btn"><?php echo get_field("hero_banner_section_button_text"); ?></a>
            </div>
            <div class="image-holder">
                <picture>
                    <source srcset="<?php echo get_field("hero_banner_section_image"); ?>" media="(min-width: 768px)">
                    <source srcset="<?php echo get_field("hero_banner_section_mobile_image"); ?>">
                    <img src="<?php echo get_field("hero_banner_section_image"); ?>" alt="Get All Your Projects Done For One Fixed Price">
                </picture>
            </div>
        </div>

        <div class="plan-section" id="plan-section">
            <div class="text-holder">
                <h2 class="title-global-section">Choose Your Plan</h2>
                <div class="text-block">
                    <p>All plans have unlimited projects, no contract, and a 14-day money-back guarantee.</p>
                </div>
            </div>

            <div class="plan-tabs-holder">
                <ul class="plan-tabset">
                    <li>
                        <button data-tab="#plan-tab-01" class="btn">Monthly</button>
                    </li>
                    <li>
                        <span class="save">Save 10%</span>
                        <button data-tab="#plan-tab-02" class="btn">Quarterly</button>
                    </li>
                    <li>
                        <span class="save">Save 15%</span>
                        <button data-tab="#plan-tab-03" class="btn">Yearly</button>
                    </li>
                </ul>
                <div class="tab-content plan-tab-content">
                    <div id="plan-tab-01">
                        <div class="table-phone plan-table-second">
                            <div class="plan-table-col">
                                <div class="plan-table-header">
                                    <div class="table-header-head">
                                        <div class="table-title-block">The Access Plan</div>
                                        <div class="plan-tooltip">
                                            <span class="tooltip" title="Perfect for larger companies or agencies that need the full suite of Flocksy services and more projects done per month. Get double the output, plus advanced graphics, illustration, and audio services!"></span>
                                        </div>
                                    </div>
                                    <div class="table-header-body">
                                        <div class="table-price-block">
                                            $995<span>/Month</span>
                                        </div>
                                        <a href="/signup" class="btn btn-green no-animate">Select Plan</a>
                                    </div>
                                </div>
                                <ul class="plan-table-list">
                                    <li class="plan-table-item">
                                        <span>Unlimited Projects</span>
                                        <span class="check"></span>
                                    </li>
                                    <li class="plan-table-item">
                                        <span>Unlimited Revisions</span>
                                        <span class="check"></span>
                                    </li>
                                    <li class="plan-table-item">
                                        <span>Same Day Response <span class="tooltip" title="With our Same Day response, expect your project to be added to the queue right away regardless of the time of day you post it. If there are any questions the team member or Project Manager usually asks within the first few hours, so there are no delay."></span></span>
                                        <span class="check"></span>
                                    </li>
                                    <li class="plan-table-item">
                                        <span>Premium Stock Photos <span class="tooltip" title="We use premium stock photos from Depositphotos.com"></span></span>
                                        <span class="check"></span>
                                    </li>
                                    <li class="plan-table-item">
                                        <span>Premium Stock Footage <span class="tooltip" title="We use premium stock footage from storyblocks.com"></span></span>
                                        <span class="check"></span>
                                    </li>
                                    <li class="plan-table-item">
                                        <span>Dedicated Project Manager <span class="tooltip" title="With your dedicated Project Manager you can expect fast responses to any questions or concerns you have about projects or anything else."></span></span>
                                        <span class="check"></span>
                                    </li>
                                    <li class="plan-table-item">
                                        <span>14-Day Money Back Guarantee <span class="tooltip" title="We offer a rock-solid 14-Day Money Back Guarantee for new customers that allows you to experience the service first-hand."></span></span>
                                        <span class="check"></span>
                                    </li>
                                    <li class="plan-table-item">
                                        <span>No contract. Cancel anytime</span>
                                        <span class="check"></span>
                                    </li>
                                </ul>
                                <h4 class="plan-table-title">Workflow</h4>
                                <ul class="plan-table-list">
                                    <li class="plan-table-item">
                                        <span>Users <span class="tooltip" title="Collaborate quickly and efficiently by adding up to 20 additional users or clients to your account. Give them permissions that allow them to access files, projects and more."></span></span>
                                        <span>20</span>
                                    </li>
                                    <li class="plan-table-item">
                                        <span>Active Projects <span class="tooltip" title="Add as many projects as you would like to your queue and we will work through them two at a time. This is perfect for agencies and larger companies that need a lot of work done and want to prepare projects in batches."></span></span>
                                        <span>2</span>
                                    </li>
                                    <li class="plan-table-item">
                                        <span>Revision Queue <span class="tooltip" title="Every Active Project comes with a Revision Queue. This means that once an Active Project’s  initial draft is sent for review, and you request a change, it’s moved to the Revision Queue, and a new pending project is started. You can have either one Active Project and one Revision Queue project or two Revision Queue projects at any given time."></span></span>
                                        <span class="check"></span>
                                    </li>
                                    <li class="plan-table-item">
                                        <span>Brand "Buckets" <span class="tooltip" title="Use our brand buckets to upload your or your clients branding material and marketing assets, and then easily attach it to any project you wish with one click."></span></span>
                                        <span>Unlimited</span>
                                    </li>
                                    <li class="plan-table-item">
                                        <span>Custom Template Library <span class="tooltip" title="Get access to a custom template library. Custom Illustrations, icons, web pages, and more are uploaded on a weekly basis. All work is custom created by the creatives here at Flocksy."></span></span>
                                        <span class="check"></span>
                                    </li>
                                    <li class="plan-table-item">
                                        <span>Option to Create Projects via Email <span class="tooltip" title="You have the option to start projects via email or by emailing “newproject@flocksy.com” when you have an active account. The projects will automatically be added to your queue. You can also start them within your Flocksy account."></span></span>
                                        <span class="check"></span>
                                    </li>
                                    <li class="plan-table-item">
                                        <span>Option to Reply to Comments via Email <span class="tooltip" title="You have the option to reply to comments via email by simply replying to the notification you receive and it will be posted in the project. You can also reply within your account."></span></span>
                                        <span class="check"></span>
                                    </li>
                                </ul>
                                <h4 class="plan-table-title">All teams included</h4>
                                <ul class="plan-table-list">
                                    <li class="plan-table-item">
                                        <span>Graphic Design Team <br><span class="subtext">24 hour turnaround*</span>  <span class="tooltip" title="Most projects are completed within 24 hours once activated, but in some cases can take more time, depending on the project’s complexity. The team works Monday-Friday."></span></span>
                                        <span class="check"></span>
                                    </li>
                                    <li class="plan-table-item">
                                        <span>Video Editing & Creation Team <br><span class="subtext js-tooltip" title="Most projects are completed within 24–48 hours once started, but some can take longer depending on what’s needed. ">24-48 hour turnaround*</span>  <span class="tooltip" title="Most of these projects are completed within 24–48 hours once the project is started. Complex projects or advanced editing can take longer. The team works Monday-Friday."></span></span>
                                        <span class="check"></span>
                                    </li>
                                    <li class="plan-table-item">
                                        <span>USA-Based Copywriting Team <br><span class="subtext">24 hour turnaround*</span> <span class="tooltip" title=" The estimated turnaround is 24 hours once started. Some projects can take longer depending on what’s needed. The team works Monday-Friday."></span></span>
                                        <span class="check"></span>
                                    </li>
                                    <li class="plan-table-item">
                                        <span>Custom Illustrations <br><span class="subtext js-tooltip" title="Most projects are completed within 24–48 hours once started, but some can take longer depending on what’s needed. ">24-48 hour turnaround*</span>  <span class="tooltip" title="Most projects are completed within 24–48 hours once started, but some can take longer depending on what’s needed. The team works Monday-Friday."></span></span>
                                        <span class="check"></span>
                                    </li>
                                    <li class="plan-table-item">
                                        <span>Voice-over and Audio Team <br><span class="subtext">24 hour turnaround*</span> <span class="tooltip" title="Most of these projects are completed within 24 hours once the project is activated, although some larger requests can take more time. The team works Monday-Friday."></span></span>
                                        <span class="check"></span>
                                    </li>
                                    <li class="plan-table-item">
                                        <span>Animated GIFs <br><span class="subtext">24 hour turnaround*</span> <span class="tooltip" title="The estimated turnaround is 24 hours once the project is activated, but is sometimes a bit longer for more complex requests. The team works Monday-Friday."></span></span>
                                        <span class="check"></span>
                                    </li>
                                    <li class="plan-table-item">
                                        <span>Website & App Design <br><span class="subtext js-tooltip" title="The majority of projects are completed within 48-72 hours once started, but some can take longer depending on what’s needed.">48-72 hour turnaround*</span>  <span class="tooltip" title="The majority of projects are completed within 48-72 hours once started, but some can take longer depending on what’s needed. The team works Monday-Friday. <b>This only includes design of the UI. We do not provide the actual coding of the pages.</b>"></span></span>
                                        <span class="check"></span>
                                    </li>
                                </ul>
                                <div class="footer-btn">
                                    <a href="/signup" class="btn btn-green no-animate">Select Plan</a>
                                </div>
                            </div>
                            <div class="plan-table-col">
                                <div class="plan-table-header">
                                    <div class="table-header-head">
                                        <div class="table-title-block">The Team Plan</div>
                                        <div class="plan-tooltip">
                                            <span class="tooltip" title="Perfect for small- to medium-sized companies that want to expand their pool of visual creators. Also ideal for marketing agencies that need to outsource creative work!"></span>
                                        </div>
                                    </div>
                                    <div class="table-header-body">
                                        <div class="table-price-block">
                                            $495<span>/Month</span>
                                        </div>
                                        <a href="/signup" class="btn no-animate">Select Plan</a>
                                    </div>
                                </div>
                                <ul class="plan-table-list">
                                    <li class="plan-table-item">
                                        <span>Unlimited Projects</span>
                                        <span class="check"></span>
                                    </li>
                                    <li class="plan-table-item">
                                        <span>Unlimited Revisions</span>
                                        <span class="check"></span>
                                    </li>
                                    <li class="plan-table-item">
                                        <span>Same Day Response <span class="tooltip" title="With our Same Day response, expect your project to be added to the queue right away regardless of the time of day you post it. If there are any questions the team member or Project Manager usually asks within the first few hours, so there are no delay."></span></span>
                                        <span class="check"></span>
                                    </li>
                                    <li class="plan-table-item">
                                        <span>Premium Stock Photos <span class="tooltip" title="We use premium stock photos from Depositphotos.com"></span></span>
                                        <span class="check"></span>
                                    </li>
                                    <li class="plan-table-item">
                                        <span>Premium Stock Footage <span class="tooltip" title="We use premium stock footage from storyblocks.com"></span></span>
                                        <span><span class="check"></span></span>
                                    </li>
                                    <li class="plan-table-item">
                                        <span>Dedicated Project Manager <span class="tooltip" title="With your dedicated Project Manager you can expect fast responses to any questions or concerns you have about projects or anything else."></span></span>
                                        <span class="check"></span>
                                    </li>
                                    <li class="plan-table-item">
                                        <span>14-Day Money Back Guarantee <span class="tooltip" title="We offer a rock-solid 14-Day Money Back Guarantee for new customers that allows you to experience the service first-hand."></span></span>
                                        <span class="check"></span>
                                    </li>
                                    <li class="plan-table-item">
                                        <span>No contract. Cancel anytime</span>
                                        <span class="check"></span>
                                    </li>
                                </ul>
                                <h4 class="plan-table-title">Workflow</h4>
                                <ul class="plan-table-list">
                                    <li class="plan-table-item">
                                        <span>Users <span class="tooltip" title="Collaborate quickly and efficiently by adding up to 20 additional users or clients to your account. Give them permissions that allow them to access files, projects and more."></span></span>
                                        <span>5</span>
                                    </li>
                                    <li class="plan-table-item">
                                        <span>Active Projects <span class="tooltip" title="Add as many projects as you would like to your queue and we will work through them two at a time. This is perfect for agencies and larger companies that need a lot of work done and want to prepare projects in batches."></span></span>
                                        <span>1</span>
                                    </li>
                                    <li class="plan-table-item">
                                        <span>Revision Queue <span class="tooltip" title="Every Active Project comes with a Revision Queue. This means that once an Active Project’s  initial draft is sent for review, and you request a change, it’s moved to the Revision Queue, and a new pending project is started. You can have either one Active Project and one Revision Queue project or two Revision Queue projects at any given time."></span></span>
                                        <span class="check"></span>
                                    </li>
                                    <li class="plan-table-item">
                                        <span>Brand "Buckets" <span class="tooltip" title="Use our brand buckets to upload your or your clients branding material and marketing assets, and then easily attach it to any project you wish with one click."></span></span>
                                        <span>5</span>
                                    </li>
                                    <li class="plan-table-item">
                                        <span>Custom Template Library <span class="tooltip" title="Get access to a custom template library. Custom Illustrations, icons, web pages, and more are uploaded on a weekly basis. All work is custom created by the creatives here at Flocksy."></span></span>
                                        <span class="check"></span>
                                    </li>
                                    <li class="plan-table-item">
                                        <span>Option to Create Projects via Email <span class="tooltip" title="You have the option to start projects via email or by emailing “newproject@flocksy.com” when you have an active account. The projects will automatically be added to your queue. You can also start them within your Flocksy account."></span></span>
                                        <span><span class="close"></span></span>
                                    </li>
                                    <li class="plan-table-item">
                                        <span>Option to Reply to Comments via Email <span class="tooltip" title="You have the option to reply to comments via email by simply replying to the notification you receive and it will be posted in the project. You can also reply within your account."></span></span>
                                        <span><span class="close"></span></span>
                                    </li>
                                </ul>
                                <h4 class="plan-table-title">All teams included</h4>
                                <ul class="plan-table-list">
                                    <li class="plan-table-item">
                                        <span>Graphic Design Team <br><span class="subtext">24 hour turnaround*</span>  <span class="tooltip" title="Most projects are completed within 24 hours once activated, but in some cases can take more time, depending on the project’s complexity. The team works Monday-Friday."></span></span>
                                        <span class="check"></span>
                                    </li>
                                    <li class="plan-table-item">
                                        <span>Video Editing & Creation Team <br><span class="subtext js-tooltip" title="Most projects are completed within 24–48 hours once started, but some can take longer depending on what’s needed. ">24-48 hour turnaround*</span>  <span class="tooltip" title="Most of these projects are completed within 24–48 hours once the project is started. Complex projects or advanced editing can take longer. The team works Monday-Friday."></span></span>
                                        <span><span class="close"></span></span>
                                    </li>
                                    <li class="plan-table-item">
                                        <span>USA-Based Copywriting Team <br><span class="subtext">24 hour turnaround*</span> <span class="tooltip" title=" The estimated turnaround is 24 hours once started. Some projects can take longer depending on what’s needed. The team works Monday-Friday."></span></span>
                                        <span><span class="check"></span></span>
                                    </li>
                                    <li class="plan-table-item">
                                        <span>Custom Illustrations <br><span class="subtext js-tooltip" title="Most projects are completed within 24–48 hours once started, but some can take longer depending on what’s needed. ">24-48 hour turnaround*</span>  <span class="tooltip" title="Most projects are completed within 24–48 hours once started, but some can take longer depending on what’s needed. The team works Monday-Friday."></span></span>
                                        <span><span class="check"></span></span>
                                    </li>
                                    <li class="plan-table-item">
                                        <span>Voice-over and Audio Team <br><span class="subtext">24 hour turnaround*</span> <span class="tooltip" title="Most of these projects are completed within 24 hours once the project is activated, although some larger requests can take more time. The team works Monday-Friday."></span></span>
                                        <span><span class="close"></span></span>
                                    </li>
                                    <li class="plan-table-item">
                                        <span>Animated GIFs <br><span class="subtext">24 hour turnaround*</span> <span class="tooltip" title="The estimated turnaround is 24 hours once the project is activated, but is sometimes a bit longer for more complex requests. The team works Monday-Friday."></span></span>
                                        <span><span class="close"></span></span>
                                    </li>
                                    <li class="plan-table-item">
                                        <span>Website & App Design <br><span class="subtext js-tooltip" title="The majority of projects are completed within 48-72 hours once started, but some can take longer depending on what’s needed.">48-72 hour turnaround*</span>  <span class="tooltip" title="The majority of projects are completed within 48-72 hours once started, but some can take longer depending on what’s needed. The team works Monday-Friday. <b>This only includes design of the UI. We do not provide the actual coding of the pages.</b>"></span></span>
                                        <span><span class="close"></span></span>
                                    </li>
                                </ul>
                                <div class="footer-btn">
                                    <a href="/signup" class="btn no-animate">Select Plan</a>
                                </div>
                            </div>
                        </div>
                        <table class="table-desktop plan-table-second four-columns" style="display: none">
                            <thead>
                            <tr>
                                <th></th>
                                <th></th>
                                <th>
                                    <div class="plan-table-header">
                                        <div class="table-header-head">
                                            <div class="table-title-block">The Access Plan</div>
                                            <div class="plan-tooltip">
                                                <span class="tooltip" title="Perfect for larger companies or agencies that need the full suite of Flocksy services and more projects done per month. Get double the output, plus advanced graphics, illustration, and audio services!"></span>
                                            </div>
                                        </div>
                                        <div class="table-header-body">
                                            <div class="table-price-block">
                                                $995<span>/Month</span>
                                            </div>
                                            <a href="/signup" class="btn btn-green no-animate">Select Plan</a>
                                        </div>
                                    </div>
                                </th>
                                <th>
                                    <div class="plan-table-header">
                                        <div class="table-header-head">
                                            <div class="table-title-block">The Team Plan</div>
                                            <div class="plan-tooltip">
                                                <span class="tooltip tooltip-right" title="Perfect for small- to medium-sized companies that want to expand their pool of visual creators. Also ideal for marketing agencies that need to outsource creative work!"></span>
                                            </div>
                                        </div>
                                        <div class="table-header-body">
                                            <div class="table-price-block">
                                                $495<span>/Month</span>
                                            </div>
                                            <a href="/signup" class="btn no-animate">Select Plan</a>
                                        </div>
                                    </div>
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td></td>
                                <td>Unlimited Projects</td>
                                <td><span class="check"></span></td>
                                <td><span class="check"></span></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Unlimited Revisions</td>
                                <td><span class="check"></span></td>
                                <td><span class="check"></span></td>
                            </tr>
                            <tr>
                                <td><span class="tooltip" title="With our Same Day response, expect your project to be added to the queue right away regardless of the time of day you post it. If there are any questions the team member or Project Manager usually asks within the first few hours, so there are no delay. "></span></td>
                                <td>Same Day Response</td>
                                <td><span class="check"></span></td>
                                <td><span class="check"></span></td>
                            </tr>
                            <tr>
                                <td><span class="tooltip" title="We use premium stock photos from Depositphotos.com"></span></td>
                                <td>Premium Stock Photos</td>
                                <td><span class="check"></span></td>
                                <td><span class="check"></span></td>
                            </tr>
                            <tr>
                                <td><span class="tooltip" title="We use premium stock footage from storyblocks.com"></span></td>
                                <td>Premium Stock Footage</td>
                                <td><span class="check"></span></td>
                                <td><span class="check"></span></td>
                            </tr>
                            <tr>
                                <td><span class="tooltip" title="With your dedicated Project Manager you can expect fast responses to any questions or concerns you have about projects or anything else. "></span></td>
                                <td>Dedicated Project Manager</td>
                                <td><span class="check"></span></td>
                                <td><span class="check"></span></td>
                            </tr>
                            <tr>
                                <td><span class="tooltip" title="We offer a rock-solid 14-Day Money Back Guarantee for new customers that allows you to experience the service first-hand."></span></td>
                                <td>14-Day Money Back Guarantee</td>
                                <td><span class="check"></span></td>
                                <td><span class="check"></span></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>No contract. Cancel anytime</td>
                                <td><span class="check"></span></td>
                                <td><span class="check"></span></td>
                            </tr>
                            <tr><th colspan="4">Workflow</th></tr>
                            <tr>
                                <td><span class="tooltip" title="Collaborate quickly and efficiently by adding up to 20 additional users or clients to your account. Give them permissions that allows them to access projects, files, and more. "></span></td>
                                <td>Users</td>
                                <td>20</td>
                                <td>5</td>
                            </tr>
                            <tr>
                                <td><span class="tooltip" title="Add as many projects as you would like to your queue and we will work through them two at a time. This is perfect for agencies and larger companies that need a lot of work done and want to prepare projects in batches. "></span></td>
                                <td>Active Projects</td>
                                <td>2</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td><span class="tooltip" title="Every Active Project comes with a Revision Queue. This means that once an Active Project’s  initial draft is sent for review, and you request a change, it’s moved to the Revision Queue, and a new pending project is started. You can have either one Active Project and one Revision Queue project or two Revision Queue projects at any given time. "></span></td>
                                <td>Revision Queue</td>
                                <td><span class="check"></span></td>
                                <td><span class="check"></span></td>
                            </tr>
                            <tr>
                                <td><span class="tooltip" title="Use our brand buckets to upload your or your clients branding material and marketing assets, and then easily attach it to any project you wish with one click. "></span></td>
                                <td>Brand "Buckets"</td>
                                <td>Unlimited</td>
                                <td>5</td>
                            </tr>
                            <tr>
                                <td><span class="tooltip" title="Get access to a custom template library. Custom Illustrations, icons, web pages, and more are uploaded on a weekly basis. All work is custom created by the creatives here at Flocksy. "></span></td>
                                <td>Custom Template Library</td>
                                <td><span class="check"></span></td>
                                <td><span class="check"></span></td>
                            </tr>
                            <tr>
                                <td><span class="tooltip" title="You have the option to start projects via email or by emailing “newproject@flocksy.com” when you have an active account. The projects will automatically be added to your queue. You can also start them within your Flocksy account."></span></td>
                                <td>Option to Create Projects via Email</td>
                                <td><span class="check"></span></td>
                                <td><span class="close"></span></td>
                            </tr>
                            <tr>
                                <td><span class="tooltip" title="You have the option to reply to comments via email by simply replying to the notification you receive and it will be posted in the project. You can also reply within your account. "></span></td>
                                <td>Option to Reply to Comments via Email</td>
                                <td><span class="check"></span></td>
                                <td><span class="close"></span></td>
                            </tr>
                            <tr><th colspan="4">All teams included</th></tr>
                            <tr>
                                <td><span class="tooltip" title="Most projects are completed within 24 hours once activated, but in some cases can take more time, depending on the project’s complexity. The team works Monday-Friday."></span></td>
                                <td>Graphic Design Team <br><span class="subtext js-tooltip" title="Most projects are completed within 24 hours once activated, but in some cases can take more time, depending on the project’s complexity. The team works Monday-Friday.">24 hour turnaround*</span></td>
                                <td><span class="check"></span></td>
                                <td><span class="check"></span></td>
                            </tr>
                            <tr>
                                <td><span class="tooltip" title="Most of these projects are completed within 24–48 hours once the project is started. Complex projects or advanced editing can take longer. The team works Monday-Friday."></span></td>
                                <td>Video Editing and Creation Team <br><span class="subtext js-tooltip" title="Most of these projects are completed within 24–48 hours once the project is started. Complex projects or advanced editing can take longer. The team works Monday-Friday.">24-48 hour turnaround*</span></td>
                                <td><span class="check"></span></td>
                                <td><span class="close"></span></td>
                            </tr>
                            <tr>
                                <td><span class="tooltip" title="The estimated turnaround is 24 hours once started. Some projects can take longer depending on what’s needed. The team works Monday-Friday."></span></td>
                                <td>USA-Based Copywriting Team <br><span class="subtext js-tooltip" title="The estimated turnaround is 24 hours once started. Some projects can take longer depending on what’s needed. The team works Monday-Friday.">24 hour turnaround*</span></td>
                                <td><span class="check"></span></td>
                                <td><span class="check"></span></td>
                            </tr>
                            <tr>
                                <td><span class="tooltip" title="Most projects are completed within 24–48 hours once started, but some can take longer depending on what’s needed. The team works Monday-Friday."></span></td>
                                <td>Custom Illustrations <br><span class="subtext js-tooltip" title="Most projects are completed within 24–48 hours once started, but some can take longer depending on what’s needed. The team works Monday-Friday.">24-48 hour turnaround*</span></td>
                                <td><span class="check"></span></td>
                                <td><span class="check"></span></td>
                            </tr>
                            <tr>
                                <td><span class="tooltip" title="Most of these projects are completed within 24 hours once the project is activated, although some larger requests can take more time. The team works Monday-Friday."></span></td>
                                <td>Voice-over and Audio Team <br><span class="subtext js-tooltip" title="Most of these projects are completed within 24 hours once the project is activated, although some larger requests can take more time. The team works Monday-Friday.">24 hour turnaround*</span></td>
                                <td><span class="check"></span></td>
                                <td><span class="close"></span></td>
                            </tr>
                            <tr>
                                <td><span class="tooltip" title="The estimated turnaround is 24 hours once the project is activated, but is sometimes a bit longer for more complex requests. The team works Monday-Friday."></span></td>
                                <td>Animated GIFs <br><span class="subtext js-tooltip" title="The estimated turnaround is 24 hours once the project is activated, but is sometimes a bit longer for more complex requests. The team works Monday-Friday.">24 hour turnaround*</span></td>
                                <td><span class="check"></span></td>
                                <td><span class="close"></span></td>
                            </tr>
                            <tr>
                                <td><span class="tooltip" title="The majority of projects are completed within 48-72 hours once started, but some can take longer depending on what’s needed. The team works Monday-Friday. <b>This only includes design of the UI. We do not provide the actual coding of the pages.</b>"></span></td>
                                <td>Website & App Design <br><span class="subtext js-tooltip" title="The majority of projects are completed within 48-72 hours once started, but some can take longer depending on what’s needed. The team works Monday-Friday. <b>This only includes design of the UI. We do not provide the actual coding of the pages.</b>">48-72 hour turnaround*</span></td>
                                <td><span class="check"></span></td>
                                <td><span class="close"></span></td>
                            </tr>
                            </tbody>
                            <tfoot>
                            <tr>
                                <th></th>
                                <th></th>
                                <th>
                                    <a href="/signup" class="btn btn-green no-animate">Select Plan</a>
                                </th>
                                <th>
                                    <a href="/signup" class="btn no-animate">Select Plan</a>
                                </th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                    <div id="plan-tab-02">
                        <div class="table-phone plan-table-second">
                            <div class="plan-table-col">
                                <div class="plan-table-header">
                                    <div class="table-header-head">
                                        <div class="table-title-block">The Access Plan</div>
                                        <div class="plan-tooltip">
                                            <span class="tooltip" title="Perfect for larger companies or agencies that need the full suite of Flocksy services and more projects done per month. Get double the output, plus advanced graphics, illustration, and audio services!"></span>
                                        </div>
                                    </div>
                                    <div class="table-header-body">
                                        <div class="table-price-block">
                                            $895.50<span>/Month</span>
                                        </div>
                                        <div class="all-price-block"><strong>$2,686.50</strong> billed quarterly</div>
                                        <div class="save-price-block">$298.50 savings</div>
                                        <a href="/signup" class="btn btn-green no-animate">Select Plan</a>
                                    </div>
                                </div>
                                <ul class="plan-table-list">
                                    <li class="plan-table-item">
                                        <span>Unlimited Projects</span>
                                        <span class="check"></span>
                                    </li>
                                    <li class="plan-table-item">
                                        <span>Unlimited Revisions</span>
                                        <span class="check"></span>
                                    </li>
                                    <li class="plan-table-item">
                                        <span>Same Day Response <span class="tooltip" title="With our Same Day response, expect your project to be added to the queue right away regardless of the time of day you post it. If there are any questions the team member or Project Manager usually asks within the first few hours, so there are no delay."></span></span>
                                        <span class="check"></span>
                                    </li>
                                    <li class="plan-table-item">
                                        <span>Premium Stock Photos <span class="tooltip" title="We use premium stock photos from Depositphotos.com"></span></span>
                                        <span class="check"></span>
                                    </li>
                                    <li class="plan-table-item">
                                        <span>Premium Stock Footage <span class="tooltip" title="We use premium stock footage from storyblocks.com"></span></span>
                                        <span class="check"></span>
                                    </li>
                                    <li class="plan-table-item">
                                        <span>Dedicated Project Manager <span class="tooltip" title="With your dedicated Project Manager you can expect fast responses to any questions or concerns you have about projects or anything else."></span></span>
                                        <span class="check"></span>
                                    </li>
                                    <li class="plan-table-item">
                                        <span>14-Day Money Back Guarantee <span class="tooltip" title="We offer a rock-solid 14-Day Money Back Guarantee for new customers that allows you to experience the service first-hand."></span></span>
                                        <span class="check"></span>
                                    </li>
                                    <li class="plan-table-item">
                                        <span>No contract. Cancel anytime</span>
                                        <span class="check"></span>
                                    </li>
                                </ul>
                                <h4 class="plan-table-title">Workflow</h4>
                                <ul class="plan-table-list">
                                    <li class="plan-table-item">
                                        <span>Users <span class="tooltip" title="Collaborate quickly and efficiently by adding up to 20 additional users or clients to your account. Give them permissions that allow them to access files, projects and more."></span></span>
                                        <span>20</span>
                                    </li>
                                    <li class="plan-table-item">
                                        <span>Active Projects <span class="tooltip" title="Add as many projects as you would like to your queue and we will work through them two at a time. This is perfect for agencies and larger companies that need a lot of work done and want to prepare projects in batches."></span></span>
                                        <span>2</span>
                                    </li>
                                    <li class="plan-table-item">
                                        <span>Revision Queue <span class="tooltip" title="Every Active Project comes with a Revision Queue. This means that once an Active Project’s  initial draft is sent for review, and you request a change, it’s moved to the Revision Queue, and a new pending project is started. You can have either one Active Project and one Revision Queue project or two Revision Queue projects at any given time."></span></span>
                                        <span class="check"></span>
                                    </li>
                                    <li class="plan-table-item">
                                        <span>Brand "Buckets" <span class="tooltip" title="Use our brand buckets to upload your or your clients branding material and marketing assets, and then easily attach it to any project you wish with one click."></span></span>
                                        <span>Unlimited</span>
                                    </li>
                                    <li class="plan-table-item">
                                        <span>Custom Template Library <span class="tooltip" title="Get access to a custom template library. Custom Illustrations, icons, web pages, and more are uploaded on a weekly basis. All work is custom created by the creatives here at Flocksy."></span></span>
                                        <span class="check"></span>
                                    </li>
                                    <li class="plan-table-item">
                                        <span>Option to Create Projects via Email <span class="tooltip" title="You have the option to start projects via email or by emailing “newproject@flocksy.com” when you have an active account. The projects will automatically be added to your queue. You can also start them within your Flocksy account."></span></span>
                                        <span class="check"></span>
                                    </li>
                                    <li class="plan-table-item">
                                        <span>Option to Reply to Comments via Email <span class="tooltip" title="You have the option to reply to comments via email by simply replying to the notification you receive and it will be posted in the project. You can also reply within your account."></span></span>
                                        <span class="check"></span>
                                    </li>
                                </ul>
                                <h4 class="plan-table-title">All teams included</h4>
                                <ul class="plan-table-list">
                                    <li class="plan-table-item">
                                        <span>Graphic Design Team <br><span class="subtext">24 hour turnaround*</span>  <span class="tooltip" title="Most projects are completed within 24 hours once activated, but in some cases can take more time, depending on the project’s complexity. The team works Monday-Friday."></span></span>
                                        <span class="check"></span>
                                    </li>
                                    <li class="plan-table-item">
                                        <span>Video Editing & Creation Team <br><span class="subtext js-tooltip" title="Most projects are completed within 24–48 hours once started, but some can take longer depending on what’s needed. ">24-48 hour turnaround*</span>  <span class="tooltip" title="Most of these projects are completed within 24–48 hours once the project is started. Complex projects or advanced editing can take longer. The team works Monday-Friday."></span></span>
                                        <span class="check"></span>
                                    </li>
                                    <li class="plan-table-item">
                                        <span>USA-Based Copywriting Team <br><span class="subtext">24 hour turnaround*</span> <span class="tooltip" title=" The estimated turnaround is 24 hours once started. Some projects can take longer depending on what’s needed. The team works Monday-Friday."></span></span>
                                        <span class="check"></span>
                                    </li>
                                    <li class="plan-table-item">
                                        <span>Custom Illustrations <br><span class="subtext js-tooltip" title="Most projects are completed within 24–48 hours once started, but some can take longer depending on what’s needed. The team works Monday-Friday.">24-48 hour turnaround*</span>  <span class="tooltip" title="Most projects are completed within 24–48 hours once started, but some can take longer depending on what’s needed. The team works Monday-Friday."></span></span>
                                        <span class="check"></span>
                                    </li>
                                    <li class="plan-table-item">
                                        <span>Voice-over and Audio Team <br><span class="subtext">24 hour turnaround*</span> <span class="tooltip" title="Most of these projects are completed within 24 hours once the project is activated, although some larger requests can take more time. The team works Monday-Friday."></span></span>
                                        <span class="check"></span>
                                    </li>
                                    <li class="plan-table-item">
                                        <span>Animated GIFs <br><span class="subtext">24 hour turnaround*</span> <span class="tooltip" title="The estimated turnaround is 24 hours once the project is activated, but is sometimes a bit longer for more complex requests. The team works Monday-Friday."></span></span>
                                        <span class="check"></span>
                                    </li>
                                    <li class="plan-table-item">
                                        <span>Website & App Design <br><span class="subtext js-tooltip" title="The majority of projects are completed within 48-72 hours once started, but some can take longer depending on what’s needed. The team works Monday-Friday. <b>This only includes design of the UI. We do not provide the actual coding of the pages.</b>">48-72 hour turnaround*</span>  <span class="tooltip" title="The majority of projects are completed within 48-72 hours once started, but some can take longer depending on what’s needed. The team works Monday-Friday. <b>This only includes design of the UI. We do not provide the actual coding of the pages.</b>"></span></span>
                                        <span class="check"></span>
                                    </li>
                                </ul>
                                <div class="footer-btn">
                                    <a href="/signup" class="btn btn-green no-animate">Select Plan</a>
                                </div>
                            </div>
                            <div class="plan-table-col">
                                <div class="plan-table-header">
                                    <div class="table-header-head">
                                        <div class="table-title-block">The Team Plan</div>
                                        <div class="plan-tooltip">
                                            <span class="tooltip" title="Perfect for small- to medium-sized companies that want to expand their pool of visual creators. Also ideal for marketing agencies that need to outsource creative work!"></span>
                                        </div>
                                    </div>
                                    <div class="table-header-body">
                                        <div class="table-price-block">
                                            $445.50<span>/Month</span>
                                        </div>
                                        <div class="all-price-block"><strong>$1,336.50</strong> billed quarterly</div>
                                        <div class="save-price-block">$148.50 savings </div>
                                        <a href="/signup" class="btn no-animate">Select Plan</a>
                                    </div>
                                </div>
                                <ul class="plan-table-list">
                                    <li class="plan-table-item">
                                        <span>Unlimited Projects</span>
                                        <span class="check"></span>
                                    </li>
                                    <li class="plan-table-item">
                                        <span>Unlimited Revisions</span>
                                        <span class="check"></span>
                                    </li>
                                    <li class="plan-table-item">
                                        <span>Same Day Response <span class="tooltip" title="With our Same Day response, expect your project to be added to the queue right away regardless of the time of day you post it. If there are any questions the team member or Project Manager usually asks within the first few hours, so there are no delay."></span></span>
                                        <span class="check"></span>
                                    </li>
                                    <li class="plan-table-item">
                                        <span>Premium Stock Photos <span class="tooltip" title="We use premium stock photos from Depositphotos.com"></span></span>
                                        <span class="check"></span>
                                    </li>
                                    <li class="plan-table-item">
                                        <span>Premium Stock Footage <span class="tooltip" title="We use premium stock footage from storyblocks.com"></span></span>
                                        <span><span class="check"></span></span>
                                    </li>
                                    <li class="plan-table-item">
                                        <span>Dedicated Project Manager <span class="tooltip" title="With your dedicated Project Manager you can expect fast responses to any questions or concerns you have about projects or anything else."></span></span>
                                        <span class="check"></span>
                                    </li>
                                    <li class="plan-table-item">
                                        <span>14-Day Money Back Guarantee <span class="tooltip" title="We offer a rock-solid 14-Day Money Back Guarantee for new customers that allows you to experience the service first-hand."></span></span>
                                        <span class="check"></span>
                                    </li>
                                    <li class="plan-table-item">
                                        <span>No contract. Cancel anytime</span>
                                        <span class="check"></span>
                                    </li>
                                </ul>
                                <h4 class="plan-table-title">Workflow</h4>
                                <ul class="plan-table-list">
                                    <li class="plan-table-item">
                                        <span>Users <span class="tooltip" title="Collaborate quickly and efficiently by adding up to 20 additional users or clients to your account. Give them permissions that allow them to access files, projects and more."></span></span>
                                        <span>5</span>
                                    </li>
                                    <li class="plan-table-item">
                                        <span>Active Projects <span class="tooltip" title="Add as many projects as you would like to your queue and we will work through them two at a time. This is perfect for agencies and larger companies that need a lot of work done and want to prepare projects in batches."></span></span>
                                        <span>1</span>
                                    </li>
                                    <li class="plan-table-item">
                                        <span>Revision Queue <span class="tooltip" title="Every Active Project comes with a Revision Queue. This means that once an Active Project’s  initial draft is sent for review, and you request a change, it’s moved to the Revision Queue, and a new pending project is started. You can have either one Active Project and one Revision Queue project or two Revision Queue projects at any given time."></span></span>
                                        <span class="check"></span>
                                    </li>
                                    <li class="plan-table-item">
                                        <span>Brand "Buckets" <span class="tooltip" title="Use our brand buckets to upload your or your clients branding material and marketing assets, and then easily attach it to any project you wish with one click."></span></span>
                                        <span>5</span>
                                    </li>
                                    <li class="plan-table-item">
                                        <span>Custom Template Library <span class="tooltip" title="Get access to a custom template library. Custom Illustrations, icons, web pages, and more are uploaded on a weekly basis. All work is custom created by the creatives here at Flocksy."></span></span>
                                        <span class="check"></span>
                                    </li>
                                    <li class="plan-table-item">
                                        <span>Option to Create Projects via Email <span class="tooltip" title="You have the option to start projects via email or by emailing “newproject@flocksy.com” when you have an active account. The projects will automatically be added to your queue. You can also start them within your Flocksy account."></span></span>
                                        <span><span class="close"></span></span>
                                    </li>
                                    <li class="plan-table-item">
                                        <span>Option to Reply to Comments via Email <span class="tooltip" title="You have the option to reply to comments via email by simply replying to the notification you receive and it will be posted in the project. You can also reply within your account."></span></span>
                                        <span><span class="close"></span></span>
                                    </li>
                                </ul>
                                <h4 class="plan-table-title">All teams included</h4>
                                <ul class="plan-table-list">
                                    <li class="plan-table-item">
                                        <span>Graphic Design Team <br><span class="subtext">24 hour turnaround*</span>  <span class="tooltip" title="Most projects are completed within 24 hours once activated, but in some cases can take more time, depending on the project’s complexity. The team works Monday-Friday."></span></span>
                                        <span class="check"></span>
                                    </li>
                                    <li class="plan-table-item">
                                        <span>Video Editing & Creation Team <br><span class="subtext js-tooltip" title="Most projects are completed within 24–48 hours once started, but some can take longer depending on what’s needed. The team works Monday-Friday.">24-48 hour turnaround*</span>  <span class="tooltip" title="Most of these projects are completed within 24–48 hours once the project is started. Complex projects or advanced editing can take longer. The team works Monday-Friday."></span></span>
                                        <span><span class="close"></span></span>
                                    </li>
                                    <li class="plan-table-item">
                                        <span>USA-Based Copywriting Team <br><span class="subtext">24 hour turnaround*</span> <span class="tooltip" title=" The estimated turnaround is 24 hours once started. Some projects can take longer depending on what’s needed. The team works Monday-Friday."></span></span>
                                        <span><span class="check"></span></span>
                                    </li>
                                    <li class="plan-table-item">
                                        <span>Custom Illustrations <br><span class="subtext js-tooltip" title="Most projects are completed within 24–48 hours once started, but some can take longer depending on what’s needed. The team works Monday-Friday.">24-48 hour turnaround*</span>  <span class="tooltip" title="Most projects are completed within 24–48 hours once started, but some can take longer depending on what’s needed. The team works Monday-Friday."></span></span>
                                        <span><span class="check"></span></span>
                                    </li>
                                    <li class="plan-table-item">
                                        <span>Voice-over and Audio Team <br><span class="subtext">24 hour turnaround*</span> <span class="tooltip" title="Most of these projects are completed within 24 hours once the project is activated, although some larger requests can take more time. The team works Monday-Friday."></span></span>
                                        <span><span class="close"></span></span>
                                    </li>
                                    <li class="plan-table-item">
                                        <span>Animated GIFs <br><span class="subtext">24 hour turnaround*</span> <span class="tooltip" title="The estimated turnaround is 24 hours once the project is activated, but is sometimes a bit longer for more complex requests. The team works Monday-Friday."></span></span>
                                        <span><span class="close"></span></span>
                                    </li>
                                    <li class="plan-table-item">
                                        <span>Website & App Design <br><span class="subtext js-tooltip" title="The majority of projects are completed within 48-72 hours once started, but some can take longer depending on what’s needed. The team works Monday-Friday. <b>This only includes design of the UI. We do not provide the actual coding of the pages.</b>">48-72 hour turnaround*</span>  <span class="tooltip" title="The majority of projects are completed within 48-72 hours once started, but some can take longer depending on what’s needed. The team works Monday-Friday. <b>This only includes design of the UI. We do not provide the actual coding of the pages.</b>"></span></span>
                                        <span><span class="close"></span></span>
                                    </li>
                                </ul>
                                <div class="footer-btn">
                                    <a href="/signup" class="btn no-animate">Select Plan</a>
                                </div>
                            </div>
                        </div>
                        <table class="table-desktop plan-table-second four-columns" style="display: none">
                            <thead>
                            <tr>
                                <th></th>
                                <th></th>
                                <th>
                                    <div class="plan-table-header">
                                        <div class="table-header-head">
                                            <div class="table-title-block">The Access Plan</div>
                                            <div class="plan-tooltip">
                                                <span class="tooltip" title="Perfect for larger companies or agencies that need the full suite of Flocksy services and more projects done per month. Get double the output, plus advanced graphics, illustration, and audio services!"></span>
                                            </div>
                                        </div>
                                        <div class="table-header-body">
                                            <div class="table-price-block">
                                                $895.50<span>/Month</span>
                                            </div>
                                            <div class="all-price-block"><strong>$2,686.50</strong> billed quarterly</div>
                                            <div class="save-price-block">$298.50 savings</div>
                                            <a href="/signup" class="btn btn-green no-animate">Select Plan</a>
                                        </div>
                                    </div>
                                </th>
                                <th>
                                    <div class="plan-table-header">
                                        <div class="table-header-head">
                                            <div class="table-title-block">The Team Plan</div>
                                            <div class="plan-tooltip">
                                                <span class="tooltip tooltip-right" title="Perfect for small- to medium-sized companies that want to expand their pool of visual creators. Also ideal for marketing agencies that need to outsource creative work!"></span>
                                            </div>
                                        </div>
                                        <div class="table-header-body">
                                            <div class="table-price-block">
                                                $445.50<span>/Month</span>
                                            </div>
                                            <div class="all-price-block"><strong>$1,336.50</strong> billed quarterly</div>
                                            <div class="save-price-block">$148.50 savings</div>
                                            <a href="/signup" class="btn no-animate">Select Plan</a>
                                        </div>
                                    </div>
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td></td>
                                <td>Unlimited Projects</td>
                                <td><span class="check"></span></td>
                                <td><span class="check"></span></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Unlimited Revisions</td>
                                <td><span class="check"></span></td>
                                <td><span class="check"></span></td>
                            </tr>
                            <tr>
                                <td><span class="tooltip" title="With our Same Day response, expect your project to be added to the queue right away regardless of the time of day you post it. If there are any questions the team member or Project Manager usually asks within the first few hours, so there are no delay. "></span></td>
                                <td>Same Day Response</td>
                                <td><span class="check"></span></td>
                                <td><span class="check"></span></td>
                            </tr>
                            <tr>
                                <td><span class="tooltip" title="We use premium stock photos from Depositphotos.com"></span></td>
                                <td>Premium Stock Photos</td>
                                <td><span class="check"></span></td>
                                <td><span class="check"></span></td>
                            </tr>
                            <tr>
                                <td><span class="tooltip" title="We use premium stock footage from storyblocks.com"></span></td>
                                <td>Premium Stock Footage</td>
                                <td><span class="check"></span></td>
                                <td><span class="check"></span></td>
                            </tr>
                            <tr>
                                <td><span class="tooltip" title="With your dedicated Project Manager you can expect fast responses to any questions or concerns you have about projects or anything else. "></span></td>
                                <td>Dedicated Project Manager</td>
                                <td><span class="check"></span></td>
                                <td><span class="check"></span></td>
                            </tr>
                            <tr>
                                <td><span class="tooltip" title="We offer a rock-solid 14-Day Money Back Guarantee for new customers that allows you to experience the service first-hand."></span></td>
                                <td>14-Day Money Back Guarantee</td>
                                <td><span class="check"></span></td>
                                <td><span class="check"></span></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>No contract. Cancel anytime</td>
                                <td><span class="check"></span></td>
                                <td><span class="check"></span></td>
                            </tr>
                            <tr><th colspan="4">Workflow</th></tr>
                            <tr>
                                <td><span class="tooltip" title="Collaborate quickly and efficiently by adding up to 20 additional users or clients to your account. Give them permissions that allows them to access projects, files, and more. "></span></td>
                                <td>Users</td>
                                <td>20</td>
                                <td>5</td>
                            </tr>
                            <tr>
                                <td><span class="tooltip" title="Add as many projects as you would like to your queue and we will work through them two at a time. This is perfect for agencies and larger companies that need a lot of work done and want to prepare projects in batches. "></span></td>
                                <td>Active Projects</td>
                                <td>2</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td><span class="tooltip" title="Every Active Project comes with a Revision Queue. This means that once an Active Project’s  initial draft is sent for review, and you request a change, it’s moved to the Revision Queue, and a new pending project is started. You can have either one Active Project and one Revision Queue project or two Revision Queue projects at any given time. "></span></td>
                                <td>Revision Queue</td>
                                <td><span class="check"></span></td>
                                <td><span class="check"></span></td>
                            </tr>
                            <tr>
                                <td><span class="tooltip" title="Use our brand buckets to upload your or your clients branding material and marketing assets, and then easily attach it to any project you wish with one click. "></span></td>
                                <td>Brand "Buckets"</td>
                                <td>Unlimited</td>
                                <td>5</td>
                            </tr>
                            <tr>
                                <td><span class="tooltip" title="Get access to a custom template library. Custom Illustrations, icons, web pages, and more are uploaded on a weekly basis. All work is custom created by the creatives here at Flocksy. "></span></td>
                                <td>Custom Template Library</td>
                                <td><span class="check"></span></td>
                                <td><span class="check"></span></td>
                            </tr>
                            <tr>
                                <td><span class="tooltip" title="You have the option to start projects via email or by emailing “newproject@flocksy.com” when you have an active account. The projects will automatically be added to your queue. You can also start them within your Flocksy account."></span></td>
                                <td>Option to Create Projects via Email</td>
                                <td><span class="check"></span></td>
                                <td><span class="close"></span></td>
                            </tr>
                            <tr>
                                <td><span class="tooltip" title="You have the option to reply to comments via email by simply replying to the notification you receive and it will be posted in the project. You can also reply within your account. "></span></td>
                                <td>Option to Reply to Comments via Email</td>
                                <td><span class="check"></span></td>
                                <td><span class="close"></span></td>
                            </tr>
                            <tr><th colspan="4">All teams included</th></tr>
                            <tr>
                                <td><span class="tooltip" title="Most projects are completed within 24 hours once activated, but in some cases can take more time, depending on the project’s complexity. The team works Monday-Friday."></span></td>
                                <td>Graphic Design Team <br><span class="subtext js-tooltip" title="Most projects are completed within 24 hours once activated, but in some cases can take more time, depending on the project’s complexity. The team works Monday-Friday.">24 hour turnaround*</span></td>
                                <td><span class="check"></span></td>
                                <td><span class="check"></span></td>
                            </tr>
                            <tr>
                                <td><span class="tooltip" title="Most of these projects are completed within 24–48 hours once the project is started. Complex projects or advanced editing can take longer. The team works Monday-Friday."></span></td>
                                <td>Video Editing and Creation Team <br><span class="subtext js-tooltip" title="Most of these projects are completed within 24–48 hours once the project is started. Complex projects or advanced editing can take longer. The team works Monday-Friday.">24-48 hour turnaround*</span></td>
                                <td><span class="check"></span></td>
                                <td><span class="close"></span></td>
                            </tr>
                            <tr>
                                <td><span class="tooltip" title=" The estimated turnaround is 24 hours once started. Some projects can take longer depending on what’s needed. The team works Monday-Friday."></span></td>
                                <td>USA-Based Copywriting Team <br><span class="subtext js-tooltip" title="The estimated turnaround is 24 hours once started. Some projects can take longer depending on what’s needed. The team works Monday-Friday.">24 hour turnaround*</span></td>
                                <td><span class="check"></span></td>
                                <td><span class="check"></span></td>
                            </tr>
                            <tr>
                                <td><span class="tooltip" title="Most projects are completed within 24–48 hours once started, but some can take longer depending on what’s needed. The team works Monday-Friday."></span></td>
                                <td>Custom Illustrations <br><span class="subtext js-tooltip" title="Most projects are completed within 24–48 hours once started, but some can take longer depending on what’s needed. The team works Monday-Friday.">24-48 hour turnaround*</span></td>
                                <td><span class="check"></span></td>
                                <td><span class="check"></span></td>
                            </tr>
                            <tr>
                                <td><span class="tooltip" title="Most of these projects are completed within 24 hours once the project is activated, although some larger requests can take more time. The team works Monday-Friday."></span></td>
                                <td>Voice-over and Audio Team <br><span class="subtext js-tooltip" title="Most of these projects are completed within 24 hours once the project is activated, although some larger requests can take more time. The team works Monday-Friday.">24 hour turnaround*</span></td>
                                <td><span class="check"></span></td>
                                <td><span class="close"></span></td>
                            </tr>
                            <tr>
                                <td><span class="tooltip" title="The estimated turnaround is 24 hours once the project is activated, but is sometimes a bit longer for more complex requests. The team works Monday-Friday."></span></td>
                                <td>Animated GIFs <br><span class="subtext js-tooltip" title="The estimated turnaround is 24 hours once the project is activated, but is sometimes a bit longer for more complex requests. The team works Monday-Friday.">24 hour turnaround*</span></td>
                                <td><span class="check"></span></td>
                                <td><span class="close"></span></td>
                            </tr>
                            <tr>
                                <td><span class="tooltip" title="The majority of projects are completed within 48-72 hours once started, but some can take longer depending on what’s needed. The team works Monday-Friday. <b>This only includes design of the UI. We do not provide the actual coding of the pages.</b>"></span></td>
                                <td>Website & App Design <br><span class="subtext js-tooltip" title="The majority of projects are completed within 48-72 hours once started, but some can take longer depending on what’s needed. The team works Monday-Friday. <b>This only includes design of the UI. We do not provide the actual coding of the pages.</b>">48-72 hour turnaround*</span></td>
                                <td><span class="check"></span></td>
                                <td><span class="close"></span></td>
                            </tr>
                            </tbody>
                            <tfoot>
                            <tr>
                                <th></th>
                                <th></th>
                                <th>
                                    <a href="/signup" class="btn btn-green no-animate">Select Plan</a>
                                </th>
                                <th>
                                    <a href="/signup" class="btn no-animate">Select Plan</a>
                                </th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                    <div id="plan-tab-03">
                        <div class="table-phone plan-table-second">
                            <div class="plan-table-col">
                                <div class="plan-table-header">
                                    <div class="table-header-head">
                                        <div class="table-title-block">The Access Plan</div>
                                        <div class="plan-tooltip">
                                            <span class="tooltip" title="Perfect for larger companies or agencies that need the full suite of Flocksy services and more projects done per month. Get double the output, plus advanced graphics, illustration, and audio services!"></span>
                                        </div>
                                    </div>
                                    <div class="table-header-body">
                                        <div class="table-price-block">
                                            $845.75<span>/Month</span>
                                        </div>
                                        <div class="all-price-block"><strong>$10,149</strong> billed yearly</div>
                                        <div class="save-price-block">$$1,791 savings</div>
                                        <a href="/schedule-demo" class="btn btn-green no-animate">Book Consultation</a>
                                    </div>
                                </div>
                                <ul class="plan-table-list">
                                    <li class="plan-table-item">
                                        <span>Unlimited Projects</span>
                                        <span class="check"></span>
                                    </li>
                                    <li class="plan-table-item">
                                        <span>Unlimited Revisions</span>
                                        <span class="check"></span>
                                    </li>
                                    <li class="plan-table-item">
                                        <span>Same Day Response <span class="tooltip" title="With our Same Day response, expect your project to be added to the queue right away regardless of the time of day you post it. If there are any questions the team member or Project Manager usually asks within the first few hours, so there are no delay."></span></span>
                                        <span class="check"></span>
                                    </li>
                                    <li class="plan-table-item">
                                        <span>Premium Stock Photos <span class="tooltip" title="We use premium stock photos from Depositphotos.com"></span></span>
                                        <span class="check"></span>
                                    </li>
                                    <li class="plan-table-item">
                                        <span>Premium Stock Footage <span class="tooltip" title="We use premium stock footage from storyblocks.com"></span></span>
                                        <span class="check"></span>
                                    </li>
                                    <li class="plan-table-item">
                                        <span>Dedicated Project Manager <span class="tooltip" title="With your dedicated Project Manager you can expect fast responses to any questions or concerns you have about projects or anything else."></span></span>
                                        <span class="check"></span>
                                    </li>
                                    <li class="plan-table-item">
                                        <span>14-Day Money Back Guarantee <span class="tooltip" title="We offer a rock-solid 14-Day Money Back Guarantee for new customers that allows you to experience the service first-hand."></span></span>
                                        <span class="check"></span>
                                    </li>
                                    <li class="plan-table-item">
                                        <span>No contract. Cancel anytime</span>
                                        <span class="check"></span>
                                    </li>
                                </ul>
                                <h4 class="plan-table-title">Workflow</h4>
                                <ul class="plan-table-list">
                                    <li class="plan-table-item">
                                        <span>Users <span class="tooltip" title="Collaborate quickly and efficiently by adding up to 20 additional users or clients to your account. Give them permissions that allow them to access files, projects and more."></span></span>
                                        <span>20</span>
                                    </li>
                                    <li class="plan-table-item">
                                        <span>Active Projects <span class="tooltip" title="Add as many projects as you would like to your queue and we will work through them two at a time. This is perfect for agencies and larger companies that need a lot of work done and want to prepare projects in batches."></span></span>
                                        <span>2</span>
                                    </li>
                                    <li class="plan-table-item">
                                        <span>Revision Queue <span class="tooltip" title="Every Active Project comes with a Revision Queue. This means that once an Active Project’s  initial draft is sent for review, and you request a change, it’s moved to the Revision Queue, and a new pending project is started. You can have either one Active Project and one Revision Queue project or two Revision Queue projects at any given time."></span></span>
                                        <span class="check"></span>
                                    </li>
                                    <li class="plan-table-item">
                                        <span>Brand "Buckets" <span class="tooltip" title="Use our brand buckets to upload your or your clients branding material and marketing assets, and then easily attach it to any project you wish with one click."></span></span>
                                        <span>Unlimited</span>
                                    </li>
                                    <li class="plan-table-item">
                                        <span>Custom Template Library <span class="tooltip" title="Get access to a custom template library. Custom Illustrations, icons, web pages, and more are uploaded on a weekly basis. All work is custom created by the creatives here at Flocksy."></span></span>
                                        <span class="check"></span>
                                    </li>
                                    <li class="plan-table-item">
                                        <span>Option to Create Projects via Email <span class="tooltip" title="You have the option to start projects via email or by emailing “newproject@flocksy.com” when you have an active account. The projects will automatically be added to your queue. You can also start them within your Flocksy account."></span></span>
                                        <span class="check"></span>
                                    </li>
                                    <li class="plan-table-item">
                                        <span>Option to Reply to Comments via Email <span class="tooltip" title="You have the option to reply to comments via email by simply replying to the notification you receive and it will be posted in the project. You can also reply within your account."></span></span>
                                        <span class="check"></span>
                                    </li>
                                </ul>
                                <h4 class="plan-table-title">All teams included</h4>
                                <ul class="plan-table-list">
                                    <li class="plan-table-item">
                                        <span>Graphic Design Team <br><span class="subtext">24 hour turnaround*</span>  <span class="tooltip" title="Most projects are completed within 24 hours once activated, but in some cases can take more time, depending on the project’s complexity. The team works Monday-Friday."></span></span>
                                        <span class="check"></span>
                                    </li>
                                    <li class="plan-table-item">
                                        <span>Video Editing & Creation Team <br><span class="subtext js-tooltip" title="Most projects are completed within 24–48 hours once started, but some can take longer depending on what’s needed. The team works Monday-Friday.">24-48 hour turnaround*</span>  <span class="tooltip" title="Most of these projects are completed within 24–48 hours once the project is started. Complex projects or advanced editing can take longer. The team works Monday-Friday."></span></span>
                                        <span class="check"></span>
                                    </li>
                                    <li class="plan-table-item">
                                        <span>USA-Based Copywriting Team <br><span class="subtext">24 hour turnaround*</span> <span class="tooltip" title=" The estimated turnaround is 24 hours once started. Some projects can take longer depending on what’s needed. The team works Monday-Friday."></span></span>
                                        <span class="check"></span>
                                    </li>
                                    <li class="plan-table-item">
                                        <span>Custom Illustrations <br><span class="subtext js-tooltip" title="Most projects are completed within 24–48 hours once started, but some can take longer depending on what’s needed. The team works Monday-Friday.">24-48 hour turnaround*</span>  <span class="tooltip" title="Most projects are completed within 24–48 hours once started, but some can take longer depending on what’s needed. The team works Monday-Friday."></span></span>
                                        <span class="check"></span>
                                    </li>
                                    <li class="plan-table-item">
                                        <span>Voice-over and Audio Team <br><span class="subtext">24 hour turnaround*</span> <span class="tooltip" title="Most of these projects are completed within 24 hours once the project is activated, although some larger requests can take more time. The team works Monday-Friday."></span></span>
                                        <span class="check"></span>
                                    </li>
                                    <li class="plan-table-item">
                                        <span>Animated GIFs <br><span class="subtext">24 hour turnaround*</span> <span class="tooltip" title="The estimated turnaround is 24 hours once the project is activated, but is sometimes a bit longer for more complex requests. The team works Monday-Friday."></span></span>
                                        <span class="check"></span>
                                    </li>
                                    <li class="plan-table-item">
                                        <span>Website & App Design <br><span class="subtext js-tooltip" title="The majority of projects are completed within 48-72 hours once started, but some can take longer depending on what’s needed. The team works Monday-Friday. <b>This only includes design of the UI. We do not provide the actual coding of the pages.</b>">48-72 hour turnaround*</span>  <span class="tooltip" title="The majority of projects are completed within 48-72 hours once started, but some can take longer depending on what’s needed. The team works Monday-Friday. <b>This only includes design of the UI. We do not provide the actual coding of the pages.</b>"></span></span>
                                        <span class="check"></span>
                                    </li>
                                </ul>
                                <div class="footer-btn">
                                    <a href="/schedule-demo" class="btn btn-green no-animate">Book Consultation</a>
                                </div>
                            </div>
                            <div class="plan-table-col">
                                <div class="plan-table-header">
                                    <div class="table-header-head">
                                        <div class="table-title-block">The Team Plan</div>
                                        <div class="plan-tooltip">
                                            <span class="tooltip" title="Perfect for small- to medium-sized companies that want to expand their pool of visual creators. Also ideal for marketing agencies that need to outsource creative work!"></span>
                                        </div>
                                    </div>
                                    <div class="table-header-body">
                                        <div class="table-price-block">
                                            $420.75<span>/Month</span>
                                        </div>
                                        <div class="all-price-block"><strong>$5,049</strong> billed yearly</div>
                                        <div class="save-price-block">$891 savings </div>
                                        <a href="/schedule-demo" class="btn no-animate">Book Consultation</a>
                                    </div>
                                </div>
                                <ul class="plan-table-list">
                                    <li class="plan-table-item">
                                        <span>Unlimited Projects</span>
                                        <span class="check"></span>
                                    </li>
                                    <li class="plan-table-item">
                                        <span>Unlimited Revisions</span>
                                        <span class="check"></span>
                                    </li>
                                    <li class="plan-table-item">
                                        <span>Same Day Response <span class="tooltip" title="With our Same Day response, expect your project to be added to the queue right away regardless of the time of day you post it. If there are any questions the team member or Project Manager usually asks within the first few hours, so there are no delay."></span></span>
                                        <span class="check"></span>
                                    </li>
                                    <li class="plan-table-item">
                                        <span>Premium Stock Photos <span class="tooltip" title="We use premium stock photos from Depositphotos.com"></span></span>
                                        <span class="check"></span>
                                    </li>
                                    <li class="plan-table-item">
                                        <span>Premium Stock Footage <span class="tooltip" title="We use premium stock footage from storyblocks.com"></span></span>
                                        <span><span class="check"></span></span>
                                    </li>
                                    <li class="plan-table-item">
                                        <span>Dedicated Project Manager <span class="tooltip" title="With your dedicated Project Manager you can expect fast responses to any questions or concerns you have about projects or anything else."></span></span>
                                        <span class="check"></span>
                                    </li>
                                    <li class="plan-table-item">
                                        <span>14-Day Money Back Guarantee <span class="tooltip" title="We offer a rock-solid 14-Day Money Back Guarantee for new customers that allows you to experience the service first-hand."></span></span>
                                        <span class="check"></span>
                                    </li>
                                    <li class="plan-table-item">
                                        <span>No contract. Cancel anytime</span>
                                        <span class="check"></span>
                                    </li>
                                </ul>
                                <h4 class="plan-table-title">Workflow</h4>
                                <ul class="plan-table-list">
                                    <li class="plan-table-item">
                                        <span>Users <span class="tooltip" title="Collaborate quickly and efficiently by adding up to 20 additional users or clients to your account. Give them permissions that allow them to access files, projects and more."></span></span>
                                        <span>5</span>
                                    </li>
                                    <li class="plan-table-item">
                                        <span>Active Projects <span class="tooltip" title="Add as many projects as you would like to your queue and we will work through them two at a time. This is perfect for agencies and larger companies that need a lot of work done and want to prepare projects in batches."></span></span>
                                        <span>1</span>
                                    </li>
                                    <li class="plan-table-item">
                                        <span>Revision Queue <span class="tooltip" title="Every Active Project comes with a Revision Queue. This means that once an Active Project’s  initial draft is sent for review, and you request a change, it’s moved to the Revision Queue, and a new pending project is started. You can have either one Active Project and one Revision Queue project or two Revision Queue projects at any given time."></span></span>
                                        <span class="check"></span>
                                    </li>
                                    <li class="plan-table-item">
                                        <span>Brand "Buckets" <span class="tooltip" title="Use our brand buckets to upload your or your clients branding material and marketing assets, and then easily attach it to any project you wish with one click."></span></span>
                                        <span>5</span>
                                    </li>
                                    <li class="plan-table-item">
                                        <span>Custom Template Library <span class="tooltip" title="Get access to a custom template library. Custom Illustrations, icons, web pages, and more are uploaded on a weekly basis. All work is custom created by the creatives here at Flocksy."></span></span>
                                        <span class="check"></span>
                                    </li>
                                    <li class="plan-table-item">
                                        <span>Option to Create Projects via Email <span class="tooltip" title="You have the option to start projects via email or by emailing “newproject@flocksy.com” when you have an active account. The projects will automatically be added to your queue. You can also start them within your Flocksy account."></span></span>
                                        <span><span class="close"></span></span>
                                    </li>
                                    <li class="plan-table-item">
                                        <span>Option to Reply to Comments via Email <span class="tooltip" title="You have the option to reply to comments via email by simply replying to the notification you receive and it will be posted in the project. You can also reply within your account."></span></span>
                                        <span><span class="close"></span></span>
                                    </li>
                                </ul>
                                <h4 class="plan-table-title">All teams included</h4>
                                <ul class="plan-table-list">
                                    <li class="plan-table-item">
                                        <span>Graphic Design Team <br><span class="subtext">24 hour turnaround*</span>  <span class="tooltip" title="Most projects are completed within 24 hours once activated, but in some cases can take more time, depending on the project’s complexity. The team works Monday-Friday."></span></span>
                                        <span class="check"></span>
                                    </li>
                                    <li class="plan-table-item">
                                        <span>Video Editing & Creation Team <br><span class="subtext js-tooltip" title="Most projects are completed within 24–48 hours once started, but some can take longer depending on what’s needed. The team works Monday-Friday.">24-48 hour turnaround*</span>  <span class="tooltip" title="Most of these projects are completed within 24–48 hours once the project is started. Complex projects or advanced editing can take longer. The team works Monday-Friday."></span></span>
                                        <span><span class="close"></span></span>
                                    </li>
                                    <li class="plan-table-item">
                                        <span>USA-Based Copywriting Team <br><span class="subtext">24 hour turnaround*</span> <span class="tooltip" title=" The estimated turnaround is 24 hours once started. Some projects can take longer depending on what’s needed. The team works Monday-Friday."></span></span>
                                        <span><span class="check"></span></span>
                                    </li>
                                    <li class="plan-table-item">
                                        <span>Custom Illustrations <br><span class="subtext js-tooltip" title="Most projects are completed within 24–48 hours once started, but some can take longer depending on what’s needed. The team works Monday-Friday.">24-48 hour turnaround*</span>  <span class="tooltip" title="Most projects are completed within 24–48 hours once started, but some can take longer depending on what’s needed. The team works Monday-Friday."></span></span>
                                        <span><span class="check"></span></span>
                                    </li>
                                    <li class="plan-table-item">
                                        <span>Voice-over and Audio Team <br><span class="subtext">24 hour turnaround*</span> <span class="tooltip" title="Most of these projects are completed within 24 hours once the project is activated, although some larger requests can take more time. The team works Monday-Friday."></span></span>
                                        <span><span class="close"></span></span>
                                    </li>
                                    <li class="plan-table-item">
                                        <span>Animated GIFs <br><span class="subtext">24 hour turnaround*</span> <span class="tooltip" title="The estimated turnaround is 24 hours once the project is activated, but is sometimes a bit longer for more complex requests. The team works Monday-Friday."></span></span>
                                        <span><span class="close"></span></span>
                                    </li>
                                    <li class="plan-table-item">
                                        <span>Website & App Design <br><span class="subtext js-tooltip" title="The majority of projects are completed within 48-72 hours once started, but some can take longer depending on what’s needed. The team works Monday-Friday. <b>This only includes design of the UI. We do not provide the actual coding of the pages.</b>">48-72 hour turnaround*</span>  <span class="tooltip" title="The majority of projects are completed within 48-72 hours once started, but some can take longer depending on what’s needed. The team works Monday-Friday. <b>This only includes design of the UI. We do not provide the actual coding of the pages.</b>"></span></span>
                                        <span><span class="close"></span></span>
                                    </li>
                                </ul>
                                <div class="footer-btn">
                                    <a href="/schedule-demo" class="btn no-animate">Book Consultation</a>
                                </div>
                            </div>
                        </div>
                        <table class="table-desktop plan-table-second four-columns" style="display: none">
                            <thead>
                            <tr>
                                <th></th>
                                <th></th>
                                <th>
                                    <div class="plan-table-header">
                                        <div class="table-header-head">
                                            <div class="table-title-block">The Access Plan</div>
                                            <div class="plan-tooltip">
                                                <span class="tooltip" title="Perfect for larger companies or agencies that need the full suite of Flocksy services and more projects done per month. Get double the output, plus advanced graphics, illustration, and audio services!"></span>
                                            </div>
                                        </div>
                                        <div class="table-header-body">
                                            <div class="table-price-block">
                                                $845.75<span>/Month</span>
                                            </div>
                                            <div class="all-price-block"><strong>$10,149</strong> billed yearly</div>
                                            <div class="save-price-block">$1,791 savings</div>
                                            <a href="/schedule-demo" class="btn btn-green no-animate">Book Consultation</a>
                                        </div>
                                    </div>
                                </th>
                                <th>
                                    <div class="plan-table-header">
                                        <div class="table-header-head">
                                            <div class="table-title-block">The Team Plan</div>
                                            <div class="plan-tooltip">
                                                <span class="tooltip tooltip-right" title="Perfect for small- to medium-sized companies that want to expand their pool of visual creators. Also ideal for marketing agencies that need to outsource creative work!"></span>
                                            </div>
                                        </div>
                                        <div class="table-header-body">
                                            <div class="table-price-block">
                                                $420.75<span>/Month</span>
                                            </div>
                                            <div class="all-price-block"><strong>$5,049</strong> billed yearly</div>
                                            <div class="save-price-block">$891 savings</div>
                                            <a href="/schedule-demo" class="btn no-animate">Book Consultation</a>
                                        </div>
                                    </div>
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td></td>
                                <td>Unlimited Projects</td>
                                <td><span class="check"></span></td>
                                <td><span class="check"></span></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Unlimited Revisions</td>
                                <td><span class="check"></span></td>
                                <td><span class="check"></span></td>
                            </tr>
                            <tr>
                                <td><span class="tooltip" title="With our Same Day response, expect your project to be added to the queue right away regardless of the time of day you post it. If there are any questions the team member or Project Manager usually asks within the first few hours, so there are no delay. "></span></td>
                                <td>Same Day Response</td>
                                <td><span class="check"></span></td>
                                <td><span class="check"></span></td>
                            </tr>
                            <tr>
                                <td><span class="tooltip" title="We use premium stock photos from Depositphotos.com"></span></td>
                                <td>Premium Stock Photos</td>
                                <td><span class="check"></span></td>
                                <td><span class="check"></span></td>
                            </tr>
                            <tr>
                                <td><span class="tooltip" title="We use premium stock footage from storyblocks.com"></span></td>
                                <td>Premium Stock Footage</td>
                                <td><span class="check"></span></td>
                                <td><span class="check"></span></td>
                            </tr>
                            <tr>
                                <td><span class="tooltip" title="With your dedicated Project Manager you can expect fast responses to any questions or concerns you have about projects or anything else. "></span></td>
                                <td>Dedicated Project Manager</td>
                                <td><span class="check"></span></td>
                                <td><span class="check"></span></td>
                            </tr>
                            <tr>
                                <td><span class="tooltip" title="We offer a rock-solid 14-Day Money Back Guarantee for new customers that allows you to experience the service first-hand."></span></td>
                                <td>14-Day Money Back Guarantee</td>
                                <td><span class="check"></span></td>
                                <td><span class="check"></span></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>No contract. Cancel anytime</td>
                                <td><span class="check"></span></td>
                                <td><span class="check"></span></td>
                            </tr>
                            <tr><th colspan="4">Workflow</th></tr>
                            <tr>
                                <td><span class="tooltip" title="Collaborate quickly and efficiently by adding up to 20 additional users or clients to your account. Give them permissions that allows them to access projects, files, and more. "></span></td>
                                <td>Users</td>
                                <td>20</td>
                                <td>5</td>
                            </tr>
                            <tr>
                                <td><span class="tooltip" title="Add as many projects as you would like to your queue and we will work through them two at a time. This is perfect for agencies and larger companies that need a lot of work done and want to prepare projects in batches. "></span></td>
                                <td>Active Projects</td>
                                <td>2</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td><span class="tooltip" title="Every Active Project comes with a Revision Queue. This means that once an Active Project’s  initial draft is sent for review, and you request a change, it’s moved to the Revision Queue, and a new pending project is started. You can have either one Active Project and one Revision Queue project or two Revision Queue projects at any given time. "></span></td>
                                <td>Revision Queue</td>
                                <td><span class="check"></span></td>
                                <td><span class="check"></span></td>
                            </tr>
                            <tr>
                                <td><span class="tooltip" title="Use our brand buckets to upload your or your clients branding material and marketing assets, and then easily attach it to any project you wish with one click. "></span></td>
                                <td>Brand "Buckets"</td>
                                <td>Unlimited</td>
                                <td>5</td>
                            </tr>
                            <tr>
                                <td><span class="tooltip" title="Get access to a custom template library. Custom Illustrations, icons, web pages, and more are uploaded on a weekly basis. All work is custom created by the creatives here at Flocksy. "></span></td>
                                <td>Custom Template Library</td>
                                <td><span class="check"></span></td>
                                <td><span class="check"></span></td>
                            </tr>
                            <tr>
                                <td><span class="tooltip" title="You have the option to start projects via email or by emailing “newproject@flocksy.com” when you have an active account. The projects will automatically be added to your queue. You can also start them within your Flocksy account."></span></td>
                                <td>Option to Create Projects via Email</td>
                                <td><span class="check"></span></td>
                                <td><span class="close"></span></td>
                            </tr>
                            <tr>
                                <td><span class="tooltip" title="You have the option to reply to comments via email by simply replying to the notification you receive and it will be posted in the project. You can also reply within your account. "></span></td>
                                <td>Option to Reply to Comments via Email</td>
                                <td><span class="check"></span></td>
                                <td><span class="close"></span></td>
                            </tr>
                            <tr><th colspan="4">All teams included</th></tr>
                            <tr>
                                <td><span class="tooltip" title="Most projects are completed within 24 hours once activated, but in some cases can take more time, depending on the project’s complexity. The team works Monday-Friday."></span></td>
                                <td>Graphic Design Team <br><span class="subtext js-tooltip" title="Most projects are completed within 24 hours once activated, but in some cases can take more time, depending on the project’s complexity. The team works Monday-Friday.">24 hour turnaround*</span></td>
                                <td><span class="check"></span></td>
                                <td><span class="check"></span></td>
                            </tr>
                            <tr>
                                <td><span class="tooltip" title="Most of these projects are completed within 24–48 hours once the project is started. Complex projects or advanced editing can take longer. The team works Monday-Friday."></span></td>
                                <td>Video Editing and Creation Team <br><span class="subtext js-tooltip" title="Most of these projects are completed within 24–48 hours once the project is started. Complex projects or advanced editing can take longer. The team works Monday-Friday.">24-48 hour turnaround*</span></td>
                                <td><span class="check"></span></td>
                                <td><span class="close"></span></td>
                            </tr>
                            <tr>
                                <td><span class="tooltip" title=" The estimated turnaround is 24 hours once started. Some projects can take longer depending on what’s needed. The team works Monday-Friday."></span></td>
                                <td>USA-Based Copywriting Team <br><span class="subtext js-tooltip" title="The estimated turnaround is 24 hours once started. Some projects can take longer depending on what’s needed. The team works Monday-Friday.">24 hour turnaround*</span></td>
                                <td><span class="check"></span></td>
                                <td><span class="check"></span></td>
                            </tr>
                            <tr>
                                <td><span class="tooltip" title="Most projects are completed within 24–48 hours once started, but some can take longer depending on what’s needed. The team works Monday-Friday."></span></td>
                                <td>Custom Illustrations <br><span class="subtext js-tooltip" title="Most projects are completed within 24–48 hours once started, but some can take longer depending on what’s needed. The team works Monday-Friday.">24-48 hour turnaround*</span></td>
                                <td><span class="check"></span></td>
                                <td><span class="check"></span></td>
                            </tr>
                            <tr>
                                <td><span class="tooltip" title="Most of these projects are completed within 24 hours once the project is activated, although some larger requests can take more time. The team works Monday-Friday."></span></td>
                                <td>Voice-over and Audio Team <br><span class="subtext js-tooltip" title="Most of these projects are completed within 24 hours once the project is activated, although some larger requests can take more time. The team works Monday-Friday.">24 hour turnaround*</span></td>
                                <td><span class="check"></span></td>
                                <td><span class="close"></span></td>
                            </tr>
                            <tr>
                                <td><span class="tooltip" title="The estimated turnaround is 24 hours once the project is activated, but is sometimes a bit longer for more complex requests. The team works Monday-Friday."></span></td>
                                <td>Animated GIFs <br><span class="subtext js-tooltip" title="The estimated turnaround is 24 hours once the project is activated, but is sometimes a bit longer for more complex requests. The team works Monday-Friday.">24 hour turnaround*</span></td>
                                <td><span class="check"></span></td>
                                <td><span class="close"></span></td>
                            </tr>
                            <tr>
                                <td><span class="tooltip" title="The majority of projects are completed within 48-72 hours once started, but some can take longer depending on what’s needed. The team works Monday-Friday. <b>This only includes design of the UI. We do not provide the actual coding of the pages.</b>"></span></td>
                                <td>Website & App Design <br><span class="subtext js-tooltip" title="The majority of projects are completed within 48-72 hours once started, but some can take longer depending on what’s needed. The team works Monday-Friday. <b>This only includes design of the UI. We do not provide the actual coding of the pages.</b>">48-72 hour turnaround*</span></td>
                                <td><span class="check"></span></td>
                                <td><span class="close"></span></td>
                            </tr>
                            </tbody>
                            <tfoot>
                            <tr>
                                <th></th>
                                <th></th>
                                <th>
                                    <a href="/schedule-demo" class="btn btn-green no-animate">Book Consultation</a>
                                </th>
                                <th>
                                    <a href="/schedule-demo" class="btn no-animate">Book Consultation</a>
                                </th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>

        </div>

        <div class="values-section">
            <h2 class="title-global-section"><?php echo get_field("value_section_title"); ?></h2>
            <h3 class="subtitle-block"><?php echo get_field("value_section_sub_title"); ?></h3>
            <div class="values-list">

                <?php
                //  $rows=get_field("value_section_items");

                if( have_rows('value_section_items') ) {
                    while( have_rows('value_section_items') ) {
                        the_row();
                        ?>
                        <div class="value-item">
                            <div class="value-item-holder">
                                <div class="number-block"><?php echo get_sub_field('number'); ?></div>
                                <h4 class="title-block"><?php echo get_sub_field('title'); ?></h4>
                                <div class="label-block"><?php echo get_sub_field('label'); ?></div>
                            </div>
                        </div>
                        <?php
                    }
                }

                ?>


            </div>
        </div>

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

        <div class="team-section">
            <h2 class="title-global-section text-center"><?php echo get_field("team_section_title"); ?></h2>
            <div class="member-list">

                <?php
                //    $rows=get_field("team_member_items");
                if( have_rows('team_member_items') ) {
                    while( have_rows('team_member_items') ) {
                        the_row();

                        ?>
                        <div class="member-item">
                            <div class="member-holder">
                                <div class="member-header">
                                    <div class="member-image">
                                        <img src="<?php echo get_sub_field('member_image'); ?>" alt="<?php echo get_sub_field('name'); ?>">
                                    </div>
                                    <div class="member-text">
                                        <h3 class="name-block"><?php echo get_sub_field('name'); ?></h3>
                                        <h4 class="position-block"><?php echo get_sub_field('position'); ?></h4>
                                        <div class="level-block"><?php echo get_sub_field('level'); ?></div>
                                    </div>
                                </div>
                                <ul class="member-info">
                                    <?php
                                    //   $rows1=$row['member_info_items'];
                                    if( have_rows('member_info_items') ) {
                                        $rows_count = 1;
                                        while( have_rows('member_info_items') ) {
                                            the_row();

                                            ?>
                                            <li class="info-item">
                                                <div class="info-title">
                                                    <?php if($rows_count == 1) {?>
                                                        <span class="star-block">5,0</span>

                                                        <?php
                                                    }
                                                    $rows_count++;
                                                    echo get_sub_field('title'); ?></div>
                                                <div class="info-text"><?php echo get_sub_field('textblock'); ?></div>
                                            </li>
                                            <?php
                                        }

                                    }
                                    ?>

                                </ul>
                                <div class="member-footer">
                                    <ul class="skill-list">
                                        <?php
                                        $bfl = explode("\n", str_replace("\r", "", get_sub_field('member_skill_list')));
                                        foreach($bfl as $b)
                                        {
                                            echo "<li>".$b."</li>";
                                        }

                                        ?>
                                    </ul>
                                    <a href="<?php echo get_sub_field('button_link'); ?>" class="btn"><?php echo get_sub_field('button_text'); ?></a>
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
            <?php
            // $find_page = get_page_by_path('portfolios', OBJECT, 'page');
            $portfolios_page_id=FLOCKSY_PORTFOLIO_PAGE_ID;
            ?>
            <div class="accordion-tabs-text-header">
                <h2 class="title-global-section"><?php echo get_field("pf_accordion_tab_title",$portfolios_page_id); ?></h2>
            </div>
            <div class="accordion-tabs-content">
                <ul class="accordion-tab-tabset">
                    <?php

                    //   $rows = get_field('pf_accordion_tab_lists',$portfolios_page_id);

                    if( have_rows('pf_accordion_tab_lists',$portfolios_page_id) ) {
                        $i=1;
                        while( have_rows('pf_accordion_tab_lists',$portfolios_page_id) ) {
                            the_row();
                            ?>
                            <li>
                                <a href="javascript:;" data-tab="#accordion-tabs-<?php echo $i; ?>"><?php echo get_sub_field('pf_accordion_tab_opener'); ?></a>
                            </li>
                            <?php
                            $i++;
                        }
                    }
                    ?>


                </ul>
                <div class="accordion-tabs-list js-accordion-tab">
                    <?php
                    if( have_rows('pf_accordion_tab_lists',$portfolios_page_id) ) {
                        $i=1;
                        $flag=0;
                        while( have_rows('pf_accordion_tab_lists',$portfolios_page_id) ) {
                            the_row();
                            ?>
                            <div class="accordion-tabs-item <?php print ($flag ==0) ? "active" : ""; $flag=1;?>" id="accordion-tabs-<?php echo $i; ?>">
                                <a href="#" class="accordion-tabs-opener js-opener"><?php echo get_sub_field('pf_accordion_tab_opener'); ?></a>
                                <div class="accordion-tabs-holder js-slide">
                                    <div class="accordion-tabs-text-holder">
                                        <div class="icon-block">
                                            <img src="<?php echo get_sub_field('pf_accordion_tab_image'); ?>" alt="Same-Day Responses">
                                        </div>
                                        <div class="text-block">
                                            <p><?php echo get_sub_field('pf_accordion_tab_textblock'); ?></p>
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
                <a href="<?php echo get_field("pf_accordion_tab_button_link",$portfolios_page_id); ?>" class="btn"><?php echo get_field("pf_accordion_tab_button_text",$portfolios_page_id); ?></a>
            </div>
        </div>

        <div class="slider-image-section custom-section reviews-slider-section">
            <div class="slide-text-header">
                <h2 class="title-global-section">We make <span class="text-green">your life</span> easier</h2>
            </div>
            <div class="slider-image js-slider">
                <?php
                $custom_terms = get_field("review_category");

                $args = array(
                    'post_type' => 'review',
                    'post_status' => 'publish',
                    'posts_per_page' => -1,
                    'orderby' => 'date',
                    'order' => 'ASC',
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'reviews_category',
                            'field' => 'slug',
                            'terms' => 'unlimited-custom-illustration', // or the category name e.g. Germany
                        )
                    )
                );
                $loop = new WP_Query($args);
                $i = 1;
                while ($loop->have_posts()) : $loop->the_post();
                    ?>
                    <div class="slide">
                        <div class="text-holder">
                            <div class="slide-text-body">
                                <div class="flex">
                                    <h3 class="subtitle-block">“<?php echo get_field("review_title"); ?>”
                                    </h3>
                                    <div class="img-cont">
                                        <picture>
                                            <source srcset="<?php echo get_field("client_image"); ?>" media="(min-width: 768px)">
                                            <source srcset="<?php echo get_field("client_image_mobile"); ?>">
                                            <img src="<?php echo get_field("client_image"); ?>"
                                                 width="180" height="180" alt="See What Our Happy Clients Say">
                                        </picture>
                                    </div>
                                </div>
                                <div class="text-block">
                                    <?php echo get_field("review_textblock"); ?>
                                </div>
                                <div class="name-block"><?php echo get_field("client_name"); ?></div>
                                <div class="position-block"><?php echo get_field("client_position"); ?></div>
                            </div>
                        </div>
                    </div>
                    <?php
                endwhile;
                wp_reset_postdata();
                ?>
            </div>
        </div>

        <div class="get-help-section">
            <div class="text-holder">
                <h2 class="title-global-section big-title"><?php echo get_field("get_help_title"); ?></h2>
                <a href="<?php echo get_field("get_help_button_link"); ?>" class="btn"><?php echo get_field("get_help_button_text"); ?></a>
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