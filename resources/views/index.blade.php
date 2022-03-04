@extends('layout')
@section('content')
    <div class="posts">
        <div class="container">
            @foreach ( $posts as $post )
            <div class="post">
                <h2>{{$post['title']}}</h2>
                <p>{{$post['content']}}</p>
                <a href="{{route('edit',$post->id)}}">Edit</a>
            </div>
            @endforeach
        </div>
    </div>
@endsection
