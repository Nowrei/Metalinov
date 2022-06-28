<?php
session_start();
include "config.php";
include '../class/util.php';

$util = new Util;

$adresse = $util->testInput($_POST['adresse']);
$cp = $util->testInput($_POST['cp']);
$ville = $util->testInput($_POST['ville']);
$poste = $util->testInput($_POST['poste']);
$message = $util->testInput($_POST['message']);
$id = $util->testInput(htmlspecialchars($_SESSION['id_postulant']));

// File upload path
$targetDir = "../upload/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);


if(!empty($_FILES["file"]["name"])){
    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','pdf');
    $fileName = uniqid('img_') . '.' . $fileType;
    if(in_array($fileType, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetDir . $fileName)){
            
            
                            // Insert image file name into database

            $sql = "INSERT INTO candidature (adresse_candidature, cp_candidature, ville_candidature, poste_candidature, message_candidature, cv_candidature, id_postulant) 
            VALUES (:adresse_candidature, :cp_candidature, :ville_candidature, :poste_candidature, :message_candidature, :cv_candidature, :id_postulant)";
            $requete= $bdd->prepare($sql);
            $requete->execute(array(
        ":adresse_candidature" => $adresse,
        ":cp_candidature" => $cp,
        ":ville_candidature" => $ville,
        ':poste_candidature' => $poste,
        ':message_candidature' => $message,
        ':cv_candidature' => $fileName,
        ':id_postulant' => $id
   
    )); 



            
                echo $util->showMessage('success', 'Votre candidature est bien envoyée');
            } 
        }else{
            echo $util->showMessage('danger', 'Seul les JPG, JPEG, PNG et PDF sont acceptés');
        }
    }else{
        echo $util->showMessage('danger', 'Inséré une image');
}
    



?>