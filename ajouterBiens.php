<?php
    include_once '../modeles/mesFonctionsAccesBDD.php';
    $pdo = connexionBDD();
    if($_POST['surfacejardin']==0){
        $SJ=NUll;
    }
    else{
        $SJ=$_POST['surfacejardin'];
    }
    if($_POST['nbpiece']==0){
        $NBP=NUll;
    }
    else{
        $NBP=$_POST['nbpiece'];
    }

    $test = $_POST['prix'];
    if($test==0){
        $test=456;
    }

    ajouterBien($pdo, $_POST['description'], $test, $_POST['adresse'], $_POST['ville'], $_POST['codepostal'], $_POST['surfacebien'] , $SJ , $NBP , $_POST['idtype'], $_POST['titre']);
    echo "Vous avez bien ajouter le bien à la base de données";
    echo $_POST['surfacejardin'];
?>     
