<?php session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Connection</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js"></script>
</head>

<body>
  <?php
if (isset($_SESSION['id_user'])) {

  header('location:../accueil.php');
  ?>

  
  <!-- Add New User Modal End -->
  <?php }else{
    ?>
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
          <h5 class="modal-title">Connection</h5>
         
        </div>
        <div class="modal-body">
          <form id="add-user-form" class="p-2" novalidate>
            <div class="row mb-3 gx-3">
              

            <div class="mb-3">
              <input type="text" name="identifiant" class="form-control form-control-lg" placeholder="Entrer votre entreprise/ adresse e-mail" required>
              <div class="invalid-feedback">Nom d'entreprise / adresse e-mail est requis</div>
            </div>

            <div class="mb-3">
              <input type="password" name="mdp" class="form-control form-control-lg" placeholder="Entrer votre mot de passe" required>
              <div class="invalid-feedback">Mot de passe requis</div>
            </div>

            <div class="mb-3">
              <input type="submit" value="Connection" class="btn btn-primary btn-block btn-lg" id="add-user-btn">
            </div>
            <hr>
            <div class="mb-3">
                Pas encore inscrit ? <a href=inscription.php>Inscrivez-vous.</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <?php } ?>

    
  <script src="../assets/js/connection.js"></script>
</body>
</html>