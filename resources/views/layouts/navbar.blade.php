{{--Navbar Start--}}

    <nav class="navbar navbar-expand-lg  py-3 fixed-top {{ Request :: segment (1) == '' ? '' 
    : 'bg-white shadow'}}">
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