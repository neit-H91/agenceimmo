<?php
include_once '../modeles/mesFonctionsAccesBDD.php';

$ville=NULL;
$surface=NULL;
$tranche=NULL;
$date =date('Y-m-d');

if(!empty($_POST["idVille"])){
    $ville=$_POST["idVille"];
}
if(!empty($_POST["surfaceMini"])){
    $surface=$_POST["surfaceMini"];
}
if(!empty($_POST["prix"])){
    $tranche=$_POST["prix"];
}

$pdo = connexionBDD();
$insert=$pdo->prepare("insert into recherche values (NULL,:d,:idv,:idt,:surfBien)");
$bv1=$insert->bindValue(':d',$date,PDO::PARAM_STR);
$bv2=$insert->bindValue(':idv',$ville,PDO::PARAM_INT);
$bv3=$insert->bindValue(':idt',$tranche,PDO::PARAM_INT);
$bv4=$insert->bindValue(':surfBien',$surface,PDO::PARAM_INT);
$insert->execute();
?>
