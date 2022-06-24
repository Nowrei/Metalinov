<?php
session_start();
include "config.php";
include '../class/util.php';

$util = new Util;

$adresse = $util->testInput($_POST['adresse']);
$cp = $util->testInput($_POST['cp']);
$ville = $util->testInput($_POST['ville']);
$pays = $util->testInput($_POST['pays']);
$poste = $util->testInput($_POST['poste']);
$message = $util->testInput($_POST['message']);
$id = $util->testInput(htmlspecialchars($_SESSION['id_postulant']));
// File upload path
$targetDir = "../uploads/";
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
            $db = "INSERT into cv (cv_cv) VALUES ('".$fileName."'";

            "SELECT id_cv INTO cv ";
            $requete= $bdd->prepare($sql);
            $requete->execute(array(
                'id_cv' => $cv
            ));

            $sql = "INSERT INTO candidature (adresse_candidature, cp_candidature, _postulant, poste_candidature, message_candidature, role_utilisateur) 
            VALUES (:adresse_candidature, :cp_candidature, :ville_candidature, :poste_candidature, :message_candidature, ':id_cv')";
            $requete= $bdd->prepare($sql);
            $requete->execute(array(
        ":adresse_candidature" => $adresse,
        ":cp_candidature" => $ville,
        ":ville_candidature" => $ville,
        ':poste_candidature' => $mail,
        ':message_candidature' => $password
   
    )); 



            
                echo $util->showMessage('succes', 'Votre candidature est bien envoyée');
            
                
            } 
        }else{
            echo $util->showMessage('danger', 'Une erreur est survenue pendant votre envoie');
        }
    }else{
        echo $util->showMessage('danger', 'Seul les JPG, JPEG, PNG et PDF sont acceptés');
}
    echo $util->showMessage('danger', 'Selectionner une image');



?>