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
                <a class="nav-link text-light" href="#">Commande</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light" href="candidature.php">Candidature</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light" href="user.php">Pannel utilisateur</a>
              </li>


            </ul>
          </div>
        </div>
    </nav>
  </div>
<!-- Add New User Modal Start -->

          <form id="add-user-form" class="p-2" novalidate>

          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- Add New User Modal End -->


  <div class="container">
    <div class="row mt-4">
      <div class="col-lg-12 d-flex justify-content-between align-items-center">
        <div>
          <h4 class="text-primary">Commandes</h4>
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
                <th>Adresse</th>
                <th>Code postal</th>
                <th>Ville</th>
                <th>Pays</th>
                <th>Objet</th>
                <th>Message</th>
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
  <script src="../assets/js/crud.js"></script>
</body>
</html>