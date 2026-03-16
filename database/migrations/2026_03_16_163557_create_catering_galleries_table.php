<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('catering_galleries', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Contoh: "Stall / Pondokan Soto"
            $table->string('subtitle')->nullable(); // Contoh: "Paket Pernikahan"
            $table->string('image'); // Wajib ada foto
            
            $table->integer('sort_order')->default(0);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('catering_galleries');
    }
};