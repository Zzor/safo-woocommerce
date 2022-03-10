(function () {
  $(window).scroll(function () { 
      var Num = $(window).scrollTop() / 500;
      var Num2 = $(window).scrollTop() * .0004; // higher number for more zoom
      var Num2mod = Num2 + 1;
      var Num3 = $(window).scrollTop() * .2; // Title speed
      var Num3mod = Num3 * 3;
      return $('.l-header__picture-shade').css('opacity', Num),
      $(".l-header__img").css({"transform":"scale(" + Num2mod + ")"}),
      $(".l-header__title").css({"margin-top":"+" + Num3mod + "px"});
  });
}.call(this));
