@extends('Back.index')
@section('title')
کدینگ جدید 
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
          کدینگ جدید 
          </div>
          <form action = "{{route('admin.dataTypeStore')}}" method = "POST">
             @csrf
             <div class="row" dir="rtl">
                <div class="col-md-6">
                  <div style="position: relative;" class="fadeIn second">
                     <label for ="name" class="floating-label ">نام کدینگ</label>
                     <input type="text" class="blur-name-family  @error('name') is-invalid  @enderror" id="name"  name="name">
                  </div>
                  <div style="position: relative;" class="fadeIn third">
                     <label for ="title" class="floating-label-mobile"> عنوان کدینگ</label>
                     <input type="text" id="title" class="blur-mobile @error('title') is-invalid  @enderror"  name="title">
                     <div class="forcible">*</div>
                  </div>
                
                   <div class="row gender" dir="rtl">
                     <span>فعال </span>
                     <div class="gender-radios">
                       <div class="div-male @error('isActive') is-invalid  @enderror">
                          <input type="radio" name="isNotActive" id="isNotActive" for="isActive" value = 0 >غیر فعال
                          <input type="radio" name="isActive" id="isActive" for="isActive" value = 1  > فعال
                       </div>
                     </div>
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
