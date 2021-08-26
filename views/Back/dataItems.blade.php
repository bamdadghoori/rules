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
        <a href="{{route('admin.dataItemNew')}}">جدید</a>
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
                    <th scope="col">نام ایتم<i class="far fa-sort"></i></th>
                    <th scope="col">عنوان ایتم<i class="far fa-sort"></i></th>
                    <th scope="col">شناسه والد<i class="far fa-sort"></i></th>
                    <th scope="col">فعال <i class="far fa-sort"></i></th>
                    <th scope="col">عملیات<i class="far fa-sort"></i></th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($dataItems as $dataItem)
                     {
                        <tr>
                          <td>{{$dataItem -> id}}</td>
                          <td>{{$dataItem -> name }}</td>
                          <td>{{$dataItem -> title}}</td>
                          <td>{{$dataItem -> dataTypes -> title }}</td>
                          <td>{{$dataItem -> isActive}}</td>
                          <td><button type="button" class="btn btn-warning">
                              <a href="{{route('admin.dataItemEdit',$dataItem->id)}}">ویرایش</a>
                            </button>
                             
                            <button type="button" class="btn btn-warning">
                               <a href="{{route('admin.dataItemDestroy',$dataItem->id)}}"
                                     onclick="return confirm('ایا از حذف مورد انتخابی مطمئن هستید؟');">حذف</a>
                            </button>
                          </td>
                        </tr>
                     }
                  @endforeach
                </tbody>
        </table>
  </div>
  {{$dataItems->links()}}

</div>    
@endsection