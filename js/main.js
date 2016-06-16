$(function(){

    var $window = $(window);
    // set up dimensions
    // for logo
    var sectionLedLightsLogo = $('section.led-lights-logo');
    sectionLedLightsLogo.css('margin-top', (($window.height() / 2) - (sectionLedLightsLogo.parent().height() / 2) - 50));
    // for news
    var sectionNewsBlogLogo = $('section.news-blog-logo');
    sectionNewsBlogLogo.parent().css('height', sectionNewsBlogLogo.closest('.row').css('height'));
    // for contacts
    var sectionContacts = $('section.contacts');
    sectionContacts.find('a.list-group-item').each(function(index, element){
        var $element = $(element);
        $element.find('div.fa-parent').css('height', $element.find('div.list-group-middle-row').css('height'));
    });

    // background animate
    if($window.width() > 640){
        $('body[data-type="background"]').each(function(){
            var $backObj = $(this);
            $window.scroll(function(){
                var yPos = +($window.scrollTop() / $backObj.data('speed'));
                yPos = yPos - 150;
                var coordinates = '50%' + yPos + 'px';
                $backObj.css({backgroundPosition: coordinates});
            });
        });
    }

    // smooth scroll
    $('a.smooth').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if (target.length) {
                $('html,body').animate({
                    scrollTop: target.offset().top
                }, 1000);
                return false;
            }
        }
    });

    // SOCIAL BUTTON HOVER
    $('.social-button')
        .mouseover(function(){
        $('#social-circle').addClass("hover");
    })
        .mouseleave(function(){
            $('#social-circle').removeClass("hover");
        });

});

