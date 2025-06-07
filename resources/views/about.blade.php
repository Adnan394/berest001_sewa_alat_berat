@extends('layouts.index')

@section('content')
    <div class="container">
        <h1 class="text-center mt-5 mmb-3">Tentang Kami</h1>
        <div class="d-block mx-auto mb-5" style="background-color: #E89B1A; height: 5px; width: 150px"></div>

        <div class="row">
            <div class="col-12 col-md-7">
                <p class="text-justify mb-4">
                <strong>Rafa Jaya Crane</strong> adalah perusahaan profesional yang bergerak di bidang 
                <strong>rental alat berat</strong> dan <strong>penyewaan crane</strong> untuk kebutuhan konstruksi, industri, dan infrastruktur. 
                Berdiri sejak tahun 2015, kami telah menjadi mitra terpercaya bagi perusahaan BUMN dan swasta dalam proyek besar seperti 
                <strong>ereksi girder</strong>, pembangunan struktur bangunan, serta pengangkutan alat berat dan logistik proyek. 
                Dengan armada yang lengkap dan tim ahli berpengalaman, <strong>Rafa Jaya Crane</strong> berkomitmen memberikan layanan yang aman, efisien, dan tepat waktu.
                </p>

                <h4 class="fw-semibold">Jenis Alat Berat yang Kami Sediakan:</h4>
                <div class="row">
                <div class="col-md-6">
                    <ul>
                    <li>Crawler Crane</li>
                    <li>Mobile Crane</li>
                    <li>All Terrain Crane</li>
                    <li>Telescopic Truck Crane</li>
                    <li>Knuckle Truck Crane</li>
                    <li>Forklift</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul>
                    <li>Excavator</li>
                    <li>Truck Tronton</li>
                    <li>Truck Trailer</li>
                    <li>Truck Doly & Lowbed</li>
                    <li>Multiaxles</li>
                    </ul>
                </div>
                </div>

                <p class="mt-4">
                Dengan pengalaman lebih dari satu dekade, kami selalu mengutamakan kualitas, keselamatan, dan kepuasan pelanggan. 
                <strong>Rafa Jaya Crane</strong> siap menjadi solusi terbaik untuk kebutuhan sewa alat berat Anda di seluruh Indonesia.
                </p>

                <h4 class="fw-semibold">Informasi Kontak:</h4>
                <p>
                Jika Anda memiliki pertanyaan atau ingin menghubungi kami, silakan hubungi kami melalui detail kontak berikut:
                </p>

                <ul>
                <li>Alamat: Jl. Raya Cikarang - Cibitung No. 50, Cikarang, Bekasi, Jawa Barat 17550</li>
                <li>Telepon: +62 813 8101 2840</li>
                <li>Web: <a href="rafajayacrane.com">rafajayacrane.com</a></li>
                </ul>
            </div>
            <div class="col-12 col-md-5">
                <img loading="lazy" src="{{ asset('assets/img/crane.jpg') }}" width="auto" height="250" class="img-fluid" alt="">
            </div>
        </div>
    </div>
@endsection