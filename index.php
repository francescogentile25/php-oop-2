<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <title>Shop Cani </title>
</head>

<body>
    <div class="container">
        <h1 class="text-danger text-center text-uppercase mt-3">ciao</h1>
    </div>
</body>

</html>


<?php
require_once "./models/Food.php";
require_once "./models/Toys.php";
$cibo1 = new Food(100, 'sale, pepe', 5, 'salmone', 'gatto');
$prodotto1 = new Products(10, "generico", 'generico');
$gioco1 = new Gioco('plastica', 'rosso', 12, 'palla', 'cane');
var_dump($cibo1, $prodotto1, $gioco1);
