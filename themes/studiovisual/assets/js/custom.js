// Preloader
$(document).ready(function () {
    setTimeout(function () {
        $("body").addClass("loaded");
        $('.preloader').fadeOut();
    }, 2000);
});

// Tabs
$(function () {
    var tab = $('.button a');
    tab.on('click', function (event) {
        event.preventDefault();
        tab.removeClass('active');
        $(this).addClass('active');
        tab_content = $(this).attr('href');
        $('div[id$="tab-content"]').removeClass('active');
        $(tab_content).addClass('active');
    });
});