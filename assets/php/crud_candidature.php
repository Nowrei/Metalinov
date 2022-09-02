<?php

require '../class/Autoloader.php';
Autoloader::register();

  $db = new Db;
  $util = new Util;


  // Handle Fetch All Users Ajax Request
  if (isset($_GET['readCandidature'])) {
    $users = $db->readCandidature();
    $output = '';
    if ($users) {
      foreach ($users as $row) {
        $output .= '<tr>
                      <td>' . $row['adresse_candidature'] . '</td>
                      <td>' . $row['cp_candidature'] . '</td>
                      <td>' . $row['ville_candidature'] . '</td>
                      <td>' . $row['message_candidature'] . '</td>
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


  // Handle Delete User Ajax Request
  if (isset($_GET['delete'])) {
    $id = $_GET['id'];
    if ($db->deleteCandidature($id)) {
      echo $util->showMessage('info', 'User deleted successfully!');
    } else {
      echo $util->showMessage('danger', 'Something went wrong!');
    }
  }
  

?>