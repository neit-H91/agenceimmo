<html>
<?php
    include_once '../modeles/mesFonctionsAccesBDD.php';
    $pdo = connexionBDD();
    if(empty($_POST['surfacejardin'])){
        $SJ=NUll;
    }
    else{
        $SJ=$_POST['surfacejardin'];
    }
    if(empty($_POST['nbpiece'])){
        $NBP=NUll;
    }
    else{
        $NBP=$_POST['nbpiece'];
    }

    ajouterBien($pdo, $_POST['description'],  $_POST['prix'], $_POST['adresse'], $_POST['ville'], $_POST['codepostal'], $_POST['surfacebien'] , $SJ , $NBP , $_POST['idtype'], $_POST['titre']);
?>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/stylemenuagent.css" media="screen" type="text/css" />
</head>
<body>
    
    <?php
        include('../inc/entete.inc');
    ?>
    
    <div id="page">
        <div id="contenu">
            <h1>Bienvenue sur votre espace :</h1>
            <h3>Votre bien a bien été ajouté que voulez vous faire maintenant ?<h3>
            <section class="acheter-links">
                <button onclick="window.location.href = '../vuescontroleurs/formAjoutBien.php';">Ajouter un bien</button>
                <button onclick="window.location.href = '../vuescontroleurs/#';">Modifier un bien</button>
                <button onclick="window.location.href = '../vuescontroleurs/#';">Supprimer un bien</button>
            </section>
        </div>
    </div>
        
    <?php
        include('../inc/piedDePage.inc');
    ?> 
        
</body>
</html> 
