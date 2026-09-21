<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
public function up(): void
    {
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique(); // Untuk link URL otomatis (misal: /berita/rapat-hari-ini)
            $table->longText('content'); // Isi berita lengkap
            $table->string('image')->nullable(); // Gambar sampul
            $table->timestamp('published_at')->nullable(); // Tanggal rilis
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('news');
    }
};
