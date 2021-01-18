<!DOCTYPE html>
<html>
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Projet OME</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="public/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="../public/assets/css/style.css">
 
  </head>

  <body>
      <!-- Header -->
      <header>
          <!-- Section -->
            <section id="header">
                <?php
                    $uri = service('uri');
                ?>
                <!-- Navigation -->
                <nav class="navbar navbar-default navbar-fixed-top">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                            </button>
                            <a class="navbar-brand" href="<?php echo base_url("")?>">One Million Euros</a>
                        </div>
                        <div class="collapse navbar-collapse" id="myNavbar">
                        <?php if (isset($_SESSION['utilisateurConnecte_email'])): ?>
                            <ul class="nav navbar-nav navbar-right">
                                <li class="nav-item ">
                                    <a class="nav-link tm-nav-link"  href="<?php echo base_url("")?>">Home</a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link tm-nav-link"  href="<?php echo base_url("/Infos")?>">Compte</a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link tm-nav-link"  href="<?= base_url("/Achat")?>">Achat</a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" href="<?= base_url("/Login/logout")?>">Logout</a>
                                </li>
                            </ul>
                            <?php endif; ?>
                            <?php if (!isset($_SESSION['utilisateurConnecte_email'])): ?>
                            <ul class="nav navbar-nav navbar-right">
                                <li class="nav-item ">
                                    <a class="nav-link tm-nav-link"  href="<?php echo base_url("")?>">Home</a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link tm-nav-link"  href="<?= base_url("/Login")?>">Log In</a>
                                </li>
                            </ul>
                            <?php endif; ?>
                        </div>
                    </div>
                </nav>
                <!-- End Navigation -->
            </section>
            <!-- End Section -->
      </header>
      <!-- End Header -->


