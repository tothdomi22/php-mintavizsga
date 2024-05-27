@extends('layouts.app')
@section('content')

    <a href="{{route('gallery.create')}}">Új kép feltöltése</a>

    @foreach($galleries as $gallery)
        <div>
            <img src="{{$gallery->image}}" alt="fuck">
        </div>
    @endforeach


@endsection

