<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/artikel', function () {

    $artikels = collect([
        (object)[
            'id_artikel' => 1,
            'judul' => 'Teknologi Laravel',
            'isi' => 'Laravel adalah framework PHP untuk membuat aplikasi web.',
            'penulis' => 'Andriani',
            'created_at' => now()
        ],

        (object)[
            'id_artikel' => 2,
            'judul' => 'Belajar Blade Component',
            'isi' => 'Blade Component membantu membuat tampilan Laravel lebih rapi.',
            'penulis' => 'Andriani',
            'created_at' => now()
        ]
    ]);


    return view('artikel.index', compact('artikels'));

});
