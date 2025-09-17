<!-- Start Meta -->
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Your trusted partner in digital transformation and innovation.">
<meta name="keywords" content="IT Services, IT Consulting, IT Support, IT Management">
<meta name="author" content="ThemeOri">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Title of Site -->
<title>@yield('title', config('app.name'))</title>
<!-- Favicons -->
<link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.ico') }}">
<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/img/apple-touch-icon.png') }}">
<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/img/favicon-32x32.png') }}">
<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/img/favicon-16x16.png') }}">
<link rel="manifest" href="{{ asset('assets/img/site.webmanifest') }}">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
<!-- Font Awesome CSS -->
<link rel="stylesheet" href="{{ asset('assets/css/all.css') }}">
<!-- Flat Icon CSS -->
<link rel="stylesheet" href="{{ asset('assets/webfonts/flat-icon/flaticon_bantec.css') }}">
<!-- Animate CSS -->
<link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
<!-- Swiper Bundle CSS -->
<link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}">
<!-- Slick CSS -->
<link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
<!-- Magnific Popup CSS -->
<link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
<!-- Mean Menu CSS -->
<link rel="stylesheet" href="{{ asset('assets/css/meanmenu.min.css') }}">
<!-- Custom CSS -->
<link rel="stylesheet" href="{{ asset('assets/sass/style.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">

{{-- ASO Animation --}}

<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

@yield('styles')