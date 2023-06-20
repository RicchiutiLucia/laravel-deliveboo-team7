<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DishOrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $relations = [
            [
                'dish_id' => 3,
                'order_id' => 1,
                'quantity' => 1
            ],
            [
                'dish_id' => 9,
                'order_id' => 2,
                'quantity' => 1
            ],
            [
                'dish_id' => 11,
                'order_id' => 3,
                'quantity' => 4
            ],
            [
                'dish_id' => 16,
                'order_id' => 4,
                'quantity' => 7
            ],
            [
                'dish_id' => 18,
                'order_id' => 5,
                'quantity' => 2
            ],
            [
                'dish_id' => 22,
                'order_id' => 1,
                'quantity' => 3
            ],
            [
                'dish_id' => 11,
                'order_id' => 2,
                'quantity' => 1
            ],
            [
                'dish_id' => 9,
                'order_id' => 3,
                'quantity' => 1
            ],
            [
                'dish_id' => 8,
                'order_id' => 4,
                'quantity' => 5
            ],
            [
                'dish_id' => 2,
                'order_id' => 5,
                'quantity' => 4
            ],
            [
                'dish_id' => 4,
                'order_id' => 1,
                'quantity' => 1
            ],
            [
                'dish_id' => 6,
                'order_id' => 2,
                'quantity' => 1
            ],
        ];

        foreach ($relations as $relation) {
            DB::table('dish_order')->insert([
                'dish_id'=> $relation['dish_id'],
                'order_id'=> $relation['order_id'],
                'quantity' => $relation['quantity']
            ]);
        }
    }
}
