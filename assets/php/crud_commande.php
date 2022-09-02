<?php

require '../class/Autoloader.php';
Autoloader::register();


  $db = new Base;
  $util = new Util;


  // Handle Fetch All Users Ajax Request
  if (isset($_GET['read'])) {
    $users = $db->read();
    $output = '';
    if ($users) {
      foreach ($users as $row)  {
        $output .= '<tr>

                      <td>' . $row['adresse_commande'] . '</td>
                      <td>' . $row['cp_commande'] . '</td>
                      <td>' . $row['ville_commande'] . '</td>
                      <td>' . $row['pays_commande'] . '</td>
                      <td>' . $row['objet_commande'] . '</td>
                      <td>' . $row['message_commande'] . '</td>
                      <td>
                      <a href="voir.php" id="' . $row['id_commande'] . '" class="btn btn-success btn-sm rounded-pill py-0 " " >Edit</a>
                      <a href="#" id="' . $row['id_commande'] . '" class="btn btn-danger btn-sm rounded-pill py-0 deleteLink" data-toggle="modal" data-target="#deleteUserModal">Delete</a>
           
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
      if ($db->delete($id)) {
        echo $util->showMessage('info', 'User deleted successfully!');
      } else {
        echo $util->showMessage('danger', 'Something went wrong!');
      }
    }
  
 

?>