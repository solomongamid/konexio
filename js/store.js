$(function(){

  //main-act  auto slider
  (function AutoSlider() {
    $('.slid .act').each(function () {
      if (!$(this).is(':last-child')){
      $(this).fadeOut(10000,function () {
         $(this).removeClass('act').next().addClass('act').fadeIn();
         AutoSlider();
      });
    }else {
      $(this).fadeOut(10000,function () {
         $(this).removeClass('act');
      $('.slid div').eq(0).addClass('act').fadeIn();
       AutoSlider();
      });

    }
    });
  }());

});
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
