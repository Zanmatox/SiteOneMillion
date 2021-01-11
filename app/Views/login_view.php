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
        <form class="" action="/" method="post">

            <p>Email</p>
            <!--label for="email">Email</label-->
            <input type="text" class="form-control" name="email" id="email" placeholder="<?= set_value('email') ?>">
            <!--imput type="text" class="form-control" name="email" id="email" value="<?= set_value('email') ?>"-->
            <p>Mot de passe</p>
            <!--label for="password">Mot de passe</label-->
            <input type="password" class="form-control" name="password" id="password" placeholder="Entrez votre mot de passe">
            <!--imput type="text" class="form-control" name="password" id="password" value=""-->
            <input type="submit" name="" value="Connexion">
            <a href="<?php echo base_url("/mdpoublie")?>">Mot de passe oublié?</a><br>
            <a href="<?php echo base_url("/signin")?>">Pas de compte?</a>
        </form>
        
    </div>

</body>
</html>

<style>
    body{
    margin: 0;
    padding: 0;
    background:#f6f6f6;
    background-size: cover;
    background-position: center;
    font-family: sans-serif;
}

.loginbox{
    width: 320px;
    height: 420px;
    background: rgb(63, 62, 62);
    color: #fff;
    top: 50%;
    left: 50%;
    position: absolute;
    transform: translate(-50%,-50%);
    box-sizing: border-box;
    padding: 70px 30px;
}

.avatar{
    width: 100px;
    height: 100px;
    border-radius: 50%;
    position: absolute;
    top: -50px;
    left: calc(50% - 50px);
}

h1{
    margin: 0;
    padding: 0 0 20px;
    text-align: center;
    font-size: 22px;
}

.loginbox p{
    margin: 0;
    padding: 0;
    font-weight: bold;
}

.loginbox input{
    width: 100%;
    margin-bottom: 20px;
}

.loginbox input[type="text"], input[type="password"]
{
    border: none;
    border-bottom: 1px solid #fff;
    background: transparent;
    outline: none;
    height: 40px;
    color: #fff;
    font-size: 16px;
}
.loginbox input[type="submit"]
{
    border: none;
    outline: none;
    height: 40px;
    background: url(../css/img/orange.jpg);
    color: #fff;
    font-size: 18px;
    border-radius: 20px;
}
.loginbox input[type="submit"]:hover
{
    cursor: pointer;
    background: #ffc107;
    color: #000;
}
.loginbox a{
    text-decoration: none;
    font-size: 12px;
    line-height: 20px;
    color: darkgrey;
}

.loginbox a:hover
{
    color: #ffc107;
}
</style>