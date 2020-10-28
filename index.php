<?php
/** IBA POMOCKA AŽ NEMUSÍM VYPISOVAŤ VŠETKO V HTML */
require_once 'Develop/For_Test_Develop.php';


/**
 * BOOTSTRAP ROZSIRENIE POUZITE CLASS
 * col-rt-4 col-4k-5 col-8k-6
 * Nemám to ako odskúšať najväčšie rozlíšenie ktoré mám je cca polovica s 5K .
 */
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
    <!-- TEST BOOTSTRAP 8K -->
    <link rel="stylesheet" href="Access/Css/bower_components/bootstrap-big-grid/dist/css/bootstrap-big-grid.min.css"/>
    <!-- CSS -->
    <link rel="stylesheet" href="Access/js/ui/jquery-ui.css">
    <link rel="stylesheet" href="Access/Css/bootstrap.css">
    <link rel="stylesheet" href="Access/Css/style.css">
    <link  href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/dropzone.css" rel="stylesheet">
    <!-- SCRIPT -->
    <script src="Access/js/ui/external/jquery/jquery.js"></script>
    <script src="Access/js/ui/jquery-ui.js"></script>
    <script  src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/dropzone.js"></script>
</head>
    <body>
        <!-- HEADER BACKGROUND CONTAINER -->
        <div class="container-fluid p-0">
            <div class="headerimage">
                <img id="headerbc" src="Media/Kategory/Architektura.png" alt="Obrázok pozadia" class="rounded img-fluid">
            </div>
        </div>
        <!-- POSITION KONTAINER AND CARD KATEGORY -->
        <div id="kategory" class="position-absolute mycontainer">
            <div class="container">
                <h2>FOTOGALÉRIA</h2>
                <h3 class="mt-my"> KATEGÓRIE</h3>
                <hr>
                <div class="card-deck clearfix">
                    <div class="mt-2">
                        <!-- IBA SOM SI POMOHOL AZ NEMUSIM VSETKO OPAKOVANE PISAT DUFAM ZE TO NEVADÍ -->
                        <?php foreach ($kategory as $kat):?>
                        <div id="card" class="start-galery col-lg-3 col-md-4 col-sm-6 col-xs-12 col-rt-4 col-4k-5 col-8k-6 float-left p-0 m-0">
                            <div class="card border-0 mt-4">
                                <img class="card-img-top" src="<?= $kat['image'];?>" alt="Kategória obrázkov <?= $kat['Name'];?>"/>
                                <div class="card-body myborder">
                                    <p class="card-my text-center bold  m-0 card-title"><?= $kat['Name'];?></p>
                                    <p class="card-text mycall text-center"><?= $kat['count'];?></p>
                                </div>
                            </div>
                        </div>
                        <?php endforeach;?>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 col-rt-4 col-4k-5 col-8k-6 float-left p-0 m-0">
                            <div class="kategorystart card mt-4 card-block">
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
        <!-- CONTAINER FOR GALLERY -->
        <div id="galerry" class="display-non position-absolute mycontainer">
            <div class="container">
                <h2>FOTOGALÉRIA</h2>
                <h3 class="mt-my cursor-p back-galery"><img src="Media/back.svg" class="mr-3" alt="back"> architektúra</h3>
                <hr>
                <div class="card-deck clearfix">
                    <div class="mt-2">
                        <!-- IBA SOM SI POMOHOL AZ NEMUSIM VSETKO OPAKOVANE PISAT DUFAM ZE TO NEVADÍ -->
                        <?php foreach ($Galerry as $kat):?>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 col-rt-4 col-4k-5 col-8k-6 float-left p-0 m-0">
                                <div class="card border-0 mt-4">
                                    <img class="card-img-top h-100" src="<?= $kat['image'];?>" alt="Kategória obrázkov <?= $kat['Name'];?>"/>
                                </div>
                            </div>
                        <?php endforeach;?>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 col-rt-4 col-4k-5 col-8k-6 float-left p-0 m-0">
                            <div class="opendrop card mt-4 card-block">
                                <div class="card-body text-center mt-5">
                                    <img src="Media/fot.svg" width="40" alt="Pridať kategóriu">
                                    <p class="mt-2 text-center addkategory">PRIDAŤ fotky</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- FOOTER -->
                <p class="myfoot mt-5">webdesign bart.sk</p>
            </div>
        </div>

        <!-- SCRIPT FOR ANIMATE BC + ANIMATE PAGE GALLERY -->
        <script>
        /** ANIMATE BACKGROUND HOVER **/
        function animatehover(){
                $('[id^="card"]').hover(function() {
                    let newImg = $('.card-img-top',this).attr('src');
                    $('#headerbc').attr('src',newImg)
                });
            }
        /** DIALOG MY START AND CLOSE */
        $(document).ready(function (){
            $('.kategorystart').click(function (){
                $('.start').toggle('fade',40);
            })

            $('.opendrop').click(function (){
                $('.startdrop').toggle('fade',40);
            });

            $('.start-galery').click(function (){
                $('#kategory').toggle('fade',100);
                $('#galerry').delay(200).toggle('fade',200);
            })

            $('.back-galery').click(function (){
                $('#galerry').toggle('fade',100);
                $('#kategory').delay(200).toggle('fade',200);
            })
        })

        /** CALL MY FUNCTION */
        animatehover();
        </script>

        <!-- BACKGROUND DARK FOR DIALOG -->
        <div class="display-non startdrop start darked position-absolute"></div>

        <!-- DIALOG ADD KATEGORY  -->
        <div class="display-non start d-flex flex-row justify-content-center align-items-center">
            <div id="dialog" class="display-non start position-absolute ">
                <div class="exit">
                    <div class="float-right kategorystart">
                        <img src="Media/close.svg" alt="zavrieť dialóg">
                        <span>zavrieť</span>
                    </div>
                </div>
                <div class="mydialog">
                    <div class="p-3">
                        <h4>pridať kategóriu</h4>
                        <div class="myaction clearfix">
                            <label for="kategory"></label>
                            <input id="kategory" type="text" class="mt-2 float-left" placeholder="zadajte názov kategórie">
                            <button type="submit" class="btn btn-mycolor float-right">
                                <img width="10" height="10" src="Media/add_icon.svg" alt="add icon"/>
                                pridať
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- DRAG AND DROP -->
        <section class="display-non  d-flex flex-row justify-content-center  align-items-center">
            <div id="dropzone" class="display-non startdrop  position-absolute">
                <div class="exit">
                    <div class="float-right opendrop">
                        <img src="Media/close.svg" alt="zavrieť drop">
                        <span>zavrieť</span>
                    </div>
                </div>
                <form class="dropzone needsclick" id="dupload" action="/" method="POST" enctype="multipart/form-data">
                    <div class="dz-message m-0 p-0 needsclick">
                            <h4 class="m-0 p-0">pridať fotky</h4>
                        <span class="note needsclick"></span>
                        <div class="w-100 mydrop mt-3 h-50">
                            <img src="Media/fot.svg" alt="Pridať obrázok/y">
                            <h6 class="m-0">sem presunte fotky</h6>
                            <small>alebo</small><br>
                            <button type="button" class="btn select">vyberte subor</button>
                        </div>
                        <button type="submit" class="btn btn-mycolor mt-3 float-right">
                            <img width="10" height="10" src="Media/add_icon.svg" alt="add icon"/>
                            pridať
                        </button>
                    </div>
                </form>
            </div>
        </section>

        <!-- SCRIPT FOR DRAG AND DROP -->
        <script>
            let dropzone = new Dropzone('#dupload', {
                previewTemplate: document.querySelector('#preview-template').innerHTML,
                parallelUploads: 2,
                thumbnailHeight: 120,
                thumbnailWidth: 120,
                maxFilesize: 3,
                filesizeBase: 1000,
                thumbnail: function(file, dataUrl) {
                    if (file.previewElement) {
                        file.previewElement.classList.remove("dz-file-preview");
                        let images = file.previewElement.querySelectorAll("[data-dz-thumbnail]");
                        for (let i = 0; i < images.length; i++) {
                            let thumbnailElement = images[i];
                            thumbnailElement.alt = file.name;
                            thumbnailElement.src = dataUrl;
                        }
                        setTimeout(function() { file.previewElement.classList.add("dz-image-preview"); }, 1);
                    }
                }

            });



            let minSteps = 6,
                maxSteps = 60,
                timeBetweenSteps = 100,
                bytesPerStep = 100000;

            dropzone.uploadFiles = function(files) {
                let self = this;

                let totalSteps;
                for (let i = 0; i < files.length; i++) {

                    let file = files[i];
                    totalSteps = Math.round(Math.min(maxSteps, Math.max(minSteps, file.size / bytesPerStep)));

                    for (let step = 0; step < totalSteps; step++) {
                        let duration = timeBetweenSteps * (step + 1);
                        setTimeout(function (file, totalSteps, step) {
                            return function () {
                                file.upload = {
                                    progress: 100 * (step + 1) / totalSteps,
                                    total: file.size,
                                    bytesSent: (step + 1) * file.size / totalSteps
                                };

                                self.emit('uploadprogress', file, file.upload.progress, file.upload.bytesSent);
                                if (file.upload.progress === 100) {
                                    file.status = Dropzone.SUCCESS;
                                    self.emit("success", file, 'success', null);
                                    self.emit("complete", file);
                                    self.processQueue();
                                    document.getElementsByClassName("dz-success-mark").style.opacity = "1";
                                }
                            };
                        }(file, totalSteps, step), duration);
                    }
                }
            }
        </script>
    </body>
</html>