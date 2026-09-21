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
        Schema::create('consultations', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Nama masyarakat
            $table->string('phone_number')->nullable(); // Kontak WhatsApp
            $table->string('email')->nullable();
            $table->text('message'); // Isi pertanyaan/konsultasi
            $table->enum('status', ['pending', 'replied', 'closed'])->default('pending'); // Status tiket
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('consultations');
    }
};
