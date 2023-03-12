<?php
include_once '../modeles/mesFonctionsAccesBDD.php';
    $pdo = connexionBDD();
    $IdBien = $_GET['id'];
    $desInformations = AfficheInformation($pdo, $IdBien);
        echo '<h1>' . $desInformations['titre'] .  '</h1>'; // récupéré de la fonction AfficheInformation
?>
