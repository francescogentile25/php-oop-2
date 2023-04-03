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
        try {
            if (strlen($_name) < 5) {
                throw new Exception("No mi sta rovinando tutto il piano, pensavo di farlo così ma in realtà...");
            } else {
                $this->name = $_name;
            }
        } catch (Exception $e) {
            echo "Errore: " . $e->getMessage();
        }
    }
}
//varaibili protected 
//metodi public