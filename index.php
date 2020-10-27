

<?php
/** IBA POMOCKA AŽ NEMUSÍM VYPISOVAŤ VŠETKO V HTML */
require_once 'Develop/For_Test_Develop.php';
?>
<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="./favicon.ico" type="image/x-icon">
    <link rel="icon" href="./favicon.ico" type="image/x-icon">
    <title>Uroveň1</title>
    <link rel="stylesheet" href="Access/Css/bootstrap.css">
    <link rel="stylesheet" href="Access/Css/style.css">
</head>
    <body>
        <!-- HEADER BACKGROUND CONTAINER -->
        <div class="container-fluid p-0">
            <div class="headerimage">
                <img src="Media/Kategory/Architektura.jpeg" alt="Obrázok pozadia" class="rounded w-100 img-fluid">
            </div>
        </div>
        <!-- POSITION KONTAINER AND CARD KATEGORY -->
        <div class="position-absolute mycontainer">
            <div class="container">
                <h2>FOTOGALÉRIA</h2>
                <h3 class="mt-my">KATEGÓRIE</h3>
                <hr>
                <div class="card-deck clearfix">
                    <div class="mt-2">
                        <!-- IBA SOM SI POMOHOL AZ NEMUSIM VSETKO OPAKOVANE PISAT DUFAM ZE TO NEVADÍ -->
                        <?php foreach ($kategory as $kat):?>
                        <div class="card mt-4">
                            <img class="card-img-top rounded img-fluid" src="<?= $kat['image'];?>" alt="Kategória obrázkov">
                            <div class="card-body">
                                <p class="text-center bold  m-0 card-title"><?= $kat['Name'];?></p>
                                <p class="card-text mycall text-center"></p>
                            </div>
                        </div>
                        <?php endforeach;?>
                        <div class="card mt-4 card-block">
                            <div class="card-body text-center mt-5">
                                <img src="Media/add.svg" width="40" alt="ikonka add" class="">
                                <p class="mt-2 text-center addkategory">PRIDAŤ KATEGÓRIU</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- FOOTER -->
                <p class="myfoot mt-5">webdesign bart.sk</p>
            </div>
        </div>
    </body>
</html>