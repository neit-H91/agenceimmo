<?php
    session_start();
?>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../css/stylelogin.css" media="screen" type="text/css" />
    </head>
    <body>
            <?php
            include('../inc/entete.inc');
            ?>
        
        <div id="page">
            <div id="contenu">
                <h1>Connexion</h1>
                <form action="../autres/verification.php" method="POST">
                    <div id="formulaire">
                        <div id="formulairegauche">
                            <label>Nom d'utilisateur</label>
                            <label>Mot de passe</label>
                        </div>
                        <div id="formulairedroite">
                            <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required="">
                            <input type="password" placeholder="Entrer le mot de passe" name="password" required="">
                        </div>
                    </div>
                    <div id="formulairelogin">
                        <input type="submit" id="submit" value="LOGIN">
                    </div>
                </form></div>               
        </div>

    <?php
    include('../inc/piedDePage.inc');
    ?> 

</body>
</html>
