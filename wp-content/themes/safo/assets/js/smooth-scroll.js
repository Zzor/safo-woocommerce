var $heroButtonScrollDown = $('.l-header__scroll-down');

 // Arrow Scroll down animation
 $heroButtonScrollDown.click(function(e){
  e.preventDefault();

  $('html, body').animate({
      scrollTop: $($(this).attr('href')).offset().top
  });
});