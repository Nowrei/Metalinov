<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="https:////cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="../assets/styles/footer.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
<?php include '../assets/include/navbarre-contact.php' ?>
<div class="row">
      <div class="col-lg-12">
        <div id="showAlert"></div>
      </div>
    </div>
<div class="" tabindex="-1" id="addNewUserModal">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header mt">
          <h5 class="modal-title p-3 fw-bold">Contactez-nous</h5>
         
        </div>
        <div class="modal-body">
          <form id="add-user-form" class="p-2" novalidate>
            <div class="row mb-3 gx-3">
              

            <div class="mb-3 w-50 p-3 mx-auto my-auto">
              <input type="text" class="form-control form-control-lg" placeholder="Adresse" id="adresse" name="adresse" autocomplete="off" data-toggle="tooltip" data-placement="top" title="Ce champ est intelligent pour toute adresse se stiuant en france" required>
        <div class="address-feedback position-absolute list-group" style="z-index:1100;">
        </div>
              <div class="invalid-feedback">Une adresse est requise</div>
            </div>

            <div class="mb-3 w-50 p-3 mx-auto my-auto">
              <input type="text" name="cp" id="cp" class="form-control form-control-lg" placeholder="Code postal" required>
              <div class="invalid-feedback">Un code postal est requis</div>
            </div>

            <div class="mb-3 w-50 p-3 mx-auto my-auto">
              <input type="text" name="ville" id="ville" class="form-control form-control-lg" placeholder="Ville" required>
              <div class="invalid-feedback">Une ville est requis</div>
            </div>

            <div class="mb-3 w-50 p-3  ">
              <input type="text" name="poste" class="form-control form-control-lg" placeholder="Poste souhaité" required>
              <div class="invalid-feedback">Veuillez inscrire le poste souhaité</div>
            </div>

            <div class="mb-3 ">
              <textarea type="text" class="form-control form-control-lg" placeholder="Message" name="message" style="height : 100px" required></textarea>
              <div class="invalid-feedback">Un message est requis!</div>
            </div>

            <div class="mb-3 ">
            <input type="file" name="file">
            <div class="invalid-feedback">Inséré une image</div>
            </div>
            

            <div class="mb-3 w-25">
              <input type="submit" value="Envoyer" class="btn btn-primary btn-block btn-lg" id="ajouter-candidature">
            </div>
            
          </form>
        </div>
      </div>
    </div>
  </div>
  <?php include '../assets/include/footer-info.php' ?>
<script src="../assets/js/auto.js"></script>
<script src="../assets/js/candidature.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</body>