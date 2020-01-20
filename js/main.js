$(document).ready(function(){
    //search handling
    $('#search-icon').click(function(){
        $('.modal-div').css('display','block');
        $('.modal-form').addClass('form-animate');
        $('.modal-input').trigger('focus');
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

//    ajax request
    var offset=8;
    $("#load_more_btn").on('click',function (e) {
        e.preventDefault();
        $(this).css("display","none");
        $("#load_gif").css("display","block");
       $.get("ajax.php?load_more="+offset,function(data){
           console.log(data);
           $("#main_post_div").append(data);
           $("#load_gif").css("display","none");
           $("#load_more_btn").css("display","block");

       });
       offset+=2;

    });
    var offset_post=9;
    $("#load_more_btn_post").on('click',function (e) {
        e.preventDefault();
        $(this).css("display","none");
        $("#load_gif").css("display","block");
        $.get("ajax.php?load_more="+offset_post,function(data){
            console.log(data);
            $("#main_post_div").append(data);
            $("#load_gif").css("display","none");
            $("#load_more_btn").css("display","block");

        });
        offset+=2;

    });


})