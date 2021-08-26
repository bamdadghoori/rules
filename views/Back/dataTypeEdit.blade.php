@extends('Back.index')
@section('title')
ویرایش کدینگ
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
           ویرایش کدینگ 
          </div>
          <form action = "{{route('admin.dataTypeUpdate',$dataType ->id)}}" method = "POST">
             @method('put')
             @csrf
             
              <div class="row" dir="rtl">
                <div class="col-md-6">
                  <div style="position: relative;" class="fadeIn second">
                     <label for ="name" class="floating-label ">نام </label>
                     <input type="text" class="blur-name-family  @error('name') is-invalid  @enderror" id="name"  name="name" value = "{{$dataType->name}}">
                  </div>
                <div style="position: relative;" class="fadeIn third">
                     <label for ="title" class="floating-label-mobile"> عنوان</label>
                     <input type="text" id="title" class="blur-mobile @error('title') is-invalid  @enderror"  name="title" value = "{{$dataType->title}}" >
                     <div class="forcible">*</div>
                </div>
               
                 <div class="row gender" dir="rtl">
                   <span>فعال </span>
                   <div class="gender-radios">
                      <div class="div-male @error('isActive') is-invalid  @enderror">
                        <label >فعال</label>
                        <input type="radio" name="isActive" id="isActive" for="isActive" {{ $dataType -> isActive == '1' ? 'checked' : '' }} >
                        <label  >غیر فعال</label>
                        <input type="radio" name="isNoActive" id="isNoActive"  for="isActive"  {{ $dataType -> isActive == '0' ? 'checked' : '' }} >
                      </div>
                    </div>
                  </div>


                
              </div>
              </div>
              <div>
                <input type="submit" class="fadeIn third buttonLoc" value="ثبت">
                <button type="button" class="fadeIn third buttonLoc">
                              <a href="{{route('admin.dataTypes')}}">انصراف</a>
                            </button>
              </div>
          </form>
       </div>
  </section>
  <!-- /.content -->
</div>
@endsection
