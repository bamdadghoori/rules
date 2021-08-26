@extends('Back.index')
@section('title')
 مدیریت کدینگ | کنترل پنل 
@endsection
@section('content')
<div class="p-3 mb-2 bg-danger text-white vali row">
  <div class="valiWhole"></div>
  <i class="fa fa-exclamation-triangle"></i>
  <div class="p-3 mb-2 bg-danger text-white vali-table row">
    <div class="valiWhole-table">هیچ موردی مطابق با جستجوی شما یافت نشد</div>
      <i class="fa fa-exclamation-triangle"></i>
  </div> 
  <div class="buttons" dir="rtl">
    <div class="row">
      <div class="col-md-2">
        <button class="btn btn-warning" >
        <a href="{{route('admin.dataTypeNew')}}">جدید</a>
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
                    <th scope="col" class="th-sort-asc">ردیف<i class="far fa-sort"></i></th>
                    <th scope="col">نام کدینگ<i class="far fa-sort"></i></th>
                    <th scope="col">عنوان کدینگ<i class="far fa-sort"></i></th>
                    <th scope="col">فعال <i class="far fa-sort"></i></th>
                    <th scope="col">عملیات<i class="far fa-sort"></i></th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($dataTypes as $dataType)
                     {
                        <tr>
                          <td>{{$dataType -> id}}</td>
                          <td>{{$dataType -> name }}</td>
                          <td>{{$dataType -> title}}</td>
                          <td>{{$dataType -> isActive}}</td>
                          <td><button type="button" class="btn btn-warning">
                              <a href="{{route('admin.dataTypeEdit',$dataType->id)}}">ویرایش</a>
                            </button>
                             
                            <button type="button" class="btn btn-warning">
                               <a href="{{route('admin.dataTypeDestroy',$dataType->id)}}"
                                     onclick="return confirm('ایا از حذف مورد انتخابی مطمئن هستید؟');">حذف</a>
                            </button>
                          </td>
                        </tr>
                     }
                  @endforeach
                </tbody>
      </table>
  </div>
  {{$dataTypes->links()}}

</div>    
@endsection