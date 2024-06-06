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

    {{-- magnific --}}
    <link rel="stylesheet" href="{{ asset('assets/css/magnific/.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

</head>
    <body>

    {{--navbar--}}

    @include('layouts.navbar')
    
    
    {{--content--}}

    @yield('content')

    {{--Footer Start--}}

<section id="footer" class="bg-white" data-aos="zoom-out">
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
</section>

{{--Footer End--}}

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script><script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script></script>

    <script>
        const navbar = document.querySelector(".fixed-top");
        window.onscroll = () =>{
            if(window.scrolly > 100){
                navbar.classList.add("scroll-nav-active");
                navbar.classList.add("text-nav-active");
              //  navbar.classList.remove("navbar-dark");
            } else {
                navbar.classList.remove("scroll-nav-active");
               // navbar.classList.add("navbar-dark");
            }
        };
        //Animasi AOS// 
        AOS.init();
        </script>
    </body> 
</html>

