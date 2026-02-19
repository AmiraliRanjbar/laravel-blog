<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> قالب مدیریتی </title>
    <link rel="shortcut icon" href="{{'panel/assets/media/favicon.png'}}">
    <meta name="theme-color" content="#5867dd">
    <link rel="stylesheet" href="{{asset('panel/vendors/bundle.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('panel/vendors/slick/slick.css')}}">
    <link rel="stylesheet" href="{{asset('panel/vendors/slick/slick-theme.css')}}">
    <link rel="stylesheet" href="{{asset('panel/vendors/vmap/jqvmap.min.css')}}">
    <link rel="stylesheet" href="{{asset('panel/assets/css/app.css')}}" type="text/css">
</head>
<body class="small-navigation">
@include('admin.layouts.partials.navigation')
<!-- end::navigation -->
<!-- begin::header -->
@include('admin.layouts.partials.header')
<!-- end::header -->
<!-- begin::main content -->
<main class="main-content">
    @yield('content')
</main>
<script src="{{asset('panel/vendors/bundle.js')}}"></script>
<script src="{{asset('panel/vendors/slick/slick.min.js')}}"></script>
<script src="{{asset('panel/vendors/vmap/jquery.vmap.min.js')}}"></script>
<script src="{{asset('panel/assets/js/app.js')}}"></script>

@yield('scripts')
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</html>
