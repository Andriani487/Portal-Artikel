<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('kategori')->insert([
            [
                'nama_kategori'=>'Teknologi',
                'created_at'=>now(),
                'updated_at'=>now()
            ],
            [
                'nama_kategori'=>'Pendidikan',
                'created_at'=>now(),
                'updated_at'=>now()
            ],
            [
                'nama_kategori'=>'Bisnis',
                'created_at'=>now(),
                'updated_at'=>now()
            ],
            [
                'nama_kategori'=>'Kesehatan',
                'created_at'=>now(),
                'updated_at'=>now()
            ],
            [
                'nama_kategori'=>'Olahraga',
                'created_at'=>now(),
                'updated_at'=>now()
            ],
        ]);
    }
}
