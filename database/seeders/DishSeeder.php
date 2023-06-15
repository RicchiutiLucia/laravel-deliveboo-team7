<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Dish;

class DishSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dishes = [

                'name' =>'Carbonara',
                'price' => '7.99',
                'ingredients' => 'uova, guanciale, pepe, pasta',
                'description' => 'La pasta alla carbonara è un piatto caratteristico del Lazio e più in particolare di Roma, preparato con ingredienti popolari e dal gusto intenso. I tipi di pasta tradizionalmente più usati sono gli spaghetti e i rigatoni.',
                'image' => 'https://media.istockphoto.com/id/479271670/it/foto/pasta-alla-carbonara-italiana-tradizionale.jpg?s=612x612&w=0&k=20&c=BMnWAeH5ECUjNddPLgj4TfdcoOHdeV_fpO3xq1P4_fc=',
                'restaurant_id' => 1,
                'visible' => true
        ];




        for ($i = 0; $i < 10; $i++){
            $newDish = new Dish();
            $newDish->name = $dishes['name'];
            $newDish->price = $dishes['price'];
            $newDish->ingredients = $dishes['ingredients'];
            $newDish->description = $dishes['description'];
            $newDish->image = $dishes['image'];
            $newDish->restaurant_id = $dishes['restaurant_id'];
            $newDish->visible = $dishes['visible'];
            $newDish->save();

        }
    }
}
