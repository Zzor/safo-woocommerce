$(document).ready(function() {
  $('#js-burger').click(function() {
    $('.l-topnav__principal-nav').toggleClass('is-opened');
    $('.l-topnav__burger span').toggleClass('is-active');
  });
});
