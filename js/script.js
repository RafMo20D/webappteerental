$(function () {
    'use strict';
    //scroll
    $(window).scroll(function () {
        var navbar = $('.navbar');
        if ($(window).scrollTop() >= navbar.height()) {
            navbar.addClass('scrolled');
        } else {
            navbar.removeClass('scrolled');
        }
    });

    
    
    //scrollspy
    $('body').scrollspy({target: '.navbar', offset: 50});
    $('#navbar a').on('click', function (event) {
        if (this.hash !== '') {
            event.preventDefault();
            var hash = this.hash;
            $('html,body').animate({
                scrollTop: $(hash).offset().top
                
            }, 1000, function () {
                window.location.hash = hash;
            });
        }
    });


    //backTop
    var back = $('#back-top');
    $(window).scroll(function () {
        if ($(this).scrollTop() >= 600) {
            back.show();
        } else {
            back.hide();
        }
    });
    back.on('click', function () {
        $('html,body').animate({scrollTop: 0}, 1000);
    });

});




