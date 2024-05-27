@extends('layouts.app')

@section('content')

    <form method="POST" action="{{route('order.store')}}">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Az Ön neve</label>
            <input type="text" class="form-control" name="name" id="name">
        </div>
        <div class="mb-3">
            <input type="hidden" class="form-control" name="product_id" id="product_id" value="{{$product}}">
        </div>
        <button type="submit" class="btn btn-primary">Rendel</button>
    </form>


@endsection
