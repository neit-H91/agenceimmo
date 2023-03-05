<html>
    
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Acheter</title>
        <link rel="stylesheet" href="../css/style-accueil.css">
    </head>
    
    <body> 

                <?php
                    include_once '../modeles/mesFonctionsAccesBDD.php';
                    $pdo = connexionBDD();
                    $V=$_POST['parametre1'];
                    $T=$_POST['parametre2'];
                    $desBiens = ChercheBien($pdo, $T, $V);
                    foreach ($desBiens as $unBien){
                        echo '<option value="'.'">'.'- '.$unBien['titre'].', un(e) '.$unBien['libelle'].' au prix de '.$unBien['prix'].'€ à '.$unBien['ville'].'</option>';
                    }
                ?>  

    </body>
</html>
