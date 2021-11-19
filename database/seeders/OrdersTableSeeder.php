<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Order;
class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $table->integer('product_id');
        //     $table->integer('user_id');
        //     $table->decimal('price');
        //truncate orders table
        Order::truncate();

        //user 1
        Order::create([
            'product_id' => 1,
            'user_id' => 1,
            'price' => 999.98
        ]);
        Order::create([
            'product_id' => 2,
            'user_id' => 1,
            'price' => 999.98
        ]);
        Order::create([
            'product_id' => 3,
            'user_id' => 1,
            'price' => 999.98
        ]);

        //user 2
        Order::create([
            'product_id' => 1,
            'user_id' => 2,
            'price' => 999.98
        ]);
        Order::create([
            'product_id' => 2,
            'user_id' => 2,
            'price' => 999.98
        ]);
        Order::create([
            'product_id' => 3,
            'user_id' => 2,
            'price' => 999.98
        ]);
        Order::create([
            'product_id' => 4,
            'user_id' => 2,
            'price' => 999.98
        ]);

        //user 3
        Order::create([
            'product_id' => 1,
            'user_id' => 3,
            'price' => 999.98
        ]);
        Order::create([
            'product_id' => 2,
            'user_id' => 3,
            'price' => 999.98
        ]);
        Order::create([
            'product_id' => 3,
            'user_id' => 3,
            'price' => 999.98
        ]);
        Order::create([
            'product_id' => 4,
            'user_id' => 3,
            'price' => 999.98
        ]);
    }
}
