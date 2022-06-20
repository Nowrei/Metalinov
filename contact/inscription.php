<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inscription</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js"></script>
</head>

<body>
<div class="row">
      <div class="col-lg-12">
        <div id="showAlert"></div>
      </div>
    </div>
  <!-- Add New User Modal Start -->
  <div class="" tabindex="-1" id="addNewUserModal">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Inscription</h5>
         
        </div>
        <div class="modal-body">
          <form id="add-user-form" class="p-2" novalidate>
            <div class="row mb-3 gx-3">
              <div class="col">
                <input type="text" name="nom" class="form-control form-control-lg" placeholder="Nom" required>
                <div class="invalid-feedback">Un nom est requis!</div>
              </div>

              <div class="col">
                <input type="text" name="prenom" class="form-control form-control-lg" placeholder="Prenom" required>
                <div class="invalid-feedback">Un prenom est requis!</div>
              </div>
            </div>

            <div class="mb-3">
              <input type="text" name="entreprise" class="form-control form-control-lg" placeholder="Entrer le nom de votre entreprise" required>
              <div class="invalid-feedback">Un nom d'entreprise est requis!</div>
            </div>
            <div class="mb-3">
              <input type="text" name="phone" class="form-control form-control-lg" placeholder="Entrer un numéro de téléphone" required>
              <div class="invalid-feedback">Un numéro de téléphone est requis!</div>
            </div>

            <div class="mb-3">
              <input type="text" name="mail" class="form-control form-control-lg" placeholder="Entrer une adresse E-mail" required>
              <div class="invalid-feedback">Un E-mail est requis!</div>
            </div>
            <div class="mb-3">
              <input type="password" name="mdp" class="form-control form-control-lg" placeholder="Entrer un mot de passe" required>
              <div class="invalid-feedback">Un mot de passe est requis!</div>
            </div>
            <div class="mb-3">
              <input type="password" name="mdp1" class="form-control form-control-lg" placeholder="Confirmer le mot de passe" required>
              <div class="invalid-feedback">Un mot de passe est requis</div>
            </div>



            <div class="mb-3">
              <input type="submit" value="Ajouter Utilisateur" class="btn btn-primary btn-block btn-lg" id="add-user-btn">
            </div>
            <hr>
            <div class="mb-3">
                Déjà inscris ? <a href="connection.php">Connectez-vous</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- Add New User Modal End -->


    
  <script src="../assets/js/main.js"></script>
</body>
</html>