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
        prevArrow: `<button type="button" class="slick-prev"><i class="fa fa-angle-left"></i></button>`,
        nextArrow: `<button type="button" class="slick-next"><i class="fa fa-angle-right"></i></button>`,
    });

    $('.menu-trigger-btn').click(function() {
        $('.header .menu').toggleClass('invisible');
    })
                  
})