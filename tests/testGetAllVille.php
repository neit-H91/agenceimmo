<?php

//on insère le fichier qui contient les fonctions
include_once '../modeles/mesFonctionsAccesBDD.php';

//appel de la fonction qui permet de se connecter à la base de données
$lePdo = connexionBDD();

$test = getAllVille($lePdo);

var_dump($test);
