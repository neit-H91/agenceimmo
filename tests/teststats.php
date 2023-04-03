<?php
date_default_timezone_set('Europe/Paris');
include_once '../modeles/mesFonctionsAccesBDD.php';
$type ='test bien';
$date=date('Y-m-d');

$pdo = connexionBDD();

$requete=$pdo->prepare("insert into stats values(:d,:t)");
$requete->bindValue(':d',$date,PDO::PARAM_STR);
$requete->bindValue(':t',$type,PDO::PARAM_STR);
$requete->execute();