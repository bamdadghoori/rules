@extends('Front.layouts.app')
@section('content')
<main class="py-4">
  <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">ورود  </div>
                <div class="card-body">
                   <div class="wrapper fadeInDown">
                        <div id="formContent">
                          <form  method="POST" action="{{route('login')}}">
                              @csrf 
                              <div style="position: relative;" class="fadeIn second">
                                <input type="text" class="blur @error('phone') is-invalid @enderror" id="phone"  name="phone"  value="{{old('phone')}}">
                                <label class="floating-label ">تلفن همراه</label>
                                     <div class="forcible">*</div>
                                  @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                  @enderror
                              </div>
                             
                              <div style="position: relative;" class="fadeIn third">
                                <input type="password" id="password" class="blur" name="login" >
                                <label class="floating-label">رمز عبور</label>
                                <div class="forcible">*</div>
                              </div>
                              <input type="submit" class="fadeIn fourth buttonLoc" value="ورود">
                          </form>
                          <div id="formFooter">
                             <a class="underlineHover" href="#">رمز عبور را فراموش کرده اید؟</a>
                          </div>
                          <div id="formFooter">
                                هنوز عضو نشده اید؟
                              <a class="underlineHover register-link" href="{{route('register')}}">ثبت نام کنید</a>
                          </div>
                       </div>
                    </div> 
                 </div>
             </div>
         </div>
    </div> 
  </div>  
</main>
@endsection
