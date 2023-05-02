<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

function connexionBDD()
{
    $bdd ='mysql:host=localhost;dbname=baseprojetimmo';
    $user ='root';
    $password ='';
    try {   
        $ObjConnexion=new PDO($bdd,$user,$password,array(
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    }
    catch (PDOException $e)
    {
        echo $e->getMessage();
    }
    return $ObjConnexion;
}

function deconnexionBDD($cnx)
{
    $cnx=null;
}

function listerBiens($pdo, $idChoix, $ville, $type, $prix){
    $sql = " SELECT titre,libelle,prix,libelleVille,idBien FROM biens INNER JOIN types ON idType = idTypes INNER JOIN ville on idVilles = idVille ";
    if($idChoix!=''){
        if($idChoix=='idAsc'){
            $sql.=" ORDER by idBien ASC";
        }
        if($idChoix=='idDesc'){
            $sql.=" ORDER by idBien DESC";
        }
    }
    else{
        if($ville!=''){
            if($ville=='villeAsc'){
                $sql.=" ORDER BY libelleVille ASC";
            }
            if($ville=='villeDesc'){
                $sql.=" ORDER BY libelleVille DESC";
            }
            if($type=='type'){
                $sql.=", idType ASC ";
            }
            if($prix=='prixAsc'){
                $sql.=", prix ASC";
            }
            if($prix=='prixDesc'){
                $sql.=", prix DESC";
            }
        }
        if($type!='' && $ville==''){
            if($type=='type'){
                $sql.=" ORDER BY idType ASC ";
            }
            if($prix=='prixAsc'){
                $sql.=", prix ASC";
            }
            if($prix=='prixDesc'){
                $sql.=", prix DESC";
            }
        }
        if($prix!='' && $type=='' && $ville==''){
            if($prix=='prixAsc'){
                $sql.="ORDER BY prix ASC";
            }
            if($prix=='prixDesc'){
                $sql.="ORDER BY prix DESC";
            }
        }    
    }
    $test=$pdo->prepare($sql);
    $test->execute();
    $biens = $test->fetchAll();
    return $biens;
}

function ChercheBien($pdo, $type,$idVille,$tranchePrix,$jardin,$surfaceMini,$piecesMini,$idChoix) {
    $sql = " SELECT titre,libelle,prix,libelleVille,idBien FROM biens INNER JOIN types ON idType = idTypes INNER JOIN ville on idVilles = idVille where 1=1";
    $laTranche = NULL;
    if($tranchePrix!=''){
        $lePdo = connexionBDD();
        $laTranche=getTranche($lePdo,$tranchePrix);      
    }

    if($idChoix!=''){
        $sql.=" and idBien = :rId";
    }
    else{
        if($type!=''){
            $sql.=" and libelle = :l";
        }
        if($idVille!=''){
            $sql.=" and idVilles = :idv";
        }
        if($tranchePrix!=''){
            $sql.=" and prix >= :pmin and prix <= :pmax";
        }
        if($jardin==''){
            $sql.=" and surfJardin is null";
        }
        if($jardin=='oui'){
            $sql.=" and surfJardin is not null";
        }
        if($surfaceMini!=''){
            $sql.=" and surfBien >= :sm";
        }
        if($piecesMini!=''){
            $sql.=" and nbPièce >= :pm";
        }
    }

    $cmmd=$pdo->prepare($sql);
    if($idChoix!=''){
        $cmmd->bindValue(':rId',$idChoix);
    }
    else{
        if($type!=''){
            $cmmd->bindValue(':l', $type);
        }
        if($idVille!=''){
            $cmmd->bindValue(':idv', $idVille);
        }
        if($tranchePrix!=''){
            $cmmd->bindValue(':pmin',$laTranche['prixMin']);
        }
        if($tranchePrix!=''){
            $cmmd->bindValue(':pmax',$laTranche['prixMax']);
        }
        if($surfaceMini!=''){
            $cmmd->bindValue(':sm', $surfaceMini);
        }
        if($piecesMini!=''){
            $cmmd->bindValue(':pm',$piecesMini);
        }
    }
    $cmmd->execute();
    $nbr=$cmmd->rowCount();
    if($nbr==0){
        echo 'Aucun bien ne correspond a ces critères';
        $biens=$cmmd->fetchAll();
        return($biens);
    }
    else{
        $biens=$cmmd->fetchAll();
        return($biens);
    } 
}




function recuperation($pdo,$username)
{
    $requete=$pdo->prepare("SELECT passwd FROM `agents` WHERE mail =:user; ");
    $bvc1=$requete->bindValue(':user',$username,PDO::PARAM_STR);
    $executionOk=$requete->execute();
    $mdphash=$requete->fetch();
    return$mdphash['passwd'];
}

function ajouterBien($pdo, $description, $prix, $adresse, $ville, $codepostal, $surfacebien, $surfacejardin, $nbpiece, $idtype, $titre){
    $sql = "INSERT INTO `biens`(`descript`, `prix`, `adresse`, `idVilles`,`codeP`,`surfBien`,`surfJardin`, `nbPièce`,`idType`, `titre` ) \n"
     . "VALUES (:description,:prix,:adresse,:idVille,:codepostal,:surfacebien,:surfacejardin,:nbpiece,:idtype,:titre);";
    $test=$pdo->prepare($sql);
    $test->bindValue(':description',$description,PDO::PARAM_STR);
    $test->bindValue(':prix',$prix,PDO::PARAM_INT);
    $test->bindValue(':adresse',$adresse,PDO::PARAM_STR);
    $lesVilles = getAllVille($pdo);
    $compteur = 0;
    foreach($lesVilles as $uneVille){
        if($ville == $uneVille['libelleVille']){
            $compteur = $compteur + 1;
        }
    }
    if($compteur!=0){
        $temp = getIdVille($pdo,$ville);
        $test->bindValue(':idVille',$temp['idVille'],PDO::PARAM_INT);
    }
    else{
        ajoutVille($pdo, $ville);
        $temp = getIdVille($pdo,$ville);
        $test->bindValue(':idVille',$temp['idVilles'],PDO::PARAM_INT);
    }
    $test->bindValue(':codepostal',$codepostal,PDO::PARAM_STR);
    $test->bindValue(':surfacebien',$surfacebien,PDO::PARAM_INT);
    $test->bindValue(':surfacejardin',$surfacejardin,PDO::PARAM_INT);
    $test->bindValue(':nbpiece',$nbpiece,PDO::PARAM_INT);
    $test->bindValue(':idtype',$idtype,PDO::PARAM_INT);
    $test->bindValue(':titre',$titre,PDO::PARAM_STR);
    $test->execute();
}

function AfficheInformation($pdo,$id){
    $sql = "SELECT idBien,titre,descript, prix, adresse, libelleVille,codeP,surfBien,surfJardin,nbPièce FROM `biens` INNER JOIN ville on idVilles = idVille WHERE idBien = :id ";
    $test=$pdo->prepare($sql);
    $test->bindValue(':id',$id,PDO::PARAM_INT);
    $test->execute();
    $retour = $test->fetch() ;
    return $retour ;
}

function recupNom($pdo,$mail){
    $sql = "SELECT nom, prenom FROM `agents` WHERE mail = :mail ";
    $test=$pdo->prepare($sql);
    $test->bindValue(':mail',$mail,PDO::PARAM_STR);
    $test->execute();
    $retour = $test->fetch() ;
    return $retour ;
}

function editerBien($pdo,$idEdit,$description,$prix,$adresse,$ville,$codepostal,$surfacebien,$surfacejardin,$nbpiece,$idtype,$titre){
    $sql = "UPDATE biens SET idBien=idBien";
    if($description!=''){
        $sql.=', descript = :d';
    }
    if($prix!=''){
        $sql.=', prix = :p';
    }
    if($adresse!=''){
        $sql.=', adresse = :a';
    }
    if($ville!=''){
        $sql.=', idVilles = :v';
    }
    if($codepostal!=''){
        $sql.=', codeP = :c';
    }
    if($surfacebien!=''){
        $sql.=', surfBien = :sub';
    }
    if($surfacejardin!=''){
        $sql.=', surfJardin = :suj';
    }
    if($nbpiece!=''){
        $sql.=', nbPièce = :nbp'; 
    }
    if($idtype!=''){
        $sql.=', idType = :idtype';
    }
    if($titre!=''){
        $sql.=', titre = :titre';
    }
    $sql.='  WHERE idBien = :edit' ;
    $cmmd=$pdo->prepare($sql);
    //BindsValues
    $cmmd->bindValue(':edit', $idEdit);
    if($description!=''){
        $cmmd->bindValue(':d', $description,PDO::PARAM_STR);
    }
    if($prix!=''){
        $cmmd->bindValue(':p', $prix,PDO::PARAM_INT);
    }
    if($adresse!=''){
        $cmmd->bindValue(':a', $adresse,PDO::PARAM_STR);
    }
    if($ville!=''){
        $lesVilles = getAllVille($pdo);
        $compteur = 0;
        foreach($lesVilles as $uneVille){
        if($ville == $uneVille['libelleVille']){
            $compteur = $compteur + 1;
        }
        }
        if($compteur!=0){
            $temp = getIdVille($pdo,$ville);
            $cmmd->bindValue(':v',$temp['idVille'],PDO::PARAM_INT);
        }
        else{
            ajoutVille($pdo, $ville);
            $temp = getIdVille($pdo,$ville);
            $cmmd->bindValue(':v',$temp['idVille'],PDO::PARAM_INT);
        }
    }
    if($codepostal!=''){
        $cmmd->bindValue(':c', $codepostal,PDO::PARAM_INT);
    }
    if($surfacebien!=''){
        $cmmd->bindValue(':sub', $surfacebien,PDO::PARAM_INT);
    }
    if($surfacejardin!=''){
        $cmmd->bindValue(':suj', $surfacejardin,PDO::PARAM_INT);
    }
    if($nbpiece!=''){
        $cmmd->bindValue(':nbp', $nbpiece,PDO::PARAM_INT); 
    }
    if($idtype!=""){
        $cmmd->bindValue(':idtype', $idtype,PDO::PARAM_INT);
    }
    if($titre!=''){
        $cmmd->bindValue(':titre', $titre,PDO::PARAM_STR);
    }
    $cmmd->execute();
}

function get_all_id($pdo){
    $sql = "SELECT idBien FROM biens";
    $resultat = $pdo->query($sql);

    $lesIds = array();
    while($row = $resultat->fetch()){
        $lesIds[] = $row['idBien'];
    }
    return $lesIds;
    }

function supprBien($pdo,$id){
    $sql="delete from biens where idBien = :id";
    $cmmd=$pdo->prepare($sql);
    $cmmd->bindValue(':id', $id,PDO::PARAM_STR);
    $cmmd->execute();
}

function ajoutVille($pdo,$ville){
    $sql = "INSERT INTO ville (libelleVille) value(:v)";
    $test=$pdo->prepare($sql);
    $test->bindValue(':v', $ville,PDO::PARAM_STR);
    $test->execute();
}

function getAllVille($pdo){
    $sql = "SELECT idVille,libelleVille from ville";
    $test=$pdo->prepare($sql);
    $test->execute();
    $lesVilles = $test->fetchAll();
    return $lesVilles;
}

function getTranche($pdo,$id){
    $sql = "SELECT prixMin, prixMax from tranche where idTranche = :id ";
    $test=$pdo->prepare($sql);
    $test->bindValue(':id', $id,PDO::PARAM_INT);
    $test->execute();
    $laTranche = $test->fetch();
    return $laTranche;
}

function ajouterTranche($pdo){
    $sql = "SELECT max(prixMax) from tranche; ";
    $resultat = $pdo->execute($sql);
    $mini = $resultat;
    $maxi = $mini + 100000;
    $requeteDeux = "INSERT INTO tranche (prixMin,PrixMax) VALUES($mini,$maxi) ;";
    $resultatDeux = $pdo->execute($sql);
}

function getIdVille($pdo, $ville){
    $sql = "SELECT idVille from ville WHERE libelleVille = :lv ;";
    $test=$pdo->prepare($sql);
    $test->bindValue(':lv', $ville,PDO::PARAM_STR);
    $test->execute();
    $idVille = $test->fetch();
    return $idVille;
}

/*
if($prixrentré > prixMax){
   while($prix > prixMax){
    execute->...
   } 
}
*/

function statsVille(){
    echo '<center><div class="liste"><table>';
echo '<tr>';
echo '<th class="thliste">Ville</th>';
echo '<th class="thliste">Occurence</th>';
echo '</tr>';
$sql = "SELECT libelleVille FROM `ville`;";
$test=$pdo->prepare($sql);
$test->execute();
$result=$test->fetchAll(PDO::FETCH_COLUMN, 0);
$sql="select count(recherche.idVille) from recherche join ville on recherche.idVille=ville.idVille where ville.libelleVille=:v and recherche.dateRecherche BETWEEN :dD and :dF;";
$cmmd=$pdo->prepare($sql);
$cmmd->bindValue(':dD',$dateDebut);
$cmmd->bindValue(':dF',$dateFin);
foreach ($result as $element) {
        $cmmd->bindValue(':v',$element);
        $cmmd->execute();
        $count=$cmmd->fetch();
        echo '<tr>';
        echo '<td class="tdliste">' . $element. '</td>';
        echo '<td class="tdliste">' . $count[0]. '</td>';
        echo '</tr>';
               
}

echo '</table></div></center>';
}
function statsTranche(){
    echo '<center><div class="liste"><table>';

echo '<tr>';
echo '<th class="thliste">Tranche</th>';
echo '<th class="thliste">Occurence</th>';
echo '</tr>';
$sql="SELECT prixMin,prixMax FROM `tranche`;";
$test=$pdo->prepare($sql);
$test->execute();
$result=$test->fetchAll();
$sql="select count(recherche.idTranche) from recherche join tranche on recherche.idTranche=tranche.idTranche where tranche.prixMin = :pMin and tranche.prixMax = :pMax and recherche.dateRecherche between :dD and :dF;";
$test=$pdo->prepare($sql);
$test->bindValue(':dD',$dateDebut);
$test->bindValue(':dF',$dateFin);
foreach($result as $element){
    $min=$element[0];
    $max=$element[1];
    $test->bindValue(':pMin',$min);
    $test->bindValue(':pMax',$max);
    $test->execute();
    $count=$test->fetch();
    echo '<tr>';
    echo '<td class="tdliste">' . $min.'-'.$max. '</td>';
    echo '<td class="tdliste">' .$count[0]. '</td>';
    echo '</tr>';
}

echo '</table></div></center>';
}
function statsSurface(){
    echo '<center><div class="liste"><table>';

echo '<tr>';
echo '<th class="thliste">Surface</th>';
echo '<th class="thliste">Occurence</th>';
echo '</tr>';
$sql="SELECT surface,count(surface) FROM `recherche` where surface is not null and recherche.dateRecherche between :dD and :dF group by surface;";
$test=$pdo->prepare($sql);
$test->bindValue(':dD',$dateDebut);
$test->bindValue(':dF',$dateFin);
$test->execute();
$result=$test->fetchAll();
foreach($result as $element){
    $surface=$element[0];
    $count=$element[1];
    echo '<tr>';
    echo '<td class="tdliste">' . $surface.'</td>';
    echo '<td class="tdliste">' . $count. '</td>';
    echo '</tr>';
}

echo '</table></div></center>';
}
