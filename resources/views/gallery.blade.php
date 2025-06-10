@extends('layouts.index')

@section('content')
<div class="container">
    <h1 class="text-center mt-5">Gallery</h1>
    <div class="d-block mx-auto mb-5" style="height: 5px; width: 150px; background-color: #E89B1A"></div>
    <div class="d-flex flex-wrap justify-content-center gap-3">
        @foreach ($data as $item)
            <a href="{{ asset($item->image) }}" class="card border-0" style="width: 16rem" target="_blank">
                <img src="{{ asset($item->image) }}" alt="" style="height: 12rem; object-fit: cover" class="rounded-3 w-100 d-block">
            </a>
        @endforeach
    </div>
</div>
@endsection