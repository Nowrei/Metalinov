<?php
require '../class/Autoloader.php';
Autoloader::register();

$util = new Util;
$db = new Database;
$select = new Base;

$nom = htmlspecialchars($_POST['nom']);
$prenom = htmlspecialchars($_POST['prenom']);
$tel = htmlspecialchars($_POST['phone']);
$mail = htmlspecialchars($_POST['mail']);
$password = htmlspecialchars($_POST['mdp']);
$password1 = htmlspecialchars($_POST['mdp1']);
$role = htmlspecialchars($_POST['role']);



if ($password == $password1) {

    if(isset($role)) {

    if (filter_var($mail, FILTER_VALIDATE_EMAIL)) {

        if (preg_match("#.*^(?=.{8,20}).*$#", $password)) {

            if (preg_match("#.*^(?=.*[a-z])(?=.*[A-Z]).*$#", $password)) {

                if (preg_match("#.*^(?=.*[0-9]).*$#", $password)) {

                    $password = password_hash($password, PASSWORD_DEFAULT);


                    $testmail = $select->select($mail);


                    if ($testmail == 0) {

                        if ($db->insert($nom, $prenom, $role, $tel, $mail, $password)); {

                            echo $util->showMessage('success', 'Vous êtes bien inscrit, <a href="connection.php">Connectez-vous</a> ici.');
                        }
                    } else {
                        echo $util->showMessage('danger', 'Vous êtes déjà inscrit');
                    }
                } else {
                    echo $util->showMessage('danger', 'Le mot de passe doit contenir au moins un chiffre');
                }
            } else {
                echo $util->showMessage('danger', 'Le mot de passe doit contenir au moins une lettre en majuscule');
            }
        } else {
            echo $util->showMessage('danger', 'Le mot de passe doit contenir entre 8 et 20 caractères');
        }
    } else {
        echo $util->showMessage('danger', 'L' . "'email n'est pas " . 'valide');
    }
} else {
    echo $util->showMessage('danger', 'Choissisez un rôle' );
}
} else {

    echo $util->showMessage('danger', 'Les mots de passe ne sont pas identique');
}
  