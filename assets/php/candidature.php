<?php
session_start();
include "config.php";
include '../class/util.php';
include '../class/insert.php';

$util = new Util;
$db = new Database;

$adresse = $util->testInput($_POST['adresse']);
$cp = $util->testInput($_POST['cp']);
$ville = $util->testInput($_POST['ville']);
$poste = $util->testInput($_POST['poste']);
$message = $util->testInput($_POST['message']);
$id = $util->testInput(htmlspecialchars($_SESSION['id_postulant']));

// Chemin de l'Upload d'image
$targetDir = "../upload/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);


if(!empty($_FILES["file"]["name"])){
    // Autorise certain format d'image
    $allowTypes = array('jpg','png','jpeg','pdf');
    $fileName = uniqid('img_') . '.' . $fileType;
    if(in_array($fileType, $allowTypes)){
        // Upload l'image sur le serveur
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetDir . $fileName)){
            
            
                            // Insert l'image et les données du formulaire en bdd
                      if($db->candidature($adresse, $cp, $ville, $poste, $message, $fileName, $id)); {          
                echo $util->showMessage('success', 'Votre candidature est bien envoyée');}
            } 
        }else{
            echo $util->showMessage('danger', 'Seul les JPG, JPEG, PNG et PDF sont acceptés');
        }
    }else{
        echo $util->showMessage('danger', 'Inséré une image');
}
    



?>