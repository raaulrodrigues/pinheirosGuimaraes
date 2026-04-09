$(document).ready(function(){

    $('.awards-slider-carousel').slick({
        slidesToShow: 8,
        slidesToScroll: 4,
        arrows: true,
        dots: false,
        infinite: true,
        speed: 900,
        prevArrow: $('.awards-prev .slick-prev'),
        nextArrow: $('.awards-next .slick-next'),
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 4
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 540,
                settings: {
                    slidesToShow: 2
                }
            }
        ]
    });
    $('.recognitions-slider-carousel').slick({
        slidesToShow: 8,
        slidesToScroll: 4,
        arrows: true,
        dots: false,
        infinite: true,
        speed: 900,
        prevArrow: $('.recognitions-prev .slick-prev'),
        nextArrow: $('.recognitions-next .slick-next'),
        responsive: [
            { 
                breakpoint: 1024, 
                settings: 
                { slidesToShow: 4 

                } 
            },
            { 
                breakpoint: 768,  
                settings: 
                { slidesToShow: 3 

                } 
            },
            { 
                breakpoint: 540,  
                settings: 
                { slidesToShow: 2 

                } 
            }
        ]
    });
});

$(window).on('load', function(){
	dynamicSpacer();
    fullFirstScreen();
    scrollToSection(50);
    try {
        animateScrollPage();
    } catch (error) {
        console.log('Sem hash na url');
    };
});

$(window).resize(function(){
    dynamicSpacer();
	fullFirstScreen();
});

$(window).on('scroll', function () {
});

$(window).resize(function(){
});

function dynamicSpacer(){
    var height = $('#stickyHeader').outerHeight();
    $('.dynamicSpacer').height(height);
}

function fullFirstScreen(){
    var headerHeight = $('#stickyHeader').outerHeight();
    var windowHeight = $(window).height();
    var offset = 0; 
    var finalHeight = windowHeight - headerHeight - offset; 
    if(finalHeight < 400) finalHeight = 400;

    $('.fullFirstScreen').css('height', finalHeight + 'px');
}

function scrollToSection(offset) {
    $('.scrollTo>a').on('click', function (event) {
        event.preventDefault();
        var target = this.hash;
        $('#wrapper-toggle-menu').removeClass('active');
        $('.hamburger').removeClass('is-active');        
        if (target) {
            $('html, body').scrollTo(target, 200, {
                offset: -offset
            });
        }
    });
}

function animateScrollPage(offset) {
    var hash = window.location.hash.substring(1);
    var tag = $("#" + hash + "");
    // Animation
    if (hash) {
        $('html, body').animate({
            scrollTop: $(tag).offset().top - offset
        }, 250);
    } else {
        console.log("Sem nenhum âncora");
    }
}