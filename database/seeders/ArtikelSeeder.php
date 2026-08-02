<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Artikel;

class ArtikelSeeder extends Seeder
{
    public function run(): void
    {
        Artikel::truncate();

        $artikels = [

            [
                'judul' => 'Perkembangan Artificial Intelligence di Dunia Bisnis',
                'isi' => 'Artificial Intelligence membantu perusahaan meningkatkan efisiensi operasional melalui otomatisasi proses bisnis dan analisis data.',
                'id_user' => 1,
                'id_kategori' => 1,
                'id_level' => 1
            ],

            [
                'judul' => 'Laravel sebagai Framework Modern PHP',
                'isi' => 'Laravel menyediakan fitur Eloquent ORM, Blade Template, Middleware, dan Migration sehingga pengembangan aplikasi menjadi lebih cepat.',
                'id_user' => 2,
                'id_kategori' => 2,
                'id_level' => 2
            ],

            [
                'judul' => 'Manfaat Cloud Computing untuk Perusahaan',
                'isi' => 'Cloud Computing memungkinkan perusahaan menghemat biaya infrastruktur serta meningkatkan fleksibilitas sistem informasi.',
                'id_user' => 3,
                'id_kategori' => 3,
                'id_level' => 3
            ],

            [
                'judul' => 'Cyber Security pada Era Digital',
                'isi' => 'Keamanan data menjadi prioritas utama untuk melindungi informasi perusahaan dari serangan siber.',
                'id_user' => 4,
                'id_kategori' => 4,
                'id_level' => 4
            ],

           [
                'judul' => 'Pentingnya Backup Data',
                'isi' => 'Backup rutin membantu perusahaan memulihkan data ketika terjadi kerusakan sistem maupun serangan ransomware.',
                'id_user' => 5,
                'id_kategori' => 5,
                'id_level' => 1
            ],

            [
                'judul' => 'Transformasi Digital di Industri Pariwisata',
                'isi' => 'Digitalisasi membantu biro perjalanan memberikan pelayanan yang lebih cepat dan personal.',
                'id_user' => 6,
                'id_kategori' => 1,
                'id_level' => 2
            ],

            [
                'judul' => 'Business Intelligence untuk Pengambilan Keputusan',
                'isi' => 'Dashboard Business Intelligence membantu manajemen melihat performa perusahaan secara real-time.',
                'id_user' => 7,
                'id_kategori' => 2,
                'id_level' => 3
            ],

            [
                'judul' => 'Peran Data Analyst dalam Perusahaan',
                'isi' => 'Data Analyst mengubah data menjadi informasi yang dapat digunakan sebagai dasar pengambilan keputusan.',
                'id_user' => 8,
                'id_kategori' => 3,
                'id_level' => 4
            ],

            [
                'judul' => 'Apa itu Machine Learning',
                'isi' => 'Machine Learning memungkinkan komputer belajar dari data tanpa diprogram secara eksplisit.',
                'id_user' => 9,
                'id_kategori' => 4,
                'id_level' => 1
            ],

            [
                'judul' => 'Internet of Things dalam Kehidupan Sehari-hari',
                'isi' => 'IoT menghubungkan berbagai perangkat sehingga dapat saling bertukar informasi secara otomatis.',
                'id_user' => 10,
                'id_kategori' => 5,
                'id_level' => 2
            ],

            [
                'judul' => 'Big Data dan Analisis Bisnis',
                'isi' => 'Big Data membantu organisasi menemukan pola bisnis dari jutaan data yang dimiliki.',
                'id_user' => 1,
                'id_kategori' => 1,
                'id_level' => 3
            ],

            [
                'judul' => 'Blockchain Selain Cryptocurrency',
                'isi' => 'Blockchain juga digunakan untuk keamanan dokumen digital dan rantai pasok.',
                'id_user' => 2,
                'id_kategori' => 2,
                'id_level' => 4
            ],

            [
                'judul' => 'Pentingnya UI dan UX',
                'isi' => 'Desain antarmuka yang baik meningkatkan kenyamanan pengguna saat menggunakan aplikasi.',
                'id_user' => 3,
                'id_kategori' => 3,
                'id_level' => 1
            ],

            [
                'judul' => 'REST API pada Laravel',
                'isi' => 'Laravel mempermudah pembuatan REST API melalui Resource Controller dan Route API.',
                'id_user' => 4,
                'id_kategori' => 4,
                'id_level' => 2
            ],

            [
                'judul' => 'Version Control Menggunakan Git',
                'isi' => 'Git membantu tim mengelola perubahan kode secara kolaboratif.',
                'id_user' => 5,
                'id_kategori' => 5,
                'id_level' => 3
            ],

            [
                'judul' => 'Pengenalan Docker',
                'isi' => 'Docker mempermudah deployment aplikasi dengan konsep container.',
                'id_user' => 6,
                'id_kategori' => 1,
                'id_level' => 4
            ],

            [
                'judul' => 'MySQL sebagai Database Relasional',
                'isi' => 'MySQL merupakan salah satu DBMS yang banyak digunakan dalam aplikasi web.',
                'id_user' => 7,
                'id_kategori' => 2,
                'id_level' => 1
            ],

            [
                'judul' => 'Peran Migration pada Laravel',
                'isi' => 'Migration berfungsi sebagai version control struktur database.',
                'id_user' => 8,
                'id_kategori' => 3,
                'id_level' => 2
            ],

            [
                'judul' => 'Keunggulan Eloquent ORM',
                'isi' => 'Eloquent mempermudah manipulasi data menggunakan pendekatan object-oriented.',
                'id_user' => 9,
                'id_kategori' => 4,
                'id_level' => 3
            ],

            [
                'judul' => 'Belajar Blade Template',
                'isi' => 'Blade Template membuat tampilan Laravel lebih rapi dan mudah dipelihara.',
                'id_user' => 10,
                'id_kategori' => 5,
                'id_level' => 4
            ],

            [
                'judul' => 'Apa itu MVC',
                'isi' => 'Model View Controller memisahkan logika bisnis, tampilan, dan alur aplikasi.',
                'id_user' => 1,
                'id_kategori' => 1,
                'id_level' => 1
            ],

            [
                'judul' => 'Pentingnya Testing Aplikasi',
                'isi' => 'Testing membantu memastikan aplikasi berjalan sesuai kebutuhan pengguna.',
                'id_user' => 2,
                'id_kategori' => 2,
                'id_level' => 2
            ],

            [
                'judul' => 'Dasar Pemrograman Berorientasi Objek',
                'isi' => 'Konsep OOP terdiri dari encapsulation, inheritance, polymorphism, dan abstraction.',
                'id_user' => 3,
                'id_kategori' => 3,
                'id_level' => 3
            ],

            [
                'judul' => 'Analisis Sistem Informasi',
                'isi' => 'Analisis sistem bertujuan memahami kebutuhan pengguna sebelum pengembangan aplikasi.',
                'id_user' => 4,
                'id_kategori' => 4,
                'id_level' => 4
            ],

            [
                'judul' => 'Masa Depan Teknologi Informasi',
                'isi' => 'Perkembangan AI, Cloud, dan Data Science akan terus mengubah dunia bisnis.',
                'id_user' => 5,
                'id_kategori' => 5,
                'id_level' => 1
            ],

        ];

        foreach ($artikels as $artikel) {
            Artikel::create($artikel);
        }
    }
}
