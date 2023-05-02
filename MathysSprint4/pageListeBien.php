<?php
    session_start();
?>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/style-listerBiens.css" media="screen" type="text/css" />
</head>
<body>

        <?php
          include('../inc/entete.inc');
        ?>

  
        <div id="page">
            <div id="contenu">
                <h1>Liste des biens</h1>
                <form method="post">
                <div class="blocfin">
                  <div class="colonne1">
                    <label for="formAjoutTypeBien">Triez en fonction de leur référence :</label>
                    </br>
                    <select name="ID" id="formAjoutTypeBien">
                      <option value="">Non</option>
                      <option value="idAsc">Dans l'ordre croissant</option>
                      <option value="idDesc">Dans l'ordre décroissant</option>
                    </select>                                
                  </div>
                  <div class="pictos">
                    <a class="picto-item" id="pdt" href="#" aria-label="-Saisissez 1 pour une maison \n -Saisissez 2 pour un appartement</br>-Saisissez 3 pour un terrain</br>-Saisissez 4 pour un local</br>-Saisissez 5 pour un immeuble</br>">?</a>
                  </div>
                </div>

                <div class="blocfin">
                  <div class="colonne1">
                    <label for="formAjoutTypeBien">Triez en fonction de la ville :</label>
                    </br>
                    <select name="VILLE" id="formAjoutTypeBien">
                      <option value="">Non</option>
                      <option value="villeAsc">Dans l'ordre alphabétique</option>
                      <option value="villeDesc">Dans l'ordre désalphabétique</option>
                    </select>                                
                  </div>
                  <div class="pictos">
                    <a class="picto-item" id="pdt" href="#" aria-label="-Saisissez 1 pour une maison \n -Saisissez 2 pour un appartement</br>-Saisissez 3 pour un terrain</br>-Saisissez 4 pour un local</br>-Saisissez 5 pour un immeuble</br>">?</a>
                  </div>
                </div>

                <div class="blocfin">
                  <div class="colonne1">
                    <label for="formAjoutTypeBien">Triez en fonction du type de Bien :</label>
                    </br>
                    <select name="TYPE" id="formAjoutTypeBien">
                      <option value="">Non</option>
                      <option value="type">Oui</option> 
                    </select>                                
                  </div>
                  <div class="pictos">
                    <a class="picto-item" id="pdt" href="#" aria-label="-Saisissez 1 pour une maison \n -Saisissez 2 pour un appartement</br>-Saisissez 3 pour un terrain</br>-Saisissez 4 pour un local</br>-Saisissez 5 pour un immeuble</br>">?</a>
                  </div>
                </div>

                <div class="blocfin">
                  <div class="colonne1">
                    <label for="formAjoutTypeBien">Triez en fonction du prix :</label>
                    </br>
                    <select name="PRIX" id="formAjoutTypeBien">
                      <option value="">Non</option>
                      <option value="prixAsc">Dans l'ordre croissant</option>
                      <option value="prixDesc">Dans l'ordre décroissant</option>
                    </select>                                
                  </div>
                  <div class="pictos">
                    <a class="picto-item" id="pdt" href="#" aria-label="-Saisissez 1 pour une maison \n -Saisissez 2 pour un appartement</br>-Saisissez 3 pour un terrain</br>-Saisissez 4 pour un local</br>-Saisissez 5 pour un immeuble</br>">?</a>
                  </div>
                </div>
                <input type="submit" value="Rechercher">
                </form>
                <!--<button onclick="window.location.href = '../autres/listerBiens.php';">Afficher la liste triée</button> -->



                <div id="liste">
                  <?php      
                    if (isset($_POST["ID"]) || isset($_POST["VILLE"]) || isset($_POST["TYPE"]) || isset($_POST["PRIX"])){                                
                      include('../autres/listerBiens.php');
                    }
    	            ?>
                </div>
            </div>
        </div>
  

        <?php
          include('../inc/piedDePage.inc');
        ?> 

</body>
</html>