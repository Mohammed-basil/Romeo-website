<!DOCTYPE html>
<html lang="ar">
<head>
<meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تسجيل الدخول</title>
    <link rel="icon" href="{{asset('icon1.ico')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/iofrm-style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/iofrm-theme5.css')}}">
    <style>
        .img-holder {
    min-height: 660px;
}
.img-holder .info-holder {
    top: 68.5%;
}
        </style>
</head>
<body>
    <div class="form-body">
        <div class="website-logo">
                <div class="logo" style="position: fixed;">
                    <img class="logo-size" src="{{asset('images/logo1.png')}}" alt="">
                </div>
        </div>
        
        <div class="row"> 
            <div class="form-holder">
                <div class="form-content" >
                    <div class="form-items">
                    @if (session('status'))
                        <div class="alert alert-success" style="text-align: left;">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if (session('warning'))
                        <div class="alert alert-warning" style="text-align: left;">
                            {{ session('warning') }}
                        </div>
                    @endif

                        <div class="page-links">
                        <a href="/register">التسجيل</a><a href="/login" class="active">تسجيل الدخول</a>
                        </div>
                        <form method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <br> <br><br>
                        <label for="email" class="col-md-4 control-label">البريد الإلكتروني</label>
                            <input id="email" class="form-control" type="email" name="email" value="{{ old('email') }}" required autofocus>
                            @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">كلمة المرور</label>
                            <input class="form-control"  id="password" type="password" name="password" placeholder="كلمة المرور" required>
                            @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            
                            <div  class="form-button" >
                                 <a href="{{ route('password.request') }}">  نسيت كلمة المرور؟</a> <button id="submit" type="submit" class="ibtn">تسجيل الدخول</button>
                            </div>
                        </form> <br><br> <br><br>
                        <br> <div style="color:#fff ;  width:400px; text-align: right;" >   <span class="profile-stat-text" style="color:#ADDDEA; font-size: 15px;padding-left:9px" >
											<span>
                        للتواصل والدعم الفني :</span>
										</span>
										<?php $i=0?>
										 @foreach ($whatsapp as $whats )
										 @if($i==0)
										 <?php $i=1;?>
                        <span class="profile-stat-text" style="color:#ADDDEA; font-size: 15px" >
											<i style="width: auto; color:#ADDDEA;" class="fab fa-whatsapp"></i>
											<span>{{$whats->phonenum}}</span>
										</span>
										@else
										<span class="profile-stat-text" style="color:#ADDDEA; font-size: 15px; padding-right:155px" dir="rtl">
											<i style="width: auto; color:#ADDDEA;" class="fab fa-whatsapp"></i>
											<span>{{$whats->phonenum}}</span>
										</span>
										@endif
										<br>
										@endforeach
										 
                         </div>
                    </div>
                </div>
            </div>
            <div class="img-holder" style="position: fixed;">
                <div class="bg"></div>
                <div class="info-holder">
                    <img src="{{asset('images/graphic2.svg')}}" alt="">
                </div>
            </div>
        </div>
        
    </div>
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
</body>
</html>