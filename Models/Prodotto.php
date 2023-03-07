<?php

require_once __DIR__ . '/Categoria.php';

class Prodotto
{
    public $nome;
    public $prezzo;
    public $immagine;
    public $categoria;


    function __construct($nome, $prezzo, $immagine, $categoria)
    {
        $this->nome = $nome;
        $this->prezzo = $prezzo;
        $this->immagine = $immagine;
        $this->categoria = $categoria;
    }
}
