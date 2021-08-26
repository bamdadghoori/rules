@extends('Back.index')
@section('title')
فایل جدید 
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
           فایل جدید 
          </div>
          <form action = "{{route('admin.fileStore')}}" method = "POST">
             @csrf
             
              <div class="row" dir="rtl">
                <div class="col-md-6">
                  <div style="position: relative;" class="fadeIn second">
                     <label for ="name" class="floating-label ">نام فایل</label>
                     <input type="text" class="blur-name-family  @error('name') is-invalid  @enderror" id="name-family"  name="name">
                  </div>
                  <div style="position: relative;" class="fadeIn third">
                     <label for ="code" class="floating-label-mobile"> کد فایل</label>
                     <input type="text" id="code" class="blur-mobile @error('code') is-invalid  @enderror"  name="code"  >
                     <div class="forcible">*</div>
                   </div>
                   <div style="position: relative;" class="fadeIn third">
                     <label for ="size" class="floating-label-mobile"> سایز فایل</label>
                     <input type="text" id="size" class="blur-mobile @error('size') is-invalid  @enderror"  name="size"  >
                     <div class="forcible">*</div>
                    </div>

                    <div style="position: relative;" class="fadeIn third">
                     <label for ="link" class="floating-label-mobile"> آدرس دانلود</label>
                     <input type="text" id="link" class="blur-mobile @error('link') is-invalid  @enderror"  name="link"  >
                     <div class="forcible">*</div>
                    </div>

                    <div style="position: relative;" class="fadeIn third">
                     <label for ="fileType" class="floating-label-mobile">نوع فایل</label>
                     <input type="text" id="link" class="blur-mobile @error('fileType') is-invalid  @enderror"  name="fileType"  >
                     <div class="forcible">*</div>
                    </div>

                    <div style="position: relative;" class="fadeIn third">
                     <label for ="categoryId" class="floating-label-mobile">نوع دسته بندی</label>
                     <input type="text" id="categoryId " class="blur-mobile @error('categoryId') is-invalid  @enderror"  name="categoryId"  >
                     <div class="forcible">*</div>
                    </div>

                    <div class="row gender" dir="rtl">
                       <span>مواد </span>
                       <div class="gender-radios">
                          <div class="div-male @error('material') is-invalid  @enderror">
                           <label for="material">دارد</label>
                           <input type="radio" name="isActive" id="material">
                           <label for="material">ندارد</label>
                           <input type="radio" name="material" id="material">
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
