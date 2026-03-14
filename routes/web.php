<?php

use Illuminate\Support\Facades\Route;

// Jalur Utama (Beranda / Home)
Route::get('/', function () {
    return view('home');
});

// Jalur Tentang Kami
Route::get('/about', function () {
    return view('about');
});

// Jalur Menu
Route::get('/menu', function () {
    return view('menu');
});

// Jalur Layanan Catering
Route::get('/catering', function () {
    return view('catering');
});

// Jalur Outlet
Route::get('/outlet', function () {
    return view('outlet');
});

// Jalur Kontak
Route::get('/contact', function () {
    return view('contact');
});

// Jalur Galeri
Route::get('/gallery', function () {
    return view('gallery');
});