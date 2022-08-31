<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gestion-utilisateur</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js"></script>
</head>

<body>
<div class="sticky-top">
    <nav class="navbar navbar-dark bg-secondary text-light">
      <div class="container justify-content-between">
        <div class="d-none d-lg-block">
          <a href="index.php" class="navbar-brand"><img src="assets/img/logo-removebg-preview.png" alt=""  height="30"></a>
        </div>
        <div class="navbar navbar-expand-lg">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-content"
            aria-controls="navbar-content" aria-expanded="false" aria-label="toggle-navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbar-content">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link text-light" href="commande.php">Commande</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light" href="candidature.php">Candidature</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light" href="#">Pannel utilisateur</a>
              </li>


            </ul>
          </div>
        </div>
    </nav>
  </div>
  <!-- Add New User Modal Start -->
  <div class="modal fade" tabindex="-1" id="addNewUserModal">
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
      
            <select class="form-select" aria-label="Default select example" name="role">
  <option selected>Open this select menu</option>
  <option value="1">1</option>
  <option value="2">2</option>

</select>



            <div class="mb-3">
              <input type="submit" value="S'inscrire" class="btn btn-primary btn-block btn-lg" id="add-user-btn">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- Add New User Modal End -->

  <!-- Edit User Modal Start -->
  <div class="modal fade" tabindex="-1" id="editUserModal">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Editer un utilisateur</h5>
          <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form id="edit-user-form" class="p-2" novalidate>
            <input type="hidden" name="id" id="id">
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
            <select class="form-select" aria-label="Default select example" name="role" id="role">
  <option selected>Open this select menu</option>
  <option value="1">1</option>
  <option value="2">2</option>

</select>
            </div>

            <div class="mb-3">
              <input type="submit" value="Update Utilisateur" class="btn btn-success btn-block btn-lg" id="edit-user-btn">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- Edit User Modal End -->
  <div class="container">
    <div class="row mt-4">
      <div class="col-lg-12 d-flex justify-content-between align-items-center">
        <div>
          <h4 class="text-primary">Tout les utilisateur en base de donnée</h4>
        </div>
        <div>
          <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#addNewUserModal">Ajouter un utilisateur</button>
        </div>
      </div>
    </div>
    <hr>
    <div class="row">
      <div class="col-lg-12">
        <div id="showAlert"></div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <div class="table-responsive">
          <table class="table table-striped table-bordered text-center">
            <thead>
              <tr>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Telephone</th>
                <th>Email</th>
                <th>Role</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <script src="../assets/js/crud_user.js"></script>
</body>
</html>
