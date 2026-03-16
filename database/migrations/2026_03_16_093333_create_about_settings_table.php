<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('about_settings', function (Blueprint $table) {
            $table->id();
            
            // Bagian 1: Sejarah
            $table->string('history_title')->nullable(); // "SEJARAH SOTO BANGKONG"
            $table->text('history_content')->nullable(); // Isi paragraf sejarah
            $table->string('history_image')->nullable(); // Gambar samping kanan
            
            // Bagian 2: Filosofi
            $table->string('philosophy_title')->nullable(); // "FILOSOFI RASA"
            $table->text('philosophy_content')->nullable(); // Isi paragraf filosofi
            $table->string('philosophy_image')->nullable(); // Gambar samping kiri
            
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('about_settings');
    }
};