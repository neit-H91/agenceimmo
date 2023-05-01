<html>
    <form method="post">
    <label for="date">Sélectionnez la date de début :</label>
    <input type="date" id="dateDebut" name="dateDebut">
    <br>
    <label for="date">Sélectionnez la date de fin :</label>
    <input type="date" id="dateFin" name="dateFin">
    <br>
    <input type="submit" value="Valider">
    </form>
    <br>
</html>

<?php

//on insère le fichier qui contient les fonctions
include_once '../modeles/mesFonctionsAccesBDD.php';

//appel de la fonction qui permet de se connecter à la base de données
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
echo $dateDebut.' '.$dateFin;

echo '<center><div class="liste"><table>';
echo '<tr>';
echo '<th class="thliste">Ville</th>';
echo '<th class="thliste">Occurence</th>';
echo '</tr>';
$sql = "SELECT libelleVille FROM `ville`;";
$test=$pdo->prepare($sql);
$test->execute();
$result=$test->fetchAll(PDO::FETCH_COLUMN, 0);
foreach ($result as $element) {
        $sql="select count(recherche.idVille) from recherche join ville on recherche.idVille=ville.idVille where ville.libelleVille=:v and recherche.dateRecherche BETWEEN :dD and :dF;";
        $cmmd=$pdo->prepare($sql);
        $cmmd->bindValue(':v',$element);
        $cmmd->bindValue(':dD',$dateDebut);
        $cmmd->bindValue(':dF',$dateFin);
        $cmmd->execute();
        $count=$cmmd->fetch();
        echo '<tr>';
        echo '<td class="tdliste">' . $element. '</td>';
        echo '<td class="tdliste">' . $count[0]. '</td>';
        echo '</tr>';
        
}

echo '</table></div></center>';
echo'<br>';

echo '<center><div class="liste"><table>';

echo '<tr>';
echo '<th class="thliste">Tranche</th>';
echo '<th class="thliste">Occurence</th>';
echo '</tr>';
$sql="SELECT prixMin,prixMax FROM `tranche`;";
$test=$pdo->prepare($sql);
$test->execute();
$result=$test->fetchAll();
foreach($result as $element){
    $sql="select count(recherche.idTranche) from recherche join tranche on recherche.idTranche=tranche.idTranche where tranche.prixMin = :pMin and tranche.prixMax = :pMax and recherche.dateRecherche between :dD and :dF;";
    $test=$pdo->prepare($sql);
    $test->bindValue(':dD',$dateDebut);
    $test->bindValue(':dF',$dateFin);
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

echo'<br>';

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
?>

