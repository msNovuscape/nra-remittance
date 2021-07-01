$(document).ready( function () {
    
    $('.hero-banner-slider').slick({
        dots: true,
        infinite: false,
        speed: 300,
        fade: true,
        cssEase: 'linear',
        slidesToShow: 1,
        adaptiveHeight: true,
        autoplay: true,
    });

    $('.menu-trigger-btn').click(function() {
        $('.header .menu').toggleClass('invisible');
    })
                  
})