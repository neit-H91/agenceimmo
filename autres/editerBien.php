<?php

    include_once '../modeles/mesFonctionsAccesBDD.php';
    $pdo = connexionBDD();

    //A faire, vérifier si les valeurs son vide, les autoriser,

    editerBien($pdo,$_POST['idB'],$_POST['description'],$_POST['prix'],$_POST['adresse'],$_POST['ville'],$_POST['codepostal'],$_POST['surfacebien'],$_POST['surfacejardin'],$_POST['nbpiece'],$_POST['idtype'],$_POST['titre']);
    //---------------------------------------//
    header('Location: ../vuescontroleurs/menuagent.php');
