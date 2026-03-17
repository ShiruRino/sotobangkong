<?php

namespace Database\Seeders;

use App\Models\Gallery;
use Illuminate\Database\Seeder;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $galleries = [
            [
                'title'      => 'Penyajian Soto Bangkong',
                'subtitle'   => 'Soto ayam khas dengan kuah bening',
                'image'      => 'assets/images_web/galeri/1.png',
                'sort_order' => 1,
                'is_active'  => true,
            ],
            [
                'title'      => 'Sate Pelengkap Soto',
                'subtitle'   => 'Lauk pelengkap sate kerang dan telur puyuh',
                'image'      => 'assets/images_web/galeri/2.jpeg',
                'sort_order' => 2,
                'is_active'  => true,
            ],
            [
                'title'      => 'Sate Kerang Spesial',
                'subtitle'   => 'Bumbu meresap sempurna',
                'image'      => 'assets/images_web/galeri/3.jpeg',
                'sort_order' => 3,
                'is_active'  => true,
            ],
            [
                'title'      => 'Gorengan & Perkedel',
                'subtitle'   => 'Teman setia makan soto hangat',
                'image'      => 'assets/images_web/galeri/4.jpeg',
                'sort_order' => 4,
                'is_active'  => true,
            ],
            [
                'title'      => 'Layanan Prasmanan / Catering',
                'subtitle'   => 'Siap melayani pesanan untuk berbagai acara',
                'image'      => 'assets/images_web/galeri/5.jpg',
                'sort_order' => 5,
                'is_active'  => true,
            ],
        ];

        foreach ($galleries as $gallery) {
            Gallery::create($gallery);
        }
    }
}