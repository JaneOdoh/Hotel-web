<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>All posts</h1>
    @foreach($posts as $post)
  
    <li><a href="/show/{{ $post->id }}">{{ $post->head }}</a></li>
    
    <form action="/delete/{{ $post->id }}" method="post">
        {{-- @method('delete')
        @csrf --}}
        <input type="submit" value="Delete Post" name="" id="">
    </form>
    
    @endforeach
</body>
</html>