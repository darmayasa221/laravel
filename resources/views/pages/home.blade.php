@include('includes.header')
<nav class="navbar navbar-expand-lg navbar-light bg-warning fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Selamat Datang Website | <b>Kantor Desa Badingkayu</b></a>
    <div class="notif" style="height: 20px; background-color: black">
      <span></span>
    </div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
</nav>
<div class="rwrap row no-getters mt-5">
  <div class="wraperA col-md-3 bg-witha mt-2 pr-3 pt-4">
    <ul class="nav flex-column ml-8 mb-10">
      <li class="nav-item">
        <a class="nav-link active text-witha" href="#"><b>Dashboard</b></a>
        <hr class=" bg-secondary">
      </li>
      <li class="nav-item">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-witha" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <b>Data Kependudukan</b></a>
        <hr class=" bg-secondary">
        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item" href="#">Data Penduduk</a>
            <hr class=" bg-secondary">
          </li>
          <li><a class="dropdown-item" href="#">Data Kematian</a>
            <hr class=" bg-secondary">
          </li>
          <li><a class="dropdown-item" href="#">Data Kelahiran</a>
            <hr class=" bg-secondary">
          </li>
          <li><a class="dropdown-item" href="#">Data Pindah</a>
            <hr class=" bg-secondary">
          </li>
          <li><a class="dropdown-item" href="#">Data Keluarga</a>
            <hr class=" bg-secondary">
          </li>
          <li><a class="dropdown-item" href="#">Data Pendatang</a>
            <hr class=" bg-secondary">
          </li>
        </ul>
      </li>
      <li class="nav-item">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-witha" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <b>Pembuatan Surat</b></a>
        <hr class=" bg-secondary">
        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item" href="#">Surat Keterangan Kelahiran</a>
            <hr class=" bg-secondary">
          </li>
          <li><a class="dropdown-item" href="#">Surat keterangan kematian </a>
            <hr class=" bg-secondary">
          </li>
          <li><a class="dropdown-item" href="#">Surat keterangan pindah </a>
            <hr class=" bg-secondary">
          </li>
          <li><a class="dropdown-item" href="#">Surat Keterangan Pembuatan E-KTP</a>
            <hr class=" bg-secondary">
          </li>
          <li><a class="dropdown-item" href="#">Surat keterangan kurang mampu </a>
            <hr class=" bg-secondary">
          </li>
          <li><a class="dropdown-item" href="#">Surat keterangan pengantar </a>
            <hr class=" bg-secondary">
          </li>
          <li><a class="dropdown-item" href="#">Surat Keterangan Usaha Mikro </a>
            <hr class=" bg-secondary">
          </li>
        </ul>
      </li>
      <li class="nav-item">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-witha" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <b>Struktur Kantor</b></a>
        <hr class=" bg-secondary">
        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item" href="#">Visi Kantor</a>
            <hr class=" bg-secondary">
          </li>
          <li><a class="dropdown-item" href="#">Misi Kantor</a>
            <hr class=" bg-secondary">
          </li>
          <li><a class="dropdown-item" href="#">Data Kepegawaian</a>
            <hr class=" bg-secondary">
          </li>
        </ul>
      </li>
      <li class="nav-item">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-witha" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <b>Laporan Data Kependudukan</b></a>
        <hr class=" bg-secondary">
        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item" href="#">Statistik jumlah penduduk</a>
            <hr class=" bg-secondary">
          </li>
          <li><a class="dropdown-item" href="#">Statistik jenis kelamin </a>
            <hr class=" bg-secondary">
          </li>
          <li><a class="dropdown-item" href="#">Statistik agama </a>
            <hr class=" bg-secondary">
          </li>
          <li><a class="dropdown-item" href="#">Statistik pendidikan</a>
            <hr class=" bg-secondary">
          </li>
          <li><a class="dropdown-item" href="#">Laporan data kelahiran </a>
            <hr class=" bg-secondary">
          </li>
          <li><a class="dropdown-item" href="#">Laporan data penduduk pindah </a>
            <hr class=" bg-secondary">
          </li>
          <li><a class="dropdown-item" href="#">Laporan data pendatang </a>
            <hr class=" bg-secondary">
          </li>
          <li><a class="dropdown-item" href="#">Laporan daftar pemilih tetap </a>
            <hr class=" bg-secondary">
          </li>
          <li><a class="dropdown-item" href="#">Laporan rekap surat </a>
            <hr class=" bg-secondary">
          </li>
        </ul>
      </li>
      <a class="nav-link text-with" href="#"><b>Documentation</b></a>
      <hr class=" bg-secondary">
      </li>
      <li class="nav-item">
        <a class="nav-link text-witha" href="#"><b>Hubungi Kami<b></a>
        <hr class=" bg-secondary">
      </li>
  </div>
  <div class="col-md-80"></div>
</div>
@include('includes.footer')