$(document).ready(function ($) {

  //$('.sub-menu').addClass('dropdown-menu');
  //$('.menu-item-has-children a').addClass('dropdown-toggle').dropdown();

  var navbarElement = $("nav");

  var didScroll;
  var lastScrollTop = 0;
  var delta = 5;
  var navbarHeight = navbarElement.outerHeight();

  $(window).scroll(function(event){
    didScroll = true;
  });

  setInterval(function() {
    if (didScroll) {
      hasScrolled();
      didScroll = false;
    }
  }, 250);

  function hasScrolled() {
    var st = $(this).scrollTop();

    // Make sure they scroll more than delta
    if(Math.abs(lastScrollTop - st) <= delta)
      return;

    // If they scrolled down and are past the navbar, add class .nav-up.
    // This is necessary so you never see what is "behind" the navbar.
    if (st > lastScrollTop && st > navbarHeight){
      // Scroll Down
      navbarElement.removeClass('nav-down').addClass('nav-up');
    } else {
      // Scroll Up
      if(st + $(window).height() < $(document).height()) {
        navbarElement.removeClass('nav-up').addClass('nav-down');
      }
    }

    lastScrollTop = st;
  }

  initYear();
  if ($('.owl-carousel').length > 0) {
    initOwlCarousel();
  }

  function initYear() {
    var yearCopy = $('#year-copy'), d = new Date();
    if (d.getFullYear() === 2013) {
      yearCopy.html('2013');
    } else {
      yearCopy.html('2013-' + d.getFullYear().toString());
    }
  }

  function initOwlCarousel() {
    $('.owl-carousel').owlCarousel({
      items: 4,
      loop: true,
      margin: 10,
      autoplay: true,
      autoplayTimeout: 2000,
      autoplayHoverPause: true
    });
  }
});