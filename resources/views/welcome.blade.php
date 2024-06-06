@extends('layouts.layouts')

@section('content')


   

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
            <div class="col-lg-3 col-md-6 col mb-2" data-aos="flip-left">
                <div class="bg-white rounded-3 shadow p-3 d-flex justify-content-between align-items-center">
                    <div>
                    <p>Pendidikan <br> Berkualitas</p>
                    </div>
                    <img src="{{ asset('assets/icon/logosekolah.png') }}" height="55" width="55" alt="">
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col mb-2" data-aos="flip-left">
                <div class="bg-white rounded-3 shadow p-3 d-flex justify-content-between align-items-center">
                    <div>
                    <p>Guru <br> Kompeten</p>
                    </div>
                    <img src="{{ asset('assets/icon/logosekolah.png') }}" height="55" width="55" alt="">
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col mb-2" data-aos="flip-left">
                <div class="bg-white rounded-3 shadow p-3 d-flex justify-content-between align-items-center">
                    <div>
                    <p>Biaya <br> Terjangkau</p>
                    </div>
                    <img src="{{ asset('assets/icon/logosekolah.png') }}" height="55" width="55" alt="">
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col mb-2" data-aos="flip-left">
                <div class="bg-white rounded-3 shadow p-3 d-flex justify-content-between align-items-center">
                    <div>
                    <p>Fasilitas <br> Lengkap</p>
                    </div>
                    <img src="{{ asset('assets/icon/logosekolah.png') }}" height="55" width="55" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
{{--Program Ends--}}


     
{{--BERITA START--}}
<section id="berita" class="py-50">
    <div class="container">
        <div class="header-berita text-center">
            <h2 class="fw-bold">Berita</h2>
        </div>
    </div>
    
    <div class="row py-5" data-aos="flip-up">
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
<section id="join" class="py-5" data-aos="flip-down">
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
    <div class="container col-xxl-6 py-5">
        <div class="text-center" data-aos="zoom-in">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/P_8wx-VAgac?si=lZAQ3wIDqTuan1MX" title="YouTube video player" frameborder="0" 
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
    </div>
</section>
{{--Video End--}}

{{--List Video Start--}}

<section id="video_youtube" class="py-5" data-aos="zoom-in">
    <div class="container">
        <div class="header-berita text-center ">
            <h2 class="fw-bold ">Video Seputar Sekolah</h2>
        </div>
        <div class="row py-5" data-aos="zoom-in">
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
<section id="foto" class="section-foto parallax" data-aos="zoom-in-up">
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
<section id="fasilitas" class="py-5" data-aos="zoom-in-up">
    <div class="container py-5">
        <div class="text-center mb-5">
            <h3 class="fw-bold">Fasilitas Sekolah</h3>
        </div>
        <img src="{{ asset('assets/images/musholla.jpeg') }}" class="img-fluid" alt="">
    </div>
</section>
{{--fasilitaas End--}} 


@endsection