<html>

<?php
session_start();
// On teste si la variable de session existe et contient une valeur
if(empty($_SESSION['login'])) 
{
  // Si inexistante ou nulle, on redirige vers le formulaire de login
  header('Location: login.php');
  exit();
}
include_once '../autres/recuperationNom.php';
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
            <h1>Supprimer un bien : </h1>
            <?php
                    include_once '../modeles/mesFonctionsAccesBDD.php';
                    $bdd = connexionBDD();
                    if (isset($_POST["idbien"])){
                        include('../autres/supprBien.php');
                    }
                    

                ?>
                    
            <form method="post" action="">
                <div>
                    <?php include('../autres/listerTousLesBiens.php'); ?>
                        <label for="id">choisir l'id du bien a supprimer</label>
                        <select name="idbien" id="idbien">
                        <option value=""></option>
                        <?php
                                    $reponse = $bdd->query('SELECT distinct idBien FROM biens order by idBien asc');
                                    while ($donnes = $reponse->fetch()) {
                                        ?>
                                        <option value="<?php echo $donnes['idBien']; ?>"><?php echo $donnes['idBien']; ?></option>;
                                        <?php
                                    }
                                    $reponse->closeCursor();
                                    ?>
                        </select>
                        <input type="submit" value="Supprimer">
                    
                </div>
            </form>

            <section class="acheter-links">
              <button onclick="window.location.href = 'menuagent.php';">Retour menu</button>
            </section>
            <div id="result">
                
            </div>
        </div>
    </div>
        
    <?php
        include('../inc/piedDePage.inc');
    ?> 
        
</body>
</html>
