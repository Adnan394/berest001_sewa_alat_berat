
@extends('layouts.index')
@section('content')
    <section class="jumbotron">
        <div class="d-flex justify-content-center align-items-center" style="height: 500px; width: 100%; background-image: linear-gradient(to top, rgba(0, 0, 0, 0.5) 0%, rgba(0, 0, 0, 0.5) 50%), url({{ asset('assets/img/forklift.png') }}); background-size: cover; background-position: center">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-6 d-flex flex-column justify-content-center" style="height: 100%">
                    <div class="d-md-flex flex-column align-items-start px-3">
                        <div class="">
                            {{-- <h1 class="fw-semibold text-underline d-inline text-dark" style="
                                background: linear-gradient(to top, rgba(232, 155, 25, 1) 30%, transparent 50%);
                                display: inline;">Solusi Terbaik untuk Sewa Alat Berat, Murah dan Terpercaya</h1>
                            <br> --}}
                            <h1 class="fw-semibold text-underline text-white">Solusi Terbaik untuk Sewa Alat Berat, Murah dan Terpercaya</h1>

                            <p class="fw-semibold mt-3 text-white">
                                Rafa Jaya Crane: menyediakan berbagai jenis dan kapasitas alat berat, melayani seluruh wilayah Indonesia.
                            </p>
                            <a href="https://wa.me/6281381012840" target="_blank" class="btn text-dark fw-semibold shadow hubungi-kami mt-3" style="background: rgb(232, 155, 26)"><i class="bi bi-whatsapp me-2"></i>Hubungi Kami</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="layanan" class="">
        <div class="container">
            <h1 class="text-center mt-5">Layanan Kami</h1>
            <div class="d-block mx-auto mb-5" style="height: 5px; width: 150px; background-color: #E89B1A"></div>
            <h3 class="text-center mb-3">Pilihan Rental Kami Lengkap!</h3>
            <div class="d-flex justify-content-center gap-3 flex-wrap">
                <div class="card" style="width: 12rem">
                    <img loading="lazy" src="{{ asset('assets/img/forklift.png') }}" class="card-img-top" style="height: 100px; object-fit: cover" alt="...">
                    <div class="card-body">
                        <p style="font-size: 14px; font-weight: bold" class="card-title fw-semibold">Jasa Sewa Forklift</p>
                    </div>
                </div>
                <div class="card" style="width: 12rem">
                    <img loading="lazy" src="{{ asset('assets/img/crane.jpg') }}" class="card-img-top" style="height: 100px; object-fit: cover" alt="...">
                    <div class="card-body">
                        <p style="font-size: 14px; font-weight: bold" class="card-title fw-semibold">Rental Crane</p>
                    </div>
                </div>
                <div class="card" style="width: 12rem">
                    <img loading="lazy" src="{{ asset('assets/img/truck.jpg') }}" class="card-img-top" style="height: 100px; object-fit: cover" alt="...">
                    <div class="card-body">
                        <p style="font-size: 14px; font-weight: bold" class="card-title fw-semibold">Sewa Truk</p>
                    </div>
                </div>
                <div class="card" style="width: 12rem">
                    <img loading="lazy" src="{{ asset('assets/img/exavator.jpg') }}" class="card-img-top" style="height: 100px; object-fit: cover" alt="...">
                    <div class="card-body">
                        <p style="font-size: 14px; font-weight: bold" class="card-title fw-semibold">Sewa Exacavator</p>
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-center mt-5">
                <a href="#" class="btn fw-semibold" style="background: #E89B1A">Lihat Semua Layanan</a>
            </div>
        </div>
    </section>

    <section class="keunggulan">
        <div class="container">
            <h1 class="text-center mt-5">Keunggulan Jasa Kami</h1>
            <div class="d-block mx-auto mb-5" style="height: 5px; width: 150px; background-color: #E89B1A"></div>
            <div class="row">
                <div class="col-sm-12 col-md-7">
                    <ul style="font-size: 18px">
                        <li><p>Unit Berkualitas & Terawat – Kami menyediakan alat berat dengan performa tinggi dan perawatan rutin untuk memastikan kelancaran setiap proyek konstruksi Anda.</p></li>
                        <li><p>Harga Kompetitif & Fleksibel – Menawarkan skema sewa harian hingga bulanan dengan harga bersaing, fleksibel, dan transparan.</p></li>
                        <li><p>Layanan Cepat & Profesional – Didukung oleh tim operator berpengalaman dan respons cepat, kami siap melayani proyek Anda dari seluruh wilayah Indonesia.</p></li>
                    </ul>
                    <h2>Jasa Melayani Seluruh Wilayah Indonesia</h2>
                    <img loading="lazy" src="{{ asset('assets/img/peta.png') }}" width="100%" alt="">
                </div>
                <div class="col-5 d-none d-md-block" style="background-image: url({{ asset('assets/img/man-truck.jpg') }}); background-size: cover; background-position: center"></div>
            </div>
            
        </div>
    </section>

    <section class="offering my-5 container" style="">
        <div class="p-5" style="background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url({{ asset('assets/img/truck.jpg') }}) center/cover; border-radius: 20px">
            <h2 class="text-white">Sewa Alat Berat Berkualitas untuk Proyek Anda</h2>
            <p class="text-white d-none d-md-block">Butuh alat berat seperti crane, forklift, excavator atau alat berat lain untuk mendukung proyek konstruksi Anda? Kami menyediakan jasa sewa alat berat lengkap dengan armada terawat dan operator profesional, siap melayani kebutuhan proyek di seluruh Indonesia. Efisien, tepat waktu, dan harga bersaing!</p>
            <h5 class="text-white">Hubungi Kami Sekarang – <span style="color: #E89B1A">Dapatkan Penawaran Terbaik!</span></h5>
            <a href="htpps://wa.me/6281381012840" target="_blank" class="btn fw-semibold text-white" style="background: #E89B1A">Hubungi kami</a>
        </div>
    </section>

    <section id="portofolio">
        <div class="container">
            <h1 class="text-center mt-5">Portofolio Kami</h1>
            <div class="d-block mx-auto mb-5" style="height: 5px; width: 150px; background-color: #E89B1A"></div>
            <table class="table table-bordered table-striped text-left align-middle">
                <thead class="" style="background: #E89B1A">
                <tr>
                    <th>No.</th>
                    <th>Project Name</th>
                    <th>Partner</th>
                    <th>Year</th>
                </tr>
                </thead>
                <tbody>
                <tr><td>1</td><td>Tol Pekanbaru - Padang</td><td>PT. Wijaya Karya (Persero).Tbk</td><td>2021</td></tr>
                <tr><td>2</td><td>Terminal Terpadu Kijing - Kalbar</td><td>PT. Wijaya Karya (Persero).Tbk</td><td>2021</td></tr>
                <tr><td>3</td><td>High Speed Rail Jakarta - Bandung</td><td>PT. Zhongyin Tiange Trade</td><td>2021</td></tr>
                <tr><td>4</td><td>PT. HYUNDAI Motor Manufacturing Indonesia, Bekasi</td><td>PT. Shin Bangun Indorayaa</td><td>2021</td></tr>
                <tr><td>5</td><td>Renovasi Plaza Sarinah, Jakarta Pusat</td><td>PT. Nikko Steel Indonesia</td><td>2021</td></tr>
                <tr><td>6</td><td>Tangguh Expansion Project, Papua</td><td>CSTS</td><td>2020</td></tr>
                <tr><td>7</td><td>PT. MC PET Filmm Indonesia, Banten</td><td>PT. Amano Indonesia</td><td>2020</td></tr>
                <tr><td>8</td><td>PT. BBPI British Petroleum, Banten</td><td>PT. Sinar Samudera Abadi</td><td>2020</td></tr>
                <tr><td>9</td><td>Erection Girder Tol Serang Panimbang, Banten</td><td>PT. Wijaya Karya (Persero). Tbk</td><td>2020</td></tr>
                <tr><td>10</td><td>Tol Bogor Outer Ring Road, Bogor</td><td>PT. PP (Persero). Tbk</td><td>2018 - 2020</td></tr>
                <tr><td>11</td><td>Erection Girder Tol Trans Sumatera</td><td>PT. PP (Persero). Tbk</td><td>2020</td></tr>
                <tr><td>12</td><td>Erection Girder Tol Trans Sumatera</td><td>PT. Adhi Karya. Tbk</td><td>2017 - 2018</td></tr>
                <tr><td>13</td><td>Erection Girder Tol Trans Sumatera</td><td>PT. Waskita Karya. Tbk</td><td>2017 - 2018</td></tr>
                <tr><td>14</td><td>Lampung - Kayu Agung</td><td>PT. Waskita Karya. Tbk</td><td>2017 - 2018</td></tr>
                <tr><td>15</td><td>Erection Girder Tol Trans Sumatera 40 KM</td><td>PT. PP (Persero). Tbk</td><td>2017 - 2018</td></tr>
                <tr><td>16</td><td>Erection Girder Tol Palembang - Batang</td><td>PT. Waskita Karya. Tbk</td><td>2017</td></tr>
                <tr><td>17</td><td>and many more</td><td></td><td></td></tr>
                </tbody>
            </table>
        </div>
    </section>

    
    <section id="produk" class="mt-3">
        <div class="container">
            <h1 class="text-center mt-5">Produk Kami</h1>
            <div class="d-block mx-auto mb-5" style="height: 5px; width: 150px; background-color: #E89B1A"></div>
            <h3 class="text-center mb-3">Produk Yang Kami Tawarkan Lengkap!</h3>
            <div class="d-flex justify-content-center gap-3 flex-wrap">
                <div class="card" style="width: 12rem">
                    <img loading="lazy" src="{{ asset('assets/img/forklift.png') }}" class="card-img-top" style="height: 100px; object-fit: cover" alt="...">
                    <div class="card-body">
                        <p style="font-size: 14px; font-weight: bold" class="card-title fw-semibold">Jasa Sewa Forklift</p>
                    </div>
                </div>
                <div class="card" style="width: 12rem">
                    <img loading="lazy" src="{{ asset('assets/img/crane.jpg') }}" class="card-img-top" style="height: 100px; object-fit: cover" alt="...">
                    <div class="card-body">
                        <p style="font-size: 14px; font-weight: bold" class="card-title fw-semibold">Rental Crane</p>
                    </div>
                </div>
                <div class="card" style="width: 12rem">
                    <img loading="lazy" src="{{ asset('assets/img/truck.jpg') }}" class="card-img-top" style="height: 100px; object-fit: cover" alt="...">
                    <div class="card-body">
                        <p style="font-size: 14px; font-weight: bold" class="card-title fw-semibold">Sewa Truk</p>
                    </div>
                </div>
                <div class="card" style="width: 12rem">
                    <img loading="lazy" src="{{ asset('assets/img/exavator.jpg') }}" class="card-img-top" style="height: 100px; object-fit: cover" alt="...">
                    <div class="card-body">
                        <p style="font-size: 14px; font-weight: bold" class="card-title fw-semibold">Sewa Exacavator</p>
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-center mt-5">
                <a href="#" class="btn fw-semibold" style="background: #E89B1A">Lihat Semua Layanan</a>
            </div>
        </div>
    </section>

    <section id="partner" class="mb-5">
        <div class="container">
            <h1 class="text-center mt-5">Partner Kami</h1>
            <div class="d-block mx-auto mb-5" style="height: 5px; width: 150px; background-color: #E89B1A"></div>
            <div class="d-flex flex-wrap justify-content-center align-items-center gap-4">
                <img loading="lazy" src="{{ asset('assets/img/pln.webp') }}" alt="" height="50px" class="m-2 partner-img">
                <img loading="lazy" src="{{ asset('assets/img/aoset.png') }}" alt="" height="50px" class="m-2 partner-img">
                <img loading="lazy" src="{{ asset('assets/img/wika.png') }}" alt="" height="50px" class="m-2 partner-img">
                <img loading="lazy" src="{{ asset('assets/img/hutama.png') }}" alt="" height="50px" class="m-2 partner-img">
                <img loading="lazy" src="{{ asset('assets/img/adhi.webp') }}" alt="" height="50px" class="m-2 partner-img">
                <img loading="lazy" src="{{ asset('assets/img/wakita.png') }}" alt="" height="50px" class="m-2 partner-img">
                <img loading="lazy" src="{{ asset('assets/img/pp.png') }}" alt="" height="50px" class="m-2 partner-img">
                <img loading="lazy" src="{{ asset('assets/img/pertamina.png') }}" alt="" height="50px" class="m-2 partner-img">
                <img loading="lazy" src="{{ asset('assets/img/bukaka.png') }}" alt="" height="50px" class="m-2 partner-img">
                <img loading="lazy" src="{{ asset('assets/img/saipem.png') }}" alt="" height="50px" class="m-2 partner-img">
                <img loading="lazy" src="{{ asset('assets/img/mcci.png') }}" alt="" height="50px" class="m-2 partner-img">
                <img loading="lazy" src="{{ asset('assets/img/hyundai.png') }}" alt="" height="50px" class="m-2 partner-img">
            </div>
        </div>
    </section>

    <section id="gallery" class="mb-5">
        <div class="container">
            <h1 class="text-center mt-5">Gallery</h1>
            <div class="d-block mx-auto mb-5" style="height: 5px; width: 150px; background-color: #E89B1A"></div>
            <div class="d-flex flex-wrap justify-content-center gap-3">
                <img loading="lazy" src="{{ asset('assets/img/gallery/gallery1.jpg') }}" class="card-img-top gallery" alt="Gallery Image">
                <img loading="lazy" src="{{ asset('assets/img/gallery/gallery2.jpg') }}" class="card-img-top gallery" alt="Gallery Image">
                <img loading="lazy" src="{{ asset('assets/img/gallery/gallery3.jpg') }}" class="card-img-top gallery" alt="Gallery Image">
                <img loading="lazy" src="{{ asset('assets/img/gallery/gallery4.jpg') }}" class="card-img-top gallery" alt="Gallery Image">
                <img loading="lazy" src="{{ asset('assets/img/gallery/gallery5.jpg') }}" class="card-img-top gallery" alt="Gallery Image">
                <img loading="lazy" src="{{ asset('assets/img/gallery/gallery6.jpg') }}" class="card-img-top gallery" alt="Gallery Image">
                <img loading="lazy" src="{{ asset('assets/img/gallery/gallery7.jpg') }}" class="card-img-top gallery" alt="Gallery Image">
                <img loading="lazy" src="{{ asset('assets/img/gallery/gallery8.jpg') }}" class="card-img-top gallery" alt="Gallery Image">
                <img loading="lazy" src="{{ asset('assets/img/gallery/gallery9.jpg') }}" class="card-img-top gallery" alt="Gallery Image">
                <img loading="lazy" src="{{ asset('assets/img/gallery/gallery10.jpg') }}" class="card-img-top gallery" alt="Gallery Image">
            </div>

            <div class="d-flex justify-content-center">
                <a href="" class="btn mt-3 fw-semibold" style="background-color: #E89B1A">Lihat Gallery Lengkap</a>
            </div>
        </div>
    </section>

@endsection