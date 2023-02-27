<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../styles/styleheader.css" media="screen" type="text/css" />

    </head>
    <body>
        <header>
            <?php
            include('../inc/header.php');
            ?>
        </header>
        
        <div id="Aligne-choix">
            <!-- zone de connexion -->
            <form action="verification.php" method="POST">

                <h1> Recherche de Biens</h1>

                <form>
                    <label for="Ville"> Ville :</label>
                    <input type="textUN" id="valeur1" name="valeur1"><br>

                    <label for="Type"> Type :</label>
                    <input type="textDEUX" id="valeur2" name="valeur2"><br>
                    <div id="Boite-bouton">
                        <input type="submit" value="Trouver mon bien">
                    </div>
                </form>


        </div>
        <footer>
            <link rel="stylesheet" href="../styles/stylefooter.css" media="screen" type="text/css" />
            <?php
            include('../inc/footer.php');
            ?> 
        </footer>
    </body>
</html>
