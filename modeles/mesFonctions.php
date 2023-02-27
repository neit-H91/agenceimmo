<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

function connexionBDD()
{
    $bdd ='mysql:host=localhost;dbname=test';
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

function newTypes($pdo, $id, $libelle,){
    //$date = NOW();
    $sql = "INSERT INTO `types`(`idTypes`, `libelle`) \n"
     . "VALUES (:id,:libelle);";
    $test=$pdo->prepare($sql);
    $test->bindValue(':id',$id,PDO::PARAM_INT);
    $test->bindValue(':libelle',$libelle,PDO::PARAM_STR);
    $test->execute();
    
}

function listerBiens($pdo){
    $sql = "SELECT * FROM `biens`";
    $test=$pdo->prepare($sql);
    $test->execute();
    $biens = $test->fetchAll();
    return $biens;
}

function getUnBien($pdo, $unId){
    $sql = "SELECT prix FROM `biens` WHERE id= :id";
    $objet=$pdo->prepare($sql);
    $objet->bindValue(':id',$unId,PDO::PARAM_INT);
    $objet->execute(array(':id' => $unId));
    $leBien = $objet->fetch();
    if (!is_array($leBien)){
        $leBien=-1;
    }    
    $objet-> closeCursor();
    return $leBien;
    
}    





    
    /*array(':id' => $unId)
     * 
     * mysql_connect('localhost', 'root', '');
    mysql_select_db('test');
    mysql_set_charset('utf8');
    $result = mysql_query($sql);

    if(false !== $result) 
    {
        if(mysql_num_rows($result) > 0)
        {
            echo '<table border="1">';
        
            $row = mysql_fetch_assoc($result);
        
            echo '<tr><th>', implode('</th><th>', array_keys($row)), '</th></tr>';
        
            do
            {
                echo '<tr><td>', implode('</td><td>', $row), '</td></tr>';
            }
            while($row = mysql_fetch_row($result));
        
            echo '</table>';
        }
    
        mysql_free_result($result);    
    } */
