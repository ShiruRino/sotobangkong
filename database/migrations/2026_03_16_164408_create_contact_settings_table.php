<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('contact_settings', function (Blueprint $table) {
            $table->id();
            
            // Logo
            $table->string('logo_image')->nullable();
            
            // Kantor Pusat
            $table->string('office_title')->nullable()->default('Kantor Pusat & Kedai Utama');
            $table->string('address_line_1')->nullable(); // "Jl. Pakubuwono VI No.39, Kebayoran Baru,"
            $table->string('address_line_2')->nullable(); // "Jakarta Selatan, DKI Jakarta 12120"
            
            // Kontak
            $table->string('phone')->nullable(); // "(021) 720 0000"
            $table->string('whatsapp')->nullable(); // "0812 888 47857"
            $table->string('email_1')->nullable(); // "halo@sotobangkongjkt.com"
            $table->string('email_2')->nullable(); // "marketing@sotobangkongjkt.com"
            
            // Jam Operasional
            $table->string('hours_title')->nullable()->default('Jam Operasional');
            $table->string('weekday_hours')->nullable(); // "Senin - Jumat: 07.30 - 21.00 WIB"
            $table->string('weekend_hours')->nullable(); // "Sabtu - Minggu: 07.00 - 22.00 WIB"
            
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('contact_settings');
    }
};