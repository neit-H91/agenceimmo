<?php
include_once '../modeles/mesFonctionsAccesBDD.php';
$pdo = connexionBDD();

    $log = $_SESSION['login'];
    $NP = recupNom($pdo, $log);
?>