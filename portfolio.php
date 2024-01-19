<?php
/*
 * Template Name: Portfolio Page
 */
get_header();
?>
<div class="container">
    <div class="hero-banner-section custom-section">
        <div class="text-holder">
            <h1 class="title-block"><?php echo get_field("pf_hero_section_title"); ?></h1>
            <div class="text-block">
                <?php echo get_field("pf_hero_section_textblock"); ?>
            </div>
        </div>
        <div class="image-holder">
            <picture>
                <source srcset="<?php echo get_field("pf_hero_section_image"); ?>" media="(min-width: 768px)">
                <source srcset="<?php echo get_field("pf_hero_section_image_mobile"); ?>">
                <img src="<?php echo get_field("pf_hero_section_image"); ?>" alt="Hire your perfect Creative team">
            </picture>
        </div>
    </div>
    <div id="portfolioTabsSection" class="portfolio-tabs-section" style="display: none">
        <h2 class="title-global-section"><?php echo get_field("portfolio_tabs_section_title"); ?></h2>

        <div class="vertical-portfolio">
            <span v-if="windowWidth <= 832" class="spinner loader">
                    <span>
                    <i class="fas fa-spinner fa-spin"></i>
                    </span>
                </span>
            <ul class="portfolio-tabset accordion">
                <li v-for="(tab,i) in portfolioTabsList" :key="i" :class="{open: currentTab == i}">
                    <div class="link" @click="toggleTab($event,i,tab.slug)">{{tab.title}}
                        <i class="fa fa-chevron-down" v-if="tab.submenu.length>0"></i>
                    </div>
                    <div v-if="currentTabSlug == tab.slug && tab.slug == 'favorites' && windowWidth <= 832" class="portfolio-tab-content for-mobile">
                        <?php get_template_part('template-parts/section', 'portfolio-tabs-content-vue') ?>
                    </div>
                    <ul v-for="menu in tab.submenu" class="submenu">
                        <li class="portfolio-tabset-item">
                            <button @click="getPortfolio(menu.slug)" :data-tab="'#tab-' + menu.id" :class="{active: menu.slug == currentTabSlug}">{{menu.title}}</button>
                            <div v-if="currentTabSlug == menu.slug && tab.slug != 'favorites' && windowWidth <= 832" class="portfolio-tab-content for-mobile">
                                <?php get_template_part('template-parts/section', 'portfolio-tabs-content-vue') ?>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
            <div v-if="windowWidth > 832" class="portfolio-tab-content">
                <?php get_template_part('template-parts/section', 'portfolio-tabs-content-vue') ?>
            </div>
        </div>
    </div>
        </div>

<?php get_template_part('template-parts/section', 'reviews-slider') ?>

<?php get_template_part('template-parts/section', 'accordion-tabs') ?>

<div class="container">
        <div class="get-help-section">
            <div class="text-holder">
                <h2 class="title-global-section big-title"><?php echo get_field("pf_get_help_title"); ?></h2>
                <a href="<?php echo get_field("pf_get_help_button_link"); ?>" class="btn"><?php echo get_field("pf_get_help_button_text"); ?></a>
            </div>
            <div class="image-holder">
                <div class="image-block">
                    <picture>
                        <source srcset="<?php echo get_field("pf_get_help_image"); ?>" media="(min-width: 768px)">
                        <source srcset="<?php echo get_field("pf_get_help_image_mobile"); ?>">
                        <img src="<?php echo get_field("pf_get_help_image"); ?>" alt="img">
                    </picture>
                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>

<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>


