<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="https:////cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="../assets/styles/contact.css">
    <link rel="stylesheet" href="../assets/styles/footer.css">
  
</head>

<body>
<?php include '../assets/include/navbarre-contact.php' ?>
<form method="post" action="traitement.php" id="form">
<div class="container">
<h2>Contactez-nous</h2>
    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label for="nom">Nom</label>
          <input type="text" class="form-control" placeholder="Nom" id="nom">
        </div>
      </div>
      <!--  col-md-6   -->

      <div class="col-md-6">
        <div class="form-group">
          <label for="prenom">Prénom</label>
          <input type="text" class="form-control" placeholder="Prénom" id="prenom">
        </div>
      </div>
      <!--  col-md-6   -->
    </div>


    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label for="societe">Société</label>
          <input type="text" class="form-control" placeholder="Société" id="societe">
        </div>


      </div>
      <!--  col-md-6   -->

      <div class="col-md-6">

        <div class="form-group">
          <label for="phone">Téléphone</label>
          <input type="tel" class="form-control" id="phone" placeholder="Téléphone">
        </div>
      </div>
      <!--  col-md-6   -->
    </div>
    <!--  row   -->


    <div class="row">
      <div class="col-md-6">

        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" class="form-control" id="email" placeholder="Email">
        </div>
      </div>
      <!--  col-md-6   -->
      <!--  col-md-6   -->
    </div>
    <!--  row   -->
  <form id="modal_form" action="process_form.php" method="post">
    <div class="form-row">
      <div class="form-group col">
        <label for="adresse" class="control-label">Adresse</label>
        <input type="text" class="form-control" id="adresse" name="adresse" autocomplete="off" data-toggle="tooltip" data-placement="top" title="Ce champ est intelligent pour toute adresse se stiuant en france" />
        <div class="address-feedback position-absolute list-group" style="z-index:1100;">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <label for="cp" class="control-label">Code Postal</label>
        <input type="text" class="form-control" id="cp" name="code" />
      </div>
      <div class="col-md-6">
        <label for="ville">Ville</label>
        <input type="text" class="form-control" id="ville" name="ville" required />
      </div>   
  </form>
  <div class="row">
      <div class="col-md-6">

        <div class="form-group">
          <label for="Pays">Pays</label>
          <select class="form-select" aria-label="Default select example">
            <option selected>France</option>
            <option value="1">Allemagne</option>
            <option value="2">Belgique</option>
            <option value="3">Suisse</option>
            <option value="4">Italie</option>
            <option value="5">Luxembourg</option>7
            <option value="6">Espagne</option>
</select>
        </div>
      </div>
      <!--  col-md-6   -->
      <!--  col-md-6   -->
    </div>
    <!--  row   -->
    <div class="form-group">
          <label for="objet">Objet du message</label>
          <input type="text" class="form-control" id="objet" placeholder="Objet du message">
        </div>
        <div class="form-group">
        <label for="message">Message</label>
  <textarea class="form-control" placeholder="Laissez votre message ici" id="message" style="height: 100px"></textarea>
  
</div>
<div class="row">
      <div class="col-md-6">
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</div>
</div>
</form>
    </div>
  </form>
</div>
<?php include '../assets/include/footer-contact.php' ?>
<script src="../assets/js/auto.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
  </script>  
</body>
