<!DOCTYPE html>
<html>
<head>
    <title>Welcome Email</title>
</head>
<body>
<h2>Welcome dear {{$user->name}}</h2>

<p> Your email is <h3 style="color: red">{{$user->email}}</h3>, Your pass <h3 style="color: red">{{$pass}}</h3> Please click on the link to verify your email</p>
<a href="{{url('user/verify', $user->verifyUser->token)}}">Verify Email</a>
</body>
</html>
