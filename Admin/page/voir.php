<?php 

require_once '../assets/php/config.php';

$sql = "SELECT * FROM commande c
LEFT JOIN user u 
ON c.id_commande = u.id_commande
WHERE c.id_commande = ".$_GET['id_commande']."";
$requete=$bdd->prepare($sql);
$requete->execute();
$affiche = $requete->fetch(); 

var_dump($affiche);