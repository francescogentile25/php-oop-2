<?php
require_once __DIR__ . '/Products.php';
require_once __DIR__ . '/../traits/Description.php';
class Food extends Products
{
    use Description;
    public $gr;
    public $ingredienti;

    function __construct($_gr, $_ingredienti, $_price, $_name, $_tipoAnimale, $_text)
    {
        parent::__construct($_price, $_name, $_tipoAnimale);
        $this->gr = $_gr;
        $this->ingredienti = $_ingredienti;
        $this->text = $_text;
    }
}
