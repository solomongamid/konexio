$(function () {
  "use strict";
  alert("Hello! I am an alert box!!");
  $('.scrollTo').on('click', function() {
              $('html, body').animate({
             scrollTop: $(#About, #main-act, #team, #partners, #contact).offset();
         }, 2000);
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
