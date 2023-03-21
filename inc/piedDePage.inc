<head>
    <link rel="stylesheet" href="../css/stylefooter.css">
</head>
<html>
    <footer>
        <div class="column">
            <h3>Navigation</h3>
            <p><a href="../index.html">Acceuil</a></p>
            <p><a class="btn-contact" href="../vuescontroleurs/contact.php">Contact</a></p>
            <?php
            if (isset($_SESSION['login'])){
            ?>
                <p><a class="btn-connexion" href="../autres/deconnexion.php">Se déconnecter</a></p>
            <?php
            }
            else{
            ?>
                <p><a class="btn-connexion" href="../vuescontroleurs/login.php">Se connecter</a></p>
            <?php
            }
            ?>
        </div>
    </footer> 
</html>

