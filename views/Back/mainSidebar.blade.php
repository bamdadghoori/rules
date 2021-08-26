<aside class="main-sidebar">
    <section class="sidebar">
      <div class="user-panel">
        <div class="pull-right image">
          <img src="\Back\assets\images\dashboard\user1-128x128.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-right info">
          <p>مانی خسروانی 
          </p>
          <a href="#"><i class="fa fa-circle text-success"></i> آنلاین</a>
        </div>
      </div>
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control sidebar-search" placeholder="جستجو">
          <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
        </div>
      </form>
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">تیتر</li>
        <li class="active"><a href="#"><i class="fa fa-link"></i> <span>گزارشات</span></a></li>
        <li><a href="#"><i class="fa fa-link"></i> <span>گزارش کاربران</span></a></li>
        <li><a href="#"><i class="fa fa-link"></i> <span>گزارش فایل ها</span></a></li>
        <li><a href="#"><i class="fa fa-link"></i> <span>گزارش برترین ها</span></a></li>
        <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>مدیریت </span>
            <span class="pull-left-container">
                <i class="fa fa-angle-right pull-left"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('admin.dataTypes') }}">کدینگ  </a></li>
            <li><a href="{{route('admin.dataItems')}}">انواع داده کدینگ  </a></li>
<hr>
            <li><a href="{{route('admin.rules')}}">قوانین سایت  </a></li>
            <li><a href="#">فایل ها  </a></li>
            <li><a href="{{route('admin.categorys')}}"> دسته بندی ها </a></li>
<hr>
            <li><a href="{{route('admin.users')}}">کاربران</a></li>
            <li><a href="#">پرداخت ها  </a></li>
          </ul>
        </li>
      </ul>
    </section>
  </aside>