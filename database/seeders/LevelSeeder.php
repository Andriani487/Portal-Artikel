<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LevelSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('level')->insert([
            [
                'nama_level'=>'Beginner',
                'created_at'=>now(),
                'updated_at'=>now()
            ],
            [
                'nama_level'=>'Intermediate',
                'created_at'=>now(),
                'updated_at'=>now()
            ],
            [
                'nama_level'=>'Advanced',
                'created_at'=>now(),
                'updated_at'=>now()
            ],
            [
                'nama_level'=>'Expert',
                'created_at'=>now(),
                'updated_at'=>now()
            ],
        ]);
    }
}
