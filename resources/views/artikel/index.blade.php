<x-layout.app>

    <h1>Daftar Artikel</h1>

    @foreach($artikels as $artikel)

        <x-artikel.card :artikel="$artikel" />

    @endforeach

</x-layout.app>
