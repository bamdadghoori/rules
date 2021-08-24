@extends('Back.index')
@section('title')
 مدیریت قوانین سایت | کنترل پنل 
@endsection
@section('content')
<!-- <div class="p-3 mb-2 bg-danger text-white vali row">
  <div class="valiWhole"></div>
  <i class="fa fa-exclamation-triangle"></i> -->

  <div class="p-3 mb-2 bg-danger text-white vali-table row">
    <div class="valiWhole-table">هیچ موردی مطابق با جستجوی شما یافت نشد</div>
      <i class="fa fa-exclamation-triangle"></i>
  </div> 
  <div class="buttons" dir="rtl">
    <div class="row">
      <div class="col-md-2">
        <button class="btn btn-warning" >
        <a href="{{route('admin.ruleNew')}}">جدید</a>
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
                    <th scope="col" class="th-sort-asc">ردیف<i class="fa fa-sort"></i></th>
                    <th scope="col">نوع عضویت<i class="fa fa-sort"></i></th>
                    <th scope="col">تعداد دانلود<i class="fa fa-sort"></i></th>
                    <th scope="col">مبلغ<i class="fa fa-sort"></i></th>
                    <th scope="col">ماهانه/سالانه<i class="fa fa-sort"></i></th>
                    <th scope="col">فعال <i class="fa fa-sort"></i></th>
                    <th scope="col">عملیات<i class="fa fa-sort"></i></th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($rules as $rule)
                     {
                        <tr>
                          <td>{{$rule -> id}}</td>
                          <td>{{$rule -> membershipType }}</td>
                          <td>{{$rule -> downloadCount}}</td>
                          <td>{{$rule -> price}}</td>
                          <td>{{$rule -> isYearly}}</td>
                          <td>{{$rule -> isActive}}</td>
                          <td><button type="button" class="btn btn-warning">
                              <a href="{{route('admin.ruleEdit',$rule->id)}}">ویرایش</a>
                            </button>
                             
                            <button type="button" class="btn btn-warning">
                               <a href="{{route('admin.ruleDelete',$rule->id)}}"
                                     onclick="return confirm('ایا از حذف مورد انتخابی مطمئن هستید؟');">حذف</a>
                            </button>
                          </td>
                        </tr>
                     }
                  @endforeach
                </tbody>
        </table>
  </div>
  {{$rules->links()}}

    
@endsection