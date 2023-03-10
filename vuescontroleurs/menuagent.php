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
            <section class="acheter-links">
                <button onclick="window.location.href = 'formAjoutBien.php';">Ajouter un bien</button>
                <button onclick="window.location.href = '#';">Modifier un bien</button>
                <button onclick="window.location.href = '#';">Supprimer un bien</button>
              <button onclick="window.location.href = '../autres/deconnexion.php';">Se déconnecter</button>
            </section>
        </div>
    </div>
        
    <?php
        include('../inc/piedDePage.inc');
    ?> 
        
</body>
</html>
