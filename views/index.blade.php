<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>@yield('title')</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" href="\Back\assets\css\dashboard\bootstrap-theme.css">
  <link rel="stylesheet" href="\Back\assets\css\dashboard\rtl.css">
  <link rel="stylesheet" href="\Back\assets\fonts\css\font-awesome.min.css">
  <link rel="stylesheet" href="\Back\assets\css\dashboard\ionicons.min.css">
  <link rel="stylesheet" href="\Back\assets\css\dashboard\AdminLTE.css">
  <link rel="stylesheet" href="\Back\assets\css\dashboard\skin-blue.css">
 

  <!-- <link rel="stylesheet" type="text/css" href="\Back\assets\vendor\bootstrap\css\bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="\Back\assets\css\header-footer\header-footer.css">  -->
  <link rel="stylesheet" type="text/css" href="\Back\assets\css\rules\main.css">

  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  
<!--  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
--> 
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  @include('Back.header')
  @include('Back.navbar')
  @include('Back.mainSidebar')  
  @yield('content')
  @include('Back.footer')
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
    <i class="fa fa-close close-aside"></i>
      <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
     
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane active" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">فعالیت ها</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:;">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">مدیریت قوانین سایت</h4>

                <p>20 مرداد</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">پیشرفت کارها</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:;">
              <h4 class="control-sidebar-subheading">
                عضویت حداقل 3000 کاربر در ماه اول
                <span class="pull-left-container">
                    <span class="label label-danger pull-left">3%</span>
                  </span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 3%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->
      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">تب وضعیت</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">تنظیمات عمومی</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              گزارش کنترلر پنل
              <input type="checkbox" class="pull-left" checked>
            </label>
            <p>
              ثبت تمامی فعالیت های مدیران
            </p>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <div class="control-sidebar-bg"></div>
</div>
<script src="\Back\assets\js\dashboard\jquery.min.js"></script>
<script src="\Back\assets\vendor\bootstrap\js\popper.js"></script>
<script src="\Back\assets\vendor\bootstrap\js\bootstrap.min.js"></script>
<script src="\Back\assets\js\dashboard\adminlte.min.js"></script>
<script src="\Back\assets\js\dashboard\dashboard.js"></script>
<script src="\Back\assets\js/rules/main.js"></script>
</body>
</html>