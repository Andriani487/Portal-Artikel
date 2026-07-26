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
                'penulis' => 'Ivan Liem'
            ],

            [
                'judul' => 'Laravel sebagai Framework Modern PHP',
                'isi' => 'Laravel menyediakan fitur Eloquent ORM, Blade Template, Middleware, dan Migration sehingga pengembangan aplikasi menjadi lebih cepat.',
                'penulis' => 'Ivan Liem'
            ],

            [
                'judul' => 'Manfaat Cloud Computing untuk Perusahaan',
                'isi' => 'Cloud Computing memungkinkan perusahaan menghemat biaya infrastruktur serta meningkatkan fleksibilitas sistem informasi.',
                'penulis' => 'Ivan Liem'
            ],

            [
                'judul' => 'Cyber Security pada Era Digital',
                'isi' => 'Keamanan data menjadi prioritas utama untuk melindungi informasi perusahaan dari serangan siber.',
                'penulis' => 'Ivan Liem'
            ],

            [
                'judul' => 'Pentingnya Backup Data',
                'isi' => 'Backup rutin membantu perusahaan memulihkan data ketika terjadi kerusakan sistem maupun serangan ransomware.',
                'penulis' => 'Ivan Liem'
            ],

            [
                'judul' => 'Transformasi Digital di Industri Pariwisata',
                'isi' => 'Digitalisasi membantu biro perjalanan memberikan pelayanan yang lebih cepat dan personal.',
                'penulis' => 'Ivan Liem'
            ],

            [
                'judul' => 'Business Intelligence untuk Pengambilan Keputusan',
                'isi' => 'Dashboard Business Intelligence membantu manajemen melihat performa perusahaan secara real-time.',
                'penulis' => 'Ivan Liem'
            ],

            [
                'judul' => 'Peran Data Analyst dalam Perusahaan',
                'isi' => 'Data Analyst mengubah data menjadi informasi yang dapat digunakan sebagai dasar pengambilan keputusan.',
                'penulis' => 'Ivan Liem'
            ],

            [
                'judul' => 'Apa itu Machine Learning',
                'isi' => 'Machine Learning memungkinkan komputer belajar dari data tanpa diprogram secara eksplisit.',
                'penulis' => 'Ivan Liem'
            ],

            [
                'judul' => 'Internet of Things dalam Kehidupan Sehari-hari',
                'isi' => 'IoT menghubungkan berbagai perangkat sehingga dapat saling bertukar informasi secara otomatis.',
                'penulis' => 'Ivan Liem'
            ],

            [
                'judul' => 'Big Data dan Analisis Bisnis',
                'isi' => 'Big Data membantu organisasi menemukan pola bisnis dari jutaan data yang dimiliki.',
                'penulis' => 'Ivan Liem'
            ],

            [
                'judul' => 'Blockchain Selain Cryptocurrency',
                'isi' => 'Blockchain juga digunakan untuk keamanan dokumen digital dan rantai pasok.',
                'penulis' => 'Ivan Liem'
            ],

            [
                'judul' => 'Pentingnya UI dan UX',
                'isi' => 'Desain antarmuka yang baik meningkatkan kenyamanan pengguna saat menggunakan aplikasi.',
                'penulis' => 'Ivan Liem'
            ],

            [
                'judul' => 'REST API pada Laravel',
                'isi' => 'Laravel mempermudah pembuatan REST API melalui Resource Controller dan Route API.',
                'penulis' => 'Ivan Liem'
            ],

            [
                'judul' => 'Version Control Menggunakan Git',
                'isi' => 'Git membantu tim mengelola perubahan kode secara kolaboratif.',
                'penulis' => 'Ivan Liem'
            ],

            [
                'judul' => 'Pengenalan Docker',
                'isi' => 'Docker mempermudah deployment aplikasi dengan konsep container.',
                'penulis' => 'Ivan Liem'
            ],

            [
                'judul' => 'MySQL sebagai Database Relasional',
                'isi' => 'MySQL merupakan salah satu DBMS yang banyak digunakan dalam aplikasi web.',
                'penulis' => 'Ivan Liem'
            ],

            [
                'judul' => 'Peran Migration pada Laravel',
                'isi' => 'Migration berfungsi sebagai version control struktur database.',
                'penulis' => 'Ivan Liem'
            ],

            [
                'judul' => 'Keunggulan Eloquent ORM',
                'isi' => 'Eloquent mempermudah manipulasi data menggunakan pendekatan object-oriented.',
                'penulis' => 'Ivan Liem'
            ],

            [
                'judul' => 'Belajar Blade Template',
                'isi' => 'Blade Template membuat tampilan Laravel lebih rapi dan mudah dipelihara.',
                'penulis' => 'Ivan Liem'
            ],

            [
                'judul' => 'Apa itu MVC',
                'isi' => 'Model View Controller memisahkan logika bisnis, tampilan, dan alur aplikasi.',
                'penulis' => 'Ivan Liem'
            ],

            [
                'judul' => 'Pentingnya Testing Aplikasi',
                'isi' => 'Testing membantu memastikan aplikasi berjalan sesuai kebutuhan pengguna.',
                'penulis' => 'Ivan Liem'
            ],

            [
                'judul' => 'Dasar Pemrograman Berorientasi Objek',
                'isi' => 'Konsep OOP terdiri dari encapsulation, inheritance, polymorphism, dan abstraction.',
                'penulis' => 'Ivan Liem'
            ],

            [
                'judul' => 'Analisis Sistem Informasi',
                'isi' => 'Analisis sistem bertujuan memahami kebutuhan pengguna sebelum pengembangan aplikasi.',
                'penulis' => 'Ivan Liem'
            ],

            [
                'judul' => 'Masa Depan Teknologi Informasi',
                'isi' => 'Perkembangan AI, Cloud, dan Data Science akan terus mengubah dunia bisnis.',
                'penulis' => 'Ivan Liem'
            ],

        ];

        foreach ($artikels as $artikel) {
            Artikel::create($artikel);
        }
    }
}
