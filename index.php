

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
    <link rel="stylesheet" href="Access/js/ui/jquery-ui.css">
    <link rel="stylesheet" href="Access/Css/bootstrap.css">
    <link rel="stylesheet" href="Access/Css/style.css">

    <link  href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/dropzone.css" rel="stylesheet">
    <script src="Access/js/ui/external/jquery/jquery.js"></script>
    <script src="Access/js/ui/jquery-ui.js"></script>
    <script  src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/dropzone.js"></script>
</head>
    <body>
        <!-- HEADER BACKGROUND CONTAINER -->
        <div class="container-fluid p-0">
            <div class="headerimage">
                <img id="headerbc" src="Media/Kategory/Architektura.jpeg" alt="Obrázok pozadia" class="rounded  img-fluid">
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
                        <div id="card" class="col-lg-3 col-md-4 col-sm-6 col-xs-12 float-left p-0 m-0">
                            <div class="card border-0 mt-4">
                                <img class="card-img-top" src="<?= $kat['image'];?>" alt="Kategória obrázkov <?= $kat['Name'];?>">
                                <div class="card-body myborder">
                                    <p class="card-my text-center bold  m-0 card-title"><?= $kat['Name'];?></p>
                                    <p class="card-text mycall text-center">6 fotiek</p>
                                </div>
                            </div>
                        </div>
                        <?php endforeach;?>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 float-left p-0 m-0">
                            <div class="card mt-4 card-block">
                                <div class="card-body text-center mt-5">
                                    <img src="Media/add.svg" width="40" alt="Pridať kategóriu">
                                    <p class="mt-2 text-center addkategory">PRIDAŤ KATEGÓRIU</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- FOOTER -->
                <p class="myfoot mt-5">webdesign bart.sk</p>
            </div>
        </div>
        <script>
        /** ANIMATE BACKGROUND HOVER **/
            function animatehover(){
                $('[id^="card"]').hover(function() {
                    let my = $();
                    let newImg = $('.card-img-top',this).attr('src');
                    $('#headerbc').attr('src',newImg)
                });
            }
            /** CALL MY FUNCTION */
            animatehover();
        </script>
    </body>
</html>