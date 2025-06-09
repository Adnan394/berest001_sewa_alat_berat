@extends('layouts.index')

@section('content')
    <div class="container">
        <h1 class="text-center mt-5">Berita</h1>
        <div class="d-block mx-auto mb-5" style="height: 5px; width: 150px; background-color: #E89B1A"></div>
        <div class="row">
            @foreach ($data as $item)
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ asset('assets/' . $item->image) }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title fw-semibold">{{ $item->title }}</h5>
                            <p class="card-text">{{ $item->description }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection