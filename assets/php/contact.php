<?php session_start();

require_once '../class/Autoloader.php';
Autoloader::register();


  $db = new Database;
  $util = new Util;

  // Donnée du formulaire
  if (isset($_POST['add'])) {

  $entreprise = $util->testInput(htmlspecialchars($_POST['entreprise']));
  $adresse = $util->testInput(htmlspecialchars($_POST['adresse']));
  $cp = $util->testInput(htmlspecialchars($_POST['cp']));
  $ville = $util->testInput(htmlspecialchars($_POST['ville']));
  $pays = $util->testInput(htmlspecialchars($_POST['pays']));
  $objet = $util->testInput(htmlspecialchars($_POST['objet']));
  $message = $util->testInput(htmlspecialchars($_POST['message']));
  $id =  htmlspecialchars($_SESSION['id_user']);
    

  // Envoie des données en base de donnée
  
    if ($db->entreprise($entreprise, $adresse, $cp, $ville, $pays, $objet, $message, $id)) {
      echo $util->showMessage('success', 'Commande bien prit en compte, nous vous recontacterons dans les plus bref délais');
    } else {
      echo $util->showMessage('danger', 'Quelque chose ne fonctionne pas, essayer à nouveau');
    }
  }

  ?>    
