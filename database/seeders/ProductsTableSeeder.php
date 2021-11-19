<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //truncate Product table
        Product::truncate();

        //create products
        Product::create([
            'product_name' => 'Test Product 1',
            'product_description' => 'Seed Description',
            'quantity' => 10,
            'price' => 999.98,
            'status' => 'open'
        ]);
        Product::create([
            'product_name' => 'Test Product 2',
            'product_description' => 'Seed Description',
            'quantity' => 10,
            'price' => 999.98,
            'status' => 'open'
        ]);
        Product::create([
            'product_name' => 'Test Product 3',
            'product_description' => 'Seed Description',
            'quantity' => 10,
            'price' => 999.98,
            'status' => 'open'
        ]);
        Product::create([
            'product_name' => 'Test Product 4',
            'product_description' => 'Seed Description',
            'quantity' => 10,
            'price' => 999.98,
            'status' => 'open'
        ]);
        Product::create([
            'product_name' => 'Test Product 5',
            'product_description' => 'Seed Description',
            'quantity' => 10,
            'price' => 999.98,
            'status' => 'open'
        ]);
    }
}
