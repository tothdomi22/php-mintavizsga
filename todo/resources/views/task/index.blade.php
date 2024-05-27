@extends('layouts.app')
@section('content')
    <div> <h1> <a href="{{route('task.create')}}">Create new task</a></h1></div>


    <ul class="list-group">
        <h1>Incomplete</h1>

@foreach($tasks as $task)
    @if($task->completed == null)
    <li class="list-group-item"> {{$task->title}} || {{$task->User->name}}
        <form method="POST" action="{{route('task.destroy', $task)}}"> @csrf
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
        <button href="{{route('task.edit', $task)}}" class="btn btn-success">Edit</button>
        <form method="POST" action="{{route('task.complete', $task)}}">
            @csrf
            @method("PUT")
            @if($task->completed ==null)
            <button type="submit" class="btn btn-primary">Complete</button>
            @endif
        </form>
    </li>
   @endif

@endforeach

</ul>




    <ul class="list-group">
        <h1>Completed</h1>

        @foreach($tasks as $task)
            @if($task->completed == 1)
            <li class="list-group-item"> {{$task->title}} || {{$task->User->name}}
                <form method="POST" action="{{route('task.destroy', $task)}}"> @csrf
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
                <button href="{{route('task.edit', $task)}}" class="btn btn-success">Edit</button>
                <form method="POST" action="{{route('task.complete', $task)}}">
                    @csrf
                    @method("PUT")
                    @if($task->completed ==null)
                        <button type="submit" class="btn btn-primary">Complete</button>
                    @endif
                </form>
            </li>
            @endif

        @endforeach
    </ul>

@endsection
