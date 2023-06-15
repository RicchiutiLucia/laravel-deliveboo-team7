<?php

namespace Database\Seeders;

use App\Models\Restaurant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;


class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $restaurants = [
           
        
                'name' => 'Agruturismo Giorgio',
                'description' => "Situata nel cuore del Parco Nazionale del Gargano, in Puglia, l’agriturismo è un ottimo punto di partenza e di arrivo per le escursioni nei centri turistici pugliesi di interesse naturalistico e culturale. Immerso nel verde degli ulivi e poco distante dal mare, l’Agriturismo Giorgio offre una vera oasi di tranquillità ed un invitante occasione di relax.",
                'address' => 'Contrada San Giorgio',
                'phone' => '0884.551477',
                'vat_number' => '00565051900',
                'image' => 'https://www.agriturismi.it/img/strutture/9058/agriturismo_giorgio_piscina_20210720121920d.jpg',
                
        
        ];
        for($i = 0; $i < 20; $i++){
            Restaurant::create([
                'description' => $restaurants['description'],
                'slug' => Str::slug($restaurants['name'], '-'),
                'address' => $restaurants['address'],
                'phone' => $restaurants['phone'],
                'vat_number' => $restaurants['vat_number'],
                'image' => $restaurants['image'],
                
            ]);
          

        }
       

       
    }
    }

