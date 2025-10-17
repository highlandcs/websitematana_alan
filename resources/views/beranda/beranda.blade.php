@extends('layout.layout')

@section('css')
<style>
  /* === Style khusus halaman Beranda === */

  /* Supaya isi content tidak mepet ke sidebar */
  #content {
    width: 600px;
    float: left;
    padding: 20px 30px 15px 50px; /* Tambah jarak kiri-kanan */
    text-align: justify;
  }

  /* Semua isi teks paragraf, list, dan prestasi dibuat miring */
  #content p,
  #content ul li,
  #content .prestasi-item {
    font-style: italic !important;
    line-height: 1.8em; /* Spasi antar baris */
  }

  /* Judul tetap normal */
  #content h2,
  #content h3 {
    font-style: normal !important;
    margin-bottom: 10px;
  }

  /* Supaya antar section ada jarak bawah */
  .section {
    margin-bottom: 45px;
  }

  /* Biar list agak renggang antar item */
  #content ul li {
    margin-bottom: 8px;
  }

  /* Tambahkan jarak antar paragraf agar tidak dempet */
  #content p {
    margin-bottom: 14px;
  }

  /* Tambahkan sedikit jarak antar prestasi */
  #content .prestasi-item {
    margin-bottom: 6px;
  }
</style>
@endsection

@section('content')
  <div class="section">
    <h2>Visi & Misi</h2>
    <p><strong>Visi:</strong> Menjadi Program Studi Informatika unggulan yang menghasilkan lulusan berkompeten, inovatif, dan berjiwa kewirausahaan di bidang Informatika.</p>
    <p><strong>Misi:</strong></p>
    <ul>
      <li>Menyelenggarakan pendidikan berkualitas dalam bidang informatika berbasis industri.</li>
      <li>Melakukan penelitian terapan yang mendukung kemajuan teknologi dan kebutuhan masyarakat.</li>
      <li>Meningkatkan pengabdian kepada masyarakat melalui solusi teknologi yang berkelanjutan.</li>
    </ul>
  </div>

  <div class="section">
    <h2>Berita Kampus</h2>
    <h3>Mahasiswa Informatika Juara 1 Hackathon Nasional</h3>
    <p>Tim mahasiswa Universitas Matana berhasil meraih Juara 1 dalam kompetisi Hackathon Nasional 2025 berkat aplikasi inovatif mereka di bidang kesehatan digital.</p>

    <h3>Kerjasama Baru dengan Startup Teknologi</h3>
    <p>Prodi Informatika resmi menjalin kerjasama dengan startup teknologi untuk program magang dan kolaborasi riset di bidang AI dan data science.</p>
  </div>

  <div class="section">
    <h2>Prestasi Mahasiswa</h2>
    <div class="prestasi-item">🏆 Juara 1 Hackathon Nasional 2025</div>
    <div class="prestasi-item">🥇 Best Paper Award - Konferensi Teknologi 2024</div>
    <div class="prestasi-item">🥈 Juara 2 UI/UX Design Challenge</div>
  </div>
@endsection
