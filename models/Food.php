<?php
require_once __DIR__ . '/Products.php';
class Food extends Products
{
    public $gr;
    public $ingredienti;

    function __construct($_gr, $_ingredienti, $_price, $_name, $_tipoAnimale)
    {
        parent::__construct($_price, $_name, $_tipoAnimale);
        $this->gr = $_gr;
        $this->ingredienti = $_ingredienti;
    }
}
