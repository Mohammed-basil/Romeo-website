<!DOCTYPE html>
<html>
<head>
    <title>Welcome Email</title>
</head>

<body>
<h1>  موقع روميو </h1>   
<br/> 
<h2>  مرحبا {{ $user['first_name'] }}{{ $user['last_name'] }}   </h2> 
<br/>
<h2>  بيانات المستخدم</h2>

<br/>
 رقم الحساب:
{{$user['account_number']}}
<br/>
إيميل المستخدم: {{$user['email']}} , للتحقق من الحساب انقر على الرابط في الأسفل
<br/>
<a href="{{url('user/verify', $user->verifyUser->token)}}">التحقق من الإيميل</a>
</body>

</html>