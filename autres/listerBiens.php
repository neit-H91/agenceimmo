<?php
include_once '../modeles/mesFonctionsAccesBDD.php';
$pdo = connexionBDD();
?>

<?php
    include_once '../modeles/mesFonctionsAccesBDD.php';
    $lesBiens = listerBiens($pdo,$_POST['ID'],$_POST['VILLE'],$_POST['TYPE'],$_POST['PRIX']);
    foreach ($lesBiens as $unBien){
        echo '<option value="'.'">'.'- '.$unBien['titre'].', un(e) '.$unBien['libelle'].' au prix de '.$unBien['prix'].'€ à '.$unBien['ville'].'</option>';
?>

    <a href="AfficherBien.php?id=<?php echo $unBien['idBien'] ?>"> Cliquez-ici pour le voir </a>       

<?php
    }
?>        


