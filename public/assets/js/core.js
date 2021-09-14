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
$("#datepicker").on("change", function () {
    var self = this;
    var route = $(this).attr('route');
    if (self.timer){
        clearTimeout(self.timer);
    }
    self.timer = setTimeout(function ()
    {
        var keyword = self.value;
        if(self.value)
        {
        self.timer = null;
        
            
            $.ajax({
                type: "get",
                url: route,
                data: { date: keyword},
                dataType:'json',
                success: function (response) {
                    console.log(response);
                    $("#10amBody").empty();
                    $.each(response.first_exchange_rates,function(index,value){
                        $("#10amBody").append(
                            '<tr><td>'+value.currency+'</td><td>1</td><td>'+value.buying_rate+'</td><td>'+value.selling_rate+'</tr>'
                    );
                    });
                    $("#10amDate").text(response.date);
                    $("#2pmBody").empty();
                    $.each(response.last_exchange_rates,function(index,value){
                        $("#2pmBody").append(
                            '<tr><td>'+value.currency+'</td><td>1</td><td>'+value.buying_rate+'</td><td>'+value.selling_rate+'</tr>'
                    );
                    });
                    $("#2pmDate").text(response.date);

                },
                error:function(result)
                {
                    alert('Error occur!Please try again.');
                
                    return false;
                }
            });
            
        }
        // else {
        //     $('.ps-search--mobile .ps-search__result').removeClass('active');
        // }
    }, 1000);
    
    
});