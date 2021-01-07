

        <!-- Infos Personne Connecté -->
        <section id="informations">
            <h3 class="text-center">Informations</h3>
            <form action="" class="form-group">
                <div class="form-group">
                    <label for="name">Nom : </label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Nom" required>
                </div>
                <div class="form-group">
                    <label for="email">Adresse mail :</label>
                    <input type="text" class="form-control" id="email" name="email" placeholder="Adresse mail" required>
                </div>
                <div class="form-group">
                    <label for="name">Numéro de téléphone :</label>
                    <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Numéro de téléphone" required>
                </div>
                <div class="form-group">
                    <label for="name">Entreprise :</label>
                    <input type="text" class="form-control" id="subject" name="name" placeholder="Entreprise" required>
                </div>
                <div class="form-group">
                    <label for="name">Message :</label>
                    <textarea class="form-control" type="textarea" id="message" placeholder="Message" maxlength="140" rows="7"></textarea>
                </div>
                <div class="form-group">
                    <button type="button" id="enregistrer" name="enregistrer" class="btn btn-primary">Enregistrer</button>
                </div>
            </form>
        </section>

        <style>
            

/* Infomartion */

#informations {
    width: 520px;
    height: 420px;
    left: 35%;
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
    background: url(../img/orange.jpg);
    border-radius: 20px;
    color: #fff;
    margin: 0 33%;
    
  }

  #informations button:hover {
    cursor: pointer;
    background: #ffc107;
    color: #000;
  }
  </style>


