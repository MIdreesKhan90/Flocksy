jQuery(window).on('load ready', function () {
    jQuery('button').filter('[data-tab="#tab-91"]').removeClass('active');
    triggerIllustrationTab();
});
function triggerIllustrationTab() {
   jQuery('button').filter('[data-tab="#tab-91"]').trigger('click');
   }