<?php

require '../class/Autoloader.php';
Autoloader::register();


  $db = new Db;
  $util = new Util;


  // Handle Fetch All Users Ajax Request
  if (isset($_GET['read'])) {
    $users = $db->candidature();
    $output = '';
    if ($users) {
      foreach ($users as $row)  {
        $output .= '<tr>

                      <td>' . $row['adresse_candidature'] . '</td>
                      <td>' . $row['cp_candidature'] . '</td>
                      <td>' . $row['ville_candidature'] . '</td>
                      <td>' . $row['poste_candidature'] . '</td>
                      <td>' . $row['message_candidature'] . '</td>
                      <td><a href="../assets/upload'  . $row['cv_candidature'] .  '"><img src="../upload/'  . $row['cv_candidature'] .  '" class="img-responsive"></a></td>
                      <td>
                      <a href="voir.php" id="' . $row['id_candidature'] . '" class="btn btn-success btn-sm rounded-pill py-0 " " >Edit</a>
                      <a href="#" id="' . $row['id_candidature'] . '" class="btn btn-danger btn-sm rounded-pill py-0 deleteLink" data-toggle="modal" data-target="#deleteUserModal">Delete</a>
           
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