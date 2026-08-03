<?php

use Illuminate\Support\Facades\Route;
use App\Models\Artikel;
use App\Models\Kategori;

Route::get('/artikel', function () {

    $artikels = App\Models\Artikel::with([
        'user',
        'kategori',
        'level'
    ])->get();

    return view('artikel.index', compact('artikels'));

});

Route::get('/kategori', function () {

    $kategoris = Kategori::all();

    return view('kategori.index', compact('kategoris'));

});
