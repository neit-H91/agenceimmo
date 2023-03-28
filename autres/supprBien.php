<?php
//on insère le fichier qui contient les fonctions
include_once '../modeles/mesFonctionsAccesBDD.php';
//connexion à la bdd
$pdo = connexionBDD();
//recuperation des info rentré
$id=$_POST['idbien'];
//execution de la requete
$supp=supprBien($pdo,$id);