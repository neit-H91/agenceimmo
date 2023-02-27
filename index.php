<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Immobilier</title>
        <link rel="stylesheet" href="css/style-accueil.css">
    </head>
    <body>
        <header>
        <?php
            include('inc/entete.inc');
        ?>
        </header>
    
    <section class="welcome">
        <div class="welcome-content">
            <p>Bienvenue sur le site !
            </p>
        </div>
        <img class="img-accueil" src="img/century21_the_header-image.jpg" alt="">
    </section>

    <article class="infos">
        <div class="infos-description">
            <h1>Le réseau Laforêt, ce sont plus de 700 agences partout en France.</h1>
            <p>
                Vous trouverez forcément une agence immobilière Laforêt près de chez vous, 
                avec des conseillers immobiliers à votre écoute de vos projets : 
                achat, vente, location, gestion, pour votre maison ou votre appartement.
            </p>
            <button onclick="window.location.href = 'pages/acheter/acheter-categories.html';">Trouver un bien</button>
        </div>
        <aside class="img-infos">
            <img src="img/image.png" alt="">
        </aside>
    </article>

    <section class="presentation-biens">
        <h1>Nos derniers biens</h1>
        <div class="img-biens">
            <img src="img/maisons/maison1/img1.jpg" alt="">
            <img src="img/maisons/maison2/img2.jpg" alt="">
            <img src="img/appart/appart1/img1.jpg" alt="">
        </div>
    </section>
     
    <footer>    
    <?php
       include('../inc/piedDePage.php');
    ?> 
    </footer>   
        
</body>
</html>

