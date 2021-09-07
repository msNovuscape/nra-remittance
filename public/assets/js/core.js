// const { Dropdown } = require("bootstrap");

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
        $('.header .menu-wrapper').toggleClass('invisible');
    })

    function dropDownMenuResponsive() {
        let dropTrigger = $('.header .menu-wrapper .menu .has-dropdown .fa'),
            dropMenu = $('.dropdown-menu');
        
        dropTrigger.click(function() {
            $(this).toggleClass('clicked');
            $(this).parents().siblings('.dropdown-menu').slideToggle();
        })
    }
    dropDownMenuResponsive();
    
    $('#datepicker').datepicker({
        format: 'dd-mm-yyyy',
        startDate: '+1d'
    });
    
    $('#registerModal').hide();
    $('#registerBtn').click(function(){
        // console.log('it is working');
        // $(this).hide();
        $('#registerModal').slideToggle();
        $('#registerModal').addClass('active-modal');
        
    })
    $('#closeRegister').click(function() { 
        $('#registerModal').slideToggle()
        $('#registerModal').removeClass('active-modal');
    })
})

