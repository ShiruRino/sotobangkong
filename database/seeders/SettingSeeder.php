<?php

namespace Database\Seeders;

use App\Models\AboutSetting;
use App\Models\ChooseUsSetting;
use App\Models\ContactSetting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1. Default Data Choose Us Setting
        ChooseUsSetting::updateOrCreate(
            ['id' => 1],
            [
                'subtitle' => 'Cita Rasa Warisan Nusantara',
                'title'    => 'Kenapa Memilih Kami?',
                'image'    => null, // Biarkan null agar fallback ke gambar template
            ]
        );

        // 2. Default Data About Setting
        AboutSetting::updateOrCreate(
            ['id' => 1],
            [
                'history_title'      => 'SEJARAH SOTO BANGKONG',
                'history_content'    => '<p>Berawal dari sebuah pikulan sederhana di perempatan Jalan Bangkong, Semarang pada tahun 1950, <strong>Soto Bangkong</strong> memulai perjalanan panjangnya. Nama "Bangkong" sendiri diambil dari nama jalan tempat kami pertama kali merintis usaha.</p><p>Kelezatan kaldu bening yang kaya rempah, dipadukan dengan ayam kampung pilihan, bihun, kecambah, dan taburan bawang putih goreng, membuat Soto Bangkong perlahan tapi pasti menjadi primadona kuliner.</p>',
                'history_image'      => null,
                
                'philosophy_title'   => 'FILOSOFI RASA',
                'philosophy_content' => '<p><span>Bumbu Rahasia</span> kami bukanlah sekadar campuran rempah-rempah biasa. Ia adalah dedikasi, konsistensi, dan cinta pada budaya kuliner Indonesia yang kami warisi sejak dulu.</p><p>Berbeda dengan soto dari daerah lain, Soto Bangkong memiliki ciri khas kuah kaldu yang bening sedikit kecoklatan, hasil dari penggunaan kecap manis produksi rumahan yang kami bawa langsung dari Semarang.</p>',
                'philosophy_image'   => null,
            ]
        );

        // 3. Default Data Contact Setting
        ContactSetting::updateOrCreate(
            ['id' => 1],
            [
                'logo_image'     => null,
                'office_title'   => 'Kantor Pusat & Kedai Utama',
                'address_line_1' => 'Jl. Pakubuwono VI No.39, Kebayoran Baru,',
                'address_line_2' => 'Jakarta Selatan, DKI Jakarta 12120',
                
                'phone'          => '(021) 720 0000',
                'whatsapp'       => '0812 888 47857',
                'email_1'        => 'halo@sotobangkongjkt.com',
                'email_2'        => 'marketing@sotobangkongjkt.com',
                
                'hours_title'    => 'Jam Operasional',
                'weekday_hours'  => 'Senin - Jumat: 07.30 - 21.00 WIB',
                'weekend_hours'  => 'Sabtu - Minggu: 07.00 - 22.00 WIB',
            ]
        );
    }
}