<?php
require_once __DIR__ . '/Products.php';


class Gioco extends Products
{

    public $materiale;
    public $colore;


    function __construct($_materiale, $_colore, $_price, $_name, $_tipoAnimale, $_text)
    {
        parent::__construct($_price, $_name, $_tipoAnimale, $_text);
        $this->materiale = $_materiale;
        $this->colore = $_colore;
        $this->text = $_text;
    }
}
