<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('outlets', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Contoh: "Soto Bangkong - Pakubuwono"
            $table->string('region'); // Contoh: "Jakarta Selatan" (Penting untuk filter kategori)
            $table->text('address'); // Alamat lengkap
            $table->string('opening_hours'); // Contoh: "07.30 - 21.00 WIB"
            $table->string('map_link')->nullable(); // Link Google Maps
            $table->string('image')->nullable(); // Foto Outlet
            
            $table->integer('sort_order')->default(0);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('outlets');
    }
};