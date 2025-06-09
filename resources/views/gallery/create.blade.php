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
            <h1>Tambah Gallery</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Gallery</li>
                    <li class="breadcrumb-item active">Tambah Gallery</li>
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
                                <form action="{{ route('gallery.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="mb-3">
                                            <label for="inputGroupFile01" class="form-label">Foto</label>
                                            <div class="input-group">
                                                <label class="upload-wrapper" id="uploadLabel">
                                                    <p>Klik atau tarik gambar ke sini</p>
                                                    <img id="preview" src="#" alt="Preview" style="display: none;" />
                                                    <input type="file" accept="image/*" name="image" id="inputGroupFile01">
                                                </label>
                                            </div>
                                            <div class="mt-2 d-flex justify-content-center mt-3">
                                                <img id="previewImg" src="" alt="" style="max-width: 200px; max-height: 200px;">
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                    <a href="{{ route('gallery.index') }}" type="button" class="btn btn-secondary">cancel</a>
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

