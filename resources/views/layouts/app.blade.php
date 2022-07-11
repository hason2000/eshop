<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | E-Shopper</title>
    <link rel="shortcut icon" href="{{ asset('images/icon.png') }}" type="image/png">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="{{ asset('css/prettyPhoto.css') }}">
    <link rel="stylesheet" href="{{ asset('css/price-range.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

</head><!--/head-->
<body>
    @include('layouts.header')
    @yield('content')

    @include('layouts.footer')

    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.scrollUp.min.js') }}"></script>
    <script src="{{ asset('js/price-range.js') }}"></script>
    <script src="{{ asset('js/jquery.prettyPhoto.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>
