@extends('layout')
@section('content')
    <div class="container">
        <form method="POST" action="{{route('update',$post->id)}}">
            @csrf
            <div class="title">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" value="{{$post->title}}">
            </div>
            <div class="content">
                <label for="content">Post</label>
                <textarea name="content" id="" cols="30" rows="10">{{$post->content}}</textarea>
            </div>
            <input type="submit" value="Save">
        </form>
    </div>
@endsection
