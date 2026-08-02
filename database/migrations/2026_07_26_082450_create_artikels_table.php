<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('artikel', function (Blueprint $table) {

            $table->id('id_artikel');

            $table->string('judul');

            $table->text('isi');

            $table->foreignId('id_user')
                  ->constrained('users');

            $table->foreignId('id_kategori')
                  ->constrained('kategori', 'id_kategori');

            $table->foreignId('id_level')
                  ->constrained('level', 'id_level');

            $table->timestamps();

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('artikel');
    }
};
