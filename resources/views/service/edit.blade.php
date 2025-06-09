@extends('layouts.admin')
@section('content')
<style>
    .upload-wrapper {
        border: 2px dashed #ccc;
        border-radius: 12px;
        padding: 40px;
        text-align: center;
        cursor: pointer;
        transition: border 0.3s ease;
        width: 100%;
    }
    .upload-wrapper:hover {
        border-color: #007bff;
    }
    .upload-wrapper img {
        max-width: 200px;
        margin-top: 15px;
    }
    #inputGroupFile01 {
        display: none;
    }
</style>
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Edit Service</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Service</li>
                    <li class="breadcrumb-item active">Edit Service</li>
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
                                <form action="{{ route('service.update', $data->id) }}" method="POST" enctype="multipart/form-data">
                                    @method('PUT')
                                    @csrf
                                    <div class="row">
                                        <div class="col-12 col-md-7">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="mb-3">
                                                        <label for="judul" class="form-label">Judul</label>
                                                        <input type="text" name="judul" class="form-control" id="judul" value="{{ $data->title }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="mb-3">
                                                        <label for="deskripsi" class="form-label">Deskripsi</label>
                                                        <textarea type="text" name="deskripsi" class="form-control" id="deskripsi" rows="8">{{ $data->description }}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="mb-3">
                                                    <label for="inputGroupFile01" class="form-label">Foto</label>
                                                    <div class="input-group">
                                                        <label class="upload-wrapper" id="uploadLabel">
                                                            <p>Klik atau tarik gambar ke sini</p>
                                                            <img id="preview" src="#" alt="Preview" style="display: none;" />
                                                            <input type="file" name="image" id="inputGroupFile01" value="{{ $data->image }}" accept="image/*">
                                                        </label>
                                                    </div>
                                                    <div class="mt-2 d-flex justify-content-center mt-3">
                                                        <img id="previewImg" src="{{ asset($data->image) }}" alt="" style="max-width: 200px; max-height: 200px;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-5 border border-3 rounded-3 p-3">
                                            <h5>Meta Tag</h5>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="mb-3">
                                                        <label for="meta_title" class="form-label">Meta Title</label>
                                                        <input type="text" name="meta_title" class="form-control" value="{{ $meta->title }}" id="meta_title">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="mb-3">
                                                        <label for="meta_description" class="form-label">Meta Description</label>
                                                        <textarea class="form-control" name="meta_description" id="meta_description" rows="8">{{ $meta->description }}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="mb-3">
                                                        <label for="meta_keyword" class="form-label">Meta Keyword</label>
                                                        <textarea class="form-control" name="meta_keywords" id="meta_keyword" rows="8">{{ $meta->keywords }}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                    <a href="{{ route('service.index') }}" type="button" class="btn btn-secondary">cancel</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <script>
        const input = document.querySelector('#inputGroupFile01');
        const preview = document.querySelector('#preview');
        const previewImg = document.querySelector('#previewImg');

        input.addEventListener('change', (e) => {
            const file = e.target.files[0];
            const reader = new FileReader();

            reader.onload = (e) => {
                previewImg.src = e.target.result;
                previewImg.style.display = 'block';
            }

            if (file) {
                reader.readAsDataURL(file);
            } else {
                previewImg.style.display = 'none';
            }
        });
    </script>
@endsection

