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

      // Target elements to animate
      // ===============================
      if ($('.home').length) {
        $('.home .entry-content').attr('data-aos', 'fade-up');
      }

      $('.entry-surtitle').attr('data-aos', 'fade-up');
      $('.entry-title').attr('data-aos', 'fade-up');
      $('.entry-subtitle').attr('data-aos', 'fade-up');

      // Create universal targets
      // =================================
      var $fadeUp = $('.fade-up'),
          $isFadeUp = $fadeUp.length,
          $fadeRight = $('.fade-right'),
          $isFadeRight = $fadeRight.length,
          $fadeLeft = $('.fade-left'),
          $isFadeLeft = $fadeLeft.length;

      if ($isFadeUp) {
        $fadeUp.attr('data-aos', 'fade-up');
      }
      
      if ($isFadeRight) {
        $fadeRight.attr('data-aos', 'fade-right');
      }
      
      if ($isFadeLeft) {
        $fadeLeft.attr('data-aos', 'fade-left');
      }
    }

  };
  
  ENHANCEMENTS.init();

}); //jQuery