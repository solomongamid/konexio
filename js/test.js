/*global $,alert,console*/
$(function () {
  "use strict";
  //Adjuste hearder height;
  var myHeader = $('.header');
  myHeader.height($(window).height());
  $(window).resize(function() {
      myHeader.height(($(window).height()));
      $('.bxslider').each(function  (event) {
        $(this).css('paddingTop',($(window).height()-$('.bxslider li').height())/2);
      });
  });
  //Links Add active class
  $('.links li').click(function () {
    $(this).addClass('active').siblings().removeClass('active');
  });
  //Adjuste hearder height;
  $('.bxslider').each(function  (event) {
    $(this).css('paddingTop',($(window).height()-$('.bxslider li').height())/2);
  });
  //function slider
  $('.bxslider').bxSlider({
    pager: false
  });
  //notre auto slider
  (function AutoSlider() {
    $('.slider .active').each(function () {
      if (!$(this).is(':last-child')){
      $(this).delay(3000).fadeOut(1000,function () {
         $(this).removeClass('active').next().addClass('active').fadeIn();
         AutoSlider();
      });
    }else {
      $(this).delay(3000).fadeOut(2000,function () {
         $(this).removeClass('active');
      $('.slider div').eq(0).addClass('active').fadeIn();
       AutoSlider();
      });

    }
    });
  }());

});
