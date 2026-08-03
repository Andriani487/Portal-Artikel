<x-layout.app>

<div class="container">

<h1 class="mb-4">Daftar Kategori</h1>

<table class="table table-striped table-bordered">

<thead class="table-primary">

<tr>

<th>ID</th>

<th>Nama Kategori</th>

</tr>

</thead>

<tbody>

@foreach($kategoris as $kategori)

<tr>

<td>{{ $kategori->id_kategori }}</td>

<td>{{ $kategori->nama_kategori }}</td>

</tr>

@endforeach

</tbody>

</table>

</div>

</x-layout.app>
