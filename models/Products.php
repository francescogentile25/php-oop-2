<?php
require_once __DIR__ . '/Category.php';
class Products extends Category
{
    public $price;
    public $name;
    function __construct($_price, $_name, $_tipoAnimale)
    {
        parent::__construct($_tipoAnimale);
        $this->price = $_price;
        $this->name = $_name;
    }
}
//varaibili protected 
//metodi public