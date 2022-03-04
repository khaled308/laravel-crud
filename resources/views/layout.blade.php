<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crud</title>
    <link rel="stylesheet" href="{{asset('style.css')}}">
</head>
<body>
    <header>
        <div class="container">
            <h1>Blog</h1>
            <a href="{{route('create')}}" class="post-btn">Add Post</a>
            <a href="{{route('posts')}}" class="post-btn">See All Posts</a>
        </div>
    </header>
    @yield('content')
</body>
</html>
