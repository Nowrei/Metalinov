<?php

require '../class/config.php';
require '../class/insert.php';

$db = new DatabaseConnection;



if(isset($_POST['submit']))
{
    $inputData = [
        'nom' => mysqli_real_escape_string($db->conn,$_POST['nom']),
        'prenom' => mysqli_real_escape_string($db->conn,$_POST['prenom']),
        'societe' => mysqli_real_escape_string($db->conn,$_POST['societe']),
        'phone' => mysqli_real_escape_string($db->conn,$_POST['phone']),
        'email' => mysqli_real_escape_string($db->conn,$_POST['email']),
        'adresse' => mysqli_real_escape_string($db->conn,$_POST['adresse']),
        'code' => mysqli_real_escape_string($db->conn,$_POST['code']),
        'ville' => mysqli_real_escape_string($db->conn,$_POST['ville']),
        'depart' => mysqli_real_escape_string($db->conn,$_POST['depart']),
        'pays' => mysqli_real_escape_string($db->conn,$_POST['pays']),
        'objet' => mysqli_real_escape_string($db->conn,$_POST['objet']),
        'message' => mysqli_real_escape_string($db->conn,$_POST['message']),
        
    ];

    $ville = new ville;
    $result = $ville->create($inputData);
    
    if($result)
    {
        
        header ("location: ../../contact/contact.php?message=succes");
    }
    else
    {
       header ("location: ../../contact/contact.php?message=error");
    }
}
?>