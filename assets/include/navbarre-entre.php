<div class="sticky-top">
    <nav class="navbar navbar-dark bg-secondary text-light">
      <div class="container justify-content-between">
        <div class="d-none d-lg-block">
          <a href="../index.php"><img src="../assets/img/logo-removebg-preview.png" alt=""  height="30"></a>
        </div>
        <div class="navbar navbar-expand-lg">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-content"
            aria-controls="navbar-content" aria-expanded="false" aria-label="toggle-navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbar-content">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link text-light" href="#">L'entreprise</a>
              </li>
     <div class="dropdown">
<a class="nav-link dropdown-toggle text-light" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Nos fabrications
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDarkDropdownMenuLink">
            <li><a class="dropdown-item" href="../information/information.php">Informations</a></li>
            <li><a class="dropdown-item" href="../information/couverture-tole.php">Couverture tôle</a></li>
            <li><a class="dropdown-item" href="../information/couverture-fibro.php">Couverture fibro</a></li>
          </ul>
</div> 
<div class="dropdown">
<a class="nav-link dropdown-toggle text-light" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Profil
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDarkDropdownMenuLink">
          <?php 
            if (isset($_SESSION['entreprise_entreprise'])) {
              ?>
            <a class="dropdown-item" href="contact.php">Contact</a>
            <?php 
              if(isset($_SESSION['nom_candidat'])) { ?>
            <li><a class="dropdown-item" href="projet.php" >Ajouter un projet</a></li>
            <li><a class="dropdown-item" href="crud_projet.php" >Gestion projet</a></li>
            <li><a class="dropdown-item" href="utilisateur.php" >Gestion utilisateurs</a></li>
            <li><a class="dropdown-item" href="assets/php/deconnection.php" >Se déconnecter</a></li>

            <?php }else {?>
            <li><a class="dropdown-item" href="projet.php" >Ajouter un projet</a></li>
            <li><a class="dropdown-item" href="assets/php/deconnection.php" >Se déconnecter</a></li>
            <?php } ?>
            <?php }else { ?>
            <li><a class="dropdown-item" href="connection.php" >Connection</a></li>
            <li><a class="dropdown-item" href="inscription.php" >Inscription</a></li>
            
            <?php } ?>

          </ul>
</div> 
              </li>
              <li class="nav-item">
                <a class="nav-link text-light" href="https://www.agristandard2000.fr/" target="_blank" rel="noopener noreferrer">Site Agristandard 2000</a>
              </li>
            </ul>
          </div>
        </div>
    </nav>
  </div>