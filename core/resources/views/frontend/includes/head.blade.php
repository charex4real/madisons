<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
  <title>{{$data->website_name}} | HOME</title>
     @include('frontend.includes.meta')
     

      @include('frontend.includes.icons')


<!-- Document Meta
    ============================================= -->

<!-- Fonts
    ============================================= -->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i%7CPoppins:300,400,500,600,700' rel='stylesheet' type='text/css'>

<!-- Stylesheets 
    ============================================= -->
<link href="{{asset('assets/frontend/css/external.css')}}" rel="stylesheet">
<link href="{{asset('assets/frontend/css/bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('assets/frontend/css/style.css')}}" rel="stylesheet">

<!-- RS5.0 Main Stylesheet -->
<link rel="stylesheet" type="text/css" href="{{asset('assets/frontend/revolution/css/settings.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/frontend/revolution/css/layers.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/frontend/revolution/css/navigation.css')}}"> 


<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
<!--[if lt IE 9]>
      <script src="{{asset('assets/js/html5shiv.js')}}"></script>
      <script src="{{asset('assets/js/respond.min.js')}}"></script>
    <![endif]-->


</head>
<body>
