import $ from "jquery";

window.jQuery = window.$ = $;

import "magnific-popup/dist/jquery.magnific-popup";

import bootstrap from "bootstrap/dist/js/bootstrap";
window.bootstrap = bootstrap;

// FontAwesome
import "@fortawesome/fontawesome-free";

import "./mobilemenu";

import "owl.carousel/dist/owl.carousel.min.js";

import Isotope from "isotope-layout";

import { CountUp } from "countup.js";

// Waypoints
import "waypoints/src/waypoint.js";

// Slick Slider
import "slick-slider/slick/slick.min.js";

import "./SmoothScroll";

import "./jquery.mousewheel";

(function ($) {
  "use strict";

  $(window).on("load", function (event) {
    setTimeout(function () {
      $(".preloader").fadeToggle();
    }, 200);
  });

  const counterElements = document.querySelectorAll(".counter");

  counterElements.forEach((el) => {
    const endVal = parseInt(el.innerText);
    const countUp = new CountUp(el, endVal);
    if (!countUp.error) {
      countUp.start();
    } else {
      console.error(countUp.error);
    }
  });

  // page-progress
  var progressPath = document.querySelector(".progress-wrap path");
  var pathLength = progressPath.getTotalLength();
  progressPath.style.transition = progressPath.style.WebkitTransition = "none";
  progressPath.style.strokeDasharray = pathLength + " " + pathLength;
  progressPath.style.strokeDashoffset = pathLength;
  progressPath.getBoundingClientRect();
  progressPath.style.transition = progressPath.style.WebkitTransition =
    "stroke-dashoffset 10ms linear";
  var updateProgress = function () {
    var scroll = $(window).scrollTop();
    var height = $(document).height() - $(window).height();
    var progress = pathLength - (scroll * pathLength) / height;
    progressPath.style.strokeDashoffset = progress;
  };
  updateProgress();
  $(window).scroll(updateProgress);
  var offset = 50;
  var duration = 550;
  jQuery(window).on("scroll", function () {
    if (jQuery(this).scrollTop() > offset) {
      jQuery(".progress-wrap").addClass("active-progress");
    } else {
      jQuery(".progress-wrap").removeClass("active-progress");
    }
  });
  jQuery(".progress-wrap").on("click", function (event) {
    event.preventDefault();
    jQuery("html, body").animate({ scrollTop: 0 }, duration);
    return false;
  });

  // stiky js
  var windowOn = $(window);
  windowOn.on("scroll", function () {
    var scroll = windowOn.scrollTop();
    if (scroll < 100) {
      $("#tx-header-sticky").removeClass("header-sticky");
    } else {
      $("#tx-header-sticky").addClass("header-sticky");
    }
  });

  // mobile menu
  var vlMenuWrap = $(".tx-mobile-menu-active > ul").clone();
  var vlSideMenu = $(".tx-offcanvas-menu nav");
  vlSideMenu.append(vlMenuWrap);
  if ($(vlSideMenu).find(".sub-menu, .tx-mega-menu").length != 0) {
    $(vlSideMenu)
      .find(".sub-menu, .tx-mega-menu")
      .parent()
      .append(
        '<button class="tx-menu-close"><i class="fas fa-chevron-right"></i></button>'
      );
  }

  var sideMenuList = $(
    ".tx-offcanvas-menu nav > ul > li button.tx-menu-close, .tx-offcanvas-menu nav > ul li.has-dropdown > a"
  );
  $(sideMenuList).on("click", function (e) {
    console.log(e);
    e.preventDefault();
    if (!$(this).parent().hasClass("active")) {
      $(this).parent().addClass("active");
      $(this).siblings(".sub-menu, .tx-mega-menu").slideDown();
    } else {
      $(this).siblings(".sub-menu, .tx-mega-menu").slideUp();
      $(this).parent().removeClass("active");
    }
  });

  $(".tx-offcanvas-toggle").on("click", function () {
    $(".tx-offcanvas").addClass("tx-offcanvas-open");
    $(".tx-offcanvas-overlay").addClass("tx-offcanvas-overlay-open");
  });

  $(".tx-offcanvas-close-toggle,.tx-offcanvas-overlay").on(
    "click",
    function () {
      $(".tx-offcanvas").removeClass("tx-offcanvas-open");
      $(".tx-offcanvas-overlay").removeClass("tx-offcanvas-overlay-open");
    }
  );

  // progress
  function animateProgressBars() {
    const progressBars = document.querySelectorAll(".tx-progress-bar-fill");
    progressBars.forEach((bar) => {
      const percentage = bar.getAttribute("data-percentage");
      bar.style.width = percentage + "%";
    });
  }

  window.addEventListener("load", animateProgressBars);

  // popup
  if ($(".popup-image").length > 0) {
    $(".popup-image").magnificPopup({
      type: "image",
    });
  }
  if ($(".popup-video").length > 0) {
    $(".popup-video").magnificPopup({
      type: "iframe",
    });
  }

  if ($(".openVideo").length > 0) {
    $(".openVideo").magnificPopup({
      type: "inline",
      callbacks: {
        open: function () {
          $("html").css("margin-right", 0);
          // Play video on open:
          // $(this.content).find("video")[0].play();
        },
        close: function () {
          // Reset video on close:
          $(this.content).find("video")[0].load();
        },
      },
    });
  }

  // $(".openVideo").magnificPopup({
  //   type: "inline",
  //   callbacks: {
  //     open: function () {
  //       $("html").css("margin-right", 0);
  //       // Play video on open:
  //       // $(this.content).find("video")[0].play();
  //     },
  //     close: function () {
  //       // Reset video on close:
  //       $(this.content).find("video")[0].load();
  //     },
  //   },
  // });

  // $(".openVideo").magnificPopup({
  //   type: "inline",
  //   callbacks: {
  //     open: function () {
  //       // $("html").css("margin-right", 0);
  //       // Play video on open:
  //       $(this.content).find("video")[0].play();
  //     },
  //     close: function () {
  //       // Reset video on close:
  //       $(this.content).find("video")[0].load();
  //     },
  //   },
  // });

  // Brand Logo-01
  $(".tx-brand-logo-active").slick({
    autoplay: true,
    autoplaySpeed: 0,
    autoWidth: true,
    speed: 5000,
    arrows: false,
    swipe: false,
    slidesToShow: 6,
    cssEase: "linear",
    pauseOnFocus: false,
    pauseOnHover: false,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 4,
          slidesToScroll: 1,
          infinite: true,
          dots: true,
        },
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
        },
      },
    ],
  });

  // testimonial slider home-01
  $(".tx-testimonial-active").slick({
    dots: true,
    infinite: true,
    speed: 300,
    slidesToShow: 2,
    slidesToScroll: 1,
    arrows: false,
    // autoplay: true,
    // autoplaySpeed: 3000,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
          infinite: true,
          dots: true,
        },
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
    ],
  });

  $(".tx-testimonial-active-5").slick({
    dots: true,
    infinite: true,
    speed: 300,
    slidesToShow: 2,
    slidesToScroll: 1,
    arrows: false,
    //autoplay: true,
    // autoplaySpeed: 1000,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
          infinite: true,
          dots: true,
        },
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
    ],
  });

  // $('#testimo4').owlCarousel({
  //   loop: true,
  //   margin: 30,
  //   dots: false,
  //   nav: true,
  //   items: 2,
  //   navText : ['<i class="fa-regular fa-arrow-left"></i>','<i class="fa-regular fa-arrow-right"></i>'],
  //   responsive:{
  //     0:{
  //         items:1,
  //         nav:true
  //     },
  //     600:{
  //         items:2,
  //         nav:true
  //     },
  //     1000:{
  //         items:2,
  //         nav:true,
  //         loop:true
  //     }
  //   }
  // })

  // testimonial slider home-02
  $(".tx-testimonial-active-2").slick({
    dots: false,
    infinite: true,
    speed: 300,
    slidesToShow: 3,
    slidesToScroll: 1,
    arrows: true,
    // autoplay: true,
    // autoplaySpeed: 3000,
    // prevArrow:'<span class="testiarrow-2 prev_arrow3"><i class="fa-regular fa-angle-right"></i></span>',
    // nextArrow:'<span class="testiarrow-2 next_arrow3"><i class="fa-regular fa-angle-left"></i></span>',
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
          infinite: true,
        },
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
    ],
  });

  // testimonial slider home-02
  $(".tx-testimonial-active-3").slick({
    dots: true,
    infinite: true,
    speed: 300,
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    // autoplay: true,
    // autoplaySpeed: 3000,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          infinite: true,
          dots: true,
        },
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
    ],
  });

  // testimonial team home-02
  $(".tx-team2").slick({
    dots: false,
    infinite: true,
    speed: 300,
    slidesToShow: 3,
    slidesToScroll: 1,
    arrows: true,
    // autoplay: true,
    // autoplaySpeed: 0,
    // speed: 5000,
    // accessibility: true,
    prevArrow: $(".prev-btn2"),
    nextArrow: $(".next-btn2"),
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
          infinite: true,
        },
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
    ],
  });

  // studies active home-03
  $(".tx-studies-active").slick({
    arrows: true,
    infinite: true,
    speed: 300,
    slidesToShow: 3,
    slidesToScroll: 1,
    // centerMode: true,
    // centerPadding: '60px',
    // autoplay: true,
    // autoplaySpeed: 3000,
    prevArrow: $(".prev-btn1"),
    nextArrow: $(".next-btn1"),
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
          infinite: true,
        },
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
    ],
  });

  // Gallery Active Home 3
  $("#gallery3").owlCarousel({
    loop: true,
    margin: 30,
    dots: false,
    nav: true,
    items: 3,
    navText: [
      '<i class="fa-regular fa-arrow-left"></i>',
      '<i class="fa-regular fa-arrow-right"></i>',
    ],
    responsive: {
      0: {
        items: 1,
        nav: true,
      },
      600: {
        items: 2,
        nav: true,
      },
      1000: {
        items: 3,
        nav: true,
        loop: true,
      },
    },
  });

  // testimonial active home-03
  $(".tx-testimonial-active-4").slick({
    dots: false,
    infinite: true,
    speed: 300,
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    // autoplay: true,
    // autoplaySpeed: 3000,

    prevArrow: $(".prev-btn"),
    nextArrow: $(".next-btn"),
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          infinite: true,
          dots: true,
        },
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
    ],
  });

  // Team Active 01
  $("#test").owlCarousel({
    loop: true,
    margin: 30,
    dots: false,
    nav: true,
    items: 4,
    navText: [
      '<i class="fa-light fa-arrow-left"></i>',
      '<i class="fa-light fa-arrow-right"></i>',
    ],
    responsive: {
      0: {
        items: 1,
        nav: true,
      },
      600: {
        items: 2,
        nav: true,
      },
      1000: {
        items: 4,
        nav: true,
        loop: true,
      },
    },
  });

  // Team Active About us
  $("#test2").owlCarousel({
    loop: true,
    margin: 30,
    dots: false,
    nav: true,
    items: 4,
    navText: [
      '<i class="fa-light fa-arrow-left"></i>',
      '<i class="fa-light fa-arrow-right"></i>',
    ],
    responsive: {
      0: {
        items: 1,
        nav: true,
      },
      600: {
        items: 2,
        nav: true,
      },
      1000: {
        items: 4,
        nav: true,
        loop: true,
      },
    },
  });

  // Gallery Feature Programs Active
  $("#gallery_services").owlCarousel({
    autoplay: false,
    loop: false,
    margin: 24,
    dots: false,
    nav: true,
    items: 4,
    navText: [
      '<img src="/img/icons/caseRight.svg" alt="">',
      '<img src="/img/icons/caseRight.svg" alt="">',
    ],
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 2,
      },
      1000: {
        items: 3,
      },
      1300: {
        items: 4,
      },
    },
  });

  // Ads Banner Gallery Active
  $("#ads_banner_gallery").owlCarousel({
    autoplay: true,
    loop: true,
    margin: 24,
    dots: false,
    nav: true,
    autoplayHoverPause: true,
    items: 1,
    navText: [
      // '<i class="fa-light fa-arrow-left"></i>',
      // '<i class="fa-light fa-arrow-right"></i>',
      '<img src="/img/icons/caseRight.svg" alt="">',
      '<img src="/img/icons/caseRight.svg" alt="">',
    ],
  });

  // Gallery Active 01
  $("#gallery1").owlCarousel({
    loop: true,
    margin: 30,
    dots: false,
    nav: true,
    items: 4,
    navText: [
      '<img src="/img/icons/caseRight.svg" alt="">',
      '<img src="/img/icons/caseRight.svg" alt="">',
    ],
    responsive: {
      0: {
        items: 1,
        nav: true,
      },
      600: {
        items: 3,
        nav: true,
      },
      1000: {
        items: 4,
        nav: true,
        loop: true,
      },
    },
  });

  // Testimonial Active 01
  $("#testimoni1").owlCarousel({
    autoplay: false,
    loop: true,
    margin: 30,
    dots: false,
    nav: true,
    items: 2,
    navText: [
      '<img src="/img/icons/caseRight.svg" alt="">',
      '<img src="/img/icons/caseRight.svg" alt="">',
    ],
    responsive: {
      0: {
        items: 1,
        nav: true,
      },
      600: {
        items: 2,
        nav: true,
      },
      1000: {
        items: 2,
        nav: true,
        loop: true,
      },
    },
  });

  // Gallery Active home 02
  $("#gallery2").owlCarousel({
    loop: true,
    margin: 30,
    dots: false,
    nav: true,
    items: 3,
    navText: [
      '<i class="fa-regular fa-angle-left"></i>',
      '<i class="fa-regular fa-angle-right"></i>',
    ],
    responsive: {
      0: {
        items: 1,
        nav: true,
      },
      600: {
        items: 2,
        nav: true,
      },
      1000: {
        items: 3,
        nav: true,
        loop: true,
      },
    },
  });

  // Team Active home 02
  $("#teamm2").owlCarousel({
    loop: true,
    margin: 30,
    dots: false,
    nav: true,
    items: 3,
    navText: [
      '<i class="fa-regular fa-angle-left"></i>',
      '<i class="fa-regular fa-angle-right"></i>',
    ],
    responsive: {
      0: {
        items: 1,
        nav: true,
      },
      600: {
        items: 2,
        nav: true,
      },
      1000: {
        items: 3,
        nav: true,
        loop: true,
      },
    },
  });

  $("#owl-carousel").owlCarousel({
    loop: true,
    margin: 30,
    dots: true,
    nav: true,
    items: 2,
  });

  // testimonial 2 test
  $(".tx-test-2-act")
    .on("init", function (event, slick) {
      console.log("Slick initialized");
    })
    .slick({
      dots: true,
      margin: "0 15px",
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      centerMode: true,
      centerPadding: "0px",
      arrows: false,
      responsive: [
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 1,
            centerMode: true,
          },
        },
      ],
    });

  // testimonial slider home-04
  $(".tx-testimonial-active-6").slick({
    dots: false,
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    margin: 30,
    arrows: true,
    // autoplay: true,
    // autoplaySpeed: 3000,
    prevArrow:
      '<span class="arrow-4 prev_arrow4"><i class="fa-regular fa-arrow-right"></i></span>',
    nextArrow:
      '<span class="arrow-4 next_arrow4"><i class="fa-regular fa-arrow-left"></i></span>',
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
          infinite: true,
          dots: true,
        },
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
    ],
  });

  // Gallery Active Home 01
  $(".tx-gallery-active").slick({
    dots: false,
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    margin: 24,
    arrows: true,
    // autoplay: true,
    //speed: 3000,
    // accessibility: true,
    prevArrow: $(".prev-btn"),
    nextArrow: $(".next-btn"),

    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
          infinite: true,
        },
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
    ],
  });

  // Gallery Active Home 02
  $(".tx-gallery-active-2").slick({
    dots: false,
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    margin: 30,
    arrows: true,
    // autoplay: true,
    // autoplaySpeed: 0,
    // speed: 5000,
    // accessibility: true,
    prevArrow: $(".prev-btn"),
    nextArrow: $(".next-btn"),

    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
          infinite: true,
          dots: true,
        },
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
    ],
  });

  // About Us
  $(".tx-about-inner-box-active").slick({
    dots: false,
    infinite: true,
    speed: 300,
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    // autoplay: true,
    // autoplaySpeed: 3000,
    prevArrow:
      '<span class="arrow-7 prev_arrow7"><i class="fa-regular fa-arrow-right"></i></span>',
    nextArrow:
      '<span class="arrow-7 next_arrow7"><i class="fa-regular fa-arrow-left"></i></span>',
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          infinite: true,
          dots: true,
        },
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
    ],
  });

  // pricing plan Brand
  $(".tx-brand-inner-active").slick({
    autoplay: true,
    autoplaySpeed: 0,
    speed: 5000,
    arrows: false,
    swipe: false,
    slidesToShow: 5,
    cssEase: "linear",
    pauseOnFocus: false,
    pauseOnHover: false,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
          infinite: true,
          dots: true,
        },
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
    ],
  });

  var owl = $("#mousewheel_carousel");
  owl.owlCarousel({
    loop: false,
    nav: false,
    margin: 10,
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 2,
      },
      960: {
        items: 3,
      },
      1200: {
        items: 4,
      },
    },
  });
  owl.on("mousewheel", ".owl-stage", function (e) {
    if (e.deltaY > 0) {
      owl.trigger("prev.owl");
    } else {
      owl.trigger("next.owl");
    }
    e.preventDefault();
  });

  $(".mousewheel_scroll").on("mousewheel", function (event) {
    console.log(event.deltaX, event.deltaY, event.deltaFactor);
  });

  // $(window).on('load', function() {
  //   $("#loading").fadeOut(500);
  // });

  // $(window).on('load', function() {
  //   $("#loading2").fadeOut(500);
  // });

  // $(window).on('load', function() {
  //   $("#loading4").fadeOut(500);
  // });

  // Menu Active
  var cururl = window.location.pathname;
  var curpage = cururl.substr(cururl.lastIndexOf("/") + 1);
  var hash = window.location.hash.substr(1);
  if ((curpage == "" || curpage == "/" || curpage == "admin") && hash == "") {
  } else {
    $(".tx-main-menu .nav_link_parent").each(function () {
      $(this).removeClass("active");
    });
    if (hash != "")
      $(".tx-main-menu .nav_link_parent a[href*='" + hash + "']")
        .parents(".nav_link_parent")
        .addClass("active");
    else
      $(".tx-main-menu .nav_link_parent a[href*='" + curpage + "']")
        .parents(".nav_link_parent")
        .addClass("active");
  }
  if ((curpage == "" || curpage == "/" || curpage == "admin") && hash == "") {
  } else {
    $(".tx-main-menu .sub-menu a").each(function () {
      $(this).removeClass("active");
    });
    if (hash != "")
      $(".tx-main-menu .sub-menu a[href*='" + hash + "',]").removeClass(
        "active"
      );
    else
      $(".tx-main-menu .sub-menu a[href*='" + curpage + "']").addClass(
        "active"
      );
  }

  // // aos
  // AOS.init({
  //   duration: 600,
  //   easing: "ease-in-sine",
  //   disable: "mobile",
  //   startEvent: "load",
  // });
  // AOS.init({ disable: "mobile" });
})(jQuery);
