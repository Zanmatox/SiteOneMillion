
    <link rel="stylesheet" type="text/css" href="../public/assets/css/mdpoublie.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <div class="box">
        <h1>Renvois de mot de passe</h1>
        <form>
            <br>
            <p>Veuillez entrer l'adresse mail utilisée lors de la création du compte</p>
            <input type="email" name="email" placeholder="Entrez votre email"class='form-control'>
            <?php
            if(isset($validation)): ?>
            <div class="alert alert-danger">
            <?=$validation->listErrors()?>
            </div>
            <?php endif;?>
<div class='form-group'>
<a href="<?php echo base_url("/login/mdpoublie")?>">Mot de passe oublié?</a>

        
        <!--<div class="center">
            <input type="checkbox" id="click">
            <label for="click" class="Oui">Entrer</label>
            <div class="content">
                <div class="header">
                    <h2>Finalisation envois du mdp</h2>
                    <label for="click" class="fas fa-times"></label>
                </div>
                <label for="click" class="fas fa-check"></label>
                <p>Un email vous a été envoyer contenant votre mot de passe</p>
                <div class="line"></div>
                <label for="click" class="close-btn">Fermer</label>-->
            </div>
        </div>
        </form> 
    </div>




