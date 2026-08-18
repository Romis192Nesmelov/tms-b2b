$(document).ready(function() {
    window.token = $('input[name=_token]').val();

    $('#basket-icon').click(function () {
        openModal('basket-modal');
    });

    // Changing products counters
    bindArticlesBasketCounterChange();

    // Submit any forms
    $('button[type=submit]').click(function(e) {
        e.preventDefault();

        let modalId = $(this).parents('dialog').attr('id'),
            formData = new FormData,
            form = $(this).parents('form');
            // agree = form.find('input[name=i_agree]');

        if (form.length /*=&& agree.is(':checked')*/) {
            addLoader(modalId);
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
                success: function (data) {
                    form.find('input, textarea').val('');
                    closeModal(modalId);
                    unlockAll(form);
                    removeLoader();

                    if (data.empty_basket) {
                        $('input[type=number]').val(0);
                        initOrEmptyBacketCounter(0);
                    }

                    openAnswerModal(data.answer);
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

    // Init big table hor-scroll
    bigTablesScroll();

    // Removing empty cells
    let articlesTable = $('table.articles-table');
    if (articlesTable.length) {
        $.each(window.productFields, function (key, field) {
            let emptyCellsFlag = false;
            articlesTable.find('td.product-' + field).each(function () {
                let cellContent = $(this).html();
                if (cellContent.length) emptyCellsFlag = true;
            });
            if (!emptyCellsFlag) {
                $('.product-' + field).remove();
            }
        });
    }

    $(window).resize(function() {
        bigTablesScroll();
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

const openAnswerModal = (answer) => {
    let idAnswerModal = 'success-message';
    $('#' + idAnswerModal).find('h2').html(answer);
    openModal(idAnswerModal);
}

const bigTablesScroll = () => {
    let bigTable = $('.big-table-container');
    if (bigTable.length && $(window).width() <= 1024) {
        bigTable.mCustomScrollbar({
            axis: 'x',
            theme: 'light-3',
            alwaysShowScrollbar: 2,
            advanced: {
                autoExpandHorizontalScroll: true
            }
        });

        // $(window).scroll(function () {
        //     let offset = window.pageYOffset-bigTable.offset().top;
        //     offset = offset < 0 ? 0 : offset;
        //     $('.mCSB_scrollTools.mCSB_scrollTools_horizontal').css('top',offset);
        // });
    } else if (bigTable) {
        bigTable.mCustomScrollbar('destroy');
    }
}

const bindArticlesBasketCounterChange = () => {
    let articlesInputs = $('input[type=number].article');
    articlesInputs.unbind('change');
    let basketArticlesTable = $('#basket-modal table.order-table');

    articlesInputs.change(function (e) {
        if ($(this).is(':focus')) {
            let name = $(this).attr('name'),
                id = parseInt(name.replace('article_','')),
                value = parseInt($(this).val());

            $.post('/api/basket', {
                '_token': window.token,
                'id': id,
                'value': value
            }, function (data) {
                if (data.success) {
                    $('input[type=number][name='+name+']').val(value);
                    initOrEmptyBacketCounter(data.counter);

                    if (data.action == 'add') {
                        let cellsClass = 'text-white p-1';
                        basketArticlesTable.append(
                            $('<tr></tr>').addClass('article_' + data.id)
                                .append(
                                    $('<td></td>').addClass('text-center ' + cellsClass).html(data.article)
                                )
                                .append(
                                    $('<td></td>').addClass('text-left ' + cellsClass).html(data.name)
                                )
                                .append(
                                    $('<td></td>').addClass('text-center text-white p-2').append(
                                        $('<input />').addClass('article w-20 text-center bg-gray-600 text-white px-3 py-1 rounded-md').attr({
                                            'name': 'article_' + data.id,
                                            'type': 'number',
                                            'min': 0,
                                            'max': 100,
                                            'value': data.value
                                        })
                                    )
                                )
                        );
                        bindArticlesBasketCounterChange();
                    } else if (data.action == 'remove') {
                        basketArticlesTable.find('tr.article_' + data.id).remove();
                    }

                } else e.preventDefault();
            });
        }
    });
}

const initOrEmptyBacketCounter = (counter) => {
    let basketOrderForm = $('#basket-modal form'),
        basketSubmitButton = basketOrderForm.find('button[type=submit]'),
        basketCounter = $('#basket-counter'),
        basketArticlesTable = basketOrderForm.find('.big-table-container'),
        basketUserFiledsBlock = basketOrderForm.find('.user-fields-block'),
        emptyBasketHead = basketOrderForm.find('h2');

    if (counter) {
        basketCounter.removeClass('hidden').addClass('flex');
        basketSubmitButton.removeClass('hidden');
        basketArticlesTable.removeClass('hidden');
        basketUserFiledsBlock.removeClass('hidden');
        emptyBasketHead.addClass('hidden');
    } else {
        basketCounter.removeClass('flex').addClass('hidden');
        basketSubmitButton.addClass('hidden');
        basketArticlesTable.addClass('hidden');
        basketUserFiledsBlock.addClass('hidden');
        emptyBasketHead.removeClass('hidden');
    }
    basketCounter.html(counter);
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
