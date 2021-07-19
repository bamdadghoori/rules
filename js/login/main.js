$(document).ready(function(){

    $(".blur").blur(function(){
        if(!$(this).val()){
        $(this).next().removeClass("blurLabel");
     }
     else{
         $(this).next().addClass("blurLabel");
     }
     
    })
    
    $(".nav-link").click(function()
  {
 $(".nav-link").removeClass("active");
 $(this).addClass("active");
  
})

    $('.buttonLoc').click(function(e){
        var reMobile=/^0{1}(?:[0-9] ?){6,14}[0-9]$/;
        var mobile=$("#mobile").val();
        // var userName=$("#userName").val();
        // var reName = /^([^0-9]*)$/;
        if(!$("#mobile").val()||!$("#password").val()){
            e.preventDefault();
            $(".vali").css("display","block")
            $(".valiWhole").text("لطفا فیلد های ستاره دار را پر کنید")
        }
        else if(reMobile.test(mobile)==false||mobile.length!=11){
            
            e.preventDefault();
            $(".vali").css("display","block")
            $(".valiWhole").text("شماره تلفن همراه صحیح نیست")
            $("html,body").animate({scrollTop:0})
          }
         else if($("#password").val().length<6){
            e.preventDefault();
            $(".vali").css("display","block")
            $(".valiWhole").text("رمز عبور حداقل باید 6 رقم باشد")
            $("html,body").animate({scrollTop:0})
         }
        
})
})