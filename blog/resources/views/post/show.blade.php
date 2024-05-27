@extends('layouts.app')
@section('content')
<ul class="list-group">
    <li class="list-group">{{$post->title}}</li>
    <li class="list-group">{{$post->author}}</li>
    <li class="list-group">{{$post->intro}}</li>
    <li class="list-group">{{$post->content}}</li>
</ul>
<div>________________________________________________</div>
    @foreach($comments as $comment)
        <div>{{$comment->content}}</div>
    @endforeach



@endsection
