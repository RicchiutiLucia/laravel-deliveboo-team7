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
                'image' => 'cover/carbonara.jpg',
                'restaurant_id' => 1,
                'visible' => true

            ],

            [
                'name' => 'Rigatoni con la pajata',
                'price' => 14.99,
                'ingredients' => 'besciamella, formaggio, ragù, pomodoro',
                'description' => 'Uno strato di sfoglia ripiena di ragù di carne, besciamella e parmigiano, cotto al forno.',
                'image' => 'cover/pajata.jpg',
                'restaurant_id' => 1,
                'visible' => true
            ],

            [
                'name' => 'Pasta alla gricia',
                'price' => 14.99,
                'ingredients' => 'Rigatoni,guanciale, pecorino romano grattugiato finemente Vino bianco',
                'description' => 'La pasta alla gricia, a volte chiamata amatriciana bianca, è un primo piatto tipico della cucina laziale. È preparata con pasta condita con abbondante pecorino romano, pepe nero (ingredienti della pasta cacio e pepe), guanciale.',
                'image' => 'cover/pasta-gricia.jpg',
                'restaurant_id' => 1,
                'visible' => true
            ],

            [
                'name' => 'Linguine cacio e pepe',
                'price' => 14.99,
                'ingredients' => 'riso, funghi,brodo vegetale, cipolla, parmigiano, prezzemolo',
                'description' => "Primo tradizionale che a ogni forchettata, che siano tonnarelli, mezze maniche o spaghetti, riesce a trasmettere tutta la genuinità delle sue origini, portando a un'esperienza enogastronomica in grado di soddisfare tutti i sensi.",
                'image' => 'cover/cacio-pepe.jpeg',
                'restaurant_id' => 1,
                'visible' => true
            ],

            [
                'name' => 'Bucatini alla amatriciana',
                'price' => 14.99,
                'ingredients' => 'pomodoro, guanciale, pasta',
                'description' => "I bucatini all'Amatriciana sono uno dei piatti popolari e tradizionali romani più noti in Italia e nel mondo. Il nome deriverebbe dalla città di Amatrice e l'Umbria.",
                'image' => 'cover/amatriciana.jpg',
                'restaurant_id' => 1,
                'visible' => true
            ],

            [
                'name' => 'Chicken Tikka Masala',
                'price' => 14.99,
                'ingredients' => 'Pollo speziato ',
                'description' => "Molto simile al pollo tikka, ma a differenza di quest'ultimo i pezzi di pollo vengono serviti assieme ad una salsa a base di masala (testualmente mistura di spezie), ovvero il curry indiano",
                'image' => 'cover/pollo-speziato.jpeg',
                'restaurant_id' => 2,
                'visible' => true
            ],

            [
                'name' => 'Butter chicken',
                'price' => 14.99,
                'ingredients' => ' burro chiarificato o olio vegetale, cipolla, sbucciata e affettato patate, strofinate e tagliate a pezzi',
                'description' => 'Un delizioso risotto italiano con funghi, cipolla, brodo vegetale, parmigiano e prezzemolo.',
                'image' => 'cover/pollo-indiano.jpg',
                'restaurant_id' => 2,
                'visible' => true
            ],

            [
                'name' => 'Saag aloo',
                'price' => 14.99,
                'ingredients' => 'Pollo speziato',
                'description' => 'Sag aloo è un classico piatto indiano che è molto semplice da preparare ed è l’accompagnamento perfetto per accompagnare un piatto pieno di curry piccante e una grande fetta di pane Naan appena fatto.',
                'image' => 'cover/pollo.jpg',
                'restaurant_id' => 2,
                'visible' => true
            ],

            [
                'name' => 'Rogan josh lamb',
                'price' => 14.99,
                'ingredients' => 'Agnello, yougurt greco, cipolla, Ghi, limone, aglio ',
                'description' => 'piatto tipico del Kashmir, uno dei più colorati e gustosi di questa regione remota',
                'image' => 'cover/lamb-rogan-josh.jpg',
                'restaurant_id' => 2,
                'visible' => true
            ],






            [
                'name' => 'Pizza Margherita',
                'price' => 5.99,
                'ingredients' => 'farina, mozzarella, basilico, pomodoro',
                'description' => ' un prodotto gastronomico salato, che consiste in un impasto a base di farina, acqua e lievito, che viene spianato per essere farcito tipicamente con pomodoro e mozzarella o altri ingredienti e poi cotto in un forno a legna.',
                'image' => 'cover/pizza-margherita.jpg',
                'restaurant_id' => 5,
                'visible' => true
            ],

            [
                'name' => 'Pizza Marinara',
                'price' => 5.99,
                'ingredients' => 'farina, mozzarella, basilico, pomodoro',
                'description' => 'un prodotto gastronomico salato, che consiste in un impasto a base di farina, acqua e lievito, che viene spianato per essere farcito tipicamente con pomodoro e mozzarella o altri ingredienti e poi cotto in un forno a legna.',
                'image' => 'cover/pizza-marina.jpg',
                'restaurant_id' => 5,
                'visible' => true
            ],

            [
                'name' => 'Pizza Diavola',
                'price' => 5.99,
                'ingredients' => 'farina, mozzarella, basilico, pomodoro',
                'description' => 'un prodotto gastronomico salato, che consiste in un impasto a base di farina, acqua e lievito, che viene spianato per essere farcito tipicamente con pomodoro e mozzarella o altri ingredienti e poi cotto in un forno a legna.',
                'image' => 'cover/pizza-diavola.jpg',
                'restaurant_id' => 5,
                'visible' => true
            ],

            [
                'name' => 'Pizza 4 stagioni',
                'price' => 5.99,
                'ingredients' => 'farina, mozzarella, basilico, pomodoro',
                'description' => 'La pasta alla carbonara è un piatto caratteristico del Lazio e più in particolare di Roma, preparato con ingredienti popolari e dal gusto intenso. I tipi di pasta tradizionalmente più usati sono gli spaghetti e i rigatoni.',
                'image' => 'cover/pizza-quattro-stagioni.jpg',
                'restaurant_id' => 5,
                'visible' => true
            ],

            [
                'name' => 'Pizza Boscaiola',
                'price' => 5.99,
                'ingredients' => 'farina, mozzarella, basilico, pomodoro',
                'description' => 'La pasta alla carbonara è un piatto caratteristico del Lazio e più in particolare di Roma, preparato con ingredienti popolari e dal gusto intenso. I tipi di pasta tradizionalmente più usati sono gli spaghetti e i rigatoni.',
                'image' => 'cover/pizza-boscaiola.jpg',
                'restaurant_id' => 5,
                'visible' => true
            ],

            [
                'name' => 'Classic Burger',
                'price' => 9.99,
                'ingredients' => 'pane, carne di manzo, formaggio, pomodoro, lattuga',
                'description' => 'Un succulento doppio hamburger di manzo con formaggio, lattuga e pomodoro, servito in un morbido panino.',
                'image' => 'cover/hamburger.png',
                'restaurant_id' => 10,
                'visible' => true
            ],


            [
                'name' => 'Double Cheeseburger',
                'price' => 9.99,
                'ingredients' => 'pane, carne di manzo, formaggio, pomodoro, lattuga',
                'description' => 'Un succulento doppio hamburger di manzo con formaggio, lattuga e pomodoro, servito in un morbido panino.',
                'image' => 'cover/double-cheeseburger.jpg',
                'restaurant_id' => 10,
                'visible' => true
            ],

            [
                'name' => 'Chickenburger',
                'price' => 9.99,
                'ingredients' => 'pane, carne di pollo, formaggio, pomodoro, lattuga',
                'description' => 'Un succulento hamburger di pollo con formaggio, lattuga e pomodoro, servito in un morbido panino.',
                'image' => 'cover/colonels-burger.png',
                'restaurant_id' => 10,
                'visible' => true
            ],

            [
                'name' => 'Veganburger',
                'price' => 9.99,
                'ingredients' => 'pane, burger vegetariano, pomodoro, lattuga',
                'description' => 'Un succulento hamburger vegano, lattuga e pomodoro, servito in un morbido panino.',
                'image' => 'cover/burger-vegetali.jpg',
                'restaurant_id' => 10,
                'visible' => true
            ],

            [
                'name' => 'XXLburger',
                'price' => 9.99,
                'ingredients' => 'pane, burger vegetariano, pomodoro, lattuga',
                'description' => 'Un enorme doppio hamburger di manzo con formaggio, lattuga e pomodoro, servito in un morbido panino.',
                'image' => 'cover/xxl-hamburger.jpg',
                'restaurant_id' => 10,
                'visible' => true
            ],



            [
                'name' => 'Sushi misto',
                'price' => 18.99,
                'ingredients' => 'salmone crudo, tonno crudo, gamberi',
                'description' => 'Una selezione di sushi tradizionale giapponese con una varietà di pesce crudo fresco.',
                'image' => 'cover/sushi.jpg',
                'restaurant_id' => 4,
                'visible' => true
            ],

            [
                'name' => 'Salmone korokke',
                'price' => 10.99,
                'ingredients' => 'salmone crudo',
                'description' => 'Una selezione di sushi tradizionale giapponese con una varietà di pesce crudo fresco.',
                'image' => 'cover/korokke-salmon.jpg',
                'restaurant_id' => 4,
                'visible' => true
            ],

            [
                'name' => 'Uramaki di tonno speziato',
                'price' => 19.99,
                'ingredients' => 'tonno, riso, spezie',
                'description' => 'Una selezione di sushi tradizionale giapponese con una varietà di pesce crudo fresco.',
                'image' => 'cover/uramaki-tonno-caviale.jpg',
                'restaurant_id' => 4,
                'visible' => true
            ],

            [
                'name' => 'Temaki',
                'price' => 19.99,
                'ingredients' => 'tonno, riso, spezie',
                'description' => 'Una selezione di sushi tradizionale giapponese con una varietà di pesce crudo fresco.',
                'image' => 'cover/temaki.jpg',
                'restaurant_id' => 4,
                'visible' => true
            ],

            [
                'name' => 'Ravioli di carne',
                'price' => 19.99,
                'ingredients' => 'ravioli ripieni',
                'description' => 'Ravioli cotti al vapore al ripieno di carne e verdure',
                'image' => 'cover/ravioli.jpg',
                'restaurant_id' => 4,
                'visible' => true
            ],


            [
                'name' => 'Tiramisù',
                'price' => 7.99,
                'ingredients' => 'mascartpone, savoiardi, caffè, uova, zucchero, cacao',
                'description' => 'Il tiramisù è un dolce e prodotto agroalimentare tradizionale diffuso in tutto il territorio italiano.',
                'image' => 'cover/tiramisu.jpg',
                'restaurant_id' => 9,
                'visible' => true

            ],
            [
                'name' => 'Croissant',
                'price' => 1.99,
                'ingredients' => 'farina, acqua, lievito di birra, sale, panna fresca, zucchero, burro',
                'description' => 'particolare tipo di viennoiseries con una preparazione simile alla pasta sfoglia che viene tagliata in triangoli, arrotolati e piegati a forma di mezzaluna, fatti lievitare e cotti in forno.',
                'image' => 'cover/croissant.jpg',
                'restaurant_id' => 9,
                'visible' => true

            ],
            [
                'name' => 'Key lime pie',
                'price' => 8.99,
                'ingredients' => 'biscotti, zucchero, burro, succo di limone, uova, latte, scorza di limone, panna, zucchero',
                'description' => 'dolce tradizionale della Florida con una crosta di biscotti, una crema al lime dolce e una guarnizione di panna montata',
                'image' => 'cover/kei-lime.jpg',
                'restaurant_id' => 9,
                'visible' => true

            ],
            [
                'name' => 'Torta di mele',
                'price' => 7.99,
                'ingredients' => 'mele, farina, latte, limoni, cannella, zucchero, burro, uova, lievito, sale',
                'description' => "torta dalla morbida consistenza dall' inconfondibile profumo.",
                'image' => 'cover/torta-mele.jpg',
                'restaurant_id' => 9,
                'visible' => true

            ],

            [
                'name' => 'Millefoglie',
                'price' => 7.99,
                'ingredients' => 'pasta sfoglia, zucchero, farina, sale, latte, acqua, uova, panna, vaniglia',
                'description' => 'dolce tipico della pasticceria francese; composta da tre strati di Pasta sfoglia che si alternano a due strati di Crema pasticcera.',
                'image' => 'cover/millefoglie.jpg',
                'restaurant_id' => 9,
                'visible' => true

            ],

            [
                'name' => 'NACHOS CON GUACAMOLE',
                'price' => 9.99,
                'ingredients' => 'nachos di mais, formaggio fuso, chili con carne, sour cream',
                'description' => 'Triangolini di mais croccanti con formaggio fuso, chili con carne e sour cream',
                'image' => 'cover/guacamole.jpeg',
                'restaurant_id' => 3,
                'visible' => true
            ],
            [
                'name' => 'TACOS DE CARNITAS',
                'price' => 4.99,
                'ingredients' => 'cipolla. carne di maiale, salsa verde, guacamole',
                'description' => 'Maiale sfilacciato saltalo con cipolla e coriandolo, servito con salsa verde e guacamole',
                'image' => 'cover/tacos.jpg',
                'restaurant_id' => 3,
                'visible' => true
            ],
            [
                'name' => 'FAJITAS DE POLLO',
                'price' => 15.99,
                'ingredients' => 'formaggio grattugiato, lattuga, tortillas, petto di pollo, peperoni',
                'description' => 'Strisce di petto di pollo saltate con peperoni, cipolla e spezie, servite con riso rosso piccante, formaggio grattugiato, sour cream, lattuga e tortillas',
                'image' => 'cover/fajitas-de-pollo.jpg',
                'restaurant_id' => 3,
                'visible' => true
            ],
            [
                'name' => 'BURRITO VEGETARIANO',
                'price' => 12.99,
                'ingredients' => 'cipolla, tortilla, salsa piccante, peperoni',
                'description' => 'Tortilla di farina farcita con fagioli, formaggio fuso, peperoni, cipolla, servito con riso, pico de gallo e salsa piccante',
                'image' => 'cover/kebab.jpg',
                'restaurant_id' => 3,
                'visible' => true
            ],
            [
                'name' => 'Tostadas de chorizo',
                'price' => 12.99,
                'ingredients' => 'fagioli, lattuga, formaggio grattugiato, trotillas',
                'description' => 'Due tortillas croccanti con salsiccia speziata, fagioli, lattuga, sour cream e formaggio grattugiato',
                'image' => 'cover.tortadas.JPG',
                'restaurant_id' => 3,
                'visible' => true
            ],

            [
                'name' => 'BUCKET TENDER CRISPY',
                'price' => 6.99,
                'ingredients' => 'filetto di pollo',
                'description' => 'Un Bucket con 10 deliziosi Tender Crispy e due salse a scelta, pensato per 2 persone.',
                'image' => 'cover/BUCKET-TENDER-CRISPY.png',
                'restaurant_id' => 8,
                'visible' => true
            ],
            [
                'name' => 'POP CORN CHICKEN',
                'price' => 4.99,
                'ingredients' => 'Pepite di pollo preimpanate, farina di grano fortificata, olio di colza, sale, amido di riso',
                'description' => 'Teneri snack di pollo disponibili in porzione media o grande, sono perfetti come spuntino o come extra ',
                'image' => 'cover/pop-corn-chicken.jpg',
                'restaurant_id' => 8,
                'visible' => true
            ],
            [
                'name' => 'COB ORIGINAL RECIPE',
                'price' => 6.99,
                'ingredients' => 'Pezzi di pollo, farina di grano, miscela di spezie per impanatura, olio di semi di girasole',
                'description' => 'Il gusto irresistibile dei COB Original Recipe, ovvero pezzi di pollo con osso - in inglese Chicken On the Bones - è garantito dal mix segreto di 11 erbe e spezie della ricetta originale del Colonnello Sanders.',
                'image' => 'cover/cob-original-recipe-cosce-pollo.jpg',
                'restaurant_id' => 8,
                'visible' => true
            ],
            [
                'name' => 'CHEESE SHOTS',
                'price' => 5.99,
                'ingredients' => 'Formaggio fuso, farina (frumento, riso) olio vegetale, acqua, patate e patate disidratate, preparazione a base di panna',
                'description' => 'Croccanti nella panatura e teneri, i Cheese Shots sono perfetti da condividere con gli amici come aperitivo o come irresistibile contorno alternativo del tuo Bucket o del tuo menù',
                'image' => 'cover/cheese-shots.png',
                'restaurant_id' => 8,
                'visible' => true
            ],
            [
                'name' => "COLONEL'S BURGER",
                'price' => 7.99,
                'ingredients' => 'Bacon, formaggio, insalata, salsa barbecue, maionese',
                'description' => 'Il Colonnello ha speso tutta la vita a ripetere gli stessi gesti con maniacale perfezione, facendo della cura dei dettagli uno stile di vita, e questo è il panino che porta il suo nome.',
                'image' => 'cover/colonels-burger.png',
                'restaurant_id' => 8,
                'visible' => true
            ],

            [
                'name' => 'filetto di rombo al pepe verde',
                'price' => 20.99,
                'ingredients' => 'rombo fresco, olive, pomodorino, pepe verde, vino bianco',
                'description' => 'piatto dal sapore delicato con ingredienti selezionati',
                'image' => 'cover/pesce-al-pepe-verde.jpeg',
                'restaurant_id' => 7,
                'visible' => true

            ],
            [
                'name' => 'filetto di branzino scottato su letto di asparagi',
                'price' => 18.99,
                'ingredients' => 'branzino, asparagi, olio extravergine di oliva',
                'description' => 'piatto delicato che abbiana il sapore del mare e della terra',
                'image' => 'cover/filetto-branzino.jpg',
                'restaurant_id' => 7,
                'visible' => true

            ],
            [
                'name' => 'gamberoni in crosta di pistacchi',
                'price' => 14.99,
                'ingredients' => 'gamberoni, pistacchi',
                'description' => "un'esplosione di sapori al palato con una consistenza croccante",
                'image' => 'cover/gamberoni.jpg',
                'restaurant_id' => 7,
                'visible' => true

            ],
            [
                'name' => 'frittura mista di mare',
                'price' => 18.99,
                'ingredients' => 'gamberi, totani, seppie, farina',
                'description' => 'la classica frittura di mare da gustore quando vuoi e con chi vuoi',
                'image' => 'cover/paranza.jpg',
                'restaurant_id' => 7,
                'visible' => true

            ],
            [
                'name' => 'ceviche',
                'price' => 11.99,
                'ingredients' => 'pesce bianco, succo di limone, cipolla rossa, peperoncino, coriandolo',
                'description' => 'Un piatto latinoamericano a base di pesce bianco crudo marinato nel succo di limone, con cipolla rossa, peperoncino e coriandolo.',
                'image' => 'cover/ceviche-peruviano.jpg',
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
