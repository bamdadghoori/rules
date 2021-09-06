let options = {

    // placeholder: "تاریخ",
    twodigit: true,
    nextButtonIcon: "././images/complement-information/timeir_next.png",
    previousButtonIcon: "././images/complement-information/timeir_prev.png",
    markToday: true,
    // gotoToday: true,
    forceFarsiDigits: true,

}




kamaDatepicker('membership-date', options);
//modal
$(".new").click(function(){
    $("html,body,.container-fluid").addClass("bg-modal")
    $(".wrapper-new").css("display","flex")
    
  })
  $(".wrapper-new .fa-window-close").click(function(){
    $(this).parent().parent().parent().css("display","none")
    $("html,body,.container-fluid").removeClass("bg-modal")
    
  })
  $("#membership-date").focus(function(){
    $(".floating-label-date").addClass("blurLabel-date")
})
$("#membership-date").blur(function(){
  // alert("x")
  if(!$(this).val()){
     $(".floating-label-date").removeClass("blurLabel-date");
   }
   else{
       $(".floating-label-date").addClass("blurLabel-date");
   }
})