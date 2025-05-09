$(document).ready(function () {
  $(".navbar-toggler").click(function () {
    $(".navbar-collapse").slideToggle(300);
  });

  smallScreenMenu();
  let temp;
  function resizeEnd() {
    smallScreenMenu();
  }

  $(window).resize(function () {
    clearTimeout(temp);
    temp = setTimeout(resizeEnd, 100);
    resetMenu();
  });
});

const subMenus = $(".sub-menu");
const menuLinks = $(".menu-link");

function smallScreenMenu() {
  if ($(window).innerWidth() <= 992) {
    menuLinks.each(function (item) {
      $(this).click(function () {
        $(this).next().slideToggle();
      });
    });
  } else {
    menuLinks.each(function (item) {
      $(this).off("click");
    });
  }
}

function resetMenu() {
  if ($(window).innerWidth() > 992) {
    subMenus.each(function (item) {
      $(this).css("display", "none");
    });
  }
}

/*global $*/
$(document).ready(function () {
  "use strict";
  var heading = $("#our-services .desc .heading h1"),
    txt = $("#our-services .desc .text"),
    serviceItem = $("#our-services .services .column .service"),
    tl = new TimelineLite();

  tl.from(heading, 0.3, { opacity: 0, y: -20 }, "+=0.3")
    .from(txt, 0.3, { opacity: 0, y: -20 })
    .staggerFrom(serviceItem, 0.2, { x: -10, autoAlpha: 0 }, 0.1);
});
