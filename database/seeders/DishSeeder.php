<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Dish;
use Illuminate\Support\Str;

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
                'name' => 'Carbonara',
                'price' => 7.99,
                'ingredients' => 'uova, guanciale, pepe, pasta',
                'description' => 'La pasta alla carbonara è un piatto caratteristico del Lazio e più in particolare di Roma, preparato con ingredienti popolari e dal gusto intenso. I tipi di pasta tradizionalmente più usati sono gli spaghetti e i rigatoni.',
                'image' => 'https://media.istockphoto.com/id/479271670/it/foto/pasta-alla-carbonara-italiana-tradizionale.jpg?s=612x612&w=0&k=20&c=BMnWAeH5ECUjNddPLgj4TfdcoOHdeV_fpO3xq1P4_fc=',
                'restaurant_id' => 1,
                'visible' => true

            ],
            [
                'name' => 'Pizza Margherita',
                'price' => 5.99,
                'ingredients' => 'farina, mozzarella, basilico, pomodoro',
                'description' => 'La pasta alla carbonara è un piatto caratteristico del Lazio e più in particolare di Roma, preparato con ingredienti popolari e dal gusto intenso. I tipi di pasta tradizionalmente più usati sono gli spaghetti e i rigatoni.',
                'image' => 'https://img.freepik.com/free-photo/top-view-pepperoni-pizza-with-mushroom-sausages-bell-pepper-olive-corn-black-wooden_141793-2158.jpg?w=2000',
                'restaurant_id' => 2,
                'visible' => true
            ],

            [
                'name' => 'Pizza Marinara',
                'price' => 5.99,
                'ingredients' => 'farina, mozzarella, basilico, pomodoro',
                'description' => 'La pasta alla carbonara è un piatto caratteristico del Lazio e più in particolare di Roma, preparato con ingredienti popolari e dal gusto intenso. I tipi di pasta tradizionalmente più usati sono gli spaghetti e i rigatoni.',
                'image' => 'https://img.freepik.com/free-photo/top-view-pepperoni-pizza-with-mushroom-sausages-bell-pepper-olive-corn-black-wooden_141793-2158.jpg?w=2000',
                'restaurant_id' => 2,
                'visible' => true
            ],

            [
                'name' => 'Pizza Diavola',
                'price' => 5.99,
                'ingredients' => 'farina, mozzarella, basilico, pomodoro',
                'description' => 'La pasta alla carbonara è un piatto caratteristico del Lazio e più in particolare di Roma, preparato con ingredienti popolari e dal gusto intenso. I tipi di pasta tradizionalmente più usati sono gli spaghetti e i rigatoni.',
                'image' => 'https://img.freepik.com/free-photo/top-view-pepperoni-pizza-with-mushroom-sausages-bell-pepper-olive-corn-black-wooden_141793-2158.jpg?w=2000',
                'restaurant_id' => 2,
                'visible' => true
            ],

            [
                'name' => 'Pizza 4 stagioni',
                'price' => 5.99,
                'ingredients' => 'farina, mozzarella, basilico, pomodoro',
                'description' => 'La pasta alla carbonara è un piatto caratteristico del Lazio e più in particolare di Roma, preparato con ingredienti popolari e dal gusto intenso. I tipi di pasta tradizionalmente più usati sono gli spaghetti e i rigatoni.',
                'image' => 'https://img.freepik.com/free-photo/top-view-pepperoni-pizza-with-mushroom-sausages-bell-pepper-olive-corn-black-wooden_141793-2158.jpg?w=2000',
                'restaurant_id' => 2,
                'visible' => true
            ],

            [
                'name' => 'Pizza',
                'price' => 5.99,
                'ingredients' => 'farina, mozzarella, basilico, pomodoro',
                'description' => 'La pasta alla carbonara è un piatto caratteristico del Lazio e più in particolare di Roma, preparato con ingredienti popolari e dal gusto intenso. I tipi di pasta tradizionalmente più usati sono gli spaghetti e i rigatoni.',
                'image' => 'https://img.freepik.com/free-photo/top-view-pepperoni-pizza-with-mushroom-sausages-bell-pepper-olive-corn-black-wooden_141793-2158.jpg?w=2000',
                'restaurant_id' => 2,
                'visible' => true
            ],


            [
                'name' => 'Double Cheeseburger',
                'price' => 9.99,
                'ingredients' => 'pane, carne di manzo, formaggio, pomodoro, lattuga',
                'description' => 'Un succulento hamburger di manzo con formaggio, lattuga e pomodoro, servito in un morbido panino.',
                'image' => 'https://insanelygoodrecipes.com/wp-content/uploads/2020/10/Hamburger-with-Sesame-Seeds-Cheese-and-Veggies.png',
                'restaurant_id' => 3,
                'visible' => true
            ],

            [
                'name' => 'Chickenburger',
                'price' => 9.99,
                'ingredients' => 'pane, carne di pollo, formaggio, pomodoro, lattuga',
                'description' => 'Un succulento hamburger di manzo con formaggio, lattuga e pomodoro, servito in un morbido panino.',
                'image' => 'https://insanelygoodrecipes.com/wp-content/uploads/2020/10/Hamburger-with-Sesame-Seeds-Cheese-and-Veggies.png',
                'restaurant_id' => 3,
                'visible' => true
            ],

            [
                'name' => 'Veganburger',
                'price' => 9.99,
                'ingredients' => 'pane, burger vegetariano, pomodoro, lattuga',
                'description' => 'Un succulento hamburger di manzo con formaggio, lattuga e pomodoro, servito in un morbido panino.',
                'image' => 'https://insanelygoodrecipes.com/wp-content/uploads/2020/10/Hamburger-with-Sesame-Seeds-Cheese-and-Veggies.png',
                'restaurant_id' => 3,
                'visible' => true
            ],

            [
                'name' => 'Lasagne alla Bolognese',
                'price' => 14.99,
                'ingredients' => 'besciamella, formaggio, ragù, pomodoro',
                'description' => 'Uno strato di sfoglia ripiena di ragù di carne, besciamella e parmigiano, cotto al forno.',
                'image' => 'https://www.granarolo.it/system/granarolo_consumer/attachments/data/000/001/606/original/lasagne-alla-bolognese.jpg?1490627827',
                'restaurant_id' => 4,
                'visible' => true
            ],

            [
                'name' => 'Sushi misto',
                'price' => 18.99,
                'ingredients' => 'salmone crudo, tonno crudo, gamberi',
                'description' => 'Una selezione di sushi tradizionale giapponese con una varietà di pesce crudo fresco.',
                'image' => 'https://media.istockphoto.com/id/1053854126/it/foto/tutto-quello-che-puoi-mangiare-sushi.jpg?s=612x612&w=0&k=20&c=Qt7OYJ9eVf3t68K7NAO4BwVz69WLGp-0hfi5JyWuhsY=',
                'restaurant_id' => 5,
                'visible' => true
            ],

            [
                'name' => 'Taco al Pastor',
                'price' => 10.99,
                'ingredients' => 'tacos, carne di maiale, cipolla',
                'description' => 'Un gustoso taco messicano con carne di maiale marinata, cipolla e coriandolo.',
                'image' => 'https://www.jocooks.com/wp-content/uploads/2022/04/tacos-al-pastor-feature-1.jpg',
                'restaurant_id' => 6,
                'visible' => true
            ],

            [
                'name' => 'Ramen Tonkotsu',
                'price' => 13.99,
                'ingredients' => 'zuppa con brodo di maiale, verdure, uove',
                'description' => 'Una zuppa di ramen giapponese con brodo di maiale, spaghetti di frumento, maiale brasato e uovo marinato.',
                'image' => 'https://mlbeacsiwa9k.i.optimole.com/cb:iANQ~34e3e/w:2000/h:864/q:mauto/https://www.mizkanchef.com/wp-content/uploads/2020/09/ramen-tonkotsu.jpg',
                'restaurant_id' => 7,
                'visible' => true
            ],

            [
                'name' => 'Paella Valenciana',
                'price' => 16.99,
                'ingredients' => 'farina, mozzarella, basilico, pomodoro',
                'description' => 'Un piatto tradizionale spagnolo di riso giallo con pollo, coniglio, fagioli, peperoni e zafferano.',
                'image' => 'https://www.tavolartegusto.it/wp/wp-content/uploads/2019/08/paella-Ricetta-paella-di-pesce-paella-de-mariscos-.jpg',
                'restaurant_id' => 8,
                'visible' => true
            ],

            [
                'name' => 'Fish and Chips',
                'price' => 11.99,
                'ingredients' => 'filetto di merluzzo, patatine fritte, salsa tartara',
                'description' => 'Un classico piatto britannico con filetto di merluzzo fritto e patatine fritte, servito con salsa tartara.',
                'image' => 'https://www.diariodicucina.it/wp-content/uploads/2020/04/fish-chips-gor-birra-1905.jpg',
                'restaurant_id' => 9,
                'visible' => true
            ],

            [
                'name' => 'Pad Thai',
                'price' => 12.99,
                'ingredients' => 'tagliatelle di riso, gamberetti, uova, tofu, germogli di soia, arachidi',
                'description' => 'Un piatto di noodle tailandesi al wok con gamberetti, uova, tofu, germogli di soia e arachidi.',
                'image' => 'https://media.gettyimages.com/id/1262880166/it/foto/ricetta-thailandese-di-noodles-thai-di-gamberi-appena-saltati-in-padella-su-un-piatto-rotondo.jpg?s=612x612&w=gi&k=20&c=BxAM6K6wFt5z-hbfXF4SiV_Elj8iPVOK8T45vwMJJN0=',
                'restaurant_id' => 10,
                'visible' => true
            ],

            [
                'name' => 'Mille Foglie',
                'price' => 5.99,
                'ingredients' => 'latte, panna, zucchero, vaniglia',
                'description' => 'Un delizioso gelato cremoso alla vaniglia fatto con latte, panna, zucchero e aromatizzato alla vaniglia.',
                'image' => 'https://www.tribugolosa.com/media/1-75_crop.jpg/rh/gelato-alla-vaniglia.jpg',
                'restaurant_id' => 10,
                'visible' => true
            ],

            [
                'name' => 'Moussaka',
                'price' => 13.99,
                'ingredients' => 'melanzane, carne macinata, patate, cipolla, besciamella, formaggio',
                'description' => 'Un piatto greco a base di melanzane, carne macinata, patate, cipolla, besciamella e formaggio gratinato al forno.',
                'image' => 'https://primochef.it/wp-content/uploads/2017/07/SH_moussaka.jpg',
                'restaurant_id' => 9,
                'visible' => true
            ],
            [
                'name' => 'Ceviche',
                'price' => 11.99,
                'ingredients' => 'pesce bianco, succo di limone, cipolla rossa, peperoncino, coriandolo',
                'description' => 'Un piatto latinoamericano a base di pesce bianco crudo marinato nel succo di limone, con cipolla rossa, peperoncino e coriandolo.',
                'image' => 'https://img.freepik.com/premium-photo/delicious-seafood-ceviche-from-peru-with-chili-peppers-chickpeas_127101-192.jpg?w=2000',
                'restaurant_id' => 8,
                'visible' => true
            ],
            [
                'name' => 'Risotto ai Funghi',
                'price' => 14.99,
                'ingredients' => 'riso, funghi,brodo vegetale, cipolla, parmigiano, prezzemolo',
                'description' => 'Un delizioso risotto italiano con funghi, cipolla, brodo vegetale, parmigiano e prezzemolo.',
                'image' => 'https://blog.giallozafferano.it/ricettepanedolci/wp-content/uploads/2020/10/risotto-ai-funghi-1-720x480.jpeg',
                'restaurant_id' => 6,
                'visible' => true
            ],
            [
                'name' => 'Croissant',
                'price' => 2.99,
                'ingredients' => 'farina, burro, lievito, zucchero, uova',
                'description' => 'Un delizioso dolce francese a base di pasta sfoglia croccante e burrosa.',
                'image' => 'https://wips.plug.it/cips/buonissimo.org/cms/2020/03/51721252_s.jpg?w=712&a=c&h=406',
                'restaurant_id' => 5,
                'visible' => true
            ],
            [
                'name' => 'Poke Bowl',
                'price' => 10.99,
                'ingredients' => 'riso, pesce crudo, alghe, verdure fresche, salsa',
                'description' => 'Un piatto hawaiano composto da riso, pesce crudo a cubetti, alghe, verdure fresche e una salsa gustosa.',
                'image' => 'https://www.tavolartegusto.it/wp/wp-content/uploads/2021/07/Poke-bowl-ricetta.jpg',
                'restaurant_id' => 4,
                'visible' => true
            ],
            [
                'name' => 'Schnitzel',
                'price' => 12.99,
                'ingredients' => 'carne di maiale, pan grattato, uova, limone',
                'description' => 'Un piatto austriaco di carne di maiale impanata e fritta, servita con un tocco di limone.',
                'image' => 'https://www.thespruceeats.com/thmb/BS5BdyQsGh5qQyRiuZMannmcxoY=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/SES-wiener-schnitzel-recipe-1447089-hero-02-18827aac4cbd4aec926350d4f9778e70.jpg',
                'restaurant_id' => 3,
                'visible' => true
            ],
            [
                'name' => 'Tiramisù',
                'price' => 7.99,
                'ingredients' => 'savoiardi, mascarpone, caffè, cacao in polvere',
                'description' => 'Un dessert italiano classico fatto con strati di savoiardi inzuppati nel caffè, crema di mascarpone e cacao in polvere.',
                'image' => 'https://www.lemonblossoms.com/wp-content/uploads/2020/06/Chicken-Shawarma-Recipe-S5.jpg',
                'restaurant_id' => 1,
                'visible' => true
            ],

            [
                'name' => 'Chicken Shawarma',
                'price' => 9.99,
                'ingredients' => 'pollo marinato, pane pita, salsa tahini, insalata',
                'description' => 'Un delizioso piatto mediorientale con pollo marinato, cotto su spiedo verticale e servito in un pane pita con salsa tahini e insalata.',
                'image' => 'https://www.lemonblossoms.com/wp-content/uploads/2020/06/Chicken-Shawarma-Recipe-S5.jpg',
                'restaurant_id' => 2,
                'visible' => true
            ],
            [
                'name' => 'Pierogi',
                'price' => 10.99,
                'ingredients' => 'impasto, ripieno di patate, cipolla, panna acida',
                'description' => 'Un piatto polacco di pasta ripiena di patate e cipolla, servita con panna acida.',
                'image' => 'https://hips.hearstapps.com/vidthumb/images/delish-dill-cheddar-pierogis-102821-04-jg-min-1636731147.jpg?crop=1xw:0.8439609902475619xh;center,top&resize=1200:*',
                'restaurant_id' => 8,
                'visible' => true
            ],
            [
                'name' => 'Key Lime Pie',
                'price' => 6.99,
                'ingredients' => 'crosta di biscotti, crema al lime, panna montata',
                'description' => 'Un dolce tradizionale della Florida con una crosta di biscotti, una crema al lime dolce e una guarnizione di panna montata.',
                'image' => 'https://www.livewellbakeoften.com/wp-content/uploads/2021/05/Key-Lime-Pie-NEW-7s.jpg',
                'restaurant_id' => 9,
                'visible' => true
            ]

        ];




        foreach ($dishes as $dish) {
            $newDish = new Dish();
            $newDish->name = $dish['name'];
            $newDish->slug = Str::slug($dish['name'], '-');
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
