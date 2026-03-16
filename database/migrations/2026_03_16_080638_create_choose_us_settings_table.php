<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('choose_us_settings', function (Blueprint $table) {
            $table->id();
            $table->string('subtitle')->nullable(); // "Cita Rasa Warisan Nusantara"
            $table->string('title')->nullable(); // "Kenapa Memilih Kami?"
            $table->string('image')->nullable(); // Gambar soto-cooking
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('choose_us_settings');
    }
};