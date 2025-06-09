@extends('layouts.admin')
@section('content')
<main id="main" class="main">
    
    <div class="pagetitle">
      <h1>Data Berita</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Data Berita</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Data</h5>
              <a href="{{ route('berita.create') }}" class="btn btn-primary justify-content-end mb-3">Tambah Data Berita</a>
              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                        <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td><a href="{{ asset($item->image) }}" target="_blank"><img width="50px" src="{{ asset($item->image) }}" alt=""></a></td>
                        <td>{{ $item->title }}</td>
                        <td>{{ $item->description }}</td>
                        <td>
                            <a href="{{ route('berita.edit', $item->id) }}" class="btn btn-warning mb-2"><i class="bi bi-pencil"></i></a>
                            <form action="{{ route('berita.destroy', $item->id) }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                            </form>
                        </td>
                        </tr>
                    @endforeach
                </tbody>
              </table>
            </div>
          </div>

        </div>
      </div>
    </section>
</main>
@endsection