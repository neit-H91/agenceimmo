<?php
include_once '../modeles/mesFonctionsAccesBDD.php';

$ville=5;
$surface=800;
$tranche=NULL;
$date =date('Y-m-d');

$pdo = connexionBDD();
$insert=$pdo->prepare("insert into recherche values (NULL,:d,:idv,:idt,:surfBien)");
$bv1=$insert->bindValue(':d',$date,PDO::PARAM_STR);
echo $bv1;
$bv2=$insert->bindValue(':idv',$ville,PDO::PARAM_INT);
echo $bv2;
$bv3=$insert->bindValue(':idt',$tranche,PDO::PARAM_INT);
echo $bv3;
$bv4=$insert->bindValue(':surfBien',$surface,PDO::PARAM_INT);
echo $bv4;

var_dump($insert->execute());
?>
