<?php  

include __DIR__ . '/classes/Product.php';
include __DIR__ . '/classes/Food.php';
include __DIR__ . '/classes/Cuccia.php';
include __DIR__ . '/classes/Game.php';
include __DIR__ . '/classes/User.php';
include __DIR__ . '/classes/Carrello.php';
include __DIR__ . '/classes/CreditCard.php';
include __DIR__ . '/classes/Antipulci.php';

/////////////////////// PRODOTTI //////////////////////

$prodotto_text = new Product ('text prodotto', 'zooplus', 50, 1, 'cani');
// var_dump($prodotto);

$croccantini = new Food ('Croccantini', 'Pedigree', 10, 4, 'cani', 200);
// var_dump($croccantini);

$cuccia = new Cuccia ('Cuccia', 'Zooplus', 70, 2, 'Cani', 'XL', 'red');
// var_dump($cuccia);

$pallina = new Game ('Pallina', 'Zooplus', 2, 7, 'Cani', 'black');
// var_dump($pallina);

$antipulci = new Antipulci('Antipulci', 'Advantix', 15, 3, 'cani', '07');
// var_dump($antipulci);

$antipulci_two = new Antipulci('Antipulci', 'Advantix', 12, 1, 'cani', '09');


//////////////////////////   USERS  //////////////////////////

$omar = new User ('Omar','Buzzoni','omar@gmail.com', true);
// var_dump($omar);

$zoro = new User ('Zoro','Roronoa','zoro@gmail.com', false);
// var_dump($omar);


///////////////////////   CARRELLO  /////////////////////////////

$carrello_omar = new Carrello (3, $omar, 150,);
// var_dump($carrello_omar);

$carrello_zoro = new Carrello (2, $zoro, 90,);
// var_dump($carrello_zoro);


//////////////////////////   CARTA DI CREDITO    ///////////////////

$credit_card_omar = new CreditCard (6587984,'19-04-2024', $omar, $omar);

$credit_card_zoro = new CreditCard (3336548,'19-04-2021', $zoro, $zoro);

// $mese = date('m');
// var_dump($mese);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div>
        <div>
            <h1>Prodotti</h1>
            <div class="products">
                <div>
                    <?= $croccantini->print_prodotto() ?>
                </div>

                <div>
                    <?= $cuccia->print_prodotto() ?>
                </div>

                <div>              
                    <?= $pallina->print_prodotto() ?>
                </div>

                <div>              
                    <?= $antipulci->print_prodotto() ?>
                </div>

                <div>              
                    <?= $antipulci_two->print_prodotto() ?>
                </div>
        </div>
        <div>
            <h1>USERS</h1>
            <div class="users">
                <div>
                    <?= $carrello_omar->print_user() ?>
                </div>

                <div>
                    <?= $carrello_zoro->print_user() ?>
                </div>
            </div>
        </div>
        <div>
            <h1>CREDIT CARD</h1>
            <div class="users">
                <div>
                    <?= $credit_card_omar->credit_card() ?>
                </div>

                <div>
                    <?= $credit_card_zoro->credit_card() ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>