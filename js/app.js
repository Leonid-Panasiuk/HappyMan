new WOW().init();

// Animate loader
$(window).on('load', function() {

  $(".preload").fadeOut(2000);
});

//1
$(document).ready(function () {
  $(".show-btn-1").click(function () {
      $(".text-show-1").toggle(700);
  });
});

//2
$(document).ready(function () {
  $(".show-btn-2").click(function () {
      $(".text-show-2").toggle(700);
  });
});

//3
$(document).ready(function () {
  $(".show-btn-3").click(function () {
      $(".text-show-3").toggle(700);
  });
});

//4
$(document).ready(function () {
  $(".show-btn-4").click(function () {
      $(".text-show-4").toggle(700);
  });
});

//5
$(document).ready(function () {
  $(".show-btn-5").click(function () {
      $(".text-show-5").toggle(700);
  });
});

//selected delivery

$(function() {
  $("#graph_select").change(function() {
    if ($("#new-post").is(":selected")) {
      $(".show-form").show(700);
      $(".show-form").hide(700);
    } else {
      $(".show-form").hide(700);
      $(".show-form").show(700);
    }
  }).trigger('change');
});

//ANCHORS

$(document).on('click', 'a[href^="#"]', function (event) {
  event.preventDefault();
  $('html, body').animate({
    scrollTop: $($.attr(this, 'href')).offset().top
  }, 1000);
});


