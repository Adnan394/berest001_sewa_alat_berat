@extends('layouts.index')

@section('content')
    <div class="container">
        <h1 class="text-center mt-5">Berita</h1>
        <div class="d-block mx-auto mb-5" style="height: 5px; width: 150px; background-color: #E89B1A"></div>
        <div class="row">
            <div class="col">
                <img src="{{ asset($data->image) }}" alt="" style="height: 500px; object-fit: cover" class="rounded-3 w-100 d-block">
                <h3 class="mt-5 mb-3">{{ $data->title }}</h3>
                <p>{{ $data->description }}</p>
            </div>
        </div>
    </div>
@endsection