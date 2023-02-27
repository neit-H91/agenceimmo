<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

//on insère le fichier qui contient les fonctions
include_once '../modele/mesFonctions.php';

//appel de la fonction qui permet de se connecter à la base de données
$lePdo = connexionBDD();

getUnBien($lePdo, 1);

//var_dump permet d'afficher le contenu d'un objet. Utilisable uniquement lors de test de validation
var_dump($lePdo);
