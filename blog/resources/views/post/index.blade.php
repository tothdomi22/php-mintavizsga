@extends('layouts.app')

@section('content')

    <button href="{{route('post.create')}}">Új post</button>

    <a href="{{route('post.create')}}">Uj post</a>

    <ul class="list-group">
        @foreach($posts as $post)
        <li class="list-group-item">
            <h6>{{$post->created_at}}</h6>
            <a href="{{route('post.show', $post)}}"><h2 class="fw-bold"> {{$post->title}} </h2></a>
            <h5 class="fst-italic">- {{$post->author}} -</h5>
            <div>{{$post->intro}}</div>
            <form method="POST" action="{{route('post.delete', $post)}}">
                @csrf
                <button type="submit">Del</button>
            </form>
            <a href="{{route('post.edit', $post)}}">Edit</a>
        </li>

        @endforeach
        {{$posts->links()}}
    </ul>

@endsection
