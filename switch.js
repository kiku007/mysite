$(function() {
  $('.switch').on('click', function() {
    $('.card').toggleClass('is-surface').toggleClass('is-reverse');
  });
  ScrollReveal().reveal('.page-about3', {
    duration: 500,
    viewFactor: 0.5
  });
});