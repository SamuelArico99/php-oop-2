<?php

require_once __DIR__ . '/Categoria.php';

class Prodotto
{
    public $nome;
    public $prezzo;
    public $categoria;


    function __construct($nome, $prezzo, $categoria)
    {
        $this->nome = $nome;
        $this->prezzo = $prezzo;
        $this->categoria = $categoria;
    }
}
