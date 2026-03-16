<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // "Soto Ayam Spesial"
            $table->text('description')->nullable(); // Deskripsi di bawah judul
            $table->string('image')->nullable(); // Foto menu
            
            // Kolom untuk list di dalam efek hover (overlay)
            $table->string('feature_1')->nullable(); // "Ayam Kampung Asli"
            $table->string('feature_2')->nullable(); // "Kuah Kaldu Spesial"
            $table->string('feature_3')->nullable(); // "Resep Warisan"
            $table->string('price_text')->nullable(); // "Rp 25.000 / Porsi"
            
            $table->integer('sort_order')->default(0);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('menus');
    }
};