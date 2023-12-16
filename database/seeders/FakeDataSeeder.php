<?php

namespace Database\Seeders;

use App\Models\Favorites;
use App\Models\Locations;
use App\Models\Products;
use App\Models\TypeRooms;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FakeDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::factory()->create([
            'email' => 'admin@kosapp.com',
            'name' => 'Admin',
            'email_verified_at' => now(),
            'phone_number' => '08123456789',
            'password' => bcrypt('admin'),
            'role' => 'admin',
        ]);

        // Seed TypeRooms
        $typeRooms = [
            [
                'type_rooms' => 'Kamar Kos',
            ],
            [
                'type_rooms' => 'Rumah Kontrakan',
            ],
            [
                'type_rooms' => 'Apartemen',
            ],
        ];

        DB::table('type_rooms')->insert($typeRooms);

        // Seed Locations
        $locations = [
            [
                'city' => 'Malang',
                'district' => 'Kedung Kandang',
            ],
            [
                'city' => 'Malang',
                'district' => 'Klojen',
            ],
            [
                'city' => 'Malang',
                'district' => 'Blimbing',
            ],
        ];

        DB::table('locations')->insert($locations);

        // Seed Products
        $products = [
            [
                'name' => 'Kamar Kos Murah di Kedung Kandang',
                'size' => '3x3',
                'location' => 'Malang, Kedung Kandang',
                'price' => 1000000,
                'description' => 'Kamar kos murah dengan fasilitas lengkap di Kedung Kandang, Malang.',
                'type_rooms_id' => 1,
                'locations_id' => 1,
            ],
            [
                'name' => 'Rumah Kontrakan 2 Kamar di Klojen',
                'size' => '60',
                'location' => 'Malang, Klojen',
                'price' => 3000000,
                'description' => 'Rumah kontrakan 2 kamar dengan fasilitas lengkap di Klojen, Malang.',
                'type_rooms_id' => 2,
                'locations_id' => 2,
            ],
            [
                'name' => 'Apartemen 1 Kamar di Blimbing',
                'size' => '30',
                'location' => 'Malang, Blimbing',
                'price' => 2000000,
                'description' => 'Apartemen 1 kamar dengan fasilitas lengkap di Blimbing, Malang.',
                'type_rooms_id' => 3,
                'locations_id' => 3,
            ],
        ];

        DB::table('products')->insert($products);

        // Seed Favorites
        $favorites = [
            [
                'city' => 'Malang',
                'district' => 'Kedung Kandang',
            ],
            [
                'city' => 'Malang',
                'district' => 'Klojen',
            ],
            [
                'city' => 'Malang',
                'district' => 'Blimbing',
            ],
        ];

        DB::table('favorites')->insert($favorites);
    }
}
