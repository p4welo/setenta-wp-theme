//$(window).scroll(function () {
//    var sc = $(window).scrollTop()
//    if (sc > 50) {
//        $("#menu").addClass("small")
//    } else {
//        $("#menu").removeClass("small")
//    }
//
//});

// Init Skrollr
//skrollr.init({
//    forceHeight: false
//});

//$(function(){
//    $('.carousel').carousel({
//        interval: 2000
//    });
//});

$("#slide-down").click(function() {
    $('html,body').animate({
            scrollTop: $("#main-content").offset().top},
        'slow');
});