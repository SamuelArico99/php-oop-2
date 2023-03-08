<?php
require_once __DIR__ . '/Models/Categoria.php';
require_once __DIR__ . '/Models/Prodotto.php';
require_once __DIR__ . '/Models/Cibo.php';
require_once __DIR__ . '/Models/Cuccia.php';
require_once __DIR__ . '/Models/Gioco.php';

$categoriaCani = new Categoria(
    'Cani',
    ' 🐕'
);

$categoriaGatti = new Categoria(
    'Gatti',
    ' 🐈'
);

$prodotti = [];

$prodotti[] = new Prodotto(
    'Dry shower eco+',
    'Shampoo a Secco naturale per Cani e Gatti Dry Shower Eco+, formato spray da 750 ml.
    Il prodotto va spruzzato nel manto dell’animale, lasciato agire per qualche minuto e dopo una strofinata con un panno umido il suo pelo tornerà ad essere pulito e splendente, privo di macchie, senza bisogno di risciacquare il pelo con acqua! 100% Made in Italy e naturale.
    Dry Shower Eco+ è la miglior soluzione per un lavaggio rapido e completo del cane o del gatto, in sostituzione della doccia. Per uso frequente, adatto a tutti i manti, non crea schiuma e si asciuga velocemente.
     
    Modo d’uso: spruzzare il prodotto direttamente sul manto dell’animale. Passare un panno umido e pulito sulla zona trattata massaggiando energicamente, quindi spazzolare.',
    12.11,
    'https://www.myselleria.it/trunk/pr_imgbig_6458_dryshower-eco-spray-cani-gatti.jpg',
    $categoriaCani
);

$prodotti[] = new Prodotto(
    'Doppia Ciotola per gatti',
    'La doppia ciotola Karlie Rana conquista tutti i piccoli felini e i loro amici umani! Con il suo moderno design in un bel color celeste e il suo decoro con gattino e la scritta "Meow", questa doppia ciotola non passerà sicuramente inosservata. Inoltre, è un accessorio molto funzionale, costituito da un supporto in plastica con fondo antiscivolo e due ciotole estraibili in acciaio inossidabile, igieniche e lavabili in lavastoviglie.',
    8.99,
    'https://shop-cdn-m.mediazs.com/bilder/doppia/ciotola/per/gatti/karlie/rana/7/800/213797_pla_karlie_diner_set_rana_hs_01_7.jpg',
    $categoriaGatti
);

$prodotti[] = new Cibo(
    'Gourmet Gold Mousse Lattina 85G',
    'Sai che il tuo gatto ama mousse e adori sorprenderlo con una vasta gamma di ricette per deliziare il suo palato raffinato. Ecco perchè gourmet™ gold ha creato mousse con verdure, deliziose ricette accompagnate da verdure selezionate, attentamene preparate per offrire al tuo gatto il piacere di una sensazione morbida e delicata.',
    13.99,
    'https://lh3.googleusercontent.com/spp/AHlUXW3j4n9M5EWQbBTlOyKQG1ySjcLe-DPNTEALKsRYXMl-4VJa0Gmk93CR8oAnqxS4Y8M74bSpkAa_Vo5-Yzm3ZmDj7uvJVrJ6MDSLXH19qkzP3olIAJhWs_WE45y1UxQQ4LiH6LW0G6f5X_5kuEkYaqkUe1HlZyqKZsDJFsC2CrJKImth4TRw3gh3mucUsa4WllKd-7Udbw=s512-rw-pd-pc0x00ffffff',
    $categoriaGatti,
    '18/02/2025'
);

$prodotti[] = new Cibo(
    'Monge Medium Adult Ricco di Pollo',
    'Le crocchette Monge Medium Adult ricco di Pollo per cane presentano una ricetta a base di selezionate e pregiate carni bianche di pollo e riso. L alimento è altamente digeribile ed è in grado di favorire la salute intestinale e l equilibrio energetico del tuo amico a quattro zampe. Il cibo secco Cruelty FreeMonge Natural Superpremium Medium Adult presenta un contenuto proteico calibrato e bilanciato che lo rende altamente digeribile, grazie al pollo fresco abbinato poi ad un alto livello di colina cloruro e all apporto vitaminico-minerale delle alghe. Il tuo cane non avrà quindi difficoltà ad assimilare tutte le sostanze nutritive in modo ottimale.',
    38.99,
    'https://arcaplanet.vtexassets.com/arquivos/ids/255544/monge-adult-medium-pollo-12kg-600x600.jpg?v=1764637852',
    $categoriaCani,
    '07/05/2025'
);

