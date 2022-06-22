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

  
</head>

<body>
<div class="row">
      <div class="col-lg-12">
        <div id="showAlert"></div>
      </div>
    </div>
<div class="" tabindex="-1" id="addNewUserModal">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title">Contactez-nous</h3>
         
        </div>
        <div class="modal-body">
          <form id="add-user-form" class="p-2" novalidate>
            <div class="row mb-3 gx-3">
              

            <div class="mb-3">
              <input type="text" class="form-control form-control-lg" placeholder="Entrez votre adresse" id="adresse" name="adresse" autocomplete="off" data-toggle="tooltip" data-placement="top" title="Ce champ est intelligent pour toute adresse se stiuant en france" required>
        <div class="address-feedback position-absolute list-group" style="z-index:1100;">
        </div>
              <div class="invalid-feedback">Une adresse est requise</div>
            </div>

            <div class="mb-3">
              <input type="text" name="cp" id="cp" class="form-control form-control-lg" placeholder="Entrer votre code postal" required>
              <div class="invalid-feedback">Un code postal est requis</div>
            </div>

            <div class="mb-3">
              <input type="text" name="ville" id="ville" class="form-control form-control-lg" placeholder="Entrer le nom de votre ville" required>
              <div class="invalid-feedback">Une ville est requis</div>
            </div>

            <div class="mb-3">
              <input type="text" class="form-control form-control-lg" name="pays" placeholder="Entrer votre pays" required>
              <div class="invalid-feedback">Une ville est requis</div>
            </div>
            
            <div class="mb-3">
              <input type="text" name="objet" class="form-control form-control-lg" placeholder="Objet du message" required>
              <div class="invalid-feedback">Veuillez inscrire l'objet de votre message</div>
            </div>

            <div class="mb-3">
              <textarea type="text" class="form-control form-control-lg" placeholde="Laissez votre message ici" name="message" style="height : 100px" required></textarea>
              <div class="invalid-feedback">Un message est requis!</div>
            </div>
            

            <div class="mb-3">
              <input type="submit" value="Ajouter Utilisateur" class="btn btn-primary btn-block btn-lg" id="add-user-btn">
            </div>
            
          </form>
        </div>
      </div>
    </div>
  </div>
<script src="assets/js/auto.js"></script>
<script src="assets/js/contact.js"></script>

</body>