<!DOCTYPE html>
<html>
<head>
    <title>@yield('title' , 'home')</title>
</head>
<body>
<header>
    <ul>
        <li><a href="{{route('home')}}">Home</a></li>
        <li><a href="{{route('articles')}}">Articles</a></li>
        <li><a href="{{route('about')}}">About</a></li>
    </ul>
</header>
</body>
</html>







