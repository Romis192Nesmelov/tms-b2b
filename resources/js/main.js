$(document).ready(function() {
    $('button[type=submit]').click(function(e) {
        e.preventDefault();

        let modalId = $(this).parents('dialog').attr('id'),
            formData = new FormData,
            form = $(this).parents('form');
            // agree = form.find('input[name=i_agree]');

        if (form.length /*=&& agree.is(':checked')*/) {
            addLoader();
            form.find('input, textarea, select').each(function () {
                let self = $(this);
                // if (self.attr('type') === 'file') formData.append(self.attr('name'),self[0].files[0]);
                // else if (self.attr('type') === 'checkbox' || self.attr('type') === 'radio') formData = processingCheckFields(formData,self);
                // else formData = processingFields(formData,self);
                formData = processingFields(formData,self);
            });

            $('.input-error').addClass('hidden').html('');
            form.find('input, select, textarea, button').attr('disabled','disabled');

            $.ajax({
                url: form.attr('action'),
                data: formData,
                processData: false,
                contentType: false,
                type: form.attr('method'),
                success: function () {
                    form.find('input, textarea').val('');
                    closeModal(modalId);
                    unlockAll(form);
                    removeLoader();
                    openModal('success-message');
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    let response = jQuery.parseJSON(jqXHR.responseText);
                    $.each(response.errors, function (field, errorMsg) {
                        $('#'+field+'_error').removeClass('hidden').html(errorMsg[0]);
                    });
                    unlockAll(form);
                    removeLoader();
                }
            });
        }
    });

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
    });

    $('input[name=phone]').mask("+7(999)999-99-99");

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
                items: 2
            },
            1200: {
                items: 4
            },
        },
        // navText:[navButtonBlack1,navButtonBlack2]
    });

    // $('.close-modal').click(function () {
    //     document.querySelector('#request-order').close();
    // });

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

const addLoader = (id) => {
    $('#'+id).find('el-dialog-panel').append(
        $('<div></div>').attr('id','loader').append($('<div></div>'))
    );
}

const unlockAll = (form) => {
    form.find('input, select, textarea, button').removeAttr('disabled');
    // agree.prop('checked', false);
}

const removeLoader = () => {
    $('#loader').remove();
}

const processingFields = (formData, inputObj) => {
    if (inputObj.length) {
        $.each(inputObj, function (key, obj) {
            if (obj.type !== 'checkbox' && obj.type !== 'radio') {
                formData.append(obj.name,obj.value);
            }
        });
    }
    return formData;
}

const closeModal = (id) => {
    document.querySelector('#' + id).close();
}

const openModal = (id) => {
    document.querySelector('#' + id).showModal();
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
