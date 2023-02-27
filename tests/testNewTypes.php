<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

//on insère le fichier qui contient les fonctions
include_once '../modeles/mesFonctionsAccesAuxDonees.php';

//appel de la fonction qui permet de se connecter à la base de données
$lePdo = connexionBDD();

newTypes($lePdo,4,'Appartement');

//var_dump permet d'afficher le contenu d'un objet. Utilisable uniquement lors de test de validation
var_dump($lePdo);

