<?php session_start();

  require_once '../class/insert.php';
  require_once '../class/util.php';

  $db = new Database;
  $util = new Util;

  // Handle Add New User Ajax Request
  if (isset($_POST['add'])) {


    $adresse = $util->testInput($_POST['adresse']);
    $cp = $util->testInput($_POST['cp']);
    $ville = $util->testInput($_POST['ville']);
    $pays = $util->testInput($_POST['pays']);
    $objet = $util->testInput($_POST['objet']);
    $message = $util->testInput($_POST['message']);
    $id = $util->testInput(htmlspecialchars($_SESSION['id_entreprise']));
    


    if ($db->insert($adresse, $cp, $ville, $pays, $objet, $message, $id)) {
      echo $util->showMessage('success', 'Commande bien prit en compte, nous vous recontacterons dans les plus bref délais');
    } else {
      echo $util->showMessage('danger', 'Quelque chose ne fonctionne pas, essayer à nouveau');
    }
  }

  ?>    
