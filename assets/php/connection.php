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
                    $_SESSION['nom_entreprise'] = $resultat['nom_entreprise'];
                    $_SESSION['prenom_entreprise'] = $resultat['prenom_entreprise'];
                    $_SESSION['telephone_entreprise'] = $resultat['telephone_entreprise'];
                    $_SESSION['mail_entreprise'] = $resultat['mail_entreprise'];
                    $_SESSION['entreprise_entreprise'] = $resultat['entreprise_entreprise'];
                    
                    echo $util->showMessage('success', 'Vous êtes bien connecté, <a href="../../Metalinov/index.php">Retour à l'."'accueil".'</a>');



                }else{
                   echo $util->showMessage('danger', 'Vous avez inscrit le mauvais mot de passe');
                }

            }



        }
        else{echo $util->showMessage('danger', 'Aucun Email correspondant trouver');}