<?php

use Illuminate\Support\Facades\Route;
use App\Models\Artikel;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/artikel', function () {

    $artikels = Artikel::all();

    return view('artikel.index', compact('artikels'));

});
