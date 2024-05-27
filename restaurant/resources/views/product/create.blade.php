@extends('layouts.app')
@section('content')
    <form method="POST" action="{{route('product.store')}}" >
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Név</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Ár</label>
            <input type="number" class="form-control" id="price" name="price">
        </div>
        <div class="mb-3">
            <label for="desc">Leírás</label>
            <textarea class="form-control" name="desc" id="desc"></textarea>

        </div>
        <button type="submit" class="btn btn-primary">Küldés</button>
    </form>
@endsection
