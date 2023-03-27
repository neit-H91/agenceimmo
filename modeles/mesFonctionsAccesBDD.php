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
    $sql = " SELECT titre,libelle,prix,ville,idBien FROM biens INNER JOIN types ON idType = idTypes ";
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
                $sql.=" ORDER BY ville ASC";
            }
            if($ville=='villeDesc'){
                $sql.=" ORDER BY ville DESC";
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

function ChercheBien($pdo, $type, $ville,$prix,$jardin,$surfaceMini,$piecesMini,$idChoix) {
    $sql = " SELECT titre,libelle,prix,ville,idBien FROM biens INNER JOIN types ON idType = idTypes where 1=1";
    if($idChoix!=''){
        $sql.=" and idBien = :rId";
    }
    else{
        if($type!=''){
            $sql.=" and libelle = :l";
        }
        if($ville!=''){
            $sql.=" and ville = :v";
        }
        if($prix!=''){
            $sql.=" and prix <= :p";
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
        if($ville!=''){
            $cmmd->bindValue(':v', $ville);
        }
        if($prix!=''){
            $cmmd->bindValue(':p',$prix);
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
    $sql = "INSERT INTO `biens`(`descript`, `prix`, `adresse`, `ville`,`codeP`,`surfBien`,`surfJardin`, `nbPièce`,`idType`, `titre` ) \n"
     . "VALUES (:description,:prix,:adresse,:ville,:codepostal,:surfacebien,:surfacejardin,:nbpiece,:idtype,:titre);";
    $test=$pdo->prepare($sql);
    $test->bindValue(':description',$description,PDO::PARAM_STR);
    $test->bindValue(':prix',$prix,PDO::PARAM_INT);
    $test->bindValue(':adresse',$adresse,PDO::PARAM_STR);
    $test->bindValue(':ville',$ville,PDO::PARAM_STR);
    $test->bindValue(':codepostal',$codepostal,PDO::PARAM_STR);
    $test->bindValue(':surfacebien',$surfacebien,PDO::PARAM_INT);
    $test->bindValue(':surfacejardin',$surfacejardin,PDO::PARAM_INT);
    $test->bindValue(':nbpiece',$nbpiece,PDO::PARAM_INT);
    $test->bindValue(':idtype',$idtype,PDO::PARAM_INT);
    $test->bindValue(':titre',$titre,PDO::PARAM_STR);
    $test->execute();
}

function AfficheInformation($pdo,$id){
    $sql = "SELECT idBien,titre,descript, prix, adresse, ville,codeP,surfBien,surfJardin,nbPièce FROM `biens` WHERE idBien = :id ";
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
        $sql.=', ville = :v';
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
        $cmmd->bindValue(':v', $ville,PDO::PARAM_STR);
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

