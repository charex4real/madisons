{{-- This includes the header for loading all css files --}}

@include('frontend.includes.head') 

{{-- Loads Preloader and Navigation bar --}}

{{--@include('frontend.includes.preloader') --}}
     @include('frontend.includes.header')


{{-- Loads the body contents of the website --}}
@yield('content') 

{{-- Loads the footer and associated javascript files --}}
@include('frontend.includes.footer')
 @include('frontend.includes.script-footer')