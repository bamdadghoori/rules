@extends('Back.index')
@section('title')
دسته بندی جدید 
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
          دسته بندی جدید 
          </div>
          <form action = "{{route('admin.categoryStore')}}" method = "POST">
             @csrf
             <div class="row" dir="rtl">
                <div class="col-md-6">
                  <div style="position: relative;" class="fadeIn second">
                     <label for ="name" class="floating-label ">نام  دسته بندی</label>
                     <input type="text" class="blur-name-family  @error('name') is-invalid  @enderror" id="name"  name="name">
                  </div>
                  <div style="position: relative;" class="fadeIn third">
                     <label for ="title" class="floating-label-mobile"> عنوان دسته بندی</label>
                     <input type="text" id="title" class="blur-mobile @error('title') is-invalid  @enderror"  name="title">
                     <div class="forcible">*</div>
                  </div>
                
                   <div class="col-md-6">
                     <div style="position: relative;" class="fadeIn second div-state">
                        <div class="floating-label-state">دسته بندی والد </div>
                        <select name="parentId">
                          <option id="state-option" value="null" selected>دسته بندی والد را انتخاب کنید</option>
                          @foreach($categorys as $category)
                             <option value = "{{$category->id}}" >{{$category->title}} 

                             </option>
                          @endforeach                                    
                        </select>
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
