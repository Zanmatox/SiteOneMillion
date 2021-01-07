
<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Page de création de compte</title>
        <link rel="stylesheet" type="text/css" href="../css/signin.css">
    </head>
    <body>
        <div class="signinbox"> 
            <img src="../img/avatar_orange.png" class="avatar">
            <h1>Creation de compte</h1>
            <form>
                <p>Nom d'utilisateur</p>
                <input type="text" id="name" name="" placeholder="Choissisez votre nom d'utilisateur">
                <p>Mot de passe</p>
                <input type="text" id="password" name="" placeholder="Choissisez votre mot de passe">
                <p>Adresse email</p>
                <input type="email" id="email" name="" placeholder="Entrez votre adresse email">
                <p>Numero de SIRET (facultatif)</p>
                <input type="text" id="siret" name="" placeholder="Votre numero de SIRET">
                <input type="submit" name="" value="Valider">
                <a href="<?php echo base_url("/onemillioneuros/login")?>">Vous avez déjà un compte?</a>
            </form>
        </div>
    </body>
</html>