(function ($) {

  $(document).ready(function () {
    init_menu($);


  });

})(jQuery)

/**
 * Initialise le menu du site
 * @param $
 */
function init_menu($) {
  $('[data-trigger="menu-toggle"]').click(function () {
    $('#menu_header').toggleClass('is-active');
    $(this).toggleClass('is-active');
  });
}

(function ($) {

  $(document).ready(function () {
    // SLider homepage


    $('.home-slider').slick({
      infinite: true,
      slidesToShow: 1,
      autoplay:false,
      dots: true,
      arrows: false,
      appendDots: $('.home-slider .slick-slider-dots'),

    });
  });

})(jQuery)