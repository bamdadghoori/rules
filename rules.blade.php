@extends('Back.index')
@section('title')
 مدیریت قوانین سایت | کنترل پنل 
@endsection
@section('content')
<!-- <div class="p-3 mb-2 bg-danger text-white vali row">
  <div class="valiWhole"></div>
  <i class="fa fa-exclamation-triangle"></i> -->
  <!-- modal -->
  <div class="wrapper-new fadeInDown">
        <div id="formContent">
          <!-- Tabs Titles -->
      
          <!-- Icon -->
          <div class="fadeIn first login-title">
           قواعد سایت 
            <i class="fa fa-window-close" aria-hidden="true"></i>
          </div>
          <div class="p-3 mb-2 bg-danger text-white vali row">
            <!-- <div class="valiWhole"></div>  -->
           
            <span class="valiWhole"></span>
                <i class="fa fa-exclamation-triangle"></i>
                </div> 
          <!-- Login Form -->
          <form autocomplete="off">
          <div style="position: relative;z-index: 999;" class="fadeIn second">
    <input type="text" id="membership-date" class="blur-membership-date" name="membership-date" >
    <label class="floating-label-date">تاریخ</label>
    <div class="forcible">*</div>
 
</div>
<div style="position: relative;" class="fadeIn second div-state">
          <div class="floating-label-membership-type">نوع عضویت</div>
    <select id="membership-type">
      
      <option id="membership-type-option">نوع عضویت</option>
      <option>تست</option>
    </select>
    <div class="forcible">*</div>
  </div>
        <div style="position: relative;" class="fadeIn second">
          <input type="number" class="blur-downloads" id="downloads"  name="downloads">
          <label class="floating-label-downloads">تعداد دانلود</label>
          <div class="forcible">*</div>
      </div>
      <div style="position: relative;" class="fadeIn second">
          <input type="text" class="blur-membership-price" id="membership-price"  name="membership-price"  pattern="\d*" maxlength="10">
          <label class="floating-label-membership-price">مبلغ عضویت(تومان)</label>
          <div class="forcible">*</div>
      </div>
     
   <div class="row membership-radio-group" style="position:relative">
     <div class="col-md-4">
       <span class="membership-radio-span">
         دوره : 
       </span>
     </div>
     <div class="col-md-4">
    
            <label  for="inlineCheckbox1">ماهانه</label>
            <input  type="radio" id="monthly" name="membership-radio" value="monthly">
         
     </div>
     <div class="col-md-4">
    
            <label  for="inlineCheckbox1">سالانه</label>
            <input  type="radio" id="yearly" name="membership-radio" value="yearly">
         
     </div>
     <div class="forcible-membership">*</div>
   </div>
   <div class="row activity-radio-group" style="position:relative">
     <div class="col-md-4">
       <span class="activity-radio-span">
         وضعیت : 
       </span>
     </div>
     <div class="col-md-4 div-active">
    
            <label  for="inlineCheckbox1">فعال</label>
            <input  type="radio" id="active" name="activity-radio" value="active">
         
     </div>
     <div class="col-md-4 div-non-active">
    
            <label  for="inlineCheckbox1">غیر فعال</label>
            <input  type="radio" id="non-active" name="activity-radio" value="non-active">
         
     </div>
     <div class="forcible-activity">*</div>
   </div>
   <div style="position: relative;" class="fadeIn second describes">
    <textarea class="blur-describes" id="describes" name="describes"></textarea>
            <label class="floating-label-describes">توضیحات</label>
            <!-- <div class="forcible">*</div> -->
        </div>
 <!-- end of modal -->
 <div>
            <input type="submit" class="fadeIn fourth buttonLoc" id="regist-rules" value="ثبت">
        </div>
          </form>
      
        
           
      
        </div>
      </div> 


  <div class="p-3 mb-2 bg-danger text-white vali-table row">
    <div class="valiWhole-table">هیچ موردی مطابق با جستجوی شما یافت نشد</div>
      <i class="fa fa-exclamation-triangle"></i>
  </div> 
  <div class="buttons" dir="rtl">
    <div class="row">
      <div class="col-md-2">
        <button class="btn btn-warning new" >
        <a href="#">جدید</a>
        </button>
      </div>
      <div class="col-md-4  div-second-search-box">
        <form class="form-inline my-2 my-lg-0 second-searchbox">
          <input  id="search-table" type="search" placeholder="جستجو روی محتوای جدول" >
          <button id="search-button" type="button" class="btn btn-primary">
           <i class="fa fa-search"></i>
          </button>
       </form>
      </div>
    </div>
  </div>
  <div class="table-loc">
      <table class="table table-striped table-sortable" id="my-table">
                <thead>
                  <tr>
                    <th scope="col" class="th-sort-asc">ردیف<i class="fa fa-sort"></i></th>
                    <th scope="col">نوع عضویت<i class="fa fa-sort"></i></th>
                    <th scope="col">تعداد دانلود<i class="fa fa-sort"></i></th>
                    <th scope="col">مبلغ<i class="fa fa-sort"></i></th>
                    <th scope="col">ماهانه/سالانه<i class="fa fa-sort"></i></th>
                    <th scope="col">فعال <i class="fa fa-sort"></i></th>
                    <th scope="col">عملیات<i class="fa fa-sort"></i></th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($rules as $rule)
                     
                        <tr>
                          <td>{{$rule -> id}}</td>
                          <td>{{$rule -> membershipType }}</td>
                          <td>{{$rule -> downloadCount}}</td>
                          <td>{{$rule -> price}}</td>
                          <td>{{$rule -> isYearly}}</td>
                          <td>{{$rule -> isActive}}</td>
                          <td><button type="button" class="btn btn-warning">
                              <a href="{{route('admin.ruleEdit',$rule->id)}}">ویرایش</a>
                            </button>
                             
                            <button type="button" class="btn btn-warning">
                               <a href="{{route('admin.ruleDelete',$rule->id)}}"
                                     onclick="return confirm('ایا از حذف مورد انتخابی مطمئن هستید؟');">حذف</a>
                            </button>
                          </td>
                        </tr>
                     
                  @endforeach
                </tbody>
        </table>
  </div>
  {{$rules->links()}}

</div>
@endsection