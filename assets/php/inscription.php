<?php
include "config.php";
include '../class/util.php';

$util = new Util;

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$entreprise = $_POST['entreprise'];
$mail = $_POST['mail'];
$password = $_POST['mdp'];
$password1 = $_POST['mdp1'];



if ($password == $password1){
    $password = password_hash( $password, PASSWORD_DEFAULT);    

    $sql="SELECT * FROM entreprise WHERE mail_entreprise = :mail_entreprise";
    $requete= $bdd->prepare($sql);
    $requete->execute(array(
        "mail_entreprise" => $mail
    ));

    $testmail = 0;
        while($resultat = $requete->fetch()) {

          if ($mail == $resultat['mail_entreprise']) {

            $testmail = 1 ;
        }
    }


    if ($testmail == 0) {

    $sql = "INSERT INTO entreprise (nom_entreprise, prenom_entreprise, entreprise_entreprise, mail_entreprise, mdp_entreprise) VALUES (:nom_entreprise, :prenom_entreprise, :entreprise_entreprise, :mail_entreprise, :mdp_entreprise)";
    $requete= $bdd->prepare($sql);
    $requete->execute(array(
        ":nom_entreprise" => $nom,
        ":prenom_entreprise" => $prenom,
        ":entreprise_entreprise" => $entreprise,
        ':mail_entreprise' => $mail,
        ':mdp_entreprise' => $password
   
    )); 
    header ("location: ../../index.php");

    }else{ echo $util->showMessage('danger', 'Vous êtes déjà inscrit');}
}else{

 echo $util->showMessage('danger', 'Les mots de passe ne sont pas identique');
}
  