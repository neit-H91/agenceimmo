<?php
//on insère le fichier qui contient les fonctions
include_once 'newsletterDepartEtu/modele/mesFonctionsAccesAuxDonnees.php';
//connexion à la bdd
$pdo = connexionBDD();
//recuperation des info rentré
$login=$_POST['username'];
$mdp=$_POST['password'];
//verification de la correspondance des hash de mdp
$hash=recuperation($pdo,$login);
if (md5($mdp) === $hash) {
    header('Location: menuagent.php');
} else {
    header('Location: erreur.php');
}
?>