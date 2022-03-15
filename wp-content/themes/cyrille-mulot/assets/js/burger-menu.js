$(document).ready(function() {
  $('#js-burger').click(function() {
    $('.l-topnav__principal-nav').toggleClass('is-opened');
    $('.l-nav__bottom').toggleClass('is-active');
    $('.l-nav__burger span').toggleClass('is-active');
  });
});
