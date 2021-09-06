//split price
$(document).ready(function(){
// console.log($("td:nth-child(4)").get(0))
// var arT=$("td:nth-child(4)").map(function(){
//     return $.trim($(this).text());

// }).get();
  

// console.log(arT)

$("#my-table td:nth-child(4)").each(function(){
    $(this).text($(this).text().replace(/\B(?=(\d{3})+(?!\d))/g, ","))
})
$("#membership-price").blur(function(){
    $(this).val($(this).val().replace(/\B(?=(\d{3})+(?!\d))/g, ","))
})


// var arMembershipPrice=$("td:nth-child(4)").map(function(){
//     return $.trim($(this).text());

// }).get();
    $(".blur").blur(function(){
        if(!$(this).val()){
        $(this).next().removeClass("blurLabel");
     }
     else{
         $(this).next().addClass("blurLabel");
     }
     
    })
    $(".blur-downloads").blur(function(){
        if(!$(this).val()){
        $(this).next().removeClass("blurLabel-downloads");
     }
     else{
         $(this).next().addClass("blurLabel-downloads");
     }
     
    })
    $(".blur-membership-price").blur(function(){
        if(!$(this).val()){
        $(this).next().removeClass("blurLabel-membership-price");
     }
     else{
         $(this).next().addClass("blurLabel-membership-price");
     }
     
    })
    $("#membership-type").focus(function(){
       $(".floating-label-membership-type").css("display","block")
    })
    $("#membership-type").blur(function(){
        if($("#membership-type-option").is(":selected")){
            $(".floating-label-membership-type").css("display","none")
        }
        else{
            $(".floating-label-membership-type").css("display","block")
        }
    })
    $(".blur-describes").blur(function(){
        if(!$(this).val()){
        $(this).next().removeClass("blurLabel-describes");
     }
     else{
         $(this).next().addClass("blurLabel-describes");
     }
     
    })
    $(".nav-link").click(function()
  {
 $(".nav-link").removeClass("active");
 $(this).addClass("active");
  
})

   $("#regist-rules").click(function(e){
       var reNum=/^[-,0-9 ]+$/;
       var num=$("#membership-price").val();
  var reDate = /^\d{4}\/\d{2}\/\d{2}$/ ;
  var date=$("#membership-date").val();
       if(!$("#membership-date").val()||!$("#downloads").val()||!$("#membership-price").val()){
           e.preventDefault();
           $("html,body").animate({scrollTop:0},500)
              $(".vali").css("display","block")
              $(".valiWhole").text("لطفاً فیلد های ستاره دار را پر کنید")
       }
      else if(!$("#monthly").is(":checked")&&!$("#yearly").is(":checked")){
        e.preventDefault();
        $("html,body").animate({scrollTop:0},500)
           $(".vali").css("display","block")
           $(".valiWhole").text("لطفاً فیلد های ستاره دار را پر کنید")
       }
       else if(!$("#active").is(":checked")&&!$("#non-active").is(":checked")){
        e.preventDefault();
        $("html,body").animate({scrollTop:0},500)
           $(".vali").css("display","block")
           $(".valiWhole").text("لطفاً فیلد های ستاره دار را پر کنید")
       }
       else if($("#membership-type-option").is(":selected")){
        e.preventDefault();
        $("html,body").animate({scrollTop:0},500)
           $(".vali").css("display","block")
           $(".valiWhole").text("نوع عضویت نا معتبر است")
       }
       else if(reDate.test(date)==false){
        e.preventDefault();
        $("html,body").animate({scrollTop:0})
        $(".vali").css("display","block")
        $(".valiWhole").text("تاریخ عضویت صحیح نیست")
      
       
      }
      else if (reNum.test(num)==false){
        e.preventDefault();
        $("html,body").animate({scrollTop:0})
        $(".vali").css("display","block")
        $(".valiWhole").text("مبلغ عضویت را عدد وارد کنید")
      }
   })
  

function sortTableByColumn(table, column, asc = true) {
    const dirModifier = asc ? 1 : -1;
    const tBody = table.tBodies[0];
    const rows = Array.from(tBody.querySelectorAll("tr"));

    const sortedRows = rows.sort((a, b) => {
console.log(column)
if(column==0){
    const aColText = a.querySelector(`td:nth-child(${column + 1 })`).textContent.trim();
    const bColText = b.querySelector(`td:nth-child(${column + 1 })`).textContent.trim();

    return parseInt(aColText) > parseInt(bColText) ? (1 * dirModifier) : (-1 * dirModifier);
}
        const aColText = a.querySelector(`td:nth-child(${column + 1 })`).textContent.trim();
        const bColText = b.querySelector(`td:nth-child(${column + 1 })`).textContent.trim();

        return aColText > bColText ? (1 * dirModifier) : (-1 * dirModifier);
    });

    // remove all exiting Trs from the table

    while (tBody.firstChild) {
        tBody.removeChild(tBody.firstChild);
    }

    // re-add the newly sorrted rows

    tBody.append(...sortedRows);

    //rememver how the column is currently sorted
    table.querySelectorAll("th").forEach(th => th.classList.remove("th-sort-asc", "th-sort-desc"));

    table.querySelector(`th:nth-child(${column + 1})`).classList.toggle("th-sort-asc", asc);
    table.querySelector(`th:nth-child(${column + 1})`).classList.toggle("th-sort-desc", !asc);

}

// number soton ra neshan midahaad va false nozoli mikonad
// 

document.querySelectorAll(".table-sortable th").forEach(headerCell => {
    headerCell.addEventListener("click", () => {

        const tableElement = headerCell.parentElement.parentElement.parentElement;
        const headerIndex = Array.prototype.indexOf.call(headerCell.parentElement.children, headerCell);
        const currentIsAscending = headerCell.classList.contains("th-sort-asc");

        sortTableByColumn(tableElement, headerIndex, !currentIsAscending);

    });
});

// search-table
$("#search-table").on("keyup", function() {
    //nabayed display validation ro to filter block konim .chon vase tak tak tr ha anjam mishe. momkene masalan tr shomare 2 ba search ma montabegh bashe va display ro none kone vali bad bere to tr shomare 4 va dobare display ro block kone!
    //tooye safeye courses shansi j dad chon meghdar hame tr ha yeki bood.hamashoono naveshte bood test!
    var value = $(this).val();
    var flag=0;
    $("#my-table tr").filter(function() {
        
        if($(this).text().indexOf(value) > -1){
   
            // console.log("x")
            $(this).show()
           flag=1;
            $("#my-table thead tr").show();
            
             $(".table-loc").removeClass("table-loc-after-vali")
        }
        
      else{
          
          $(this).hide();
          $("#my-table thead tr").show();
          
          $(".table-loc").addClass("table-loc-after-vali")
      }

    });
    if(flag==0){
        $(".vali-table").css("display","block");
    }
    else{
        
        $(".vali-table").css("display","none");
    }
  console.log(flag)
  });
})