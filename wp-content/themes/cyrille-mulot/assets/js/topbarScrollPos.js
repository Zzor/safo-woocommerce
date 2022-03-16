$(window).scroll(function(){
  var scrollTop = $(window).scrollTop();

  if (scrollTop > 80) {
      $('#js-topbar').addClass('is-scrolled-down');
  } else {
      $('#js-topbar').removeClass('is-scrolled-down');
  }
});