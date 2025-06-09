<!doctype html>
<html lang="en">
  <head>
    <!-- Basic Meta Tags -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- Title & Description for SEO -->
    <title>{{ $title }}</title>
    <meta name="description" content="{{ $description }}" />
    <meta name="keywords" content="{{ $keywords }}" />
    <meta name="author" content="{{ $author }}" />

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://www.rafajayacrane.com/" />
    <meta property="og:title" content="{{ $title }}" />
    <meta property="og:description" content="{{ $description }}" />
    <meta property="og:image" content="https://www.rafajayacrane.com/assets/img/forklift.jpg" />

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:url" content="https://www.rafajayacrane.com/" />
    <meta name="twitter:title" content="{{ $title }}" />
    <meta name="twitter:description" content="{{ $description }}" />
    <meta name="twitter:image" content="https://www.rafajayacrane.com/assets/img/forklift.jpg" />

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('assets/img/logo_rafa_jaya_crane.png') }}" type="image/png" />

    <!-- Canonical URL -->
    <link rel="canonical" href="https://www.rafajayacrane.com/" />

    {{-- library  --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
  </head>
  <body>
    <div class="pt-2 d-flex justify-content-center align-items-center" style="background-color: #E89B1A">
        <p class="d-none d-md-block text-center fw-semibold" style="font-size: 14px">Rafa Jaya Crane: Solusi Terbaik untuk Sewa Alat Berat, Murah dan Terpercaya</p>
        <p class="d-block d-md-none text-center fw-semibold" style="font-size: 10px">Rafa Jaya Crane: Solusi Terbaik untuk Sewa Alat Berat, Murah dan Terpercaya</p>
    </div>
    <nav class="navbar navbar-expand-lg bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="/"><img loading="lazy" width="60px" src="{{ asset('assets/img/logo_rafa_jaya_crane.png') }}" alt=""></a>
            {{-- <button class="navbar-toggler border border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button> --}}
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" id="toggleButton">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarNav">
                <ul class="navbar-nav fw-semibold d-flex gap-3" style="font-size: 16px">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/tentang">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/#layanan">Layanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/#produk">Produk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/#portofolio">Portofolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/#gallery">Galeri</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/#berita">Berita</a>
                    </li>
                    <li class="nav-item">
                        <a href="https://wa.me/6281381012840" target="_blank" class="btn text-dark fw-semibold" style="background: #E89B1A"><i class="bi bi-whatsapp me-2"></i>Hubungi Kami</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    
    <a href="https://wa.me/6281381012840" target="_blank" class="whatsapp-button shadow">
        <i class="bi bi-whatsapp text-white" style="font-size: 48px;"></i>
    </a>

    <footer class="mt-5" style="background: #E89B1A">
        <div class="container">
            <div class="row py-5">
                <div class="col-12 col-md-4">
                    <h5 class="fw-bold">About</h5>
                    <p>Rafa Jaya Crane adalah perusahaan profesional yang bergerak di bidang rental alat berat dan penyewaan crane untuk kebutuhan konstruksi, industri, dan infrastruktur. Berdiri sejak tahun 2015, kami telah menjadi mitra terpercaya bagi perusahaan BUMN dan swasta dalam proyek besar seperti ereksi girder, pembangunan struktur bangunan, serta pengangkutan alat berat dan logistik proyek. Dengan armada yang lengkap dan tim ahli berpengalaman, Rafa Jaya Crane berkomitmen memberikan layanan yang aman, efisien, dan tepat waktu.</p>
                </div>
                <div class="col-6 col-md-2">
                    <h5 class="fw-bold">Layanan</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-dark">Sewa Crane</a></li>
                        <li><a href="#" class="text-dark">Sewa Forklift</a></li>
                        <li><a href="#" class="text-dark">Sewa Truk</a></li>
                        <li><a href="#" class="text-dark">Sewa Exacavator</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md-2">
                    <h5 class="fw-bold">Produk</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-dark">Produk A</a></li>
                        <li><a href="#" class="text-dark">Produk B</a></li>
                        <li><a href="#" class="text-dark">Produk C</a></li>
                        <li><a href="#" class="text-dark">Produk D</a></li>
                    </ul>
                </div>
                <div class="col-12 col-md-4">
                    <h5 class="fw-bold">Contact</h5>
                    <p>Email: ridwan.yip347@gmail.com</p>
                    <p>Phone: +62 813 8101 2840</p>
                    <h5 class="fw-bold mt-3">Location</h5>
                    <div id="map" style="height: 150px;">
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=...YOUR_MAP_EMBED_URL..." 
                            width="100%" 
                            height="100%" 
                            style="border:0;" 
                            allowfullscreen="" 
                            loading="lazy" 
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <script>
        const toggleButton = document.getElementById('toggleButton');
        let isToggled = false;

        toggleButton.addEventListener('click', function () {
            isToggled = !isToggled;
            toggleButton.innerHTML = isToggled
            ? '<span class="icon-x fs-3">x</span>' // X icon
            : '<span class="navbar-toggler-icon"></span>'; // Original icon
        });
    </script>
  </body>
</html>