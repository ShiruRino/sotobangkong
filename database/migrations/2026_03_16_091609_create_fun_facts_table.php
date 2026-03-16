<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('fun_facts', function (Blueprint $table) {
            $table->id();
            $table->integer('number')->default(0); // Angka counter (harus angka agar animasi javascriptnya berjalan)
            $table->string('title'); // Teks utama (contoh: "Tahun", "Porsi")
            $table->string('subtitle')->nullable(); // Teks dalam <span> (contoh: "Berdiri", "Terjual / Hari")
            
            $table->integer('sort_order')->default(0);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('fun_facts');
    }
};