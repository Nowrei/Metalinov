<?php 
session_start();
include 'assets/php/config.php';

$sql = "SELECT * FROM commande WHERE id_commande=".$_GET["id_commande"]."";
$requete=$bdd->prepare($sql);
$requete->execute();
$affiche = $requete->fetch(); 

echo $affiche["entreprise_commande"];
?>