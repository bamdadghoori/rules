$(document).ready(function(){
// console.log($("td:nth-child(4)").get(0))
var arT=$("td:nth-child(4)").map(function(){
    return $.trim($(this).text());

}).get();
  

console.log(arT)

$("td:nth-child(4)").each(function(){
    $(this).text($(this).text().replace(/\B(?=(\d{3})+(?!\d))/g, ","))
})

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
         else if($("#password").val().length<8){
            e.preventDefault();
            $(".vali").css("display","block")
            $(".valiWhole").text("رمز عبور حداقل باید 8 رقم باشد")
            $("html,body").animate({scrollTop:0})
         }
        
})

function sortTableByColumn(table, column, asc = true) {
    const dirModifier = asc ? 1 : -1;
    const tBody = table.tBodies[0];
    const rows = Array.from(tBody.querySelectorAll("tr"));

    const sortedRows = rows.sort((a, b) => {

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