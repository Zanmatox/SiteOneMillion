<link rel="stylesheet" href="../public/assets/css/achatpixel.css">



<form action="" method="POST">
<div class="container choixpixel  ">
    <div class="format1" value="carré">
        <h2> Forme de l'image </h2>
    </div>
    <div class="column">

        <div class="choixforme ">
            <h3>carré</h3>
            <!-- Modifier le path pour la mise en commun -->
            <img class=" " src="/mywork/SiteOneMillion/public/assets/img/achatpixel/carré.jpg">
            <h3>10x10 pixels</h3>
        </div>
        <input type="radio" id="carré" name="format" value="carré" <?php echo ($format == 'carré') ? 'checked' : 'checked' ?>>
    </div>

    <div class="column">
        <div class="choixforme">
            <h3>rectangle en longueur</h3>
            <!-- Modifier le path pour la mise en commun -->
            <img class="" src="/mywork/SiteOneMillion/public/assets/img/achatpixel/rectanglelong.jpg">
            <h3>10x15 pixels</h3>
        </div>
        <input type="radio" id="rectanglelong" name="format" value="rectanglelong" <?php echo ($format == 'rectlong') ? 'checked' : '' ?>>
    </div>
    <div class="column">
        <div class="choixforme">
            <h3>rectangle en hauteur</h3>
            <!-- Modifier le path pour la mise en commun -->
            <img class="" src="/mywork/SiteOneMillion/public/assets/img/achatpixel/rectanglehaut.jpg">
            <h3>15x10 pixels</h3>
        </div>
        <input type="radio" id="rectanglehaut" name="format" value="rectanglehaut" <?php echo ($format == 'recthaut') ? 'checked' : '' ?>>
    </div>
</div>

<div class="container">
    <div class="format2" value="carré">
        <h2> Taille de l'image </h2>
    </div>
    <div class="column2">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <input type="range" id="myRange" value="1" max="20">
        <div id="rangeValue">1</div>
    </div>
</form>
    <div class="column2">
<input type="text" class="text" value=""> pixels
    </div>
    <button class="submit" href="<?php echo base_url('site_assos/lightbox2-2.11.3/dist/css/lightbox.css'); ?>" rel="stylesheet" > Valider </button>
</div>






<!-- <div class="row mx-1">
    <div class="col-md-7 col-lg-7 col-sm-12 col-xs-12 " style="background-color:#E8D4B4;">
        <div class="row ">
            <div class="container showpixel"> -->
<!-- Aperçu de la 1 million euro page -->
<!-- <img src="/SiteOneMillion/public/assets/img/achatpixel/emptyShapeImage.jpg">

            </div>
        </div>
        <div class="row ">
            <div class="w-100">
                <p> Apperçu de la page</p>
                <div style="border: solid 2px orangered;">
                    <p>
                        <img src="/SiteOneMillion/public/assets/img/achatpixel/redsquare.png" class="smallsquares" alt="">
                        emplacements indisponibles
                    </p> -->
<!-- carré rouge -->
<!-- <p>
                        <img src="/SiteOneMillion/public/assets/img/achatpixel/greysquare1.jpg" class="smallsquares" alt="">
                        emplacements disponibles
                    </p> -->
<!-- carré gris -->
<!-- <p>
                        <img src="/SiteOneMillion/public/assets/img/achatpixel/white square.jpg" class="border border-warning smallsquares" alt="">
                        emplacements à forte demande
                    </p> -->
<!-- carré vide jaune -->
<!-- <p>
                        <img src="/SiteOneMillion/public/assets/img/achatpixel/blue square.svg" class="smallsquares" alt="">
                        votre emplacement
                    </p> -->
<!-- carré bleu -->
<!-- </div>
            </div>
        </div>
    </div>
    <div class="col-md-5 col-lg-5 col-sm-12 col-xs-12 descriachatpixel" style="background-color:#E8D4B4;">
        <div class="row mt-2">
            <div class="col-2">
                <input name="nbPixels" class="form-control test py-1" placeholder="0" type="text" disabled>
            </div>
            <div class="col choixforme ml-3 py-1 textPrice">
                pixels
            </div>
            <div class="col-2">
                <input name="priceEuro" class="form-control test" placeholder="0" type="text" disabled>
            </div>
            <div class="col-1 ml-3 py-1 textPrice">
                €
            </div>
        </div>
        <div class="row">
            <form class="w-100 px-1">
                <div class="form-group mt-5 " style="text-align: center;">
                    <label for="exampleFormControlFile1">
                        Rendu de l'image
                    </label>
                    <div class="container containerEssai">
                    </div>
                    <input type="file" class="form-control-file" id="exampleFormControlFile1">
                </div>
            </form>
        </div>
        <div class="row px-3">
            <button type="submit" class="btn validerAchat">Valider</button>
        </div>
    </div>
</div> -->