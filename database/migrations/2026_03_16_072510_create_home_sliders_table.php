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
        Schema::create('home_sliders', function (Blueprint $table) {
            $table->id();
            
            // Images
            $table->string('background_image')->nullable();
            $table->string('right_image')->nullable();
            
            // Text Content
            $table->string('heading_highlight')->nullable(); // For the <span> text
            $table->string('heading_main')->nullable();      // For the text after <span>
            $table->text('description')->nullable();
            
            // Buttons
            $table->string('button_1_text')->nullable();
            $table->string('button_1_link')->nullable();
            $table->string('button_2_text')->nullable();
            $table->string('button_2_link')->nullable();
            
            // Settings
            $table->integer('sort_order')->default(0);       // To order multiple slides
            $table->boolean('is_active')->default(true);     // To easily hide/show slides
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_sliders');
    }
};