<?php
require_once "./models/Food.php";
require_once "./models/Toys.php";
$cibo1 = new Food(100, 'sale, pepe', 5, 'salmone', 'gatto', 'salmone norvegese appena pescato e molto costoso');
$prodotto1 = new Products(10, "generico", 'generico', 'descrizione generica');
$gioco1 = new Gioco('plastica', 'rosso', 12, 'palla', 'cane', 'pr');
var_dump($cibo1, $prodotto1, $gioco1);

$cibi = [
    $cibo1,
    new Food(12, 'pollo, pane', 5, 'ee', 'cane', 'croccehtte scadenti')
];


$giochi = [
    $gioco1
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <title>Shop Animali </title>
</head>

<body>
    <div class="container">
        <h1 class="text-danger text-center text-uppercase mt-3">Shop</h1>
        <div class="row row-cols-1 row-cols-md-2 g-4">
            <?php foreach ($cibi as $cibo) : ?>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $cibo->tipoAnimale ?></h5>
                            <ul>
                                <li>Prezzo:<?php echo $cibo->price ?> </li>
                                <li>Prodotto <?php echo $cibo->name ?></li>
                                <li><?php echo $cibo->gr .= "gr " ?></li>
                                <li>ingredienti <?php echo $cibo->ingredienti ?></li>
                                <li> <?php echo $cibo->text ?></li>

                            </ul>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
            <?php foreach ($giochi as $gioco) : ?>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $gioco->tipoAnimale ?></h5>
                            <ul>
                                <li>Prezzo:<?php echo $gioco->price ?> </li>
                                <li>Prodotto <?php echo $gioco->name ?></li>
                                <li><?php echo $gioco->materiale .= " materiale " ?></li>
                                <li> <?php echo $gioco->colore ?></li>
                                <li> <?php echo $gioco->text ?></li>

                            </ul>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
</body>

</html>