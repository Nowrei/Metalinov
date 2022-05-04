$(document).ready(function () {
  $('.slider').slick({
      "setting-name": "setting-value"
  });
});

$('.multiple-items').slick({
  infinite: true,
  slidesToShow: 4,
  slidesToScroll: 3
});

$('.slider').slick({
  infinite: true,
  slidesToShow: 4,
  slidesToScroll: 2,
  autoplay: true,
autoplaySpeed: 3000,
});