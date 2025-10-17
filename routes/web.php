<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('beranda.beranda');
});

Route::get('/profil', function () {
    return view('profil.profil');
});

Route::get('/pendidikan', function () {
    return view('pendidikan.pendidikan');
});

Route::get('/riset', function () {
    return view('riset.riset');
});

Route::get('/mahasiswa', function () {
    return view('mahasiswa.mhswa');
});

Route::get('/lain_lainnya', function () {
    return view('lain_lainnya.lain');
});
