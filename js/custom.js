$(document).on('ready', function () {

    $('.responsive').slick({
        dots: false,
        infinite: true,
        speed: 300,
        slidesToShow: 6,
        slidesToScroll: 6,
        autoplay: true,
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 6,
                    slidesToScroll: 6,
                    infinite: true,
                    dots: false
                }
            },
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 4,
                    infinite: true,
                    dots: false
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });
});


$(document).ready(function () {
    var $header = $("#main-nav"),
            $clone = $header.before($header.clone().addClass("clone"));

    $(window).on("scroll", function () {
        var fromTop = $(window).scrollTop();
        $("body").toggleClass("down", (fromTop > 200));
    });


    //    back to top function

    if ($('#scrollUp').length) {
        var scrollTrigger = 100, // px
                backToTop = function () {
                    var scrollTop = $(window).scrollTop();
                    if (scrollTop > scrollTrigger) {
                        $('#scrollUp').addClass('show');
                    } else {
                        $('#scrollUp').removeClass('show');
                    }
                };
        backToTop();
        $(window).on('scroll', function () {
            backToTop();
        });
        $('#scrollUp').on('click', function (e) {
            e.preventDefault();
            $('html,body').animate({
                scrollTop: 0
            }, 700);
        });

    }
    /*==========================
     Hide And Show Jqury
     ============================*/
    $('#team-collapse').hide();
    $("#readmor2").hide("");
    $('#readmor1').on('click', function (e) {
        $("#team-collapse").slideToggle("slow");
        e.preventDefault();
        $("#readmor1").hide("");
        $("#readmor2").show("");
    });
    $('#readmor2').on('click', function (e) {
        $("#team-collapse").slideToggle("slow");
        e.preventDefault();
        $("#readmor1").show("");
        $("#readmor2").hide("");
    });

    $('#team-collapse2').hide();
    $("#readmor4").hide("");
    $('#readmor3').on('click', function (e) {
        $("#team-collapse2").slideToggle("slow");
        e.preventDefault();
        $("#readmor3").hide("");
        $("#readmor4").show("");

    });
    $('#readmor4').on('click', function (e) {
        $("#team-collapse2").slideToggle("slow");
        e.preventDefault();
        $("#readmor3").show("");
        $("#readmor4").hide("");
    });
    $(".readmore_btn").on("click", function (e) {
        var el = $(this);
        if (el.text() == el.data("text-swap")) {
            el.text(el.data("text-original"));
        } else {
            el.data("text-original", el.text());
            el.text(el.data("text-swap"));
        }
        e.preventDefault();
    });
    /*==========================
     Smooth scrol
     ============================*/
});



