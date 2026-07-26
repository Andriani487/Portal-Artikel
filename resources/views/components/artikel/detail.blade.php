<div class="card">

    <div class="card-body">

        <h2>{{ $artikel->judul }}</h2>

        <hr>

        <p>
            {{ $artikel->isi }}
        </p>

        <p>
            Penulis :
            {{ $artikel->penulis }}
        </p>

        <p>
            Tanggal :
            {{ $artikel->created_at }}
        </p>

        <a href="/artikel"
           class="btn btn-secondary">
            Kembali
        </a>

    </div>

</div>
