function loadMorePortfolioTabs() {
    jQuery(".js-content-holder").each(function () {
        var i = jQuery(this).find(".load-more-btn"),
            o = jQuery(this).find(".js-list>.portfolio-item"),
            s = 12;

        jQuery(this).hasClass("js-content-12") && (s = 12);
        if ("1024" <= jQuery(window).width()) {
            if (o.length <= s) i.hide();
            else {
                for (var t = s; t < o.length; t++) { 
                    jQuery(o[t]).hide()
                };
                i.show();
            }
            i.on("click", function (t) {
                let start = s;
                s = s + 12;
                if (s > o.length) s = o.length;
                t.preventDefault();
                if (o.length <= s) i.hide();
                for (var e = start; e < s; e++) jQuery(o[e]).show();
            });
        } else {
            i.hide();
            for (t = s; t < o.length; t++) jQuery(o[t]).show();
        }

    });
}
jQuery(window).on('load ready resize', function () {
    loadMorePortfolioTabs();
});