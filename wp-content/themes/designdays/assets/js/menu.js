let bars = true;
var navbar = $('.menu');
var logo = $('.logo');
var children = $('.children');

var sticky = navbar.offset().top;
window.onscroll = function() {
    stickyNav();
};

$('.menu ul').addClass('menu-list');
$('#bars').click(() => {
    if (bars) {
        $('#bar1').addClass('close');
        $('#bar2').addClass('close');
        $('#bar3').addClass('close');
        $('#mobile-menu').addClass('open');
        $('.menu ul').addClass('show');
        $('.menu').addClass('mobile');
        bars = false;
    } else {
        $('#bar1').removeClass('close');
        $('#bar2').removeClass('close');
        $('#bar3').removeClass('close');
        $('#mobile-menu').removeClass('open');
        $('.menu ul').removeClass('show');
        $('.menu').removeClass('mobile');
        bars = true;
    }
});

function stickyNav() {
    if (window.pageYOffset >= sticky) {
        navbar.addClass("sticky");
        logo.addClass("sticky");
        children.addClass("sticky");
    } else {
        navbar.removeClass("sticky");
        logo.removeClass("sticky");
        children.removeClass("sticky");
    }
}