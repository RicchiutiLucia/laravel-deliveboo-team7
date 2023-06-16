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
            [
                'user_id' => '',
                'name' => '',
                'description' => "Situata nel cuore del Parco Nazionale del Gargano, in Puglia, l’agriturismo è un ottimo punto di partenza e di arrivo per le escursioni nei centri turistici pugliesi di interesse naturalistico e culturale. Immerso nel verde degli ulivi e poco distante dal mare, l’Agriturismo Giorgio offre una vera oasi di tranquillità ed un invitante occasione di relax.",
                'address' => 'Contrada San Giorgio',
                'phone' => '0884.551477',
                'vat_number' => '00565051900',
                'image' => 'https://www.agriturismi.it/img/strutture/9058/agriturismo_giorgio_piscina_20210720121920d.jpg',
            ],
            [
                'user_id' => '',
                'name' => 'Dar bello de Nonna Osteria',
                'description' => "",
                'address' => 'Via Quirino Majorana, 172, 00152 Roma RM',
                'phone' => '320 392 5244',
                'vat_number' => '18455067723',
                'image' => 'https://media-cdn.tripadvisor.com/media/photo-s/1c/ff/fa/f3/interni.jpg',
            ],
            [
                'user_id' => '',
                'name' => 'Ristorante Gandhi Indiano Roma',
                'description' => "",
                'address' => 'Via Pellegrino Matteucci, 124, 00154 Roma RM',
                'phone' => '06 6442 0047',
                'vat_number' => '43188945137',
                'image' => 'https://res.cloudinary.com/tf-lab/image/upload/restaurant/3c1b4e67-9cfd-4784-a8fc-ef02a1c1c8e5/ecee33a8-38f5-4cd1-b5f6-0cb651f36d41.jpg',
            ],
            [
                'user_id' => '',
                'name' => 'La Cucaracha',
                'description' => "",
                'address' => 'Via Mocenigo, 10, 00192 Roma RM',
                'phone' => '06 3974 6373',
                'vat_number' => '08767620086',
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRzzRyMkVDCApnXRH8GdQv7K_KjDFGkmby6jg&usqp=CAU',
            ],
            [
                'user_id' => '',
                'name' => 'Cencio la Parolaccia',
                'description' => "",
                'address' => 'Vicolo del Cinque, 3, 00153 Roma RM',
                'phone' => '06 580 3633',
                'vat_number' => '98724991562',
                'image' => 'https://lh3.googleusercontent.com/p/AF1QipOxh_K5Dy7pA-EVxc3cCdC8WJIXU_N5O4xK5_RN=s680-w680-h510',
            ],
            [
                'user_id' => '',
                'name' => 'Ristorante Sushi Koi',
                'description' => "",
                'address' => 'Piazzale Roberto Ardigò, 14, 00142 Roma RM',
                'phone' => '06 3937 6478',
                'vat_number' => '76207188643',
                'image' => 'https://res.cloudinary.com/tf-lab/image/upload/restaurant/615cb8be-cc46-4154-9975-311c5867879b/67cceee1-49a7-4ad6-8fac-5d50bbce5d85.jpg',
            ],
            [
                'user_id' => '',
                'name' => 'Lo Convento',
                'description' => "",
                'address' => 'Via Ostiense, 491, 00144 Roma RM',
                'phone' => '06 541 0115',
                'vat_number' => '98645686237',
                'image' => 'https://lh3.googleusercontent.com/p/AF1QipMdvC_sw42zUCv_re-6aABnxJEKou4pV7lpH38v=s680-w680-h510',
            ],
            [
                'user_id' => '',
                'name' => 'VEG-Joy',
                'description' => "",
                'address' => 'Via Vasto, 4, 00182 Roma RM',
                'phone' => '06 8913 4914',
                'vat_number' => '7654345921',
                'image' => 'https://lh3.googleusercontent.com/p/AF1QipMzh6hAsTHtpk6xtLGGBuIK7naRFMsxt82l7VO3=s680-w680-h510',
            ],
            [
                'user_id' => '',
                'name' => "L'Officina del Pesce Roma",
                'description' => "",
                'address' => 'Via Oderisi da Gubbio, 41/43, 00146 Roma RM',
                'phone' => '06 9652 5561',
                'vat_number' => '86432235679',
                'image' => 'https://lh5.googleusercontent.com/p/AF1QipMtC8u4z1goD4U5K8_XDzqZYMLv5b_qcbcn9R2h=w260-h175-n-k-no',
            ],
            [
                'user_id' => '',
                'name' => 'KFC',
                'description' => "",
                'address' => 'Viale di Valle Aurelia, 30, 00167 Roma RM',
                'phone' => '06 541 6446',
                'vat_number' => '32256789677',
                'image' => 'https://lh3.googleusercontent.com/p/AF1QipMMGPP2t0qe87WJyoNH4mbSuiaqEdS-wVn3TmUw=s680-w680-h510',
            ],
        ];

        foreach ($restaurants as $key => $restaurant) {
            $newRestaurant = new Restaurant();
            $newRestaurant->user_id = $key;
            $newRestaurant->name = $restaurant['name'];
            $newRestaurant->slug = Str::slug($restaurant['name'], '-');
            $newRestaurant->address = $restaurant['address'];
            $newRestaurant->phone =  $restaurant['phone'];
            $newRestaurant->vat_number =  $restaurant['vat_number'];
            $newRestaurant->image =  $restaurant['image'];
            $newRestaurant->save();
        }
    }
}
