<?php
include 'config.php';
include '../class/util.php';
require_once '../class/select.php';

$util = new Util;
$select = new Base;

$mail = $_POST['mail'];
$password = $_POST['mdp'];

$count = $select->verif_entreprise($mail);

if ( $count == 1) {

            while($count) {

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