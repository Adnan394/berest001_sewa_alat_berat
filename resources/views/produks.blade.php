@extends('layouts.index')

@section('content')
    <div class="container">
        <h1 class="text-center mt-5">Produk</h1>
        <div class="d-block mx-auto mb-5" style="height: 5px; width: 150px; background-color: #E89B1A"></div>
        <div class="d-flex gap-3 justify-content-center">
            @foreach ($data as $item)
                <a href="/produk/{{ $item->slug }}" class="card text-decoration-none text-dark" style="width: 16rem">
                    <img src="{{ asset($item->image) }}" class="card-img-top" style="height: 150px; object-fit: cover" alt="...">
                    <div class="card-body">
                        <h5 class="card-title fw-semibold" style="font-size: 14px">{{ $item->title }}</h5>
                        <p class="card-text" style="font-size: 12px">{{ Str::limit($item->description, 100) }}</p>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
@endsection