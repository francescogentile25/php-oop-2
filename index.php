<?php

class Prodotto
{
    private $name;
    private $price;
    private $type;
    private $categories;

    public function __construct($_name, $_categories, $_price, $_type)
    {
        $this->name = $_name;
        $this->categories = $_categories;
        $this->price = $_price;
        $this->type = $_type;
    }


    public function getName()
    {
        return $this->name;
    }

    public function getCategories()
    {
        return $this->categories;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getType()
    {
        return $this->type;
    }
}


class Categories
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }
}


class Shop
{
    private $prodotti = array();

    public function addProdouct(Prodotto $prodotto)
    {
        $this->prodotti[] = $prodotto;
    }

    public function getProdotti()
    {
        return $this->prodotti;
    }
}


$cani = new Categories("Cani");
$gatti = new Categories("Gatti");


$prodouct1 = new Prodotto("Palla cani", $cani, 10, "gioco");
$prodouct2 = new Prodotto("Scatola gatti ", $gatti, 5, "cibo");


$shop = new Shop();

$shop->addProdouct($prodouct1);
$shop->addProdouct($prodouct2);

?>








<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/c5d4023dee.js" crossorigin="anonymous"></script>
    <title>Shop</title>
</head>

<body>


    <h1 class="text-center"> I prodotti!</h1>


    <div class="container mt-5">

        <div class="row mt-5">

            <?php foreach ($shop->getProdotti() as $prodotto) { ?>

                <div class="col-4 mt-5">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $prodotto->getName(); ?></h5>
                            <p class="card-text"><?php echo $prodotto->getCategories()->getName(); ?></p>
                            <p class="card-text"><?php echo $prodotto->getPrice(); ?> euro</p>
                            <p class="card-text"><?php echo $prodotto->getType(); ?></p>

                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>


    <div class="container mt-5">

        <div class="row mt-5">

            <?php foreach ($shop->getProdotti() as $prodotto) { ?>

                <div class="col-4 mt-5">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $prodotto->getName(); ?></h5>
                            <p class="card-text"><?php echo $prodotto->getCategories()->getName(); ?></p>
                            <p class="card-text"><?php echo $prodotto->getPrice(); ?> euro</p>
                            <p class="card-text"><?php echo $prodotto->getType(); ?></p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

</body>

</html>