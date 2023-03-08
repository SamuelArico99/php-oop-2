<?php

require_once __DIR__ . '/Prodotto.php';

class Gioco extends Prodotto
{
    public $materiale;

    function __construct($nome, $descrizione, $prezzo, $immagine, $categoria, $materiale)
    {
        parent::__construct(
            $nome,
            $descrizione,
            $prezzo,
            $immagine,
            $categoria
        );

        $this->materiale = $materiale;
    }
}
