@extends('Back.index')
@section('title')
قانون جدید 
@endsection
@section('content')

<div class="content-wrapper">
     <!-- Content Header (Page header) -->
  <section class="content-header">
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> خانه</a></li>
        <li class="active">صفحه</li>
      </ol>
  </section>
 <!-- Main content -->
  <section class="content container-fluid">
    @include('message')
       <div id="formContent">
          <div class="fadeIn first login-title">
           قانون جدید 
          </div>
          <form action = "{{route('admin.ruleStore')}}" method = "POST">
             @csrf
             <div class="col-md-6">
                <div style="position: relative;" class="fadeIn second div-state">
                  <div class="floating-label-state">نوع عضویت</div>
                  <select name="membershipType">
                     <option id="state-option"></option>
                      <option value = 2 >معمولی</option>
                      <option value = 3>ویژه</option>                                         
                  </select>
                </div>
              </div>

              <div class="row" dir="rtl">
                <div class="col-md-6">
                  <div style="position: relative;" class="fadeIn second">
                     <label for ="downloadCount" class="floating-label ">تعداد دانلود</label>
                     <input type="text" class="blur-name-family  @error('downloadCount') is-invalid  @enderror" id="name-family"  name="downloadCount">
                  </div>
                <div style="position: relative;" class="fadeIn third">
                     <label for ="price" class="floating-label-mobile"> حق عضویت به تومان</label>
                     <input type="text" id="price" class="blur-mobile @error('price') is-invalid  @enderror"  name="price" value="50000" >
                     <div class="forcible">*</div>
                </div>
                <div class="row gender" dir="rtl">
                   <span>دوره </span>
                   <div class="gender-radios">
                      <div class="div-male @error('isYearly') is-invalid  @enderror">
                        <label for="isYearly">سالانه</label>
                        <input type="radio" name="isYearly" id="isYearly">
                        <label for="isYearly">ماهانه</label>
                        <input type="radio" name="isYearly" id="isMonthly">
                      </div>
                    </div>
                 </div>
                 <div class="row gender" dir="rtl">
                   <span>فعال </span>
                   <div class="gender-radios">
                      <div class="div-male @error('isActive') is-invalid  @enderror">
                        <label for="isActive">فعال</label>
                        <input type="radio" name="isActive" id="isActive">
                        <label for="isActive">غیر فعال</label>
                        <input type="radio" name="isActive" id="isMonthly">
                      </div>
                    </div>
                 </div>


                <div style="position: relative;" class="fadeIn third">
                  <label for ="description"  class="floating-label-email">توضیحات</label>
                  <input type="text" id="description" class="blur-email @error('description') is-invalid  @enderror" name="description" >
                </div>
              </div>
              </div>
              <div>
                <input type="submit" class="fadeIn third buttonLoc" value="ثبت">
              </div>
          </form>
       </div>
  </section>
  <!-- /.content -->
</div>
@endsection
