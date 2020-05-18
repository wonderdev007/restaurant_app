jQuery(document).ready(function($) {
    // Back to top button
    $(window).scroll(function() {
        if ($(this).scrollTop() > 100) {
            $(".back-to-top").fadeIn("slow");
        } else {
            $(".back-to-top").fadeOut("slow");
        }
    });
    $(".back-to-top").click(function() {
        $("html, body").animate({ scrollTop: 0 }, 1500, "easeInOutExpo");
        return false;
    });

    // Initiate the wowjs animation library
    new WOW().init();

    // Initiate superfish on nav menu
    $(".nav-menu").superfish({
        animation: {
            opacity: "show"
        },
        speed: 400
    });

    // Mobile Navigation
    if ($("#nav-menu-container").length) {
        var $mobile_nav = $("#nav-menu-container")
            .clone()
            .prop({
                id: "mobile-nav"
            });
        $mobile_nav.find("> ul").attr({
            class: "",
            id: ""
        });
        $("body").append($mobile_nav);
        $("body").prepend(
            '<button type="button" id="mobile-nav-toggle"><i class="fa fa-bars"></i></button>'
        );
        $("body").append('<div id="mobile-body-overly"></div>');
        $("#mobile-nav")
            .find(".menu-has-children")
            .prepend('<i class="fa fa-chevron-down"></i>');

        $(document).on("click", ".menu-has-children i", function(e) {
            $(this)
                .next()
                .toggleClass("menu-item-active");
            $(this)
                .nextAll("ul")
                .eq(0)
                .slideToggle();
            $(this).toggleClass("fa-chevron-up fa-chevron-down");
        });

        $(document).on("click", "#mobile-nav-toggle", function(e) {
            $("body").toggleClass("mobile-nav-active");
            $("#mobile-nav-toggle i").toggleClass("fa-times fa-bars");
            $("#mobile-body-overly").toggle();
        });

        $(document).click(function(e) {
            var container = $("#mobile-nav, #mobile-nav-toggle");
            if (
                !container.is(e.target) &&
                container.has(e.target).length === 0
            ) {
                if ($("body").hasClass("mobile-nav-active")) {
                    $("body").removeClass("mobile-nav-active");
                    $("#mobile-nav-toggle i").toggleClass("fa-times fa-bars");
                    $("#mobile-body-overly").fadeOut();
                }
            }
        });
    } else if ($("#mobile-nav, #mobile-nav-toggle").length) {
        $("#mobile-nav, #mobile-nav-toggle").hide();
    }

    // Smooth scroll for the menu and links with .scrollto classes
    $(".nav-menu a, #mobile-nav a, .scrollto").on("click", function() {
        if (
            location.pathname.replace(/^\//, "") ==
                this.pathname.replace(/^\//, "") &&
            location.hostname == this.hostname
        ) {
            var target = $(this.hash);
            if (target.length) {
                var top_space = 0;

                if ($("#header").length) {
                    top_space = $("#header").outerHeight();

                    if (!$("#header").hasClass("header-fixed")) {
                        top_space = top_space - 20;
                    }
                }

                $("html, body").animate(
                    {
                        scrollTop: target.offset().top - top_space
                    },
                    1200,
                    "easeInOutExpo"
                );

                if ($(this).parents(".nav-menu").length) {
                    $(".nav-menu .menu-active").removeClass("menu-active");
                    $(this)
                        .closest("li")
                        .addClass("menu-active");
                }

                if ($("body").hasClass("mobile-nav-active")) {
                    $("body").removeClass("mobile-nav-active");
                    $("#mobile-nav-toggle i").toggleClass("fa-times fa-bars");
                    $("#mobile-body-overly").fadeOut();
                }
                return false;
            }
        }
    });

    // Header scroll class
    $(window).scroll(function() {
        if ($(this).scrollTop() > 100) {
            $("#header").addClass("header-scrolled");
        } else {
            $("#header").removeClass("header-scrolled");
        }
    });

    ("use strict");

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
});
