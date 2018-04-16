(function ($) {
  Drupal.behaviors.photoBlog = {
    attach: function (context, settings) {
      $(window).load(function() {
          $('.flexslider').flexslider();
          });
        }
      };
}(jQuery));
