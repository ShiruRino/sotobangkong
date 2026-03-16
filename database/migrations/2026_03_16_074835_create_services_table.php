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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            
            // Icon menggunakan class FontAwesome (ex: 'fa fa-cutlery')
            $table->string('icon_class')->default('fa fa-star');
            
            // Konten Teks
            $table->string('title');
            $table->string('hover_title')->nullable();
            $table->text('description')->nullable();
            $table->string('link')->nullable();
            
            // Pengaturan
            $table->integer('sort_order')->default(0);
            $table->boolean('is_active')->default(true);
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};