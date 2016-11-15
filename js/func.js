$(function () {
  "use strict";
  $('.links li a').click(function() {
    $('html, body').animate({
      scrollTop:$('#' + $(this).data('value')).offset().top
    }, 2000);
  });
  //main-act  auto slider
  (function AutoSlider() {
    $('.slid .act').each(function () {
      if (!$(this).is(':last-child')){
      $(this).fadeOut(3000,function () {
         $(this).removeClass('act').next().addClass('act').fadeIn();
         AutoSlider();
      });
    }else {
      $(this).fadeOut(500,function () {
         $(this).removeClass('act');
      $('.slid div').eq(0).addClass('act').fadeIn();
       AutoSlider();
      });

    }
    });
  }());
  //notre auto slider
  (function AutoSlider() {
    $('.slider .active').each(function () {
      if (!$(this).is(':last-child')){
      $(this).delay(2000).fadeOut(2000,function () {
         $(this).removeClass('active').next().addClass('active').fadeIn();
         AutoSlider();
      });
    }else {
      $(this).delay(1000).fadeOut(1000,function () {
         $(this).removeClass('active');
      $('.slider div').eq(0).addClass('active').fadeIn();
       AutoSlider();
      });

    }
    });
  }());
  //Check to see if the window is top if not then display button
    var scrollButtom = $('#go-top');
    $(window).scroll(function() {

  if ($(this).scrollTop() >= 700) {
    scrollButtom.show();
  }else {
    scrollButtom.hide();
  }
  //click button to scroll Top
  scrollButtom.click(function () {
    $('html, body').animate({
      scrollTop:0
    },700);
  });
    });

});
