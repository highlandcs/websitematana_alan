<!DOCTYPE HTML>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Prodi Informatika - Universitas Matana</title>
  <meta name="description" content="Website Prodi Informatika Universitas Matana" />
  <meta name="keywords" content="informatika, universitas matana, teknologi informasi" />

  <!-- Style utama dari template -->
  <link rel="stylesheet" type="text/css" href="{{ asset('style/style.css') }}" title="style" />

  <!-- Style tambahan dari setiap halaman -->
  @yield('css')
</head>

<body>
  <div id="main">

    {{-- Bagian header (logo dan menu) --}}
    @include('layout.header')

    {{-- Isi halaman + sidebar --}}
    <div id="site_content">
      <div id="content">
        @yield('content') {{-- Konten halaman, misalnya beranda.blade.php --}}
      </div>

      {{-- Sidebar kanan --}}
      @include('layout.sidebar')
    </div>

    {{-- Footer --}}
    @include('layout.footer')

  </div>
</body>
</html>
