jQuery(function($) {

  'use strict';

  var ENHANCEMENTS;

  // ================================
  // Enhancements
  // ================================

    ENHANCEMENTS = {

    init: function() {
      this.navigationClose(),
      this.scrollDown(),
      this.scrollUp(),
      this.animations();
    },

    // Navigation auto-close on click
    // ==============================================
    navigationClose: function() {
      $(document).on('click', function(event) {
        if (!$(event.target).closest('.main-navigation').length) {
          $('.main-navigation').removeClass('toggled');
        }
      });
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
    },

    // Animate on scroll library
    // ==============================================
    animations: function() {
      
      // Initiate the animations
      // ==========================
      AOS.init({
        duration: 1000
      });

      // Target elements to animate
      // ===============================
      // $('.entry-title').attr('data-aos', 'fade-up');
    }

  };
  
  ENHANCEMENTS.init();

}); //jQuery