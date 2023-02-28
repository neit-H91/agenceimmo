

<html>
    <head>
        <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <link rel="stylesheet" href="stylelogin.css" media="screen" type="text/css" />
    </head>
    <body>
        <header>
            <?php
            include('header.php');
            ?>
        </header>
        <div id="page">
            <div id="contenu">
                <h1>Connexion</h1>
                <form action="verification.php" method="POST">
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
    </form> 
</div>
<footer>
    <?php
    include('footer.php');
    ?> 
</footer>
</body>
</html>