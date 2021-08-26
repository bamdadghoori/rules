@extends('Back.index')
@section('title')
ویرایش دسته بندی
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
           ویرایش دسته بندی 
          </div>
          <form action = "{{route('admin.categoryUpdate',$category ->id)}}" method = "POST">
             @method('put')
             @csrf
             
              <div class="row" dir="rtl">
                <div class="col-md-6">
                  <div style="position: relative;" class="fadeIn second">
                     <label for ="name" class="floating-label ">نام </label>
                     <input type="text" class="blur-name-family  @error('name') is-invalid  @enderror" id="name"  name="name" value = "{{$category->name}}">
                  </div>
                <div style="position: relative;" class="fadeIn third">
                     <label for ="title" class="floating-label-mobile"> عنوان</label>
                     <input type="text" id="title" class="blur-mobile @error('title') is-invalid  @enderror"  name="title" value = "{{$category->title}}" >
                     <div class="forcible">*</div>
                </div>
                <div style="position: relative;" class="fadeIn third">
                       <select name="parentId">
                          <option id="state-option" value="{{ $category->categiryParent -> title ?? '-' }}" selected>دسته بندی والد را انتخاب کنید</option>
                          @foreach($categorys as $category)
                             <option value = "{{$category->id}}" >{{$category->title}} </option>
                          @endforeach
                        </select>
                </div>      
                
              </div>
              </div>
              <div>
                <input type="submit" class="fadeIn third buttonLoc" value="ثبت">
                <button type="button" class="fadeIn third buttonLoc">
                              <a href="{{route('admin.categorys')}}">انصراف</a>
                            </button>
              </div>
          </form>
       </div>
  </section>
  <!-- /.content -->
</div>
@endsection
