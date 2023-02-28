<head>
    <meta charset="utf-8">
    <!-- importer le fichier de style -->
    <link rel="stylesheet" href="stylemenuagent.css" media="screen" type="text/css" />
</head>
<body>
    <header>
        <?php
        include('header.php');
        ?>
    </header>
    <div id="page">
        <div id="contenu">
            <h1>Bienvenu sur votre espace :</h1>
            <section class="acheter-links">
                <button onclick="window.location.href = 'acheter-appartements.html';">Modifier un bien</button>
                <button onclick="window.location.href = 'acheter-appartements.html';">Ajouter un bien</button>
            </section>
        </div>
    </div>
    <footer>
        <?php
        include('footer.php');
        ?> 
    </footer>
</body>
</html>
