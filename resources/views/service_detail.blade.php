@extends('layouts.index')

@section('content')
    <div class="container">
        <h1 class="text-center mt-5">Detail Service</h1>
        <div class="d-block mx-auto mb-5" style="height: 5px; width: 150px; background-color: #E89B1A"></div>
        <div class="row">
            <div class="col-12 col-md-8">
                <img src="{{ asset($data->image) }}" alt="" style="height: 500px; object-fit: cover" class="rounded-3 w-100 d-block">
                <h3 class="mt-5 mb-3">{{ $data->title }}</h3>
                <p>{{ $data->description }}</p>
            </div>
            <div class="col-12 col-md-4">
                <div class="card p-3 mb-3 rounded-3">
                    <h5 class="card-title mb-3">Keunggulan</h5>
                    <div class="w-100">
                        <div class="card p-2 rounded-2 mb-2">Unit Berkualitas & Terawat</div>
                        <div class="card p-2 rounded-2 mb-2">Harga Kompetitif & Fleksibel</div>
                        <div class="card p-2 rounded-2 mb-2">Layanan Cepat & Profesional</div>
                    </div>
                    <a href="https://wa.me/6281381012840" class="btn mt-3 fw-semibold" style="background: #E89B1A" target="_blank">Hubungi Kami Sekarang</a>                    
                </div>

                <div class="">
                    @foreach (\App\Models\Service::all() as $item)
                        <a href="/service/{{ $item->slug }}" class="text-dark text-decoration-none card d-flex flex-row rounded-3 mb-3">
                            <img src="{{ asset($item->image) }}" alt="" style="width: 140px; height: 100px; object-fit: cover; border-top-left-radius: 0.5rem; border-bottom-left-radius: 0.5rem" class="me-3 ">
                            <div class="card-body p-3">
                                <h5 class="card-title">{{ $item->title }}</h5>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection