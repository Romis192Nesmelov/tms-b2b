$(document).ready(function() {
    let onTopButton = $('#on_top_button');

    onTopButton.click(()=> {
        goToScroll('top');
        // $(window).scrollTop(0);
    });

    $('.fancybox').fancybox({
        'autoScale': true,
        'touch': false,
        'transitionIn': 'elastic',
        'transitionOut': 'elastic',
        'speedIn': 500,
        'speedOut': 300,
        'autoDimensions': true,
        'centerOnScroll': true
    });

    // $('input[name=phone]').mask("+7(999)999-99-99");

    $('.owl-carousel.slider').owlCarousel({
        margin: 20,
        loop: true,
        nav: true,
        autoplay: true,
        autoplayTimeout: 5000,
        dots: true,
        responsive: {
            400: {
                items: 1
            },
            768: {
                items: 1
            },
            1200: {
                items: 1
            },
        },
        // navText:[navButtonBlack1,navButtonBlack2]
    });

    $('.owl-carousel.news').owlCarousel({
        margin: 50,
        loop: true,
        nav: true,
        autoplay: true,
        autoplayTimeout: 7000,
        dots: false,
        responsive: {
            400: {
                items: 1
            },
            768: {
                items: 2
            },
            1200: {
                items: 4
            },
        },
        // navText:[navButtonBlack1,navButtonBlack2]
    });

    $(window).scroll(function() {
        let win = $(this);

        if (win.scrollTop() > win.outerHeight()) onTopButton.fadeIn();
        else onTopButton.fadeOut();
    });
});

const goToScroll = (scrollData) => {
    $('html,body').animate({
        scrollTop: $('div[data-scroll=' + scrollData + ']').offset().top
    }, 1000, 'easeInOutQuint', function () {
        // window.scrollFlag = false;
    });
}

// const getQueryParams = (qs) => {
//     qs = qs.split('+').join(' ');
//     let params = {},
//         tokens,
//         re = /[?&]?([^=]+)=([^&]*)/g;
//     while (tokens = re.exec(qs)) {
//         params[decodeURIComponent(tokens[1])] = decodeURIComponent(tokens[2]);
//     }
//     return params;
// }
