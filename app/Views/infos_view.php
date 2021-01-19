
        <link rel="stylesheet" type="text/css" href="public/assets/css/infos.css">

        <!-- Infos Personne Connecté -->
        <section class="informations">
            <h3 class="text-center">Informations</h3>
            <?php if (session()->get('success')): ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->get('success') ?>
                    
                </div>
            <?php endif; ?>

            <form action="<?php echo base_url('/Infos') ?>" class="form-group" method="post">
                <div class="form-group">
                    <div>
                    <label for="nom">Nom : </label>
                    <input type="text" class="form-control" id="nom" name="nom" value="<?= $_SESSION['utilisateurConnecte_nom']; ?>">
                    </div>
                    <div>
                    <label for="nom">Prénom : </label>
                    <input type="text" class="form-control" id="prenom" name="prenom" value="<?= $_SESSION['utilisateurConnecte_prenom']; ?>">
                    </div>

                </div>
                
                <div class="form-group">
                    <label for="email">Email :</label>
                    <input type="text" class="form-control" id="email" name="email" value="<?= $_SESSION['utilisateurConnecte_email']; ?>">
               
                </div>
                <div class="form-group">
                    <label for="siret">Numero de SIRET :</label>
                    <input type="text" class="form-control" id="siret" name="siret" value="<?= $_SESSION['utilisateurConnecte_siret']; ?>">
                    

                </div>
                <div class="form-group">
                    <label for="password">Mot de passe :</label>
                    <input type="password" class="form-control" id="mdp" name="mdp" value="" placeholder="Entrez votre mot de passe">
                    <label for="password">Confirmez Mot de passe :</label>
                    <input type="password" class="form-control" id="password_confirm" name="password_confirm" value="" placeholder="Entrez votre mot de passe">

                    <?php if (isset($validation)): ?>
                        <div class="col-12">
                            <div class="alert alert-danger" role="alert">
                                <?= $validation->listErrors() ?>
                            </div>
                        </div>
                    <?php endif; ?>

                </div>
                <div class="form-group">
                    <button type="submit" id="enregistrer" name="enregistrer" class="btn btn-primary">Enregistrer</button>
                </div>
            </form>
        </section>

        <!--style>
            

/* Infomartion */

#informations {
    width: 520px;
    height: 420px;
    left: 33%;
    position: sticky;
    padding: 60px 50px;
}

  #informations label{
    margin: 0;
    padding: 0;
    font-weight: bold;
  }

  #informations input{
    margin-bottom: 10px;
    width: 100%;
  }

  #informations button{
    border: none;
    outline: none;
    height: 40px;
    background: url(public/assets/img/orange.jpg);
    border-radius: 20px;
    color: #fff;
    margin: 0 40%;
    
  }

  #informations button:hover {
    cursor: pointer;
    background: #ffc107;
    color: #000;
  }
  </style-->


