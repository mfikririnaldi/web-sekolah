<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="{{ asset('assets/icon/logosekolah.png') }}">
    <title>SD NEGRI 01 Doroampel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>SDN 2 DOROAMPEL </title>
    {{--AOS--}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

</head>
    <body>
    {{--Navbar Start--}}
    <nav class="navbar navbar-expand-lg navbar-dark py-3 fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand"></a>
        <img src="{{ asset('assets/icon/logosekolah.png') }}"  height="55" weight='55'>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#berita">Berita</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Prestasi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Galeri</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Kontak</a>
        </li>
        
      </ul>
      <div class="d-flex">
        <button class="btn btn-danger shadow" href=""> Masuk Yuk</button>
      </div>
    </div>
  </div>
</nav>

{{--Navbar Ends--}}
<navbar class="navbar navbar-expand-lg navbar-dark py-3 fixed-top">-</navbar>
{{--Hero Start--}}
<section id="hero">
    <div class="container text-center text-black">
        <div class="hero-title" data-aos="fade-up">
             Selamat Datang di,
            <div class="hero-text">
              SDN 2 Doroampel
            </div>
            <h5>Sekolah Berkelas,  Ciptakan Generasi Emas</h5>
        </div>
    </div>
</section>
{{--Hero Ends--}}

{{--Program Start--}}
<section id="program" style="margin-top: -75px">
    <div class="container col -xxl-9">
        <div class="row">
            <div class="col-lg-3 col-md-6 col mb-2">
                <div class="bg-white rounded-3 shadow p-3 d-flex justify-content-between align-items-center">
                    <div>
                    <p>Pendidikan <br> Berkualitas</p>
                    </div>
                    <img src="{{ asset('assets/icon/logosekolah.png') }}" height="55" width="55" alt="">
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col mb-2">
                <div class="bg-white rounded-3 shadow p-3 d-flex justify-content-between align-items-center">
                    <div>
                    <p>Guru <br> Kompeten</p>
                    </div>
                    <img src="{{ asset('assets/icon/logosekolah.png') }}" height="55" width="55" alt="">
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col mb-2">
                <div class="bg-white rounded-3 shadow p-3 d-flex justify-content-between align-items-center">
                    <div>
                    <p>Biaya <br> Terjangkau</p>
                    </div>
                    <img src="{{ asset('assets/icon/logosekolah.png') }}" height="55" width="55" alt="">
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col mb-2">
                <div class="bg-white rounded-3 shadow p-3 d-flex justify-content-between align-items-center">
                    <div>
                    <p>Fasilitas <br> Lengkap</p>
                    </div>
                    <img src="{{ asset('assets/icon/logosekolah.png') }}" height="55" width="55" alt="">
                </div>
            </div>
        </div>
    </div>
{{--Program Ends--}}


     
{{--BERITA START--}}
<section id="berita" class="py-50">
    <div class="container">
        <div class="header-berita text-center">
            <h2 class="fw-bold">Berita</h2>
        </div>
    </div>
    
    <div class="row py-5">
        <div class="col-lg-4">
            <div class="card border-0 shadow">
                <img src="{{ asset('assets/images/berita1.jpeg')}}" class="img-fluid mb-3" alt="">
                <div class="konten-berita">
                    <p class="mb-3">31/05/2024</p>
                    <h4 class="fw-bold mb-3"></h4>
                    <p class=""></p>
                    <a href="" class="text-decoration-none text-danger">Selengkapnya</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card border-0 shadow">
                <img src="{{ asset('assets/images/berita2.jpeg')}}" class="img-fluid mb-3" alt="">
                <div class="konten-berita">
                    <p class="mb-3">31/05/2024</p>
                    <h4 class="fw-bold mb-3"></h4>
                    <p class=""></p>
                    <a href="" class="text-decoration-none text-danger">Selengkapnya</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4  ">
            <div class="card border-0 shadow">
                <img src="{{ asset('assets/images/berita 3.jpg')}}" class="img-fluid mb-3" alt="">
                <div class="konten-berita">
                    <p class="mb-3">31/05/2024</p>
                    <h4 class="fw-bold mb-3"></h4>
                    <p class=""></p>
                    <a href="" class="text-decoration-none text-danger">Selengkapnya</a>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-berita text-center">
        <a href="" class="btn btn-outline-danger">Lainnya </a>
    </div>
    </div>
</section>
{{--BERITA END--}}
{{--join start--}}
<section id="join" class="py-5">
    <div class="container py-5">
        <div class="row d-flex align-items-center">
            <div class="d-flex align-items-center mb-3">
                <div class="stripe me-2"></div>
                <h5>DAFTAR SISWA</h5>
                </div>
                <h1 class="fw-bold mb-2"> Join Sini Dek</h1>
                <p class="mb-3">4 Sehat 5 Sekarat</p>
                <button class="btn btn-outline-danger">Register</button>
            </div>
            <div class="col-lg-6">
                <img src="{{ asset('assets/images/')}}" class="img-fluid" alt="">
            </div>
        </div>
    </div>
</section>
{{--join END--}}

{{--Video Start--}}
<section id="video" class="py-5">
    <div class="container py-5">
        <div class="text-center">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/P_8wx-VAgac?si=lZAQ3wIDqTuan1MX" title="YouTube video player" frameborder="0" 
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
    </div>
</section>
{{--Video End--}}

{{--List Video Start--}}

<section id="video_youtube" class="py-5">
    <div class="container">
        <div class="header-berita text-center ">
            <h2 class="fw-bold ">Video Seputar Sekolah</h2>
        </div>
        <div class="row py-5">
            <div class="col-lg-4 shadow">
            <iframe width="100%" height="215" src="https://www.youtube.com/embed/P_8wx-VAgac?si=lZAQ3wIDqTuan1MX" title="YouTube video player" frameborder="0" 
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
            <div class="col-lg-4 shadow">
            <iframe width="100%" height="215" src="https://www.youtube.com/embed/P_8wx-VAgac?si=lZAQ3wIDqTuan1MX" title="YouTube video player" frameborder="0" 
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
            <div class="col-lg-4 shadow">
            <iframe width="100%" height="215" src="https://www.youtube.com/embed/P_8wx-VAgac?si=lZAQ3wIDqTuan1MX" title="YouTube video player" frameborder="0" 
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </div>
        <div class="footer-berita text-center">
        <a href="" class="btn btn-outline-danger">Video Lainnya </a>
    </div>
    </div>
</section>

{{--List Video End--}}

{{--foto start--}}
<section id="foto" class="section-foto parallax">
    <div class="container">
    <div class="d-flex justify-content-between align-items-center">
        <div class="d-flex align-items-center">
            <div class="stripe-putih me-2"></div>
            <h5 class="fw-bold text-white"> Foto Kegiatan</h5>
        </div>
        <div>
            <a href="" class="btn btn-outline-white"> Foto Lainnya</a>
        </div>
    </div>
    
    <div class="row">
        <div class="col-lg-3 col-md-6 col-6">
            <img src="{{asset('assets/images/musholla.jpeg') }}" class="img-fluid" alt="">
        </div>
        <div class="col-lg-3 col-md-6 col-6">
            <img src="{{asset('assets/images/musholla.jpeg') }}" class="img-fluid" alt="">
        </div>
        <div class="col-lg-3 col-md-6 col-6">
            <img src="{{asset('assets/images/musholla.jpeg') }}" class="img-fluid" alt="">
        </div>
        <div class="col-lg-3 col-md-6 col-6">
            <img src="{{asset('assets/images/musholla.jpeg') }}" class="img-fluid" alt="">
        </div>
    </div>
</section>
{{--foto End--}} 
{{--fasilitas start--}} 
<section id="fasilitas" class="py-5">
    <div class="container py-5">
        <div class="text-center mb-5">
            <h3 class="fw-bold">Fasilitas Sekolah</h3>
        </div>
        <img src="{{ asset('assets/images/musholla.jpeg') }}" class="img-fluid" alt="">
    </div>
</section>
{{--fasilitaas End--}} 

{{--Footer Start--}}

<section id="footer" class="bg-white">
    <div class="container py-4">
        <footer>
            <div class="row">
                <div class="col-12 col-md-3 mb-3">
                    <h5 class="fw-bold mb-3">Navigasi</h5>
                    <div class="d-flex">
                        <ul class="nav flex-column me-5">
                            <li class="nav-item mb-2">
                                <a href="" class="nav-link p-0 text-muted">Berita Sekolah</a>
                            </li>
                            <li class="nav-item mb-2">
                                <a href="" class="nav-link p-0 text-muted">Kegiatan Sekolah</a>
                            </li>
                            <li class="nav-item mb-2">
                                <a href="" class="nav-link p-0 text-muted">Galeri Sekolah</a>
                            </li>
                            <li class="nav-item mb-2">
                                <a href="" class="nav-link p-0 text-muted">Kegiatan Sekolah</a>
                            </li>
                        </ul>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2">
                                <a href="" class="nav-link p-0 text-muted">Info Alumni</a>
                            </li>
                            <li class="nav-item mb-2">
                                <a href="" class="nav-link p-0 text-muted">info PPDB</a>
                            </li>
                            <li class="nav-item mb-2">
                                <a href="" class="nav-link p-0 text-muted">Prestasi </a>
                            </li>
                            <li class="nav-item mb-2">
                                <a href="" class="nav-link p-0 text-muted">Video Kegiatan </a>
                            </li>
                        </ul>
                        
                    </div>
                </div>
            </div>
        </footer>
        
    </div>

{{--Footer End--}}

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script><script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script></script>

    <script>
        const navbar = document.querySelector(".fixed-top");
        window.onscroll = () =>{
            if(window.scrolly > 100){
                navbar.classList.add("scroll-nav-active");
                navbar.classList.add("text-nav-active");
                navbar.classList.remove("navbar-dark");
            } else {
                navbar.classList.remove("scroll-nav-active");
                navbar.classList.add("navbar-dark");
            }
        };
        //Animasi AOS// 
        AOS.init();
        </script>
    </body> 
</html>
