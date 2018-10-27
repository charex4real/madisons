<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

   @include('frontend.includes.meta')
     

      @include('frontend.includes.icons')

<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i%7CPoppins:300,400,500,600,700' rel='stylesheet' type='text/css'>

<!-- Stylesheets
    ============================================= -->
<link href="{{asset('assets/frontend/css/external.css')}}" rel="stylesheet">
<link href="{{asset('assets/frontend/css/bootstrap.min.css')}}" rel="stylesheet">
<link rel="stylesheet/less" type="text/css" href="{{asset('assets/frontend/less/style.less')}}" />
<script src="{{asset('assets/frontend/js/less.js')}}" type="text/javascript"></script>

<script src="{{asset('assets/frontend/js/jquery-2.2.4.min.js')}}"></script>


<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
<!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
      <script src="assets/js/respond.min.js"></script>
    <![endif]-->

<!-- Document Title
    ============================================= -->
<title>Mount | Multi-purpose Business Html5 Template</title>
</head>
<body>

{{-- Loads Preloader and Navigation bar --}}

{{--@include('frontend.includes.preloader') --}}

   
  	 @include('frontend.includes.header')

<section id="page-title" class="page-title bg-overlay bg-overlay-dark">
	<div class="bg-section" >

	</div>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12  col-md-12">
				<div class="title-1 text-center">
					<ol class="breadcrumb">
						<li><a href="index-2.html">Home</a></li>
						<li class="active">shop</li>
					</ol>
					<div class="title-heading">
						<h2>Our SHop</h2>
					</div>
				</div><!-- .page-title end -->
			</div><!-- .col-md-12 end -->
		</div><!-- .row end -->
	</div><!-- .container end -->
</section><!-- #page-title end -->






{{-- Loads the body contents of the website --}}
@yield('content') 

{{-- Loads the footer and associated javascript files --}}
@include('frontend.includes.footer')
 @include('frontend.includes.script-footer')