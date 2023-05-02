<?php

include_once '../modeles/mesFonctionsAccesBDD.php';
$pdo = connexionBDD();

$dateDebut='0-0-0';
$dateFin=date('Y-m-d');
if(!empty($_POST["dateDebut"])){
    $dateDebut=$_POST["dateDebut"];
}
if(!empty($_POST["dateFin"])){
    $dateFin=$_POST["dateFin"];
}
if($dateFin<$dateDebut){
    $dateFin=$dateDebut;
}
$ville=getLibelleVilles();
$stats = statsVille($pdo,$dateDebut,$dateFin);


for($i=0;$i<sizeof($stats);$i++){
    echo  $ville[$i]['libelleVille'].' : '.$stats[$i].'<br>';         
}