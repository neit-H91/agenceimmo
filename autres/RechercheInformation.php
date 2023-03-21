<?php
include_once '../modeles/mesFonctionsAccesBDD.php';
    $pdo = connexionBDD();
    $IdBien = $_GET['id'];
    $desInformations = AfficheInformation($pdo, $IdBien);
?>
