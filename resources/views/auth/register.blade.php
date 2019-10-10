<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>تسجيل</title>
    <link rel="icon" href="{{asset('icon1.ico')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/iofrm-style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/iofrm-theme5.css')}}">
    <style>
    #hidden_div{
display: none;
}
#hidden_div1{
display: none;
}
#hidden_div2{
display: none;
}
#img {
    min-height: 1059px;
}
#img1 {
    top: 40%;
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
            <div id="img" class="img-holder" style="position: fixed;">
                <div class="bg"></div>
                <div id="img1" class="info-holder">
                    <img src="{{asset('images/graphic2.svg')}}" alt="">
                </div>
            </div>
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <div class="page-links">
                        <a href="/register" class="active">التسجيل</a><a href="/login" >تسجيل الدخول</a>
                        </div>
                        <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('category') ? ' has-error' : '' }}">
                        <br> <br><br>
                        <label for="category"  class="col-md-5 control-label">التصنيف</label>
                             <select id="category" name="category"  class="form-control"  onchange="showDiv('hidden_div','hidden_div1','hidden_div2','img','img1', this)">
                                                @foreach ($categories as $category )
                                                <option value="{{$category->id}}">{{$category->name}}</option>
                                                @endforeach
                                               
                                             </select>
                                    @if ($errors->has('category'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('category') }}</strong>
                                        </span>
                                    @endif
                            </div>
                           
                        <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                            <label for="first_name" class="col-md-5 control-label">الاسم الأول</label>
<input id="first_name" type="text" class="form-control" name="first_name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('first_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span>
                                @endif
                            </div>

                        <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                            <label for="last_name" class="col-md-5 control-label">الاسم الأخير</label>

                            <input id="last_name" type="text" class="form-control" name="last_name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('last_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                                @endif
                            </div>


   <div id="hidden_div">
                               
                               <div class="form-group{{ $errors->has('office_name') ? ' has-error' : '' }}">
                                       <label for="office_name" class="col-md-5 control-label">اسم المكتب</label>
           
                                      <input id="office_name" type="text" class="form-control" name="office_name" >
           
                                           @if ($errors->has('office_name'))
                                               <span class="help-block">
                                                   <strong>{{ $errors->first('office_name') }}</strong>
                                               </span>
                                           @endif
                                       </div>
                                   </div>
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-5 control-label">البريد الإلكتروني</label>

                         <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-5 control-label">كلمة المرور</label>

                            <input id="password" type="password" class="form-control" name="password" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" required title="كلمة المرور لا تقل عن 8 أحرف ، تشمل حروف كبيرة وصغيرة وأرقام ورموز">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-5 control-label">تأكيد كلمة المرور</label>

                           <input id="password-confirm" type="password" class="form-control" name="password_confirmation" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" required title="كلمة المرور لا تقل عن 8 أحرف ، تشمل حروف كبيرة وصغيرة وأرقام ورموز">
                            </div>


                        <div class="form-group{{ $errors->has('userID') ? ' has-error' : '' }}">
                                       <label for="userID" class="col-md-5 control-label">رقم الهوية </label>
           
                                     <input id="userID" type="text" class="form-control" pattern="[0-9]{9,14}" name="userID" required title="رقم الهوية يتكون من 9 الي 14 خانة">
           
                                           @if ($errors->has('userID'))
                                               <span class="help-block">
                                                   <strong>{{ $errors->first('userID') }}</strong>
                                               </span>
                                           @endif
                                       </div>

                        <div class="form-group{{ $errors->has('phonenum') ? ' has-error' : '' }}">
                                       <label for="phonenum" class="col-md-5 control-label">رقم الجوال </label>
           
                                     <input id="phonenum" type="text" class="form-control" pattern="[0-9]{10,16}" name="phonenum" required title="رقم الجوال يتكون من 10 الي 15 خانة">
           
                                           @if ($errors->has('phonenum'))
                                               <span class="help-block">
                                                   <strong>{{ $errors->first('phonenum') }}</strong>
                                               </span>
                                           @endif
                                       </div>



                                 <div id="hidden_div2">
                                   <div class="form-group{{ $errors->has('office_phonenum') ? ' has-error' : '' }}">
                                       <label for="office_phonenum" class="col-md-5 control-label">رقم هاتف المكتب</label>
           <input id="office_phonenum" type="text" class="form-control" name="office_phonenum">
           
                                           @if ($errors->has('office_phonenum'))
                                               <span class="help-block">
                                                   <strong>{{ $errors->first('office_phonenum') }}</strong>
                                               </span>
                                           @endif
                                       </div>
                                   </div>



                        <div class="form-group{{ $errors->has('country') ? ' has-error' : '' }}">
                                <label for="country" class="col-md-5 control-label">الدولة</label>
    <select id="country"  class="form-control"   name="country" >
                                                @foreach ($countries as $country )
                                                <option value="{{$country->id}}">{{$country->name}}</option>
                                                @endforeach
                                               
                                             </select>
                                    @if ($errors->has('country'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('country') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            <div id="hidden_div1">
                                   
                               <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                               <label for="address" class="col-md-5 control-label">العنوان</label>
                                     <input id="address" type="text" class="form-control" name="address">
           
                                           @if ($errors->has('address'))
                                               <span class="help-block">
                                                   <strong>{{ $errors->first('address') }}</strong>
                                               </span>
                                           @endif
                                       </div>
                                   </div>

                        <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
                        <label for="image" class="col-md-5 control-label">صورة الهوية</label>
                                <input id="image" type="file" class="form-control" name="image" required>
                                    @if ($errors->has('image'))
                                      <span class="help-block">
                                        <strong>{{ $errors->first('image') }}</strong>
                                      </span>
                                    @endif
                                </div>
                            <div class="form-button">
                                <button id="submit" type="submit" class="ibtn">تسجيل</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
<script>

        
function showDiv(divId,divId1,divId2,divId3,divId4, element)
{
    document.getElementById(divId).style.display = element.value == 2 ? 'block' : 'none';
    document.getElementById(divId1).style.display = element.value == 2 ? 'block' : 'none';
    document.getElementById(divId2).style.display = element.value == 2 ? 'block' : 'none';
    document.getElementById(divId2).style.display = element.value == 2 ? 'block' : 'none';
    document.getElementById(divId3).style.minHeight = element.value == 2 ? '1320px' : '1059px';
    document.getElementById(divId4).style.top = element.value == 2 ? '23.5%' : '30%';
}
     
  </script>
</body>
</html>