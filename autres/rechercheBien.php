    <?php             
        include_once '../modeles/mesFonctionsAccesBDD.php';               
        $pdo = connexionBDD();           
        $V=$_POST['ville'];   
        $T=$_POST['type'];
        $P=$_POST['prixMin'];
        $J=$_POST['jardin'];
        $SM=$_POST['surfaceMini'];
        $PM=$_POST['piecesMini'];
        $D=$_POST['prixMax'];
        $ID=$_POST['idChoix'];
        $biens = ChercheBien($pdo, $T, $V,$P,$D,$J,$SM,$PM,$ID);
        //$oui=$biens->rowCount();
        if($biens!=null){
            echo '<center><div class="liste"><table>';
            echo '<tr>';
            echo '<th class="thliste">Référence</th>';
            echo '<th class="thliste">Ville</th>';
            echo '<th class="thliste">Type</th>';
            echo '<th class="thliste">Prix</th>';
            echo '<th class="thliste">Voir le bien</th>';
            echo '</tr>';
        
            foreach ($biens as $unBien){          
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
        }
        //$pdo = null;
?>
