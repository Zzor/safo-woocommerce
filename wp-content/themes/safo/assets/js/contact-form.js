$("#js-infos-button").click(function(){
  $("#js-service-form").removeClass("is-active");
  $("#js-service-button").removeClass("is-colored");
  $("#js-infos-button").addClass("is-colored");
  $("#js-info-form").addClass("is-active");
});

$("#js-service-button").click(function(){
  $("#js-info-form").removeClass("is-visible");
  $("#js-info-form").removeClass("is-active");
  $("#js-infos-button").removeClass("is-colored");
  $("#js-service-button").addClass("is-colored");
  $("#js-service-form").addClass("is-active");
});