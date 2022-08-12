<?php

  require_once '../class/select.php';
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
                      <td>' . $row['nom_postulant'] . '</td>
                      <td>' . $row['prenom_postulant'] . '</td>
                      <td>' . $row['telephone_postulant'] . '</td>
                      <td>' . $row['mail_postulant'] . '</td>

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