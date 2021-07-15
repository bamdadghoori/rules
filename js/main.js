$(document).ready(function(){
   

    let container = $('#pagination');
    //data source jelosh [] dare. hammon arayas vali araye ist az object ha
    //inja arayte i az object ha sakhte!
    container.pagination({
        dataSource: [
            //mitooni be jaye hello tage html bezari! masalan<img>
            //age az img estefade mikoni hatman '\' ro tabdil be '/' kon vagarna axo nemishnase!
            {name: `<div class="col-md-3 ">
            <div class="model">
            <div>
              <img class="small-image" src="img/italian-maple-3d-model-obj-mtl-3ds-fbx-3dm-dwg.jpg">
            </div>
            <div class="large-image">
              <img src="img/italian-maple-3d-model-obj-mtl-3ds-fbx-3dm-dwg.jpg">
              <div class="model-title">
                <span>مدل سه بعدی درخت</span>
              </div>
              <div class="model-volume">
                <span>حجم فایل با متریال 21 مگابایت</span>
              </div>
            </div>
            <div class="model-title">
              <span>مدل سه بعدی درخت</span>
            </div>
            <div class="model-volume">
              <span>حجم فایل با متریال 21 مگابایت</span>
            </div>
          </div>
          </div>`},
          {name: `<div class="col-md-3 ">
          <div class="model">
          <div>
            <img class="small-image" src="img/italian-maple-3d-model-obj-mtl-3ds-fbx-3dm-dwg.jpg">
          </div>
          <div class="large-image">
            <img src="img/italian-maple-3d-model-obj-mtl-3ds-fbx-3dm-dwg.jpg">
            <div class="model-title">
              <span>مدل سه بعدی درخت</span>
            </div>
            <div class="model-volume">
              <span>حجم فایل با متریال 21 مگابایت</span>
            </div>
          </div>
          <div class="model-title">
            <span>مدل سه بعدی درخت</span>
          </div>
          <div class="model-volume">
            <span>حجم فایل با متریال 21 مگابایت</span>
          </div>
        </div>
        </div>`},
        {name: `<div class="col-md-3 ">
        <div class="model">
        <div>
          <img class="small-image" src="img/italian-maple-3d-model-obj-mtl-3ds-fbx-3dm-dwg.jpg">
        </div>
        <div class="large-image-2">
          <img src="img/italian-maple-3d-model-obj-mtl-3ds-fbx-3dm-dwg.jpg">
          <div class="model-title">
            <span>مدل سه بعدی درخت</span>
          </div>
          <div class="model-volume">
            <span>حجم فایل با متریال 21 مگابایت</span>
          </div>
        </div>
        <div class="model-title">
          <span>مدل سه بعدی درخت</span>
        </div>
        <div class="model-volume">
          <span>حجم فایل با متریال 21 مگابایت</span>
        </div>
      </div>
      </div>`},
      {name: `<div class="col-md-3 ">
      <div class="model">
      <div>
        <img class="small-image" src="img/italian-maple-3d-model-obj-mtl-3ds-fbx-3dm-dwg.jpg">
      </div>
      <div class="large-image-2">
        <img src="img/italian-maple-3d-model-obj-mtl-3ds-fbx-3dm-dwg.jpg">
        <div class="model-title">
          <span>مدل سه بعدی درخت</span>
        </div>
        <div class="model-volume">
          <span>حجم فایل با متریال 21 مگابایت</span>
        </div>
      </div>
      <div class="model-title">
        <span>مدل سه بعدی درخت</span>
      </div>
      <div class="model-volume">
        <span>حجم فایل با متریال 21 مگابایت</span>
      </div>
    </div>
    </div>`},
    {name: `<div class="col-md-3 ">
    <div class="model">
    <div>
      <img class="small-image" src="img/view 01.jpg">
    </div>
    <div class="large-image">
      <img src="img/view 01.jpg">
      <div class="model-title">
        <span>مدل سه بعدی درخت</span>
      </div>
      <div class="model-volume">
        <span>حجم فایل با متریال 21 مگابایت</span>
      </div>
    </div>
    <div class="model-title">
      <span>مدل سه بعدی درخت</span>
    </div>
    <div class="model-volume">
      <span>حجم فایل با متریال 21 مگابایت</span>
    </div>
  </div>
  </div>`},
  {name: `<div class="col-md-3 ">
  <div class="model">
  <div>
    <img class="small-image" src="img/view 01.jpg">
  </div>
  <div class="large-image">
    <img src="img/view 01.jpg">
    <div class="model-title">
      <span>مدل سه بعدی درخت</span>
    </div>
    <div class="model-volume">
      <span>حجم فایل با متریال 21 مگابایت</span>
    </div>
  </div>
  <div class="model-title">
    <span>مدل سه بعدی درخت</span>
  </div>
  <div class="model-volume">
    <span>حجم فایل با متریال 21 مگابایت</span>
  </div>
</div>
</div>`},
{name: `<div class="col-md-3 ">
<div class="model">
<div>
  <img class="small-image" src="img/view 01.jpg">
</div>
<div class="large-image-2">
  <img src="img/view 01.jpg">
  <div class="model-title">
    <span>مدل سه بعدی درخت</span>
  </div>
  <div class="model-volume">
    <span>حجم فایل با متریال 21 مگابایت</span>
  </div>
</div>
<div class="model-title">
  <span>مدل سه بعدی درخت</span>
</div>
<div class="model-volume">
  <span>حجم فایل با متریال 21 مگابایت</span>
</div>
</div>
</div>`},
{name: `<div class="col-md-3 ">
<div class="model">
<div>
  <img class="small-image" src="img/view 01.jpg">
</div>
<div class="large-image-2">
  <img src="img/view 01.jpg">
  <div class="model-title">
    <span>مدل سه بعدی درخت</span>
  </div>
  <div class="model-volume">
    <span>حجم فایل با متریال 21 مگابایت</span>
  </div>
</div>
<div class="model-title">
  <span>مدل سه بعدی درخت</span>
</div>
<div class="model-volume">
  <span>حجم فایل با متریال 21 مگابایت</span>
</div>
</div>
</div>`}
          
         
        ], pageSize:4, //in dataye payeen fek konam be hamoon data source barmigarde
        callback: function (data, pagination) {
            var dataHtml=" " ;
               // in yani be ezaye har kodoom az azaye data in function ro anjam bede ye chizi shabih foreach! 
            $.each(data, function (index, item) {
                dataHtml += item.name ;
            });

            // dataHtml += '</ul>';

            $(".models").html(dataHtml);
            $(".small-image").mouseover(function(){
                $(this).parent().parent().find(".large-image").css("display","block")
                $(this).parent().parent().find(".large-image-2").css("display","block")
              })
              $(".small-image").mouseout(function(){
                  $(this).parent().parent().find(".large-image").css("display","none")
                  $(this).parent().parent().find(".large-image-2").css("display","none")
              })
        }
        
        
    });
    //range-slider

    /* init widget */
$("#slider").slider({
  range: true,
  max:10000 ,
  min:1000,
  
  values: [100000, 1000000],
  slide: function(event, ui) {
    var min = "از"+ui.values[0]+"تومان";
    var max ="تا"+ ui.values[1]+"تومان";
    $("#min").text(min);
    $("#max").text(max);
  }
});

// minV=
// maxV=
/* show initial values */
var min = $("#slider").slider("values", 0);
var max = $("#slider").slider("values", 1);
$("#min").text(min);
$("#max").text(max);
})