<script>
    const {createApp} = Vue;

    createApp({
        data() {
            return {
                currentTab: 0,
                currentTabSlug: 'favorites',
                portfolioTabsList: [
                    {
                        title: "Favorites",
                        slug: "favorites",
                        submenu: [],
                        portfolioItems: []
                    },
                    {
                        title: 'Design',
                        slug: "design",
                        submenu: [
                            {
                                title: "All Design Projects",
                                slug: "design",
                            }, {
                                title: "Banner",
                                slug: "banners",
                            }, {
                                title: "Flyer",
                                slug: "flyer",
                            }, {
                                title: "Infographic",
                                slug: "infographics",
                            }, {
                                title: "Logo",
                                slug: "logo",
                            }, {
                                title: "Social media ad/post",
                                slug: "social-media-graphics",
                            }, {
                                title: "T-Shirt",
                                slug: "t-shirt",
                            }, {
                                title: "Webpage",
                                slug: "websites",
                            },
                        ]
                    }, {
                        title: 'Copywriting',
                        slug: "copywriting",
                        submenu: [
                            {
                                title: "All Copywriting Projects",
                                slug: "copywriting",
                            }, {
                                title: "Ad",
                                slug: "ad-copywriting",
                            }, {
                                title: "Article",
                                slug: "article",
                            }, {
                                title: "Blog Post",
                                slug: "blog",
                            }, {
                                title: "Email",
                                slug: "email",
                            }, {
                                title: "Landing Page",
                                slug: "landing-page",
                            }, {
                                title: "Press Release",
                                slug: "press-release",
                            }, {
                                title: "Social Media Post",
                                slug: "social-media-post",
                            }, {
                                title: "Webpage",
                                slug: "website-content",
                            },
                        ]
                    }, {
                        title: 'Video',
                        slug: "video",
                        submenu: [
                            {
                                title: "All Video Projects",
                                slug: "video",
                            }, {
                                title: "Ad",
                                slug: "ad-videos",
                            }, {
                                title: "Video",
                                slug: "explainer-videos",
                            },
                        ]
                    }, {
                        title: 'Illustrations',
                        slug: "illustrations",
                        submenu: [
                            {
                                title: "All Illustrations Projects",
                                slug: "illustrations",
                            }, {
                                title: "Avatar",
                                slug: "avatar",
                            }, {
                                title: "Character",
                                slug: "character",
                            }, {
                                title: "Comic",
                                slug: "comic-illustrations",
                            }, {
                                title: "Custom Brand Illustration",
                                slug: "custom-brand-illustration",
                            }, {
                                title: "Illustrated Manuals",
                                slug: "illustrated-manuals",
                            }, {
                                title: "Mascot",
                                slug: "custom-mascots",
                            }, {
                                title: "Merch",
                                slug: "merch-illustrations",
                            }, {
                                title: "Portrait Illustration",
                                slug: "portrait-illustration",
                            }, {
                                title: "Storybook Illustration",
                                slug: "storybook-illustrations",
                            },
                        ]
                    }, {
                        title: 'Voice Over',
                        slug: "voice-over",
                        submenu: [
                            {
                                title: "All Voice Over",
                                slug: "voice-over",
                            },
                        ]
                    }, {
                        title: 'Motion Graphics',
                        slug: "motion-graphics",
                        submenu: [
                            {
                                title: "All Motion Graphics",
                                slug: "motion-graphics",
                            }, {
                                title: "Character Animations & Storytelling",
                                slug: "character-animations-storytelling",
                            }, {
                                title: "Logo Reveals",
                                slug: "logo-reveals",
                            }, {
                                title: "Products & Images Simple Animation",
                                slug: "products-images-simple-animation",
                            }, {
                                title: "Text and Graphics Animations",
                                slug: "text-and-graphics-animations",
                            },
                        ]
                    }, {
                        title: 'Web Development',
                        slug: "web-development",
                        submenu: [
                            {
                                title: "Web Development Projects",
                                slug: "web-development",
                            },
                        ]
                    }
                ],
                portfolioItemsList: {
                    "favorites": []
                },
                totalPortfolioItems: {
                    "favorites": 0
                },
                windowWidth: window.innerWidth
            }
        },
        methods: {
            toggleTab(e,i,slug){
                if(this.currentTab !== i){
                    this.currentTab = i;
                    if (this.portfolioItemsList[slug] === undefined || this.portfolioItemsList[slug].length === 0) {
                    this.loadMorePortfolio(slug)
                    }else{
                        this.currentTabSlug = slug;
                    }
                }else{
                    this.currentTab = -1;
                }
                if(this.windowWidth <= 832){
                    setTimeout(function () {
                        $('html, body').animate({
                            scrollTop: $(e.target).offset().top
                        }, 800, function(){
                        });
                    },1000);
                }
            },
            isLoadMore() {
                if(!this.totalPortfolioItems[this.currentTabSlug]){
                    return false;
                }
                if (this.portfolioItemsList[this.currentTabSlug] && this.totalPortfolioItems[this.currentTabSlug]) {
                    return this.portfolioItemsList[this.currentTabSlug].length < this.totalPortfolioItems[this.currentTabSlug];
                }
                return true
            },
            removeScriptTags(str) {
                if (!str) return '';
                return str.replace(/<script\b[^<]*(?:(?!<\/script>)<[^<]*)*<\/script>/gi, "");
            },
            showPopup(url) {
                if (url) {
                    this.loadJS(url);
                    this.loadJS('https://fast.wistia.com/assets/external/E-v1.js');
                }
                audioPlayer();
                copywritingOpen();
            },
            loadJS(FILE_URL, async = true) {
                let scriptEle = document.createElement("script");

                scriptEle.setAttribute("src", FILE_URL);
                scriptEle.setAttribute("type", "text/javascript");
                scriptEle.setAttribute("async", async);

                document.body.appendChild(scriptEle);

                // success event
                scriptEle.addEventListener("load", () => {

                });
                // error event
                scriptEle.addEventListener("error", (ev) => {
                    console.log("Error on loading file", ev);
                });
            },
            getPortfolio(slug) {
                if (this.portfolioItemsList[slug] === undefined || this.portfolioItemsList[slug].length === 0) {
                    this.loadMorePortfolio(slug)
                } else {
                    this.currentTabSlug = slug;
                }
            },
            loadMorePortfolio(slug) {
                let offset = 0;
                if (this.portfolioItemsList[slug] !== undefined) {
                    offset = this.portfolioItemsList[slug].length;
                } else {
                    this.portfolioItemsList[slug] = [];
                }
                this.currentTabSlug = slug;

                if(this.windowWidth <= 832){
                    setTimeout(function () {
                        initScrollPanePortfolio();
                    }, 1000);
                }
                if (slug && slug !== "") {
                    $('.loader').show();
                    let ye = this;
                    jQuery.ajax({
                        type: "post",
                        data: {
                            action: 'getPortfolioItems',
                            slug: slug,
                            ppp: 9,
                            offset: offset,
                        },
                        url: "<?php echo admin_url('admin-ajax.php'); ?>",
                        dataType: "json",
                        success: function (res) {
                            ye.portfolioItemsList[slug] = ye.portfolioItemsList[slug].concat(res.data);
                            ye.totalPortfolioItems[slug] = res.total;
                            $('.loader').hide();
                            if(ye.windowWidth <= 832){
                                setTimeout(function () {
                                    initScrollPanePortfolio();
                                }, 1000);
                            }
                        },
                        error: function (err) {
                            console.log(err);
                        },
                    });
                }
            }
        },
        mounted() {
            this.loadMorePortfolio('favorites');
            $("#portfolioTabsSection").fadeIn();

            window.addEventListener("resize", () => {
                this.windowWidth = window.innerWidth;
            });
        }
    }).mount('#portfolioTabsSection')
</script>