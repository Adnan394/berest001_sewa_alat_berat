@extends('layouts.admin')
@section('content')
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Edit Portofolio</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Portofolio</li>
                <li class="breadcrumb-item active">Edit Portofolio</li>
            </ol>
        </nav>
    </div>
    <!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="row">
                <div class="col">
                    <div class="card p-3">
                        <div class="card-body">
                            <h5 class="card-title">Tambah Data</h5>
                            <form action="{{ route('portofolio.update', $data->id) }}" method="POST" enctype="multipart/form-data">
                                @method('PUT')
                                @csrf
                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3">
                                                <label for="name" class="form-label">Name</label>
                                                <input type="text" name="name" class="form-control" id="name" value="{{ $data->name }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3">
                                                <label for="partner" class="form-label">Partner</label>
                                                <textarea type="text" name="partner" class="form-control" id="partner" rows="8">{{ $data->partner }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3">
                                                <label for="year" class="form-label">Tahun</label>
                                                <textarea type="text" name="year" class="form-control" id="year" rows="8">{{ $data->year }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                <button type="submit" class="btn btn-primary">Save</button>
                                <a href="{{ route('portofolio.index') }}" type="button" class="btn btn-secondary">cancel</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

@endsection

