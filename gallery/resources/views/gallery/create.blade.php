@extends('layouts.app')
@section('content')

    <form enctype="multipart/form-data" method="POST" action="{{route('gallery.store')}}">
        @csrf
        <div class="col-8">
            <label for="csv" class="form-label">Borítókép</label>
            <input
                type="file"
                class="form-control"
                name="image"
                id="image"
            >
        </div>

        <div class="col-8">
            <label for="title" class="form-label">Könyv címe</label>
            <input
                type="text"
                class="form-control @error('title')is-invalid @enderror"
                name="title"
                id="title"
            >
        </div>
        <button type="submit">Mentés</button>

    </form>


@endsection
