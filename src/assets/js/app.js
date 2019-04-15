(function ($) {

  Drupal.behaviors.sliderInit = {
    attach: function (context, settings) {
            $('.bdh-fiddler-slideshow--slides').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
                fade: true,
                asNavFor: '.bdh-fiddler-slideshow--nav',
                adaptiveHeight: true,
                autoplay: true,
                //variableWidth: true
                //autoplaySpeed: 2000,
            });

            $('.bdh-fiddler-slideshow--nav').slick({
                slidesToShow: 3,
                slidesToScroll: 1,
                //asNavFor: '.slider-for',
                dots: true,
                centerMode: true,
                focusOnSelect: true,
                asNavFor: '.bdh-fiddler-slideshow--slides',
                adaptiveHeight: true,
                //variableWidth: true
                //autoplay: true,
                //autoplaySpeed: 2000,
            });

    }
  };

})(jQuery);
