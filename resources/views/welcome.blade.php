<!DOCTYPE html>
<html>
<head>
    <title>Page Title</title>
</head>
<body>

<h1>Article</h1>
{{--<a href="http://127.0.0.1:8000/article">Article</a>--}}
{{--<a href="{{route('article', [3, 'foo'])}}">Article</a>--}}
<a href="{{route('article', ['id'=>3,'slog'=>'foo', 'Format'=>'API File'])}}">Article</a>

</body>
</html>


