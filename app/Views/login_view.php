<!DOCTYPE html>
<html>
<head>
    <!--Header login-->
    <title>Page de connexion</title>
    <link rel="stylesheet" type="text/css" href="public/assets/css/login.css">

</head>
<body>
    <div class="loginbox">
        <img src="public/assets/img/avatar_orange.png" class="avatar">
        <h1>Connexion</h1>
        <!--form-->
        <form class="" action="<?php echo base_url('/Login') ?>" method="post">

            <p>Email</p>
            <input type="email" class="form-control" name="email" id="email" value="">
            <p>Mot de passe</p>
            <input type="password" class="form-control" name="mdp" id="mdp" value="">

            <?php if (isset($validation)): ?>
            <div class="col-12">
              <div class="alert alert-danger" role="alert">
                <?= $validation->listErrors() ?>
              </div>
            </div>
            <?php endif; ?>

            <input type="submit" name="" value="Connexion">
            <a href="<?php echo base_url("/login/mdpoublie")?>">Mot de passe oublié?</a><br>
            <a href="<?php echo base_url("/login/signin")?>">Pas de compte?</a>
        </form>
        
    </div>

</body>
</html>
