@extends('layouts.app')

@section('content')

    <form method="POST" action="{{route('task.update', $task)}}">
        @csrf
        @method("PUT")
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="{{$task->title}}">
        </div>
        <div class="mb-3">
            <label for="desc" class="form-label">Desc</label>
            <input type="text" class="form-control" id="desc" name="desc" placeholder="{{$task->desc}}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection
