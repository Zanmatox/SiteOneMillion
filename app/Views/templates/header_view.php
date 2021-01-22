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

  <!-- Header -->
  <header>
            <?php
                $uri = service('uri');
            ?>
            <!-- Navigation -->
            <nav class="navbar">
                <div class="navLeft">One Million Euros</div>
                    <?php if (isset($_SESSION['utilisateurConnecte_email'])): ?>
                        <label for="chkBox" id="responsiveButton">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </label>
                        <input type="checkbox" id="chkBox">
                        <div class="navRight">
                            <ul>
                                <li>
                                    <a href="<?php echo base_url("")?>">Home</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url("/Infos")?>">Compte</a>
                                </li>
                                <li>
                                    <a href="<?= base_url("/Achat")?>">Achat</a>
                                </li>
                                <li>
                                    <a href="<?= base_url("/Login/logout")?>">Logout</a>
                                </li>
                            </ul>
                        </div>
                    <?php endif; ?>
                    <?php if (!isset($_SESSION['utilisateurConnecte_email'])): ?>
                        <label for="chkBox" id="responsiveButton">
                            <span></span>
                            <span></span>
                        </label>
                        <input type="checkbox" id="chkBox">
                        <div class="navRight">
                            <ul>
                                <li>
                                    <a href="<?php echo base_url("")?>">Home</a>
                                </li>
                                <li>
                                    <a href="<?= base_url("/Login")?>">Log In</a>
                                </li>
                            </ul>
                        </div>
                    <?php endif; ?>
                        
                </div>
            </nav>
                <!-- End Navigation -->
      </header>
      <!-- End Header -->