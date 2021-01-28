<!DOCTYPE html>
<html lang="fr">
<head>
<title>Page de suppression du compte</title>
    <link rel="stylesheet" type="text/css" href="../public/assets/css/deleteacc.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
<body>
    <div class="deletebox">
        <h1>Suppression du compte</h1>
        <form action="<?php echo base_url('/Login/deleteacc') ?>" class="form-group" method="post">

            <p>Voulez vous vraiment supprimer votre compte?</p>
            <input type="email" name="email" placeholder="Entrez votre email" class='form-control'>
            
            <?php
            if(isset($validation)): ?>
            <div class="alert alert-danger">
            <?=$validation->listErrors()?>
            </div>
            <?php endif;?>
            
            <input class="form-control" type="password" id="mdp" name="mdp" placeholder="Entrez votre mot de passe">
            <div class='form-group'>

            <input class="Oui" type="submit" name="delete" value="Supprimer">
            <input type="checkbox" id="no">
            <label for="no" class="Non"><a href="<?php echo base_url("")?>">Retour</a></label>
            <!--<div class="content">
                <div class="header">
                    <h2>Finalisation suppression</h2>
                    <label for="click" class="fas fa-times"></label>
                </div>
                <label for="click" class="fas fa-check"></label>
                <p>Un email vous a été envoyer pour finaliser la suppression de votre compte</p>
                <div class="line"></div>
                <label for="click" class="close-btn">Fermer</label>-->
            </div>
        </div>
        </form> 
        
    </div>

</body>
</head>
</html>

