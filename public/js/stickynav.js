$(document).ready(function () {
    var scrollTop = $(document).scrollTop();
    if (scrollTop > 0) {
        console.log(scrollTop);
        $('.nav').removeClass('navbar-static-top').addClass('navbar-fixed-top');
    } else {
        $('.nav').removeClass('navbar-fixed-top').addClass('navbar-static-top');
    }
});