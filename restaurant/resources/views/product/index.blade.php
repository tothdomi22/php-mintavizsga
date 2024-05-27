@extends('layouts.app')
@section('content')

    <h2>
    <a href="{{route('product.create')}}" >Új termék felvitele</a>
    </h2>
    @foreach($products as $product)

        {{$product->name}} | {{$product->price}} <a href="{{route('order.create', $product->id)}}">Order</a>

        <form method="POST" action="{{route('product.delete', $product)}}"> @csrf @method("DELETE")
            <button type="submit" class="btn btn-danger">Del</button></form>

        <a href="{{route('product.edit', $product)}}" class="btn btn-warning">Edit</a>

        <br>
    @endforeach
{{$products->links()}}
@endsection
