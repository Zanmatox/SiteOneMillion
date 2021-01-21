<link rel="stylesheet" href="../public/assets/css/achatpixel.css">



<form action="achat/insert" method="POST">
    <div class="container choixpixel  ">
        <div class="format1" value="carré">
            <h2> Forme de l'image </h2>
        </div>
        <div class="column">

            <div class="choixforme ">
                <h3>carré</h3>
                <img class="" src="../../public/assets/img/achatpixel/carré.jpg">
                <h3>10x10 pixels</h3>
            </div>
            <input type="radio" id="carré" name="format" value="carré" <?php echo ($format == 'carré') ? 'checked' : 'checked' ?>>
        </div>

        <div class="column">
            <div class="choixforme">
                <h3>rectangle en longueur</h3>
                <img class="" src="../../public/assets/img/achatpixel/rectanglelong.jpg">
                <h3>10x20 pixels</h3>
            </div>
            <input type="radio" id="rectlong" name="format" value="rectanglelong" <?php echo ($format == 'rectlong') ? 'checked' : '' ?>>
        </div>
        <div class="column">
            <div class="choixforme">
                <h3>rectangle en hauteur</h3>
                <img class="" src="../../public/assets/img/achatpixel/rectanglehaut.jpg">
                <h3>20x10 pixels</h3>
            </div>
            <input type="radio" id="recthaut" name="format" value="rectanglehaut" <?php echo ($format == 'recthaut') ? 'checked' : '' ?>>
        </div>
    </div>
    <div class="container">
        <div class="format2" value="carré">
            <h2> Taille de l'image </h2>
        </div>
        <div class="column2">
            <input type="range" min="1" value="1" max="10" oninput="valid.value = this.value">
            <output>1 </output>
            <button class="submit" href="<?php echo base_url('achat/ajoutimagedanspixel'); ?>" rel="stylesheet"> Valider </button>
        </div>
        <div class="column2">
            <input id="valid" type="text" class="text" value=""> pixels
        </div>
    </div>
</form>
