$(function(){

    var $window = $(window);
    // set up dimensions
    // for logo
    var sectionLedLightsLogo = $('section.led-lights-logo');
    sectionLedLightsLogo.css('margin-top', (($window.height() / 2) - (sectionLedLightsLogo.parent().height() / 2) - 50));
    // for news
    var sectionNewsBlogLogo = $('section.news-blog-logo');
    sectionNewsBlogLogo.parent().css('height', sectionNewsBlogLogo.closest('.row').css('height'));
});