<!DOCTYPE html>
<?php

require __DIR__ . '/Models/Product.php';
require __DIR__ . '/Models/Categorie.php';
require __DIR__ . '/Models/Item.php';

$food = new Item('https://th.bing.com/th/id/R.2d276f75b7a72d6efa386d31f917407b?rik=82OP3QRM8R2eEw&riu=http%3a%2f%2fbuonoedeconomico.it%2fwp-content%2fuploads%2f2016%2f10%2fA.1-Cibo-per-cani.jpg&ehk=YX0LFVREqLOxx6SrOvwK9Wb4OybV1DKpycB7xNhJjx4%3d&risl=&pid=ImgRaw&r=0', 'Royal Canin', 'Crocchette Royal Canin Maxi Adult di misura XL per cani di tg grande (26-45 kg), dai 15 mesi ai 5 anni, per la salute del sistema immunitario, il funzionamento delle articolazioni e il controllo del peso.', 'Cani', 20, 'Cibo');
$item = new Item('https://img.aosomcdn.com/thumbnail/100/n0/product/2022/02/22/nbMe5b17f2068a82c.jpg', 'PawHut', 'Cuccia Interno per Animali Domestici con cuscino Grigio marrone 57 × 46 × 17.5cm', 'Gatti', "54,95", 'Cuccia');

$products = [$food, $item];
?>





<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css' integrity='sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==' crossorigin='anonymous' />
    <title>OOP E-commecre</title>
</head>

<body>
    <h1 class="text-center my-5 fw-bolder">E-COMMERCE PET</h1>
    <div class="container mt-5">
        <div class="row">
            <?php foreach ($products as $product) : ?>
                <div class="col-6">
                    <div class="card text-center bg-dark text-light h-100">
                        <figure class="">
                            <img class="img-fluid w-100" src="<?= $product->getImage(); ?>" alt="<?= $product->getName(); ?>">
                        </figure>
                        <figcaption class=" d-flex flex-column gap-2 px-2">
                            <h1><?= $product->getName(); ?></h1>
                            <p><?= $product->getDescription(); ?></p>
                            <span>Categoria: <?= $product->getType(); ?></span>
                            <div class="prize"><?= $product->getTypeItem(); ?></div>
                            <span>Prezzo: € <?= $product->getPrize(); ?></span>
                        </figcaption>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>

</html>