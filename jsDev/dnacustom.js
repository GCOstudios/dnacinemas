jQuery(function($) {

  'use strict';

  var ENHANCEMENTS;

  // ================================
  // Home
  // ================================

    ENHANCEMENTS = {

    init: function() {
      this.scrollDown(),
      this.scrollUp();
      // this.animations();
    },

    // Hero Scroll Down Arrow
    // ==============================================
    scrollDown: function() {
      $(".scroll-down").on('click', function() {
        $('html, body').animate({
            scrollTop: $(".entry-content").offset().top
        }, 1500);
      });
    },

    // Scroll Up Button
    // ==============================================
    scrollUp: function() {
      $(".scroll-up").on('click', function() {
        $('html, body').animate({
            scrollTop: 0
        }, 1000);
      });
    }

    // Animate on scroll library
    // ==============================================
    // animations: function() {
    //   AOS.init({
    //     duration: 1000
    //   });
    // }

  };
  
  ENHANCEMENTS.init();

}); //jQuery