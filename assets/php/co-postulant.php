<?php
require_once 'config.php';
require_once '../class/Autoloader.php';
Autoloader::register();

$util = new Util;


$mail = htmlspecialchars($_POST['mail']);
$password = htmlspecialchars($_POST['mdp']);

$sql = "SELECT * FROM postulant WHERE mail_postulant = :mail_postulant";
$requete= $bdd->prepare($sql);
$requete->execute(array(

    ':mail_postulant' =>$mail

));

$count = $requete->rowCount();

if ( $count == 1) {

            while($resultat = $requete->fetch()) {

                if (password_verify($password,$resultat['mdp_postulant'])) {
                    session_start();
                    $_SESSION['id_postulant'] = $resultat['id_postulant'];
                    $_SESSION['nom_postulant'] = $resultat['nom_postulant'];
                    $_SESSION['prenom_postulant'] = $resultat['prenom_postulant'];
                    $_SESSION['role_utilisateur'] = $resultat['role_utilisateur'];

                 
                    echo $util->showMessage('success', 'Vous êtes bien connecté, <a href="../../Metalinov/">Retour à l'."'accueil".'</a>');



                }else{
                   echo $util->showMessage('danger', 'Vous avez inscrit le mauvais mot de passe');
                }

            }



        }
        else{echo $util->showMessage('danger', 'Aucun Email correspondant trouver');}