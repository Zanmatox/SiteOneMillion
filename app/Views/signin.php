
<link rel="stylesheet" type="text/css" href="../public/assets/css/signin.css">
        <div class="signinbox"> 
            <img src="../public/assets/img/avatar_orange.png" class="avatar">
            <h1>Creation de compte</h1>
            <form class="" action="<?php echo base_url('/Login/signin') ?>" method="post">
                <p>Nom d'utilisateur</p>
                <input class="form-control" type="text" id="name" name="nom" value="">
                <p>Adresse email</p>
                <input class="form-control" type="email" id="email" name="email" value="">
                <p>Mot de passe</p>
                <input class="form-control" type="password" id="mdp" name="mdp" placeholder="Entrez un mot de passe">
                <p>Confirm Password</p>
                <input class="form-control" type="password" id="password_confirm" name="password_confirm" placeholder="Confirmez votre mot de passe">
                <p>Numero de SIRET (facultatif)</p>
                <input class="form-control" type="text" id="siret" name="siret" value="">

                <?php if (isset($validation)): ?>
                <div class="col-12">
                    <div class="alert alert-danger" role="alert">
                        <?= $validation->listErrors() ?>
                    </div>
                </div>
                <?php endif; ?>
                <input type="submit" name="save" value="Valider">
                <a href="<?php echo base_url("/login")?>">Vous avez déjà un compte?</a>
                
            </form>
        </div>
    