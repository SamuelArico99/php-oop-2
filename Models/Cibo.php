<?php

require_once __DIR__ . '/Prodotto.php';

class Cibo extends Prodotto
{
    public $scadenza;

    function __construct($nome, $descrizione, $prezzo, $immagine, $categoria, $scadenza)
    {
        parent::__construct(
            $nome,
            $descrizione,
            $prezzo,
            $immagine,
            $categoria
        );

        $this->scadenza = $scadenza;
    }
}
