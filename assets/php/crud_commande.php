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
    

    if ($db->insert($pseudo, $mail, $password, $role)) {
      echo $util->showMessage('success', 'User inserted successfully!');
    } else {
      echo $util->showMessage('danger', 'Something went wrong!');
    }
  }

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
 

  // Handle Edit User Ajax Request
  if (isset($_GET['edit'])) {
    $id = $_GET['id'];

    $user = $db->readOne($id);
    echo json_encode($users);
  }

  // Handle Update User Ajax Request
  if (isset($_POST['update'])) {
    $id = $util->testInput($_POST['id']);
    $pseudo = $util->testInput($_POST['pseudo']);
    $mail = $util->testInput($_POST['mail']);
    $password = $util->testInput($_POST['mdp']);
    $role = $util->testInput($_POST['role']);


    if ($db->update($id, $pseudo, $mail, $password, $role)) {
      echo $util->showMessage('success', 'User updated successfully!');
    } else {
      echo $util->showMessage('danger', 'Something went wrong!');
    }
  }

  // Handle Delete User Ajax Request
  if (isset($_GET['delete'])) {
    $id = $_GET['id'];
    if ($db->delete($id)) {
      echo $util->showMessage('info', 'User deleted successfully!');
    } else {
      echo $util->showMessage('danger', 'Something went wrong!');
    }
  }

?>