    <?php             
        include_once '../modeles/mesFonctionsAccesBDD.php';               
        $pdo = connexionBDD();           
        $V=$_POST['parametre1'];   
        $T=$_POST['parametre2'];           
        $desBiens = ChercheBien($pdo, $T, $V);
        foreach ($desBiens as $unBien){          
            echo '<option value="'.'">'.'- '.$unBien['titre'].', un(e) '.$unBien['libelle']
            .' au prix de '.$unBien['prix'].'€ à '.$unBien['ville'].'</option>'
    ?>
            <a href="AfficherBien.php?id=<?php echo $unBien['idBien'] ?>"> Cliquez-ici pour le voir </a>
    <?php                 
        }         
    ?>  
