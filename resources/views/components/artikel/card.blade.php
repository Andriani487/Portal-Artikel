@props(['artikel'])

<div class="card mb-4 shadow-sm">

    <div class="card-body">

        <h3 class="card-title">
            {{ $artikel->judul }}
        </h3>

        <p class="card-text">
            {{ Str::limit($artikel->isi, 150) }}
        </p>

        <hr>

        <p class="mb-1">
            <strong>Penulis :</strong>
            {{ $artikel->user->name }}
        </p>

        <p class="mb-1">
            <strong>Kategori :</strong>
            {{ $artikel->kategori->nama_kategori }}
        </p>

        <p class="mb-3">
            <strong>Level :</strong>
            {{ $artikel->level->nama_level }}
        </p>

        <a href="/artikel/{{ $artikel->id_artikel }}"
            class="btn btn-primary">

            Baca Selengkapnya

        </a>

    </div>

</div>
