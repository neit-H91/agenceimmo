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

function listerBiens($pdo){
    $sql = " SELECT titre,libelle,prix,ville FROM biens INNER JOIN types ON idType = idTypes ";
    $test=$pdo->prepare($sql);
    $test->execute();
    $biens = $test->fetchAll();
    return $biens;
}

function ChercheBien($pdo,$type,$ville)
{
    $sql = " SELECT titre,libelle,prix,ville,idBien FROM biens INNER JOIN types ON idType = idTypes WHERE ville = :v AND libelle = :l";
    $test=$pdo->prepare($sql);
    $test->bindValue(':v',$ville);
    $test->bindValue(':l',$type);
    $test->execute();
    $lesBiens=$test->fetchAll();
    return $lesBiens;
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
    $sql = "INSERT INTO `biens`(`description`, `prix`, `adresse`, `ville`,`codeP`,`surfBien`,`surfJardin`, `nbPièce`,`idType`, `titre` ) \n"
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
    $sql = "SELECT (`description`, `prix`, `adresse`, `ville`,`codeP`,`surfBien`,`surfJardin`, `nbPièce`,`idType`, `titre`)  FROM `biens` WHERE idBien = $id";
    $test=$pdo->prepare($sql);
    $test->execute();
}
