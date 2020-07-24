
! function($) {
    "use strict";



    $('.rotate_slider').carousel({
        num: 7,
        maxWidth: 480,
        maxHeight: 380,
        distance: 50,
        scale: 0.6,
        animationTime: 1000,
        showTime: 1000,
        autoPlay: true,

    });


    $('.work-slider').slick({
         arrows: false,
         dots: true,
         autoplay: true,
         autoplaySpeed: 1000,
         speed: 1000,
         slidesToShow: 1,
         slidesToScroll: 1,
         responsive: [{
                 breakpoint: 1024,
                 settings: {
                     arrows: false,
                     slidesToShow: 1,
                     slidesToScroll: 1,
                     infinite: true,
                     dots: true
                 }
             },
             {
                 breakpoint: 800,
                 settings: {
                     arrows: false,
                     slidesToShow: 1,
                     slidesToScroll: 1
                 }
             },


             {
                 breakpoint: 600,
                 settings: {
                     arrows: false,
                     slidesToShow: 1,
                     slidesToScroll: 1
                 }
             },
             {
                 breakpoint: 479,
                 settings: {
                     slidesToShow: 1,
                     slidesToScroll: 1
                 }
             }
         ]

     });




     }(window.jQuery);
