<?php
include "config.php";
include '../class/util.php';

$util = new Util;

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$entreprise = $_POST['entreprise'];
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
    
        $sql = "INSERT INTO entreprise (nom_entreprise, prenom_entreprise, entreprise_entreprise, telephone_entreprise, mail_entreprise, mdp_entreprise, role_utilisateur) 
        VALUES (:nom_entreprise, :prenom_entreprise, :entreprise_entreprise, :telephone_entreprise, :mail_entreprise, :mdp_entreprise, '0')";
        $requete= $bdd->prepare($sql);
        $requete->execute(array(
            ":nom_entreprise" => $nom,
            ":prenom_entreprise" => $prenom,
            ":entreprise_entreprise" => $entreprise,
            ":telephone_entreprise" => $tel,
            ':mail_entreprise' => $mail,
            'mdp_entreprise' => $password
       
        )); 
        echo $util->showMessage('success', 'Vous êtes bien inscrit, <a href="connection.php">Connectez-vous</a> ici.');
    
        }else{ echo $util->showMessage('danger', 'Vous êtes déjà inscrit');} 

    }else{ echo $util->showMessage('danger', 'Le mot de passe doit contenir au moins un chiffre');}

}else{ echo $util->showMessage('danger', 'Le mot de passe doit contenir au moins une lettre en majuscule');}

}else{ echo $util->showMessage('danger', 'Le mot de passe doit contenir entre 8 et 20 caractères');}

}else{ echo $util->showMessage('danger', 'L'."'email n'est pas ".'valide');}  

  }else{

 echo $util->showMessage('danger', 'Les mots de passe ne sont pas identique');
}
  