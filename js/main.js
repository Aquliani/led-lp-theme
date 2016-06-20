$(function () {

    var $window = $(window);
    // set up dimensions for contacts
    var sectionContacts = $('section.contacts');
    sectionContacts.find('a.list-group-item').each(function (index, element) {
        var $element = $(element);
        $element.find('div.fa-parent').css('height', $element.find('div.list-group-middle-row').css('height'));
    });

    // background animate
    $('[data-type="background"]').each(function () {
        var $backObj = $(this);
        $window.scroll(function () {
            var yPos = +($window.scrollTop() / $backObj.data('speed'));
            yPos = yPos - 150;
            var coordinates = '50%' + yPos + 'px';
            $backObj.css({backgroundPosition: coordinates});
        });
    });

    if ($window.width() >= 768) {
        // set dimensions for logo
        // var sectionLedLightsLogo = $('section.led-lights-logo');
        // sectionLedLightsLogo.css('margin-top', (($window.height() / 2) - (sectionLedLightsLogo.parent().height() / 2) - 50));
        $('section.front').css('height', $window.height());
        // set dimensions for news
        var sectionNewsBlogLogo = $('section.news-blog-logo');
        sectionNewsBlogLogo.parent().css('height', sectionNewsBlogLogo.closest('.row').css('height'));
        // play video
        $('section.about-frame').find('video').load();
    }else{
        reorderForMobileView();

        var sectionLedLightsLogo = $('section.led-lights-logo');
        sectionLedLightsLogo.css('height', $window.height());

        if ($window.width() <= 320){
            $('section.social-circle').find('.social-button').find('i').removeClass('fa-2x');
        }
    }

    // smooth scroll
    $('a.smooth').click(function () {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
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
        .mouseover(function () {
            $('#social-circle').addClass("hover");
        })
        .mouseleave(function () {
            $('#social-circle').removeClass("hover");
        });

    // NEWS ANIMATE
    var sectionNewsBlogLogo = $('section.news-blog-logo');
    var newsArticle = sectionNewsBlogLogo.find('article');
    var newsLinks = newsArticle.find('a');
    for (var i = 0; i < newsLinks.length; i++) {
        newsLinks.eq(i).css("left", newsArticle.css('width'));
    }
    newsLoop(newsLinks, 0);
    
    // SECTION BUY CLICK
    var sectionBuy = $('section.buy');
    var divsDetails = sectionBuy.find('div.details');
    sectionBuy.find('ul').find('li').on('click', function(){
        divsDetails.slideUp('slow');
        divsDetails.filter("." + $(this).attr('id')).slideDown('slow');
    });

    var map = initMap();

});

function newsLoop(links, iterator) {
    if (iterator == links.length) {
        iterator = 0;
    }
    var resetLeft = links.eq(iterator).css('left');
    links.eq(iterator).animate({left: "-" + links.eq(iterator).css('width')}, 8000, "linear", function () {
        links.eq(iterator).css('left', resetLeft);
        newsLoop(links, iterator + 1)
    });
}

function initMap() {
    var map = new google.maps.Map(document.getElementById('map'), {
        center: {lat: 48.469963, lng: 35.038053},
        zoom: 13
    });
    var marker1 = new google.maps.Marker({
        position: {lat: 48.473606, lng: 35.032904},
        map: map,
        title: 'Главный офис'
    });
    var marker2 = new google.maps.Marker({
        position: {lat: 48.474315, lng: 35.013402},
        map: map,
        title: 'Курчатова 1'
    });

    var marker3 = new google.maps.Marker({
        position: {lat: 48.474962, lng: 35.013285},
        map: map,
        title: 'Курчатова 2'
    });
}

function reorderForMobileView(){
    var columnsFront = $('div.mobile-order').detach();
    var container = $('section.front').children('.container');
    container.children().remove();
    columnsFront.sort(function(a, b){
        a = $(a).data('mobile-order');
        b = $(b).data('mobile-order');

        if(a == b){
            return 0;
        }else if(a > b){
            return 1;
        }else{
            return -1;
        }
    });
    container.append('<div class="row"></div>').html(columnsFront);
    container.find('video').load();
}
