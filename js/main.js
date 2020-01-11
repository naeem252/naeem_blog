$(document).ready(function(){
    $('#search-icon').click(function(){
        $('.modal-div').css('display','block');
        $('.modal-form').addClass('form-animate');
    });

    $('.close-icon').click(function(){
        
        
        $('.modal-form').removeClass('form-animate');
        $('.modal-form').addClass('form-animate-close');
        setTimeout(function(){
            $('.modal-div').css('display','none');
            $('.modal-form').removeClass('form-animate-close');
        },500);
    });


// Accordion
  $('.accordion').accordion({
    active: false,
  collapsible: true
  });

  $('.replies-heading').on('click',function(){
    if($(this).find('i').hasClass('fa-chevron-down')){
      $(this).find('i').removeClass('fa-chevron-down');
       $(this).find('i').addClass('fa-chevron-up');
    }else{
      $(this).find('i').removeClass('fa-chevron-up');
       $(this).find('i').addClass('fa-chevron-down');
    }
  });

  // Slick functionality

    $('.mySlick').slick({
       slidesToShow: 2,
      slidesToScroll: 2,
    });


    // factorieal

   function fac(num){
       if(num==0){
           return 1;
       } else{
           return num*fac(num-1);
       }
   }
 
    console.log(fac(5));
})