<?php
include 'config.php';
include '../class/util.php';

$util = new Util;

$identifiant = $_POST['identifiant'];
$password = $_POST['mdp'];

$sql = "SELECT * FROM entreprise WHERE mail_entreprise = :mail_entreprise OR entreprise_entreprise = :entreprise_entreprise";
$requete= $bdd->prepare($sql);
$requete->execute(array(

    ':mail_entreprise' =>$identifiant,
    ':entreprise_entreprise' =>$identifiant
));

$count = $requete->rowCount();

if ( $count == 1) {

            while($resultat = $requete->fetch()) {

                if (password_verify($password,$resultat['mdp_entreprise'])) {
                    session_start();
                    $_SESSION['id_entreprise'] = $resultat['id_entreprise'];
                    $_SESSION['role_utilisateur'] = $resultat['role_utilisateur'];
                    $_SESSION['entreprise_commande'] = $resultat['entreprise_entreprise'];
                    $_SESSION['telephone_commande'] = $resultat['telephone_entreprise'];
                    $_SESSION['mail_commande'] = $resultat['mail_entreprise'];
                    
                    header('location:../../accueil.php');



                }else{
                   echo $util->showMessage('danger', 'Vous avez inscrit le mauvais mot de passe');
                }

            }



        }
        else{echo $util->showMessage('danger', 'Aucun Email correspondant trouver');}