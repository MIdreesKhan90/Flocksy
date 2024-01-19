function categoriesSearch() {
    jQuery(".js-categories-section").each(function () {
        var t = jQuery(this).find(".js-categories-search-form"),
            e = jQuery(this).find("#search"),
            i = jQuery(this).find(".js-category-list .category-item");
        t.submit(function (t) {
            t.preventDefault(),
                i.each(function () {
                    "" != e.val() && -1 === jQuery(this).text().toLowerCase().indexOf(e.val().toLowerCase()) ? jQuery(this).hide() : jQuery(this).show();
                });
        });
    });
}

function formSend() {
    jQuery(".form-send").each(function () {
        var t = jQuery(this);
        t.submit(function (e) {
            e.preventDefault(),
                (e = t.serialize()),
                jQuery.ajax({
                    type: "post",
                    data: e,
                    url: "send.php",
                    dataType: "json",
                    success: function (e) {
                        console.log("success"), console.log(e);
                        try {
                            e.success ? (jQuery(".contact-form-message").css("display", "flex"), t[0].reset()) : alert("error");
                        } catch (e) {
                            console.log(e), alert("error");
                        }
                    },
                    error: function (t) {
                        console.log("erorr"), console.log(t);
                    },
                });
        });
    });
}

function initUploadFile() {
    jQuery(".js-upload-file").each(function () {
        var t = jQuery(this),
            e = t.find('[type="file"]'),
            i = t.find(".image-file");
        e.on("change", function () {
            var t;
            this.files &&
            this.files[0] &&
            (((t = new FileReader()).onload = function (t) {
                i.css("background-image", 'url("' + t.target.result + '")');
            }),
                t.readAsDataURL(this.files[0]));
        });
    });
}

function initInputRadio() {
    jQuery(".js-radio-group").each(function () {
        var t = jQuery(this),
            e = t.find('[type="radio"]'),
            i = t.find(".js-visibility");
        e.on("change", function () {
            "other" === jQuery(this).val() ? i.removeClass("hide") : i.addClass("hide");
        });
    });
}

function audioPlayer() {
    jQuery(".js-audio-container").each(function () {
        var t = jQuery(this).find(".js-audio-player"),
            e = jQuery(t)[0],
            i = jQuery(this).find(".js-audio-play"),
            o = jQuery(this).find(".js-audio-progress"),
            s = jQuery(this).find(".js-slide-progress"),
            n = jQuery(this).find(".js-audio-mute"),
            a = jQuery(this).find(".js-audio-volume"),
            r = jQuery(this).find(".js-audio-volume-range");
        i.on("click", function () {
            i.toggleClass("pause"), i.hasClass("pause") ? e.pause() : e.play();
        }),
            n.on("click", function () {
                n.toggleClass("mute"), n.hasClass("mute") ? (e.muted = !0) : (e.muted = !1);
            }),
            a.on("click", function (t) {
                var i = jQuery(a)[0].getBoundingClientRect();
                (i = (t.clientX - i.left) / i.width), r.css("width", 100 * i + "%"), (e.volume = i) <= 0 ? (n.addClass("mute"), (e.muted = !0)) : (n.removeClass("mute"), (e.muted = !1));
            }),
            o.on("click", function (t) {
                var i = jQuery(o)[0].getBoundingClientRect();
                (i = (t.clientX - i.left) / i.width), s.css("width", 100 * i + "%"), (e.currentTime = e.duration * i);
            }),
            e.addEventListener("timeupdate", function () {
                var t = e.currentTime / e.duration;
                s.css("width", 100 * t + "%");
            });
    });
}

function initScrollPanePortfolio() {
    jQuery(".portfolio-scroll-tabset").each(function () {
        var t = jQuery(this);
        ResponsiveHelper.addRange({
            "1024..": {
                on: function () {
                    t.jScrollPane({autoReinitialise: !0, animateScroll: !0});
                },
                off: function () {
                    location.reload();
                },
            },
        });
    }),
        jQuery(".portfolio-scroll-content").each(function () {
            var t = jQuery(this);
            ResponsiveHelper.addRange({
                "..1023": {
                    on: function () {
                        t.jScrollPane({autoReinitialise: !0, animateScroll: !0});
                    },
                    off: function () {
                        location.reload();
                    },
                },
            });
        });
}

function initScrollPaneReviews() {
    jQuery(".reviews-scroll-holder").each(function () {
        var t = jQuery(this);
        ResponsiveHelper.addRange({
            "..767": {
                on: function () {
                    t.jScrollPane({autoReinitialise: !0, animateScroll: !0});
                },
                off: function () {
                    location.reload();
                },
            },
        });
    });
}

function initTabs() {
    jQuery(".portfolio-tabset, .plan-tabset, .profile-tabset, .service-tabs-section").tabset({
        tabLinks: "button",
        attrib: "data-tab",
        defaultTab: !0
    });
}

function initScrollPane() {
    jQuery(".scroll-pane").each(function () {
        var t = jQuery(this),
            e = t.closest(".js-custom-anchor"),
            i = t.find(".js-block-holder"),
            o = e.find(".anchor-nav-item a"),
            s = 0,
            n = !0,
            a = !0;
        t.jScrollPane({autoReinitialise: !0, animateScroll: !0});
        var r = t.data("jsp");
        jQuery(window).on("load resize", function () {
            a = "1200" <= jQuery(window).width() ? !(s = 409) : "768" <= jQuery(window).width() && jQuery(window).width() < "1200" ? ((s = jQuery(window).width() / 4), !1) : !(s = 0);
        }),
            t.bind("jsp-will-scroll-x", function (e, s) {
                setTimeout(function () {
                    var e = parseInt(t.outerWidth()),
                        s = r.getContentWidth(),
                        l = r.getPercentScrolledX();
                    if (i.length)
                        if (0 === l && n) i.removeClass("active"), i.removeClass("last-active"), jQuery(i[0]).addClass("active");
                        else if (1 === l && n) i.addClass("last-active"), i.removeClass("active"), jQuery(i[i.length - 1]).addClass("active");
                        else {
                            i.removeClass("last-active");
                            for (var c = 0; c < i.length; c++) {
                                var d = jQuery(i[c]);
                                if ((d = a ? d.position().left / (s - e) >= l : (d.position().left - d.outerWidth() / 3) / (s - e) >= l)) {
                                    i.removeClass("active"), jQuery(i[c]).addClass("active");
                                    break;
                                }
                            }
                        }
                    if (o.length)
                        if (l <= 0 && n) o.removeClass("active"), jQuery(o[0]).addClass("active");
                        else if (1 <= l && n) o.removeClass("active"), jQuery(o[o.length - 1]).addClass("active");
                        else
                            for (c = 0; c < o.length; c++) {
                                var p = jQuery(o[c]).attr("href");
                                (p = (p = jQuery(p)).position().left <= 0 ? 0 : p.position().left), (p = a ? l < p / (s - e) : l < (p - e / 2) / (s - e)) || (o.removeClass("active"), jQuery(o[c]).addClass("active"));
                            }
                    n = !0;
                }, 400);
            }),
            setTimeout(function () {
                var t = e.find(".js-block-holder.active");
                t.length && ((n = !1), (t = t.position().left), r.scrollToX(t - s));
            }, 500);
        var l = e.find(".anchor-nav-item");
        e.find(".anchor-nav-item a").on("click", function (t) {
            var e = jQuery(this).parent(".anchor-nav-item").index();
            0 !== e && e !== l.length - 1 && (n = !1), t.preventDefault(), (t = jQuery(this).attr("href")), (t = jQuery(t).position().left), r.scrollToX(t - s);
        });
    });
}

function initHoverImage() {
    jQuery(".js-hover-image").each(function () {
        var t = jQuery(this),
            e = t.find(".image-item"),
            i = 0;

        function o() {
            jQuery(e).addClass("is-animate"),
                setTimeout(function () {
                    jQuery(e).removeClass("is-active"), jQuery(e).removeClass("is-animate"), i < e.length - 1 ? (i += 1) : (i = 0), jQuery(e[i]).addClass("is-active");
                }, 400);
        }

        ResponsiveHelper.addRange({
            "1024..": {
                on: function () {
                    t.on("mouseenter", o);
                },
                off: function () {
                    t.off("mouseenter", o);
                },
            },
        }),
            ResponsiveHelper.addRange({
                "..1023": {
                    on: function () {
                        t.on("touchstart", o);
                    },
                    off: function () {
                        t.off("touchstart", o);
                    },
                },
            });
    });
}

function initStringReplacement() {
    jQuery(".string-replacement").each(function () {
        var t = jQuery(this),
            e = t.find("span");
        t.css("width", jQuery(e[0]).width() + "px"), jQuery(e[0]).addClass("animate");
        var i = 1;
        setInterval(function () {
            jQuery(e).removeClass("animate"), t.css("width", jQuery(e[i]).width() + "px"), jQuery(e[i]).addClass("animate"), i < e.length - 1 ? (i += 1) : (i = 0);
        }, 1e3);
    });
}

function initAccordionTabs() {
    jQuery(".accordion-tabs-section").each(function () {
        var t = jQuery(this),
            e = t.find(".js-accordion-tab"),
            i = t.find(".accordion-tab-tabset");
        ResponsiveHelper.addRange({
            "..767": {
                on: function () {
                    e.slideAccordion({
                        opener: ">a.js-opener",
                        slider: ">div.js-slide",
                        animSpeed: 300
                    }), jQuery(".js-accordion-second").slideAccordion({
                        opener: ".js-opener",
                        slider: ".js-slide",
                        animSpeed: 300,
                        collapsible: !1
                    });
                },
                off: function () {
                    e.slideAccordion("destroy");
                },
            },
        }),
            ResponsiveHelper.addRange({
                "768..": {
                    on: function () {
                        i.tabset({
                            tabLinks: "a",
                            attrib: "data-tab",
                            defaultTab: !0
                        }), jQuery(".js-accordion-second").slideAccordion({
                            opener: ".js-opener",
                            slider: ".js-slide",
                            animSpeed: 300,
                            collapsible: !1
                        });
                    },
                    off: function () {
                        i.tabset("destroy"), location.reload();
                    },
                },
            });
    });
}

function initAccordion() {
    jQuery(".js-accordion").slideAccordion({opener: ".js-opener", slider: ".js-slide", animSpeed: 0, collapsible: !1}),
        jQuery(".js-accordion-anim").slideAccordion({
            opener: ".js-opener",
            slider: ".js-slide",
            animSpeed: 300,
            collapsible: !1
        }),
        jQuery(".js-accordion-collapsible, .js-personal-teams-accordion").slideAccordion({
            opener: ".js-opener",
            slider: ".js-slide",
            animSpeed: 300,
            collapsible: !0
        });
}

function initSlickCarousel() {
    jQuery(".js-slider").slick({
        slidesToScroll: 1,
        rows: 0,
        prevArrow: '<button class="slick-prev">Back</button>',
        nextArrow: '<button class="slick-next">Next</button>',
        fade: !0,
        infinite: !1,
        swipe: !1,
        adaptiveHeight: !0,
        touchMove: !1,
    }),
        jQuery(".js-slider-no-arrow").slick({
            slidesToScroll: 1,
            rows: 0,
            fade: !0,
            autoplay: !0,
            autoplaySpeed: 2e3,
            infinite: !0,
            arrows: !1
        }),
        jQuery(".testimonial-slider").slick({
            slidesToScroll: 1,
            rows: 0,
            prevArrow: '<button class="slick-prev">Back</button>',
            nextArrow: '<button class="slick-next">Next</button>',
            asNavFor: ".testimonial-slider-nav",
            focusOnSelect: !0,
            fade: !0,
            adaptiveHeight: !0,
            infinite: !1,
            responsive: [{breakpoint: 767, settings: {slidesToScroll: 1, arrows: !1}}],
        }),
        jQuery(".testimonial-slider-nav").slick({
            slidesToScroll: 1,
            rows: 0,
            slidesToShow: 3,
            arrows: !1,
            prevArrow: '<button class="slick-prev">Back</button>',
            nextArrow: '<button class="slick-next">Next</button>',
            asNavFor: ".testimonial-slider",
            focusOnSelect: !0,
            infinite: !1,
            responsive: [
                {breakpoint: 1023, settings: {slidesToScroll: 1, slidesToShow: 2, arrows: !1}},
                {breakpoint: 767, settings: {slidesToScroll: 1, slidesToShow: 1, arrows: !0}},
            ],
        }),
        jQuery(".team-slider").slick({
            slidesToScroll: 1,
            rows: 0,
            slidesToShow: 4,
            arrows: !0,
            prevArrow: '<button class="slick-prev">Back</button>',
            nextArrow: '<button class="slick-next">Next</button>',
            infinite: !1,
            responsive: [
                {breakpoint: 1023, settings: {slidesToScroll: 1, slidesToShow: 3}},
                {breakpoint: 767, settings: {slidesToScroll: 1, slidesToShow: 2}},
                {breakpoint: 479, settings: {slidesToScroll: 1, slidesToShow: 1}},
            ],
        }),
        jQuery(".js-info-slider")
            .slick({
                slidesToScroll: 1,
                rows: 0,
                slidesToShow: 3,
                arrows: !0,
                prevArrow: '<button class="slick-prev">Back</button>',
                nextArrow: '<button class="slick-next">Next</button>',
                infinite: !1,
                responsive: [
                    {breakpoint: 1023, settings: {slidesToScroll: 1, slidesToShow: 2}},
                    {breakpoint: 767, settings: {slidesToScroll: 1, slidesToShow: 2}},
                    {breakpoint: 479, settings: {slidesToScroll: 1, slidesToShow: 1}},
                ],
            })
            .on("setPosition", function (t, e) {
                jQuery(this).hasClass("sales-list-slider") && e.$slides.css("height", e.$slideTrack.height() + "px");
            });
}

function initMobileNav() {
    ResponsiveHelper.addRange({
        "..1023": {
            on: function () {
                jQuery("body").mobileNav({menuActiveClass: "is-active-menu", menuOpener: ".hamburger"});
            },
            off: function () {
                jQuery("body").mobileNav("destroy");
            },
        },
    }),
        jQuery(".portfolio-tabs-section").each(function () {
            var t = (i = jQuery(this)).find(".portfolio-current-tabset"),
                e = i.find(".portfolio-tabset-close"),
                i = i.find(".portfolio-tabset-item");
            t.on("click", function () {
                jQuery("body").addClass("is-portfolio-tabset");
            }),
                e.on("click", function () {
                    jQuery("body").removeClass("is-portfolio-tabset");
                }),
                i.on("click", function () {
                    t.text(jQuery(this).text()), jQuery("body").removeClass("is-portfolio-tabset");
                });
        });
}

function initAnchors() {
    new SmoothScroll({anchorLinks: "a.anchor", extraOffset: 130, wheelBehavior: "none"});
}

function initStickyScrollBlock() {
    jQuery(".anchor-nav-menu").stickyScrollBlock({
        setBoxHeight: !0,
        activeClass: "fixed-position",
        positionType: "fixed",
        extraTop: 0,
        showAfterScrolled: !0
    });
}

function initFancybox() {
    jQuery("a.lightbox, [data-fancybox]").fancybox({parentEl: "body", margin: [50, 0]});
}

function initOpenClose() {
    ResponsiveHelper.addRange({
        "..767": {
            on: function () {
                jQuery(".open-close-mob").openClose({
                    activeClass: "active",
                    opener: ".opener",
                    slider: ".slide",
                    animSpeed: 400,
                    effect: "slide"
                });
            },
            off: function () {
                jQuery(".open-close-mob").openClose("destroy");
            },
        },
    });
}

function initTooltip() {
    jQuery(".tooltip:not(.tooltip-right)[title], .js-tooltip:not(.tooltip-right)[title]").hoverTooltip({
        positionTypeX: "center",
        extraOffsetX: "0",
        extraOffsetY: "10",
        tooltipStructure: '<div class="hover-tooltip"><div class="tooltip-text"></div></div>',
    }),
        jQuery(".tooltip.tooltip-right[title]").hoverTooltip({
            positionTypeX: "left",
            extraOffsetX: "0",
            extraOffsetY: "10",
            tooltipStructure: '<div class="hover-tooltip"><div class="tooltip-text"></div></div>'
        }),
        jQuery(".plan-table-header").each(function () {
            var t = jQuery(this),
                e = t.find(".open-close-opener"),
                i = t.find(".open-close-content");
            e.on("click", function () {
                jQuery(this).toggleClass("is-open"), i.toggleClass("is-open");
            });
        });
}

function loadMorePortfolioTabs() {
    jQuery(".js-content-holder").each(function () {
        var t = jQuery(this).find(".js-btn"),
            e = jQuery(this).find(".js-list>.portfolio-item"),
            i = 16;
        jQuery(this).hasClass("js-content-12") && (i = 12);
        // jQuery(window).on("ready load resize", function () {
        if ("1024" <= jQuery(window).width()) {
            if (e.length <= i) t.hide();
            else for (var o = i; o < e.length; o++) jQuery(e[o]).hide();
            t.on("click", function (o) {
                let s = i;
                (i += 12) > e.length && (i = e.length), o.preventDefault(), e.length <= i && t.hide();
                for (var n = s; n < i; n++) jQuery(e[n]).show();
            });
        } else for (t.hide(), o = i; o < e.length; o++) jQuery(e[o]).show();

        jQuery('button').filter('[data-tab="#tab-01"]').removeClass('active');
        jQuery('button').filter('[data-tab="#tab-04"]').trigger('click');

        // });
    });
}

function copywritingOpen() {
    jQuery(".js-copywriting-images").each(function () {
        var t = jQuery(this),
            e = t.find(".js-btn"),
            i = t.find(".hide");
        e.on("click", function (t) {
            t.preventDefault(), i.removeClass("hide"), e.remove();
        });
    });
}

