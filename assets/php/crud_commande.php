<?php

  require_once '../class/db.php';
  require_once '../class/util.php';

  $db = new Database;
  $util = new Util;

  // Handle Add New User Ajax Request
  if (isset($_POST['add'])) {
    $pseudo = $util->testInput($_POST['pseudo']);
    $mail = $util->testInput($_POST['mail']);
    $password = $util->testInput($_POST['mdp']);
    $role = $util->testInput($_POST['role']);
    
  // Handle Fetch All Users Ajax Request
  if (isset($_GET['read'])) {
    $users = $db->read();
    $output = '';
    if ($users) {
      foreach ($users as $row)  {
        $output .= '<tr>
                      <td>' . $row['entreprise_commande'] . '</td>
                      <td>' . $row['telephone_commande'] . '</td>
                      <td>' . $row['mail_commande'] . '</td>
                      <td>' . $row['adresse_commande'] . '</td>
                      <td>' . $row['cp_commande'] . '</td>
                      <td>' . $row['ville_commande'] . '</td>
                      <td>' . $row['pays_commande'] . '</td>
                      <td>' . $row['objet_commande'] . '</td>
                      <td>' . $row['message_commande'] . '</td>
                      <td>
                        <a href="commande.php?id_commande='. $row['id_commande'] .'" id="' . $row['id_commande'] . '" class="btn btn-primary btn-sm rounded-pill py-0 " >Voir commande</a>


                      </td>
                    </tr>';
      }
      echo $output;
    } else {
      echo '<tr>
              <td colspan="6">No Users Found in the Database!</td>
            </tr>';
    }
  }
 
  }
 

?>