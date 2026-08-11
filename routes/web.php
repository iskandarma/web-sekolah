<?php

use Illuminate\Support\Facades\Route;

$school = fn () => config('school');

Route::view('/', 'home')->name('home');
Route::view('/profil', 'profil')->name('profile');
Route::view('/akademik', 'akademik')->name('academic');
Route::view('/prestasi', 'prestasi')->name('achievements');
Route::view('/galeri', 'galeri')->name('gallery.index');
Route::view('/kontak', 'kontak')->name('contact');
Route::view('/ppdb', 'ppdb')->name('ppdb');

Route::get('/berita', function () {
    return view('berita.index');
})->name('news.index');

Route::get('/berita/{slug}', function (string $slug) {
    $news = collect(config('school.news'))->firstWhere('slug', $slug);
    abort_unless($news, 404);
    return view('berita.show', compact('news'));
})->name('news.show');

Route::get('/agenda', function () {
    return view('agenda.index');
})->name('events.index');

Route::get('/agenda/{id}', function (int $id) {
    $event = collect(config('school.events'))->firstWhere('id', $id);
    abort_unless($event, 404);
    return view('agenda.show', compact('event'));
})->name('events.show');

// Backend form actions intentionally left as placeholders.
// Replace these with controllers/Form Requests when the CMS/database is connected.
