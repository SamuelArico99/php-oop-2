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
    'Prodotto 1',
    'Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur magni, ipsa, maiores iusto, molestias labore et aliquid deserunt eaque possimus cum alias maxime nobis tempora? Blanditiis accusamus dolore voluptas dicta!',
    9.99,
    'htttp://google.com',
    $categoriaCani
);

$prodotti[] = new Prodotto(
    'Prodotto 2',
    'Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur magni, ipsa, maiores iusto, molestias labore et aliquid deserunt eaque possimus cum alias maxime nobis tempora? Blanditiis accusamus dolore voluptas dicta!',
    10.99,
    'htttp://google.com',
    $categoriaGatti
);

$prodotti[] = new Cibo(
    'Cibo 1',
    'Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur magni, ipsa, maiores iusto, molestias labore et aliquid deserunt eaque possimus cum alias maxime nobis tempora? Blanditiis accusamus dolore voluptas dicta!',
    13.99,
    'htttp://google.com',
    $categoriaGatti,
    '07/05/2025'
);

$prodotti[] = new Cibo(
    'Cibo 1',
    'Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur magni, ipsa, maiores iusto, molestias labore et aliquid deserunt eaque possimus cum alias maxime nobis tempora? Blanditiis accusamus dolore voluptas dicta!',
    13.99,
    'htttp://google.com',
    $categoriaCani,
    '07/05/2025'
);

$prodotti[] = new Cuccia(
    'Cuccia 1',
    'Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur magni, ipsa, maiores iusto, molestias labore et aliquid deserunt eaque possimus cum alias maxime nobis tempora? Blanditiis accusamus dolore voluptas dicta!',
    13.99,
    'htttp://google.com',
    $categoriaGatti,
    'Microfibra'
);

$prodotti[] = new Cuccia(
    'Cuccia 2',
    'Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur magni, ipsa, maiores iusto, molestias labore et aliquid deserunt eaque possimus cum alias maxime nobis tempora? Blanditiis accusamus dolore voluptas dicta!',
    13.99,
    'htttp://google.com',
    $categoriaCani,
    'Lana'
);

$prodotti[] = new Gioco(
    'Gioco 1',
    'Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur magni, ipsa, maiores iusto, molestias labore et aliquid deserunt eaque possimus cum alias maxime nobis tempora? Blanditiis accusamus dolore voluptas dicta!',
    15.99,
    'htttp://google.com',
    $categoriaCani,
    'Plastica'
);

$prodotti[] = new Gioco(
    'Gioco 1',
    'Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur magni, ipsa, maiores iusto, molestias labore et aliquid deserunt eaque possimus cum alias maxime nobis tempora? Blanditiis accusamus dolore voluptas dicta!',
    15.99,
    'htttp://google.com',
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
</head>

<body>
    <div class="container">
        <div class="row">
            <?php
            foreach ($prodotti as $index => $prodotto) {
            ?>
                <div class="col">
                    <div class="card">
                        <img src="<?php echo $prodotto->immagine ?>" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="card-title">
                                <?php echo $prodotto->nome ?>
                            </h5>
                            <h6>
                                <?php echo $prodotto->categoria->nome ?>
                                <?php echo $prodotto->categoria->icona ?>
                            </h6>
                            <p class="card-text"><?php echo $prodotto->descrizione ?></p>
                            <span>€ <?php echo $prodotto->prezzo ?></span>
                            <a href="" class="btn btn-primary">Vedi Prodotto</a>
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