@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
    @if(count($posts) >= 1)
        @foreach($posts as $post)
            <div class="card m-1 p-2">
            <h3><a href="/posts/{{$post->id}}">{{$post->title}}</h3>
                <small>Written on {{$post->created_at}}</small>
            </div>
        @endforeach
    @else
        <p>Sorry but no posts were found</p>
    @endif
@endsection