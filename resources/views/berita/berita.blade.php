@extends('layouts.layouts')

@section('content')

{{--BERITA START--}}
<section id="berita" style="margin-top: 100px" class="py-50">
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
                    <p class="mb-3 text-secondary">31/05/2024</p>
                    <h4 class="fw-bold mb-3"></h4>
                    <p class="text-secondary"></p>
                    <a href="" class="text-decoration-none text-danger">Selengkapnya</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card border-0 shadow">
                <img src="{{ asset('assets/images/berita2.jpeg')}}" class="img-fluid mb-3" alt="">
                <div class="konten-berita">
                    <p class="mb-3 text-secondary">31/05/2024</p>
                    <h4 class="fw-bold mb-3"></h4>
                    <p class="text-secondary"></p>
                    <a href="" class="text-decoration-none text-danger">Selengkapnya</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4  ">
            <div class="card border-0 shadow">
                <img src="{{ asset('assets/images/berita 3.jpg')}}" class="img-fluid mb-3" alt="">
                <div class="konten-berita">
                    <p class="mb-3 text-secondary">31/05/2024</p>
                    <h4 class="fw-bold mb-3"></h4>
                    <p class="text-secondary"></p>
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

@endsection