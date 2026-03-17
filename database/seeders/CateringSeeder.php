<?php

namespace Database\Seeders;

use App\Models\CateringGallery; // Sesuaikan jika nama model Anda 'Catering'
use Illuminate\Database\Seeder;

class CateringSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $caterings = [
            [
                'title'      => 'Pondokan / Gubukan Soto',
                'subtitle'   => 'Penyajian otentik untuk acara spesial',
                'image'      => 'assets/images_web/catering/1.png',
                'sort_order' => 1,
                'is_active'  => true,
            ],
            [
                'title'      => 'Catering Prasmanan',
                'subtitle'   => 'Cocok untuk acara kantor dan syukuran',
                'image'      => 'assets/images_web/catering/2.png',
                'sort_order' => 2,
                'is_active'  => true,
            ],
            [
                'title'      => 'Paket Pernikahan',
                'subtitle'   => 'Hadirkan cita rasa legendaris di hari bahagia',
                'image'      => 'assets/images_web/catering/3.png',
                'sort_order' => 3,
                'is_active'  => true,
            ],
        ];

        foreach ($caterings as $catering) {
            CateringGallery::create($catering);
        }
    }
}