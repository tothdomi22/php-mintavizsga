@extends('layouts.app')
@section('content')

    <form method="POST" action="{{route('post.update', $post)}}">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">Cím</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="{{$post->title}}">
        </div>
        <div class="mb-3">
            <label for="author" class="form-label">Szerző</label>
            <input type="text" class="form-control" id="author" name="author" placeholder="{{$post->author}}">
        </div>
        <div class="form-floating">
            <textarea name="intro" id="intro" cols="30" rows="5" placeholder="{{$post->intro}}"></textarea>
            <label for="intro" class="form-control">Bevezető</label>
        </div>
        <div class="form-floating">
            <textarea name="content" id="content" cols="30" rows="10" placeholder="{{$post->content}}"></textarea>
            <label for="content" class="form-control">Tartalom</label>
        </div>
        <button type="submit">Mentés</button>
    </form>

@endsection
