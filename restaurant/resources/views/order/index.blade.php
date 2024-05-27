@extends('layouts.app')

@section('content')

    @foreach($orders as $order)
    <div> {{$order->name}} || {{$order->product->name}} || {{$order->product->price}} || {{$order->completed ? "completed" : "not completed"}}
        <form method="POST" action="{{route('order.update', $order)}}">
            @csrf
            @method("PUT")
            <input type="hidden" id="completed" name="completed" value="1">
            @if($order->completed == null)
                <button type="submit" class="btn btn-primary">Complete</button>
            @else
                <button disabled class="btn btn-primary">Completed</button>
            @endif
        </form>
    </div>
    @endforeach
    {{$orders->links()}}
@endsection
