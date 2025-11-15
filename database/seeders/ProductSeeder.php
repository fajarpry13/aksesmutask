<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        Product::insert([
            [
                'name' => 'Beras Premium 5kg',
                'description' => 'Beras pulen asli Jawa',
                'price' => 65000.00,
                'stock' => 120,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Minyak Goreng 1L',
                'description' => 'Minyak goreng kemasan',
                'price' => 18500.00,
                'stock' => 85,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Gula Pasir 1kg',
                'description' => null,
                'price' => 14000.00,
                'stock' => 200,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Telur Ayam Kampung (10 butir)',
                'description' => 'Telur organik, segar',
                'price' => 28000.00,
                'stock' => 45,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Kopi Arabika Bubuk 250g',
                'description' => 'Kopi lokal, roasted medium',
                'price' => 42000.00,
                'stock' => 30,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}