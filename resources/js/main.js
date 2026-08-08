$(document).ready(function() {
    let onTopButton = $('#on_top_button');

    onTopButton.click(()=> {
        goToScroll('top');
        // $(window).scrollTop(0);
    });

    $('#hamburger').click(function () {
        $(this).find('path').toggle();
        $('#responsive-nav').toggle();
    });

    $('.with-sub-menu').mouseover(function () {
        $(this).find('ul').removeClass('hidden');
    }).mouseout(function () {
        $(this).find('ul').addClass('hidden');
    });

    bindFancybox();

    $('#product-images a').click(function (e) {
        e.preventDefault();
        let currentImg = $(this).find('img'),
            mainImgHref = $('#product-main-image-href'),
            mainImg = $('#product-main-image'),
            oldMainImgSrc = mainImg.attr('src');

        currentImg.animate({'opacity':0});
        mainImg.animate({'opacity':0}, function() {
            mainImg.attr('src',currentImg.attr('src'));
            mainImgHref.attr('href',currentImg.attr('src'));
            currentImg.attr('src',oldMainImgSrc);

            mainImg.animate({'opacity':1});
            currentImg.animate({'opacity':1});
        });

        // alert($(this).find('img').attr('src'));
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
            380: {
                items: 1
            },
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
            380: {
                items: 1
            },
            400: {
                items: 1
            },
            768: {
                items: 1
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

const bindFancybox = () => {
    $('a.fancybox').fancybox({
        'autoScale': true,
        'touch': false,
        'transitionIn': 'elastic',
        'transitionOut': 'elastic',
        'speedIn': 500,
        'speedOut': 300,
        'autoDimensions': true,
        'centerOnScroll': true
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
