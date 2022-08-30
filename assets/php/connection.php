<?php

require_once '../class/Autoloader.php';
Autoloader::register();

$util = new Util;


$identifiant = $_POST['identifiant'];
$password = $_POST['mdp'];

$sql = "SELECT * FROM user WHERE mail_user = :mail_user";
$requete= $bdd->prepare($sql);
$requete->execute(array(

    ':mail_user' =>$identifiant
));

$count = $requete->rowCount();

if ( $count == 1) {

            while($resultat = $requete->fetch()) {

                if (password_verify($password,$resultat['mdp_user'])) {
                    session_start();
                    $_SESSION['id_user'] = $resultat['id_user'];
                    $_SESSION['role_user'] = $resultat['role_user'];
                    $_SESSION['nom_user'] = $resultat['nom_user'];

                    
                    echo $util->showMessage('success', 'Vous êtes bien connecté, <a href="../../Metalinov/">Retour à l'."'accueil".'</a>');



                }else{
                   echo $util->showMessage('danger', 'Vous avez inscrit le mauvais mot de passe');
                }

            }



        }
        else{echo $util->showMessage('danger', 'Aucun Email correspondant trouver');}