$prodotti[] = new Cuccia(
    'Letto Cozy Kingdom',
    'Offrite al vostro peloso un caldo e comodo posticino nel quale accoccolarsi e riposare tranquillamente!
    Cozy Kingdom è un letto rotondo per gatti, cuccioli e cani di piccola taglia. Il suo confortevole bordo alto decorato con un cordone donerà un senso di protezione al vostro animale, che riposerà così sicuro e sereno al suo interno.
    Il lato esterno in poliestere strutturato di colore nero con cordone decorativo dorato contrasta elegantemente con l interno in soffice pile beige chiaro. Il pratico cuscino estraibile bicolore double-face rende il letto ancora più accogliente e consente di modificarne il look a proprio piacimento. Inoltre é possibile lavare soltanto il cuscino evitando il lavaggio dell intero letto.
    Grazie al fondo antiscivolo, il letto Cozy Kingdom è stabile e non scivola sui pavimenti.',
    14.19,
    'https://shop-cdn-m.mediazs.com/bilder/letto/cozy/kingdom/4/400/48523_PLA_Cozy_Kuschelbett_Kingdom_FG_11_63_4.jpg',
    $categoriaGatti,
    'Microfibra'
);

$prodotti[] = new Cuccia(
    'Cuccia Mezzaluna Lovedì',
    'La cuccia mezzaluna, disponibile in 3 misure, è prodotta in cotone misto a poliestere che viene prelavato e pretrattato in modo da non restringersi o perdere colore dopo il lavaggio.',
    60.99,
    'https://arcaplanet.vtexassets.com/arquivos/ids/279179/lovedi-cuccia-per-cane-mezzaluna.jpg?v=1763987780',
    $categoriaCani,
    'Cotone'
);

$prodotti[] = new Gioco(
    'Gioco per Cane Corda Osso',
    'Trixie ha studiato una linea di giochi ideali non solo a far divertire il tuo cane, ma anche utilissimi per aiutare il tuo pet a mantenere la sua igiene orale. Con la coloratissima corda per cani di Trixie in misto cotone, la cura dell’igiene orale del tuo cane sarà molto più divertente del previsto! La corda è a forma di osso, per stimolare la voglia di sgranocchiamento del tuo Fido. La corda è sicura e igienica ed è studiata per far sviluppare in sicurezza i muscoli della bocca. Mordicchiare e tirare! Un passatempo per il tuo cucciolone, pronto alle sfide di tiro alla fune col suo amato padroncino. Si consiglia di tenere sotto controllo lo stato di usura del prodotto. I colori sono assortiti, quindi non selezionabili. DIMENSIONE: 40 cm.',
    4.13,
    'https://arcaplanet.vtexassets.com/arquivos/ids/223864/trixie-cane-gioco-corda.jpg?v=1764637853',
    $categoriaCani,
    'Plastica'
);

$prodotti[] = new Gioco(
    'Tiragraffi Mica',
    'Il tiragraffi Mica è un classico graffiatoio per gatti con una favolosa base quadrata foderata in peluche. Questo graffiatoio diventerà un grazioso complemento d arredo e, allo stesso tempo, il tuo gattino potrà riposare, trascorrere momenti di relax e giocare. Il tronchetto è rivestito in juta naturale e quindi perfetto per il gatto per farsi le unghie senza rovinarle. All estremità del tronchetto, è presente una piattaforma nelle quale il tuo felino potrà sonnecchiare in totale pace. Il gioco, appeso a una cordina, sarà il divertimento preferito del tuo caro amico a quattro zampe!
    Questo affila unghie misura 46CM.',
    29.99,
    'https://arcaplanet.vtexassets.com/arquivos/ids/223063/trixie-gatto-tiragraffi-mica-grigio.jpg?v=1764465137',
    $categoriaGatti,
    'Poliestere'
);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP 2</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <header class="my-5 d-flex justify-content-center">
            <h1>
                PET SHOP
            </h1>
        </header>
        <div class="row">
            <?php
            foreach ($prodotti as $index => $prodotto) {
            ?>
                <div class="col-12 col-md-4 col-lg-3 my-4">
                    <div class="card">
                        <img src="<?php echo $prodotto->immagine ?>" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="card-title">
                                <?php echo $prodotto->nome ?>
                            </h5>
                            <h6>
                                Categoria:
                                <?php echo $prodotto->categoria->nome ?>
                                <?php echo $prodotto->categoria->icona ?>
                            </h6>
                            <p class="card-text"><?php echo $prodotto->descrizione ?></p>
                            <span>€ <?php echo $prodotto->prezzo ?></span> <br>
                            <a href="" class="btn btn-primary my-3">Vedi Prodotto</a> <br>
                            <?php
                            if (is_a($prodotto, 'Cibo')) {

                            ?>
                                <span>Scadenza: <?php echo $prodotto->scadenza ?></span>
                            <?php
                            }
                            ?>
                            <?php
                            if (is_a($prodotto, 'Cuccia')) {

                            ?>
                                <span>Materiale: <?php echo $prodotto->materiale ?></span>
                            <?php
                            }
                            ?>
                            <?php
                            if (is_a($prodotto, 'Gioco')) {

                            ?>
                                <span>Materiale: <?php echo $prodotto->materiale ?></span>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>

        </div>
    </div>
</body>

</html>