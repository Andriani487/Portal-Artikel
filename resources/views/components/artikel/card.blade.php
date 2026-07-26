<div class="card mb-3 shadow">

    <div class="card-body">

        <h3>{{ $artikel->judul }}</h3>

        <p>{{ Str::limit($artikel->isi,150) }}</p>

        <p>
            Penulis :
            {{ $artikel->penulis }}
        </p>

        <a href="/artikel/{{ $artikel->id_artikel }}"
           class="btn btn-primary">
            Baca Selengkapnya
        </a>

    </div>

</div>
