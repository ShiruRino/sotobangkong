<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name'     => 'JB ganteng banget inshallah allahuakbar',
            'username' => 'admin',
            'password' => Hash::make('admin1234'), // Password admin Anda
        ]);
        $this->call([
            SettingSeeder::class,
            CateringSeeder::class,
            GallerySeeder::class
        ]);
    }
}