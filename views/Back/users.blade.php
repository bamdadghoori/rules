@extends('Back.index')

@section('title')
 مدیریت کاربران | کنترل پنل 
@endsection
@section('content')

<div class="content-wrapper">
     <!-- Content Header (Page header) -->
<section class="content-header">
      <h1>سامانه 3d cadeh 
          <small>مدیریت کاربران</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> خانه</a></li>
        <li class="active">صفحه</li>
      </ol>
</section>
 <!-- Main content -->
 <section class="content container-fluid">
    <div class="p-3 mb-2 bg-danger text-white vali row">
          <!-- <div class="valiWhole"></div>  -->
         
          <div class="valiWhole"></div>
              <i class="fa fa-exclamation-triangle"></i>
    </div> 
    <div class="p-3 mb-2 bg-danger text-white vali-table row">
              <!-- <div class="valiWhole"></div>  -->
      <div class="valiWhole-table">هیچ موردی مطابق با جستجوی شما یافت نشد</div>
            <i class="fa fa-exclamation-triangle"></i>
    </div> 
    <div class="buttons" dir="rtl">
      <div class="row">
            <div class="col-md-4">
              <button class="btn btn-primary button-new" >جدید</button>
            </div>
            <div class="col-md-8  div-second-search-box">
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
                    <th scope="col" class="th-sort-asc">ردیف<i class="far fa-sort"></i></th>
                    <th scope="col">نوع عضویت<i class="far fa-sort"></i></th>
                    <th scope="col">تعداد دانلود<i class="far fa-sort"></i></th>
                    <th scope="col">مبلغ<i class="far fa-sort"></i></th>
                    <th scope="col">ماهانه/سالانه<i class="far fa-sort"></i></th>
                    <th scope="col">عملیات<i class="far fa-sort"></i></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>معمولی</td>
                    <td>10</td>
                    <td>1000000</td>
                    <td>سالانه</td>
                    <td><button type="button" class="btn btn-warning">ویرایش</button>
                      <button type="button" class="btn btn-warning">حذف</button>
                    </td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>ویژه</td>
                    <td>20</td>
                    <td>2000000</td>
                    <td>ماهانه</td>
                    <td><button type="button" class="btn btn-warning">ویرایش</button>
                      <button type="button" class="btn btn-warning">حذف</button>
                    </td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>سوپر</td>
                    <td>30</td>
                    <td>3000000</td>
                    <td>ماهانه</td>
                    <td><button type="button" class="btn btn-warning">ویرایش</button>
                      <button type="button" class="btn btn-warning">حذف</button>
                    </td>
                  </tr>
                </tbody>
              </table>
    </div>
</section>
<!-- /.content -->
</div>
@endsection