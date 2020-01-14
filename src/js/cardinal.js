$(document).ready(function () {

    $('[data-bg]').each(function () {
        $(this).css('background-image', 'url(' + $(this).attr('data-bg') + ')').css('height', '450px').css('background-repeat', 'no-repeat').css('background-size', 'cover');
    });


    $.when(

        $.getScript("https://theautohost.com/_cardinal/dist/js/slick.min.js", function () {
            console.log("Chumney & Associates cookie was loaded.");


        }),
        $.getScript("https://theautohost.com/_cardinal/dist/js/aos.js", function () {
            console.log("Chumney & Associates modal script was loaded.");


        }),
    ).then(function () {
        aosInitialize();
        slickCarouselInitialize();
    });




    function aosInitialize() {
        AOS.init({
            once: true,
        });

    }

    function slickCarouselInitialize() {
        $('.ca-vehicle-slide').slick({
            dots: false,
            arrows: true,
            vertical: true,
            slidesToShow: 2,
            slidesToScroll: 1,
            verticalSwiping: true,
        })

    }


});

