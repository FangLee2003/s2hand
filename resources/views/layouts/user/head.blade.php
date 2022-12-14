<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="robots" content="all,follow">

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

@notifyCss
<!-- gLightbox gallery-->
<link rel="stylesheet" href="{{asset('vendor/glightbox/css/glightbox.min.css')}}">
<!-- Range slider-->
<link rel="stylesheet" href="{{asset('vendor/nouislider/nouislider.min.css')}}">
<!-- Choices CSS-->
<link rel="stylesheet" href="{{asset('vendor/choices.js/public/assets/styles/choices.min.css')}}">
<!-- Swiper slider-->
<link rel="stylesheet" href="{{asset('vendor/swiper/swiper-bundle.min.css')}}">
<!-- Google fonts-->
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@300;400;700&amp;display=swap">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Martel+Sans:wght@300;400;800&amp;display=swap">
<!-- theme stylesheet-->
<link rel="stylesheet" href="{{asset('css/style.pink.css')}}" id="theme-stylesheet">
<!-- Custom stylesheet - for your changes-->
<link rel="stylesheet" href="{{asset('css/custom.css')}}">
<!-- Favicon-->
<link rel="shortcut icon" href="{{asset('img/favicon.png')}}">

@yield('head')
