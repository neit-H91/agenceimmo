<?php
date_default_timezone_set('Europe/Paris');
include_once '../modeles/mesFonctionsAccesBDD.php';
$date=date('Y-m-d');
$ville="Roubaix";

$pdo = connexionBDD();
$requete=$pdo->prepare("select idVille from ville where libelle = :v");
$requete->bindValue(':v',$ville,PDO::PARAM_STR);
$requete->execute();
$idVille=$requete->fetchAll(PDO::FETCH_ASSOC);
var_dump($idVille);
$idTranche=NULL;

$insert=$pdo->prepare("insert into recherche values (NULL,:d,:idv,:idt)");
$bv1=$insert->bindValue(':d',$date,PDO::PARAM_STR);
var_dump($bv1);
$bv2=$insert->bindValue(':idv',$idVille,PDO::PARAM_INT);
var_dump($bv2);
$bv3=$insert->bindValue(':idt',$idTranche,PDO::PARAM_INT);
var_dump($bv3);
$insert->execute();


/* cmmd qui permet de savoir quelle ville a été cherché cb de fois
select idVille, COUNT(idVille) from recherche GROUP BY idVille; */

/* cmmd qui permet de savoir quelle tranche a été cherché cb de fois
select idTranche, COUNT(idTranche) from recherche group by(idTranche); */
