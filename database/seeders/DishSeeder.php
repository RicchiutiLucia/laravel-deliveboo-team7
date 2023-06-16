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


                [
                    'name' =>'Carbonara',
                    'price' => 7.99,
                    'ingredients' => 'uova, guanciale, pepe, pasta',
                    'description' => 'La pasta alla carbonara è un piatto caratteristico del Lazio e più in particolare di Roma, preparato con ingredienti popolari e dal gusto intenso. I tipi di pasta tradizionalmente più usati sono gli spaghetti e i rigatoni.',
                    'image' => 'https://media.istockphoto.com/id/479271670/it/foto/pasta-alla-carbonara-italiana-tradizionale.jpg?s=612x612&w=0&k=20&c=BMnWAeH5ECUjNddPLgj4TfdcoOHdeV_fpO3xq1P4_fc=',
                    'restaurant_id' => 1,
                    'visible' => true

                ],
                [
                    'name' =>'Pizza',
                    'price' => 5.99,
                    'ingredients' => 'farina, mozzarella, basilico, pomodoro',
                    'description' => 'La pasta alla carbonara è un piatto caratteristico del Lazio e più in particolare di Roma, preparato con ingredienti popolari e dal gusto intenso. I tipi di pasta tradizionalmente più usati sono gli spaghetti e i rigatoni.',
                    'image' => 'https://img.freepik.com/free-photo/top-view-pepperoni-pizza-with-mushroom-sausages-bell-pepper-olive-corn-black-wooden_141793-2158.jpg?w=2000',
                    'restaurant_id' => 1,
                    'visible' => true
                ],


                [
                    'name' => 'Hamburger Cheeseburger',
                    'price' => 9.99,
                    'ingredients' => ['pane', 'manzo', 'formaggio', 'lattuga', 'pomodoro'],
                    'description' => 'Un succulento hamburger di manzo con formaggio, lattuga e pomodoro, servito in un morbido panino.',
                    'image' => 'https://insanelygoodrecipes.com/wp-content/uploads/2020/10/Hamburger-with-Sesame-Seeds-Cheese-and-Veggies.png',
                    'restaurant_id' => 3,
                    'visible' => true
                ],

                [
                    'name' => 'Lasagne alla Bolognese',
                    'price' => 14.99,
                    'ingredients' => ['sfoglia', 'ragù di carne', 'besciamella', 'parmigiano'],
                    'description' => 'Uno strato di sfoglia ripiena di ragù di carne, besciamella e parmigiano, cotto al forno.',
                    'image' => 'https://www.granarolo.it/system/granarolo_consumer/attachments/data/000/001/606/original/lasagne-alla-bolognese.jpg?1490627827',
                    'restaurant_id' => 4,
                    'visible' => true
                ],

                [
                    'name' => 'Sushi assortito',
                    'price' => 18.99,
                    'ingredients' => ['riso', 'pesce crudo', 'alghe', 'wasabi', 'salsa di soia'],
                    'description' => 'Una selezione di sushi tradizionale giapponese con una varietà di pesce crudo fresco.',
                    'image' => 'https://media.istockphoto.com/id/1053854126/it/foto/tutto-quello-che-puoi-mangiare-sushi.jpg?s=612x612&w=0&k=20&c=Qt7OYJ9eVf3t68K7NAO4BwVz69WLGp-0hfi5JyWuhsY=',
                    'restaurant_id' => 4,
                    'visible' => true
                ],

                [
                    'name' => 'Taco al Pastor',
                    'price' => 10.99,
                    'ingredients' => ['tortilla di mais', 'carne di maiale marinata', 'cipolla', 'coriandolo'],
                    'description' => 'Un gustoso taco messicano con carne di maiale marinata, cipolla e coriandolo.',
                    'image' => 'https://www.jocooks.com/wp-content/uploads/2022/04/tacos-al-pastor-feature-1.jpg',
                    'restaurant_id' => 4,
                    'visible' => true
                ],

                [
                    'name' => 'Ramen Tonkotsu',
                    'price' => 13.99,
                    'ingredients' => ['brodo di maiale', 'spaghetti di frumento', 'maiale brasato', 'uovo marinato'],
                    'description' => 'Una zuppa di ramen giapponese con brodo di maiale, spaghetti di frumento, maiale brasato e uovo marinato.',
                    'image' => 'https://mlbeacsiwa9k.i.optimole.com/cb:iANQ~34e3e/w:2000/h:864/q:mauto/https://www.mizkanchef.com/wp-content/uploads/2020/09/ramen-tonkotsu.jpg',
                    'restaurant_id' => 2,
                    'visible' => true
                ],

                [
                    'name' => 'Paella Valenciana',
                    'price' => 16.99,
                    'ingredients' => ['riso', 'pollo', 'coniglio', 'fagioli', 'peperoni', 'zafferano'],
                    'description' => 'Un piatto tradizionale spagnolo di riso giallo con pollo, coniglio, fagioli, peperoni e zafferano.',
                    'image' => 'https://www.tavolartegusto.it/wp/wp-content/uploads/2019/08/paella-Ricetta-paella-di-pesce-paella-de-mariscos-.jpg',
                    'restaurant_id' => 1,
                    'visible' => true
                ],

                [
                    'name' => 'Fish and Chips',
                    'price' => 11.99,
                    'ingredients' => ['filetto di merluzzo', 'patatine fritte', 'salsa tartara'],
                    'description' => 'Un classico piatto britannico con filetto di merluzzo fritto e patatine fritte, servito con salsa tartara.',
                    'image' => 'https://www.diariodicucina.it/wp-content/uploads/2020/04/fish-chips-gor-birra-1905.jpg',
                    'restaurant_id' => 4,
                    'visible' => true
                ],

                [
                    'name' => 'Pad Thai',
                    'price' => 12.99,
                    'ingredients' => ['tagliatelle di riso', 'gamberetti', 'uova', 'tofu', 'germogli di soia', 'arachidi'],
                    'description' => 'Un piatto di noodle tailandesi al wok con gamberetti, uova, tofu, germogli di soia e arachidi.',
                    'image' => 'https://media.gettyimages.com/id/1262880166/it/foto/ricetta-thailandese-di-noodles-thai-di-gamberi-appena-saltati-in-padella-su-un-piatto-rotondo.jpg?s=612x612&w=gi&k=20&c=BxAM6K6wFt5z-hbfXF4SiV_Elj8iPVOK8T45vwMJJN0=',
                    'restaurant_id' => 2,
                    'visible' => true
                ],

                [
                    'name' => 'Gelato alla Vaniglia',
                    'price' => 5.99,
                    'ingredients' => ['latte', 'panna', 'zucchero', 'vaniglia'],
                    'description' => 'Un delizioso gelato cremoso alla vaniglia fatto con latte, panna, zucchero e aromatizzato alla vaniglia.',
                    'image' => 'https://www.tribugolosa.com/media/1-75_crop.jpg/rh/gelato-alla-vaniglia.jpg',
                    'restaurant_id' => 3,
                    'visible' => true
                ],

                [
                    'name' => 'Moussaka',
                    'price' => 13.99,
                    'ingredients' => ['melanzane', 'carne macinata', 'patate', 'cipolla', 'besciamella', 'formaggio'],
                    'description' => 'Un piatto greco a base di melanzane, carne macinata, patate, cipolla, besciamella e formaggio gratinato al forno.',
                    'image' => 'https://primochef.it/wp-content/uploads/2017/07/SH_moussaka.jpg',
                    'restaurant_id' => 3,
                    'visible' => true
                ],
                [
                    'name' => 'Ceviche',
                    'price' => 11.99,
                    'ingredients' => ['pesce bianco', 'succo di limone', 'cipolla rossa', 'peperoncino', 'coriandolo'],
                    'description' => 'Un piatto latinoamericano a base di pesce bianco crudo marinato nel succo di limone, con cipolla rossa, peperoncino e coriandolo.',
                    'image' => 'https://img.freepik.com/premium-photo/delicious-seafood-ceviche-from-peru-with-chili-peppers-chickpeas_127101-192.jpg?w=2000',
                    'restaurant_id' => 2,
                    'visible' => true
                ],
                [
                    'name' => 'Risotto ai Funghi',
                    'price' => 14.99,
                    'ingredients' => ['riso', 'funghi', 'brodo vegetale', 'cipolla', 'parmigiano', 'prezzemolo'],
                    'description' => 'Un delizioso risotto italiano con funghi, cipolla, brodo vegetale, parmigiano e prezzemolo.',
                    'image' => 'https://blog.giallozafferano.it/ricettepanedolci/wp-content/uploads/2020/10/risotto-ai-funghi-1-720x480.jpeg',
                    'restaurant_id' => 8,
                    'visible' => true
                ],
                [
                    'name' => 'Croissant',
                    'price' => 2.99,
                    'ingredients' => ['farina', 'burro', 'lievito', 'zucchero', 'uova'],
                    'description' => 'Un delizioso dolce francese a base di pasta sfoglia croccante e burrosa.',
                    'image' => 'https://wips.plug.it/cips/buonissimo.org/cms/2020/03/51721252_s.jpg?w=712&a=c&h=406',
                    'restaurant_id' => 1,
                    'visible' => true
                ],
                [
                    'name' => 'Poke Bowl',
                    'price' => 10.99,
                    'ingredients' => ['riso', 'pesce crudo', 'alghe', 'verdure fresche', 'salsa'],
                    'description' => 'Un piatto hawaiano composto da riso, pesce crudo a cubetti, alghe, verdure fresche e una salsa gustosa.',
                    'image' => 'https://www.tavolartegusto.it/wp/wp-content/uploads/2021/07/Poke-bowl-ricetta.jpg',
                    'restaurant_id' => 7,
                    'visible' => true
                ],
                [
                    'name' => 'Schnitzel',
                    'price' => 12.99,
                    'ingredients' => ['carne di maiale', 'pan grattato', 'uova', 'limone'],
                    'description' => 'Un piatto austriaco di carne di maiale impanata e fritta, servita con un tocco di limone.',
                    'image' => 'https://www.thespruceeats.com/thmb/BS5BdyQsGh5qQyRiuZMannmcxoY=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/SES-wiener-schnitzel-recipe-1447089-hero-02-18827aac4cbd4aec926350d4f9778e70.jpg',
                    'restaurant_id' => 3,
                    'visible' => true
                ],
                [
                    'name' => 'Tiramisù',
                    'price' => 7.99,
                    'ingredients' => ['savoiardi', 'mascarpone', 'caffè', 'cacao in polvere'],
                    'description' => 'Un dessert italiano classico fatto con strati di savoiardi inzuppati nel caffè, crema di mascarpone e cacao in polvere.',
                    'image' => 'data:image/jpeg;base64,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',
                    'restaurant_id' => 5,
                    'visible' => true
                ],

                [
                    'name' => 'Chicken Shawarma',
                    'price' => 9.99,
                    'ingredients' => ['pollo marinato', 'pane pita', 'salsa tahini', 'insalata'],
                    'description' => 'Un delizioso piatto mediorientale con pollo marinato, cotto su spiedo verticale e servito in un pane pita con salsa tahini e insalata.',
                    'image' => 'https://www.lemonblossoms.com/wp-content/uploads/2020/06/Chicken-Shawarma-Recipe-S5.jpg',
                    'restaurant_id' => 6,
                    'visible' => true
                ],
                [
                    'name' => 'Pierogi',
                    'price' => 10.99,
                    'ingredients' => ['impasto', 'ripieno di patate', 'cipolla', 'panna acida'],
                    'description' => 'Un piatto polacco di pasta ripiena di patate e cipolla, servita con panna acida.',
                    'image' => 'https://hips.hearstapps.com/vidthumb/images/delish-dill-cheddar-pierogis-102821-04-jg-min-1636731147.jpg?crop=1xw:0.8439609902475619xh;center,top&resize=1200:*',
                    'restaurant_id' => 9,
                    'visible' => true
                ],
                [
                    'name' => 'Key Lime Pie',
                    'price' => 6.99,
                    'ingredients' => ['crosta di biscotti', 'crema al lime', 'panna montata'],
                    'description' => 'Un dolce tradizionale della Florida con una crosta di biscotti, una crema al lime dolce e una guarnizione di panna montata.',
                    'image' => 'https://www.livewellbakeoften.com/wp-content/uploads/2021/05/Key-Lime-Pie-NEW-7s.jpg',
                    'restaurant_id' => 4,
                    'visible' => true
                ]

        ];




        foreach ($dishes as $dish){
            $newDish = new Dish();
            $newDish->name = $dish['name'];
            $newDish->price = $dish['price'];
            $newDish->ingredients = $dish['ingredients'];
            $newDish->description = $dish['description'];
            $newDish->image = $dish['image'];
            $newDish->restaurant_id = $dish['restaurant_id'];
            $newDish->visible = $dish['visible'];
            $newDish->save();

        }
    }
}
