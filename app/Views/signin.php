
<link rel="stylesheet" type="text/css" href="../public/assets/css/signin.css">
        <div class="signinbox"> 
            <img src="../public/assets/img/avatar_orange.png" class="avatar">
            <h1>Creation de compte</h1>
            <form>
                <p>Nom d'utilisateur</p>
                <input type="text" id="name" name="Pseudo" placeholder="Choissisez votre nom d'utilisateur" required>
                <p>Mot de passe</p>
                <input type="text" id="password" name="Mdp" placeholder="Choissisez votre mot de passe" required>
                <p>Adresse email</p>
                <input type="email" id="email" name="Email" placeholder="Entrez votre adresse email" required>
                <p>Numero de SIRET (facultatif)</p>
                <input type="text" id="siret" name="SIRET" placeholder="Votre numero de SIRET">
                <input type="submit" name="save" value="Valider">
                <a href="<?php echo base_url("/login")?>">Vous avez déjà un compte?</a>
                
            </form>
        </div>
    