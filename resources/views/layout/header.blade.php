<div id="header">
  <div id="logo">
    <div id="logo_text">
      <h1>
        <a href="{{ url('/') }}" class="logo-link">
          <span class="logo-prodi">Prodi</span>
          <span class="logo-informatika">&nbsp;Informatika</span>
        </a>
      </h1>
      <h2>Universitas Matana</h2>
    </div>
  </div>

  <div id="menubar">
    <ul id="menu">
  <li class="{{ Request::is('/') ? 'selected' : '' }}">
    <a href="{{ url('/') }}">BERANDA</a>
  </li>

  <li class="{{ Request::is('profil') ? 'selected' : '' }}">
    <a href="{{ url('/profil') }}">PROFIL</a>
  </li>

  <li class="{{ Request::is('pendidikan') ? 'selected' : '' }}">
    <a href="{{ url('/pendidikan') }}">PENDIDIKAN</a>
  </li>

  <li class="{{ Request::is('riset') ? 'selected' : '' }}">
    <a href="{{ url('/riset') }}">RISET</a>
  </li>

  <li class="{{ Request::is('mahasiswa') ? 'selected' : '' }}">
    <a href="{{ url('/mahasiswa') }}">MAHASISWA</a>
  </li>

  <li class="{{ Request::is('lain_lainnya') ? 'selected' : '' }}">
    <a href="{{ url('/lain_lainnya') }}">LAIN-LAIN</a>
  </li>
</ul>

  </div>
</div>

<!-- === FONT + STYLE === -->
<style>
  /* Import font dari Google Fonts */
  @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap');

  /* Terapkan ke seluruh header */
  #header, #logo_text h1, #logo_text h2, .logo-prodi, .logo-informatika {
    font-family: 'Poppins', sans-serif;
  }

  .logo-prodi {
    color: #888888;
    transition: color 0.3s ease;
    cursor: pointer;
    font-weight: 600;
    letter-spacing: 1px;
  }

  .logo-informatika {
    color: #000000;
    transition: color 0.3s ease;
    cursor: pointer;
    font-weight: 700;
  }

  .logo-prodi:hover {
    color: #ffffff;
  }

  .logo-informatika:hover {
    color: #ffffff;
  }

  .logo-link {
    text-decoration: none;
  }

  #logo_text h2 {
    font-size: 16px;
    font-weight: 400;
    color: #444;
    letter-spacing: 0.5px;
  }
</style>
