@extends('layouts.index')

@section('content')
    <div class="container">
        <h1 class="text-center mt-5">Berita</h1>
        <div class="d-block mx-auto mb-5" style="height: 5px; width: 150px; background-color: #E89B1A"></div>
        <div class="row">
            <div class="col-12 col-md-8">
                <div class="card mb-4 border-0" style="width: 100%; height: 350px; 
                    background: linear-gradient(to top, rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0)), 
                                url('{{ asset($headline->image) }}'); 
                    background-position: center; 
                    background-size: cover;">
                        <span class="position-absolute badge rounded-pill bg-danger" style="font-size: 12px; z-index: 1 ; top: 10px; left: 10px">
                            Trending
                        </span>
                    <div class="text-white" style="position: absolute; bottom: 15px; left: 25px">
                        <p class="mb-1">{{ $headline->created_at->diffForHumans() }}</p>
                        <h3>{{ $headline->title }}</h3>
                        <p>{{ Str::limit($headline->description, 100) }}</p>
                            <p class="card-text"><small><a href="/berita/{{ $headline->slug }}" class="text-white" style="font-size: 16px">Lihat Selengkapnya</a></small></p>
                    </div>
                </div>


                @foreach ($data as $item)
                    <div class="card" style="width: 14rem">
                        <img src="{{ asset($item->image) }}" class="card-img-top" style="height: 150px; object-fit: cover" alt="">
                        <span class="position-absolute badge rounded-pill bg-danger" style="font-size: 10px; z-index: 1 ; top: 10px; left: 10px">
                            Trending
                        </span>
                        <div class="card-body">
                            <p class="mb-1 mt-0" style="font-size: 10px">{{ $headline->created_at->diffForHumans() }}</p>
                            <h5 class="card-title fw-semibold" style="font-size: 14px"><a href="/berita/{{ $item->slug }}" class="text-decoration-none text-dark">{{ $item->title }}</a></h5>
                            <p class="card-text" style="font-size: 12px">{{ Str::limit($item->description, 100) }}</p>
                            <p class="card-text"><small><a href="/berita/{{ $item->slug }}" class="" style="font-size: 12px">Lihat Selengkapnya</a></small></p>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="col-12 col-md-4">
                <h3>Berita Lainya</h3>
                @foreach ($other as $item)
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{ asset($item->image) }}" class="rounded-start" style="height: 120px; width: 100%; object-fit: cover" alt="">
                                <span class="position-absolute badge rounded-pill bg-danger" style="font-size: 10px; z-index: 1 ; top: 10px; left: 10px">
                                    Trending
                                </span>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <p class="mb-1 mt-0" style="font-size: 10px">{{ $headline->created_at->diffForHumans() }}</p>
                                    <h5 class="card-title fw-semibold" style="font-size: 14px"><a href="/berita/{{ $item->slug }}" class="text-decoration-none text-dark">{{ $item->title }}</a></h5>
                                    <p class="card-text" style="font-size: 12px">{{ Str::limit($item->description, 100) }}</p>
                                    <p class="card-text"><small><a href="/berita/{{ $item->slug }}" class="" style="font-size: 12px">Lihat Selengkapnya</a></small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection