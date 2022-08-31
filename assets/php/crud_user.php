<?php

require '../class/Autoloader.php';
Autoloader::register();

  $db = new Db;
  $util = new Util;

  // Handle Add New User Ajax Request
  if (isset($_POST['add'])) {
    $nom = $util->testInput($_POST['nom']);
    $prenom = $util->testInput($_POST['prenom']);
    $phone = $util->testInput($_POST['phone']);
    $mail = $util->testInput($_POST['mail']);
    $password = $util->testInput($_POST['mdp']);
    $role = $util->testInput($_POST['role']);
    

    if ($db->insert($nom, $prenom, $phone, $mail, $password, $role)) {
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
      foreach ($users as $row) {
        $output .= '<tr>
                      <td>' . $row['nom_user'] . '</td>
                      <td>' . $row['prenom_user'] . '</td>
                      <td>' . $row['telephone_user'] . '</td>
                      <td>' . $row['mail_user'] . '</td>
                      <td>' . $row['role_user'] . '</td>
                      <td>
                        <a href="#" id="' . $row['id_user'] . '" class="btn btn-success btn-sm rounded-pill py-0 editLink" data-toggle="modal" data-target="#editUserModal">Edit</a>

                        <a href="#" id="' . $row['id_user'] . '" class="btn btn-danger btn-sm rounded-pill py-0 deleteLink">Delete</a>
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
    echo json_encode($user);
    var_dump($user);
    die;
  }

  // Handle Update User Ajax Request
  if (isset($_POST['update'])) {
    $id = $util->testInput($_POST['id']);
    $nom = $util->testInput($_POST['nom']);
    $prenom = $util->testInput($_POST['prenom']);
    $phone = $util->testInput($_POST['phone']);
    $mail = $util->testInput($_POST['mail']);
    $password = $util->testInput($_POST['mdp']);
    $role = $util->testInput($_POST['role']);
   


    if ($db->update($id, $nom, $prenom, $phone, $mail, $password, $role)) {
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