<?php
include_once '../modeles/mesFonctionsAccesBDD.php';
$pdo = connexionBDD();
?>
/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

    <div id=listerBiens>

<?php
    include_once '../modeles/mesFonctionsAccesBDD.php';
    $lesBiens = listerBiens($pdo);
    foreach ($lesBiens as $unBien){
        echo '<option value="'.'">'.'- '.$unBien['titre'].', un(e) '.$unBien['libelle'].' au prix de '.$unBien['prix'].'€ à '.$unBien['ville'].'</option>';
    }
        
    </div>   
?>
