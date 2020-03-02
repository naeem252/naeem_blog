$(document).ready(function(){
    var all_checkbox=$('.post_check');
    var for_check_var=false;
  $("#post_first_check").click(function(){

      if(for_check_var){
          all_checkbox.attr("checked",false);
          for_check_var=false;
      }else{
          all_checkbox.attr("checked",true);
          for_check_var=true;
      }
  });
    $(".chosen-select").chosen();
});