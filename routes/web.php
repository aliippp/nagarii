<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tentang-kami', function () {
    return view('profil.about');
});

Route::get('/visi-misi', function () {
    return view('profil.visi-misi');
});

Route::get('/sejarah', function () {
    return view('profil.sejarah');
});

Route::get('/geografis', function () {
    return view('profil.geografis');
});

Route::get('/demografi', function () {
    return view('profil.demografi');
});