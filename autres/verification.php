<?php
//on insère le fichier qui contient les fonctions
include_once '../modeles/mesFonctionsAccesBDD.php';
//connexion à la bdd
$pdo = connexionBDD();
//recuperation des info rentré
$login=$_POST['username'];
$mdp=$_POST['password'];
//verification de la correspondance des hash de mdp
$hash=recuperation($pdo,$login);
if (md5($mdp) === $hash) {
    header('Location: ../vuescontroleurs/menuagent.php');
} else {
    header('Location: ../vuescontroleurs/erreur.php');
}
?>
