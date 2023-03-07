<?php

require_once __DIR__ . '/Categoria.php';

class Prodotto
{
    public $nome;
    public $descrizione;
    public $prezzo;
    public $immagine;
    public $categoria;


    function __construct($nome, $descrizione, $prezzo, $immagine, $categoria)
    {
        $this->nome = $nome;
        $this->descrizione = $descrizione;
        $this->prezzo = $prezzo;
        $this->immagine = $immagine;
        $this->categoria = $categoria;
    }
}
