$(function(){

    var $window = $(window);
    // set up dimensions
    var sectionLedLightsLogo = $('section.led-lights-logo');
    sectionLedLightsLogo.css('margin-top', (($window.height() / 2) - (sectionLedLightsLogo.parent().height() / 2) - 50));
    $('section.news-blog-logo').css('margin-top', sectionLedLightsLogo.parent().height());
});