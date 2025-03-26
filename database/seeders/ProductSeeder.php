<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'product_category_id' => 1,
                'name' => 'Laptop',
                'price' => 10000000,
                'image' => 'laptop.jpg'
            ],
            [
                'product_category_id' => 2,
                'name' => 'Kaos Polos',
                'price' => 50000,
                'image' => 'kaos.jpg'
            ],
        ]);
    }
}

