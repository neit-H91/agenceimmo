<?php

    include_once '../modeles/mesFonctionsAccesBDD.php';
    $pdo = connexionBDD();
    if(empty($_POST['surfacejardin'])){
        $SJ=NUll;
    }
    else{
        $SJ=$_POST['surfacejardin'];
    }
    if(empty($_POST['nbpiece'])){
        $NBP=NUll;
    }
    else{
        $NBP=$_POST['nbpiece'];
    }

    ajouterBien($pdo, $_POST['description'],  $_POST['prix'], $_POST['adresse'], $_POST['ville'], $_POST['codepostal'], $_POST['surfacebien'] , $SJ , $NBP , $_POST['formAjoutTypeBien'], $_POST['titre']);

    header('Location: ../vuescontroleurs/menuagent.php');
