<html>
	
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de Recherche</title>
    <link rel="stylesheet" href="../css/style-formAjoutBien.css">
</head>
	
<body>

	<?php
	include('../inc/entete.inc');
	?>

	<div id="page">
            <div id="contenu">
                <h1>Formulaire de recherche</h1>
                <form action="../autres/ajouterBiens.php" method="POST">
                    <div id="formulaire">
                        <div id="blocs1">    
                            <div class="bloc">
                                <label for="parametre1">Saisissez la description du bien :</label>
                                <p></p>
                                <input type="text" id="parametre1" name="description" required>
                            </div>
                            <div class="bloc">
                                <label for="parametre2">Saisissez le prix de bien :</label>      
                                <p></p>                      
                                <input type="text" id="parametre2" name="prix" required>
                            </div>
                            <div class="bloc">
                                <label for="parametre3">Saisissez l'adresse :</label>
                                <p></p>
                                <input type="text" id="parametre3" name="adresse" required>
                            </div>
                            <div class="bloc">
                                <label for="parametre4">Saisissez la ville du bien :</label>    
                                <p></p>                        
                                <input type="text" id="parametre4" name="ville" required>
                            </div>
                            <div class="bloc">
                                <label for="parametre5">Saisissez le Code Postal de la ville du bien:</label>
                                <p></p>
                                <input type="text" id="parametre5" name="codepostal" required>
                            </div>
                        </div>
                        <div id="blocs2">
                            <div class="bloc">
                                <label for="parametre6">Saisissez la surface du bien :</label>
                                <p></p>                          
                                <input type="text" id="parametre6" name="surfacebien" required>
                            </div>
                            <div class="bloc">
                                <label for="parametre7">Saisissez la surface du jardin :</label>
                                <p></P>
                                <input type="text" id="parametre7" name="surfacejardin">
                            </div>
                            <div class="bloc">
                                <label for="parametre8">Saisissez le nombre de pièces du bien :</label>   
                                <p></p>                         
                                <input type="text" id="parametre8" name="nbpiece" >
                            </div>
                            <div class="bloc">
                                <label for="parametre9">Saisissez l'identifiant du type de bien :</label>
                                <p></p>
                                <input type="text" id="parametre9" name="idtype" required>
                            </div>
                            <div class="bloc">
                                <label for="parametre10">Saisissez le titre d'affichage du bien :</label>      
                                <p></p>                      
                                <input type="text" id="parametre10" name="titre" required>
                            </div>
                        </div>
                    </div>
                    <div id="formulairelogin">
                        <input type="submit" value="Rechercher">
                    </div>
                </form>

                <div id="recherche">
                <?php
                if (isset($_POST["parametre1"]) && isset($_POST["parametre2"]) && isset($_POST["parametre3"]) && isset($_POST["parametre4"]) && isset($_POST["parametre5"]) && isset($_POST["parametre6"]) && isset($_POST["parametre9"]) && isset($_POST["parametre10"])){                    
                    include('../inc/validationAjoutBien.inc');
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
