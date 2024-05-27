@extends('layouts.app')

@section('content')
    <form action="{{route('task.store')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="mb-3">
            <label for="desc" class="form-label">Desc</label>
            <input type="text" class="form-control" id="desc" name="desc">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
