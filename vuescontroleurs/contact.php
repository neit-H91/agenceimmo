<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Immobilier</title>
    <link rel="stylesheet" href="../css/style-contact.css">
</head>
<body>
    <header>
        <nav>
            <h1><a href="../index.html">Immobilier</a></h1>
            <div class="right">
                <p><a href="acheter/acheter-categories.php">Acheter</a></p>
                <p><a href="#">Vendre</a></p>
                <p><a href="#">Louer</a></p>
                <button onclick="window.location.href = 'pages/contact.php';">Contact</button>
            </div>
        </nav>
    </header>

        <section class="contact-section">
            <h1>Contactez nous !</h1>

            <form class="contact-form" action="contact.html" method="post">
                <input type="text" class="contact-form-text" placeholder="Nom">
                <input type="email" class="contact-form-text" placeholder="Email">
                <input type="text" class="contact-form-text" placeholder="Téléphone">
                <textarea class="contact-form-text" placeholder="Message"></textarea>
                <input type="submit" class="contact-form-btn" value="Envoyer">
            </form>
        </section>
    <footer>
        <div class="column">
            <h3>Achat</h3>
            <p>Maison</p>
            <p>Apartement</p>
            <p>Locaux</p>
            <p>Terrains</p>
            <p>Immeubles</p>
        </div>
        <div class="column">
            <h3>Vente</h3>
            <p>Maison</p>
            <p>Apartement</p>
            <p>Locaux</p>
            <p>Terrains</p>
            <p>Immeubles</p>
        </div>
    </footer>
</body>
</html>
