/*-----------------------------------------------------------
* Template Name    : Anj - Creative Portfolio Template
* Author           : beingeorge
* Version          : 1.0
* Created          : Mar 2020
* File Description : Main Js file of the template
*------------------------------------------------------------
*/

! function($) {
    "use strict";

    /* ---------------------------------------------- /*
    * Preloader
    /* ---------------------------------------------- */

    $(window).on('load', function() {
        $('#preloader').addClass("loaded");
    });

    /* ---------------------------------------------- /*
    * Section Scroll - Navbar
    /* ---------------------------------------------- */

    $('.navbar-nav a, .btn').on('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top - 0
        }, 1500, 'easeInOutExpo');

        if($('.navbar').hasClass('active')){
            $('.navbar').removeClass('active')
            $('.ham').removeClass('active')
        }

        event.preventDefault();
    });

    $('.navbar-toggler').on('click', function(){
        $("body").toggleClass('aside-open');
        $(".ham").toggleClass('active');
        $("body, html").toggleClass('overflow-hidden');
    });

    /* ---------------------------------------------- /*
    * Scroll Spy - init
    /* ---------------------------------------------- */


    /* ---------------------------------------------- /*
    * Magnific Popup - Init
    /* ---------------------------------------------- */

    // $('.simple-ajax-popup').magnificPopup({
    //     type: 'image',

    //     closeOnContentClick: true,
    //     mainClass: 'mfp-fade',
    //     gallery: {
    //         enabled: true,
    //         navigateByImgClick: true,
    //         preload: [0, 1]
    //     },
    //     zoom: {
    //         enabled: true,
    //         duration: 300,
    //         easing: 'ease-in-out',

    //         opener: function(openerElement) {
    //             return openerElement.is('img') ? openerElement : openerElement.find('img');
    //         }
    //     }
    // });

    // $(".simple-ajax-popup").fancybox({
    //     'transitionIn'  :   'elastic',
    //     'transitionOut' :   'elastic',
    //     'speedIn'       :   600,
    //     'speedOut'      :   200,
    //     'overlayShow'   :   false
    // });

    /* ---------------------------------------------- /*
    * Swipper - Init
    /* ---------------------------------------------- */

    // Testimony init

    var swipertest = new Swiper('.swiper-testimony', {
        spaceBetween: 30,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });


    /* ---------------------------------------------- /*
    * AnimateOnScroll - Init
    /* ---------------------------------------------- */

    var wow = new WOW(
      {
        boxClass:     'wow',      // animated element css class (default is wow)
        animateClass: 'animated', // animation css class (default is animated)
        offset:       0,          // distance to the element when triggering the animation (default is 0)
        mobile:       true,       // trigger animations on mobile devices (default is true)
        live:         true,       // act on asynchronously loaded content (default is true)
        callback:     function(box) {
          // the callback is fired every time an animation is started
          // the argument that is passed in is the DOM node being animated
        },
        scrollContainer: null,    // optional scroll container selector, otherwise use window,
        resetAnimation: true,     // reset animation on end (default is true)
      }
    );
    wow.init();

    /* ---------------------------------------------- /*
    * Initialize shuffle plugin
    /* ---------------------------------------------- */

    // $(document).ready(function() {
    //
    //         $('.grid').isotope({
    //             itemSelector: '.grid-item',
    //         });
    //
    //         // filter items on button click
    //         $('.filter-button-group').on('click', 'li', function() {
    //             var filterValue = $(this).attr('data-filter');
    //             $('.grid').isotope({ filter: filterValue });
    //             $('.filter-button-group li').removeClass('active');
    //             $(this).addClass('active');
    //         });
    //     });

    
        /* -----------------------------------
                Skills
       ----------------------------------- */
       //skillbar
         $(window).scroll(function () {
         if($(window).scrollTop() > 1000) {

             jQuery('.skillbar').each(function () {
                 jQuery(this).find('.skillbar-bar').animate({
                     width: jQuery(this).attr('data-percent')
                 }, 3000);
             });

         }
     });
    /* ---------------------------------------------- /*
    * Material Button Init
    /* ---------------------------------------------- */

    /* Arlina Design Material Button by http://www.arlinadzgn.com */
    (function($) {
        $(".ripple").on('click', function (e) {
            var rippler = $(this);
            if(rippler.find(".teffect").length === 0) {
                rippler.append("<span class='teffect'></span>");
            }
            var teffect = rippler.find(".teffect");
            teffect.removeClass("animate");
            if(!teffect.height() && !teffect.width())
            {
                var d = Math.max(rippler.outerWidth(), rippler.outerHeight());
                teffect.css({height: d, width: d});
            }
            var x = e.pageX - rippler.offset().left - teffect.width()/2;
            var y = e.pageY - rippler.offset().top - teffect.height()/2;
            teffect.css({
                top: y+'px',
                left:x+'px'
            }).addClass("animate");
            // e.preventDefault();
        })
    })(jQuery);

    /* ---------------------------------------------- /*
    * Parallax init
    /* ---------------------------------------------- */

    if ( $( "#scene" ).length ) {
        var scene = document.getElementById('scene');
        var parallaxInstance = new Parallax(scene);
    }
    /* ---------------------------------------------- /*
    * Typed init
    /* ---------------------------------------------- */

    $(".typed").each(function() {
        var $this = $(this);
        $this.typed({
            strings: $this.attr('data-elements').split(','),
            typeSpeed: 100,
            backDelay: 3000
        });
    });


    var html_body = $('html, body');
       $('nav-item a').on('click', function () {
           if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
               var target = $(this.hash);
               target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
               if (target.length) {
                   html_body.animate({
                       scrollTop: target.offset().top - 0
                   }, 1500);
                   return false;
               }
           }
       });

    /* ---------------------------------------------- /*
    *  Color Switcher
    /* ---------------------------------------------- */

    $('.toggle-theme-panel').on("click",function(e) {
        e.preventDefault();
        $('.settings_panel').toggleClass('active');
    });
    $('.colors-switch a').on("click",function(e) {
        $('#preloader').removeClass("loaded");
        setTimeout(function(){
            $('#preloader').addClass("loaded");
        }, 1500)
        e.preventDefault();
        var attr = $(this).attr("title");
        console.log(attr);
        $('head').append('<link rel="stylesheet" href="assets/css/'+attr+'.css">');
    });


    $(document).ready(function(){
        $('.venobox').venobox();
    });




}(window.jQuery);
