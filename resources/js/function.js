import AOS from "aos";

("use strict");
!(function () {
  // document.getElementsByTagName("main")[0].classList.add("aos");

  var e = {
    init: function () {
      e.aosFunc();
    },

    // START: 09 AOS Animation
    /* @required https://github.com/michalsnik/aos/tree/v2 */

    aosFunc: function () {
      const anim = document.querySelectorAll(".animated");
      const animRight = document.querySelectorAll(".animated_right");
      const animLeft = document.querySelectorAll(".animated_left");

      anim.forEach((div, i) => {
        div.dataset.aos = "fade-up";
        div.dataset.aosDelay = i * 50;
      });

      animRight.forEach((div, i) => {
        div.dataset.aos = "fade-right";
        div.dataset.aosDelay = i * 150;
      });

      animLeft.forEach((div, i) => {
        div.dataset.aos = "fade-left";
        div.dataset.aosDelay = i * 150;
      });
      // Removed the line causing the error as e.select is not a function
      // var aos = e.select(".aos");
      // Replaced with document.querySelector to check for an element with class 'aos'
      var aos = document.querySelector(".aos");
      if (aos) {
        // Checking if the element exists
        AOS.init({
          duration: 600,
          easing: "ease-in",
          disable: "mobile",
          startEvent: "load",
        });
      }
    },
    // END: AOS Animation

    // Assuming isVariableDefined was intended to check for the existence of the selected element
    isVariableDefined: function (variable) {
      return typeof variable !== "undefined" && variable !== null;
    },
  };
  e.init();
})();
