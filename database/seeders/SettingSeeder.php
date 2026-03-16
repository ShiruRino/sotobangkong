<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    public function run(): void
    {
        $settings = [
            ['key' => 'phone', 'value' => '(021) 720 0000'],
            ['key' => 'whatsapp', 'value' => '0812 888 47857'],
            ['key' => 'email', 'value' => 'halo@sotobangkongjkt.com'],
            ['key' => 'address', 'value' => 'Jl. Pakubuwono VI No.39, Kebayoran Baru, Jakarta Selatan'],
            ['key' => 'instagram', 'value' => 'https://instagram.com/sotobangkong'],
            ['key' => 'facebook', 'value' => 'https://facebook.com/sotobangkong'],
            ['key' => 'opening_hours', 'value' => 'Senin - Minggu: 07.30 - 21.00 WIB'],
            ['key' => 'about_subtitle', 'value' => 'Kisah Sejarah Soto Bangkong'],
            ['key' => 'about_history_title', 'value' => 'SEJARAH SOTO BANGKONG'],
            ['key' => 'about_history_content', 'value' => 'Berawal dari sebuah pikulan sederhana di perempatan Jalan Bangkong, Semarang pada tahun 1950, Soto Bangkong memulai perjalanan panjangnya.'],
            ['key' => 'about_philosophy_content', 'value' => 'Kelezatan kaldu bening yang kaya rempah, dipadukan dengan ayam kampung pilihan, adalah rahasia kami.'],
            ['key' => 'fact_years', 'value' => '74'],
            ['key' => 'fact_portions', 'value' => '1520'],
            ['key' => 'fact_outlets', 'value' => '4'],
            ['key' => 'fact_satisfied', 'value' => '99'],
        ];

        foreach ($settings as $setting) {
            Setting::updateOrCreate(['key' => $setting['key']], ['value' => $setting['value']]);
        }
    }
}