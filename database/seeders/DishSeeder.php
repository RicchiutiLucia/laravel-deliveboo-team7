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
                'name' => 'Nachos Con Guacamole',
                'price' => 9.99,
                'ingredients' => 'nachos di mais, formaggio fuso, chili con carne, sour cream',
                'description' => 'Triangolini di mais croccanti con formaggio fuso, chili con carne e sour cream',
                'image' => 'cover/guacamole.jpeg',
                'restaurant_id' => 3,
                'visible' => true
            ],
            [
                'name' => 'Tacos De Carnitas',
                'price' => 4.99,
                'ingredients' => 'cipolla. carne di maiale, salsa verde, guacamole',
                'description' => 'Maiale sfilacciato saltalo con cipolla e coriandolo, servito con salsa verde e guacamole',
                'image' => 'cover/tacos.jpg',
                'restaurant_id' => 3,
                'visible' => true
            ],
            [
                'name' => 'Fajitas de Pollo',
                'price' => 15.99,
                'ingredients' => 'formaggio grattugiato, lattuga, tortillas, petto di pollo, peperoni',
                'description' => 'Strisce di petto di pollo saltate con peperoni, cipolla e spezie, servite con riso rosso piccante, formaggio grattugiato, sour cream, lattuga e tortillas',
                'image' => 'cover/fajitas-de-pollo.jpg',
                'restaurant_id' => 3,
                'visible' => true
            ],
            [
                'name' => 'Burrito vegetariano',
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
                'name' => 'Chicken Grilled',
                'price' => 6.99,
                'ingredients' => 'pollo, cheddar,insalata, sale, pepe',
                'description' => 'L’eccezione che conferma la regola: il nostro pollo è irresistibile anche grigliato! ',
                'image' => 'cover/CHICKEN-GRILLED.png',
                'restaurant_id' => 8,
                'visible' => true
            ],
            [
                'name' => "Colonel's burger",
                'price' => 9.99,
                'ingredients' => 'Bacon, formaggio, insalata, salsa barbecue, maionese',
                'description' => 'Il Colonnello ha speso tutta la vita a ripetere gli stessi gesti con maniacale perfezione, facendo della cura dei dettagli uno stile di vita, e questo è il panino che porta il suo nome.',
                'image' => 'cover/colonels-burger.png',
                'restaurant_id' => 8,
                'visible' => true
            ],
            [
                'name' => "Zinger",
                'price' => 12.99,
                'ingredients' => 'pollo, formaggio, insalata, maionese,cheddar',
                'description' => 'Delizioso filetto di pollo con panatura Hot & Spicy, lattuga, cheddar cheese e doppio strato di maionese, in un morbido panino al sesamo.',
                'image' => 'cover/zinger.jpg',
                'restaurant_id' => 8,
                'visible' => true
            ],
            [
                'name' => "Double Krunch",
                'price' => 13.99,
                'ingredients' => 'pollo,cheddar, formaggio, insalata, salsa al pepe nero',
                'description' => 'La morbida croccantezza raddoppia con 2 Tender Crispy! Pane con semi di sesamo, due Tender Crispy, insalata, cheddar e salsa al pepe nero. ',
                'image' => 'cover/DOUBLE-KRUNCH.jpg',
                'restaurant_id' => 8,
                'visible' => true
            ],
            [
                'name' => 'Bucket Tender Crispy',
                'price' => 6.99,
                'ingredients' => 'filetto di pollo',
                'description' => 'Un Bucket con 10 deliziosi Tender Crispy e due salse a scelta, pensato per 2 persone.',
                'image' => 'cover/BUCKET-TENDER-CRISPY.png',
                'restaurant_id' => 8,
                'visible' => true
            ],
            [
                'name' => 'Pop Corn Chicken',
                'price' => 4.99,
                'ingredients' => 'Pepite di pollo preimpanate, farina di grano fortificata, olio di colza, sale, amido di riso',
                'description' => 'Teneri snack di pollo disponibili in porzione media o grande, sono perfetti come spuntino o come extra ',
                'image' => 'cover/pop-corn-chicken.jpg',
                'restaurant_id' => 8,
                'visible' => true
            ],
            [
                'name' => 'Cob Original Recipe',
                'price' => 6.99,
                'ingredients' => 'Pezzi di pollo, farina di grano, miscela di spezie per impanatura, olio di semi di girasole',
                'description' => 'Il gusto irresistibile dei COB Original Recipe, ovvero pezzi di pollo con osso - in inglese Chicken On the Bones - è garantito dal mix segreto di 11 erbe e spezie della ricetta originale del Colonnello Sanders.',
                'image' => 'cover/cob-original-recipe-cosce-pollo.jpg',
                'restaurant_id' => 8,
                'visible' => true
            ],
            [
                'name' => 'Cheese Shots',
                'price' => 5.99,
                'ingredients' => 'Formaggio fuso, farina (frumento, riso) olio vegetale, acqua, patate e patate disidratate, preparazione a base di panna',
                'description' => 'Croccanti nella panatura e teneri, i Cheese Shots sono perfetti da condividere con gli amici come aperitivo o come irresistibile contorno alternativo del tuo Bucket o del tuo menù',
                'image' => 'cover/cheese-shots.png',
                'restaurant_id' => 8,
                'visible' => true
            ],
            
            [
                'name' => "Mix Box",
                'price' => 16.99,
                'ingredients' => '4 PEZZI,1 PEZZO COB O.R.,1 PEZZO TENDER CRISPY,2 PEZZI HOT WINGS',
                'description' => 'Il giusto mix per gustare tutte le nostre specialità di pollo!',
                'image' => 'cover/MIX-BOX.jpg',
                'restaurant_id' => 8,
                'visible' => true
            ],

            [
                'name' => "Patatine KFC",
                'price' => 2.99,
                'ingredients' => 'patate, maionese, ketup,salsa barbucue',
                'description' => 'Accompagna il tuo panino con una porzione di patatine',
                'image' => 'cover/patatine-kfc.png',
                'restaurant_id' => 8,
                'visible' => true
            ],
            [
                'name' => "Sundae Cioccolato",
                'price' => 5.99,
                'ingredients' => 'cioccolato,nocciola, panna',
                'description' => 'Per i tuoi dolci momenti! Una soffice montagna bianca ricoperta da una glassa al gusto cioccolato e nocciola.',
                'image' => 'cover/SUNDAE-CIOCCOLATO.jpg',
                'restaurant_id' => 8,
                'visible' => true
            ],
            [
                'name' => "Insalatone",
                'price' => 7.99,
                'ingredients' => 'insalata, erbe, spezie,mais,pollo',
                'description' => 'Vuoi tenerti leggero ? Il Colonnello ha pensato anche a te, aggiungendolo all\'insalata mista con mais!',
                'image' => 'cover/insalate-kfc.jpg',
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
            [
                'name' => 'Papripollo',
                'price' => 10.99,
                'ingredients' => 'Mozzarella, Rucola, Filetto di Pollo alla Paprika Dolce, Cipolla Croccante, Salsa Yogurt',
                'description' => 'Scopri il nuovo Papripollo, a base di filetto di pollo 100% italiano con paprika dolce, mozzarella, rucola, salsa yogurt e cipolla croccante',
                'image' => 'cover/papripollo.jpg',
                'restaurant_id' => 11,
                'visible' => true

            ],
            [
                'name' => 'Piadina crudo',
                'price' => 11.99,
                'ingredients' => 'Prosciutto crudo, Squacquerone, Rucola',
                'description' => 'Crudo, squacquerone e rucola. Più che un classico, una vera e propria Leggenda. Basta un solo morso e te la ricordi per sempre.',
                'image' => 'cover/piadina-crudo.jpg',
                'restaurant_id' => 11,
                'visible' => true

            ],
            [
                'name' => 'La Provenzale',
                'price' => 9.99,
                'ingredients' => 'Maionese, Mozzarella, Tonno, Pomodoro, Origano',
                'description' => 'Assapora la freschezza del tonno abbinato a mozzarella filante e ai nostri pomodori conditi con cremosa maionese e insaporiti con un tocco di origano.',
                'image' => 'cover/piadina-tonno.jpg',
                'restaurant_id' => 11,
                'visible' => true

            ],
            [
                'name' => 'La Verdissima',
                'price' => 6.99,
                'ingredients' => 'Avocado, Zucchine grigliate, Lattuga, Pomodoro, Crema di carciofi',
                'description' => 'La Verdissima è la nostra ricetta interamente Vegan. Lasciati travolgere dal gusto fresco di avocado, pomodoro, zucchine grigliate, lattuga e crema di carciofi.',
                'image' => 'cover/piadina-la-verdissima.jpg',
                'restaurant_id' => 11,
                'visible' => true

            ],
            [
                'name' => 'La Levante',
                'price' => 7.99,
                'ingredients' => 'Zucchine grigliate, Pomodoro, Rucola, Melanzane Condite, Crema di ceci',
                'description' => 'La Levante è la nostra ricetta interamente Vegan. Lasciati travolgere dal gusto fresco di  pomodoro, zucchine grigliate, rucola e crema di noci.',
                'image' => 'cover/piadina-levante.jpeg',
                'restaurant_id' => 11,
                'visible' => true

            ],
            [
                'name' => 'Involtini Thailandesi',
                'price' => 10.99,
                'ingredients' => ' fogli di pasta phyllo, macinato di maiale,polpa di granchio macinata, carota,foglie di cavolo.',
                'description' => 'Gli involtini thailandesi sono molto simili agli involtini primavera, ma si differenziano per il ripieno che ha anche carne di maiale e non solo le verdure.',
                'image' => 'cover/involtini-thailandesi.jpg',
                'restaurant_id' => 12,
                'visible' => true

            ],
            [
                'name' => 'Insalata di papaya',
                'price' => 15.99,
                'ingredients' => 'papaya,spezie,insalata',
                'description' => 'L\'insalata di papaya verde è un contorno speziato a base di papaya acerba tagliata a julienne e pestata in un mortaio con altri ingredienti.',
                'image' => 'cover/insalata-papaya.jpeg',
                'restaurant_id' => 12,
                'visible' => true

            ],
            [
                'name' => 'Loto con riso e frutti di mare',
                'price' => 20.99,
                'ingredients' => 'riso, frutti di mare, loto,granchio,calamari',
                'description' => 'Il risotto con i frutti di mare è senz\'altro uno dei piatti più amati, che troverai, caldo e fumante',
                'image' => 'cover/Riso.jpg',
                'restaurant_id' => 12,
                'visible' => true

            ],
            [
                'name' => 'Ricetta Anatra alla pechinese',
                'price' => 16.99,
                'ingredients' => 'anatra, olio di sesamo, salsa di soia,miele',
                'description' => 'L’anatra alla pechinese costituisce una ricetta tipica della cucina cinese che viene servita con sottilissime crepes piegate a triangolo e con delle cipolline novelle.',
                'image' => 'cover/anatra-pechinese.jpg',
                'restaurant_id' => 12,
                'visible' => true

            ],
            [
                'name' => 'Zuppa piccante di gamberi',
                'price' => 21.99,
                'ingredients' => 'foglie di kaffir lime, scalogno, succo di lime, salsa di pesce, peperoncino fresco (o pasta di peperoncino) e succosi gamberetti.',
                'description' => 'Il sapore unico di questa zuppa si ottiene con una combinazione di citronella, foglie di kaffir lime, scalogno, succo di lime, salsa di pesce, peperoncino fresco (o pasta di peperoncino) e succosi gamberetti.',
                'image' => 'cover/Zuppa-piccante-di-gamberi.jpg',
                'restaurant_id' => 12,
                'visible' => true

            ],
            [
                'name' => 'Manzo al curry rosso',
                'price' => 21.99,
                'ingredients' => 'Bistecca,cipolla gialla, piselli verdi,brodo di pollo,salsa di soia , zenzero',
                'description' => ' Il curry cinese è uno dei piatti più popolari in questi takeaway e si ritiene che il curry sia stato introdotto in Cina dai monaci indiani.',
                'image' => 'cover/Curry-rosso-di-manzo.jpg',
                'restaurant_id' => 13,
                'visible' => true

            ],
            [
                'name' => 'Gamberi alla cinese',
                'price' => 9.99,
                'ingredients' => 'gamberi, porri, salsa di soia,peperoncino,zenzero,olio,prezzemolo,aglio',
                'description' => ' I gamberoni alla piastra si preparano con una marinatura di olio, limone, aglio e prezzemolo nella quale saranno immersi i gamberoni',
                'image' => 'cover/Gamberetti-piastra-salsa-piccante.jpg',
                'restaurant_id' => 13,
                'visible' => true

            ],
            [
                'name' => 'Spaghetti Cinesi all\'uovo e frutti di mare',
                'price' => 15.99,
                'ingredients' => 'gamberoni, cozze, spaghetti,pomodorini, zucchina, cipolla',
                'description' => ' Gli spaghetti Cinesi all’uovo si sposano benissimo con i frutti di mare quali, le cozze, i gamberetti, i surimi ma voi potete aggiungere a piacimento tutto quello che volete.',
                'image' => 'cover/spaghetti-cinesi-alluovo-e-frutti-di-mare.jpg',
                'restaurant_id' => 13,
                'visible' => true

            ],
            [
                'name' => 'Dumpling alla piastra (Ravioli Cinesi)',
                'price' => 11.99,
                'ingredients' => 'macinato di maiale, verza,porro,salsa di soia',
                'description' => ' Sono tipici del Capodanno cinese, come gli involtini primavera, ma vengono consumati durante tutte le festività perché la loro forma, che ricorda quella di un’antica moneta, è considerata un simbolo di buona fortuna',
                'image' => 'cover/raviolo-cinese.jpg',
                'restaurant_id' => 13,
                'visible' => true

            ],
            [
                'name' => 'Chow mein,spaghetti',
                'price' => 10.99,
                'ingredients' => 'noodles cinesi all\'uovo,carote,gamberi,aglio,cipolla',
                'description' => ' Il termine chow mein indica un piatto di origine cinese diffusosi poi in tutto il mondo in seguito alla diaspora di questo popolo.',
                'image' => 'cover/chow-mein.jpg',
                'restaurant_id' => 13,
                'visible' => true

            ],
            [
                'name' => 'Big Mac',
                'price' => 11.99,
                'ingredients' => 'pane, hambuger,formaggio,salsa big mac,insalata,cipolla',
                'description' => ' Il Grande Classico di McDonald’s è pronto a stupirti con il suo gusto ancora più irresistibile. ',
                'image' => 'cover/Big-Mac-hamburger.jpg',
                'restaurant_id' => 14,
                'visible' => true

            ],
            
            [
                'name' => 'Crispy McBacon',
                'price' => 5.99,
                'ingredients' => 'pane, bacon, hambuger, formaggio',
                'description' => 'Carne 100% bovina da allevamenti italiani, croccante bacon 100% da pancetta italiana e formaggio, accompagnati dall\'inconfondibile salsa Crispy. ',
                'image' => 'cover/hamburger-Gran-Crispy-McBacon.jpeg',
                'restaurant_id' => 14,
                'visible' => true

            ],
            [
                'name' => 'Pesto Rosso McWrap',
                'price' => 10.99,
                'ingredients' => 'pane, pollo,bacon,salsa al pesto rosso,pomodori secchi, Grana Padano',
                'description' => 'Sapore intenso, nota croccante e tutta la semplicità del wrap. ',
                'image' => 'cover/pesto-rosso.png',
                'restaurant_id' => 14,
                'visible' => true

            ],
            [
                'name' => 'McToast',
                'price' => 6.99,
                'ingredients' => 'pane, prosciutto cotto,formaggio',
                'description' => 'Quando il profumo del prosciutto cotto si unisce alla dolcezza del formaggio fuso e a tutto il gusto McDonald’s, nasce McToast: il primo (e l’unico) Toast rotondo. ',
                'image' => 'cover/toast.png',
                'restaurant_id' => 14,
                'visible' => true

            ],
            [
                'name' => 'My Selection Speck & Asiago',
                'price' => 9.99,
                'ingredients' => 'pane, carne bovina, asiago, speck, maionese,zucchine',
                'description' => '180 grammi di succosa carne bovina da allevamenti italiani, Asiago DOP, Speck Alto Adige IGP, maionese con senape in grani e zucchine grigliate. ',
                'image' => 'cover/myselection-speck-asiago.jpg',
                'restaurant_id' => 14,
                'visible' => true

            ],
           
            [
                'name' => 'Insalata verde con pomodori',
                'price' => 7.99,
                'ingredients' => 'insalata, pomodori',
                'description' => 'Lattughino verde e rosso, songino, spinacino baby e tutta la freschezza dei pomodorini ciliegia.',
                'image' => 'cover/insalata.png',
                'restaurant_id' => 14,
                'visible' => true

            ],
            [
                'name' => 'Insalata con Parmigiano Reggiano',
                'price' => 7.99,
                'ingredients' => 'insalata, pomodori,pollo,parmigiano',
                'description' => 'Prova il mix perfetto tra la panatura del petto di pollo 100% italiano e l\' insalata,',
                'image' => 'cover/insalata-pollo-croccante.png',
                'restaurant_id' => 14,
                'visible' => true

            ],
            [
                'name' => 'Nuggets',
                'price' => 3.99,
                'ingredients' => 'pollo',
                'description' => 'Qualsiasi Sfiziosità sceglierai, ti aspetta un momento veramente sfizioso. Sia per completare i tuoi menu, che per un fare uno spuntino goloso. ',
                'image' => 'cover/Nuggets.jpg',
                'restaurant_id' => 14,
                'visible' => true

            ],
            [
                'name' => "Patatine Mc",
                'price' => 2.99,
                'ingredients' => 'patate, maionese, ketup,salsa barbucue',
                'description' => 'Accompagna il tuo panino con una porzione di patatine',
                'image' => 'cover/patatine-mc.jpg',
                'restaurant_id' => 14,
                'visible' => true
            ],
            [
                'name' => "Tasty Basket",
                'price' => 5.99,
                'ingredients' => 'panzerotti,pomodoro,mozzarella,pollo,salsa',
                'description' => '15 pezzi da mangiare con chi vuoi: 6 Chicken McNuggets, 3 Panzerotti con pomodoro e mozzarella 100% italiani e 6 Chicken Wings più 3 salse omaggio.',
                'image' => 'cover/Tasty-Basket.jpg',
                'restaurant_id' => 14,
                'visible' => true
            ],
            [
                'name' => 'Mc Flurry - Baci Perugina',
                'price' => 6.99,
                'ingredients' => 'panna,cioccolato,latte,nocciole',
                'description' => ' La semplicità del gelato al fiordilatte, fatto con latte 100% italiano, più tutta la golosità dei Baci Perugina ',
                'image' => 'cover/mcflurry.png',
                'restaurant_id' => 14,
                'visible' => true

            ],
            [
                'name' => 'Torta della nonna',
                'price' => 5.99,
                'ingredients' => 'pinoli, crema, latte,uova, pinoli,limone',
                'description' => 'Sempre buona, perfetta in tutto: con i pinoli, le mandorle, la pasta frolla e la sua crema pasticcera al profumo di limone. ',
                'image' => 'cover/torta-della-nonna.png',
                'restaurant_id' => 14,
                'visible' => true

            ],



            [
                'name' => 'Chicken bacon king',
                'price' => 12.99,
                'ingredients' => 'pollo, bacon, insalata,pane',
                'description' => 'Panino con bacon croccante e pollo alla griglia',
                'image' => 'cover/chicken-bacon-king.png',
                'restaurant_id' => 15,
                'visible' => true

            ],
            
            
            [
                'name' => 'Big King XXL',
                'price' => 12.99,
                'ingredients' => 'lattuga, formaggio,hamburger,salsa',
                'description' => 'Extra-Extra-Large! Non è solo una maxi taglia, ma una vera e propria sfida! Con la sua doppia porzione di succosa carne alla griglia, gusto unico della salsa speciale e non una, non due, ma ben quattro fette di gustoso formaggio',
                'image' => 'cover/big-king-xxl.png',
                'restaurant_id' => 15,
                'visible' => true

            ],
            [
                'name' => 'Kings Prosciutto di Parma',
                'price' => 15.99,
                'ingredients' => 'pane, prosciutto di parma, hamburger,maionese,cipolla,scamorza',
                'description' => 'Un incontro di sapori, pensato per i consumatori che amano provare nuove esperienze gastronomiche.',
                'image' => 'cover/prosciutto-crudo.png',
                'restaurant_id' => 15,
                'visible' => true

            ],
            [
                'name' => 'Wrap Con Pollo Grigliato',
                'price' => 11.99,
                'ingredients' => 'pollo, insalata, maionese,pomodoro',
                'description' => 'Wrap con petto di pollo grigliato Fileni 100% Italiano, il mix perfetto per chi vuole consumare cibo genuino',
                'image' => 'cover/wrap-pollo.jpeg',
                'restaurant_id' => 15,
                'visible' => true

            ],
           
            [
                'name' => "Patatine Burger king",
                'price' => 2.99,
                'ingredients' => 'patate, maionese, ketup,salsa barbucue',
                'description' => 'Accompagna il tuo panino con una porzione di patatine',
                'image' => 'cover/patatine-bk.jpg',
                'restaurant_id' => 15,
                'visible' => true
            ],
            [
                'name' => "Onion Rings",
                'price' => 3.99,
                'ingredients' => 'cipolla',
                'description' => 'Qui si chiude il cerchio per tutti i fan degli anelli di cipolla. Immergili in una salsa e gustali',
                'image' => 'cover/onion.jpg',
                'restaurant_id' => 15,
                'visible' => true
            ],
            [
                'name' => 'Insalata mista',
                'price' => 8.99,
                'ingredients' => 'pomodoro, insalata, mais',
                'description' => 'Vuoi tenerti leggero ? Scopri l\'insalata mista con mais!',
                'image' => 'cover/insalata-mista.png',
                'restaurant_id' => 15,
                'visible' => true

            ],
            [
                'name' => 'Insalata con tonno',
                'price' => 8.99,
                'ingredients' => 'pomodoro, insalata, mais,tonno',
                'description' => 'Vuoi tenerti leggero ? Scopri l\'insalata mista con tonno!',
                'image' => 'cover/insalata-con-tonno.png',
                'restaurant_id' => 15,
                'visible' => true

            ],
            [
                'name' => 'King Fusion Oreo',
                'price' => 3.99,
                'ingredients' => 'oreo, cioccolato, panna,latte',
                'description' => 'Gelato al gusto oreo',
                'image' => 'cover/oreo.jpg',
                'restaurant_id' => 15,
                'visible' => true

            ],
            
            [
                'name' => 'Waffle',
                'price' => 12.99,
                'ingredients' => 'latte, uova, cioccolato, panna',
                'description' => 'Il waffle è un dolce a cialda statunitense discendente dalla gaufre belga.',
                'image' => 'cover/WAFFLE.png',
                'restaurant_id' => 15,
                'visible' => true

            ],
            [
                'name' => 'Nocciolata pancake',
                'price' => 5.99,
                'ingredients' => 'latte, uova, cioccolato, panna,nocciole',
                'description' => 'Gustosi Pancake per una merenda unica da personalizzare aggiungendo la deliziosa Nocciolata Rigoni di Asiago, crema biologica al cacao e nocciole.',
                'image' => 'cover/nocciolata.png',
                'restaurant_id' => 15,
                'visible' => true

            ],
            [
                'name' => 'Nesquik Shake',
                'price' => 3.99,
                'ingredients' => 'latte, panna,soia',
                'description' => 'Scopri l’intramontabile gusto di Nesquik unito al più cremoso dei milkshake. Al cacao non si comanda!',
                'image' => 'cover/nesquik.png',
                'restaurant_id' => 15,
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
