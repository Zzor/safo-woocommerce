$("#js-infos-button").click(function(){
  $("#professional-form").removeClass("is-active");
  $("#js-service-button").removeClass("is-colored");
  $("#js-infos-button").addClass("is-colored");
  $("#particular-form").addClass("is-active");
});

$("#js-service-button").click(function(){
  $("#particular-form").removeClass("is-visible");
  $("#particular-form").removeClass("is-active");
  $("#js-infos-button").removeClass("is-colored");
  $("#js-service-button").addClass("is-colored");
  $("#professional-form").addClass("is-active");
});