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
           ویرایش قانون 
          </div>
          <form action = "{{route('admin.fileUpdate',$file ->id)}}" method = "POST">
             @method('put')
             @csrf
             
              <div class="row" dir="rtl">
                <div class="col-md-6">
                  <div style="position: relative;" class="fadeIn second">
                     <label for ="name" class="floating-label ">نام فایل </label>
                     <input type="text" class="blur-name-family  @error('name') is-invalid  @enderror" id="name-family"  name="name" value = "{{$file->name}}">
                  </div>
                  <div style="position: relative;" class="fadeIn second">
                     <label for ="code" class="floating-label ">کد فایل </label>
                     <input type="text" class="blur-name-family  @error('code') is-invalid  @enderror" id="name-family"  name="code" value = "{{$file->code}}">
                  </div>
                <div style="position: relative;" class="fadeIn third">
                     <label for ="size" class="floating-label-mobile"> سایز </label>
                     <input type="text" id="size" class="blur-mobile @error('size') is-invalid  @enderror"  name="size" value = "{{$file->size}}" >
                     <div class="forcible">*</div>
                </div>
                <div class="row gender" dir="rtl">
                   <span>مواد </span>
                   <div class="gender-radios">
                      <div class="div-male @error('material') is-invalid  @enderror">
                        <label for="material" <?php if ($file ->material== 1) echo 'checked' ?>>دارد</label>
                        <input type="radio" name="material" id="material">
                        <label for="material"  <?php if ($file ->material== 0) echo 'checked' ?>>ندارد</label>
                        <input type="radio" name="material" id="material">
                      </div>
                    </div>
                 </div>
                 <div class="row gender" dir="rtl">
                   <span>فعال </span>
                   <div class="gender-radios">
                      <div class="div-male @error('isActive') is-invalid  @enderror">
                        <label for="isActive"<?php if ($file ->isActive== 1) echo 'selected' ?>>فعال</label>
                        <input type="radio" name="isActive" id="isActive">
                        <label for="isActive" <?php if ($file ->isActive== 0) echo 'selected' ?>>غیر فعال</label>
                        <input type="radio" name="isActive" id="isActive">
                      </div>
                    </div>
                 </div>


                <div style="position: relative;" class="fadeIn third">
                  <label for ="description"  class="floating-label-email">توضیحات</label>
                  <input type="text" id="description" class="blur-email @error('description') is-invalid  @enderror" name="description" value = "{{$file ->description}}">
                </div>
              </div>
              </div>
              <div>
                <input type="submit" class="fadeIn third buttonLoc" value="ثبت">
                <button type="button" class="fadeIn third buttonLoc">
                              <a href="{{route('admin.files')}}">انصراف</a>
                            </button>
              </div>
          </form>
       </div>
  </section>
  <!-- /.content -->
</div>
@endsection
