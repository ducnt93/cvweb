<!DOCTYPE HTML>
<html>
<body>
<head>
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <script type="application/x-javascript"> addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);
        function hideURLbar() {
            window.scrollTo(0, 1);
        } </script>
    <link href="{{asset('/css/bootstrap-3.1.1.min.css')}}" rel='stylesheet' type='text/css'/>
    <link href="{{asset('/cv/css/bootstrap-datepicker3.css')}}" rel='stylesheet' type='text/css'/>
    <!-- Custom Theme files -->
    <link href="{{asset('/css/style.css')}}" rel='stylesheet' type='text/css'/>
    <link href='//fonts.googleapis.com/css?family=Roboto:100,200,300,400,500,600,700,800,900' rel='stylesheet'
          type='text/css'>
    <!----font-Awesome----->
    <link href="{{asset('/css/font-awesome.css')}}" rel="stylesheet">
    <!----font-Awesome----->
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
</head>