$(document).ready(function(){
  //check if window scroll is < 100
  if($(window).scrollTop() < 100){
    $('#pageUp').fadeOut().hide();
  }

  //Check to see if the window is top if not then display button
  $(window).scroll(function(){
    if ($(this).scrollTop() > 100) {
      $('#pageUp').show().fadeIn();
    } else {
      $('#pageUp').fadeOut().hide();
    }
  });

  //Click event to scroll to top
  $('#pageUp a').click(function(){
    $('html, body').animate({scrollTop : 0},360);
    return false;
  });
  
});
