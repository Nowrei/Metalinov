<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<?php 
require '../assets/class/config.php';
require '../assets/class/select.php'; 
?>
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
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
  
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
</head>
<body>
<table id="table_id" class="display">
<div class="container-fluid">
      <table id="example" class="table table-striped table-bordered nowrap" width="100%">
        <thead>
          <tr>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Société</th>
            <th>Telephone</th>
            <th>Email</th>
            <th>Adresse</th>
            <th>Code Postal</th>
            <th>Ville</th>
            <th>Pays</th>
            <th>Objet du message</th>
            <th>Message</th>
            <th>Update</th>
            <th>Delete</th>
          </tr>
        </thead>
    <tbody>
        <tr>
        <?php
            $rose = new rose;
            $result = $rose->index();
          foreach($result as $row)
            {
          ?>
        <tr>
          <td><?= $row['nom_contact'] ?></td>
          <td><?= $row['prenom_contact'] ?></td>
          <td><?= $row['societe_contact'] ?></td>
          <td><?= $row['telephone_contact'] ?></td>
          <td><?= $row['email_contact'] ?></td>
          <td><?= $row['adresse_contact'] ?></td>
          <td><?= $row['cp_contact'] ?></td>
          <td><?= $row['ville_contact'] ?></td>
          <td><?= $row['pays_contact'] ?></td>
          <td><?= $row['objet_contact'] ?></td>
          <td><?= $row['message_contact'] ?></td>

          <td><a href="#">Update</a></td>
          <td><a href="#">Delete</a></td>
          <?php
            }
            ?>
        </tr>
    </tbody>
</table>



</body>