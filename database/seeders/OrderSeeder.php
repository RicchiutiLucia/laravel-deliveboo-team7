<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Order;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $orders = [
            [
                'total_price' => '12.30',
                'name' => 'Gino',
                'address' => 'via Roma 124',
                'email' => 'gino@gmail.com',
                'phone' => '00393409834567',
                'status' => false,
            ],
            [
                'total_price' => '52.50',
                'name' => 'Pino',
                'address' => 'via Milano 340',
                'email' => 'pino@gmail.com',
                'phone' => '00393409839988',
                'status' => false,
            ],
            [
                'total_price' => '82.80',
                'name' => 'Mario',
                'address' => 'via Firenze 89',
                'email' => 'mario@yahoo.com',
                'phone' => '0039348761876',
                'status' => false,
            ],
            [
                'total_price' => '22.80',
                'name' => 'Giorgio',
                'address' => 'via Giove 102',
                'email' => 'giorgio@yahoo.com',
                'phone' => '0033345561623',
                'status' => false,
            ],
            [
                'total_price' => '82.80',
                'name' => 'PierGiorgio',
                'address' => 'via Garibaldi 7',
                'email' => 'piergiorgio@yahoo.com',
                'phone' => '003408090876',
                'status' => false,
            ],

        ];

            foreach ($orders as $order){
                $newOrder = new Order();
                $newOrder->total_price = $order['total_price'];
                $newOrder->name = $order['name'];
                $newOrder->address = $order['address'];
                $newOrder->email = $order['email'];
                $newOrder->phone = $order['phone'];
                $newOrder->status = $order['status'];
                $newOrder->save();
            }


    }
}