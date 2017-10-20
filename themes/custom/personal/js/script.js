/**
 * @file
 * Custom JQuery scripts in this file.
 */

(function ($) {
  'use strict';
  Drupal.behaviors.personal = {
    attach: function (context, settings) {
      $('#contact-message-feedback-form button').addClass('sqs-system-button sqs-editable-button');
      $('#contact-message-feedback-form button').removeClass('button--primary js-form-submit form-submit btn-primary btn');

      // $(document).ready(function () {

      //   $(window).scroll(function () {
      //     var scroll = $(window).scrollTop();
      //     if (scroll >= 100) {
      //       $('body').addClass('scrolling');
      //     }
      //     else {
      //       $('body').removeClass('scrolling');
      //     }
      //   });

      //   var device_width = $(window).width();

      //   // Provide for classes based on various widths.
      //   if (device_width <= 480) {
      //     $('html').addClass('mobile').removeClass('desktop').removeClass('tablet');
      //   }
      //   if (device_width > 480 && device_width < 768) {
      //     $('html').addClass('tablet').removeClass('mobile').removeClass('desktop');
      //   }
      //   if (device_width >= 768) {
      //     $('html').addClass('desktop').removeClass('mobile').removeClass('tablet');
      //   }
      //   $('.js #mobile-nav').click(function (e) {
      //     $('body').toggleClass('active');
      //     e.preventDefault();
      //   });

      //   $('.js .submenu-button').click(function (e) {
      //     $(this).parent().toggleClass('open');
      //   });
      // });

      // $(window).resize(function () {
      //   var device_width = $(window).width();
      //   if (device_width <= 480) {
      //     $('html').addClass('mobile').removeClass('desktop').removeClass('tablet');
      //   }
      //   if (device_width > 480 && device_width < 768) {
      //     $('html').addClass('tablet').removeClass('mobile').removeClass('desktop');
      //   }
      //   if (device_width >= 768) {
      //     $('html').addClass('desktop').removeClass('mobile').removeClass('tablet');
      //   }
      // });
    }
  };

})(jQuery);