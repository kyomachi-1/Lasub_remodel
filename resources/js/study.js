$(document).ready(function(){
    
    $('.card_front_text').show();
    $('.card_back_text').hide();
  
    $('.button').click(function () {
  
      $('.container-fluid').toggleClass('switch');
  
      if($('.container-fluid').hasClass('switch')){
  
        $('#card_front_text').hide();
        $('#card_back_text').show();
  
      }else{
  
        $('#card_front_text').show();
        $('#card_back_text').hide();
  
      }
    });
  });