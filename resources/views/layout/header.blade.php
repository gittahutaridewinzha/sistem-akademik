<header>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Akademik - TI</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav me-auto mb-2 mb-md-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/mahasiswa">Mahasiswa</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/dosen">Dosen</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/prodi">Prodi</a>
                {{-- <a class="nav-link" href="{{ route('prodi', ['jurusan'=>'Teknologi Informasi', 'prodi'=>'TRPL']) }}">Prodi</a> --}}
            </li>

          </ul>

          <form class="d-flex" role="search" action="" method="GET">
            <input class="form-control me-2" name="search" type="search" placeholder="Search" aria-label="Search">
          </form>

          <form action="/login" class="d-flex" role="login">
            <button class="btn btn-outline-success" type="submit">Login</button>
        </form>
        </div>
      </div>
    </nav>
  </header>
