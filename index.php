<?php
require_once __DIR__ . '/Models/Prodotto.php';

$categoriaCani = new Categoria(
    'Cani'
);

$categoriaGatti = new Categoria(
    'Gatti'
);

$prodotti = [];

$prodotti[] = new Prodotto(
    'Prodotto 1',
    9.99,
    $categoriaCani
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
            <div class="col">
                <div class="card">
                    <img src="" alt="">
                    <div class="card-body">
                        <h5 class="card-title">

                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>