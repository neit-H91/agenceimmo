<?php
include_once '../modeles/mesFonctionsAccesBDD.php';
$pdo = connexionBDD();
?>

<?php
    include_once '../modeles/mesFonctionsAccesBDD.php';
    $lesBiens = listerBiens($pdo);
    foreach ($lesBiens as $unBien){
        echo '<option value="'.'">'.'- '.$unBien['titre'].', un(e) '.$unBien['libelle'].' au prix de '.$unBien['prix'].'€ à '.$unBien['ville'].'</option>';
    }
?>     


