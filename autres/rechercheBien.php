    <?php             
        include_once '../modeles/mesFonctionsAccesBDD.php';               
        $pdo = connexionBDD();           
        $V=$_POST['ville'];   
        $T=$_POST['type'];
        $P=$_POST['prix'];
        $J=$_POST['jardin'];
        $biens = ChercheBien($pdo, $T, $V,$P,$J);
        foreach ($biens as $unBien){          
            echo '<option value="'.'">'.'- '.$unBien['titre'].', un(e) '.$unBien['libelle']
            .' au prix de '.$unBien['prix'].'€ à '.$unBien['ville'].'</option>'
    ?>
            <a href="AfficherBien.php?id=<?php echo $unBien['idBien'] ?>"> Cliquez-ici pour le voir </a>
    <?php                 
        }         
    ?>  
