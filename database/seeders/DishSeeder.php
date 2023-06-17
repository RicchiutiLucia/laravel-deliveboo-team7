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
                'name' => 'Spaghetti alla carbonara',
                'price' => 7.99,
                'ingredients' => 'uova, guanciale, pepe, pasta',
                'description' => 'La pasta alla carbonara è un piatto caratteristico del Lazio e più in particolare di Roma, preparato con ingredienti popolari e dal gusto intenso. I tipi di pasta tradizionalmente più usati sono gli spaghetti e i rigatoni.',
                'image' => 'https://media.istockphoto.com/id/479271670/it/foto/pasta-alla-carbonara-italiana-tradizionale.jpg?s=612x612&w=0&k=20&c=BMnWAeH5ECUjNddPLgj4TfdcoOHdeV_fpO3xq1P4_fc=',
                'restaurant_id' => 1,
                'visible' => true

            ],

            [
                'name' => 'Rigatoni alla pagliata',
                'price' => 14.99,
                'ingredients' => 'besciamella, formaggio, ragù, pomodoro',
                'description' => 'Uno strato di sfoglia ripiena di ragù di carne, besciamella e parmigiano, cotto al forno.',
                'image' => 'https://www.granarolo.it/system/granarolo_consumer/attachments/data/000/001/606/original/lasagne-alla-bolognese.jpg?1490627827',
                'restaurant_id' => 1,
                'visible' => true
            ],

            [
                'name' => 'Spaghetti alla gricia',
                'price' => 14.99,
                'ingredients' => 'Rigatoni,guanciale, pecorino romano grattugiato finemente Vino bianco',
                'description' => 'La pasta alla gricia, a volte chiamata amatriciana bianca, è un primo piatto tipico della cucina laziale. È preparata con pasta condita con abbondante pecorino romano, pepe nero (ingredienti della pasta cacio e pepe), guanciale.',
                'image' => 'https://www.pastarmando.it/images/ricette/_large/ricetta_rigatoni-pasta-armando_gricia_unastellaincucina.jpg',
                'restaurant_id' => 1,
                'visible' => true
            ],

            [
                'name' => 'Linguine cacio e pepe',
                'price' => 14.99,
                'ingredients' => 'riso, funghi,brodo vegetale, cipolla, parmigiano, prezzemolo',
                'description' => 'Un delizioso risotto italiano con funghi, cipolla, brodo vegetale, parmigiano e prezzemolo.',
                'image' => 'https://blog.giallozafferano.it/ricettepanedolci/wp-content/uploads/2020/10/risotto-ai-funghi-1-720x480.jpeg',
                'restaurant_id' => 1,
                'visible' => true
            ],
            [
                'name' => 'Rigatoni alla pagliata',
                'price' => 14.99,
                'ingredients' => 'riso, funghi,brodo vegetale, cipolla, parmigiano, prezzemolo',
                'description' => 'Un delizioso risotto italiano con funghi, cipolla, brodo vegetale, parmigiano e prezzemolo.',
                'image' => 'https://blog.giallozafferano.it/ricettepanedolci/wp-content/uploads/2020/10/risotto-ai-funghi-1-720x480.jpeg',
                'restaurant_id' => 1,
                'visible' => true
            ],


            [
                'name' => 'Pizza Margherita',
                'price' => 5.99,
                'ingredients' => 'farina, mozzarella, basilico, pomodoro',
                'description' => ' un prodotto gastronomico salato, che consiste in un impasto a base di farina, acqua e lievito, che viene spianato per essere farcito tipicamente con pomodoro e mozzarella o altri ingredienti e poi cotto in un forno a legna.',
                'image' => 'https://img.freepik.com/free-photo/top-view-pepperoni-pizza-with-mushroom-sausages-bell-pepper-olive-corn-black-wooden_141793-2158.jpg?w=2000',
                'restaurant_id' => 2,
                'visible' => true
            ],

            [
                'name' => 'Pizza Marinara',
                'price' => 5.99,
                'ingredients' => 'farina, mozzarella, basilico, pomodoro',
                'description' => 'un prodotto gastronomico salato, che consiste in un impasto a base di farina, acqua e lievito, che viene spianato per essere farcito tipicamente con pomodoro e mozzarella o altri ingredienti e poi cotto in un forno a legna.',
                'image' => 'https://img.freepik.com/free-photo/top-view-pepperoni-pizza-with-mushroom-sausages-bell-pepper-olive-corn-black-wooden_141793-2158.jpg?w=2000',
                'restaurant_id' => 2,
                'visible' => true
            ],

            [
                'name' => 'Pizza Diavola',
                'price' => 5.99,
                'ingredients' => 'farina, mozzarella, basilico, pomodoro',
                'description' => 'un prodotto gastronomico salato, che consiste in un impasto a base di farina, acqua e lievito, che viene spianato per essere farcito tipicamente con pomodoro e mozzarella o altri ingredienti e poi cotto in un forno a legna.',
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
                'name' => 'Pizza Boscaiola',
                'price' => 5.99,
                'ingredients' => 'farina, mozzarella, basilico, pomodoro',
                'description' => 'La pasta alla carbonara è un piatto caratteristico del Lazio e più in particolare di Roma, preparato con ingredienti popolari e dal gusto intenso. I tipi di pasta tradizionalmente più usati sono gli spaghetti e i rigatoni.',
                'image' => 'https://img.freepik.com/free-photo/top-view-pepperoni-pizza-with-mushroom-sausages-bell-pepper-olive-corn-black-wooden_141793-2158.jpg?w=2000',
                'restaurant_id' => 2,
                'visible' => true
            ],

            [
                'name' => 'Classic Burger',
                'price' => 9.99,
                'ingredients' => 'pane, carne di manzo, formaggio, pomodoro, lattuga',
                'description' => 'Un succulento doppio hamburger di manzo con formaggio, lattuga e pomodoro, servito in un morbido panino.',
                'image' => 'https://insanelygoodrecipes.com/wp-content/uploads/2020/10/Hamburger-with-Sesame-Seeds-Cheese-and-Veggies.png',
                'restaurant_id' => 10,
                'visible' => true
            ],


            [
                'name' => 'Double Cheeseburger',
                'price' => 9.99,
                'ingredients' => 'pane, carne di manzo, formaggio, pomodoro, lattuga',
                'description' => 'Un succulento doppio hamburger di manzo con formaggio, lattuga e pomodoro, servito in un morbido panino.',
                'image' => 'https://insanelygoodrecipes.com/wp-content/uploads/2020/10/Hamburger-with-Sesame-Seeds-Cheese-and-Veggies.png',
                'restaurant_id' => 10,
                'visible' => true
            ],

            [
                'name' => 'Chickenburger',
                'price' => 9.99,
                'ingredients' => 'pane, carne di pollo, formaggio, pomodoro, lattuga',
                'description' => 'Un succulento hamburger di pollo con formaggio, lattuga e pomodoro, servito in un morbido panino.',
                'image' => 'https://insanelygoodrecipes.com/wp-content/uploads/2020/10/Hamburger-with-Sesame-Seeds-Cheese-and-Veggies.png',
                'restaurant_id' => 10,
                'visible' => true
            ],

            [
                'name' => 'Veganburger',
                'price' => 9.99,
                'ingredients' => 'pane, burger vegetariano, pomodoro, lattuga',
                'description' => 'Un succulento hamburger vegano, lattuga e pomodoro, servito in un morbido panino.',
                'image' => 'https://insanelygoodrecipes.com/wp-content/uploads/2020/10/Hamburger-with-Sesame-Seeds-Cheese-and-Veggies.png',
                'restaurant_id' => 10,
                'visible' => true
            ],

            [
                'name' => 'XXLburger',
                'price' => 9.99,
                'ingredients' => 'pane, burger vegetariano, pomodoro, lattuga',
                'description' => 'Un enorme doppio hamburger di manzo con formaggio, lattuga e pomodoro, servito in un morbido panino.',
                'image' => 'https://insanelygoodrecipes.com/wp-content/uploads/2020/10/Hamburger-with-Sesame-Seeds-Cheese-and-Veggies.png',
                'restaurant_id' => 10,
                'visible' => true
            ],



            [
                'name' => 'Sushi misto',
                'price' => 18.99,
                'ingredients' => 'salmone crudo, tonno crudo, gamberi',
                'description' => 'Una selezione di sushi tradizionale giapponese con una varietà di pesce crudo fresco.',
                'image' => 'https://media.istockphoto.com/id/1053854126/it/foto/tutto-quello-che-puoi-mangiare-sushi.jpg?s=612x612&w=0&k=20&c=Qt7OYJ9eVf3t68K7NAO4BwVz69WLGp-0hfi5JyWuhsY=',
                'restaurant_id' => 4,
                'visible' => true
            ],

            [
                'name' => 'Salmone karokke',
                'price' => 10.99,
                'ingredients' => 'salmone crudo',
                'description' => 'Una selezione di sushi tradizionale giapponese con una varietà di pesce crudo fresco.',
                'image' => 'https://media.istockphoto.com/id/1053854126/it/foto/tutto-quello-che-puoi-mangiare-sushi.jpg?s=612x612&w=0&k=20&c=Qt7OYJ9eVf3t68K7NAO4BwVz69WLGp-0hfi5JyWuhsY=',
                'restaurant_id' => 4,
                'visible' => true
            ],

            [
                'name' => 'Uramaki di tonno speziato',
                'price' => 19.99,
                'ingredients' => 'tonno, riso, spezie',
                'description' => 'Una selezione di sushi tradizionale giapponese con una varietà di pesce crudo fresco.',
                'image' => 'https://media.istockphoto.com/id/1053854126/it/foto/tutto-quello-che-puoi-mangiare-sushi.jpg?s=612x612&w=0&k=20&c=Qt7OYJ9eVf3t68K7NAO4BwVz69WLGp-0hfi5JyWuhsY=',
                'restaurant_id' => 4,
                'visible' => true
            ],

            [
                'name' => 'Temaki',
                'price' => 19.99,
                'ingredients' => 'tonno, riso, spezie',
                'description' => 'Una selezione di sushi tradizionale giapponese con una varietà di pesce crudo fresco.',
                'image' => 'https://media.istockphoto.com/id/1053854126/it/foto/tutto-quello-che-puoi-mangiare-sushi.jpg?s=612x612&w=0&k=20&c=Qt7OYJ9eVf3t68K7NAO4BwVz69WLGp-0hfi5JyWuhsY=',
                'restaurant_id' => 4,
                'visible' => true
            ],

            [
                'name' => 'Ravioli di carne',
                'price' => 19.99,
                'ingredients' => 'ravioli ripieni',
                'description' => 'Ravioli cotti al vapore al ripieno di carne e verdure',
                'image' => 'https://media.istockphoto.com/id/1053854126/it/foto/tutto-quello-che-puoi-mangiare-sushi.jpg?s=612x612&w=0&k=20&c=Qt7OYJ9eVf3t68K7NAO4BwVz69WLGp-0hfi5JyWuhsY=',
                'restaurant_id' => 4,
                'visible' => true
            ],


            [
                'name' => 'Tiramisù',
                'price' => 7.99,
                'ingredients' => 'mascartpone, savoiardi, caffè, uova, zucchero, cacao',
                'description' => 'Il tiramisù è un dolce e prodotto agroalimentare tradizionale diffuso in tutto il territorio italiano, le cui origini sono dibattute e attribuite soprattutto al Veneto e al Friuli-Venezia Giulia. È un dessert al cucchiaio a base di savoiardi (oppure altri biscotti di consistenza friabile) inzuppati nel caffè e ricoperti di una crema, composta di mascarpone, uova e zucchero.',
                'image' => 'https://www.melarossa.it/wp-content/uploads/2019/08/tiramis%C3%B9-storia-ricette.jpg?x86076',
                'restaurant_id' => 9,
                'visible' => true

            ],
            [
                'name' => 'Croissant',
                'price' => 1.99,
                'ingredients' => 'farina, acqua, lievito di birra, sale, panna fresca, zucchero, burro',
                'description' => 'particolare tipo di viennoiseries con una preparazione simile alla pasta sfoglia che viene tagliata in triangoli, arrotolati e piegati a forma di mezzaluna, fatti lievitare e cotti in forno.',
                'image' => 'https://www.cuocicuoci.com/wp-content/uploads/2022/09/speciale-croissant-croissant-francese.jpg',
                'restaurant_id' => 9,
                'visible' => true

            ],
            [
                'name' => 'Key lime pie',
                'price' => 8.99,
                'ingredients' => 'biscotti, zucchero, burro, succo di limone, uova, latte, scorza di limone, panna, zucchero',
                'description' => 'dolce tradizionale della Florida con una crosta di biscotti, una crema al lime dolce e una guarnizione di panna montata',
                'image' => 'https://www.allrecipes.com/thmb/1aP8lFhJJXky1qjk5fbMTzVAjtU=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/12698-Easy-Key-Lime-Pie-ddmfs-103444-4x3-1-eb1a59500e384b2b8939094ce18d08be.jpg',
                'restaurant_id' => 9,
                'visible' => true

            ],
            [
                'name' => 'Torta di mele',
                'price' => 7.99,
                'ingredients' => 'mele, farina, latte, limoni, cannella, zucchero, burro, uova, lievito, sale',
                'description' => "torta dalla morbida consistenza dall' inconfondibile profumo.",
                'image' => 'https://www.diversamentelatte.it/wp-content/uploads/2023/03/diversamentelatte_torta-invisibile-alle-mele.jpg',
                'restaurant_id' => 9,
                'visible' => true

            ],

            [
                'name' => 'Millefoglie',
                'price' => 7.99,
                'ingredients' => 'pasta sfoglia, zucchero, farina, sale, latte, acqua, uova, panna, vaniglia',
                'description' => 'dolce tipico della pasticceria francese; composta da tre strati di Pasta sfoglia che si alternano a due strati di Crema pasticcera.',
                'image' => 'https://cdn.ilclubdellericette.it/wp-content/uploads/2016/04/millefoglie-crema-diplomatica-gocce-cioccolato-fragole-1280x720.jpg',
                'restaurant_id' => 9,
                'visible' => true

            ],

            [
                'name' => 'NACHOS CON GUACAMOLE',
                'price' => 9.99,
                'ingredients' => 'nachos di mais, formaggio fuso, chili con carne, sour cream',
                'description' => 'Triangolini di mais croccanti con formaggio fuso, chili con carne e sour cream',
                'image' => 'https://www.topgastronomico.es/wp-content/uploads/2023/01/AdobeStock_477634180-scaled.jpeg',
                'restaurant_id' => 3,
                'visible' => true
            ],
            [
                'name' => 'TACOS DE CARNITAS',
                'price' => 4.99,
                'ingredients' => 'cipolla. carne di maiale, salsa verde, guacamole',
                'description' => 'Maiale sfilacciato saltalo con cipolla e coriandolo, servito con salsa verde e guacamole',
                'image' => 'https://www.atablefullofjoy.com/wp-content/uploads/2018/09/Carnitas-Tacos-Recipe-featured-9.jpg',
                'restaurant_id' => 3,
                'visible' => true
            ],
            [
                'name' => 'FAJITAS DE POLLO',
                'price' => 15.99,
                'ingredients' => 'formaggio grattugiato, lattuga, tortillas, petto di pollo, peperoni',
                'description' => 'Strisce di petto di pollo saltate con peperoni, cipolla e spezie, servite con riso rosso piccante, formaggio grattugiato, sour cream, lattuga e tortillas',
                'image' => 'https://tacos10.com/wp-content/uploads/2019/01/fajitas-de-pollo.jpg',
                'restaurant_id' => 3,
                'visible' => true
            ],
            [
                'name' => 'BURRITO VEGETARIANO',
                'price' => 12.99,
                'ingredients' => 'cipolla, tortilla, salsa piccante, peperoni',
                'description' => 'Tortilla di farina farcita con fagioli, formaggio fuso, peperoni, cipolla, servito con riso, pico de gallo e salsa piccante',
                'image' => 'https://www.donnad.it/sites/default/files/styles/r_visual_d/public/201819/kebab-vegetariano.jpg?itok=OzLA_V-F',
                'restaurant_id' => 3,
                'visible' => true
            ],
            [
                'name' => 'TOSTADAS DE CHORIZO',
                'price' => 12.99,
                'ingredients' => 'fagioli, lattuga, formaggio grattugiato, trotillas',
                'description' => 'Due tortillas croccanti con salsiccia speziata, fagioli, lattuga, sour cream e formaggio grattugiato',
                'image' => 'https://3.bp.blogspot.com/-ygmlrdOSfCw/VUFYOZjBmxI/AAAAAAAAGmc/ZLZ-PYtgbmM/s1600/DSC02448.JPG',
                'restaurant_id' => 3,
                'visible' => true
            ],

            [
                'name' => 'BUCKET TENDER CRISPY',
                'price' => 6.99,
                'ingredients' => 'filetto di pollo',
                'description' => 'Un Bucket con 10 deliziosi Tender Crispy e due salse a scelta, pensato per 2 persone.',
                'image' => 'https://media.kfc.it/app/uploads/public/625/6c0/e1c/thumb_450_800_800_0_0_crop.png',
                'restaurant_id' => 8,
                'visible' => true
            ],
            [
                'name' => 'POP CORN CHICKEN',
                'price' => 4.99,
                'ingredients' => 'Pepite di pollo preimpanate, farina di grano fortificata, olio di colza, sale, amido di riso',
                'description' => 'Teneri snack di pollo disponibili in porzione media o grande, sono perfetti come spuntino o come extra ',
                'image' => 'https://media.kfc.it/app/uploads/public/5f1/6f1/050/thumb_358_800_800_0_0_crop.jpg',
                'restaurant_id' => 8,
                'visible' => true
            ],
            [
                'name' => 'COB ORIGINAL RECIPE',
                'price' => 6.99,
                'ingredients' => 'Pezzi di pollo, farina di grano, miscela di spezie per impanatura, olio di semi di girasole',
                'description' => 'Il gusto irresistibile dei COB Original Recipe, ovvero pezzi di pollo con osso - in inglese Chicken On the Bones - è garantito dal mix segreto di 11 erbe e spezie della ricetta originale del Colonnello Sanders.',
                'image' => 'https://media.kfc.it/app/uploads/public/5ec/fc1/e45/thumb_278_800_800_0_0_crop.jpg',
                'restaurant_id' => 8,
                'visible' => true
            ],
            [
                'name' => 'CHEESE SHOTS',
                'price' => 5.99,
                'ingredients' => 'Formaggio fuso, farina (frumento, riso) olio vegetale, acqua, patate e patate disidratate, preparazione a base di panna',
                'description' => 'Croccanti nella panatura e teneri, i Cheese Shots sono perfetti da condividere con gli amici come aperitivo o come irresistibile contorno alternativo del tuo Bucket o del tuo menù',
                'image' => 'https://media.kfc.it/app/uploads/public/63e/e0c/355/thumb_477_800_800_0_0_crop.png',
                'restaurant_id' => 8,
                'visible' => true
            ],
            [
                'name' => "COLONEL'S BURGER",
                'price' => 7.99,
                'ingredients' => 'Bacon, formaggio, insalata, salsa barbecue, maionese',
                'description' => 'Il Colonnello ha speso tutta la vita a ripetere gli stessi gesti con maniacale perfezione, facendo della cura dei dettagli uno stile di vita, e questo è il panino che porta il suo nome.',
                'image' => 'https://media.kfc.it/app/uploads/public/642/ff0/fe4/thumb_483_800_800_0_0_crop.png',
                'restaurant_id' => 8,
                'visible' => true
            ],

            [
                'name' => 'filetto di rombo al pepe verde',
                'price' => 20.99,
                'ingredients' => 'rombo fresco, olive, pomodorino, pepe verde, vino bianco',
                'description' => 'piatto dal sapore delicato con ingredienti selezionati',
                'image' => 'https://ristorantefigaro.it/wp-content/uploads/2022/07/WhatsApp-Image-2021-06-07-at-13.09.10-e1623064390229.jpeg',
                'restaurant_id' => 7,
                'visible' => true

            ],
            [
                'name' => 'filetto di branzino scottato su letto di asparagi',
                'price' => 18.99,
                'ingredients' => 'branzino, asparagi, olio extravergine di oliva',
                'description' => 'piatto delicato che abbiana il sapore del mare e della terra',
                'image' => 'https://armoniapaleo.it/media/k2/items/cache/09dad4a644cf4e7edd2e0dd7a337d51f_XL.jpg',
                'restaurant_id' => 7,
                'visible' => true

            ],
            [
                'name' => 'gamberoni in crosta di pistacchi',
                'price' => 14.99,
                'ingredients' => 'gamberoni, pistacchi',
                'description' => "un'esplosione di sapori al palato con una consistenza croccante",
                'image' => 'https://blog.giallozafferano.it/noneunacasapermagri/wp-content/uploads/2015/04/Gamberoni-in-crosta-di-pistacchi.jpg',
                'restaurant_id' => 7,
                'visible' => true

            ],
            [
                'name' => 'frittura mista di mare',
                'price' => 18.99,
                'ingredients' => 'gamberi, totani, seppie, farina',
                'description' => 'la classica frittura di mare da gustore quando vuoi e con chi vuoi',
                'image' => 'https://images.fidhouse.com/fidelitynews/wp-content/uploads/sites/6/2015/01/Fritto-misto-di-pesce-80838-2.jpg',
                'restaurant_id' => 7,
                'visible' => true

            ],
            [
                'name' => 'ceviche',
                'price' => 11.99,
                'ingredients' => 'pesce bianco, succo di limone, cipolla rossa, peperoncino, coriandolo',
                'description' => 'Un piatto latinoamericano a base di pesce bianco crudo marinato nel succo di limone, con cipolla rossa, peperoncino e coriandolo.',
                'image' => 'https://img.freepik.com/premium-photo/delicious-seafood-ceviche-from-peru-with-chili-peppers-chickpeas_127101-192.jpg?w=2000',
                'restaurant_id' => 7,
                'visible' => true

            ],



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
