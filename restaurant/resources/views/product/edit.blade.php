@extends('layouts.app')
@section('content')
    <form method="POST" action="{{route('product.update', $product)}}" >
        @method('PUT')
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Név</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="{{$product->name}}">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Ár</label>
            <input type="number" class="form-control" id="price" name="price" placeholder="{{$product->price}}">
        </div>
        <div class="mb-3">
            <label for="desc">Leírás</label>
            <textarea class="form-control" name="desc" id="desc" placeholder="{{$product->desc}}"></textarea>

        </div>
        <button type="submit" class="btn btn-primary">Küldés</button>
    </form>
@endsection
