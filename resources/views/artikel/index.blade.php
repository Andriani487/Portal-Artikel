<x-layout.app>

<div class="container">

    <h1 class="mb-4">
        Daftar Artikel
    </h1>

    @foreach($artikels as $artikel)

        <x-artikel.card
            :artikel="$artikel"
        />

    @endforeach

</div>

</x-layout.app>
