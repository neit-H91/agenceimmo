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
                </div>
                <div id="ou">
                  <a>OU</a>
                </div>
                <div id="baspage">
                <div class="blocfin">
                  <div class="colonne2">
                    <label for="formAjoutTypeBien">Triez en fonction de la ville :</label>
                    </br>
                    <select name="VILLE" id="formAjoutTypeBien">
                      <option value="">Non</option>
                      <option value="villeAsc">Dans l'ordre alphabétique</option>
                      <option value="villeDesc">Dans l'ordre désalphabétique</option>
                    </select>                                
                  </div>
                </div>

                <div class="blocfin">
                  <div class="colonne2">
                    <label for="formAjoutTypeBien">Triez en fonction du type de Bien :</label>
                    </br>
                    <select name="TYPE" id="formAjoutTypeBien">
                      <option value="">Non</option>
                      <option value="type">Oui</option> 
                    </select>                                
                  </div>
                </div>

                <div class="blocfin">
                  <div class="colonne2">
                    <label for="formAjoutTypeBien">Triez en fonction du prix :</label>
                    </br>
                    <select name="PRIX" id="formAjoutTypeBien">
                      <option value="">Non</option>
                      <option value="prixAsc">Dans l'ordre croissant</option>
                      <option value="prixDesc">Dans l'ordre décroissant</option>
                    </select>                                
                  </div>
                </div>
                </div>
                <div id="rechercher">
                <input type="submit" value="Rechercher">
                </div>
                </form>
                <!--<button onclick="window.location.href = '../autres/listerBiens.php';">Afficher la liste triée</button> -->



                <div id="liste">
                  <?php      
                    if (isset($_POST["ID"]) || isset($_POST["VILLE"]) || isset($_POST["TYPE"]) || isset($_POST["PRIX"])){                                
                      include('../autres/listerBiens.php');
                    }
                    else{
                      include('../autres/listerTousLesBiens.php');
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

