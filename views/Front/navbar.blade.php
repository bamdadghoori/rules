<nav class="navbar navbar-expand-lg navbar-light">
      <div class="search-section">
        <div>
         <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="جستجو " aria-label="Search">
            <button id="search-button" type="button" class="btn btn-primary">
                <i class="fa fa-search"></i>
            </button>
         </form>
        </div>
      </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle active" href="#"
                id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">  3D Models</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#"
              id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 3D Materials  </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                HDRI
              </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#"
                id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> AutoCad </a>
            </li>
                         
            @auth
              <li class="nav-item login">
                      <a class="nav-link" href="{{route('profile',Auth::user()->id)}}">ر<i class="fa fa-sign-in-alt"></i></a>
                    </li>
              <li>
                  <form action="{{route('logout')}}" method = "POST">
                     @csrf
                     <button type="submit" class="fa fa-sign-in-alt">خروج</button>
                  </form>
                  @if (Auth::user()->role==1 )
                    <li class="nav-item login">
                      <a class="nav-link" href="{{route('admin.index')}}">پنل مدیریت<i class="fa fa-sign-in-alt"></i></a>
                    </li>
                  @endif

                  @else
                  
                   <li class="nav-item login">
                     <a class="nav-link" href="{{route('login')}}">ورود<i class="fa fa-sign-in-alt"></i></a>
                   </li>
                   <li class="nav-item register">
                     <a class="nav-link" href="{{route('register')}}">ثبت نام<i class="fa fa-sign-in-alt"></i></a>
                  </li>
            @endauth      
          </ul>
        </div>
      <a class="navbar-brand" href="#">3dcadeh</a>
</nav>