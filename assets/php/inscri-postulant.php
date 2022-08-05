<?php
include "config.php";
include '../class/util.php';
include '../class/insert.php';

$util = new Util;
$db = new Database;

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$tel = $_POST['phone'];
$mail = $_POST['mail'];
$password = $_POST['mdp'];
$password1 = $_POST['mdp1'];



if ($password == $password1){

    if (filter_var($mail, FILTER_VALIDATE_EMAIL)) {

        if (preg_match("#.*^(?=.{8,20}).*$#", $password )) {
    
                if (preg_match("#.*^(?=.*[a-z])(?=.*[A-Z]).*$#", $password )) {
    
                    if (preg_match("#.*^(?=.*[0-9]).*$#", $password )) {


    $password = password_hash( $password, PASSWORD_DEFAULT);    

    $sql="SELECT * FROM postulant WHERE mail_postulant = :mail_postulant";
    $requete= $bdd->prepare($sql);
    $requete->execute(array(
        "mail_postulant" => $mail
    ));

    $testmail = 0;
        while($resultat = $requete->fetch()) {

          if ($mail == $resultat['mail_postulant']) {

            $testmail = 1 ;
        }
    }


    if ($testmail == 0) {

        if ($db->postulant($nom, $prenom, $tel, $mail, $password)); {

            echo $util->showMessage('success', 'Vous êtes bien inscrit, <a href="connection-postulant.php">Connectez-vous</a> ici.');}

    }else{ echo $util->showMessage('danger', 'Vous êtes déjà inscrit');}

}else{ echo $util->showMessage('danger', 'Le mot de passe doit contenir au moins un chiffre');}

}else{ echo $util->showMessage('danger', 'Le mot de passe doit contenir au moins une lettre en majuscule');}

}else{ echo $util->showMessage('danger', 'Le mot de passe doit contenir entre 8 et 20 caractères');}

}else{ echo $util->showMessage('danger', 'L'."'email n'est pas ".'valide');}  

}else{

 echo $util->showMessage('danger', 'Les mots de passe ne sont pas identique');
}
