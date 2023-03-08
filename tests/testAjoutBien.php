<?php

//on insère le fichier qui contient les fonctions
include_once '../modeles/mesFonctionsAccesBDD.php';

//appel de la fonction qui permet de se connecter à la base de données
$lePdo = connexionBDD();

ajouterBien($lePdo, 'Appartement test inshallah ca marche', 320000 , "111 Rue du Test", "Test-Ville", "59960", 1 , NULL , NULL , 2 , "Tres beau test en tout cas on me dit dans l'oreillette" );

//var_dump permet d'afficher le contenu d'un objet. Utilisable uniquement lors de test de validation
var_dump($lePdo);