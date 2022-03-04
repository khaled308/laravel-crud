@extends('layout')
@section('content')
    <div class="container">
        <form method="POST" action="{{route('store')}}">
            @csrf
            <div class="title">
                <label for="title">Title</label>
                <input type="text" name="title" id="title">
            </div>
            <div class="content">
                <label for="content">Post</label>
                <textarea name="content" id="" cols="30" rows="10"></textarea>
            </div>
            <input type="submit" value="Save">
        </form>
    </div>
@endsection
