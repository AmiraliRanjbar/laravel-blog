<!DOCTYPE html>
<html>
<head>
    <title>@yield('title' , 'home')</title>
</head>
<body>
@include('.Frontend.layouts.partials.header')

@yield('content');

@include('.Frontend.layouts.partials.footer',['section'=>'foo'])

</body>
</html>






