<?php
include_once '../modeles/mesFonctionsAccesBDD.php';
$pdo = connexionBDD();
?>

<?php
    include_once '../modeles/mesFonctionsAccesBDD.php';
    //$lesBiens = listerBiens($pdo);
    $reponse = $pdo->query('SELECT idBien,libelle,prix,ville FROM biens INNER JOIN types ON idType = idTypes order by idBien');

        echo '<center><div class="liste"><table>';
        echo '<tr>';
        echo '<th class="thliste">Référence</th>';
        echo '<th class="thliste">Ville</th>';
        echo '<th class="thliste">Type</th>';
        echo '<th class="thliste">Prix</th>';
        echo '<th class="thliste">Voir le bien</th>';
        echo '</tr>';
   
        while($unBien = $reponse->fetch()){ // Renvoit les valeurs de la bdd
            echo '<tr>';
            echo '<td class="tdliste">' . $unBien['idBien'] . '</td>';
            echo '<td class="tdliste">' . $unBien['ville'] . '</td>';
            echo '<td class="tdliste">' . $unBien['libelle'] . '</td>';
            echo '<td class="tdliste">' . $unBien['prix'] .' €'. '</td>';
            echo '<td class="tdliste">' ?><a href="AfficherBien.php?id=<?php echo $unBien['idBien'] ?>"> Cliquez-ici pour le voir </a></td>
            <?php
            echo '</tr>';
        }
        echo '</table></div></center>';
        //$pdo = null;
?>
