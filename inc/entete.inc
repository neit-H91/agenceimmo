<head>
    <link rel="stylesheet" href="../css/styleheader.css">
</head>
<html>
    <header>
        <nav>
            <h1><a href="../index.html">Immobilier</a></h1>
            <div class="right">
                <p><a href="../vuescontroleurs/formRechercheBien.php">Chercher un Bien</a></p>
                <p><a class="btn-contact" href="../vuescontroleurs/contact.php">Contact</a></p>
                <?php
                if (isset($_SESSION['login'])){
                    echo'<p><a href="../vuescontroleurs/menuagent.php"><input type="button" value="Menu Agent" class="btn-contact" /></a></p>';
                }              
                ?>
            </div>
        </nav>
    </header>
</html>
