(function($) {
    "use strict";

    $(window).on("scroll", function() {
        var scroll = $(window).scrollTop();
        if (scroll < 400) {
            $("#sticky-header").removeClass("sticky");
            $("#back-top").fadeIn(500);
        } else {
            $("#sticky-header").addClass("sticky");
            $("#back-top").fadeIn(500);
        }
    });

    $(".owl-carousel").owlCarousel({
        loop: true,
        margin: 0,
        items: 1,
        autoplay: true,
        navText: [
            '<i class="fa fa-angle-left"></i>',
            '<i class="fa fa-angle-right"></i>'
        ],
        nav: true,
        dots: false,
        autoplayHoverPause: true,
        autoplaySpeed: 800,
        responsive: {
            0: {
                items: 1,
                nav: false
            },
            767: {
                items: 1,
                nav: false
            },
            992: {
                items: 1,
                nav: false
            },
            1200: {
                items: 1,
                nav: false
            },
            1600: {
                items: 1,
                nav: true
            }
        }
    });

    // $(".carousel").slick({
    //     slidesToShow: 3,
    //     slidesToScroll: 1,
    //     asNavFor: ".slider-for",
    //     dots: true,
    //     centerMode: true,
    //     focusOnSelect: true
    // });

    $(".slider").slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        // autoplay: true,
        autoplaySpeed: 3500,
        fadeSpeed: 1000,
        arrows: false,
        dots: true,
        pauseOnHover: false,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1
                }
            },
            {
                breakpoint: 520,
                settings: {
                    slidesToShow: 1
                }
            }
        ]
    });
})(jQuery);
