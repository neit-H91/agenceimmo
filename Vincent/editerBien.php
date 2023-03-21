<?php

    include_once '../modeles/mesFonctionsAccesBDD.php';
    $pdo = connexionBDD();

    //A faire, vérifier si les valeurs son vide, les autoriser,

    echo "testprout";
    var_dump($_POST['idB']);
    echo $_POST['idB'];
    var_dump($_POST['description']);
    var_dump($_POST['prix']);
    var_dump($_POST['adresse']);
    var_dump($_POST['ville']);
    var_dump($_POST['codepostal']);
    var_dump($_POST['surfacebien']);
    var_dump($_POST['nbpiece']);
    var_dump($_POST['idtype']);
    var_dump($_POST['titre']);
    editerBien($pdo,$_POST['idB'],$_POST['description'],$_POST['prix'],$_POST['adresse'],$_POST['ville'],$_POST['codepostal'],$_POST['surfacebien'],$_POST['surfacejardin'],$_POST['nbpiece'],$_POST['idtype'],$_POST['titre']);
    //---------------------------------------//

    