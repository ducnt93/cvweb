<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Login Page </title>

    <!-- Bootstrap CSS -->
    <link href="{{asset('public/cv/admin/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="{{asset('public/cv/admin/css/bootstrap-theme.css')}}" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="{{asset('public/cv/admin/css/elegant-icons-style.css')}}" rel="stylesheet" />
    <link href="{{asset('public/cv/admin/css/font-awesome.css')}}" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="{{asset('public/cv/admin/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('public/cv/admin/css/style-responsive.css')}}" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
    <script src="{{asset('public/cv/admin/js/html5shiv.js')}}"></script>
    <script src="{{asset('public/cv/admin/js/respond.min.js')}}"></script>
    <![endif]-->
</head>

<body class="login-img3-body">

<div class="container">

    <form class="login-form" action="" method="POST">
        <div class="login-wrap">
            {{ Form::token()}}
            <p class="login-img"><i class="icon_lock_alt"></i></p>
            <div class="input-group">
                <span class="input-group-addon"><i class="icon_profile"></i></span>
                {{Form::text('email', '',['class' => 'form-control','placeholder' => 'dovanhung@gmail.com'])}}
            </div>
            <div class="input-group">
                <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                {{Form::password('password',['class' => 'form-control','placeholder' => 'Password'])}}
            </div>
            @if(count($errors)>0)
                <div>
                    <ul class="alert alert-danger">
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <label class="checkbox">
                <input type="checkbox" value="remember-me"> Remember me
                <span class="pull-right"> <a href="#"> Forgot Password?</a></span>
            </label>
            {{Form::submit('Đăng nhập',['class' => 'btn btn-primary btn-lg btn-block'])}}
        </div>
    </form>
    <div class="text-right">
        <div class="credits">
            <a href="#">MediaBridge</a> - <a href="#">Portgas D. Ace</a>
        </div>
    </div>
</div>


</body>
</html>
