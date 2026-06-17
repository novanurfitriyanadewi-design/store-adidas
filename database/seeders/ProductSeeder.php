<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::insert([
            [
                'name' => 'Adidas Samba',
                'price' => 1800000,
                'size' => '42',
                'stock' => 10,
                'image' => 'products/samba.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'Adidas Superstar',
                'price' => 2000000,
                'size' => '43',
                'stock' => 8,
                'image' => 'products/superstar.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'Adidas Gazelle',
                'price' => 1700000,
                'size' => '41',
                'stock' => 12,
                'image' => 'products/gazalle.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}