jQuery(function () {
    initScrollPane(),
        initScrollPanePortfolio(),
        initSlickCarousel(),
        initStringReplacement(),
        initAccordionTabs(),
        initAccordion(),
        initHoverImage(),
        initMobileNav(),
        initTabs(),
        initAnchors(),
        initStickyScrollBlock(),
        initFancybox(),
        initScrollPaneReviews(),
        initOpenClose(),
        initTooltip(),
        loadMorePortfolioTabs(),
        audioPlayer(),
        initInputRadio(),
        initUploadFile(),
        formSend(),
        copywritingOpen(),
        categoriesSearch(),
        (jQuery.fancybox.defaults.touch = !1),
        jQuery(".js-select-empty").prop("selectedIndex", -1),
        jQuery(".js-select-basic").niceSelect(),
        jQuery("[data-fancybox-custom]").on("click", function () {
            jQuery.fancybox.close();
            var t = jQuery(this).attr("data-src");
            jQuery.fancybox.open({src: t, type: "inline"});
        });
}),
    (function (t, e) {
        "use strict";
        "function" == typeof define && define.amd ? define(["jquery"], e) : "object" == typeof exports ? (module.exports = e(require("jquery"))) : (t.SlideAccordion = e(jQuery));
    })(this, function (t) {
        "use strict";
        var e,
            i,
            o = "js-acc-hidden";

        function s(e) {
            (this.options = t.extend(
                !0,
                {
                    allowClickWhenExpanded: !1,
                    activeClass: "active",
                    opener: ".opener",
                    slider: ".slide",
                    animSpeed: 300,
                    collapsible: !0,
                    event: "click",
                    scrollToActiveItem: {enable: !1, breakpoint: 767, animSpeed: 600, extraOffset: null},
                },
                e
            )),
                this.init();
        }

        return (
            (s.prototype = {
                init: function () {
                    this.options.holder && (this.findElements(), this.setStateOnInit(), this.attachEvents(), this.makeCallback("onInit"));
                },
                findElements: function () {
                    (this.$holder = t(this.options.holder).data("SlideAccordion", this)), (this.$items = this.$holder.find(":has(" + this.options.slider + ")"));
                },
                setStateOnInit: function () {
                    var e = this;
                    this.$items.each(function () {
                        t(this).hasClass(e.options.activeClass) || t(this).find(e.options.slider).addClass(o);
                    });
                },
                attachEvents: function () {
                    var t = this;
                    (this.accordionToggle = function (e) {
                        var i = jQuery(this).closest(t.$items),
                            o = t.getActiveItem(i);
                        (t.options.allowClickWhenExpanded && i.hasClass(t.options.activeClass)) || (e.preventDefault(), t.toggle(i, o));
                    }),
                        this.$items.on(this.options.event, this.options.opener, this.accordionToggle);
                },
                toggle: function (t, e) {
                    t.hasClass(this.options.activeClass) ? this.options.collapsible && this.hide(t) : this.show(t), !t.is(e) && e.length && this.hide(e), this.makeCallback("beforeToggle");
                },
                show: function (t) {
                    var e = t.find(this.options.slider);
                    t.addClass(this.options.activeClass),
                        e
                            .stop()
                            .hide()
                            .removeClass(o)
                            .slideDown({
                                duration: this.options.animSpeed,
                                complete: function () {
                                    e.removeAttr("style"), this.options.scrollToActiveItem.enable && window.innerWidth <= this.options.scrollToActiveItem.breakpoint && this.goToItem(t), this.makeCallback("onShow", t);
                                }.bind(this),
                            }),
                        this.makeCallback("beforeShow", t);
                },
                hide: function (t) {
                    var e = t.find(this.options.slider);
                    t.removeClass(this.options.activeClass),
                        e
                            .stop()
                            .show()
                            .slideUp({
                                duration: this.options.animSpeed,
                                complete: function () {
                                    e.addClass(o), e.removeAttr("style"), this.makeCallback("onHide", t);
                                }.bind(this),
                            }),
                        this.makeCallback("beforeHide", t);
                },
                goToItem: function (e) {
                    (e = e.offset().top) < t(window).scrollTop() &&
                    ("number" == typeof this.options.scrollToActiveItem.extraOffset
                        ? (e -= this.options.scrollToActiveItem.extraOffset)
                        : "function" == typeof this.options.scrollToActiveItem.extraOffset && (e -= this.options.scrollToActiveItem.extraOffset()),
                        t("body, html").animate({scrollTop: e}, this.options.scrollToActiveItem.animSpeed));
                },
                getActiveItem: function (t) {
                    return t.siblings().filter("." + this.options.activeClass);
                },
                makeCallback: function (t) {
                    var e;
                    "function" == typeof this.options[t] && ((e = Array.prototype.slice.call(arguments)).shift(), this.options[t].apply(this, e));
                },
                destroy: function () {
                    this.$holder.removeData("SlideAccordion"),
                        this.$items.off(this.options.event, this.options.opener, this.accordionToggle),
                        this.$items.removeClass(this.options.activeClass).each(
                            function (e, i) {
                                t(i).find(this.options.slider).removeAttr("style").removeClass(o);
                            }.bind(this)
                        ),
                        this.makeCallback("onDestroy");
                },
            }),
                (t.fn.slideAccordion = function (e) {
                    var i = Array.prototype.slice.call(arguments),
                        o = i[0];
                    return this.each(function () {
                        var n = jQuery(this).data("SlideAccordion");
                        "object" == typeof e || void 0 === e ? new s(t.extend(!0, {holder: this}, e)) : "string" == typeof o && n && "function" == typeof n[o] && (i.shift(), n[o].apply(n, i));
                    });
                }),
                (e = t('<style type="text/css">')[0]),
                (i = "." + o),
                (i += "{position:absolute !important;left:-9999px !important;top:-9999px !important;display:block !important; width: 100% !important;}"),
                e.styleSheet ? (e.styleSheet.cssText = i) : e.appendChild(document.createTextNode(i)),
                t("head").append(e),
                s
        );
    }),
    (function (t) {
        function e(e) {
            (this.options = t.extend(
                {
                    container: null,
                    hideOnClickOutside: !1,
                    menuActiveClass: "nav-active",
                    menuOpener: ".nav-opener",
                    menuDrop: ".nav-drop",
                    toggleEvent: "click",
                    outsideClickEvent: "click touchstart pointerdown MSPointerDown"
                },
                e
            )),
                this.initStructure(),
                this.attachEvents();
        }

        e.prototype = {
            initStructure: function () {
                (this.page = t("html")), (this.container = t(this.options.container)), (this.opener = this.container.find(this.options.menuOpener)), (this.drop = this.container.find(this.options.menuDrop));
            },
            attachEvents: function () {
                var e = this;
                i && (i(), (i = null)),
                    (this.outsideClickHandler = function (i) {
                        e.isOpened() && ((i = t(i.target)).closest(e.opener).length || i.closest(e.drop).length || e.hide());
                    }),
                    (this.openerClickHandler = function (t) {
                        t.preventDefault(), e.toggle();
                    }),
                    this.opener.on(this.options.toggleEvent, this.openerClickHandler);
            },
            isOpened: function () {
                return this.container.hasClass(this.options.menuActiveClass);
            },
            show: function () {
                this.container.addClass(this.options.menuActiveClass), this.options.hideOnClickOutside && this.page.on(this.options.outsideClickEvent, this.outsideClickHandler);
            },
            hide: function () {
                this.container.removeClass(this.options.menuActiveClass), this.options.hideOnClickOutside && this.page.off(this.options.outsideClickEvent, this.outsideClickHandler);
            },
            toggle: function () {
                this.isOpened() ? this.hide() : this.show();
            },
            destroy: function () {
                this.container.removeClass(this.options.menuActiveClass), this.opener.off(this.options.toggleEvent, this.clickHandler), this.page.off(this.options.outsideClickEvent, this.outsideClickHandler);
            },
        };
        var i = function () {
            function e() {
                (i = !1), n.removeClass(a);
            }

            var i,
                o,
                s = t(window),
                n = t("html"),
                a = "resize-active";
            s.on("resize orientationchange", function () {
                i || ((i = !0), n.addClass(a)), clearTimeout(o), (o = setTimeout(e, 500));
            });
        };
        t.fn.mobileNav = function (i) {
            var o = Array.prototype.slice.call(arguments),
                s = o[0];
            return this.each(function () {
                var n = jQuery(this),
                    a = n.data("MobileNav");
                "object" == typeof i || void 0 === i ? n.data("MobileNav", new e(t.extend({container: this}, i))) : "string" == typeof s && a && "function" == typeof a[s] && (o.shift(), a[s].apply(a, o));
            });
        };
    })(jQuery),
    (window.ResponsiveHelper = (function (t) {
        var e,
            i = [],
            o = t(window),
            s = !1;

        function n() {
            var s = o.width();
            s !== e &&
            ((e = s),
                t.each(i, function (e, i) {
                    t.each(i.data, function (t, e) {
                        e.currentActive && !a(e.range[0], e.range[1]) && ((e.currentActive = !1), "function" == typeof e.disableCallback && e.disableCallback());
                    }),
                        t.each(i.data, function (t, e) {
                            !e.currentActive && a(e.range[0], e.range[1]) && ((e.currentActive = !0), "function" == typeof e.enableCallback && e.enableCallback());
                        });
                }));
        }

        function a(t, i) {
            var o = "";
            return (
                0 < t && (o += "(min-width: " + t + "px)"),
                i < 1 / 0 && (o += (o ? " and " : "") + "(max-width: " + i + "px)"),
                    (o = o),
                    (t = t),
                    (i = i),
                    window.matchMedia && s ? matchMedia(o).matches : window.styleMedia ? styleMedia.matchMedium(o) : window.media ? media.matchMedium(o) : t <= e && e <= i
            );
        }

        return (
            window.matchMedia && ((window.Window && window.matchMedia === Window.prototype.matchMedia) || -1 < window.matchMedia.toString().indexOf("native")) && (s = !0),
                o.bind("load resize orientationchange", n),
                {
                    addRange: function (o) {
                        var s = {data: {}};
                        t.each(o, function (t, e) {
                            s.data[t] = {
                                range:
                                    ((t = (t = t).split("..")),
                                        [parseInt(t[0], 10) || -1 / 0, parseInt(t[1], 10) || 1 / 0].sort(function (t, e) {
                                            return t - e;
                                        })),
                                enableCallback: e.on,
                                disableCallback: e.off,
                            };
                        }),
                            i.push(s),
                            (e = null),
                            n();
                    },
                }
        );
    })(jQuery)),
    (function (t) {
        "use strict";
        "function" == typeof define && define.amd ? define(["jquery"], t) : "undefined" != typeof exports ? (module.exports = t(require("jquery"))) : t(jQuery);
    })(function (t) {
        "use strict";
        var e,
            i = window.Slick || {};
        (e = 0),
            ((i = function (i, o) {
                var s = this;
                (s.defaults = {
                    accessibility: !0,
                    adaptiveHeight: !1,
                    appendArrows: t(i),
                    appendDots: t(i),
                    arrows: !0,
                    asNavFor: null,
                    prevArrow: '<button class="slick-prev" aria-label="Previous" type="button">Previous</button>',
                    nextArrow: '<button class="slick-next" aria-label="Next" type="button">Next</button>',
                    autoplay: !1,
                    autoplaySpeed: 3e3,
                    centerMode: !1,
                    centerPadding: "50px",
                    cssEase: "ease",
                    customPaging: function (e, i) {
                        return t('<button type="button" />').text(i + 1);
                    },
                    dots: !1,
                    dotsClass: "slick-dots",
                    draggable: !0,
                    easing: "linear",
                    edgeFriction: 0.35,
                    fade: !1,
                    focusOnSelect: !1,
                    focusOnChange: !1,
                    infinite: !0,
                    initialSlide: 0,
                    lazyLoad: "ondemand",
                    mobileFirst: !1,
                    pauseOnHover: !0,
                    pauseOnFocus: !0,
                    pauseOnDotsHover: !1,
                    respondTo: "window",
                    responsive: null,
                    rows: 1,
                    rtl: !1,
                    slide: "",
                    slidesPerRow: 1,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    speed: 500,
                    swipe: !0,
                    swipeToSlide: !1,
                    touchMove: !0,
                    touchThreshold: 5,
                    useCSS: !0,
                    useTransform: !0,
                    variableWidth: !1,
                    vertical: !1,
                    verticalSwiping: !1,
                    waitForAnimate: !0,
                    zIndex: 1e3,
                }),
                    (s.initials = {
                        animating: !1,
                        dragging: !1,
                        autoPlayTimer: null,
                        currentDirection: 0,
                        currentLeft: null,
                        currentSlide: 0,
                        direction: 1,
                        $dots: null,
                        listWidth: null,
                        listHeight: null,
                        loadIndex: 0,
                        $nextArrow: null,
                        $prevArrow: null,
                        scrolling: !1,
                        slideCount: null,
                        slideWidth: null,
                        $slideTrack: null,
                        $slides: null,
                        sliding: !1,
                        slideOffset: 0,
                        swipeLeft: null,
                        swiping: !1,
                        $list: null,
                        touchObject: {},
                        transformsEnabled: !1,
                        unslicked: !1,
                    }),
                    t.extend(s, s.initials),
                    (s.activeBreakpoint = null),
                    (s.animType = null),
                    (s.animProp = null),
                    (s.breakpoints = []),
                    (s.breakpointSettings = []),
                    (s.cssTransitions = !1),
                    (s.focussed = !1),
                    (s.interrupted = !1),
                    (s.hidden = "hidden"),
                    (s.paused = !0),
                    (s.positionProp = null),
                    (s.respondTo = null),
                    (s.rowCount = 1),
                    (s.shouldClick = !0),
                    (s.$slider = t(i)),
                    (s.$slidesCache = null),
                    (s.transformType = null),
                    (s.transitionType = null),
                    (s.visibilityChange = "visibilitychange"),
                    (s.windowWidth = 0),
                    (s.windowTimer = null),
                    (i = t(i).data("slick") || {}),
                    (s.options = t.extend({}, s.defaults, o, i)),
                    (s.currentSlide = s.options.initialSlide),
                    (s.originalSettings = s.options),
                    void 0 !== document.mozHidden
                        ? ((s.hidden = "mozHidden"), (s.visibilityChange = "mozvisibilitychange"))
                        : void 0 !== document.webkitHidden && ((s.hidden = "webkitHidden"), (s.visibilityChange = "webkitvisibilitychange")),
                    (s.autoPlay = t.proxy(s.autoPlay, s)),
                    (s.autoPlayClear = t.proxy(s.autoPlayClear, s)),
                    (s.autoPlayIterator = t.proxy(s.autoPlayIterator, s)),
                    (s.changeSlide = t.proxy(s.changeSlide, s)),
                    (s.clickHandler = t.proxy(s.clickHandler, s)),
                    (s.selectHandler = t.proxy(s.selectHandler, s)),
                    (s.setPosition = t.proxy(s.setPosition, s)),
                    (s.swipeHandler = t.proxy(s.swipeHandler, s)),
                    (s.dragHandler = t.proxy(s.dragHandler, s)),
                    (s.keyHandler = t.proxy(s.keyHandler, s)),
                    (s.instanceUid = e++),
                    (s.htmlExpr = /^(?:\s*(<[\w\W]+>)[^>]*)$/),
                    s.registerBreakpoints(),
                    s.init(!0);
            }).prototype.activateADA = function () {
                this.$slideTrack.find(".slick-active").attr({"aria-hidden": "false"}).find("a, input, button, select").attr({tabindex: "0"});
            }),
            (i.prototype.addSlide = i.prototype.slickAdd = function (e, i, o) {
                var s = this;
                if ("boolean" == typeof i) (o = i), (i = null);
                else if (i < 0 || i >= s.slideCount) return !1;
                s.unload(),
                    "number" == typeof i
                        ? 0 === i && 0 === s.$slides.length
                        ? t(e).appendTo(s.$slideTrack)
                        : o
                            ? t(e).insertBefore(s.$slides.eq(i))
                            : t(e).insertAfter(s.$slides.eq(i))
                        : !0 === o
                        ? t(e).prependTo(s.$slideTrack)
                        : t(e).appendTo(s.$slideTrack),
                    (s.$slides = s.$slideTrack.children(this.options.slide)),
                    s.$slideTrack.children(this.options.slide).detach(),
                    s.$slideTrack.append(s.$slides),
                    s.$slides.each(function (e, i) {
                        t(i).attr("data-slick-index", e);
                    }),
                    (s.$slidesCache = s.$slides),
                    s.reinit();
            }),
            (i.prototype.animateHeight = function () {
                var t,
                    e = this;
                1 === e.options.slidesToShow && !0 === e.options.adaptiveHeight && !1 === e.options.vertical && ((t = e.$slides.eq(e.currentSlide).outerHeight(!0)), e.$list.animate({height: t}, e.options.speed));
            }),
            (i.prototype.animateSlide = function (e, i) {
                var o = {},
                    s = this;
                s.animateHeight(),
                !0 === s.options.rtl && !1 === s.options.vertical && (e = -e),
                    !1 === s.transformsEnabled
                        ? !1 === s.options.vertical
                        ? s.$slideTrack.animate({left: e}, s.options.speed, s.options.easing, i)
                        : s.$slideTrack.animate({top: e}, s.options.speed, s.options.easing, i)
                        : !1 === s.cssTransitions
                        ? (!0 === s.options.rtl && (s.currentLeft = -s.currentLeft),
                            t({animStart: s.currentLeft}).animate(
                                {animStart: e},
                                {
                                    duration: s.options.speed,
                                    easing: s.options.easing,
                                    step: function (t) {
                                        (t = Math.ceil(t)), !1 === s.options.vertical ? (o[s.animType] = "translate(" + t + "px, 0px)") : (o[s.animType] = "translate(0px," + t + "px)"), s.$slideTrack.css(o);
                                    },
                                    complete: function () {
                                        i && i.call();
                                    },
                                }
                            ))
                        : (s.applyTransition(),
                            (e = Math.ceil(e)),
                            !1 === s.options.vertical ? (o[s.animType] = "translate3d(" + e + "px, 0px, 0px)") : (o[s.animType] = "translate3d(0px," + e + "px, 0px)"),
                            s.$slideTrack.css(o),
                        i &&
                        setTimeout(function () {
                            s.disableTransition(), i.call();
                        }, s.options.speed));
            }),
            (i.prototype.getNavTarget = function () {
                var e = this.options.asNavFor;
                return e && null !== e && (e = t(e).not(this.$slider)), e;
            }),
            (i.prototype.asNavFor = function (e) {
                var i = this.getNavTarget();
                null !== i &&
                "object" == typeof i &&
                i.each(function () {
                    var i = t(this).slick("getSlick");
                    i.unslicked || i.slideHandler(e, !0);
                });
            }),
            (i.prototype.applyTransition = function (t) {
                var e = this,
                    i = {};
                !1 === e.options.fade ? (i[e.transitionType] = e.transformType + " " + e.options.speed + "ms " + e.options.cssEase) : (i[e.transitionType] = "opacity " + e.options.speed + "ms " + e.options.cssEase),
                    (!1 === e.options.fade ? e.$slideTrack : e.$slides.eq(t)).css(i);
            }),
            (i.prototype.autoPlay = function () {
                var t = this;
                t.autoPlayClear(), t.slideCount > t.options.slidesToShow && (t.autoPlayTimer = setInterval(t.autoPlayIterator, t.options.autoplaySpeed));
            }),
            (i.prototype.autoPlayClear = function () {
                this.autoPlayTimer && clearInterval(this.autoPlayTimer);
            }),
            (i.prototype.autoPlayIterator = function () {
                var t = this,
                    e = t.currentSlide + t.options.slidesToScroll;
                t.paused ||
                t.interrupted ||
                t.focussed ||
                (!1 === t.options.infinite &&
                (1 === t.direction && t.currentSlide + 1 === t.slideCount - 1 ? (t.direction = 0) : 0 === t.direction && ((e = t.currentSlide - t.options.slidesToScroll), t.currentSlide - 1 == 0 && (t.direction = 1))),
                    t.slideHandler(e));
            }),
            (i.prototype.buildArrows = function () {
                var e = this;
                !0 === e.options.arrows &&
                ((e.$prevArrow = t(e.options.prevArrow).addClass("slick-arrow")),
                    (e.$nextArrow = t(e.options.nextArrow).addClass("slick-arrow")),
                    e.slideCount > e.options.slidesToShow
                        ? (e.$prevArrow.removeClass("slick-hidden").removeAttr("aria-hidden tabindex"),
                            e.$nextArrow.removeClass("slick-hidden").removeAttr("aria-hidden tabindex"),
                        e.htmlExpr.test(e.options.prevArrow) && e.$prevArrow.prependTo(e.options.appendArrows),
                        e.htmlExpr.test(e.options.nextArrow) && e.$nextArrow.appendTo(e.options.appendArrows),
                        !0 !== e.options.infinite && e.$prevArrow.addClass("slick-disabled").attr("aria-disabled", "true"))
                        : e.$prevArrow.add(e.$nextArrow).addClass("slick-hidden").attr({
                            "aria-disabled": "true",
                            tabindex: "-1"
                        }));
            }),
            (i.prototype.buildDots = function () {
                var e,
                    i,
                    o = this;
                if (!0 === o.options.dots && o.slideCount > o.options.slidesToShow) {
                    for (o.$slider.addClass("slick-dotted"), i = t("<ul />").addClass(o.options.dotsClass), e = 0; e <= o.getDotCount(); e += 1) i.append(t("<li />").append(o.options.customPaging.call(this, o, e)));
                    (o.$dots = i.appendTo(o.options.appendDots)), o.$dots.find("li").first().addClass("slick-active");
                }
            }),
            (i.prototype.buildOut = function () {
                var e = this;
                (e.$slides = e.$slider.children(e.options.slide + ":not(.slick-cloned)").addClass("slick-slide")),
                    (e.slideCount = e.$slides.length),
                    e.$slides.each(function (e, i) {
                        t(i)
                            .attr("data-slick-index", e)
                            .data("originalStyling", t(i).attr("style") || "");
                    }),
                    e.$slider.addClass("slick-slider"),
                    (e.$slideTrack = 0 === e.slideCount ? t('<div class="slick-track"/>').appendTo(e.$slider) : e.$slides.wrapAll('<div class="slick-track"/>').parent()),
                    (e.$list = e.$slideTrack.wrap('<div class="slick-list"/>').parent()),
                    e.$slideTrack.css("opacity", 0),
                (!0 !== e.options.centerMode && !0 !== e.options.swipeToSlide) || (e.options.slidesToScroll = 1),
                    t("img[data-lazy]", e.$slider).not("[src]").addClass("slick-loading"),
                    e.setupInfinite(),
                    e.buildArrows(),
                    e.buildDots(),
                    e.updateDots(),
                    e.setSlideClasses("number" == typeof e.currentSlide ? e.currentSlide : 0),
                !0 === e.options.draggable && e.$list.addClass("draggable");
            }),
            (i.prototype.buildRows = function () {
                var t,
                    e,
                    i,
                    o = this,
                    s = document.createDocumentFragment(),
                    n = o.$slider.children();
                if (0 < o.options.rows) {
                    for (i = o.options.slidesPerRow * o.options.rows, e = Math.ceil(n.length / i), t = 0; t < e; t++) {
                        for (var a = document.createElement("div"), r = 0; r < o.options.rows; r++) {
                            for (var l = document.createElement("div"), c = 0; c < o.options.slidesPerRow; c++) {
                                var d = t * i + (r * o.options.slidesPerRow + c);
                                n.get(d) && l.appendChild(n.get(d));
                            }
                            a.appendChild(l);
                        }
                        s.appendChild(a);
                    }
                    o.$slider.empty().append(s),
                        o.$slider
                            .children()
                            .children()
                            .children()
                            .css({width: 100 / o.options.slidesPerRow + "%", display: "inline-block"});
                }
            }),
            (i.prototype.checkResponsive = function (e, i) {
                var o,
                    s,
                    n,
                    a = this,
                    r = !1,
                    l = a.$slider.width(),
                    c = window.innerWidth || t(window).width();
                if (("window" === a.respondTo ? (n = c) : "slider" === a.respondTo ? (n = l) : "min" === a.respondTo && (n = Math.min(c, l)), a.options.responsive && a.options.responsive.length && null !== a.options.responsive)) {
                    for (o in ((s = null), a.breakpoints)) a.breakpoints.hasOwnProperty(o) && (!1 === a.originalSettings.mobileFirst ? n < a.breakpoints[o] && (s = a.breakpoints[o]) : n > a.breakpoints[o] && (s = a.breakpoints[o]));
                    null !== s
                        ? (null !== a.activeBreakpoint && s === a.activeBreakpoint && !i) ||
                        ((a.activeBreakpoint = s),
                            "unslick" === a.breakpointSettings[s] ? a.unslick(s) : ((a.options = t.extend({}, a.originalSettings, a.breakpointSettings[s])), !0 === e && (a.currentSlide = a.options.initialSlide), a.refresh(e)),
                            (r = s))
                        : null !== a.activeBreakpoint && ((a.activeBreakpoint = null), (a.options = a.originalSettings), !0 === e && (a.currentSlide = a.options.initialSlide), a.refresh(e), (r = s)),
                    e || !1 === r || a.$slider.trigger("breakpoint", [a, r]);
                }
            }),
            (i.prototype.changeSlide = function (e, i) {
                var o,
                    s,
                    n = this,
                    a = t(e.currentTarget);
                switch ((a.is("a") && e.preventDefault(), a.is("li") || (a = a.closest("li")), (o = n.slideCount % n.options.slidesToScroll != 0 ? 0 : (n.slideCount - n.currentSlide) % n.options.slidesToScroll), e.data.message)) {
                    case "previous":
                        (s = 0 == o ? n.options.slidesToScroll : n.options.slidesToShow - o), n.slideCount > n.options.slidesToShow && n.slideHandler(n.currentSlide - s, !1, i);
                        break;
                    case "next":
                        (s = 0 == o ? n.options.slidesToScroll : o), n.slideCount > n.options.slidesToShow && n.slideHandler(n.currentSlide + s, !1, i);
                        break;
                    case "index":
                        (e = 0 === e.data.index ? 0 : e.data.index || a.index() * n.options.slidesToScroll), n.slideHandler(n.checkNavigable(e), !1, i), a.children().trigger("focus");
                        break;
                    default:
                        return;
                }
            }),
            (i.prototype.checkNavigable = function (t) {
                var e = this.getNavigableIndexes(),
                    i = 0;
                if (t > e[e.length - 1]) t = e[e.length - 1];
                else
                    for (var o in e) {
                        if (t < e[o]) {
                            t = i;
                            break;
                        }
                        i = e[o];
                    }
                return t;
            }),
            (i.prototype.cleanUpEvents = function () {
                var e = this;
                e.options.dots &&
                null !== e.$dots &&
                (t("li", e.$dots).off("click.slick", e.changeSlide).off("mouseenter.slick", t.proxy(e.interrupt, e, !0)).off("mouseleave.slick", t.proxy(e.interrupt, e, !1)),
                !0 === e.options.accessibility && e.$dots.off("keydown.slick", e.keyHandler)),
                    e.$slider.off("focus.slick blur.slick"),
                !0 === e.options.arrows &&
                e.slideCount > e.options.slidesToShow &&
                (e.$prevArrow && e.$prevArrow.off("click.slick", e.changeSlide),
                e.$nextArrow && e.$nextArrow.off("click.slick", e.changeSlide),
                !0 === e.options.accessibility && (e.$prevArrow && e.$prevArrow.off("keydown.slick", e.keyHandler), e.$nextArrow && e.$nextArrow.off("keydown.slick", e.keyHandler))),
                    e.$list.off("touchstart.slick mousedown.slick", e.swipeHandler),
                    e.$list.off("touchmove.slick mousemove.slick", e.swipeHandler),
                    e.$list.off("touchend.slick mouseup.slick", e.swipeHandler),
                    e.$list.off("touchcancel.slick mouseleave.slick", e.swipeHandler),
                    e.$list.off("click.slick", e.clickHandler),
                    t(document).off(e.visibilityChange, e.visibility),
                    e.cleanUpSlideEvents(),
                !0 === e.options.accessibility && e.$list.off("keydown.slick", e.keyHandler),
                !0 === e.options.focusOnSelect && t(e.$slideTrack).children().off("click.slick", e.selectHandler),
                    t(window).off("orientationchange.slick.slick-" + e.instanceUid, e.orientationChange),
                    t(window).off("resize.slick.slick-" + e.instanceUid, e.resize),
                    t("[draggable!=true]", e.$slideTrack).off("dragstart", e.preventDefault),
                    t(window).off("load.slick.slick-" + e.instanceUid, e.setPosition);
            }),
            (i.prototype.cleanUpSlideEvents = function () {
                var e = this;
                e.$list.off("mouseenter.slick", t.proxy(e.interrupt, e, !0)), e.$list.off("mouseleave.slick", t.proxy(e.interrupt, e, !1));
            }),
            (i.prototype.cleanUpRows = function () {
                var t;
                0 < this.options.rows && ((t = this.$slides.children().children()).removeAttr("style"), this.$slider.empty().append(t));
            }),
            (i.prototype.clickHandler = function (t) {
                !1 === this.shouldClick && (t.stopImmediatePropagation(), t.stopPropagation(), t.preventDefault());
            }),
            (i.prototype.destroy = function (e) {
                var i = this;
                i.autoPlayClear(),
                    (i.touchObject = {}),
                    i.cleanUpEvents(),
                    t(".slick-cloned", i.$slider).detach(),
                i.$dots && i.$dots.remove(),
                i.$prevArrow &&
                i.$prevArrow.length &&
                (i.$prevArrow.removeClass("slick-disabled slick-arrow slick-hidden").removeAttr("aria-hidden aria-disabled tabindex").css("display", ""), i.htmlExpr.test(i.options.prevArrow) && i.$prevArrow.remove()),
                i.$nextArrow &&
                i.$nextArrow.length &&
                (i.$nextArrow.removeClass("slick-disabled slick-arrow slick-hidden").removeAttr("aria-hidden aria-disabled tabindex").css("display", ""), i.htmlExpr.test(i.options.nextArrow) && i.$nextArrow.remove()),
                i.$slides &&
                (i.$slides
                    .removeClass("slick-slide slick-active slick-center slick-visible slick-current")
                    .removeAttr("aria-hidden")
                    .removeAttr("data-slick-index")
                    .each(function () {
                        t(this).attr("style", t(this).data("originalStyling"));
                    }),
                    i.$slideTrack.children(this.options.slide).detach(),
                    i.$slideTrack.detach(),
                    i.$list.detach(),
                    i.$slider.append(i.$slides)),
                    i.cleanUpRows(),
                    i.$slider.removeClass("slick-slider"),
                    i.$slider.removeClass("slick-initialized"),
                    i.$slider.removeClass("slick-dotted"),
                    (i.unslicked = !0),
                e || i.$slider.trigger("destroy", [i]);
            }),
            (i.prototype.disableTransition = function (t) {
                var e = {};
                (e[this.transitionType] = ""), (!1 === this.options.fade ? this.$slideTrack : this.$slides.eq(t)).css(e);
            }),
            (i.prototype.fadeSlide = function (t, e) {
                var i = this;
                !1 === i.cssTransitions
                    ? (i.$slides.eq(t).css({zIndex: i.options.zIndex}), i.$slides.eq(t).animate({opacity: 1}, i.options.speed, i.options.easing, e))
                    : (i.applyTransition(t),
                        i.$slides.eq(t).css({opacity: 1, zIndex: i.options.zIndex}),
                    e &&
                    setTimeout(function () {
                        i.disableTransition(t), e.call();
                    }, i.options.speed));
            }),
            (i.prototype.fadeSlideOut = function (t) {
                var e = this;
                !1 === e.cssTransitions ? e.$slides.eq(t).animate({
                    opacity: 0,
                    zIndex: e.options.zIndex - 2
                }, e.options.speed, e.options.easing) : (e.applyTransition(t), e.$slides.eq(t).css({
                    opacity: 0,
                    zIndex: e.options.zIndex - 2
                }));
            }),
            (i.prototype.filterSlides = i.prototype.slickFilter = function (t) {
                var e = this;
                null !== t && ((e.$slidesCache = e.$slides), e.unload(), e.$slideTrack.children(this.options.slide).detach(), e.$slidesCache.filter(t).appendTo(e.$slideTrack), e.reinit());
            }),
            (i.prototype.focusHandler = function () {
                var e = this;
                e.$slider
                    .off("focus.slick blur.slick")
                    .on("focus.slick", "*", function (i) {
                        var o = t(this);
                        setTimeout(function () {
                            e.options.pauseOnFocus && o.is(":focus") && ((e.focussed = !0), e.autoPlay());
                        }, 0);
                    })
                    .on("blur.slick", "*", function (i) {
                        t(this), e.options.pauseOnFocus && ((e.focussed = !1), e.autoPlay());
                    });
            }),
            (i.prototype.getCurrent = i.prototype.slickCurrentSlide = function () {
                return this.currentSlide;
            }),
            (i.prototype.getDotCount = function () {
                var t = this,
                    e = 0,
                    i = 0,
                    o = 0;
                if (!0 === t.options.infinite)
                    if (t.slideCount <= t.options.slidesToShow) ++o;
                    else for (; e < t.slideCount;) ++o, (e = i + t.options.slidesToScroll), (i += t.options.slidesToScroll <= t.options.slidesToShow ? t.options.slidesToScroll : t.options.slidesToShow);
                else if (!0 === t.options.centerMode) o = t.slideCount;
                else if (t.options.asNavFor) for (; e < t.slideCount;) ++o, (e = i + t.options.slidesToScroll), (i += t.options.slidesToScroll <= t.options.slidesToShow ? t.options.slidesToScroll : t.options.slidesToShow);
                else o = 1 + Math.ceil((t.slideCount - t.options.slidesToShow) / t.options.slidesToScroll);
                return o - 1;
            }),
            (i.prototype.getLeft = function (t) {
                var e,
                    i,
                    o = this,
                    s = 0;
                return (
                    (o.slideOffset = 0),
                        (e = o.$slides.first().outerHeight(!0)),
                        !0 === o.options.infinite
                            ? (o.slideCount > o.options.slidesToShow &&
                            ((o.slideOffset = o.slideWidth * o.options.slidesToShow * -1),
                                (i = -1),
                            !0 === o.options.vertical && !0 === o.options.centerMode && (2 === o.options.slidesToShow ? (i = -1.5) : 1 === o.options.slidesToShow && (i = -2)),
                                (s = e * o.options.slidesToShow * i)),
                            o.slideCount % o.options.slidesToScroll != 0 &&
                            t + o.options.slidesToScroll > o.slideCount &&
                            o.slideCount > o.options.slidesToShow &&
                            (s =
                                t > o.slideCount
                                    ? ((o.slideOffset = (o.options.slidesToShow - (t - o.slideCount)) * o.slideWidth * -1), (o.options.slidesToShow - (t - o.slideCount)) * e * -1)
                                    : ((o.slideOffset = (o.slideCount % o.options.slidesToScroll) * o.slideWidth * -1), (o.slideCount % o.options.slidesToScroll) * e * -1)))
                            : t + o.options.slidesToShow > o.slideCount && ((o.slideOffset = (t + o.options.slidesToShow - o.slideCount) * o.slideWidth), (s = (t + o.options.slidesToShow - o.slideCount) * e)),
                    o.slideCount <= o.options.slidesToShow && (s = o.slideOffset = 0),
                        !0 === o.options.centerMode && o.slideCount <= o.options.slidesToShow
                            ? (o.slideOffset = (o.slideWidth * Math.floor(o.options.slidesToShow)) / 2 - (o.slideWidth * o.slideCount) / 2)
                            : !0 === o.options.centerMode && !0 === o.options.infinite
                            ? (o.slideOffset += o.slideWidth * Math.floor(o.options.slidesToShow / 2) - o.slideWidth)
                            : !0 === o.options.centerMode && ((o.slideOffset = 0), (o.slideOffset += o.slideWidth * Math.floor(o.options.slidesToShow / 2))),
                        (e = !1 === o.options.vertical ? t * o.slideWidth * -1 + o.slideOffset : t * e * -1 + s),
                    !0 === o.options.variableWidth &&
                    ((s = o.slideCount <= o.options.slidesToShow || !1 === o.options.infinite ? o.$slideTrack.children(".slick-slide").eq(t) : o.$slideTrack.children(".slick-slide").eq(t + o.options.slidesToShow)),
                        (e = !0 === o.options.rtl ? (s[0] ? -1 * (o.$slideTrack.width() - s[0].offsetLeft - s.width()) : 0) : s[0] ? -1 * s[0].offsetLeft : 0),
                    !0 === o.options.centerMode &&
                    ((s = o.slideCount <= o.options.slidesToShow || !1 === o.options.infinite ? o.$slideTrack.children(".slick-slide").eq(t) : o.$slideTrack.children(".slick-slide").eq(t + o.options.slidesToShow + 1)),
                        (e = !0 === o.options.rtl ? (s[0] ? -1 * (o.$slideTrack.width() - s[0].offsetLeft - s.width()) : 0) : s[0] ? -1 * s[0].offsetLeft : 0),
                        (e += (o.$list.width() - s.outerWidth()) / 2))),
                        e
                );
            }),
            (i.prototype.getOption = i.prototype.slickGetOption = function (t) {
                return this.options[t];
            }),
            (i.prototype.getNavigableIndexes = function () {
                for (var t = this, e = 0, i = 0, o = [], s = !1 === t.options.infinite ? t.slideCount : ((e = -1 * t.options.slidesToScroll), (i = -1 * t.options.slidesToScroll), 2 * t.slideCount); e < s;)
                    o.push(e), (e = i + t.options.slidesToScroll), (i += t.options.slidesToScroll <= t.options.slidesToShow ? t.options.slidesToScroll : t.options.slidesToShow);
                return o;
            }),
            (i.prototype.getSlick = function () {
                return this;
            }),
            (i.prototype.getSlideCount = function () {
                var e,
                    i = this,
                    o = !0 === i.options.centerMode ? Math.floor(i.$list.width() / 2) : 0,
                    s = -1 * i.swipeLeft + o;
                return !0 === i.options.swipeToSlide
                    ? (i.$slideTrack.find(".slick-slide").each(function (o, n) {
                        var a = t(n).outerWidth(),
                            r = n.offsetLeft;
                        if ((!0 !== i.options.centerMode && (r += a / 2), s < r + a)) return (e = n), !1;
                    }),
                    Math.abs(t(e).attr("data-slick-index") - i.currentSlide) || 1)
                    : i.options.slidesToScroll;
            }),
            (i.prototype.goTo = i.prototype.slickGoTo = function (t, e) {
                this.changeSlide({data: {message: "index", index: parseInt(t)}}, e);
            }),
            (i.prototype.init = function (e) {
                var i = this;
                t(i.$slider).hasClass("slick-initialized") ||
                (t(i.$slider).addClass("slick-initialized"), i.buildRows(), i.buildOut(), i.setProps(), i.startLoad(), i.loadSlider(), i.initializeEvents(), i.updateArrows(), i.updateDots(), i.checkResponsive(!0), i.focusHandler()),
                e && i.$slider.trigger("init", [i]),
                !0 === i.options.accessibility && i.initADA(),
                i.options.autoplay && ((i.paused = !1), i.autoPlay());
            }),
            (i.prototype.initADA = function () {
                var e = this,
                    i = Math.ceil(e.slideCount / e.options.slidesToShow),
                    o = e.getNavigableIndexes().filter(function (t) {
                        return 0 <= t && t < e.slideCount;
                    });
                e.$slides.add(e.$slideTrack.find(".slick-cloned")).attr({
                    "aria-hidden": "true",
                    tabindex: "-1"
                }).find("a, input, button, select").attr({tabindex: "-1"}),
                null !== e.$dots &&
                (e.$slides.not(e.$slideTrack.find(".slick-cloned")).each(function (i) {
                    var s = o.indexOf(i);
                    t(this).attr({role: "tabpanel", id: "slick-slide" + e.instanceUid + i, tabindex: -1}),
                    -1 !== s && ((s = "slick-slide-control" + e.instanceUid + s), t("#" + s).length && t(this).attr({"aria-describedby": s}));
                }),
                    e.$dots
                        .attr("role", "tablist")
                        .find("li")
                        .each(function (s) {
                            var n = o[s];
                            t(this).attr({role: "presentation"}),
                                t(this)
                                    .find("button")
                                    .first()
                                    .attr({
                                        role: "tab",
                                        id: "slick-slide-control" + e.instanceUid + s,
                                        "aria-controls": "slick-slide" + e.instanceUid + n,
                                        "aria-label": s + 1 + " of " + i,
                                        "aria-selected": null,
                                        tabindex: "-1"
                                    });
                        })
                        .eq(e.currentSlide)
                        .find("button")
                        .attr({"aria-selected": "true", tabindex: "0"})
                        .end());
                for (var s = e.currentSlide, n = s + e.options.slidesToShow; s < n; s++) e.options.focusOnChange ? e.$slides.eq(s).attr({tabindex: "0"}) : e.$slides.eq(s).removeAttr("tabindex");
                e.activateADA();
            }),
            (i.prototype.initArrowEvents = function () {
                var t = this;
                !0 === t.options.arrows &&
                t.slideCount > t.options.slidesToShow &&
                (t.$prevArrow.off("click.slick").on("click.slick", {message: "previous"}, t.changeSlide),
                    t.$nextArrow.off("click.slick").on("click.slick", {message: "next"}, t.changeSlide),
                !0 === t.options.accessibility && (t.$prevArrow.on("keydown.slick", t.keyHandler), t.$nextArrow.on("keydown.slick", t.keyHandler)));
            }),
            (i.prototype.initDotEvents = function () {
                var e = this;
                !0 === e.options.dots && e.slideCount > e.options.slidesToShow && (t("li", e.$dots).on("click.slick", {message: "index"}, e.changeSlide), !0 === e.options.accessibility && e.$dots.on("keydown.slick", e.keyHandler)),
                !0 === e.options.dots &&
                !0 === e.options.pauseOnDotsHover &&
                e.slideCount > e.options.slidesToShow &&
                t("li", e.$dots).on("mouseenter.slick", t.proxy(e.interrupt, e, !0)).on("mouseleave.slick", t.proxy(e.interrupt, e, !1));
            }),
            (i.prototype.initSlideEvents = function () {
                var e = this;
                e.options.pauseOnHover && (e.$list.on("mouseenter.slick", t.proxy(e.interrupt, e, !0)), e.$list.on("mouseleave.slick", t.proxy(e.interrupt, e, !1)));
            }),
            (i.prototype.initializeEvents = function () {
                var e = this;
                e.initArrowEvents(),
                    e.initDotEvents(),
                    e.initSlideEvents(),
                    e.$list.on("touchstart.slick mousedown.slick", {action: "start"}, e.swipeHandler),
                    e.$list.on("touchmove.slick mousemove.slick", {action: "move"}, e.swipeHandler),
                    e.$list.on("touchend.slick mouseup.slick", {action: "end"}, e.swipeHandler),
                    e.$list.on("touchcancel.slick mouseleave.slick", {action: "end"}, e.swipeHandler),
                    e.$list.on("click.slick", e.clickHandler),
                    t(document).on(e.visibilityChange, t.proxy(e.visibility, e)),
                !0 === e.options.accessibility && e.$list.on("keydown.slick", e.keyHandler),
                !0 === e.options.focusOnSelect && t(e.$slideTrack).children().on("click.slick", e.selectHandler),
                    t(window).on("orientationchange.slick.slick-" + e.instanceUid, t.proxy(e.orientationChange, e)),
                    t(window).on("resize.slick.slick-" + e.instanceUid, t.proxy(e.resize, e)),
                    t("[draggable!=true]", e.$slideTrack).on("dragstart", e.preventDefault),
                    t(window).on("load.slick.slick-" + e.instanceUid, e.setPosition),
                    t(e.setPosition);
            }),
            (i.prototype.initUI = function () {
                var t = this;
                !0 === t.options.arrows && t.slideCount > t.options.slidesToShow && (t.$prevArrow.show(), t.$nextArrow.show()), !0 === t.options.dots && t.slideCount > t.options.slidesToShow && t.$dots.show();
            }),
            (i.prototype.keyHandler = function (t) {
                var e = this;
                t.target.tagName.match("TEXTAREA|INPUT|SELECT") ||
                (37 === t.keyCode && !0 === e.options.accessibility
                    ? e.changeSlide({data: {message: !0 === e.options.rtl ? "next" : "previous"}})
                    : 39 === t.keyCode && !0 === e.options.accessibility && e.changeSlide({data: {message: !0 === e.options.rtl ? "previous" : "next"}}));
            }),
            (i.prototype.lazyLoad = function () {
                function e(e) {
                    t("img[data-lazy]", e).each(function () {
                        var e = t(this),
                            i = t(this).attr("data-lazy"),
                            o = t(this).attr("data-srcset"),
                            s = t(this).attr("data-sizes") || n.$slider.attr("data-sizes"),
                            a = document.createElement("img");
                        (a.onload = function () {
                            e.animate({opacity: 0}, 100, function () {
                                o && (e.attr("srcset", o), s && e.attr("sizes", s)),
                                    e.attr("src", i).animate({opacity: 1}, 200, function () {
                                        e.removeAttr("data-lazy data-srcset data-sizes").removeClass("slick-loading");
                                    }),
                                    n.$slider.trigger("lazyLoaded", [n, e, i]);
                            });
                        }),
                            (a.onerror = function () {
                                e.removeAttr("data-lazy").removeClass("slick-loading").addClass("slick-lazyload-error"), n.$slider.trigger("lazyLoadError", [n, e, i]);
                            }),
                            (a.src = i);
                    });
                }

                var i,
                    o,
                    s,
                    n = this;
                if (
                    (!0 === n.options.centerMode
                        ? (s =
                            !0 === n.options.infinite
                                ? (o = n.currentSlide + (n.options.slidesToShow / 2 + 1)) + n.options.slidesToShow + 2
                                : ((o = Math.max(0, n.currentSlide - (n.options.slidesToShow / 2 + 1))), n.options.slidesToShow / 2 + 1 + 2 + n.currentSlide))
                        : ((o = n.options.infinite ? n.options.slidesToShow + n.currentSlide : n.currentSlide), (s = Math.ceil(o + n.options.slidesToShow)), !0 === n.options.fade && (0 < o && o--, s <= n.slideCount && s++)),
                        (i = n.$slider.find(".slick-slide").slice(o, s)),
                    "anticipated" === n.options.lazyLoad)
                )
                    for (var a = o - 1, r = s, l = n.$slider.find(".slick-slide"), c = 0; c < n.options.slidesToScroll; c++) a < 0 && (a = n.slideCount - 1), (i = (i = i.add(l.eq(a))).add(l.eq(r))), a--, r++;
                e(i),
                    n.slideCount <= n.options.slidesToShow
                        ? e(n.$slider.find(".slick-slide"))
                        : n.currentSlide >= n.slideCount - n.options.slidesToShow
                        ? e(n.$slider.find(".slick-cloned").slice(0, n.options.slidesToShow))
                        : 0 === n.currentSlide && e(n.$slider.find(".slick-cloned").slice(-1 * n.options.slidesToShow));
            }),
            (i.prototype.loadSlider = function () {
                var t = this;
                t.setPosition(), t.$slideTrack.css({opacity: 1}), t.$slider.removeClass("slick-loading"), t.initUI(), "progressive" === t.options.lazyLoad && t.progressiveLazyLoad();
            }),
            (i.prototype.next = i.prototype.slickNext = function () {
                this.changeSlide({data: {message: "next"}});
            }),
            (i.prototype.orientationChange = function () {
                this.checkResponsive(), this.setPosition();
            }),
            (i.prototype.pause = i.prototype.slickPause = function () {
                this.autoPlayClear(), (this.paused = !0);
            }),
            (i.prototype.play = i.prototype.slickPlay = function () {
                var t = this;
                t.autoPlay(), (t.options.autoplay = !0), (t.paused = !1), (t.focussed = !1), (t.interrupted = !1);
            }),
            (i.prototype.postSlide = function (e) {
                var i = this;
                !i.unslicked &&
                (i.$slider.trigger("afterChange", [i, e]),
                    (i.animating = !1),
                i.slideCount > i.options.slidesToShow && i.setPosition(),
                    (i.swipeLeft = null),
                i.options.autoplay && i.autoPlay(),
                !0 === i.options.accessibility && (i.initADA(), i.options.focusOnChange)) &&
                t(i.$slides.get(i.currentSlide)).attr("tabindex", 0).focus();
            }),
            (i.prototype.prev = i.prototype.slickPrev = function () {
                this.changeSlide({data: {message: "previous"}});
            }),
            (i.prototype.preventDefault = function (t) {
                t.preventDefault();
            }),
            (i.prototype.progressiveLazyLoad = function (e) {
                e = e || 1;
                var i,
                    o,
                    s,
                    n,
                    a = this,
                    r = t("img[data-lazy]", a.$slider);
                r.length
                    ? ((i = r.first()),
                        (o = i.attr("data-lazy")),
                        (s = i.attr("data-srcset")),
                        (n = i.attr("data-sizes") || a.$slider.attr("data-sizes")),
                        ((r = document.createElement("img")).onload = function () {
                            s && (i.attr("srcset", s), n && i.attr("sizes", n)),
                                i.attr("src", o).removeAttr("data-lazy data-srcset data-sizes").removeClass("slick-loading"),
                            !0 === a.options.adaptiveHeight && a.setPosition(),
                                a.$slider.trigger("lazyLoaded", [a, i, o]),
                                a.progressiveLazyLoad();
                        }),
                        (r.onerror = function () {
                            e < 3
                                ? setTimeout(function () {
                                    a.progressiveLazyLoad(e + 1);
                                }, 500)
                                : (i.removeAttr("data-lazy").removeClass("slick-loading").addClass("slick-lazyload-error"), a.$slider.trigger("lazyLoadError", [a, i, o]), a.progressiveLazyLoad());
                        }),
                        (r.src = o))
                    : a.$slider.trigger("allImagesLoaded", [a]);
            }),
            (i.prototype.refresh = function (e) {
                var i = this,
                    o = i.slideCount - i.options.slidesToShow;
                !i.options.infinite && i.currentSlide > o && (i.currentSlide = o),
                i.slideCount <= i.options.slidesToShow && (i.currentSlide = 0),
                    (o = i.currentSlide),
                    i.destroy(!0),
                    t.extend(i, i.initials, {currentSlide: o}),
                    i.init(),
                e || i.changeSlide({data: {message: "index", index: o}}, !1);
            }),
            (i.prototype.registerBreakpoints = function () {
                var e,
                    i,
                    o,
                    s = this,
                    n = s.options.responsive || null;
                if ("array" === t.type(n) && n.length) {
                    for (e in ((s.respondTo = s.options.respondTo || "window"), n))
                        if (((o = s.breakpoints.length - 1), n.hasOwnProperty(e))) {
                            for (i = n[e].breakpoint; 0 <= o;) s.breakpoints[o] && s.breakpoints[o] === i && s.breakpoints.splice(o, 1), o--;
                            s.breakpoints.push(i), (s.breakpointSettings[i] = n[e].settings);
                        }
                    s.breakpoints.sort(function (t, e) {
                        return s.options.mobileFirst ? t - e : e - t;
                    });
                }
            }),
            (i.prototype.reinit = function () {
                var e = this;
                (e.$slides = e.$slideTrack.children(e.options.slide).addClass("slick-slide")),
                    (e.slideCount = e.$slides.length),
                e.currentSlide >= e.slideCount && 0 !== e.currentSlide && (e.currentSlide = e.currentSlide - e.options.slidesToScroll),
                e.slideCount <= e.options.slidesToShow && (e.currentSlide = 0),
                    e.registerBreakpoints(),
                    e.setProps(),
                    e.setupInfinite(),
                    e.buildArrows(),
                    e.updateArrows(),
                    e.initArrowEvents(),
                    e.buildDots(),
                    e.updateDots(),
                    e.initDotEvents(),
                    e.cleanUpSlideEvents(),
                    e.initSlideEvents(),
                    e.checkResponsive(!1, !0),
                !0 === e.options.focusOnSelect && t(e.$slideTrack).children().on("click.slick", e.selectHandler),
                    e.setSlideClasses("number" == typeof e.currentSlide ? e.currentSlide : 0),
                    e.setPosition(),
                    e.focusHandler(),
                    (e.paused = !e.options.autoplay),
                    e.autoPlay(),
                    e.$slider.trigger("reInit", [e]);
            }),
            (i.prototype.resize = function () {
                var e = this;
                t(window).width() !== e.windowWidth &&
                (clearTimeout(e.windowDelay),
                    (e.windowDelay = window.setTimeout(function () {
                        (e.windowWidth = t(window).width()), e.checkResponsive(), e.unslicked || e.setPosition();
                    }, 50)));
            }),
            (i.prototype.removeSlide = i.prototype.slickRemove = function (t, e, i) {
                var o = this;
                return (
                    (t = "boolean" == typeof t ? (!0 === (e = t) ? 0 : o.slideCount - 1) : !0 === e ? --t : t),
                    !(o.slideCount < 1 || t < 0 || t > o.slideCount - 1) &&
                    (o.unload(),
                        (!0 === i ? o.$slideTrack.children() : o.$slideTrack.children(this.options.slide).eq(t)).remove(),
                        (o.$slides = o.$slideTrack.children(this.options.slide)),
                        o.$slideTrack.children(this.options.slide).detach(),
                        o.$slideTrack.append(o.$slides),
                        (o.$slidesCache = o.$slides),
                        void o.reinit())
                );
            }),
            (i.prototype.setCSS = function (t) {
                var e,
                    i,
                    o = this,
                    s = {};
                !0 === o.options.rtl && (t = -t),
                    (e = "left" == o.positionProp ? Math.ceil(t) + "px" : "0px"),
                    (i = "top" == o.positionProp ? Math.ceil(t) + "px" : "0px"),
                    (s[o.positionProp] = t),
                !1 === o.transformsEnabled || (!(s = {}) === o.cssTransitions ? (s[o.animType] = "translate(" + e + ", " + i + ")") : (s[o.animType] = "translate3d(" + e + ", " + i + ", 0px)")),
                    o.$slideTrack.css(s);
            }),
            (i.prototype.setDimensions = function () {
                var t = this;
                !1 === t.options.vertical
                    ? !0 === t.options.centerMode && t.$list.css({padding: "0px " + t.options.centerPadding})
                    : (t.$list.height(t.$slides.first().outerHeight(!0) * t.options.slidesToShow), !0 === t.options.centerMode && t.$list.css({padding: t.options.centerPadding + " 0px"})),
                    (t.listWidth = t.$list.width()),
                    (t.listHeight = t.$list.height()),
                    !1 === t.options.vertical && !1 === t.options.variableWidth
                        ? ((t.slideWidth = Math.ceil(t.listWidth / t.options.slidesToShow)), t.$slideTrack.width(Math.ceil(t.slideWidth * t.$slideTrack.children(".slick-slide").length)))
                        : !0 === t.options.variableWidth
                        ? t.$slideTrack.width(5e3 * t.slideCount)
                        : ((t.slideWidth = Math.ceil(t.listWidth)), t.$slideTrack.height(Math.ceil(t.$slides.first().outerHeight(!0) * t.$slideTrack.children(".slick-slide").length)));
                var e = t.$slides.first().outerWidth(!0) - t.$slides.first().width();
                !1 === t.options.variableWidth && t.$slideTrack.children(".slick-slide").width(t.slideWidth - e);
            }),
            (i.prototype.setFade = function () {
                var e,
                    i = this;
                i.$slides.each(function (o, s) {
                    (e = i.slideWidth * o * -1),
                        !0 === i.options.rtl ? t(s).css({
                            position: "relative",
                            right: e,
                            top: 0,
                            zIndex: i.options.zIndex - 2,
                            opacity: 0
                        }) : t(s).css({
                            position: "relative",
                            left: e,
                            top: 0,
                            zIndex: i.options.zIndex - 2,
                            opacity: 0
                        });
                }),
                    i.$slides.eq(i.currentSlide).css({zIndex: i.options.zIndex - 1, opacity: 1});
            }),
            (i.prototype.setHeight = function () {
                var t,
                    e = this;
                1 === e.options.slidesToShow && !0 === e.options.adaptiveHeight && !1 === e.options.vertical && ((t = e.$slides.eq(e.currentSlide).outerHeight(!0)), e.$list.css("height", t));
            }),
            (i.prototype.setOption = i.prototype.slickSetOption = function () {
                var e,
                    i,
                    o,
                    s,
                    n,
                    a = this,
                    r = !1;
                if (
                    ("object" === t.type(arguments[0])
                        ? ((o = arguments[0]), (r = arguments[1]), (n = "multiple"))
                        : "string" === t.type(arguments[0]) &&
                        ((s = arguments[1]), (r = arguments[2]), "responsive" === (o = arguments[0]) && "array" === t.type(arguments[1]) ? (n = "responsive") : void 0 !== arguments[1] && (n = "single")),
                    "single" === n)
                )
                    a.options[o] = s;
                else if ("multiple" === n)
                    t.each(o, function (t, e) {
                        a.options[t] = e;
                    });
                else if ("responsive" === n)
                    for (i in s)
                        if ("array" !== t.type(a.options.responsive)) a.options.responsive = [s[i]];
                        else {
                            for (e = a.options.responsive.length - 1; 0 <= e;) a.options.responsive[e].breakpoint === s[i].breakpoint && a.options.responsive.splice(e, 1), e--;
                            a.options.responsive.push(s[i]);
                        }
                r && (a.unload(), a.reinit());
            }),
            (i.prototype.setPosition = function () {
                var t = this;
                t.setDimensions(), t.setHeight(), !1 === t.options.fade ? t.setCSS(t.getLeft(t.currentSlide)) : t.setFade(), t.$slider.trigger("setPosition", [t]);
            }),
            (i.prototype.setProps = function () {
                var t = this,
                    e = document.body.style;
                (t.positionProp = !0 === t.options.vertical ? "top" : "left"),
                    "top" === t.positionProp ? t.$slider.addClass("slick-vertical") : t.$slider.removeClass("slick-vertical"),
                (void 0 === e.WebkitTransition && void 0 === e.MozTransition && void 0 === e.msTransition) || (!0 === t.options.useCSS && (t.cssTransitions = !0)),
                t.options.fade && ("number" == typeof t.options.zIndex ? t.options.zIndex < 3 && (t.options.zIndex = 3) : (t.options.zIndex = t.defaults.zIndex)),
                void 0 !== e.OTransform && ((t.animType = "OTransform"), (t.transformType = "-o-transform"), (t.transitionType = "OTransition"), void 0 === e.perspectiveProperty && void 0 === e.webkitPerspective && (t.animType = !1)),
                void 0 !== e.MozTransform &&
                ((t.animType = "MozTransform"), (t.transformType = "-moz-transform"), (t.transitionType = "MozTransition"), void 0 === e.perspectiveProperty && void 0 === e.MozPerspective && (t.animType = !1)),
                void 0 !== e.webkitTransform &&
                ((t.animType = "webkitTransform"), (t.transformType = "-webkit-transform"), (t.transitionType = "webkitTransition"), void 0 === e.perspectiveProperty && void 0 === e.webkitPerspective && (t.animType = !1)),
                void 0 !== e.msTransform && ((t.animType = "msTransform"), (t.transformType = "-ms-transform"), (t.transitionType = "msTransition"), void 0 === e.msTransform && (t.animType = !1)),
                void 0 !== e.transform && !1 !== t.animType && ((t.animType = "transform"), (t.transformType = "transform"), (t.transitionType = "transition")),
                    (t.transformsEnabled = t.options.useTransform && null !== t.animType && !1 !== t.animType);
            }),
            (i.prototype.setSlideClasses = function (t) {
                var e,
                    i,
                    o,
                    s = this,
                    n = s.$slider.find(".slick-slide").removeClass("slick-active slick-center slick-current").attr("aria-hidden", "true");
                s.$slides.eq(t).addClass("slick-current"),
                    !0 === s.options.centerMode
                        ? ((i = s.options.slidesToShow % 2 == 0 ? 1 : 0),
                            (o = Math.floor(s.options.slidesToShow / 2)),
                        !0 === s.options.infinite &&
                        (o <= t && t <= s.slideCount - 1 - o
                            ? s.$slides
                                .slice(t - o + i, t + o + 1)
                                .addClass("slick-active")
                                .attr("aria-hidden", "false")
                            : ((e = s.options.slidesToShow + t),
                                n
                                    .slice(e - o + 1 + i, e + o + 2)
                                    .addClass("slick-active")
                                    .attr("aria-hidden", "false")),
                            0 === t ? n.eq(n.length - 1 - s.options.slidesToShow).addClass("slick-center") : t === s.slideCount - 1 && n.eq(s.options.slidesToShow).addClass("slick-center")),
                            s.$slides.eq(t).addClass("slick-center"))
                        : 0 <= t && t <= s.slideCount - s.options.slidesToShow
                        ? s.$slides
                            .slice(t, t + s.options.slidesToShow)
                            .addClass("slick-active")
                            .attr("aria-hidden", "false")
                        : n.length <= s.options.slidesToShow
                            ? n.addClass("slick-active").attr("aria-hidden", "false")
                            : ((o = s.slideCount % s.options.slidesToShow),
                                (e = !0 === s.options.infinite ? s.options.slidesToShow + t : t),
                                (s.options.slidesToShow == s.options.slidesToScroll && s.slideCount - t < s.options.slidesToShow ? n.slice(e - (s.options.slidesToShow - o), e + o) : n.slice(e, e + s.options.slidesToShow))
                                    .addClass("slick-active")
                                    .attr("aria-hidden", "false")),
                ("ondemand" !== s.options.lazyLoad && "anticipated" !== s.options.lazyLoad) || s.lazyLoad();
            }),
            (i.prototype.setupInfinite = function () {
                var e,
                    i,
                    o,
                    s = this;
                if ((!0 === s.options.fade && (s.options.centerMode = !1), !0 === s.options.infinite && !1 === s.options.fade && ((i = null), s.slideCount > s.options.slidesToShow))) {
                    for (o = !0 === s.options.centerMode ? s.options.slidesToShow + 1 : s.options.slidesToShow, e = s.slideCount; e > s.slideCount - o; --e)
                        (i = e - 1),
                            t(s.$slides[i])
                                .clone(!0)
                                .attr("id", "")
                                .attr("data-slick-index", i - s.slideCount)
                                .prependTo(s.$slideTrack)
                                .addClass("slick-cloned");
                    for (e = 0; e < o + s.slideCount; e += 1)
                        (i = e),
                            t(s.$slides[i])
                                .clone(!0)
                                .attr("id", "")
                                .attr("data-slick-index", i + s.slideCount)
                                .appendTo(s.$slideTrack)
                                .addClass("slick-cloned");
                    s.$slideTrack
                        .find(".slick-cloned")
                        .find("[id]")
                        .each(function () {
                            t(this).attr("id", "");
                        });
                }
            }),
            (i.prototype.interrupt = function (t) {
                t || this.autoPlay(), (this.interrupted = t);
            }),
            (i.prototype.selectHandler = function (e) {
                return (
                    (e = t(e.target).is(".slick-slide") ? t(e.target) : t(e.target).parents(".slick-slide")),
                        (e = (e = parseInt(e.attr("data-slick-index"))) || 0),
                        this.slideCount <= this.options.slidesToShow ? void this.slideHandler(e, !1, !0) : void this.slideHandler(e)
                );
            }),
            (i.prototype.slideHandler = function (t, e, i) {
                var o,
                    s,
                    n,
                    a = this;
                if (((e = e || !1), !((!0 === a.animating && !0 === a.options.waitForAnimate) || (!0 === a.options.fade && a.currentSlide === t))))
                    return (
                        !1 === e && a.asNavFor(t),
                            (o = t),
                            (n = a.getLeft(o)),
                            (e = a.getLeft(a.currentSlide)),
                            (a.currentLeft = null === a.swipeLeft ? e : a.swipeLeft),
                            (!1 === a.options.infinite && !1 === a.options.centerMode && (t < 0 || t > a.getDotCount() * a.options.slidesToScroll)) ||
                            (!1 === a.options.infinite && !0 === a.options.centerMode && (t < 0 || t > a.slideCount - a.options.slidesToScroll))
                                ? void (
                                    !1 === a.options.fade &&
                                    ((o = a.currentSlide),
                                        !0 !== i && a.slideCount > a.options.slidesToShow
                                            ? a.animateSlide(e, function () {
                                                a.postSlide(o);
                                            })
                                            : a.postSlide(o))
                                )
                                : (a.options.autoplay && clearInterval(a.autoPlayTimer),
                                    (s =
                                        o < 0
                                            ? a.slideCount % a.options.slidesToScroll != 0
                                            ? a.slideCount - (a.slideCount % a.options.slidesToScroll)
                                            : a.slideCount + o
                                            : o >= a.slideCount
                                            ? a.slideCount % a.options.slidesToScroll != 0
                                                ? 0
                                                : o - a.slideCount
                                            : o),
                                    (a.animating = !0),
                                    a.$slider.trigger("beforeChange", [a, a.currentSlide, s]),
                                    (t = a.currentSlide),
                                    (a.currentSlide = s),
                                    a.setSlideClasses(a.currentSlide),
                                a.options.asNavFor && (e = (e = a.getNavTarget()).slick("getSlick")).slideCount <= e.options.slidesToShow && e.setSlideClasses(a.currentSlide),
                                    a.updateDots(),
                                    a.updateArrows(),
                                    !0 === a.options.fade
                                        ? (!0 !== i
                                        ? (a.fadeSlideOut(t),
                                            a.fadeSlide(s, function () {
                                                a.postSlide(s);
                                            }))
                                        : a.postSlide(s),
                                            void a.animateHeight())
                                        : void (!0 !== i && a.slideCount > a.options.slidesToShow
                                        ? a.animateSlide(n, function () {
                                            a.postSlide(s);
                                        })
                                        : a.postSlide(s)))
                    );
            }),
            (i.prototype.startLoad = function () {
                var t = this;
                !0 === t.options.arrows && t.slideCount > t.options.slidesToShow && (t.$prevArrow.hide(), t.$nextArrow.hide()),
                !0 === t.options.dots && t.slideCount > t.options.slidesToShow && t.$dots.hide(),
                    t.$slider.addClass("slick-loading");
            }),
            (i.prototype.swipeDirection = function () {
                var t = this,
                    e = t.touchObject.startX - t.touchObject.curX,
                    i = t.touchObject.startY - t.touchObject.curY;
                return (
                    (e = Math.atan2(i, e)),
                    (e = Math.round((180 * e) / Math.PI)) < 0 && (e = 360 - Math.abs(e)),
                        (e <= 45 && 0 <= e) || (e <= 360 && 315 <= e)
                            ? !1 === t.options.rtl
                            ? "left"
                            : "right"
                            : 135 <= e && e <= 225
                            ? !1 === t.options.rtl
                                ? "right"
                                : "left"
                            : !0 === t.options.verticalSwiping
                                ? 35 <= e && e <= 135
                                    ? "down"
                                    : "up"
                                : "vertical"
                );
            }),
            (i.prototype.swipeEnd = function (t) {
                var e,
                    i,
                    o = this;
                if (((o.dragging = !1), (o.swiping = !1), o.scrolling)) return (o.scrolling = !1);
                if (((o.interrupted = !1), (o.shouldClick = !(10 < o.touchObject.swipeLength)), void 0 === o.touchObject.curX)) return !1;
                if ((!0 === o.touchObject.edgeHit && o.$slider.trigger("edge", [o, o.swipeDirection()]), o.touchObject.swipeLength >= o.touchObject.minSwipe)) {
                    switch ((i = o.swipeDirection())) {
                        case "left":
                        case "down":
                            (e = o.options.swipeToSlide ? o.checkNavigable(o.currentSlide + o.getSlideCount()) : o.currentSlide + o.getSlideCount()), (o.currentDirection = 0);
                            break;
                        case "right":
                        case "up":
                            (e = o.options.swipeToSlide ? o.checkNavigable(o.currentSlide - o.getSlideCount()) : o.currentSlide - o.getSlideCount()), (o.currentDirection = 1);
                    }
                    "vertical" != i && (o.slideHandler(e), (o.touchObject = {}), o.$slider.trigger("swipe", [o, i]));
                } else o.touchObject.startX !== o.touchObject.curX && (o.slideHandler(o.currentSlide), (o.touchObject = {}));
            }),
            (i.prototype.swipeHandler = function (t) {
                var e = this;
                if (!(!1 === e.options.swipe || ("ontouchend" in document && !1 === e.options.swipe) || (!1 === e.options.draggable && -1 !== t.type.indexOf("mouse"))))
                    switch (
                        ((e.touchObject.fingerCount = t.originalEvent && void 0 !== t.originalEvent.touches ? t.originalEvent.touches.length : 1),
                            (e.touchObject.minSwipe = e.listWidth / e.options.touchThreshold),
                        !0 === e.options.verticalSwiping && (e.touchObject.minSwipe = e.listHeight / e.options.touchThreshold),
                            t.data.action)
                        ) {
                        case "start":
                            e.swipeStart(t);
                            break;
                        case "move":
                            e.swipeMove(t);
                            break;
                        case "end":
                            e.swipeEnd(t);
                    }
            }),
            (i.prototype.swipeMove = function (t) {
                var e,
                    i,
                    o = this,
                    s = void 0 !== t.originalEvent ? t.originalEvent.touches : null;
                return (
                    !(!o.dragging || o.scrolling || (s && 1 !== s.length)) &&
                    ((e = o.getLeft(o.currentSlide)),
                        (o.touchObject.curX = void 0 !== s ? s[0].pageX : t.clientX),
                        (o.touchObject.curY = void 0 !== s ? s[0].pageY : t.clientY),
                        (o.touchObject.swipeLength = Math.round(Math.sqrt(Math.pow(o.touchObject.curX - o.touchObject.startX, 2)))),
                        (i = Math.round(Math.sqrt(Math.pow(o.touchObject.curY - o.touchObject.startY, 2)))),
                        !o.options.verticalSwiping && !o.swiping && 4 < i
                            ? !(o.scrolling = !0)
                            : (!0 === o.options.verticalSwiping && (o.touchObject.swipeLength = i),
                                (s = o.swipeDirection()),
                            void 0 !== t.originalEvent && 4 < o.touchObject.swipeLength && ((o.swiping = !0), t.preventDefault()),
                                (i = (!1 === o.options.rtl ? 1 : -1) * (o.touchObject.curX > o.touchObject.startX ? 1 : -1)),
                            !0 === o.options.verticalSwiping && (i = o.touchObject.curY > o.touchObject.startY ? 1 : -1),
                                (t = o.touchObject.swipeLength),
                            (o.touchObject.edgeHit = !1) === o.options.infinite &&
                            ((0 === o.currentSlide && "right" === s) || (o.currentSlide >= o.getDotCount() && "left" === s)) &&
                            ((t = o.touchObject.swipeLength * o.options.edgeFriction), (o.touchObject.edgeHit = !0)),
                                !1 === o.options.vertical ? (o.swipeLeft = e + t * i) : (o.swipeLeft = e + t * (o.$list.height() / o.listWidth) * i),
                            !0 === o.options.verticalSwiping && (o.swipeLeft = e + t * i),
                            !0 !== o.options.fade && !1 !== o.options.touchMove && (!0 === o.animating ? ((o.swipeLeft = null), !1) : void o.setCSS(o.swipeLeft))))
                );
            }),
            (i.prototype.swipeStart = function (t) {
                var e,
                    i = this;
                return (
                    (i.interrupted = !0),
                        1 !== i.touchObject.fingerCount || i.slideCount <= i.options.slidesToShow
                            ? !(i.touchObject = {})
                            : (void 0 !== t.originalEvent && void 0 !== t.originalEvent.touches && (e = t.originalEvent.touches[0]),
                                (i.touchObject.startX = i.touchObject.curX = void 0 !== e ? e.pageX : t.clientX),
                                (i.touchObject.startY = i.touchObject.curY = void 0 !== e ? e.pageY : t.clientY),
                                void (i.dragging = !0))
                );
            }),
            (i.prototype.unfilterSlides = i.prototype.slickUnfilter = function () {
                var t = this;
                null !== t.$slidesCache && (t.unload(), t.$slideTrack.children(this.options.slide).detach(), t.$slidesCache.appendTo(t.$slideTrack), t.reinit());
            }),
            (i.prototype.unload = function () {
                var e = this;
                t(".slick-cloned", e.$slider).remove(),
                e.$dots && e.$dots.remove(),
                e.$prevArrow && e.htmlExpr.test(e.options.prevArrow) && e.$prevArrow.remove(),
                e.$nextArrow && e.htmlExpr.test(e.options.nextArrow) && e.$nextArrow.remove(),
                    e.$slides.removeClass("slick-slide slick-active slick-visible slick-current").attr("aria-hidden", "true").css("width", "");
            }),
            (i.prototype.unslick = function (t) {
                this.$slider.trigger("unslick", [this, t]), this.destroy();
            }),
            (i.prototype.updateArrows = function () {
                var t = this;
                Math.floor(t.options.slidesToShow / 2),
                !0 === t.options.arrows &&
                t.slideCount > t.options.slidesToShow &&
                !t.options.infinite &&
                (t.$prevArrow.removeClass("slick-disabled").attr("aria-disabled", "false"),
                    t.$nextArrow.removeClass("slick-disabled").attr("aria-disabled", "false"),
                    0 === t.currentSlide
                        ? (t.$prevArrow.addClass("slick-disabled").attr("aria-disabled", "true"), t.$nextArrow.removeClass("slick-disabled").attr("aria-disabled", "false"))
                        : ((t.currentSlide >= t.slideCount - t.options.slidesToShow && !1 === t.options.centerMode) || (t.currentSlide >= t.slideCount - 1 && !0 === t.options.centerMode)) &&
                        (t.$nextArrow.addClass("slick-disabled").attr("aria-disabled", "true"), t.$prevArrow.removeClass("slick-disabled").attr("aria-disabled", "false")));
            }),
            (i.prototype.updateDots = function () {
                var t = this;
                null !== t.$dots &&
                (t.$dots.find("li").removeClass("slick-active").end(),
                    t.$dots
                        .find("li")
                        .eq(Math.floor(t.currentSlide / t.options.slidesToScroll))
                        .addClass("slick-active"));
            }),
            (i.prototype.visibility = function () {
                this.options.autoplay && (document[this.hidden] ? (this.interrupted = !0) : (this.interrupted = !1));
            }),
            (t.fn.slick = function () {
                for (var t, e = this, o = arguments[0], s = Array.prototype.slice.call(arguments, 1), n = e.length, a = 0; a < n; a++)
                    if (("object" == typeof o || void 0 === o ? (e[a].slick = new i(e[a], o)) : (t = e[a].slick[o].apply(e[a].slick, s)), void 0 !== t)) return t;
                return e;
            });
    }),
    (function (t) {
        "function" == typeof define && define.amd ? define(["jquery"], t) : "object" == typeof exports ? (module.exports = t(jQuery || require("jquery"))) : t(jQuery);
    })(function (t) {
        (t.fn.jScrollPane = function (e) {
            function i(e, i) {
                var o,
                    s,
                    n,
                    a,
                    r,
                    l,
                    c,
                    d,
                    p,
                    u,
                    h,
                    f,
                    g,
                    v,
                    m,
                    y,
                    b,
                    w,
                    x,
                    k,
                    C,
                    S,
                    T,
                    $,
                    j,
                    P,
                    A,
                    H,
                    O,
                    E,
                    I,
                    M,
                    L,
                    z,
                    D = this,
                    F = !0,
                    B = !0,
                    Q = !1,
                    R = !1,
                    W = e.clone(!1, !1).empty(),
                    q = !1,
                    X = t.fn.mwheelIntent ? "mwheelIntent.jsp" : "mousewheel.jsp",
                    Y = function () {
                        0 < o.resizeSensorDelay
                            ? setTimeout(function () {
                                N(o);
                            }, o.resizeSensorDelay)
                            : N(o);
                    };

                function N(i) {
                    var k,
                        F,
                        B,
                        Q,
                        R,
                        W,
                        dt,
                        pt,
                        ut,
                        ht,
                        ft,
                        gt,
                        vt,
                        mt,
                        yt = !1,
                        bt = !1;
                    if (((o = i), void 0 === s))
                        (B = e.scrollTop()),
                            (Q = e.scrollLeft()),
                            e.css({overflow: "hidden", padding: 0}),
                            (n = e.innerWidth() + L),
                            (a = e.innerHeight()),
                            e.width(n),
                            (s = t('<div class="jspPane" />').css("padding", M).append(e.children())),
                            (r = t('<div class="jspContainer" />')
                                .css({width: n + "px", height: a + "px"})
                                .append(s)
                                .appendTo(e));
                    else {
                        if (
                            (e.css("width", ""),
                                r.css({width: "auto", height: "auto"}),
                                s.css("position", "static"),
                                (R = e.innerWidth() + L),
                                (W = e.innerHeight()),
                                s.css("position", "absolute"),
                                (yt = o.stickToBottom && 20 < (pt = c - a) && pt - lt() < 10),
                                (bt = o.stickToRight && 20 < (dt = l - n) && dt - rt() < 10),
                                (dt = R !== n || W !== a),
                                (n = R),
                                (a = W),
                                r.css({width: n, height: a}),
                            !dt && z == l && s.outerHeight() == c)
                        )
                            return void e.width(n);
                        (z = l), s.css("width", ""), e.width(n), r.find(">.jspVerticalBar,>.jspHorizontalBar").remove().end();
                    }
                    s.css("overflow", "auto"),
                        (l = i.contentWidth || s[0].scrollWidth),
                        (c = s[0].scrollHeight),
                        s.css("overflow", ""),
                    1 < (d = l / n) && (d = l / 112),
                        (u = 1 < (p = c / a) || o.alwaysShowVScroll),
                        (h = 1 < d || o.alwaysShowHScroll) || u
                            ? (e.addClass("jspScrollable"),
                            (i = o.maintainPosition && (v || b)) && ((k = rt()), (F = lt())),
                            u &&
                            (r.append(
                                t('<div class="jspVerticalBar" />').append(
                                    t('<div class="jspCap jspCapTop" />'),
                                    t('<div class="jspTrack" />').append(t('<div class="jspDrag" />').append(t('<div class="jspDragTop" />'), t('<div class="jspDragBottom" />'))),
                                    t('<div class="jspCap jspCapBottom" />')
                                )
                            ),
                                (w = r.find(">.jspVerticalBar")),
                                (x = w.find(">.jspTrack")),
                                (f = x.find(">.jspDrag")),
                            o.showArrows &&
                            ((T = t('<a class="jspArrow jspArrowUp" />').on("mousedown.jsp", G(0, -1)).on("click.jsp", ct)),
                                ($ = t('<a class="jspArrow jspArrowDown" />').on("mousedown.jsp", G(0, 1)).on("click.jsp", ct)),
                            o.arrowScrollOnHover && (T.on("mouseover.jsp", G(0, -1, T)), $.on("mouseover.jsp", G(0, 1, $))),
                                Z(x, o.verticalArrowPositions, T, $)),
                                (C = a),
                                r.find(">.jspVerticalBar>.jspCap:visible,>.jspVerticalBar>.jspArrow").each(function () {
                                    C -= t(this).outerHeight();
                                }),
                                f
                                    .on("mouseenter", function () {
                                        f.addClass("jspHover");
                                    })
                                    .on("mouseleave", function () {
                                        f.removeClass("jspHover");
                                    })
                                    .on("mousedown.jsp", function (e) {
                                        t("html").on("dragstart.jsp selectstart.jsp", ct), f.addClass("jspActive");
                                        var i = e.pageY - f.position().top;
                                        return (
                                            t("html")
                                                .on("mousemove.jsp", function (t) {
                                                    tt(t.pageY - i, !1);
                                                })
                                                .on("mouseup.jsp mouseleave.jsp", J),
                                                !1
                                        );
                                    }),
                                V()),
                            h &&
                            (r.append(
                                t('<div class="jspHorizontalBar" />').append(
                                    t('<div class="jspCap jspCapLeft" />'),
                                    t('<div class="jspTrack" />').append(t('<div class="jspDrag" />').append(t('<div class="jspDragLeft" />'), t('<div class="jspDragRight" />'))),
                                    t('<div class="jspCap jspCapRight" />')
                                )
                            ),
                                (j = r.find(">.jspHorizontalBar")),
                                (P = j.find(">.jspTrack")),
                                (m = P.find(">.jspDrag")),
                            o.showArrows &&
                            ((O = t('<a class="jspArrow jspArrowLeft" />').on("mousedown.jsp", G(-1, 0)).on("click.jsp", ct)),
                                (E = t('<a class="jspArrow jspArrowRight" />').on("mousedown.jsp", G(1, 0)).on("click.jsp", ct)),
                            o.arrowScrollOnHover && (O.on("mouseover.jsp", G(-1, 0, O)), E.on("mouseover.jsp", G(1, 0, E))),
                                Z(P, o.horizontalArrowPositions, O, E)),
                                m
                                    .on("mouseenter", function () {
                                        m.addClass("jspHover");
                                    })
                                    .on("mouseleave", function () {
                                        m.removeClass("jspHover");
                                    })
                                    .on("mousedown.jsp", function (e) {
                                        t("html").on("dragstart.jsp selectstart.jsp", ct), m.addClass("jspActive");
                                        var i = e.pageX - m.position().left;
                                        return (
                                            t("html")
                                                .on("mousemove.jsp", function (t) {
                                                    it(t.pageX - i, !1);
                                                })
                                                .on("mouseup.jsp mouseleave.jsp", J),
                                                !1
                                        );
                                    }),
                                (A = r.innerWidth()),
                                U()),
                                (function () {
                                    var e, i;
                                    h &&
                                    u &&
                                    ((e = P.outerHeight()),
                                        (i = x.outerWidth()),
                                        (C -= e),
                                        t(j)
                                            .find(">.jspCap:visible,>.jspArrow")
                                            .each(function () {
                                                A += t(this).outerWidth();
                                            }),
                                        (A -= i),
                                        (a -= i),
                                        (n -= e),
                                        P.parent().append(t('<div class="jspCorner" />').css("width", e + "px")),
                                        V(),
                                        U()),
                                    h && s.width(r.outerWidth() - L + "px"),
                                        (c = s.outerHeight()),
                                        (p = c / a),
                                    h &&
                                    ((H = Math.ceil((1 / d) * A)) > o.horizontalDragMaxWidth ? (H = o.horizontalDragMaxWidth) : H < o.horizontalDragMinWidth && (H = o.horizontalDragMinWidth),
                                        m.css("width", H + "px"),
                                        (y = A - H),
                                        ot(b)),
                                    u &&
                                    ((S = Math.ceil((1 / p) * C)) > o.verticalDragMaxHeight ? (S = o.verticalDragMaxHeight) : S < o.verticalDragMinHeight && (S = o.verticalDragMinHeight),
                                        f.css("height", S + "px"),
                                        (g = C - S),
                                        et(v));
                                })(),
                            i && (nt(bt ? l - n : k, !1), st(yt ? c - a : F, !1)),
                                s
                                    .find(":input,a")
                                    .off("focus.jsp")
                                    .on("focus.jsp", function (t) {
                                        at(t.target, !1);
                                    }),
                                r.off(X).on(X, function (t, e, i, s) {
                                    var n = (b = b || 0),
                                        a = (v = v || 0);
                                    return (t = t.deltaFactor || o.mouseWheelSpeed), D.scrollBy(i * t, -s * t, !1), n == b && a == v;
                                }),
                                (mt = !1),
                                r
                                    .off("touchstart.jsp touchmove.jsp touchend.jsp click.jsp-touchclick")
                                    .on("touchstart.jsp", function (t) {
                                        (t = t.originalEvent.touches[0]), (ut = rt()), (ht = lt()), (ft = t.pageX), (gt = t.pageY), (mt = !(vt = !1));
                                    })
                                    .on("touchmove.jsp", function (t) {
                                        if (mt) {
                                            var e = t.originalEvent.touches[0],
                                                i = b;
                                            return (t = v), D.scrollTo(ut + ft - e.pageX, ht + gt - e.pageY), (vt = vt || 5 < Math.abs(ft - e.pageX) || 5 < Math.abs(gt - e.pageY)), i == b && t == v;
                                        }
                                    })
                                    .on("touchend.jsp", function (t) {
                                        mt = !1;
                                    })
                                    .on("click.jsp-touchclick", function (t) {
                                        if (vt) return (vt = !1);
                                    }),
                            o.enableKeyboardNavigation &&
                            (function () {
                                var i,
                                    n,
                                    l = [];

                                function d() {
                                    var t = b,
                                        e = v;
                                    switch (i) {
                                        case 40:
                                            D.scrollByY(o.keyboardSpeed, !1);
                                            break;
                                        case 38:
                                            D.scrollByY(-o.keyboardSpeed, !1);
                                            break;
                                        case 34:
                                        case 32:
                                            D.scrollByY(a * o.scrollPagePercent, !1);
                                            break;
                                        case 33:
                                            D.scrollByY(-a * o.scrollPagePercent, !1);
                                            break;
                                        case 39:
                                            D.scrollByX(o.keyboardSpeed, !1);
                                            break;
                                        case 37:
                                            D.scrollByX(-o.keyboardSpeed, !1);
                                    }
                                    return (n = t != b || e != v);
                                }

                                h && l.push(j[0]),
                                u && l.push(w[0]),
                                    s.on("focus.jsp", function () {
                                        e.focus();
                                    }),
                                    e
                                        .attr("tabindex", 0)
                                        .off("keydown.jsp keypress.jsp")
                                        .on("keydown.jsp", function (e) {
                                            if (e.target === this || (l.length && t(e.target).closest(l).length)) {
                                                var o = b,
                                                    s = v;
                                                switch (e.keyCode) {
                                                    case 40:
                                                    case 38:
                                                    case 34:
                                                    case 32:
                                                    case 33:
                                                    case 39:
                                                    case 37:
                                                        (i = e.keyCode), d();
                                                        break;
                                                    case 35:
                                                        st(c - a), (i = null);
                                                        break;
                                                    case 36:
                                                        st(0), (i = null);
                                                }
                                                return !(n = (e.keyCode == i && o != b) || s != v);
                                            }
                                        })
                                        .on("keypress.jsp", function (e) {
                                            if ((e.keyCode == i && d(), e.target === this || (l.length && t(e.target).closest(l).length))) return !n;
                                        }),
                                    o.hideFocus ? (e.css("outline", "none"), "hideFocus" in r[0] && e.attr("hideFocus", !0)) : (e.css("outline", ""), "hideFocus" in r[0] && e.attr("hideFocus", !1));
                            })(),
                            o.clickOnTrack &&
                            (K(),
                            u &&
                            x.on("mousedown.jsp", function (e) {
                                if (void 0 === e.originalTarget || e.originalTarget == e.currentTarget) {
                                    var i,
                                        s = t(this),
                                        n = s.offset(),
                                        r = e.pageY - n.top - v,
                                        l = !0,
                                        d = function () {
                                            var t = s.offset(),
                                                n = e.pageY - t.top - S / 2,
                                                u = a * o.scrollPagePercent;
                                            if (((t = (g * u) / (c - a)), r < 0)) n < v - t ? D.scrollByY(-u) : tt(n);
                                            else {
                                                if (!(0 < r)) return void p();
                                                v + t < n ? D.scrollByY(u) : tt(n);
                                            }
                                            (i = setTimeout(d, l ? o.initialDelay : o.trackClickRepeatFreq)), (l = !1);
                                        },
                                        p = function () {
                                            i && clearTimeout(i), (i = null), t(document).off("mouseup.jsp", p);
                                        };
                                    return d(), t(document).on("mouseup.jsp", p), !1;
                                }
                            }),
                            h &&
                            P.on("mousedown.jsp", function (e) {
                                if (void 0 === e.originalTarget || e.originalTarget == e.currentTarget) {
                                    var i,
                                        s = t(this),
                                        a = s.offset(),
                                        r = e.pageX - a.left - b,
                                        c = !0,
                                        d = function () {
                                            var t = s.offset(),
                                                a = e.pageX - t.left - H / 2,
                                                u = n * o.scrollPagePercent;
                                            if (((t = (y * u) / (l - n)), r < 0)) a < b - t ? D.scrollByX(-u) : it(a);
                                            else {
                                                if (!(0 < r)) return void p();
                                                b + t < a ? D.scrollByX(u) : it(a);
                                            }
                                            (i = setTimeout(d, c ? o.initialDelay : o.trackClickRepeatFreq)), (c = !1);
                                        },
                                        p = function () {
                                            i && clearTimeout(i), (i = null), t(document).off("mouseup.jsp", p);
                                        };
                                    return d(), t(document).on("mouseup.jsp", p), !1;
                                }
                            })),
                                (function () {
                                    if (location.hash && 1 < location.hash.length) {
                                        var e,
                                            i,
                                            o = escape(location.hash.substr(1));
                                        try {
                                            e = t("#" + o + ', a[name="' + o + '"]');
                                        } catch (e) {
                                            return;
                                        }
                                        e.length &&
                                        s.find(o) &&
                                        (0 === r.scrollTop()
                                            ? (i = setInterval(function () {
                                                0 < r.scrollTop() && (at(e, !0), t(document).scrollTop(r.position().top), clearInterval(i));
                                            }, 50))
                                            : (at(e, !0), t(document).scrollTop(r.position().top)));
                                    }
                                })(),
                            o.hijackInternalLinks &&
                            (t(document.body).data("jspHijack") ||
                                (t(document.body).data("jspHijack", !0),
                                    t(document.body).delegate('.js-custom-anchor a[href*="#"]', "click", function (e) {
                                        var i,
                                            o,
                                            s,
                                            n = this.href.substr(0, this.href.indexOf("#")),
                                            a = location.href;
                                        if ((-1 !== location.href.indexOf("#") && (a = location.href.substr(0, location.href.indexOf("#"))), n === a)) {
                                            i = escape(this.href.substr(this.href.indexOf("#") + 1));
                                            try {
                                                o = t("#" + i + ', a[name="' + i + '"]');
                                            } catch (e) {
                                                return;
                                            }
                                            o.length &&
                                            ((s = o.closest(".jspScrollable")).data("jsp").scrollToElement(o, !0),
                                            s[0].scrollIntoView && ((n = t(window).scrollTop()), ((a = o.offset().top) < n || a > n + t(window).height()) && s[0].scrollIntoView()),
                                                e.preventDefault());
                                        }
                                    }))))
                            : (e.removeClass("jspScrollable"),
                                s.css({top: 0, left: 0, width: r.width() - L}),
                                r.off(X),
                                s.find(":input,a").off("focus.jsp"),
                                e.attr("tabindex", "-1").removeAttr("tabindex").off("keydown.jsp keypress.jsp"),
                                s.off(".jsp"),
                                K()),
                        o.resizeSensor || !o.autoReinitialise || I
                            ? o.resizeSensor || o.autoReinitialise || !I || clearInterval(I)
                            : (I = setInterval(function () {
                                N(o);
                            }, o.autoReinitialiseDelay)),
                    o.resizeSensor && !q && (_(s, Y), _(e, Y), _(e.parent(), Y), window.addEventListener("resize", Y), (q = !0)),
                    B && e.scrollTop(0) && st(B, !1),
                    Q && e.scrollLeft(0) && nt(Q, !1),
                        e.trigger("jsp-initialised", [h || u]);
                }

                function _(t, e) {
                    var i,
                        o,
                        s = document.createElement("div"),
                        n = document.createElement("div"),
                        a = document.createElement("div"),
                        r = document.createElement("div"),
                        l = document.createElement("div");

                    function c() {
                        (a.style.width = n.offsetWidth + 10 + "px"),
                            (a.style.height = n.offsetHeight + 10 + "px"),
                            (n.scrollLeft = n.scrollWidth),
                            (n.scrollTop = n.scrollHeight),
                            (r.scrollLeft = r.scrollWidth),
                            (r.scrollTop = r.scrollHeight),
                            (i = t.width()),
                            (o = t.height());
                    }

                    (s.style.cssText = "position: absolute; left: 0; top: 0; right: 0; bottom: 0; overflow: scroll; z-index: -1; visibility: hidden;"),
                        (n.style.cssText = "position: absolute; left: 0; top: 0; right: 0; bottom: 0; overflow: scroll; z-index: -1; visibility: hidden;"),
                        (r.style.cssText = "position: absolute; left: 0; top: 0; right: 0; bottom: 0; overflow: scroll; z-index: -1; visibility: hidden;"),
                        (a.style.cssText = "position: absolute; left: 0; top: 0;"),
                        (l.style.cssText = "position: absolute; left: 0; top: 0; width: 200%; height: 200%;"),
                        n.addEventListener(
                            "scroll",
                            function () {
                                (t.width() > i || t.height() > o) && e.apply(this, []), c();
                            }.bind(this)
                        ),
                        r.addEventListener(
                            "scroll",
                            function () {
                                (t.width() < i || t.height() < o) && e.apply(this, []), c();
                            }.bind(this)
                        ),
                        n.appendChild(a),
                        r.appendChild(l),
                        s.appendChild(n),
                        s.appendChild(r),
                        t.append(s),
                    "static" === window.getComputedStyle(t[0], null).getPropertyValue("position") && (t[0].style.position = "relative"),
                        c();
                }

                function V() {
                    x.height(C + "px"), (v = 0), (k = o.verticalGutter + x.outerWidth()), s.width(n - k - L);
                    try {
                        0 === w.position().left && s.css("margin-left", k + "px");
                    } catch (t) {
                    }
                }

                function U() {
                    r.find(">.jspHorizontalBar>.jspCap:visible,>.jspHorizontalBar>.jspArrow").each(function () {
                        A -= t(this).outerWidth();
                    }),
                        P.width(A + "px"),
                        (b = 0);
                }

                function Z(t, e, i, o) {
                    var s = "before",
                        n = "after";
                    "os" == e && (e = /Mac/.test(navigator.platform) ? "after" : "split"), e == s ? (n = e) : e == n && ((s = e), (e = i), (i = o), (o = e)), t[s](i)[n](o);
                }

                function G(e, i, s) {
                    return function () {
                        return (
                            (function (e, i, s, n) {
                                s = t(s).addClass("jspActive");
                                var a,
                                    r,
                                    l = !0,
                                    c = function () {
                                        0 !== e && D.scrollByX(e * o.arrowButtonSpeed), 0 !== i && D.scrollByY(i * o.arrowButtonSpeed), (r = setTimeout(c, l ? o.initialDelay : o.arrowRepeatFreq)), (l = !1);
                                    };
                                c(),
                                    (a = n ? "mouseout.jsp" : "mouseup.jsp"),
                                    (n = n || t("html")).on(a, function () {
                                        s.removeClass("jspActive"), r && clearTimeout(r), (r = null), n.off(a);
                                    });
                            })(e, i, this, s),
                                this.blur(),
                                !1
                        );
                    };
                }

                function K() {
                    P && P.off("mousedown.jsp"), x && x.off("mousedown.jsp");
                }

                function J() {
                    t("html").off("dragstart.jsp selectstart.jsp mousemove.jsp mouseup.jsp mouseleave.jsp"), f && f.removeClass("jspActive"), m && m.removeClass("jspActive");
                }

                function tt(i, s) {
                    var n, r, l, d;
                    u &&
                    (i < 0 ? (i = 0) : g < i && (i = g),
                        (n = new t.Event("jsp-will-scroll-y")),
                        e.trigger(n, [i]),
                    n.isDefaultPrevented() ||
                    ((r = 0 === (n = i || 0)),
                        (l = n == g),
                        (d = (-i / g) * (c - a)),
                    void 0 === s && (s = o.animateScroll),
                        s
                            ? D.animate(f, "top", i, et, function () {
                                e.trigger("jsp-user-scroll-y", [-d, r, l]);
                            })
                            : (f.css("top", i), et(i), e.trigger("jsp-user-scroll-y", [-d, r, l]))));
                }

                function et(t) {
                    void 0 === t && (t = f.position().top), r.scrollTop(0);
                    var i,
                        n = 0 === (v = t || 0),
                        l = v == g,
                        d = (-t / g) * (c - a);
                    (F == n && Q == l) || ((F = n), (Q = l), e.trigger("jsp-arrow-change", [F, Q, B, R])),
                        (i = n),
                        (t = l),
                    o.showArrows && (T[i ? "addClass" : "removeClass"]("jspDisabled"), $[t ? "addClass" : "removeClass"]("jspDisabled")),
                        s.css("top", d),
                        e.trigger("jsp-scroll-y", [-d, n, l]).trigger("scroll");
                }

                function it(i, s) {
                    var a, r, c, d;
                    h &&
                    (i < 0 ? (i = 0) : y < i && (i = y),
                        (a = new t.Event("jsp-will-scroll-x")),
                        e.trigger(a, [i]),
                    a.isDefaultPrevented() ||
                    ((r = 0 === (a = i || 0)),
                        (c = a == y),
                        (d = (-i / y) * (l - n)),
                    void 0 === s && (s = o.animateScroll),
                        s
                            ? D.animate(m, "left", i, ot, function () {
                                e.trigger("jsp-user-scroll-x", [-d, r, c]);
                            })
                            : (m.css("left", i), ot(i), e.trigger("jsp-user-scroll-x", [-d, r, c]))));
                }

                function ot(t) {
                    void 0 === t && (t = m.position().left), r.scrollTop(0);
                    var i,
                        a = 0 === (b = t || 0),
                        c = b == y,
                        d = (-t / y) * (l - n);
                    (B == a && R == c) || ((B = a), (R = c), e.trigger("jsp-arrow-change", [F, Q, B, R])),
                        (i = a),
                        (t = c),
                    o.showArrows && (O[i ? "addClass" : "removeClass"]("jspDisabled"), E[t ? "addClass" : "removeClass"]("jspDisabled")),
                        s.css("left", d),
                        e.trigger("jsp-scroll-x", [-d, a, c]).trigger("scroll");
                }

                function st(t, e) {
                    tt((t / (c - a)) * g, e);
                }

                function nt(t, e) {
                    it((t / (l - n)) * y, e);
                }

                function at(e, i, s) {
                    var l,
                        c,
                        d,
                        p,
                        u,
                        h,
                        f,
                        g = 0,
                        v = 0;
                    try {
                        l = t(e);
                    } catch (e) {
                        return;
                    }
                    for (p = l.outerHeight(), c = l.outerWidth(), r.scrollTop(0), r.scrollLeft(0); !l.is(".jspPane");)
                        if (((g += l.position().top), (v += l.position().left), (l = l.offsetParent()), /^body|html$/i.test(l[0].nodeName))) return;
                    (u = (d = lt()) + a),
                        g < d || i ? (h = g - o.horizontalGutter) : u < g + p && (h = g - a + p + o.horizontalGutter),
                    isNaN(h) || st(h, s),
                        (h = (p = rt()) + n),
                        v < p || i ? (f = v - o.horizontalGutter) : h < v + c && (f = v - n + c + o.horizontalGutter),
                    isNaN(f) || nt(f, s);
                }

                function rt() {
                    return -s.position().left;
                }

                function lt() {
                    return -s.position().top;
                }

                function ct() {
                    return !1;
                }

                (L =
                    "border-box" === e.css("box-sizing")
                        ? (M = 0)
                        : ((M = e.css("paddingTop") + " " + e.css("paddingRight") + " " + e.css("paddingBottom") + " " + e.css("paddingLeft")), (parseInt(e.css("paddingLeft"), 10) || 0) + (parseInt(e.css("paddingRight"), 10) || 0))),
                    t.extend(D, {
                        reinitialise: function (e) {
                            N((e = t.extend({}, o, e)));
                        },
                        scrollToElement: function (t, e, i) {
                            at(t, e, i);
                        },
                        scrollTo: function (t, e, i) {
                            nt(t, i), st(e, i);
                        },
                        scrollToX: function (t, e) {
                            nt(t, e);
                        },
                        scrollToY: function (t, e) {
                            st(t, e);
                        },
                        scrollToPercentX: function (t, e) {
                            nt(t * (l - n), e);
                        },
                        scrollToPercentY: function (t, e) {
                            st(t * (c - a), e);
                        },
                        scrollBy: function (t, e, i) {
                            D.scrollByX(t, i), D.scrollByY(e, i);
                        },
                        scrollByX: function (t, e) {
                            it(((rt() + Math[t < 0 ? "floor" : "ceil"](t)) / (l - n)) * y, e);
                        },
                        scrollByY: function (t, e) {
                            tt(((lt() + Math[t < 0 ? "floor" : "ceil"](t)) / (c - a)) * g, e);
                        },
                        positionDragX: function (t, e) {
                            it(t, e);
                        },
                        positionDragY: function (t, e) {
                            tt(t, e);
                        },
                        animate: function (t, e, i, s, n) {
                            var a = {};
                            (a[e] = i), t.animate(a, {
                                duration: o.animateDuration,
                                easing: o.animateEase,
                                queue: !1,
                                step: s,
                                complete: n
                            });
                        },
                        getContentPositionX: rt,
                        getContentPositionY: lt,
                        getContentWidth: function () {
                            return l;
                        },
                        getContentHeight: function () {
                            return c;
                        },
                        getPercentScrolledX: function () {
                            return rt() / (l - n);
                        },
                        getPercentScrolledY: function () {
                            return lt() / (c - a);
                        },
                        getIsScrollableH: function () {
                            return h;
                        },
                        getIsScrollableV: function () {
                            return u;
                        },
                        getContentPane: function () {
                            return s;
                        },
                        scrollToBottom: function (t) {
                            tt(g, t);
                        },
                        hijackInternalLinks: t.noop,
                        destroy: function () {
                            var t, i;
                            (t = lt()), (i = rt()), e.removeClass("jspScrollable").off(".jsp"), s.off(".jsp"), e.replaceWith(W.append(s.children())), W.scrollTop(t), W.scrollLeft(i), I && clearInterval(I);
                        },
                    }),
                    N(i);
            }

            return (
                (e = t.extend({}, t.fn.jScrollPane.defaults, e)),
                    t.each(["arrowButtonSpeed", "trackClickSpeed", "keyboardSpeed"], function () {
                        e[this] = e[this] || e.speed;
                    }),
                    this.each(function () {
                        var o = t(this),
                            s = o.data("jsp");
                        s ? s.reinitialise(e) : (t("script", o).filter('[type="text/javascript"],:not([type])').remove(), (s = new i(o, e)), o.data("jsp", s));
                    })
            );
        }),
            (t.fn.jScrollPane.defaults = {
                showArrows: !1,
                maintainPosition: !0,
                stickToBottom: !1,
                stickToRight: !1,
                clickOnTrack: !0,
                autoReinitialise: !1,
                autoReinitialiseDelay: 500,
                verticalDragMinHeight: 0,
                verticalDragMaxHeight: 99999,
                horizontalDragMinWidth: 0,
                horizontalDragMaxWidth: 99999,
                contentWidth: void 0,
                animateScroll: !1,
                animateDuration: 300,
                animateEase: "linear",
                hijackInternalLinks: !1,
                verticalGutter: 4,
                horizontalGutter: 4,
                mouseWheelSpeed: 3,
                arrowButtonSpeed: 0,
                arrowRepeatFreq: 50,
                arrowScrollOnHover: !1,
                trackClickSpeed: 0,
                trackClickRepeatFreq: 70,
                verticalArrowPositions: "split",
                horizontalArrowPositions: "split",
                enableKeyboardNavigation: !0,
                hideFocus: !1,
                keyboardSpeed: 0,
                initialDelay: 300,
                speed: 30,
                scrollPagePercent: 0.8,
                alwaysShowVScroll: !1,
                alwaysShowHScroll: !1,
                resizeSensor: !1,
                resizeSensorDelay: 0,
            });
    }),
    (function (t, e) {
        var i,
            o,
            s,
            n = t(window),
            a = "onwheel" in document || 9 <= document.documentMode ? "wheel" : "mousewheel DOMMouseScroll";

        function r(e, n, r) {
            var l;
            document.body &&
            ((n = "number" == typeof n ? {duration: n} : n || {}),
                (i = i || t("html, body")),
                (l = n.container || i),
            "number" == typeof e && (e = {top: e}),
            o && s && o.off(a, s),
            n.wheelBehavior &&
            "none" !== n.wheelBehavior &&
            ((s = function (t) {
                "stop" === n.wheelBehavior ? (l.off(a, s), l.stop()) : "ignore" === n.wheelBehavior && t.preventDefault();
            }),
                (o = l.on(a, s))),
                l.stop().animate({scrollLeft: e.left, scrollTop: e.top}, n.duration, function () {
                    s && l.off(a, s), t.isFunction(r) && r();
                }));
        }

        function l(e) {
            (this.options = t.extend(
                {
                    anchorLinks: 'a[href^="#"]',
                    container: null,
                    extraOffset: null,
                    activeClasses: null,
                    easing: "swing",
                    animMode: "duration",
                    animDuration: 800,
                    animSpeed: 1500,
                    anchorActiveClass: "anchor-active",
                    sectionActiveClass: "section-active",
                    wheelBehavior: "stop",
                    useNativeAnchorScrolling: !1,
                },
                e
            )),
                this.init();
        }

        (l.prototype = {
            init: function () {
                this.initStructure(), this.attachEvents(), (this.isInit = !0);
            },
            initStructure: function () {
                var e = this;
                (this.container = this.options.container ? t(this.options.container) : t("html,body")),
                    (this.scrollContainer = this.options.container ? this.container : n),
                    (this.anchorLinks = jQuery(this.options.anchorLinks).filter(function () {
                        return jQuery(e.getAnchorTarget(jQuery(this))).length;
                    }));
            },
            getId: function (t) {
                try {
                    return "#" + t.replace(/^.*?(#|$)/, "");
                } catch (t) {
                    return null;
                }
            },
            getAnchorTarget: function (e) {
                return (e = this.getId(t(e).attr("href"))), t(1 < e.length ? e : "html");
            },
            getTargetOffset: function (t) {
                var e = t.offset().top;
                return (
                    this.options.container && (e -= this.container.offset().top - this.container.prop("scrollTop")),
                        "number" == typeof this.options.extraOffset ? (e -= this.options.extraOffset) : "function" == typeof this.options.extraOffset && (e -= this.options.extraOffset(t)),
                        {top: e}
                );
            },
            attachEvents: function () {
                var e = this;
                if (this.options.activeClasses && this.anchorLinks.length) {
                    this.anchorData = [];
                    for (var i = 0; i < this.anchorLinks.length; i++) {
                        var o = jQuery(this.anchorLinks[i]),
                            s = e.getAnchorTarget(o),
                            a = null;
                        t.each(e.anchorData, function (t, e) {
                            e.block[0] === s[0] && (a = e);
                        }),
                            a ? (a.link = a.link.add(o)) : e.anchorData.push({link: o, block: s});
                    }
                    (this.resizeHandler = function () {
                        e.isInit && e.recalculateOffsets();
                    }),
                        (this.scrollHandler = function () {
                            e.refreshActiveClass();
                        }),
                        this.recalculateOffsets(),
                        this.scrollContainer.on("scroll", this.scrollHandler),
                        n.on("resize.SmoothScroll load.SmoothScroll orientationchange.SmoothScroll refreshAnchor.SmoothScroll", this.resizeHandler);
                }
                (this.clickHandler = function (t) {
                    e.onClick(t);
                }),
                this.options.useNativeAnchorScrolling || this.anchorLinks.on("click", this.clickHandler);
            },
            recalculateOffsets: function () {
                var e = this;
                t.each(this.anchorData, function (t, i) {
                    (i.offset = e.getTargetOffset(i.block)), (i.height = i.block.outerHeight());
                }),
                    this.refreshActiveClass();
            },
            toggleActiveClass: function (t, e, i) {
                t.toggleClass(this.options.anchorActiveClass, i), e.toggleClass(this.options.sectionActiveClass, i);
            },
            refreshActiveClass: function () {
                var e = this,
                    i = !1,
                    o = this.container.prop("scrollHeight"),
                    s = this.scrollContainer.height(),
                    a = this.options.container ? this.container.prop("scrollTop") : n.scrollTop();
                this.options.customScrollHandler
                    ? this.options.customScrollHandler.call(this, a, this.anchorData)
                    : (this.anchorData.sort(function (t, e) {
                        return t.offset.top - e.offset.top;
                    }),
                        t.each(this.anchorData, function (t) {
                            var n = e.anchorData.length - t - 1,
                                r = e.anchorData[n];
                            (t = "parent" === e.options.activeClasses ? r.link.parent() : r.link),
                                o - s <= a
                                    ? n == e.anchorData.length - 1
                                    ? e.toggleActiveClass(t, r.block, !0)
                                    : e.toggleActiveClass(t, r.block, !1)
                                    : !i && (a >= r.offset.top - 1 || 0 == n)
                                    ? ((i = !0), e.toggleActiveClass(t, r.block, !0))
                                    : e.toggleActiveClass(t, r.block, !1);
                        }));
            },
            calculateScrollDuration: function (t) {
                return "speed" === this.options.animMode ? (Math.abs(this.scrollContainer.scrollTop() - t.top) / this.options.animSpeed) * 1e3 : this.options.animDuration;
            },
            onClick: function (t) {
                var e = this.getAnchorTarget(t.currentTarget);
                (e = this.getTargetOffset(e)),
                    t.preventDefault(),
                    r(e, {
                        container: this.container,
                        wheelBehavior: this.options.wheelBehavior,
                        duration: this.calculateScrollDuration(e)
                    }),
                    this.makeCallback("onBeforeScroll", t.currentTarget);
            },
            makeCallback: function (t) {
                var e;
                "function" == typeof this.options[t] && ((e = Array.prototype.slice.call(arguments)).shift(), this.options[t].apply(this, e));
            },
            destroy: function () {
                var e = this;
                (this.isInit = !1),
                this.options.activeClasses &&
                (n.off("resize.SmoothScroll load.SmoothScroll orientationchange.SmoothScroll refreshAnchor.SmoothScroll", this.resizeHandler),
                    this.scrollContainer.off("scroll", this.scrollHandler),
                    t.each(this.anchorData, function (t) {
                        var i = e.anchorData.length - t - 1;
                        (t = e.anchorData[i]), (i = "parent" === e.options.activeClasses ? t.link.parent() : t.link), e.toggleActiveClass(i, t.block, !1);
                    })),
                    this.anchorLinks.off("click", this.clickHandler);
            },
        }),
            t.extend(l, {
                scrollTo: function (t, e, i) {
                    r(t, e, i);
                },
            }),
            (e.SmoothScroll = l);
    })(jQuery, this),
    (function (t, e) {
        "use strict";

        function i(t, e) {
            (this.options = e), (this.$stickyBox = t), this.init();
        }

        var o = {
                init: function () {
                    this.findElements(), this.attachEvents(), this.makeCallback("onInit");
                },
                findElements: function () {
                    (this.$container = this.$stickyBox.closest(this.options.container)),
                        (this.isWrap = "fixed" === this.options.positionType && this.options.setBoxHeight),
                        (this.moveInContainer = !!this.$container.length),
                    this.isWrap && (this.$stickyBoxWrap = this.$stickyBox.wrap('<div class="' + this.getWrapClass() + '"/>').parent()),
                        (this.parentForActive = this.getParentForActive()),
                        (this.isInit = !0);
                },
                attachEvents: function () {
                    var t = this;
                    (this.onResize = function () {
                        t.isInit && (t.resetState(), t.recalculateOffsets(), t.checkStickyPermission(), t.scrollHandler());
                    }),
                        (this.onScroll = function () {
                            t.scrollHandler();
                        }),
                        this.onResize(),
                        e.on("load resize orientationchange", this.onResize).on("scroll", this.onScroll);
                },
                defineExtraTop: function () {
                    var t;
                    "number" == typeof this.options.extraTop ? (t = this.options.extraTop) : "function" == typeof this.options.extraTop && (t = this.options.extraTop()),
                        (this.extraTop = "absolute" === this.options.positionType ? t : Math.min(this.winParams.height - this.data.boxFullHeight, t));
                },
                checkStickyPermission: function () {
                    this.isStickyEnabled = !this.moveInContainer || this.data.containerOffsetTop + this.data.containerHeight > this.data.boxFullHeight + this.data.boxOffsetTop + this.options.extraBottom;
                },
                getParentForActive: function () {
                    return this.isWrap ? this.$stickyBoxWrap : this.$container.length ? this.$container : this.$stickyBox;
                },
                getWrapClass: function () {
                    try {
                        return this.$stickyBox
                            .attr("class")
                            .split(" ")
                            .map(function (t) {
                                return "sticky-wrap-" + t;
                            })
                            .join(" ");
                    } catch (t) {
                        return "sticky-wrap";
                    }
                },
                resetState: function () {
                    (this.stickyFlag = !1),
                        this.$stickyBox.css({
                            "-webkit-transition": "",
                            "-webkit-transform": "",
                            transition: "",
                            transform: "",
                            position: "",
                            width: "",
                            left: "",
                            top: ""
                        }).removeClass(this.options.activeClass),
                    this.isWrap && this.$stickyBoxWrap.removeClass(this.options.activeClass).removeAttr("style"),
                    this.moveInContainer && this.$container.removeClass(this.options.activeClass);
                },
                recalculateOffsets: function () {
                    (this.winParams = this.getWindowParams()), (this.data = t.extend(this.getBoxOffsets(), this.getContainerOffsets())), this.defineExtraTop();
                },
                getBoxOffsets: function () {
                    var t,
                        e = "fixed" === this.$stickyBox.css("position") ? (((t = this.$stickyBox.offset()).top = 0), t) : this.$stickyBox.offset(),
                        i = this.$stickyBox.position();
                    return {
                        boxOffsetLeft: e.left,
                        boxOffsetTop: e.top,
                        boxTopPosition: i.top,
                        boxLeftPosition: i.left,
                        boxFullHeight: this.$stickyBox.outerHeight(!0),
                        boxHeight: this.$stickyBox.outerHeight(),
                        boxWidth: this.$stickyBox.outerWidth(),
                    };
                },
                getContainerOffsets: function () {
                    var t = this.moveInContainer ? this.$container.offset() : null;
                    return t ? {
                        containerOffsetLeft: t.left,
                        containerOffsetTop: t.top,
                        containerHeight: this.$container.outerHeight()
                    } : {};
                },
                getWindowParams: function () {
                    return {height: window.innerHeight || document.documentElement.clientHeight};
                },
                makeCallback: function (t) {
                    var e;
                    "function" == typeof this.options[t] && ((e = Array.prototype.slice.call(arguments)).shift(), this.options[t].apply(this, e));
                },
                destroy: function () {
                    (this.isInit = !1),
                        e.off("load resize orientationchange", this.onResize).off("scroll", this.onScroll),
                        this.resetState(),
                        this.$stickyBox.removeData("StickyScrollBlock"),
                    this.isWrap && this.$stickyBox.unwrap(),
                        this.makeCallback("onDestroy");
                },
            },
            s = {
                fixed: {
                    scrollHandler: function () {
                        (this.winScrollTop = e.scrollTop()),
                            this.winScrollTop - (this.options.showAfterScrolled ? this.extraTop : 0) - (this.options.showAfterScrolled ? this.data.boxHeight + this.extraTop : 0) > this.data.boxOffsetTop - this.extraTop
                                ? this.isStickyEnabled && this.stickyOn()
                                : this.stickyOff();
                    },
                    stickyOn: function () {
                        this.stickyFlag ||
                        ((this.stickyFlag = !0),
                            this.parentForActive.addClass(this.options.activeClass),
                            this.$stickyBox.css({width: this.data.boxWidth, position: this.options.positionType}),
                        this.isWrap && this.$stickyBoxWrap.css({height: this.data.boxFullHeight}),
                            this.makeCallback("fixedOn")),
                            this.setDynamicPosition();
                    },
                    stickyOff: function () {
                        this.stickyFlag && ((this.stickyFlag = !1), this.resetState(), this.makeCallback("fixedOff"));
                    },
                    setDynamicPosition: function () {
                        this.$stickyBox.css({
                            top: this.getTopPosition(),
                            left: this.data.boxOffsetLeft - e.scrollLeft()
                        });
                    },
                    getTopPosition: function () {
                        if (this.moveInContainer) {
                            var t = this.winScrollTop + this.data.boxHeight + this.options.extraBottom;
                            return Math.min(this.extraTop, this.data.containerHeight + this.data.containerOffsetTop - t);
                        }
                        return this.extraTop;
                    },
                },
                absolute: {
                    scrollHandler: function () {
                        (this.winScrollTop = e.scrollTop()), this.winScrollTop > this.data.boxOffsetTop - this.extraTop ? this.isStickyEnabled && this.stickyOn() : this.stickyOff();
                    },
                    stickyOn: function () {
                        this.stickyFlag ||
                        ((this.stickyFlag = !0),
                            this.parentForActive.addClass(this.options.activeClass),
                            this.$stickyBox.css({
                                width: this.data.boxWidth,
                                transition: "transform " + this.options.animSpeed + "s ease",
                                "-webkit-transition": "transform " + this.options.animSpeed + "s ease"
                            }),
                        this.isWrap && this.$stickyBoxWrap.css({height: this.data.boxFullHeight}),
                            this.makeCallback("fixedOn")),
                            this.clearTimer(),
                            (this.timer = setTimeout(
                                function () {
                                    this.setDynamicPosition();
                                }.bind(this),
                                1e3 * this.options.animDelay
                            ));
                    },
                    stickyOff: function () {
                        this.stickyFlag &&
                        (this.clearTimer(),
                            (this.stickyFlag = !1),
                            (this.timer = setTimeout(
                                function () {
                                    this.setDynamicPosition(),
                                        setTimeout(
                                            function () {
                                                this.resetState();
                                            }.bind(this),
                                            1e3 * this.options.animSpeed
                                        );
                                }.bind(this),
                                1e3 * this.options.animDelay
                            )),
                            this.makeCallback("fixedOff"));
                    },
                    clearTimer: function () {
                        clearTimeout(this.timer);
                    },
                    setDynamicPosition: function () {
                        var t = Math.max(0, this.getTopPosition());
                        this.$stickyBox.css({
                            transform: "translateY(" + t + "px)",
                            "-webkit-transform": "translateY(" + t + "px)"
                        });
                    },
                    getTopPosition: function () {
                        var t = this.winScrollTop - this.data.boxOffsetTop + this.extraTop;
                        if (this.moveInContainer) {
                            var e = this.winScrollTop + this.data.boxHeight + this.options.extraBottom;
                            return t - Math.abs(Math.min(0, this.data.containerHeight + this.data.containerOffsetTop - e - this.extraTop));
                        }
                        return t;
                    },
                },
            };
        (t.fn.stickyScrollBlock = function (e) {
            var n = Array.prototype.slice.call(arguments),
                a = n[0],
                r = t.extend({
                    container: null,
                    positionType: "fixed",
                    activeClass: "fixed-position",
                    setBoxHeight: !0,
                    showAfterScrolled: !1,
                    extraTop: 0,
                    extraBottom: 0,
                    animDelay: 0.1,
                    animSpeed: 0.2
                }, e);
            return this.each(function () {
                var l = jQuery(this),
                    c = l.data("StickyScrollBlock");
                "object" == typeof e || void 0 === e ? ((i.prototype = t.extend(s[r.positionType], o)), l.data("StickyScrollBlock", new i(l, r))) : "string" == typeof a && c && "function" == typeof c[a] && (n.shift(), c[a].apply(c, n));
            });
        }),
            (window.StickyScrollBlock = i);
    })(jQuery, jQuery(window)),
    (function (t, e, i) {
        "use strict";

        function o(t, e) {
            var o,
                s,
                n,
                a = [],
                r = 0;
            (t && t.isDefaultPrevented()) ||
            (t.preventDefault(),
                (e = e || {}),
            t && t.data && (e = u(t.data.options, e)),
                (o = e.$target || i(t.currentTarget).trigger("blur")),
            ((n = i.fancybox.getInstance()) && n.$trigger && n.$trigger.is(o)) ||
            ((a = e.selector ? i(e.selector) : (s = o.attr("data-fancybox") || "") ? ((a = t.data ? t.data.items : []).length ? a.filter('[data-fancybox="' + s + '"]') : i('[data-fancybox="' + s + '"]')) : [o]),
            (r = i(a).index(o)) < 0 && (r = 0),
                ((n = i.fancybox.open(a, e, r)).$trigger = o)));
        }

        if (((t.console = t.console || {
                info: function (t) {
                }
            }), i)) {
            if (i.fn.fancybox) return console.info("fancyBox already initialized");
            var s = {
                    closeExisting: !1,
                    loop: !1,
                    gutter: 50,
                    keyboard: !0,
                    preventCaptionOverlap: !0,
                    arrows: !0,
                    infobar: !0,
                    smallBtn: "auto",
                    toolbar: "auto",
                    buttons: ["zoom", "slideShow", "thumbs", "close"],
                    idleTime: 3,
                    protect: !1,
                    modal: !1,
                    image: {preload: !1},
                    ajax: {settings: {data: {fancybox: !0}}},
                    iframe: {
                        tpl: '<iframe id="fancybox-frame{rnd}" name="fancybox-frame{rnd}" class="fancybox-iframe" allowfullscreen="allowfullscreen" allow="autoplay; fullscreen" src=""></iframe>',
                        preload: !0,
                        css: {},
                        attr: {scrolling: "auto"},
                    },
                    video: {
                        tpl:
                            '<video class="fancybox-video" controls controlsList="nodownload" poster="{{poster}}"><source src="{{src}}" type="{{format}}" />Sorry, your browser doesn\'t support embedded videos, <a href="{{src}}">download</a> and watch with your favorite video player!</video>',
                        format: "",
                        autoStart: !0,
                    },
                    defaultType: "image",
                    animationEffect: "zoom",
                    animationDuration: 366,
                    zoomOpacity: "auto",
                    transitionEffect: "fade",
                    transitionDuration: 366,
                    slideClass: "",
                    baseClass: "",
                    baseTpl:
                        '<div class="fancybox-container" role="dialog" tabindex="-1"><div class="fancybox-bg"></div><div class="fancybox-inner"><div class="fancybox-infobar"><span data-fancybox-index></span>&nbsp;/&nbsp;<span data-fancybox-count></span></div><div class="fancybox-toolbar">{{buttons}}</div><div class="fancybox-navigation">{{arrows}}</div><div class="fancybox-stage"></div><div class="fancybox-caption"><div class="fancybox-caption__body"></div></div></div></div>',
                    spinnerTpl: '<div class="fancybox-loading"></div>',
                    errorTpl: '<div class="fancybox-error"><p>{{ERROR}}</p></div>',
                    btnTpl: {
                        download:
                            '<a download data-fancybox-download class="fancybox-button fancybox-button--download" title="{{DOWNLOAD}}" href="javascript:;"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.62 17.09V19H5.38v-1.91zm-2.97-6.96L17 11.45l-5 4.87-5-4.87 1.36-1.32 2.68 2.64V5h1.92v7.77z"/></svg></a>',
                        zoom:
                            '<button data-fancybox-zoom class="fancybox-button fancybox-button--zoom" title="{{ZOOM}}"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.7 17.3l-3-3a5.9 5.9 0 0 0-.6-7.6 5.9 5.9 0 0 0-8.4 0 5.9 5.9 0 0 0 0 8.4 5.9 5.9 0 0 0 7.7.7l3 3a1 1 0 0 0 1.3 0c.4-.5.4-1 0-1.5zM8.1 13.8a4 4 0 0 1 0-5.7 4 4 0 0 1 5.7 0 4 4 0 0 1 0 5.7 4 4 0 0 1-5.7 0z"/></svg></button>',
                        close:
                            '<button data-fancybox-close class="fancybox-button fancybox-button--close" title="{{CLOSE}}"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12 10.6L6.6 5.2 5.2 6.6l5.4 5.4-5.4 5.4 1.4 1.4 5.4-5.4 5.4 5.4 1.4-1.4-5.4-5.4 5.4-5.4-1.4-1.4-5.4 5.4z"/></svg></button>',
                        arrowLeft:
                            '<button data-fancybox-prev class="fancybox-button fancybox-button--arrow_left" title="{{PREV}}"><div><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M11.28 15.7l-1.34 1.37L5 12l4.94-5.07 1.34 1.38-2.68 2.72H19v1.94H8.6z"/></svg></div></button>',
                        arrowRight:
                            '<button data-fancybox-next class="fancybox-button fancybox-button--arrow_right" title="{{NEXT}}"><div><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M15.4 12.97l-2.68 2.72 1.34 1.38L19 12l-4.94-5.07-1.34 1.38 2.68 2.72H5v1.94z"/></svg></div></button>',
                        smallBtn:
                            '<button type="button" data-fancybox-close class="fancybox-button fancybox-close-small" title="{{CLOSE}}"><svg xmlns="http://www.w3.org/2000/svg" version="1" viewBox="0 0 24 24"><path d="M13 12l5-5-1-1-5 5-5-5-1 1 5 5-5 5 1 1 5-5 5 5 1-1z"/></svg></button>',
                    },
                    parentEl: "body",
                    hideScrollbar: !0,
                    autoFocus: !0,
                    backFocus: !0,
                    trapFocus: !0,
                    fullScreen: {autoStart: !1},
                    touch: {vertical: !0, momentum: !0},
                    hash: null,
                    media: {},
                    slideShow: {autoStart: !1, speed: 3e3},
                    thumbs: {autoStart: !1, hideOnClose: !0, parentEl: ".fancybox-container", axis: "y"},
                    wheel: "auto",
                    onInit: i.noop,
                    beforeLoad: i.noop,
                    afterLoad: i.noop,
                    beforeShow: i.noop,
                    afterShow: i.noop,
                    beforeClose: i.noop,
                    afterClose: i.noop,
                    onActivate: i.noop,
                    onDeactivate: i.noop,
                    clickContent: function (t, e) {
                        return "image" === t.type && "zoom";
                    },
                    clickSlide: "close",
                    clickOutside: "close",
                    dblclickContent: !1,
                    dblclickSlide: !1,
                    dblclickOutside: !1,
                    mobile: {
                        preventCaptionOverlap: !1,
                        idleTime: !1,
                        clickContent: function (t, e) {
                            return "image" === t.type && "toggleControls";
                        },
                        clickSlide: function (t, e) {
                            return "image" === t.type ? "toggleControls" : "close";
                        },
                        dblclickContent: function (t, e) {
                            return "image" === t.type && "zoom";
                        },
                        dblclickSlide: function (t, e) {
                            return "image" === t.type && "zoom";
                        },
                    },
                    lang: "en",
                    i18n: {
                        en: {
                            CLOSE: "Close",
                            NEXT: "Next",
                            PREV: "Previous",
                            ERROR: "The requested content cannot be loaded. <br/> Please try again later.",
                            PLAY_START: "Start slideshow",
                            PLAY_STOP: "Pause slideshow",
                            FULL_SCREEN: "Full screen",
                            THUMBS: "Thumbnails",
                            DOWNLOAD: "Download",
                            SHARE: "Share",
                            ZOOM: "Zoom",
                        },
                        de: {
                            CLOSE: "Schlie&szlig;en",
                            NEXT: "Weiter",
                            PREV: "Zur&uuml;ck",
                            ERROR: "Die angeforderten Daten konnten nicht geladen werden. <br/> Bitte versuchen Sie es sp&auml;ter nochmal.",
                            PLAY_START: "Diaschau starten",
                            PLAY_STOP: "Diaschau beenden",
                            FULL_SCREEN: "Vollbild",
                            THUMBS: "Vorschaubilder",
                            DOWNLOAD: "Herunterladen",
                            SHARE: "Teilen",
                            ZOOM: "Vergr&ouml;&szlig;ern",
                        },
                    },
                },
                n = i(t),
                a = i(e),
                r = 0,
                l =
                    t.requestAnimationFrame ||
                    t.webkitRequestAnimationFrame ||
                    t.mozRequestAnimationFrame ||
                    t.oRequestAnimationFrame ||
                    function (e) {
                        return t.setTimeout(e, 1e3 / 60);
                    },
                c =
                    t.cancelAnimationFrame ||
                    t.webkitCancelAnimationFrame ||
                    t.mozCancelAnimationFrame ||
                    t.oCancelAnimationFrame ||
                    function (e) {
                        t.clearTimeout(e);
                    },
                d = (function () {
                    var t,
                        i = e.createElement("fakeelement"),
                        o = {
                            transition: "transitionend",
                            OTransition: "oTransitionEnd",
                            MozTransition: "transitionend",
                            WebkitTransition: "webkitTransitionEnd"
                        };
                    for (t in o) if (void 0 !== i.style[t]) return o[t];
                    return "transitionend";
                })(),
                p = function (t) {
                    return t && t.length && t[0].offsetHeight;
                },
                u = function (t, e) {
                    var o = i.extend(!0, {}, t, e);
                    return (
                        i.each(e, function (t, e) {
                            i.isArray(e) && (o[t] = e);
                        }),
                            o
                    );
                },
                h = function (t, e, o) {
                    var s = this;
                    (s.opts = u({index: o}, i.fancybox.defaults)),
                    i.isPlainObject(e) && (s.opts = u(s.opts, e)),
                    i.fancybox.isMobile && (s.opts = u(s.opts, s.opts.mobile)),
                        (s.id = s.opts.id || ++r),
                        (s.currIndex = parseInt(s.opts.index, 10) || 0),
                        (s.prevIndex = null),
                        (s.prevPos = null),
                        (s.currPos = 0),
                        (s.firstRun = !0),
                        (s.group = []),
                        (s.slides = {}),
                        s.addContent(t),
                    s.group.length && s.init();
                };
            i.extend(h.prototype, {
                init: function () {
                    var o,
                        s,
                        n = this,
                        a = n.group[n.currIndex].opts;
                    a.closeExisting && i.fancybox.close(!0),
                        i("body").addClass("fancybox-active"),
                    !i.fancybox.getInstance() &&
                    !1 !== a.hideScrollbar &&
                    !i.fancybox.isMobile &&
                    e.body.scrollHeight > t.innerHeight &&
                    (i("head").append('<style id="fancybox-style-noscroll" type="text/css">.compensate-for-scrollbar{margin-right:' + (t.innerWidth - e.documentElement.clientWidth) + "px;}</style>"),
                        i("body").addClass("compensate-for-scrollbar")),
                        (s = ""),
                        i.each(a.buttons, function (t, e) {
                            s += a.btnTpl[e] || "";
                        }),
                        (o = i(n.translate(n, a.baseTpl.replace("{{buttons}}", s).replace("{{arrows}}", a.btnTpl.arrowLeft + a.btnTpl.arrowRight)))
                            .attr("id", "fancybox-container-" + n.id)
                            .addClass(a.baseClass)
                            .data("FancyBox", n)
                            .appendTo(a.parentEl)),
                        (n.$refs = {container: o}),
                        ["bg", "inner", "infobar", "toolbar", "stage", "caption", "navigation"].forEach(function (t) {
                            n.$refs[t] = o.find(".fancybox-" + t);
                        }),
                        n.trigger("onInit"),
                        n.activate(),
                        n.jumpTo(n.currIndex);
                },
                translate: function (t, e) {
                    var i = t.opts.i18n[t.opts.lang] || t.opts.i18n.en;
                    return e.replace(/\{\{(\w+)\}\}/g, function (t, e) {
                        return void 0 === i[e] ? t : i[e];
                    });
                },
                addContent: function (t) {
                    var e = this;
                    (t = i.makeArray(t)),
                        i.each(t, function (t, o) {
                            var s,
                                n,
                                a = {},
                                r = {};
                            i.isPlainObject(o)
                                ? (r = (a = o).opts || o)
                                : "object" === i.type(o) && i(o).length
                                ? ((r = (n = i(o)).data() || {}), ((r = i.extend(!0, {}, r, r.options)).$orig = n), (a.src = e.opts.src || r.src || n.attr("href")), a.type || a.src || ((a.type = "inline"), (a.src = o)))
                                : (a = {type: "html", src: o + ""}),
                                (a.opts = i.extend(!0, {}, e.opts, r)),
                            i.isArray(r.buttons) && (a.opts.buttons = r.buttons),
                            i.fancybox.isMobile && a.opts.mobile && (a.opts = u(a.opts, a.opts.mobile)),
                                (s = a.type || a.opts.type),
                                (n = a.src || ""),
                            !s &&
                            n &&
                            ((r = n.match(/\.(mp4|mov|ogv|webm)((\?|#).*)?$/i))
                                ? ((s = "video"), a.opts.video.format || (a.opts.video.format = "video/" + ("ogv" === r[1] ? "ogg" : r[1])))
                                : n.match(/(^data:image\/[a-z0-9+\/=]*,)|(\.(jp(e|g|eg)|gif|png|bmp|webp|svg|ico)((\?|#).*)?$)/i)
                                    ? (s = "image")
                                    : n.match(/\.(pdf)((\?|#).*)?$/i)
                                        ? ((s = "iframe"), (a = i.extend(!0, a, {
                                            contentType: "pdf",
                                            opts: {iframe: {preload: !1}}
                                        })))
                                        : "#" === n.charAt(0) && (s = "inline")),
                                s ? (a.type = s) : e.trigger("objectNeedsType", a),
                            a.contentType || (a.contentType = -1 < i.inArray(a.type, ["html", "inline", "ajax"]) ? "html" : a.type),
                                (a.index = e.group.length),
                            "auto" == a.opts.smallBtn && (a.opts.smallBtn = -1 < i.inArray(a.type, ["html", "inline", "ajax"])),
                            "auto" === a.opts.toolbar && (a.opts.toolbar = !a.opts.smallBtn),
                                (a.$thumb = a.opts.$thumb || null),
                            a.opts.$trigger && a.index === e.opts.index && ((a.$thumb = a.opts.$trigger.find("img:first")), a.$thumb.length && (a.opts.$orig = a.opts.$trigger)),
                            (a.$thumb && a.$thumb.length) || !a.opts.$orig || (a.$thumb = a.opts.$orig.find("img:first")),
                            a.$thumb && !a.$thumb.length && (a.$thumb = null),
                                (a.thumb = a.opts.thumb || (a.$thumb ? a.$thumb[0].src : null)),
                            "function" === i.type(a.opts.caption) && (a.opts.caption = a.opts.caption.apply(o, [e, a])),
                            "function" === i.type(e.opts.caption) && (a.opts.caption = e.opts.caption.apply(o, [e, a])),
                            a.opts.caption instanceof i || (a.opts.caption = void 0 === a.opts.caption ? "" : a.opts.caption + ""),
                            "ajax" !== a.type || (1 < (n = n.split(/\s+/, 2)).length && ((a.src = n.shift()), (a.opts.filter = n.shift()))),
                            a.opts.modal &&
                            (a.opts = i.extend(!0, a.opts, {
                                trapFocus: !0,
                                infobar: 0,
                                toolbar: 0,
                                smallBtn: 0,
                                keyboard: 0,
                                slideShow: 0,
                                fullScreen: 0,
                                thumbs: 0,
                                touch: 0,
                                clickContent: !1,
                                clickSlide: !1,
                                clickOutside: !1,
                                dblclickContent: !1,
                                dblclickSlide: !1,
                                dblclickOutside: !1,
                            })),
                                e.group.push(a);
                        }),
                    Object.keys(e.slides).length && (e.updateControls(), (t = e.Thumbs) && t.isActive && (t.create(), t.focus()));
                },
                addEvents: function () {
                    var e = this;
                    e.removeEvents(),
                        e.$refs.container
                            .on("click.fb-close", "[data-fancybox-close]", function (t) {
                                t.stopPropagation(), t.preventDefault(), e.close(t);
                            })
                            .on("touchstart.fb-prev click.fb-prev", "[data-fancybox-prev]", function (t) {
                                t.stopPropagation(), t.preventDefault(), e.previous();
                            })
                            .on("touchstart.fb-next click.fb-next", "[data-fancybox-next]", function (t) {
                                t.stopPropagation(), t.preventDefault(), e.next();
                            })
                            .on("click.fb", "[data-fancybox-zoom]", function (t) {
                                e[e.isScaledDown() ? "scaleToActual" : "scaleToFit"]();
                            }),
                        n.on("orientationchange.fb resize.fb", function (t) {
                            t && t.originalEvent && "resize" === t.originalEvent.type
                                ? (e.requestId && c(e.requestId),
                                    (e.requestId = l(function () {
                                        e.update(t);
                                    })))
                                : (e.current && "iframe" === e.current.type && e.$refs.stage.hide(),
                                    setTimeout(
                                        function () {
                                            e.$refs.stage.show(), e.update(t);
                                        },
                                        i.fancybox.isMobile ? 600 : 250
                                    ));
                        }),
                        a.on("keydown.fb", function (t) {
                            var o = (i.fancybox ? i.fancybox.getInstance() : null).current,
                                s = t.keyCode || t.which;
                            if (9 != s)
                                return !o.opts.keyboard || t.ctrlKey || t.altKey || t.shiftKey || i(t.target).is("input,textarea,video,audio,select")
                                    ? void 0
                                    : 8 === s || 27 === s
                                        ? (t.preventDefault(), void e.close(t))
                                        : 37 === s || 38 === s
                                            ? (t.preventDefault(), void e.previous())
                                            : 39 === s || 40 === s
                                                ? (t.preventDefault(), void e.next())
                                                : void e.trigger("afterKeydown", t, s);
                            o.opts.trapFocus && e.focus(t);
                        }),
                    e.group[e.currIndex].opts.idleTime &&
                    ((e.idleSecondsCounter = 0),
                        a.on("mousemove.fb-idle mouseleave.fb-idle mousedown.fb-idle touchstart.fb-idle touchmove.fb-idle scroll.fb-idle keydown.fb-idle", function (t) {
                            (e.idleSecondsCounter = 0), e.isIdle && e.showControls(), (e.isIdle = !1);
                        }),
                        (e.idleInterval = t.setInterval(function () {
                            ++e.idleSecondsCounter >= e.group[e.currIndex].opts.idleTime && !e.isDragging && ((e.isIdle = !0), (e.idleSecondsCounter = 0), e.hideControls());
                        }, 1e3)));
                },
                removeEvents: function () {
                    n.off("orientationchange.fb resize.fb"), a.off("keydown.fb .fb-idle"), this.$refs.container.off(".fb-close .fb-prev .fb-next"), this.idleInterval && (t.clearInterval(this.idleInterval), (this.idleInterval = null));
                },
                previous: function (t) {
                    return this.jumpTo(this.currPos - 1, t);
                },
                next: function (t) {
                    return this.jumpTo(this.currPos + 1, t);
                },
                jumpTo: function (t, e) {
                    var o,
                        s,
                        n,
                        a,
                        r,
                        l,
                        c,
                        d,
                        u = this,
                        h = u.group.length;
                    if (!(u.isDragging || u.isClosing || (u.isAnimating && u.firstRun)))
                        return (
                            (t = parseInt(t, 10)),
                            !(!(s = (u.current || u).opts.loop) && (t < 0 || h <= t)) &&
                            ((o = u.firstRun = !Object.keys(u.slides).length),
                                (a = u.current),
                                (u.prevIndex = u.currIndex),
                                (u.prevPos = u.currPos),
                                (n = u.createSlide(t)),
                            1 < h && ((s || n.index < h - 1) && u.createSlide(t + 1), (s || 0 < n.index) && u.createSlide(t - 1)),
                                (u.current = n),
                                (u.currIndex = n.index),
                                (u.currPos = n.pos),
                                u.trigger("beforeShow", o),
                                u.updateControls(),
                                (n.forcedDuration = void 0),
                                i.isNumeric(e) ? (n.forcedDuration = e) : (e = n.opts[o ? "animationDuration" : "transitionDuration"]),
                                (e = parseInt(e, 10)),
                                (t = u.isMoved(n)),
                                n.$slide.addClass("fancybox-slide--current"),
                                o
                                    ? (n.opts.animationEffect && e && u.$refs.container.css("transition-duration", e + "ms"), u.$refs.container.addClass("fancybox-is-open").trigger("focus"), u.loadSlide(n))
                                    : ((r = i.fancybox.getTranslate(a.$slide)),
                                        (l = i.fancybox.getTranslate(u.$refs.stage)),
                                        i.each(u.slides, function (t, e) {
                                            i.fancybox.stop(e.$slide, !0);
                                        }),
                                    a.pos !== n.pos && (a.isComplete = !1),
                                        a.$slide.removeClass("fancybox-slide--complete fancybox-slide--current"),
                                        t
                                            ? ((d = r.left - (a.pos * r.width + a.pos * a.opts.gutter)),
                                                i.each(u.slides, function (t, o) {
                                                    o.$slide.removeClass("fancybox-animated").removeClass(function (t, e) {
                                                        return (e.match(/(^|\s)fancybox-fx-\S+/g) || []).join(" ");
                                                    });
                                                    var s = o.pos * r.width + o.pos * o.opts.gutter;
                                                    i.fancybox.setTranslate(o.$slide, {top: 0, left: s - l.left + d}),
                                                    o.pos !== n.pos && o.$slide.addClass("fancybox-slide--" + (o.pos > n.pos ? "next" : "previous")),
                                                        p(o.$slide),
                                                        i.fancybox.animate(o.$slide, {
                                                            top: 0,
                                                            left: (o.pos - n.pos) * r.width + (o.pos - n.pos) * o.opts.gutter
                                                        }, e, function () {
                                                            o.$slide.css({
                                                                transform: "",
                                                                opacity: ""
                                                            }).removeClass("fancybox-slide--next fancybox-slide--previous"), o.pos === u.currPos && u.complete();
                                                        });
                                                }))
                                            : e &&
                                            n.opts.transitionEffect &&
                                            ((c = "fancybox-animated fancybox-fx-" + n.opts.transitionEffect),
                                                a.$slide.addClass("fancybox-slide--" + (a.pos > n.pos ? "next" : "previous")),
                                                i.fancybox.animate(
                                                    a.$slide,
                                                    c,
                                                    e,
                                                    function () {
                                                        a.$slide.removeClass(c).removeClass("fancybox-slide--next fancybox-slide--previous");
                                                    },
                                                    !1
                                                )),
                                        n.isLoaded ? u.revealContent(n) : u.loadSlide(n)),
                                void u.preload("image"))
                        );
                },
                createSlide: function (t) {
                    var e,
                        o = this,
                        s = t % o.group.length;
                    return (
                        (s = s < 0 ? o.group.length + s : s),
                        !o.slides[t] && o.group[s] && ((e = i('<div class="fancybox-slide"></div>').appendTo(o.$refs.stage)), (o.slides[t] = i.extend(!0, {}, o.group[s], {
                            pos: t,
                            $slide: e,
                            isLoaded: !1
                        })), o.updateSlide(o.slides[t])),
                            o.slides[t]
                    );
                },
                scaleToActual: function (t, e, o) {
                    var s,
                        n,
                        a,
                        r,
                        l = this,
                        c = l.current,
                        d = c.$content,
                        p = i.fancybox.getTranslate(c.$slide).width,
                        u = i.fancybox.getTranslate(c.$slide).height,
                        h = c.width,
                        f = c.height;
                    l.isAnimating ||
                    l.isMoved() ||
                    !d ||
                    "image" != c.type ||
                    !c.isLoaded ||
                    c.hasError ||
                    ((l.isAnimating = !0),
                        i.fancybox.stop(d),
                        (t = void 0 === t ? 0.5 * p : t),
                        (e = void 0 === e ? 0.5 * u : e),
                        ((s = i.fancybox.getTranslate(d)).top -= i.fancybox.getTranslate(c.$slide).top),
                        (s.left -= i.fancybox.getTranslate(c.$slide).left),
                        (a = h / s.width),
                        (r = f / s.height),
                        (n = 0.5 * p - 0.5 * h),
                        (c = 0.5 * u - 0.5 * f),
                    p < h && (0 < (n = s.left * a - (t * a - t)) && (n = 0), n < p - h && (n = p - h)),
                    u < f && (0 < (c = s.top * r - (e * r - e)) && (c = 0), c < u - f && (c = u - f)),
                        l.updateCursor(h, f),
                        i.fancybox.animate(d, {top: c, left: n, scaleX: a, scaleY: r}, o || 366, function () {
                            l.isAnimating = !1;
                        }),
                    l.SlideShow && l.SlideShow.isActive && l.SlideShow.stop());
                },
                scaleToFit: function (t) {
                    var e = this,
                        o = e.current,
                        s = o.$content;
                    e.isAnimating ||
                    e.isMoved() ||
                    !s ||
                    "image" != o.type ||
                    !o.isLoaded ||
                    o.hasError ||
                    ((e.isAnimating = !0),
                        i.fancybox.stop(s),
                        (o = e.getFitPos(o)),
                        e.updateCursor(o.width, o.height),
                        i.fancybox.animate(s, {
                            top: o.top,
                            left: o.left,
                            scaleX: o.width / s.width(),
                            scaleY: o.height / s.height()
                        }, t || 366, function () {
                            e.isAnimating = !1;
                        }));
                },
                getFitPos: function (t) {
                    var e,
                        o,
                        s = t.$content,
                        n = t.$slide,
                        a = t.width || t.opts.width,
                        r = t.height || t.opts.height,
                        l = {};
                    return (
                        !!(t.isLoaded && s && s.length) &&
                        ((e = i.fancybox.getTranslate(this.$refs.stage).width),
                            (o = i.fancybox.getTranslate(this.$refs.stage).height),
                            (e -= parseFloat(n.css("paddingLeft")) + parseFloat(n.css("paddingRight")) + parseFloat(s.css("marginLeft")) + parseFloat(s.css("marginRight"))),
                            (o -= parseFloat(n.css("paddingTop")) + parseFloat(n.css("paddingBottom")) + parseFloat(s.css("marginTop")) + parseFloat(s.css("marginBottom"))),
                        (a && r) || ((a = e), (r = o)),
                        e - 0.5 < (a *= s = Math.min(1, e / a, o / r)) && (a = e),
                        o - 0.5 < (r *= s) && (r = o),
                            "image" === t.type
                                ? ((l.top = Math.floor(0.5 * (o - r)) + parseFloat(n.css("paddingTop"))), (l.left = Math.floor(0.5 * (e - a)) + parseFloat(n.css("paddingLeft"))))
                                : "video" === t.contentType && (a / (t = t.opts.width && t.opts.height ? a / r : t.opts.ratio || 16 / 9) < r ? (r = a / t) : r * t < a && (a = r * t)),
                            (l.width = a),
                            (l.height = r),
                            l)
                    );
                },
                update: function (t) {
                    var e = this;
                    i.each(e.slides, function (i, o) {
                        e.updateSlide(o, t);
                    });
                },
                updateSlide: function (t, e) {
                    var o = this,
                        s = t && t.$content,
                        n = t.width || t.opts.width,
                        a = t.height || t.opts.height,
                        r = t.$slide;
                    o.adjustCaption(t),
                    s && (n || a || "video" === t.contentType) && !t.hasError && (i.fancybox.stop(s), i.fancybox.setTranslate(s, o.getFitPos(t)), t.pos === o.currPos && ((o.isAnimating = !1), o.updateCursor())),
                        o.adjustLayout(t),
                    r.length &&
                    (r.trigger("refresh"), t.pos === o.currPos && o.$refs.toolbar.add(o.$refs.navigation.find(".fancybox-button--arrow_right")).toggleClass("compensate-for-scrollbar", r.get(0).scrollHeight > r.get(0).clientHeight)),
                        o.trigger("onUpdate", t, e);
                },
                centerSlide: function (t) {
                    var e = this,
                        o = e.current,
                        s = o.$slide;
                    !e.isClosing &&
                    o &&
                    (s.siblings().css({transform: "", opacity: ""}),
                        s.parent().children().removeClass("fancybox-slide--previous fancybox-slide--next"),
                        i.fancybox.animate(
                            s,
                            {top: 0, left: 0, opacity: 1},
                            void 0 === t ? 0 : t,
                            function () {
                                s.css({transform: "", opacity: ""}), o.isComplete || e.complete();
                            },
                            !1
                        ));
                },
                isMoved: function (t) {
                    var e,
                        o = t || this.current;
                    return !!o && ((e = i.fancybox.getTranslate(this.$refs.stage)), (t = i.fancybox.getTranslate(o.$slide)), !o.$slide.hasClass("fancybox-animated") && (0.5 < Math.abs(t.top - e.top) || 0.5 < Math.abs(t.left - e.left)));
                },
                updateCursor: function (t, e) {
                    var o = this,
                        s = o.current,
                        n = o.$refs.container;
                    s &&
                    !o.isClosing &&
                    o.Guestures &&
                    (n.removeClass("fancybox-is-zoomable fancybox-can-zoomIn fancybox-can-zoomOut fancybox-can-swipe fancybox-can-pan"),
                        (e = !!(t = o.canPan(t, e)) || o.isZoomable()),
                        n.toggleClass("fancybox-is-zoomable", e),
                        i("[data-fancybox-zoom]").prop("disabled", !e),
                        t
                            ? n.addClass("fancybox-can-pan")
                            : e && ("zoom" === s.opts.clickContent || (i.isFunction(s.opts.clickContent) && "zoom" == s.opts.clickContent(s)))
                            ? n.addClass("fancybox-can-zoomIn")
                            : s.opts.touch && (s.opts.touch.vertical || 1 < o.group.length) && "video" !== s.contentType && n.addClass("fancybox-can-swipe"));
                },
                isZoomable: function () {
                    var t,
                        e = this.current;
                    if (e && !this.isClosing && "image" === e.type && !e.hasError) {
                        if (!e.isLoaded) return !0;
                        if ((t = this.getFitPos(e)) && (e.width > t.width || e.height > t.height)) return !0;
                    }
                    return !1;
                },
                isScaledDown: function (t, e) {
                    var o = !1,
                        s = this.current,
                        n = s.$content;
                    return void 0 !== t && void 0 !== e ? (o = t < s.width && e < s.height) : n && (o = (o = i.fancybox.getTranslate(n)).width < s.width && o.height < s.height), o;
                },
                canPan: function (t, e) {
                    var o = this.current,
                        s = null,
                        n = !1;
                    return (
                        "image" === o.type &&
                        (o.isComplete || (t && e)) &&
                        !o.hasError &&
                        ((n = this.getFitPos(o)),
                            void 0 !== t && void 0 !== e ? (s = {
                                width: t,
                                height: e
                            }) : o.isComplete && (s = i.fancybox.getTranslate(o.$content)),
                        s && n && (n = 1.5 < Math.abs(s.width - n.width) || 1.5 < Math.abs(s.height - n.height))),
                            n
                    );
                },
                loadSlide: function (t) {
                    var e,
                        o,
                        s,
                        n = this;
                    if (!t.isLoading && !t.isLoaded) {
                        if (!(t.isLoading = !0) === n.trigger("beforeLoad", t)) return (t.isLoading = !1);
                        switch (((e = t.type), (o = t.$slide).off("refresh").trigger("onReset").addClass(t.opts.slideClass), e)) {
                            case "image":
                                n.setImage(t);
                                break;
                            case "iframe":
                                n.setIframe(t);
                                break;
                            case "html":
                                n.setContent(t, t.src || t.content);
                                break;
                            case "video":
                                n.setContent(
                                    t,
                                    t.opts.video.tpl
                                        .replace(/\{\{src\}\}/gi, t.src)
                                        .replace("{{format}}", t.opts.videoFormat || t.opts.video.format || "")
                                        .replace("{{poster}}", t.thumb || "")
                                );
                                break;
                            case "inline":
                                i(t.src).length ? n.setContent(t, i(t.src)) : n.setError(t);
                                break;
                            case "ajax":
                                n.showLoading(t),
                                    (s = i.ajax(
                                        i.extend({}, t.opts.ajax.settings, {
                                            url: t.src,
                                            success: function (e, i) {
                                                "success" === i && n.setContent(t, e);
                                            },
                                            error: function (e, i) {
                                                e && "abort" !== i && n.setError(t);
                                            },
                                        })
                                    )),
                                    o.one("onReset", function () {
                                        s.abort();
                                    });
                                break;
                            default:
                                n.setError(t);
                        }
                        return !0;
                    }
                },
                setImage: function (t) {
                    var o,
                        s = this;
                    setTimeout(function () {
                        var e = t.$image;
                        s.isClosing || !t.isLoading || (e && e.length && e[0].complete) || t.hasError || s.showLoading(t);
                    }, 50),
                        s.checkSrcset(t),
                        (t.$content = i('<div class="fancybox-content"></div>').addClass("fancybox-is-hidden").appendTo(t.$slide.addClass("fancybox-slide--image"))),
                    !1 !== t.opts.preload &&
                    t.opts.width &&
                    t.opts.height &&
                    t.thumb &&
                    ((t.width = t.opts.width),
                        (t.height = t.opts.height),
                        ((o = e.createElement("img")).onerror = function () {
                            i(this).remove(), (t.$ghost = null);
                        }),
                        (o.onload = function () {
                            s.afterLoad(t);
                        }),
                        (t.$ghost = i(o).addClass("fancybox-image").appendTo(t.$content).attr("src", t.thumb))),
                        s.setBigImage(t);
                },
                checkSrcset: function (e) {
                    var i,
                        o,
                        s,
                        n,
                        a = e.opts.srcset || e.opts.image.srcset;
                    if (a) {
                        (s = t.devicePixelRatio || 1),
                            (n = t.innerWidth * s),
                            (o = a.split(",").map(function (t) {
                                var e = {};
                                return (
                                    t
                                        .trim()
                                        .split(/\s+/)
                                        .forEach(function (t, i) {
                                            var o = parseInt(t.substring(0, t.length - 1), 10);
                                            if (0 === i) return (e.url = t);
                                            o && ((e.value = o), (e.postfix = t[t.length - 1]));
                                        }),
                                        e
                                );
                            })).sort(function (t, e) {
                                return t.value - e.value;
                            });
                        for (var r = 0; r < o.length; r++) {
                            var l = o[r];
                            if (("w" === l.postfix && l.value >= n) || ("x" === l.postfix && l.value >= s)) {
                                i = l;
                                break;
                            }
                        }
                        !i && o.length && (i = o[o.length - 1]), i && ((e.src = i.url), e.width && e.height && "w" == i.postfix && ((e.height = (e.width / e.height) * i.value), (e.width = i.value)), (e.opts.srcset = a));
                    }
                },
                setBigImage: function (t) {
                    var o = this,
                        s = e.createElement("img"),
                        a = i(s);
                    (t.$image = a
                        .one("error", function () {
                            o.setError(t);
                        })
                        .one("load", function () {
                            var e;
                            t.$ghost || (o.resolveImageSlideSize(t, this.naturalWidth, this.naturalHeight), o.afterLoad(t)),
                            o.isClosing ||
                            (t.opts.srcset &&
                            (((e = t.opts.sizes) && "auto" !== e) || (e = (1 < t.width / t.height && 1 < n.width() / n.height() ? "100" : Math.round((t.width / t.height) * 100)) + "vw"),
                                a.attr("sizes", e).attr("srcset", t.opts.srcset)),
                            t.$ghost &&
                            setTimeout(function () {
                                t.$ghost && !o.isClosing && t.$ghost.hide();
                            }, Math.min(300, Math.max(1e3, t.height / 1600))),
                                o.hideLoading(t));
                        })
                        .addClass("fancybox-image")
                        .attr("src", t.src)
                        .appendTo(t.$content)),
                        (s.complete || "complete" == s.readyState) && a.naturalWidth && a.naturalHeight ? a.trigger("load") : s.error && a.trigger("error");
                },
                resolveImageSlideSize: function (t, e, i) {
                    var o = parseInt(t.opts.width, 10),
                        s = parseInt(t.opts.height, 10);
                    (t.width = e), (t.height = i), 0 < o && ((t.width = o), (t.height = Math.floor((o * i) / e))), 0 < s && ((t.width = Math.floor((s * e) / i)), (t.height = s));
                },
                setIframe: function (t) {
                    var e,
                        o = this,
                        s = t.opts.iframe,
                        n = t.$slide;
                    (t.$content = i('<div class="fancybox-content' + (s.preload ? " fancybox-is-hidden" : "") + '"></div>')
                        .css(s.css)
                        .appendTo(n)),
                        n.addClass("fancybox-slide--" + t.contentType),
                        (t.$iframe = e = i(s.tpl.replace(/\{rnd\}/g, new Date().getTime()))
                            .attr(s.attr)
                            .appendTo(t.$content)),
                        s.preload
                            ? (o.showLoading(t),
                                e.on("load.fb error.fb", function (e) {
                                    (this.isReady = 1), t.$slide.trigger("refresh"), o.afterLoad(t);
                                }),
                                n.on("refresh.fb", function () {
                                    var i,
                                        o = t.$content,
                                        a = s.css.width,
                                        r = s.css.height;
                                    if (1 === e[0].isReady) {
                                        try {
                                            i = e.contents().find("body");
                                        } catch (i) {
                                        }
                                        i &&
                                        i.length &&
                                        i.children().length &&
                                        (n.css("overflow", "visible"),
                                            o.css({width: "100%", "max-width": "100%", height: "9999px"}),
                                        void 0 === a && (a = Math.ceil(Math.max(i[0].clientWidth, i.outerWidth(!0)))),
                                            o.css("width", a || "").css("max-width", ""),
                                        void 0 === r && (r = Math.ceil(Math.max(i[0].clientHeight, i.outerHeight(!0)))),
                                            o.css("height", r || ""),
                                            n.css("overflow", "auto")),
                                            o.removeClass("fancybox-is-hidden");
                                    }
                                }))
                            : o.afterLoad(t),
                        e.attr("src", t.src),
                        n.one("onReset", function () {
                            try {
                                i(this).find("iframe").hide().unbind().attr("src", "//about:blank");
                            } catch (t) {
                            }
                            i(this).off("refresh.fb").empty(), (t.isLoaded = !1), (t.isRevealed = !1);
                        });
                },
                setContent: function (t, e) {
                    var o;
                    this.isClosing ||
                    (this.hideLoading(t),
                    t.$content && i.fancybox.stop(t.$content),
                        t.$slide.empty(),
                        (o = e) && o.hasOwnProperty && o instanceof i && e.parent().length
                            ? ((e.hasClass("fancybox-content") || e.parent().hasClass("fancybox-content")) && e.parents(".fancybox-slide").trigger("onReset"),
                                (t.$placeholder = i("<div>").hide().insertAfter(e)),
                                e.css("display", "inline-block"))
                            : t.hasError || ("string" === i.type(e) && (e = i("<div>").append(i.trim(e)).contents()), t.opts.filter && (e = i("<div>").html(e).find(t.opts.filter))),
                        t.$slide.one("onReset", function () {
                            i(this).find("video,audio").trigger("pause"),
                            t.$placeholder && (t.$placeholder.after(e.removeClass("fancybox-content").hide()).remove(), (t.$placeholder = null)),
                            t.$smallBtn && (t.$smallBtn.remove(), (t.$smallBtn = null)),
                            t.hasError || (i(this).empty(), (t.isLoaded = !1), (t.isRevealed = !1));
                        }),
                        i(e).appendTo(t.$slide),
                    i(e).is("video,audio") &&
                    (i(e).addClass("fancybox-video"), i(e).wrap("<div></div>"), (t.contentType = "video"), (t.opts.width = t.opts.width || i(e).attr("width")), (t.opts.height = t.opts.height || i(e).attr("height"))),
                        (t.$content = t.$slide.children().filter("div,form,main,video,audio,article,.fancybox-content").first()),
                        t.$content.siblings().hide(),
                    t.$content.length || (t.$content = t.$slide.wrapInner("<div></div>").children().first()),
                        t.$content.addClass("fancybox-content"),
                        t.$slide.addClass("fancybox-slide--" + t.contentType),
                        this.afterLoad(t));
                },
                setError: function (t) {
                    (t.hasError = !0),
                        t.$slide
                            .trigger("onReset")
                            .removeClass("fancybox-slide--" + t.contentType)
                            .addClass("fancybox-slide--error"),
                        (t.contentType = "html"),
                        this.setContent(t, this.translate(t, t.opts.errorTpl)),
                    t.pos === this.currPos && (this.isAnimating = !1);
                },
                showLoading: function (t) {
                    (t = t || this.current) && !t.$spinner && (t.$spinner = i(this.translate(this, this.opts.spinnerTpl)).appendTo(t.$slide).hide().fadeIn("fast"));
                },
                hideLoading: function (t) {
                    (t = t || this.current) && t.$spinner && (t.$spinner.stop().remove(), delete t.$spinner);
                },
                afterLoad: function (t) {
                    var e = this;
                    e.isClosing ||
                    ((t.isLoading = !1),
                        (t.isLoaded = !0),
                        e.trigger("afterLoad", t),
                        e.hideLoading(t),
                    !t.opts.smallBtn || (t.$smallBtn && t.$smallBtn.length) || (t.$smallBtn = i(e.translate(t, t.opts.btnTpl.smallBtn)).appendTo(t.$content)),
                    t.opts.protect &&
                    t.$content &&
                    !t.hasError &&
                    (t.$content.on("contextmenu.fb", function (t) {
                        return 2 == t.button && t.preventDefault(), !0;
                    }),
                    "image" === t.type && i('<div class="fancybox-spaceball"></div>').appendTo(t.$content)),
                        e.adjustCaption(t),
                        e.adjustLayout(t),
                    t.pos === e.currPos && e.updateCursor(),
                        e.revealContent(t));
                },
                adjustCaption: function (t) {
                    var e = this,
                        i = t || e.current,
                        o = i.opts.caption,
                        s = i.opts.preventCaptionOverlap,
                        n = e.$refs.caption;
                    (t = !1),
                        n.toggleClass("fancybox-caption--separate", s),
                    s &&
                    o &&
                    o.length &&
                    (i.pos !== e.currPos ? ((n = n.clone().appendTo(n.parent())).children().eq(0).empty().html(o), (t = n.outerHeight(!0)), n.empty().remove()) : e.$caption && (t = e.$caption.outerHeight(!0)),
                        i.$slide.css("padding-bottom", t || ""));
                },
                adjustLayout: function (t) {
                    var e,
                        i,
                        o,
                        s = t || this.current;
                    s.isLoaded &&
                    !0 !== s.opts.disableLayoutFix &&
                    (s.$content.css("margin-bottom", ""),
                    s.$content.outerHeight() > s.$slide.height() + 0.5 &&
                    ((i = s.$slide[0].style["padding-bottom"]),
                        (o = s.$slide.css("padding-bottom")),
                    0 < parseFloat(o) && ((t = s.$slide[0].scrollHeight), s.$slide.css("padding-bottom", 0), Math.abs(t - s.$slide[0].scrollHeight) < 1 && (e = o), s.$slide.css("padding-bottom", i))),
                        s.$content.css("margin-bottom", e));
                },
                revealContent: function (t) {
                    var e,
                        o,
                        s,
                        n,
                        a = this,
                        r = t.$slide,
                        l = !1,
                        c = !1,
                        d = a.isMoved(t),
                        u = t.isRevealed;
                    return (
                        (t.isRevealed = !0),
                            (e = t.opts[a.firstRun ? "animationEffect" : "transitionEffect"]),
                            (s = t.opts[a.firstRun ? "animationDuration" : "transitionDuration"]),
                            (s = parseInt(void 0 === t.forcedDuration ? s : t.forcedDuration, 10)),
                        (!d && t.pos === a.currPos && s) || (e = !1),
                        "zoom" === e && (t.pos === a.currPos && s && "image" === t.type && !t.hasError && (c = a.getThumbPos(t)) ? (l = a.getFitPos(t)) : (e = "fade")),
                            "zoom" === e
                                ? ((a.isAnimating = !0),
                                    (l.scaleX = l.width / c.width),
                                    (l.scaleY = l.height / c.height),
                                "auto" == (n = t.opts.zoomOpacity) && (n = 0.1 < Math.abs(t.width / t.height - c.width / c.height)),
                                n && ((c.opacity = 0.1), (l.opacity = 1)),
                                    i.fancybox.setTranslate(t.$content.removeClass("fancybox-is-hidden"), c),
                                    p(t.$content),
                                    void i.fancybox.animate(t.$content, l, s, function () {
                                        (a.isAnimating = !1), a.complete();
                                    }))
                                : (a.updateSlide(t),
                                    e
                                        ? (i.fancybox.stop(r),
                                            (o = "fancybox-slide--" + (t.pos >= a.prevPos ? "next" : "previous") + " fancybox-animated fancybox-fx-" + e),
                                            r.addClass(o).removeClass("fancybox-slide--current"),
                                            t.$content.removeClass("fancybox-is-hidden"),
                                            p(r),
                                        "image" !== t.type && t.$content.hide().show(0),
                                            void i.fancybox.animate(
                                                r,
                                                "fancybox-slide--current",
                                                s,
                                                function () {
                                                    r.removeClass(o).css({
                                                        transform: "",
                                                        opacity: ""
                                                    }), t.pos === a.currPos && a.complete();
                                                },
                                                !0
                                            ))
                                        : (t.$content.removeClass("fancybox-is-hidden"), u || !d || "image" !== t.type || t.hasError || t.$content.hide().fadeIn("fast"), void (t.pos === a.currPos && a.complete())))
                    );
                },
                getThumbPos: function (t) {
                    var o,
                        s,
                        n,
                        a,
                        r = t.$thumb;
                    return (
                        !(
                            !r ||
                            !(n = r[0]) ||
                            n.ownerDocument !== e ||
                            (i(".fancybox-container").css("pointer-events", "none"),
                                (a = {
                                    x: n.getBoundingClientRect().left + n.offsetWidth / 2,
                                    y: n.getBoundingClientRect().top + n.offsetHeight / 2
                                }),
                                (n = e.elementFromPoint(a.x, a.y) === n),
                                i(".fancybox-container").css("pointer-events", ""),
                                !n)
                        ) &&
                        ((o = i.fancybox.getTranslate(r)),
                            (t = parseFloat(r.css("border-top-width") || 0)),
                            (a = parseFloat(r.css("border-right-width") || 0)),
                            (n = parseFloat(r.css("border-bottom-width") || 0)),
                            (r = parseFloat(r.css("border-left-width") || 0)),
                            (s = {
                                top: o.top + t,
                                left: o.left + r,
                                width: o.width - a - r,
                                height: o.height - t - n,
                                scaleX: 1,
                                scaleY: 1
                            }),
                        0 < o.width && 0 < o.height && s)
                    );
                },
                complete: function () {
                    var t,
                        e = this,
                        o = e.current,
                        s = {};
                    !e.isMoved() &&
                    o.isLoaded &&
                    (o.isComplete ||
                    ((o.isComplete = !0),
                        o.$slide.siblings().trigger("onReset"),
                        e.preload("inline"),
                        p(o.$slide),
                        o.$slide.addClass("fancybox-slide--complete"),
                        i.each(e.slides, function (t, o) {
                            o.pos >= e.currPos - 1 && o.pos <= e.currPos + 1 ? (s[o.pos] = o) : o && (i.fancybox.stop(o.$slide), o.$slide.off().remove());
                        }),
                        (e.slides = s)),
                        (e.isAnimating = !1),
                        e.updateCursor(),
                        e.trigger("afterShow"),
                    o.opts.video.autoStart &&
                    o.$slide
                        .find("video,audio")
                        .filter(":visible:first")
                        .trigger("play")
                        .one("ended", function () {
                            Document.exitFullscreen ? Document.exitFullscreen() : this.webkitExitFullscreen && this.webkitExitFullscreen(), e.next();
                        }),
                    o.opts.autoFocus && "html" === o.contentType && ((t = o.$content.find("input[autofocus]:enabled:visible:first")).length ? t.trigger("focus") : e.focus(null, !0)),
                        o.$slide.scrollTop(0).scrollLeft(0));
                },
                preload: function (t) {
                    var e,
                        i,
                        o = this;
                    o.group.length < 2 || ((i = o.slides[o.currPos + 1]), (e = o.slides[o.currPos - 1]) && e.type === t && o.loadSlide(e), i && i.type === t && o.loadSlide(i));
                },
                focus: function (t, o) {
                    var s = this,
                        n = [
                            "a[href]",
                            "area[href]",
                            'input:not([disabled]):not([type="hidden"]):not([aria-hidden])',
                            "select:not([disabled]):not([aria-hidden])",
                            "textarea:not([disabled]):not([aria-hidden])",
                            "button:not([disabled]):not([aria-hidden])",
                            "iframe",
                            "object",
                            "embed",
                            "video",
                            "audio",
                            "[contenteditable]",
                            '[tabindex]:not([tabindex^="-"])',
                        ].join(",");
                    s.isClosing ||
                    ((o = (o = !t && s.current && s.current.isComplete ? s.current.$slide.find("*:visible" + (o ? ":not(.fancybox-close-small)" : "")) : s.$refs.container.find("*:visible")).filter(n).filter(function () {
                        return "hidden" !== i(this).css("visibility") && !i(this).hasClass("disabled");
                    })).length
                        ? ((n = o.index(e.activeElement)),
                            t && t.shiftKey ? (n < 0 || 0 == n) && (t.preventDefault(), o.eq(o.length - 1).trigger("focus")) : (n < 0 || n == o.length - 1) && (t && t.preventDefault(), o.eq(0).trigger("focus")))
                        : s.$refs.container.trigger("focus"));
                },
                activate: function () {
                    var t = this;
                    i(".fancybox-container").each(function () {
                        var e = i(this).data("FancyBox");
                        e && e.id !== t.id && !e.isClosing && (e.trigger("onDeactivate"), e.removeEvents(), (e.isVisible = !1));
                    }),
                        (t.isVisible = !0),
                    (t.current || t.isIdle) && (t.update(), t.updateControls()),
                        t.trigger("onActivate"),
                        t.addEvents();
                },
                close: function (t, e) {
                    function o() {
                        d.cleanUp(t);
                    }

                    var s,
                        n,
                        a,
                        r,
                        c,
                        d = this,
                        u = d.current;
                    return (
                        !d.isClosing &&
                        (!(d.isClosing = !0) === d.trigger("beforeClose", t)
                            ? ((d.isClosing = !1),
                                l(function () {
                                    d.update();
                                }),
                                !1)
                            : (d.removeEvents(),
                                (a = u.$content),
                                (s = u.opts.animationEffect),
                                (n = i.isNumeric(e) ? e : s ? u.opts.animationDuration : 0),
                                u.$slide.removeClass("fancybox-slide--complete fancybox-slide--next fancybox-slide--previous fancybox-animated"),
                                !0 !== t ? i.fancybox.stop(u.$slide) : (s = !1),
                                u.$slide.siblings().trigger("onReset").remove(),
                            n &&
                            d.$refs.container
                                .removeClass("fancybox-is-open")
                                .addClass("fancybox-is-closing")
                                .css("transition-duration", n + "ms"),
                                d.hideLoading(u),
                                d.hideControls(!0),
                                d.updateCursor(),
                            "zoom" !== s || (a && n && "image" === u.type && !d.isMoved() && !u.hasError && (c = d.getThumbPos(u))) || (s = "fade"),
                                "zoom" === s
                                    ? (i.fancybox.stop(a),
                                        (e = {
                                            top: (r = i.fancybox.getTranslate(a)).top,
                                            left: r.left,
                                            scaleX: r.width / c.width,
                                            scaleY: r.height / c.height,
                                            width: c.width,
                                            height: c.height
                                        }),
                                    "auto" == (r = u.opts.zoomOpacity) && (r = 0.1 < Math.abs(u.width / u.height - c.width / c.height)),
                                    r && (c.opacity = 0),
                                        i.fancybox.setTranslate(a, e),
                                        p(a),
                                        i.fancybox.animate(a, c, n, o))
                                    : s && n
                                    ? i.fancybox.animate(u.$slide.addClass("fancybox-slide--previous").removeClass("fancybox-slide--current"), "fancybox-animated fancybox-fx-" + s, n, o)
                                    : !0 === t
                                        ? setTimeout(o, n)
                                        : o(),
                                !0))
                    );
                },
                cleanUp: function (e) {
                    var o,
                        s = this,
                        n = s.current.opts.$orig;
                    s.current.$slide.trigger("onReset"),
                        s.$refs.container.empty().remove(),
                        s.trigger("afterClose", e),
                    s.current.opts.backFocus && ((n && n.length && n.is(":visible")) || (n = s.$trigger), n && n.length && ((o = t.scrollX), (e = t.scrollY), n.trigger("focus"), i("html, body").scrollTop(e).scrollLeft(o))),
                        (s.current = null),
                        (s = i.fancybox.getInstance()) ? s.activate() : (i("body").removeClass("fancybox-active compensate-for-scrollbar"), i("#fancybox-style-noscroll").remove());
                },
                trigger: function (t, e) {
                    var o,
                        s = Array.prototype.slice.call(arguments, 1),
                        n = this;
                    if (((e = e && e.opts ? e : n.current) ? s.unshift(e) : (e = n), s.unshift(n), i.isFunction(e.opts[t]) && (o = e.opts[t].apply(e, s)), !1 === o)) return o;
                    ("afterClose" !== t && n.$refs ? n.$refs.container : a).trigger(t + ".fb", s);
                },
                updateControls: function () {
                    var t = this,
                        o = t.current,
                        s = o.index,
                        n = t.$refs.container,
                        a = t.$refs.caption,
                        r = o.opts.caption;
                    o.$slide.trigger("refresh"),
                        r && r.length ? (t.$caption = a).children().eq(0).html(r) : (t.$caption = null),
                    t.hasHiddenControls || t.isIdle || t.showControls(),
                        n.find("[data-fancybox-count]").html(t.group.length),
                        n.find("[data-fancybox-index]").html(s + 1),
                        n.find("[data-fancybox-prev]").prop("disabled", !o.opts.loop && s <= 0),
                        n.find("[data-fancybox-next]").prop("disabled", !o.opts.loop && s >= t.group.length - 1),
                        "image" === o.type
                            ? n
                                .find("[data-fancybox-zoom]")
                                .show()
                                .end()
                                .find("[data-fancybox-download]")
                                .attr("href", o.opts.image.src || o.src)
                                .show()
                            : o.opts.toolbar && n.find("[data-fancybox-download],[data-fancybox-zoom]").hide(),
                    i(e.activeElement).is(":hidden,[disabled]") && t.$refs.container.trigger("focus");
                },
                hideControls: function (t) {
                    var e = ["infobar", "toolbar", "nav"];
                    (!t && this.current.opts.preventCaptionOverlap) || e.push("caption"),
                        this.$refs.container.removeClass(
                            e
                                .map(function (t) {
                                    return "fancybox-show-" + t;
                                })
                                .join(" ")
                        ),
                        (this.hasHiddenControls = !0);
                },
                showControls: function () {
                    var t = this,
                        e = (t.current || t).opts,
                        i = t.$refs.container;
                    (t.hasHiddenControls = !1),
                        (t.idleSecondsCounter = 0),
                        i
                            .toggleClass("fancybox-show-toolbar", !(!e.toolbar || !e.buttons))
                            .toggleClass("fancybox-show-infobar", !!(e.infobar && 1 < t.group.length))
                            .toggleClass("fancybox-show-caption", !!t.$caption)
                            .toggleClass("fancybox-show-nav", !!(e.arrows && 1 < t.group.length))
                            .toggleClass("fancybox-is-modal", !!e.modal);
                },
                toggleControls: function () {
                    this.hasHiddenControls ? this.showControls() : this.hideControls();
                },
            }),
                (i.fancybox = {
                    version: "3.5.7",
                    defaults: s,
                    getInstance: function (t) {
                        var e = i('.fancybox-container:not(".fancybox-is-closing"):last').data("FancyBox"),
                            o = Array.prototype.slice.call(arguments, 1);
                        return e instanceof h && ("string" === i.type(t) ? e[t].apply(e, o) : "function" === i.type(t) && t.apply(e, o), e);
                    },
                    open: function (t, e, i) {
                        return new h(t, e, i);
                    },
                    close: function (t) {
                        var e = this.getInstance();
                        e && (e.close(), !0 === t && this.close(t));
                    },
                    destroy: function () {
                        this.close(!0), a.add("body").off("click.fb-start", "**");
                    },
                    isMobile: /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent),
                    use3d: ((s = e.createElement("div")), t.getComputedStyle && t.getComputedStyle(s) && t.getComputedStyle(s).getPropertyValue("transform") && !(e.documentMode && e.documentMode < 11)),
                    getTranslate: function (t) {
                        var e;
                        return !(!t || !t.length) && {
                            top: (e = t[0].getBoundingClientRect()).top || 0,
                            left: e.left || 0,
                            width: e.width,
                            height: e.height,
                            opacity: parseFloat(t.css("opacity"))
                        };
                    },
                    setTranslate: function (t, e) {
                        var i = "",
                            o = {};
                        if (t && e)
                            return (
                                (void 0 === e.left && void 0 === e.top) ||
                                ((i = (void 0 === e.left ? t.position() : e).left + "px, " + (void 0 === e.top ? t.position() : e).top + "px"), (i = this.use3d ? "translate3d(" + i + ", 0px)" : "translate(" + i + ")")),
                                    void 0 !== e.scaleX && void 0 !== e.scaleY ? (i += " scale(" + e.scaleX + ", " + e.scaleY + ")") : void 0 !== e.scaleX && (i += " scaleX(" + e.scaleX + ")"),
                                i.length && (o.transform = i),
                                void 0 !== e.opacity && (o.opacity = e.opacity),
                                void 0 !== e.width && (o.width = e.width),
                                void 0 !== e.height && (o.height = e.height),
                                    t.css(o)
                            );
                    },
                    animate: function (t, e, o, s, n) {
                        var a,
                            r = this;
                        i.isFunction(o) && ((s = o), (o = null)),
                            r.stop(t),
                            (a = r.getTranslate(t)),
                            t.on(d, function (l) {
                                (l && l.originalEvent && (!t.is(l.originalEvent.target) || "z-index" == l.originalEvent.propertyName)) ||
                                (r.stop(t),
                                i.isNumeric(o) && t.css("transition-duration", ""),
                                    i.isPlainObject(e)
                                        ? void 0 !== e.scaleX && void 0 !== e.scaleY && r.setTranslate(t, {
                                        top: e.top,
                                        left: e.left,
                                        width: a.width * e.scaleX,
                                        height: a.height * e.scaleY,
                                        scaleX: 1,
                                        scaleY: 1
                                    })
                                        : !0 !== n && t.removeClass(e),
                                i.isFunction(s) && s(l));
                            }),
                        i.isNumeric(o) && t.css("transition-duration", o + "ms"),
                            i.isPlainObject(e)
                                ? (void 0 !== e.scaleX && void 0 !== e.scaleY && (delete e.width, delete e.height, t.parent().hasClass("fancybox-slide--image") && t.parent().addClass("fancybox-is-scaling")), i.fancybox.setTranslate(t, e))
                                : t.addClass(e),
                            t.data(
                                "timer",
                                setTimeout(function () {
                                    t.trigger(d);
                                }, o + 33)
                            );
                    },
                    stop: function (t, e) {
                        t && t.length && (clearTimeout(t.data("timer")), e && t.trigger(d), t.off(d).css("transition-duration", ""), t.parent().removeClass("fancybox-is-scaling"));
                    },
                }),
                (i.fn.fancybox = function (t) {
                    var e;
                    return (e = (t = t || {}).selector || !1) ? i("body").off("click.fb-start", e).on("click.fb-start", e, {options: t}, o) : this.off("click.fb-start").on("click.fb-start", {
                        items: this,
                        options: t
                    }, o), this;
                }),
                a.on("click.fb-start", "[data-fancybox]", o),
                a.on("click.fb-start", "[data-fancybox-trigger]", function (t) {
                    i('[data-fancybox="' + i(this).attr("data-fancybox-trigger") + '"]')
                        .eq(i(this).attr("data-fancybox-index") || 0)
                        .trigger("click.fb-start", {$trigger: i(this)});
                }),
                (f = null),
                a.on("mousedown mouseup focus blur", ".fancybox-button", function (t) {
                    switch (t.type) {
                        case "mousedown":
                            f = i(this);
                            break;
                        case "mouseup":
                            f = null;
                            break;
                        case "focusin":
                            i(".fancybox-button").removeClass("fancybox-focus"), i(this).is(f) || i(this).is("[disabled]") || i(this).addClass("fancybox-focus");
                            break;
                        case "focusout":
                            i(".fancybox-button").removeClass("fancybox-focus");
                    }
                });
        }
        var f;
    })(window, document, jQuery),
    (function (t) {
        "use strict";

        function e(e, i, o) {
            if (e)
                return (
                    (o = o || ""),
                    "object" === t.type(o) && (o = t.param(o, !0)),
                        t.each(i, function (t, i) {
                            e = e.replace("$" + t, i || "");
                        }),
                    o.length && (e += (0 < e.indexOf("?") ? "&" : "?") + o),
                        e
                );
        }

        var i = {
            youtube: {
                matcher: /(youtube\.com|youtu\.be|youtube\-nocookie\.com)\/(watch\?(.*&)?v=|v\/|u\/|embed\/?)?(videoseries\?list=(.*)|[\w-]{11}|\?listType=(.*)&list=(.*))(.*)/i,
                params: {
                    autoplay: 1,
                    autohide: 1,
                    fs: 1,
                    rel: 0,
                    hd: 1,
                    wmode: "transparent",
                    enablejsapi: 1,
                    html5: 1
                },
                paramPlace: 8,
                type: "iframe",
                url: "https://www.youtube-nocookie.com/embed/$4",
                thumb: "https://img.youtube.com/vi/$4/hqdefault.jpg",
            },
            vimeo: {
                matcher: /^.+vimeo.com\/(.*\/)?([\d]+)(.*)?/,
                params: {autoplay: 1, hd: 1, show_title: 1, show_byline: 1, show_portrait: 0, fullscreen: 1},
                paramPlace: 3,
                type: "iframe",
                url: "//player.vimeo.com/video/$2"
            },
            instagram: {
                matcher: /(instagr\.am|instagram\.com)\/p\/([a-zA-Z0-9_\-]+)\/?/i,
                type: "image",
                url: "//$1/p/$2/media/?size=l"
            },
            gmap_place: {
                matcher: /(maps\.)?google\.([a-z]{2,3}(\.[a-z]{2})?)\/(((maps\/(place\/(.*)\/)?\@(.*),(\d+.?\d+?)z))|(\?ll=))(.*)?/i,
                type: "iframe",
                url: function (t) {
                    return (
                        "//maps.google." +
                        t[2] +
                        "/?ll=" +
                        (t[9] ? t[9] + "&z=" + Math.floor(t[10]) + (t[12] ? t[12].replace(/^\//, "&") : "") : t[12] + "").replace(/\?/, "&") +
                        "&output=" +
                        (t[12] && 0 < t[12].indexOf("layer=c") ? "svembed" : "embed")
                    );
                },
            },
            gmap_search: {
                matcher: /(maps\.)?google\.([a-z]{2,3}(\.[a-z]{2})?)\/(maps\/search\/)(.*)/i,
                type: "iframe",
                url: function (t) {
                    return "//maps.google." + t[2] + "/maps?q=" + t[5].replace("query=", "q=").replace("api=1", "") + "&output=embed";
                },
            },
        };
        t(document).on("objectNeedsType.fb", function (o, s, n) {
            var a,
                r,
                l,
                c,
                d,
                p,
                u = n.src || "",
                h = !1,
                f = t.extend(!0, {}, i, n.opts.media);
            t.each(f, function (i, o) {
                if ((r = u.match(o.matcher))) {
                    if (((h = o.type), (p = i), (d = {}), o.paramPlace && r[o.paramPlace])) {
                        "?" == (c = r[o.paramPlace])[0] && (c = c.substring(1)), (c = c.split("&"));
                        for (var s = 0; s < c.length; ++s) {
                            var f = c[s].split("=", 2);
                            2 == f.length && (d[f[0]] = decodeURIComponent(f[1].replace(/\+/g, " ")));
                        }
                    }
                    return (
                        (l = t.extend(!0, {}, o.params, n.opts[i], d)),
                            (u = "function" === t.type(o.url) ? o.url.call(this, r, l, n) : e(o.url, r, l)),
                            (a = "function" === t.type(o.thumb) ? o.thumb.call(this, r, l, n) : e(o.thumb, r)),
                            "youtube" === i
                                ? (u = u.replace(/&t=((\d+)m)?(\d+)s/, function (t, e, i, o) {
                                    return "&start=" + ((i ? 60 * parseInt(i, 10) : 0) + parseInt(o, 10));
                                }))
                                : "vimeo" === i && (u = u.replace("&%23", "#")),
                            !1
                    );
                }
            }),
                h
                    ? (n.opts.thumb || (n.opts.$thumb && n.opts.$thumb.length) || (n.opts.thumb = a),
                    "iframe" === h && (n.opts = t.extend(!0, n.opts, {iframe: {preload: !1, attr: {scrolling: "no"}}})),
                        t.extend(n, {
                            type: h,
                            src: u,
                            origSrc: n.src,
                            contentSource: p,
                            contentType: "image" === h ? "image" : "gmap_place" == p || "gmap_search" == p ? "map" : "video"
                        }))
                    : u && (n.type = n.opts.defaultType);
        });
        var o = {
            youtube: {src: "https://www.youtube.com/iframe_api", class: "YT", loading: !1, loaded: !1},
            vimeo: {src: "https://player.vimeo.com/api/player.js", class: "Vimeo", loading: !1, loaded: !1},
            load: function (t) {
                var e,
                    i = this;
                this[t].loaded
                    ? setTimeout(function () {
                        i.done(t);
                    })
                    : this[t].loading ||
                    ((this[t].loading = !0),
                        ((e = document.createElement("script")).type = "text/javascript"),
                        (e.src = this[t].src),
                        "youtube" === t
                            ? (window.onYouTubeIframeAPIReady = function () {
                                (i[t].loaded = !0), i.done(t);
                            })
                            : (e.onload = function () {
                                (i[t].loaded = !0), i.done(t);
                            }),
                        document.body.appendChild(e));
            },
            done: function (e) {
                var i, o;
                "youtube" === e && delete window.onYouTubeIframeAPIReady,
                (i = t.fancybox.getInstance()) &&
                ((o = i.current.$content.find("iframe")),
                    "youtube" === e && void 0 !== YT && YT
                        ? new YT.Player(o.attr("id"), {
                            events: {
                                onStateChange: function (t) {
                                    0 == t.data && i.next();
                                },
                            },
                        })
                        : "vimeo" === e &&
                        void 0 !== Vimeo &&
                        Vimeo &&
                        new Vimeo.Player(o).on("ended", function () {
                            i.next();
                        }));
            },
        };
        t(document).on({
            "afterShow.fb": function (t, e, i) {
                1 < e.group.length && ("youtube" === i.contentSource || "vimeo" === i.contentSource) && o.load(i.contentSource);
            },
        });
    })(jQuery),
    (function (t, e, i) {
        "use strict";

        function o(e) {
            var i,
                o = [];
            for (i in (e = (e = e.originalEvent || e || t.e).touches && e.touches.length ? e.touches : e.changedTouches && e.changedTouches.length ? e.changedTouches : [e]))
                e[i].pageX ? o.push({x: e[i].pageX, y: e[i].pageY}) : e[i].clientX && o.push({
                    x: e[i].clientX,
                    y: e[i].clientY
                });
            return o;
        }

        function s(t, e, i) {
            return e && t ? ("x" === i ? t.x - e.x : "y" === i ? t.y - e.y : Math.sqrt(Math.pow(t.x - e.x, 2) + Math.pow(t.y - e.y, 2))) : 0;
        }

        function n(t) {
            if (t.is('a,area,button,[role="button"],input,label,select,summary,textarea,video,audio,iframe') || i.isFunction(t.get(0).onclick) || t.data("selectable")) return 1;
            for (var e = 0, o = t[0].attributes, s = o.length; e < s; e++) if ("data-fancybox-" === o[e].nodeName.substr(0, 14)) return 1;
        }

        function a(e) {
            for (
                var i, o, s, n = !1;
                (i = e.get(0)),
                    (o = o = void 0),
                    (o = t.getComputedStyle(i)["overflow-y"]),
                    (s = t.getComputedStyle(i)["overflow-x"]),
                    (o = ("scroll" === o || "auto" === o) && i.scrollHeight > i.clientHeight),
                    (i = ("scroll" === s || "auto" === s) && i.scrollWidth > i.clientWidth),
                !(n = o || i) && (e = e.parent()).length && !e.hasClass("fancybox-stage") && !e.is("body");
            ) ;
            return n;
        }

        function r(t) {
            var e = this;
            (e.instance = t), (e.$bg = t.$refs.bg), (e.$stage = t.$refs.stage), (e.$container = t.$refs.container), e.destroy(), e.$container.on("touchstart.fb.touch mousedown.fb.touch", i.proxy(e, "ontouchstart"));
        }

        var l =
            t.requestAnimationFrame ||
            t.webkitRequestAnimationFrame ||
            t.mozRequestAnimationFrame ||
            t.oRequestAnimationFrame ||
            function (e) {
                return t.setTimeout(e, 1e3 / 60);
            },
            c =
                t.cancelAnimationFrame ||
                t.webkitCancelAnimationFrame ||
                t.mozCancelAnimationFrame ||
                t.oCancelAnimationFrame ||
                function (e) {
                    t.clearTimeout(e);
                };
        (r.prototype.destroy = function () {
            var t = this;
            t.$container.off(".fb.touch"), i(e).off(".fb.touch"), t.requestId && (c(t.requestId), (t.requestId = null)), t.tapped && (clearTimeout(t.tapped), (t.tapped = null));
        }),
            (r.prototype.ontouchstart = function (r) {
                var l = this,
                    c = i(r.target),
                    d = l.instance,
                    p = d.current,
                    u = p.$slide,
                    h = p.$content,
                    f = "touchstart" == r.type;
                if (
                    (f && l.$container.off("mousedown.fb.touch"),
                    (!r.originalEvent || 2 != r.originalEvent.button) && u.length && c.length && !n(c) && !n(c.parent()) && (c.is("img") || !(r.originalEvent.clientX > c[0].clientWidth + c.offset().left)))
                ) {
                    if (!p || d.isAnimating || p.$slide.hasClass("fancybox-animated")) return r.stopPropagation(), void r.preventDefault();
                    (l.realPoints = l.startPoints = o(r)),
                    l.startPoints.length &&
                    (p.touch && r.stopPropagation(),
                        (l.startEvent = r),
                        (l.canTap = !0),
                        (l.$target = c),
                        (l.$content = h),
                        (l.opts = p.opts.touch),
                        (l.isPanning = !1),
                        (l.isSwiping = !1),
                        (l.isZooming = !1),
                        (l.isScrolling = !1),
                        (l.canPan = d.canPan()),
                        (l.startTime = new Date().getTime()),
                        (l.distanceX = l.distanceY = l.distance = 0),
                        (l.canvasWidth = Math.round(u[0].clientWidth)),
                        (l.canvasHeight = Math.round(u[0].clientHeight)),
                        (l.contentLastPos = null),
                        (l.contentStartPos = i.fancybox.getTranslate(l.$content) || {top: 0, left: 0}),
                        (l.sliderStartPos = i.fancybox.getTranslate(u)),
                        (l.stagePos = i.fancybox.getTranslate(d.$refs.stage)),
                        (l.sliderStartPos.top -= l.stagePos.top),
                        (l.sliderStartPos.left -= l.stagePos.left),
                        (l.contentStartPos.top -= l.stagePos.top),
                        (l.contentStartPos.left -= l.stagePos.left),
                        i(e)
                            .off(".fb.touch")
                            .on(f ? "touchend.fb.touch touchcancel.fb.touch" : "mouseup.fb.touch mouseleave.fb.touch", i.proxy(l, "ontouchend"))
                            .on(f ? "touchmove.fb.touch" : "mousemove.fb.touch", i.proxy(l, "ontouchmove")),
                    i.fancybox.isMobile && e.addEventListener("scroll", l.onscroll, !0),
                    (((l.opts || l.canPan) && (c.is(l.$stage) || l.$stage.find(c).length)) || (c.is(".fancybox-image") && r.preventDefault(), i.fancybox.isMobile && c.parents(".fancybox-caption").length)) &&
                    ((l.isScrollable = a(c) || a(c.parent())),
                    (i.fancybox.isMobile && l.isScrollable) || r.preventDefault(),
                    (1 !== l.startPoints.length && !p.hasError) || (l.canPan ? (i.fancybox.stop(l.$content), (l.isPanning = !0)) : (l.isSwiping = !0), l.$container.addClass("fancybox-is-grabbing")),
                    2 === l.startPoints.length &&
                    "image" === p.type &&
                    (p.isLoaded || p.$ghost) &&
                    ((l.canTap = !1),
                        (l.isSwiping = !1),
                        (l.isPanning = !1),
                        (l.isZooming = !0),
                        i.fancybox.stop(l.$content),
                        (l.centerPointStartX = 0.5 * (l.startPoints[0].x + l.startPoints[1].x) - i(t).scrollLeft()),
                        (l.centerPointStartY = 0.5 * (l.startPoints[0].y + l.startPoints[1].y) - i(t).scrollTop()),
                        (l.percentageOfImageAtPinchPointX = (l.centerPointStartX - l.contentStartPos.left) / l.contentStartPos.width),
                        (l.percentageOfImageAtPinchPointY = (l.centerPointStartY - l.contentStartPos.top) / l.contentStartPos.height),
                        (l.startDistanceBetweenFingers = s(l.startPoints[0], l.startPoints[1])))));
                }
            }),
            (r.prototype.onscroll = function (t) {
                (this.isScrolling = !0), e.removeEventListener("scroll", this.onscroll, !0);
            }),
            (r.prototype.ontouchmove = function (t) {
                var e = this;
                return void 0 !== t.originalEvent.buttons && 0 === t.originalEvent.buttons
                    ? void e.ontouchend(t)
                    : e.isScrolling
                        ? void (e.canTap = !1)
                        : ((e.newPoints = o(t)),
                            void (
                                (e.opts || e.canPan) &&
                                e.newPoints.length &&
                                e.newPoints.length &&
                                ((e.isSwiping && !0 === e.isSwiping) || t.preventDefault(),
                                    (e.distanceX = s(e.newPoints[0], e.startPoints[0], "x")),
                                    (e.distanceY = s(e.newPoints[0], e.startPoints[0], "y")),
                                    (e.distance = s(e.newPoints[0], e.startPoints[0])),
                                0 < e.distance && (e.isSwiping ? e.onSwipe(t) : e.isPanning ? e.onPan() : e.isZooming && e.onZoom()))
                            ));
            }),
            (r.prototype.onSwipe = function (e) {
                var o = this,
                    s = o.instance,
                    n = o.isSwiping,
                    a = o.sliderStartPos.left || 0;
                !0 !== n
                    ? ("x" == n &&
                    (0 < o.distanceX && (o.instance.group.length < 2 || (0 === o.instance.current.index && !o.instance.current.opts.loop))
                        ? (a += Math.pow(o.distanceX, 0.8))
                        : o.distanceX < 0 && (o.instance.group.length < 2 || (o.instance.current.index === o.instance.group.length - 1 && !o.instance.current.opts.loop))
                            ? (a -= Math.pow(-o.distanceX, 0.8))
                            : (a += o.distanceX)),
                        (o.sliderLastPos = {top: "x" == n ? 0 : o.sliderStartPos.top + o.distanceY, left: a}),
                    o.requestId && (c(o.requestId), (o.requestId = null)),
                        (o.requestId = l(function () {
                            o.sliderLastPos &&
                            (i.each(o.instance.slides, function (t, e) {
                                var s = e.pos - o.instance.currPos;
                                i.fancybox.setTranslate(e.$slide, {
                                    top: o.sliderLastPos.top,
                                    left: o.sliderLastPos.left + s * o.canvasWidth + s * e.opts.gutter
                                });
                            }),
                                o.$container.addClass("fancybox-is-sliding"));
                        })))
                    : 10 < Math.abs(o.distance) &&
                    ((o.canTap = !1),
                        s.group.length < 2 && o.opts.vertical
                            ? (o.isSwiping = "y")
                            : s.isDragging || !1 === o.opts.vertical || ("auto" === o.opts.vertical && 800 < i(t).width())
                            ? (o.isSwiping = "x")
                            : ((a = Math.abs((180 * Math.atan2(o.distanceY, o.distanceX)) / Math.PI)), (o.isSwiping = 45 < a && a < 135 ? "y" : "x")),
                        "y" === o.isSwiping && i.fancybox.isMobile && o.isScrollable
                            ? (o.isScrolling = !0)
                            : ((s.isDragging = o.isSwiping),
                                (o.startPoints = o.newPoints),
                                i.each(s.slides, function (t, e) {
                                    var n, a;
                                    i.fancybox.stop(e.$slide),
                                        (n = i.fancybox.getTranslate(e.$slide)),
                                        (a = i.fancybox.getTranslate(s.$refs.stage)),
                                        e.$slide
                                            .css({transform: "", opacity: "", "transition-duration": ""})
                                            .removeClass("fancybox-animated")
                                            .removeClass(function (t, e) {
                                                return (e.match(/(^|\s)fancybox-fx-\S+/g) || []).join(" ");
                                            }),
                                    e.pos === s.current.pos && ((o.sliderStartPos.top = n.top - a.top), (o.sliderStartPos.left = n.left - a.left)),
                                        i.fancybox.setTranslate(e.$slide, {top: n.top - a.top, left: n.left - a.left});
                                }),
                            s.SlideShow && s.SlideShow.isActive && s.SlideShow.stop()));
            }),
            (r.prototype.onPan = function () {
                var t = this;
                s(t.newPoints[0], t.realPoints[0]) < (i.fancybox.isMobile ? 10 : 5)
                    ? (t.startPoints = t.newPoints)
                    : ((t.canTap = !1),
                        (t.contentLastPos = t.limitMovement()),
                    t.requestId && c(t.requestId),
                        (t.requestId = l(function () {
                            i.fancybox.setTranslate(t.$content, t.contentLastPos);
                        })));
            }),
            (r.prototype.limitMovement = function () {
                var t = (d = this).canvasWidth,
                    e = d.canvasHeight,
                    i = d.distanceX,
                    o = d.distanceY,
                    s = (p = d.contentStartPos).left,
                    n = p.top,
                    a = p.width,
                    r = p.height,
                    l = t < a ? s + i : s,
                    c = n + o,
                    d = Math.max(0, 0.5 * t - 0.5 * a),
                    p = Math.max(0, 0.5 * e - 0.5 * r);
                return (
                    (a = Math.min(t - a, 0.5 * t - 0.5 * a)),
                        (r = Math.min(e - r, 0.5 * e - 0.5 * r)),
                    0 < i && d < l && (l = d - 1 + Math.pow(-d + s + i, 0.8) || 0),
                    i < 0 && l < a && (l = a + 1 - Math.pow(a - s - i, 0.8) || 0),
                    0 < o && p < c && (c = p - 1 + Math.pow(-p + n + o, 0.8) || 0),
                    o < 0 && c < r && (c = r + 1 - Math.pow(r - n - o, 0.8) || 0),
                        {top: c, left: l}
                );
            }),
            (r.prototype.limitPosition = function (t, e, i, o) {
                var s = this.canvasWidth,
                    n = this.canvasHeight;
                return (t = s < i ? ((t = 0 < t ? 0 : t) < s - i ? s - i : t) : Math.max(0, s / 2 - i / 2)), {
                    top: (e = n < o ? ((e = 0 < e ? 0 : e) < n - o ? n - o : e) : Math.max(0, n / 2 - o / 2)),
                    left: t
                };
            }),
            (r.prototype.onZoom = function () {
                var e = this,
                    o = (f = e.contentStartPos).width,
                    n = f.height,
                    a = f.left,
                    r = f.top,
                    d = s(e.newPoints[0], e.newPoints[1]) / e.startDistanceBetweenFingers,
                    p = Math.floor(o * d),
                    u = Math.floor(n * d),
                    h = (o - p) * e.percentageOfImageAtPinchPointX,
                    f = (n - u) * e.percentageOfImageAtPinchPointY;
                (o = (e.newPoints[0].x + e.newPoints[1].x) / 2 - i(t).scrollLeft()),
                    (n = (e.newPoints[0].y + e.newPoints[1].y) / 2 - i(t).scrollTop()),
                    (o -= e.centerPointStartX),
                    (d = {top: r + (f + (n - e.centerPointStartY)), left: a + (h + o), scaleX: d, scaleY: d}),
                    (e.canTap = !1),
                    (e.newWidth = p),
                    (e.newHeight = u),
                    (e.contentLastPos = d),
                e.requestId && c(e.requestId),
                    (e.requestId = l(function () {
                        i.fancybox.setTranslate(e.$content, e.contentLastPos);
                    }));
            }),
            (r.prototype.ontouchend = function (t) {
                var s = this,
                    n = s.isSwiping,
                    a = s.isPanning,
                    r = s.isZooming,
                    l = s.isScrolling;
                if (
                    ((s.endPoints = o(t)),
                        (s.dMs = Math.max(new Date().getTime() - s.startTime, 1)),
                        s.$container.removeClass("fancybox-is-grabbing"),
                        i(e).off(".fb.touch"),
                        e.removeEventListener("scroll", s.onscroll, !0),
                    s.requestId && (c(s.requestId), (s.requestId = null)),
                        (s.isSwiping = !1),
                        (s.isPanning = !1),
                        (s.isZooming = !1),
                        (s.isScrolling = !1),
                        (s.instance.isDragging = !1),
                        s.canTap)
                )
                    return s.onTap(t);
                (s.speed = 100), (s.velocityX = (s.distanceX / s.dMs) * 0.5), (s.velocityY = (s.distanceY / s.dMs) * 0.5), a ? s.endPanning() : r ? s.endZooming() : s.endSwiping(n, l);
            }),
            (r.prototype.endSwiping = function (t, e) {
                var o = this,
                    s = !1,
                    n = o.instance.group.length,
                    a = Math.abs(o.distanceX);
                (a = "x" == t && 1 < n && ((130 < o.dMs && 10 < a) || 50 < a)),
                    (o.sliderLastPos = null),
                    "y" == t && !e && 50 < Math.abs(o.distanceY)
                        ? (i.fancybox.animate(o.instance.current.$slide, {
                            top: o.sliderStartPos.top + o.distanceY + 150 * o.velocityY,
                            opacity: 0
                        }, 200), (s = o.instance.close(!0, 250)))
                        : a && 0 < o.distanceX
                        ? (s = o.instance.previous(300))
                        : a && o.distanceX < 0 && (s = o.instance.next(300)),
                !1 !== s || ("x" != t && "y" != t) || o.instance.centerSlide(200),
                    o.$container.removeClass("fancybox-is-sliding");
            }),
            (r.prototype.endPanning = function () {
                var t,
                    e,
                    o = this;
                o.contentLastPos &&
                ((e = !1 === o.opts.momentum || 350 < o.dMs ? ((t = o.contentLastPos.left), o.contentLastPos.top) : ((t = o.contentLastPos.left + 500 * o.velocityX), o.contentLastPos.top + 500 * o.velocityY)),
                    ((e = o.limitPosition(t, e, o.contentStartPos.width, o.contentStartPos.height)).width = o.contentStartPos.width),
                    (e.height = o.contentStartPos.height),
                    i.fancybox.animate(o.$content, e, 366));
            }),
            (r.prototype.endZooming = function () {
                var t,
                    e,
                    o,
                    s = this,
                    n = s.instance.current,
                    a = s.newWidth,
                    r = s.newHeight;
                s.contentLastPos &&
                ((t = s.contentLastPos.left),
                    (o = {top: (e = s.contentLastPos.top), left: t, width: a, height: r, scaleX: 1, scaleY: 1}),
                    i.fancybox.setTranslate(s.$content, o),
                    a < s.canvasWidth && r < s.canvasHeight
                        ? s.instance.scaleToFit(150)
                        : a > n.width || r > n.height
                        ? s.instance.scaleToActual(s.centerPointStartX, s.centerPointStartY, 150)
                        : ((r = s.limitPosition(t, e, a, r)), i.fancybox.animate(s.$content, r, 150)));
            }),
            (r.prototype.onTap = function (e) {
                function s(t) {
                    if (((t = c.opts[t]), i.isFunction(t) && (t = t.apply(l, [c, e])), t))
                        switch (t) {
                            case "close":
                                l.close(a.startEvent);
                                break;
                            case "toggleControls":
                                l.toggleControls();
                                break;
                            case "next":
                                l.next();
                                break;
                            case "nextOrClose":
                                1 < l.group.length ? l.next() : l.close(a.startEvent);
                                break;
                            case "zoom":
                                "image" == c.type && (c.isLoaded || c.$ghost) && (l.canPan() ? l.scaleToFit() : l.isScaledDown() ? l.scaleToActual(p, u) : l.group.length < 2 && l.close(a.startEvent));
                        }
                }

                var n,
                    a = this,
                    r = i(e.target),
                    l = a.instance,
                    c = l.current,
                    d = (e && o(e)) || a.startPoints,
                    p = d[0] ? d[0].x - i(t).scrollLeft() - a.stagePos.left : 0,
                    u = d[0] ? d[0].y - i(t).scrollTop() - a.stagePos.top : 0;
                if ((!e.originalEvent || 2 != e.originalEvent.button) && (r.is("img") || !(p > r[0].clientWidth + r.offset().left))) {
                    if (r.is(".fancybox-bg,.fancybox-inner,.fancybox-outer,.fancybox-container")) n = "Outside";
                    else if (r.is(".fancybox-slide")) n = "Slide";
                    else {
                        if (!l.current.$content || !l.current.$content.find(r).addBack().filter(r).length) return;
                        n = "Content";
                    }
                    if (a.tapped) {
                        if ((clearTimeout(a.tapped), (a.tapped = null), 50 < Math.abs(p - a.tapX) || 50 < Math.abs(u - a.tapY))) return this;
                        s("dblclick" + n);
                    } else
                        (a.tapX = p),
                            (a.tapY = u),
                            c.opts["dblclick" + n] && c.opts["dblclick" + n] !== c.opts["click" + n]
                                ? (a.tapped = setTimeout(function () {
                                    (a.tapped = null), l.isAnimating || s("click" + n);
                                }, 500))
                                : s("click" + n);
                    return this;
                }
            }),
            i(e)
                .on("onActivate.fb", function (t, e) {
                    e && !e.Guestures && (e.Guestures = new r(e));
                })
                .on("beforeClose.fb", function (t, e) {
                    e && e.Guestures && e.Guestures.destroy();
                });
    })(window, document, jQuery),
    (function (t, e) {
        "use strict";

        function i(t) {
            (this.instance = t), this.init();
        }

        e.extend(!0, e.fancybox.defaults, {
            btnTpl: {
                slideShow:
                    '<button data-fancybox-play class="fancybox-button fancybox-button--play" title="{{PLAY_START}}"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M6.5 5.4v13.2l11-6.6z"/></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M8.33 5.75h2.2v12.5h-2.2V5.75zm5.15 0h2.2v12.5h-2.2V5.75z"/></svg></button>',
            },
            slideShow: {autoStart: !1, speed: 3e3, progress: !0},
        }),
            e.extend(i.prototype, {
                timer: null,
                isActive: !1,
                $button: null,
                init: function () {
                    var t = this,
                        i = t.instance,
                        o = i.group[i.currIndex].opts.slideShow;
                    (t.$button = i.$refs.toolbar.find("[data-fancybox-play]").on("click", function () {
                        t.toggle();
                    })),
                        i.group.length < 2 || !o ? t.$button.hide() : o.progress && (t.$progress = e('<div class="fancybox-progress"></div>').appendTo(i.$refs.inner));
                },
                set: function (t) {
                    var i = this,
                        o = i.instance,
                        s = o.current;
                    s && (!0 === t || s.opts.loop || o.currIndex < o.group.length - 1)
                        ? i.isActive &&
                        "video" !== s.contentType &&
                        (i.$progress && e.fancybox.animate(i.$progress.show(), {scaleX: 1}, s.opts.slideShow.speed),
                            (i.timer = setTimeout(function () {
                                o.current.opts.loop || o.current.index != o.group.length - 1 ? o.next() : o.jumpTo(0);
                            }, s.opts.slideShow.speed)))
                        : (i.stop(), (o.idleSecondsCounter = 0), o.showControls());
                },
                clear: function () {
                    clearTimeout(this.timer), (this.timer = null), this.$progress && this.$progress.removeAttr("style").hide();
                },
                start: function () {
                    var t = this,
                        e = t.instance.current;
                    e &&
                    (t.$button
                        .attr("title", (e.opts.i18n[e.opts.lang] || e.opts.i18n.en).PLAY_STOP)
                        .removeClass("fancybox-button--play")
                        .addClass("fancybox-button--pause"),
                        (t.isActive = !0),
                    e.isComplete && t.set(!0),
                        t.instance.trigger("onSlideShowChange", !0));
                },
                stop: function () {
                    var t = this,
                        e = t.instance.current;
                    t.clear(),
                        t.$button
                            .attr("title", (e.opts.i18n[e.opts.lang] || e.opts.i18n.en).PLAY_START)
                            .removeClass("fancybox-button--pause")
                            .addClass("fancybox-button--play"),
                        (t.isActive = !1),
                        t.instance.trigger("onSlideShowChange", !1),
                    t.$progress && t.$progress.removeAttr("style").hide();
                },
                toggle: function () {
                    this.isActive ? this.stop() : this.start();
                },
            }),
            e(t).on({
                "onInit.fb": function (t, e) {
                    e && !e.SlideShow && (e.SlideShow = new i(e));
                },
                "beforeShow.fb": function (t, e, i, o) {
                    (e = e && e.SlideShow), o ? e && i.opts.slideShow.autoStart && e.start() : e && e.isActive && e.clear();
                },
                "afterShow.fb": function (t, e, i) {
                    (e = e && e.SlideShow) && e.isActive && e.set();
                },
                "afterKeydown.fb": function (i, o, s, n, a) {
                    !(o = o && o.SlideShow) || !s.opts.slideShow || (80 !== a && 32 !== a) || e(t.activeElement).is("button,a,input") || (n.preventDefault(), o.toggle());
                },
                "beforeClose.fb onDeactivate.fb": function (t, e) {
                    (e = e && e.SlideShow) && e.stop();
                },
            }),
            e(t).on("visibilitychange", function () {
                var i;
                (i = (i = e.fancybox.getInstance()) && i.SlideShow) && i.isActive && (t.hidden ? i.clear() : i.set());
            });
    })(document, jQuery),
    (function (t, e) {
        "use strict";
        var i,
            o = (function () {
                for (
                    var e = [
                            ["requestFullscreen", "exitFullscreen", "fullscreenElement", "fullscreenEnabled", "fullscreenchange", "fullscreenerror"],
                            ["webkitRequestFullscreen", "webkitExitFullscreen", "webkitFullscreenElement", "webkitFullscreenEnabled", "webkitfullscreenchange", "webkitfullscreenerror"],
                            ["webkitRequestFullScreen", "webkitCancelFullScreen", "webkitCurrentFullScreenElement", "webkitCancelFullScreen", "webkitfullscreenchange", "webkitfullscreenerror"],
                            ["mozRequestFullScreen", "mozCancelFullScreen", "mozFullScreenElement", "mozFullScreenEnabled", "mozfullscreenchange", "mozfullscreenerror"],
                            ["msRequestFullscreen", "msExitFullscreen", "msFullscreenElement", "msFullscreenEnabled", "MSFullscreenChange", "MSFullscreenError"],
                        ],
                        i = {},
                        o = 0;
                    o < e.length;
                    o++
                ) {
                    var s = e[o];
                    if (s && s[1] in t) {
                        for (var n = 0; n < s.length; n++) i[e[0][n]] = s[n];
                        return i;
                    }
                }
                return !1;
            })();
        o &&
        ((i = {
            request: function (e) {
                (e = e || t.documentElement)[o.requestFullscreen](e.ALLOW_KEYBOARD_INPUT);
            },
            exit: function () {
                t[o.exitFullscreen]();
            },
            toggle: function (e) {
                (e = e || t.documentElement), this.isFullscreen() ? this.exit() : this.request(e);
            },
            isFullscreen: function () {
                return Boolean(t[o.fullscreenElement]);
            },
            enabled: function () {
                return Boolean(t[o.fullscreenEnabled]);
            },
        }),
            e.extend(!0, e.fancybox.defaults, {
                btnTpl: {
                    fullScreen:
                        '<button data-fancybox-fullscreen class="fancybox-button fancybox-button--fsenter" title="{{FULL_SCREEN}}"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M7 14H5v5h5v-2H7v-3zm-2-4h2V7h3V5H5v5zm12 7h-3v2h5v-5h-2v3zM14 5v2h3v3h2V5h-5z"/></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M5 16h3v3h2v-5H5zm3-8H5v2h5V5H8zm6 11h2v-3h3v-2h-5zm2-11V5h-2v5h5V8z"/></svg></button>',
                },
                fullScreen: {autoStart: !1},
            }),
            e(t).on(o.fullscreenchange, function () {
                var t = i.isFullscreen(),
                    o = e.fancybox.getInstance();
                o &&
                (o.current && "image" === o.current.type && o.isAnimating && ((o.isAnimating = !1), o.update(!0, !0, 0), o.isComplete || o.complete()),
                    o.trigger("onFullscreenChange", t),
                    o.$refs.container.toggleClass("fancybox-is-fullscreen", t),
                    o.$refs.toolbar.find("[data-fancybox-fullscreen]").toggleClass("fancybox-button--fsenter", !t).toggleClass("fancybox-button--fsexit", t));
            })),
            e(t).on({
                "onInit.fb": function (t, e) {
                    o
                        ? e && e.group[e.currIndex].opts.fullScreen
                        ? (e.$refs.container.on("click.fb-fullscreen", "[data-fancybox-fullscreen]", function (t) {
                            t.stopPropagation(), t.preventDefault(), i.toggle();
                        }),
                        e.opts.fullScreen && !0 === e.opts.fullScreen.autoStart && i.request(),
                            (e.FullScreen = i))
                        : e && e.$refs.toolbar.find("[data-fancybox-fullscreen]").hide()
                        : e.$refs.toolbar.find("[data-fancybox-fullscreen]").remove();
                },
                "afterKeydown.fb": function (t, e, i, o, s) {
                    e && e.FullScreen && 70 === s && (o.preventDefault(), e.FullScreen.toggle());
                },
                "beforeClose.fb": function (t, e) {
                    e && e.FullScreen && e.$refs.container.hasClass("fancybox-is-fullscreen") && i.exit();
                },
            });
    })(document, jQuery),
    (function (t, e) {
        "use strict";
        var i = "fancybox-thumbs";

        function o(t) {
            this.init(t);
        }

        (e.fancybox.defaults = e.extend(
            !0,
            {
                btnTpl: {
                    thumbs:
                        '<button data-fancybox-thumbs class="fancybox-button fancybox-button--thumbs" title="{{THUMBS}}"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M14.59 14.59h3.76v3.76h-3.76v-3.76zm-4.47 0h3.76v3.76h-3.76v-3.76zm-4.47 0h3.76v3.76H5.65v-3.76zm8.94-4.47h3.76v3.76h-3.76v-3.76zm-4.47 0h3.76v3.76h-3.76v-3.76zm-4.47 0h3.76v3.76H5.65v-3.76zm8.94-4.47h3.76v3.76h-3.76V5.65zm-4.47 0h3.76v3.76h-3.76V5.65zm-4.47 0h3.76v3.76H5.65V5.65z"/></svg></button>',
                },
                thumbs: {autoStart: !1, hideOnClose: !0, parentEl: ".fancybox-container", axis: "y"},
            },
            e.fancybox.defaults
        )),
            e.extend(o.prototype, {
                $button: null,
                $grid: null,
                $list: null,
                isVisible: !1,
                isActive: !1,
                init: function (t) {
                    var e = this,
                        i = t.group,
                        o = 0;
                    (e.instance = t), (e.opts = i[t.currIndex].opts.thumbs), ((t.Thumbs = e).$button = t.$refs.toolbar.find("[data-fancybox-thumbs]"));
                    for (var s = 0, n = i.length; s < n && (i[s].thumb && o++, !(1 < o)); s++) ;
                    1 < o && e.opts
                        ? (e.$button.removeAttr("style").on("click", function () {
                            e.toggle();
                        }),
                            (e.isActive = !0))
                        : e.$button.hide();
                },
                create: function () {
                    var t,
                        o = this,
                        s = o.instance,
                        n = o.opts.parentEl,
                        a = [];
                    o.$grid ||
                    ((o.$grid = e('<div class="' + i + " " + i + "-" + o.opts.axis + '"></div>').appendTo(s.$refs.container.find(n).addBack().filter(n))),
                        o.$grid.on("click", "a", function () {
                            s.jumpTo(e(this).attr("data-index"));
                        })),
                    o.$list || (o.$list = e('<div class="' + i + '__list">').appendTo(o.$grid)),
                        e.each(s.group, function (e, i) {
                            (t = i.thumb) || "image" !== i.type || (t = i.src),
                                a.push('<a href="javascript:;" tabindex="0" data-index="' + e + '"' + (t && t.length ? ' style="background-image:url(' + t + ')"' : 'class="fancybox-thumbs-missing"') + "></a>");
                        }),
                        (o.$list[0].innerHTML = a.join("")),
                    "x" === o.opts.axis && o.$list.width(parseInt(o.$grid.css("padding-right"), 10) + s.group.length * o.$list.children().eq(0).outerWidth(!0));
                },
                focus: function (t) {
                    var e,
                        i,
                        o = this,
                        s = o.$list,
                        n = o.$grid;
                    o.instance.current &&
                    ((i = (e = s
                        .children()
                        .removeClass("fancybox-thumbs-active")
                        .filter('[data-index="' + o.instance.current.index + '"]')
                        .addClass("fancybox-thumbs-active")).position()),
                        "y" === o.opts.axis && (i.top < 0 || i.top > s.height() - e.outerHeight())
                            ? s.stop().animate({scrollTop: s.scrollTop() + i.top}, t)
                            : "x" === o.opts.axis && (i.left < n.scrollLeft() || i.left > n.scrollLeft() + (n.width() - e.outerWidth())) && s.parent().stop().animate({scrollLeft: i.left}, t));
                },
                update: function () {
                    var t = this;
                    t.instance.$refs.container.toggleClass("fancybox-show-thumbs", this.isVisible),
                        t.isVisible ? (t.$grid || t.create(), t.instance.trigger("onThumbsShow"), t.focus(0)) : t.$grid && t.instance.trigger("onThumbsHide"),
                        t.instance.update();
                },
                hide: function () {
                    (this.isVisible = !1), this.update();
                },
                show: function () {
                    (this.isVisible = !0), this.update();
                },
                toggle: function () {
                    (this.isVisible = !this.isVisible), this.update();
                },
            }),
            e(t).on({
                "onInit.fb": function (t, e) {
                    !e || e.Thumbs || ((e = new o(e)).isActive && !0 === e.opts.autoStart && e.show());
                },
                "beforeShow.fb": function (t, e, i, o) {
                    (e = e && e.Thumbs) && e.isVisible && e.focus(o ? 0 : 250);
                },
                "afterKeydown.fb": function (t, e, i, o, s) {
                    (e = e && e.Thumbs) && e.isActive && 71 === s && (o.preventDefault(), e.toggle());
                },
                "beforeClose.fb": function (t, e) {
                    (e = e && e.Thumbs) && e.isVisible && !1 !== e.opts.hideOnClose && e.$grid.hide();
                },
            });
    })(document, jQuery),
    (function (t, e) {
        "use strict";
        e.extend(!0, e.fancybox.defaults, {
            btnTpl: {
                share:
                    '<button data-fancybox-share class="fancybox-button fancybox-button--share" title="{{SHARE}}"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M2.55 19c1.4-8.4 9.1-9.8 11.9-9.8V5l7 7-7 6.3v-3.5c-2.8 0-10.5 2.1-11.9 4.2z"/></svg></button>',
            },
            share: {
                url: function (t, e) {
                    return (!t.currentHash && "inline" !== e.type && "html" !== e.type && (e.origSrc || e.src)) || window.location;
                },
                tpl:
                    '<div class="fancybox-share"><h1>{{SHARE}}</h1><p><a class="fancybox-share__button fancybox-share__button--fb" href="https://www.facebook.com/sharer/sharer.php?u={{url}}"><svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="m287 456v-299c0-21 6-35 35-35h38v-63c-7-1-29-3-55-3-54 0-91 33-91 94v306m143-254h-205v72h196" /></svg><span>Facebook</span></a><a class="fancybox-share__button fancybox-share__button--tw" href="https://twitter.com/intent/tweet?url={{url}}&text={{descr}}"><svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="m456 133c-14 7-31 11-47 13 17-10 30-27 37-46-15 10-34 16-52 20-61-62-157-7-141 75-68-3-129-35-169-85-22 37-11 86 26 109-13 0-26-4-37-9 0 39 28 72 65 80-12 3-25 4-37 2 10 33 41 57 77 57-42 30-77 38-122 34 170 111 378-32 359-208 16-11 30-25 41-42z" /></svg><span>Twitter</span></a><a class="fancybox-share__button fancybox-share__button--pt" href="https://www.pinterest.com/pin/create/button/?url={{url}}&description={{descr}}&media={{media}}"><svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="m265 56c-109 0-164 78-164 144 0 39 15 74 47 87 5 2 10 0 12-5l4-19c2-6 1-8-3-13-9-11-15-25-15-45 0-58 43-110 113-110 62 0 96 38 96 88 0 67-30 122-73 122-24 0-42-19-36-44 6-29 20-60 20-81 0-19-10-35-31-35-25 0-44 26-44 60 0 21 7 36 7 36l-30 125c-8 37-1 83 0 87 0 3 4 4 5 2 2-3 32-39 42-75l16-64c8 16 31 29 56 29 74 0 124-67 124-157 0-69-58-132-146-132z" fill="#fff"/></svg><span>Pinterest</span></a></p><p><input class="fancybox-share__input" type="text" value="{{url_raw}}" onclick="select()" /></p></div>',
            },
        }),
            e(t).on("click", "[data-fancybox-share]", function () {
                var t,
                    i,
                    o = e.fancybox.getInstance(),
                    s = o.current || null;
                s &&
                ("function" === e.type(s.opts.share.url) && (t = s.opts.share.url.apply(s, [o, s])),
                    (t = s.opts.share.tpl
                        .replace(/\{\{media\}\}/g, "image" === s.type ? encodeURIComponent(s.src) : "")
                        .replace(/\{\{url\}\}/g, encodeURIComponent(t))
                        .replace(
                            /\{\{url_raw\}\}/g,
                            ((i = {
                                "&": "&amp;",
                                "<": "&lt;",
                                ">": "&gt;",
                                '"': "&quot;",
                                "'": "&#39;",
                                "/": "&#x2F;",
                                "`": "&#x60;",
                                "=": "&#x3D;"
                            }),
                                String(t).replace(/[&<>"'`=\/]/g, function (t) {
                                    return i[t];
                                }))
                        )
                        .replace(/\{\{descr\}\}/g, o.$caption ? encodeURIComponent(o.$caption.text()) : "")),
                    e.fancybox.open({
                        src: o.translate(o, t),
                        type: "html",
                        opts: {
                            touch: !1,
                            animationEffect: !1,
                            afterLoad: function (t, e) {
                                o.$refs.container.one("beforeClose.fb", function () {
                                    t.close(null, 0);
                                }),
                                    e.$content.find(".fancybox-share__button").click(function () {
                                        return window.open(this.href, "Share", "width=550, height=450"), !1;
                                    });
                            },
                            mobile: {autoFocus: !1},
                        },
                    }));
            });
    })(document, jQuery),
    (function (t, e, i) {
        "use strict";

        function o() {
            var e = t.location.hash.substr(1),
                i = e.split("-"),
                o = (1 < i.length && /^\+?\d+$/.test(i[i.length - 1]) && parseInt(i.pop(-1), 10)) || 1;
            return {hash: e, index: o < 1 ? 1 : o, gallery: i.join("-")};
        }

        function s(t) {
            "" !== t.gallery &&
            i("[data-fancybox='" + i.escapeSelector(t.gallery) + "']")
                .eq(t.index - 1)
                .focus()
                .trigger("click.fb-start");
        }

        function n(t) {
            return !!t && "" !== (t = (t = (t.current || t).opts).hash || (t.$orig ? t.$orig.data("fancybox") || t.$orig.data("fancybox-trigger") : "")) && t;
        }

        i.escapeSelector ||
        (i.escapeSelector = function (t) {
            return (t + "").replace(/([\0-\x1f\x7f]|^-?\d)|^-$|[^\x80-\uFFFF\w-]/g, function (t, e) {
                return e ? ("\0" === t ? "�" : t.slice(0, -1) + "\\" + t.charCodeAt(t.length - 1).toString(16) + " ") : "\\" + t;
            });
        }),
            i(function () {
                !1 !== i.fancybox.defaults.hash &&
                (i(e).on({
                    "onInit.fb": function (t, e) {
                        var i, s;
                        !1 !== e.group[e.currIndex].opts.hash && ((i = o()), (s = n(e)) && i.gallery && s == i.gallery && (e.currIndex = i.index - 1));
                    },
                    "beforeShow.fb": function (i, o, s, a) {
                        var r;
                        s &&
                        !1 !== s.opts.hash &&
                        (r = n(o)) &&
                        ((o.currentHash = r + (1 < o.group.length ? "-" + (s.index + 1) : "")),
                        t.location.hash !== "#" + o.currentHash &&
                        (a && !o.origHash && (o.origHash = t.location.hash),
                        o.hashTimer && clearTimeout(o.hashTimer),
                            (o.hashTimer = setTimeout(function () {
                                "replaceState" in t.history
                                    ? (t.history[a ? "pushState" : "replaceState"]({}, e.title, t.location.pathname + t.location.search + "#" + o.currentHash), a && (o.hasCreatedHistory = !0))
                                    : (t.location.hash = o.currentHash),
                                    (o.hashTimer = null);
                            }, 300))));
                    },
                    "beforeClose.fb": function (i, o, s) {
                        s &&
                        !1 !== s.opts.hash &&
                        (clearTimeout(o.hashTimer),
                            o.currentHash && o.hasCreatedHistory
                                ? t.history.back()
                                : o.currentHash && ("replaceState" in t.history ? t.history.replaceState({}, e.title, t.location.pathname + t.location.search + (o.origHash || "")) : (t.location.hash = o.origHash)),
                            (o.currentHash = null));
                    },
                }),
                    i(t).on("hashchange.fb", function () {
                        var t = o(),
                            e = null;
                        i.each(i(".fancybox-container").get().reverse(), function (t, o) {
                            if ((o = i(o).data("FancyBox")) && o.currentHash) return (e = o), !1;
                        }),
                            e ? e.currentHash === t.gallery + "-" + t.index || (1 === t.index && e.currentHash == t.gallery) || ((e.currentHash = null), e.close()) : "" !== t.gallery && s(t);
                    }),
                    setTimeout(function () {
                        i.fancybox.getInstance() || s(o());
                    }, 50));
            });
    })(window, document, jQuery),
    (function (t, e) {
        "use strict";
        var i = new Date().getTime();
        e(t).on({
            "onInit.fb": function (t, e, o) {
                e.$refs.stage.on("mousewheel DOMMouseScroll wheel MozMousePixelScroll", function (t) {
                    var o = e.current,
                        s = new Date().getTime();
                    e.group.length < 2 ||
                    !1 === o.opts.wheel ||
                    ("auto" === o.opts.wheel && "image" !== o.type) ||
                    (t.preventDefault(),
                        t.stopPropagation(),
                    o.$slide.hasClass("fancybox-animated") || ((t = t.originalEvent || t), s - i < 250 || ((i = s), e[(-t.deltaY || -t.deltaX || t.wheelDelta || -t.detail) < 0 ? "next" : "previous"]())));
                });
            },
        });
    })(document, jQuery),
    (function (t) {
        "use strict";

        function e(t, e) {
            (this.$holder = t), (this.options = e), this.init();
        }

        (e.prototype = {
            init: function () {
                (this.$tabLinks = this.$holder.find(this.options.tabLinks)),
                    this.setStartActiveIndex(),
                    this.setActiveTab(),
                this.options.autoHeight && (this.$tabHolder = t(this.$tabLinks.eq(0).attr(this.options.attrib)).parent()),
                    this.makeCallback("onInit", this);
            },
            setStartActiveIndex: function () {
                var t = this.getClassTarget(this.$tabLinks),
                    e = t.filter("." + this.options.activeClass),
                    i = this.$tabLinks.filter("[" + this.options.attrib + '="' + location.hash + '"]');
                this.options.checkHash && i.length && (e = i), (e = t.index(e)), (this.activeTabIndex = this.prevTabIndex = -1 === e ? (this.options.defaultTab ? 0 : null) : e);
            },
            setActiveTab: function () {
                var e = this;
                this.$tabLinks.each(function (i, o) {
                    var s = t(o),
                        n = e.getClassTarget(s);
                    (o = t(s.attr(e.options.attrib))),
                        i !== e.activeTabIndex
                            ? (n.removeClass(e.options.activeClass), o.addClass(e.options.tabHiddenClass).removeClass(e.options.activeClass))
                            : (n.addClass(e.options.activeClass), o.removeClass(e.options.tabHiddenClass).addClass(e.options.activeClass)),
                        e.attachTabLink(s, i);
                });
            },
            attachTabLink: function (t, e) {
                var i = this;
                t.on(this.options.event + ".tabset", function (t) {
                    t.preventDefault(), i.activeTabIndex === i.prevTabIndex && i.activeTabIndex !== e && ((i.activeTabIndex = e), i.switchTabs()), i.options.checkHash && (location.hash = jQuery(this).attr("href").split("#")[1]);
                });
            },
            resizeHolder: function (t) {
                var e = this;
                t
                    ? (this.$tabHolder.height(t),
                        setTimeout(function () {
                            e.$tabHolder.addClass("transition");
                        }, 10))
                    : e.$tabHolder.removeClass("transition").height("");
            },
            switchTabs: function () {
                var t = this,
                    e = this.$tabLinks.eq(this.prevTabIndex),
                    i = this.$tabLinks.eq(this.activeTabIndex),
                    o = this.getTab(e),
                    s = this.getTab(i);
                o.removeClass(this.options.activeClass),
                t.haveTabHolder() && this.resizeHolder(o.outerHeight()),
                    setTimeout(
                        function () {
                            t.getClassTarget(e).removeClass(t.options.activeClass),
                                o.addClass(t.options.tabHiddenClass),
                                s.removeClass(t.options.tabHiddenClass).addClass(t.options.activeClass),
                                t.getClassTarget(i).addClass(t.options.activeClass),
                                t.haveTabHolder()
                                    ? (t.resizeHolder(s.outerHeight()),
                                        setTimeout(function () {
                                            t.resizeHolder(), (t.prevTabIndex = t.activeTabIndex), t.makeCallback("onChange", t);
                                        }, t.options.animSpeed))
                                    : (t.prevTabIndex = t.activeTabIndex);
                        },
                        this.options.autoHeight ? this.options.animSpeed : 1
                    );
            },
            getClassTarget: function (t) {
                return this.options.addToParent ? t.parent() : t;
            },
            getActiveTab: function () {
                return this.getTab(this.$tabLinks.eq(this.activeTabIndex));
            },
            getTab: function (e) {
                return t(e.attr(this.options.attrib));
            },
            haveTabHolder: function () {
                return this.$tabHolder && this.$tabHolder.length;
            },
            destroy: function () {
                var e = this;
                this.$tabLinks.off(".tabset").each(function () {
                    var i = t(this);
                    e.getClassTarget(i).removeClass(e.options.activeClass), t(i.attr(e.options.attrib)).removeClass(e.options.activeClass + " " + e.options.tabHiddenClass);
                }),
                    this.$holder.removeData("Tabset");
            },
            makeCallback: function (t) {
                var e;
                "function" == typeof this.options[t] && ((e = Array.prototype.slice.call(arguments)).shift(), this.options[t].apply(this, e));
            },
        }),
            (t.fn.tabset = function (i) {
                var o = Array.prototype.slice.call(arguments),
                    s = o[0],
                    n = t.extend({
                        activeClass: "active",
                        addToParent: !1,
                        autoHeight: !1,
                        checkHash: !1,
                        defaultTab: !0,
                        animSpeed: 500,
                        tabLinks: "a",
                        attrib: "href",
                        event: "click",
                        tabHiddenClass: "js-tab-hidden"
                    }, i);
                return (
                    (n.autoHeight = n.autoHeight),
                        this.each(function () {
                            var t = jQuery(this),
                                a = t.data("Tabset");
                            "object" == typeof i || void 0 === i ? t.data("Tabset", new e(t, n)) : "string" == typeof s && a && "function" == typeof a[s] && (o.shift(), a[s].apply(a, o));
                        })
                );
            });
    })(jQuery, jQuery(window)),
    (function (t) {
        function e(e) {
            (this.options = t.extend({
                addClassBeforeAnimation: !0,
                hideOnClickOutside: !1,
                activeClass: "active",
                opener: ".opener",
                slider: ".slide",
                animSpeed: 400,
                effect: "fade",
                event: "click"
            }, e)), this.init();
        }

        e.prototype = {
            init: function () {
                this.options.holder && (this.findElements(), this.attachEvents(), this.makeCallback("onInit", this));
            },
            findElements: function () {
                (this.holder = t(this.options.holder)), (this.opener = this.holder.find(this.options.opener)), (this.slider = this.holder.find(this.options.slider));
            },
            attachEvents: function () {
                var e = this;
                (this.eventHandler = function (t) {
                    t.preventDefault(), e.slider.hasClass(s) ? e.showSlide() : e.hideSlide();
                }),
                    e.opener.on(e.options.event, this.eventHandler),
                "hover" === e.options.event &&
                (e.opener.on("mouseenter", function () {
                    e.holder.hasClass(e.options.activeClass) || e.showSlide();
                }),
                    e.holder.on("mouseleave", function () {
                        e.hideSlide();
                    })),
                    (e.outsideClickHandler = function (i) {
                        e.options.hideOnClickOutside && ((i = t(i.target)).is(e.holder) || i.closest(e.holder).length || e.hideSlide());
                    }),
                    this.holder.hasClass(this.options.activeClass) ? t(document).on("click touchstart", e.outsideClickHandler) : this.slider.addClass(s);
            },
            showSlide: function () {
                var e = this;
                e.options.addClassBeforeAnimation && e.holder.addClass(e.options.activeClass),
                    e.slider.removeClass(s),
                    t(document).on("click touchstart", e.outsideClickHandler),
                    e.makeCallback("animStart", !0),
                    n[e.options.effect].show({
                        box: e.slider,
                        speed: e.options.animSpeed,
                        complete: function () {
                            e.options.addClassBeforeAnimation || e.holder.addClass(e.options.activeClass), e.makeCallback("animEnd", !0);
                        },
                    });
            },
            hideSlide: function () {
                var e = this;
                e.options.addClassBeforeAnimation && e.holder.removeClass(e.options.activeClass),
                    t(document).off("click touchstart", e.outsideClickHandler),
                    e.makeCallback("animStart", !1),
                    n[e.options.effect].hide({
                        box: e.slider,
                        speed: e.options.animSpeed,
                        complete: function () {
                            e.options.addClassBeforeAnimation || e.holder.removeClass(e.options.activeClass), e.slider.addClass(s), e.makeCallback("animEnd", !1);
                        },
                    });
            },
            destroy: function () {
                this.slider.removeClass(s).css({display: ""}),
                    this.opener.off(this.options.event, this.eventHandler),
                    this.holder.removeClass(this.options.activeClass).removeData("OpenClose"),
                    t(document).off("click touchstart", this.outsideClickHandler);
            },
            makeCallback: function (t) {
                var e;
                "function" == typeof this.options[t] && ((e = Array.prototype.slice.call(arguments)).shift(), this.options[t].apply(this, e));
            },
        };
        var i,
            o,
            s = "js-slide-hidden";
        (i = t('<style type="text/css">')[0]),
            (o = "." + s),
            (o += "{position:absolute !important;left:-9999px !important;top:-9999px !important;display:block !important}"),
            i.styleSheet ? (i.styleSheet.cssText = o) : i.appendChild(document.createTextNode(o)),
            t("head").append(i);
        var n = {
            slide: {
                show: function (t) {
                    t.box.stop(!0).hide().slideDown(t.speed, t.complete);
                },
                hide: function (t) {
                    t.box.stop(!0).slideUp(t.speed, t.complete);
                },
            },
            fade: {
                show: function (t) {
                    t.box.stop(!0).hide().fadeIn(t.speed, t.complete);
                },
                hide: function (t) {
                    t.box.stop(!0).fadeOut(t.speed, t.complete);
                },
            },
            none: {
                show: function (t) {
                    t.box.hide().show(0, t.complete);
                },
                hide: function (t) {
                    t.box.hide(0, t.complete);
                },
            },
        };
        t.fn.openClose = function (i) {
            var o = Array.prototype.slice.call(arguments),
                s = o[0];
            return this.each(function () {
                var n = jQuery(this),
                    a = n.data("OpenClose");
                "object" == typeof i || void 0 === i ? n.data("OpenClose", new e(t.extend({holder: this}, i))) : "string" == typeof s && a && "function" == typeof a[s] && (o.shift(), a[s].apply(a, o));
            });
        };
    })(jQuery);
var GrayScaleFix = (function () {
    function t(t) {
        var e = new Image();
        (e.onload = function () {
            var i = document.createElement("span"),
                o =
                    '<svg xmlns="http://www.w3.org/2000/svg" id="svgroot" viewBox="0 0 ' +
                    e.width +
                    " " +
                    e.height +
                    '" width="100%" height="100%"><defs><filter id="gray"><feColorMatrix type="matrix" values="0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0 0 0 1 0" /></filter></defs><image filter="url(&quot;#gray&quot;)" x="0" y="0" width="' +
                    e.width +
                    '" height="' +
                    e.height +
                    '" preserveAspectRatio="none" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="' +
                    e.src +
                    '" /></svg>';
            (i.innerHTML = o),
                (i.className = "grayscale-fix"),
                t.parentNode.insertBefore(i, t),
                (t.style.cssText += "visibility:hidden;display:block"),
                (i.querySelector("svg").style.position = "absolute"),
                (i.style.cssText = "display:inline-block;position:relative;"),
                i.appendChild(t);
        }),
            (e.src = t.src);
    }

    function e() {
        for (var e = document.querySelectorAll("img.grayscale"), i = 0; i < e.length; i++) t(e[i]);
    }

    return /(MSIE 10)|(Trident.*rv:11\.0)|( Edge\/[\d\.]+$)/.test(navigator.userAgent) && document.addEventListener("DOMContentLoaded", e), {
        replace: t,
        refresh: e
    };
})();
!(function (t) {
    t.fn.hoverTooltip = function (i) {
        var o,
            s,
            n = t.extend(
                {
                    tooltipStructure: '<div class="hover-tooltip"><div class="tooltip-text"></div></div>',
                    tooltipSelector: ".tooltip-text",
                    positionTypeX: "right",
                    positionTypeY: "top",
                    attribute: "title",
                    extraOffsetX: 10,
                    extraOffsetY: 10,
                    showOnTouchDevice: !0,
                },
                i
            ),
            a = t("<div>").html(n.tooltipStructure).children().css({position: "absolute"}),
            r = a.find(n.tooltipSelector);

        function l(t, e, i) {
            r.html(e), a.appendTo(document.body).show(), (o = a.outerWidth(!0)), (s = a.outerHeight(!0)), d(i);
        }

        function c() {
            a.remove();
        }

        function d(t) {
            var e,
                i,
                r = t.pageX;
            switch (((t = t.pageY), n.positionTypeY)) {
                case "top":
                    e = t - s - n.extraOffsetY;
                    break;
                case "center":
                    e = t - s / 2;
                    break;
                case "bottom":
                    e = t + n.extraOffsetY;
            }
            switch (n.positionTypeX) {
                case "left":
                    i = r - o - n.extraOffsetX;
                    break;
                case "center":
                    (i = r - o / 2) < 0 && (i = 10);
                    break;
                case "right":
                    i = r + n.extraOffsetX;
            }
            a.css({top: e, left: i});
        }

        return this.each(function () {
            !(function (t) {
                var i = t.attr(n.attribute);
                t.removeAttr(n.attribute),
                i &&
                (e
                    ? n.showOnTouchDevice &&
                    t.bind("touchstart", function (t) {
                        l(0, i, (t = t).originalEvent.changedTouches ? t.originalEvent.changedTouches[0] : t), jQuery(document).one("touchend", c);
                    })
                    : t
                        .bind("mouseenter", function (t) {
                            l(0, i, t);
                        })
                        .bind("mouseleave", c)
                        .bind("mousemove", d));
            })(t(this));
        });
    };
    var e = (function () {
        try {
            return "ontouchstart" in window || (window.DocumentTouch && document instanceof DocumentTouch);
        } catch (t) {
            return !1;
        }
    })();
})(jQuery),
    (function (t) {
        t.fn.niceSelect = function (e) {
            function i(e) {
                e.after(
                    t("<div></div>")
                        .addClass("nice-select")
                        .addClass(e.attr("class") || "")
                        .addClass(e.attr("disabled") ? "disabled" : "")
                        .attr("tabindex", e.attr("disabled") ? null : "0")
                        .html('<span class="current"></span><ul class="list"></ul>')
                );
                var i = e.next(),
                    o = e.find("option");
                (e = e.find("option:selected")),
                    i.find(".current").html(e.data("display") || e.text()),
                    o.each(function (e) {
                        var o = t(this),
                            s = o.data("display");
                        i.find("ul").append(
                            t("<li></li>")
                                .attr("data-value", o.val())
                                .attr("data-display", s || null)
                                .addClass("option" + (o.is(":selected") ? " selected" : "") + (o.is(":disabled") ? " disabled" : ""))
                                .html(o.text())
                        );
                    });
            }

            return "string" == typeof e
                ? ("update" == e
                    ? this.each(function () {
                        var e = t(this),
                            o = t(this).next(".nice-select"),
                            s = o.hasClass("open");
                        o.length && (o.remove(), i(e), s && e.next().trigger("click"));
                    })
                    : "destroy" == e
                        ? (this.each(function () {
                            var e = t(this),
                                i = t(this).next(".nice-select");
                            i.length && (i.remove(), e.css("display", ""));
                        }),
                        0 == t(".nice-select").length && t(document).off(".nice_select"))
                        : console.log('Method "' + e + '" does not exist.'),
                    this)
                : (this.hide(),
                    this.each(function () {
                        var e = t(this);
                        e.next().hasClass("nice-select") || i(e);
                    }),
                    t(document).off(".nice_select"),
                    t(document).on("click.nice_select", ".nice-select", function (e) {
                        var i = t(this);
                        t(".nice-select").not(i).removeClass("open"), i.toggleClass("open"), i.hasClass("open") ? (i.find(".option"), i.find(".focus").removeClass("focus"), i.find(".selected").addClass("focus")) : i.focus();
                    }),
                    t(document).on("click.nice_select", function (e) {
                        0 === t(e.target).closest(".nice-select").length && t(".nice-select").removeClass("open").find(".option");
                    }),
                    t(document).on("click.nice_select", ".nice-select .option:not(.disabled)", function (e) {
                        var i = t(this),
                            o = i.closest(".nice-select");
                        o.find(".selected").removeClass("selected"), i.addClass("selected");
                        var s = i.data("display") || i.text();
                        o.find(".current").text(s), o.prev("select").val(i.data("value")).trigger("change");
                    }),
                    t(document).on("keydown.nice_select", ".nice-select", function (e) {
                        var i,
                            o = t(this),
                            s = t(o.find(".focus") || o.find(".list .option.selected"));
                        if (32 == e.keyCode || 13 == e.keyCode) return (o.hasClass("open") ? s : o).trigger("click"), !1;
                        if (40 == e.keyCode) return o.hasClass("open") ? 0 < (i = s.nextAll(".option:not(.disabled)").first()).length && (o.find(".focus").removeClass("focus"), i.addClass("focus")) : o.trigger("click"), !1;
                        if (38 == e.keyCode) return o.hasClass("open") ? 0 < (s = s.prevAll(".option:not(.disabled)").first()).length && (o.find(".focus").removeClass("focus"), s.addClass("focus")) : o.trigger("click"), !1;
                        if (27 == e.keyCode) o.hasClass("open") && o.trigger("click");
                        else if (9 == e.keyCode && o.hasClass("open")) return !1;
                    }),
                    ((e = document.createElement("a").style).cssText = "pointer-events:auto"),
                "auto" !== e.pointerEvents && t("html").addClass("no-csspointerevents"),
                    this);
        };
    })(jQuery);
