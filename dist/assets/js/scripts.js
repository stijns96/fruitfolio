$(function () {
    var page = $('html,body');

    page.on("scroll mousedown wheel DOMMouseScroll mousewheel keyup touchmove", function () {
        page.stop();
    });

    function scrollToId() {
        var navHeight = $('header').outerHeight();

        if (window.location.hash) {
            if ($(document).width() < 768) {
                page.animate({
                    scrollTop: $(window.location.hash).offset().top
                }, 1000, 'easeInOutCirc');
            } else {
                page.animate({
                    scrollTop: $(window.location.hash).offset().top - navHeight
                }, 1000, 'easeInOutCirc');
            }
        }
    }

    function toggleHamburger() {
        $('.hamburger').click(function () {
            $('header').toggleClass("active");
            $(this).toggleClass('is-active');
        })
    }

    function clickItem() {
        $('.item .card').click(function () {
            window.location = $(this).find('a').attr('href');
        })
    }

    function navItem() {
        var hash = window.location.hash.substring(1);
        if (hash == 'andrew') {
            $('#andrew').addClass('active show');
            $('#andrew-tab').addClass('active show');
        } else if (hash == 'calvin') {
            $('#calvin').addClass('active show');
            $('#calvin-tab').addClass('active show');
        } else if (hash == 'shantusha') {
            $('#shantusha').addClass('active show');
            $('#shantusha-tab').addClass('active show');
        } else if (hash == 'stijn') {
            $('#stijn').addClass('active show');
            $('#stijn-tab').addClass('active show');
        }
    }

    scrollToId();
    toggleHamburger();
    clickItem();
    navItem();
})

$(window).scroll(function () {
    var logo = $('.main-logo'),
        scroll = $(window).scrollTop();

    if (scroll >= 100) {
        logo.addClass('shrink');
    } else {
        logo.removeClass('shrink');
    }
});