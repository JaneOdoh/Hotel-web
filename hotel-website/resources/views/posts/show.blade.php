<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<li>{{ $posts->head }}</li>
<li>{{ $posts->body }}</li>
<li>{{ $posts->created_at }}</li>
<a href="/update/{{ $posts->id }}">Edit Post</a>

</body>
</html>