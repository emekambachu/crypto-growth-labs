; (function ($) {
    "use strict";

    $(document).ready(function () {

        /**-----------------------------
         *  Navbar fix
         * ---------------------------*/
        $(document).on('click', '.navbar-area .navbar-nav li.menu-item-has-children>a', function (e) {
            e.preventDefault();
        })
       
        /*-------------------------------------
            menu
        -------------------------------------*/
        $('.navbar-area .menu').on('click', function() {
            $(this).toggleClass('open');
            $('.navbar-area .navbar-collapse').toggleClass('sopen');
        });
    
        // mobile menu
        if ($(window).width() < 992) {
            $(".in-mobile").clone().appendTo(".sidebar-inner");
            $(".in-mobile ul li.menu-item-has-children").append('<i class="fas fa-chevron-right"></i>');
            $('<i class="fas fa-chevron-right"></i>').insertAfter("");

            $(".menu-item-has-children a").on('click', function(e) {
                // e.preventDefault();

                $(this).siblings('.sub-menu').animate({
                    height: "toggle"
                }, 300);
            });
        }

        var menutoggle = $('.menu-toggle');
        var mainmenu = $('.navbar-nav');
        
        menutoggle.on('click', function() {
            if (menutoggle.hasClass('is-active')) {
                mainmenu.removeClass('menu-open');
            } else {
                mainmenu.addClass('menu-open');
            }
        });

        /*--------------------------------------------
            Search Popup
        ---------------------------------------------*/
        var bodyOvrelay =  $('#body-overlay');
        var searchPopup = $('#search-popup');

        $(document).on('click','#body-overlay',function(e){
            e.preventDefault();
        bodyOvrelay.removeClass('active');
            searchPopup.removeClass('active');
        });
        $(document).on('click','.search',function(e){
            e.preventDefault();
            searchPopup.addClass('active');
        bodyOvrelay.addClass('active');
        });

        /*--------------------------------------------------
            select onput
        ---------------------------------------------------*/
        $('select').niceSelect();

        /* -----------------------------------------------------
            Variables
        ----------------------------------------------------- */
        var leftArrow = '<i class="la la-arrow-left"></i>';
        var leftAngle = '<i class="fa fa-angle-left"></i>';
        var rightArrow = '<i class="la la-arrow-right"></i>';
        var rightAngle = '<i class="fa fa-angle-right"></i>';

        /*------------------------------------------------
            banner-slider
        ------------------------------------------------*/
        $('.banner-slider').owlCarousel({
            loop: true,
            margin: 30,
            nav: false,
            dots: true,
            smartSpeed:1500,
            items: 1,
        });

        /* -------------------------------------------------
            Banner Slider-2 
        ------------------------------------------------- */
            var menu = [];
            jQuery('.swiper-slide').each( function(index){
                menu.push( jQuery(this).find('.slide-inner').attr("data-text") );
            });
            var interleaveOffset = 0.5;
            var swiperOptions = {
                loop: true,
                speed: 1000,
                parallax: true,
                autoplay: {
                    delay: 6500,
                    disableOnInteraction: false,
                },
                watchSlidesProgress: true,
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },

                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },

                on: {
                    progress: function() {
                        var swiper = this;
                        for (var i = 0; i < swiper.slides.length; i++) {
                            var slideProgress = swiper.slides[i].progress;
                            var innerOffset = swiper.width * interleaveOffset;
                            var innerTranslate = slideProgress * innerOffset;
                            swiper.slides[i].querySelector(".slide-inner").style.transform =
                            "translate3d(" + innerTranslate + "px, 0, 0)";
                        }      
                    },

                    touchStart: function() {
                      var swiper = this;
                      for (var i = 0; i < swiper.slides.length; i++) {
                        swiper.slides[i].style.transition = "";
                      }
                    },

                    setTransition: function(speed) {
                        var swiper = this;
                        for (var i = 0; i < swiper.slides.length; i++) {
                            swiper.slides[i].style.transition = speed + "ms";
                            swiper.slides[i].querySelector(".slide-inner").style.transition =
                            speed + "ms";
                        }
                    }
                }
            };

            var swiper = new Swiper(".swiper-container", swiperOptions);

            // DATA BACKGROUND IMAGE
            var sliderBgSetting = $(".slide-bg-image");
            sliderBgSetting.each(function(indx){
                if ($(this).attr("data-background")){
                    $(this).css("background-image", "url(" + $(this).data("background") + ")");
                }
            });

        /*------------------------------------------------
            Range-slider
        ------------------------------------------------*/
        // First let's set the colors of our sliders
        const settings={
          fill: '#DD4372',
          background: '#DFDFDF'
        }

        // First find all our sliders
        const sliders = document.querySelectorAll('.range-slider');
        Array.prototype.forEach.call(sliders,(slider)=>{
          slider.querySelector('input').addEventListener('input', (event)=>{
            slider.querySelector('span').innerHTML = event.target.value;
            applyFill(event.target);
          });
          applyFill(slider.querySelector('input'));
        });

        function applyFill(slider) {
          const percentage = 100*(slider.value-slider.min)/(slider.max-slider.min);
          const bg = `linear-gradient(90deg, ${settings.fill} ${percentage}%, ${settings.background} ${percentage+0.1}%)`;
          slider.style.background = bg;
        }

        /* -------------------------------------------------------------
         fact counter
         ------------------------------------------------------------- */
        $('.counter').counterUp({
            delay: 15,
            time: 1000
        });


        /*------------------------------------------------
            testimonial-slider
        ------------------------------------------------*/
        $('.testimonial-slider').owlCarousel({
            loop: true,
            margin: 10,
            nav: false,
            dots: true,
            smartSpeed:1500,
            items: 1,
            navText: [ leftAngle, rightAngle],
            responsive: {
                0: {
                    items: 1
                },
                426: {
                    items: 1
                },
                768: {
                    items: 2
                },
                1100: {
                    items: 3
                },
            }
        });

        /*------------------------------------------------
            team-slider
        ------------------------------------------------*/
        $('.team-slider').owlCarousel({
            loop: true,
            margin: 10,
            nav: false,
            dots: true,
            smartSpeed:1500,
            items: 1,
            navText: [ leftAngle, rightAngle],
            responsive: {
                0: {
                    items: 1
                },
                576: {
                    items: 2
                },
                1024: {
                    items: 3
                },
                1100: {
                    items: 4
                },
            }
        });

        /*------------------------------------------------
            client-slider
        ------------------------------------------------*/
        $('.client-slider').owlCarousel({
            loop: true,
            margin: 10,
            nav: false,
            dots: true,
            smartSpeed:1500,
            items: 1,
            navText: [ leftAngle, rightAngle],
            responsive: {
                0: {
                    items: 1
                },
                576: {
                    items: 2
                },
                768: {
                    items: 3
                },
                1100: {
                    items: 5
                },
            }
        });

        /*------------------------------------------------
            blog-slider
        ------------------------------------------------*/
        $('.blog-slider').owlCarousel({
            loop: true,
            margin: 10,
            nav: false,
            dots: true,
            smartSpeed:1500,
            items: 1,
            navText: [ leftAngle, rightAngle],
            responsive: {
                0: {
                    items: 1
                },
                426: {
                    items: 1
                },
                768: {
                    items: 2
                },
                1100: {
                    items: 3
                },
            }
        });

        /*------------------------------------------------
            partner-slider
        ------------------------------------------------*/
        $('.partner-slider').owlCarousel({
            loop: true,
            margin: 10,
            nav: false,
            dots: true,
            smartSpeed:1500,
            items: 1,
            navText: [ leftAngle, rightAngle],
            responsive: {
                0: {
                    items: 1
                },
                425: {
                    items: 2
                },
                576: {
                    items: 3
                },
                1100: {
                    items: 5
                },
            }
        });

        /* -------------------------------------------------
            Magnific JS 
        ------------------------------------------------- */
        $('.video-play-btn').magnificPopup({
          type: 'iframe',
          removalDelay: 260,
          mainClass: 'mfp-zoom-in',
        });
        $.extend(true, $.magnificPopup.defaults, {
          iframe: {
            patterns: {
              youtube: {
                index: 'youtube.com/', 
                id: 'v=', 
                src: 'https://www.youtube.com/embed/Wimkqo8gDZ0' 
              }
            }
          }
        });

        /* -------------------------------------------------------------
           gallery isotope
        ------------------------------------------------------------- */
        var $galleryFilterArea = $('.gallery-isotope'),
            $galleryFilterMenu = $('.gallery-isotope-btn');
        /*Filter*/
        $galleryFilterMenu.on( 'click', 'button, a', function() {
            var $this = $(this),
            $filterValue = $this.attr('data-filter');
            $galleryFilterMenu.find('button, a').removeClass('active');
            $this.addClass('active');
            $galleryFilterArea.isotope({ filter: $filterValue });
        });
        /*Grid*/
        $galleryFilterArea.each(function(){
            var $this = $(this),
            $galleryFilterItem = '.gallery-item';
            $this.imagesLoaded( function() {
                $this.isotope({
                    itemSelector: $galleryFilterItem,
                    percentPosition: true,
                    masonry: {
                        columnWidth: '.gallery-sizer',
                    }
                });
            });
        });

        /*-------------------------------------------------
            wow js init
        --------------------------------------------------*/
        new WOW().init();

        /*------------------
           back to top
        ------------------*/
        $(document).on('click', '.back-to-top', function () {
            $("html,body").animate({
                scrollTop: 0
            }, 2000);
        });

    });

    $(window).on("scroll", function() {
        /*---------------------------------------
        sticky menu activation && Sticky Icon Bar
        -----------------------------------------*/

        var mainMenuTop = $(".navbar-area");
        if ($(window).scrollTop() >= 1) {
            mainMenuTop.addClass('navbar-area-fixed');
        }
        else {
            mainMenuTop.removeClass('navbar-area-fixed');
        }
        
        var ScrollTop = $('.back-to-top');
        if ($(window).scrollTop() > 1000) {
            ScrollTop.fadeIn(1000);
        } else {
            ScrollTop.fadeOut(1000);
        }
    });


    $(window).on('load', function () {

        /*-----------------
            preloader
        ------------------*/
        var preLoder = $("#preloader");
        preLoder.fadeOut(0);

        /*-----------------
            back to top
        ------------------*/
        var backtoTop = $('.back-to-top')
        backtoTop.fadeOut();

        /*---------------------
            Cancel Preloader
        ----------------------*/
        $(document).on('click', '.cancel-preloader a', function (e) {
            e.preventDefault();
            $("#preloader").fadeOut(2000);
        });

    });



})(jQuery);