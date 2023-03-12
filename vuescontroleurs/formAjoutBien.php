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
                <h1>Formulaire d'ajout de biens</h1>
		 <p>Bienvenue sur votre formulaire d'ajout de biens, ce formulaire vous permets d'ajouter un bien à une base de donées contenant tous les biens,
                 une fois ajouté une page se créera automatiquement pour le bien, afin d'être sûr des valeurs à entrer vous pouvez survolez ou cliquez sur les 
                 bulles informations "?" à droite des zones de saisie</p>
                <form action="../autres/ajouterBiens.php" method="POST">
                    <div id="formulaire">           
                            <div class="bloc">
                                <div class="colonne1">
                                    <label for="parametre1">Saisissez la description du bien :</label>
                                    </br>  
                                    <input type="text" id="parametre1" name="description" required>
                                </div>    
                                <div class="pictos">
                                    <a class="picto-item" id="pdt" href="#" aria-label="Saisissez la description du bien">?</a>
                                </div>
                            </div>

                            <div class="bloc">
                                <div class="colonne1">
                                    <label for="parametre2">Saisissez le prix de bien :</label>      
                                    </br>                    
                                    <input type="text" id="parametre2" name="prix" required>
                                </div>        
                                <div class="pictos">
                                    <a class="picto-item" id="pdt" href="#" aria-label="Saisissez un nombre">?</a>
                                </div>
                            </div>

                            <div class="bloc">
                                <div class="colonne1">
                                    <label for="parametre3">Saisissez l'adresse :</label>
                                    </br>
                                    <input type="text" id="parametre3" name="adresse" required>
                                </div>    
                                <div class="pictos">
                                    <a class="picto-item" id="pdt" href="#" aria-label="Saisissez l'adresse, numero et rue">?</a>
                                </div>
                            </div>

                            <div class="bloc">
                                <div class="colonne1">
                                    <label for="parametre4">Saisissez la ville du bien :</label>    
                                    </br>                        
                                    <input type="text" id="parametre4" name="ville" required>
                                </div>
                                <div class="pictos">
                                    <a class="picto-item" id="pdt" href="#" aria-label="Saisissez la ville du bien en toute lettre">?</a>
                                </div>
                            </div>

                            <div class="bloc">
                                <div class="colonne1">
                                    <label for="parametre5">Saisissez le Code Postal de la ville du bien:</label>
                                    </br>
                                    <input type="text" id="parametre5" name="codepostal" required>
                                </div>
                                <div class="pictos">
                                    <a class="picto-item" id="pdt" href="#" aria-label="Saisissez un nombre">?</a>
                                </div>
                            </div>
                               
                            <div class="bloc">
                                <div class="colonne1">
                                    <label for="parametre6">Saisissez la surface du bien :</label>
                                    </br>
                                    <input type="text" id="parametre6" name="surfacebien" required>
                                </div>
                                <div class="pictos">
                                    <a class="picto-item" id="pdt" href="#" aria-label="Saisissez la surface du bien, ou du terrain sous forme de nombre en m2">?</a>
                                </div>
                            </div>

                            <div class="bloc">
                                <div class="colonne1">
                                    <label for="parametre7">Saisissez la surface du jardin :</label>
                                    </br>  
                                    <input type="text" id="parametre7" name="surfacejardin">
                                </div>
                                <div class="pictos">
                                    <a class="picto-item" id="pdt" href="#" aria-label="Saisissez la surface du bien, ou du terrain sous forme de nombre en m2</br>Cette valeur peut être nulle, auquel cas ne -saisissez rien">?</a>
                                </div>
                            </div>

                            <div class="bloc">
                                <div class="colonne1">
                                    <label for="parametre8">Saisissez le nombre de pièces du bien :</label> 
                                    </br> 
                                    <input type="text" id="parametre8" name="nbpiece" >
                                </div>
                                <div class="pictos">
                                    <a class="picto-item" id="pdt" href="#" aria-label="Saisissez le nombre de pièces du bien</br>Cette valeur peut être nulle, auquel cas ne -saisissez rien">?</a>
                                </div>                       
                            </div>

                            <div class="blocfin">
                                <div class="colonne1">
                                    <label for="parametre9">Saisissez l'identifiant du type de bien :</label>
                                    </br>
                                    <input type="text" id="parametre9" name="idtype" required>
                                </div>
                                <div class="pictos">
                                    <a class="picto-item" id="pdt" href="#" aria-label="-Saisissez 1 pour une maison \n -Saisissez 2 pour un appartement</br>-Saisissez 3 pour un terrain</br>-Saisissez 4 pour un local</br>-Saisissez 5 pour un immeuble</br>">?</a>
                                </div>
                            </div>

                            <div class="blocfin">
                                <div class="colonne1">
                                    <label for="parametre10">Saisissez le titre d'affichage du bien :</label>      
                                    </br>                   
                                    <input type="text" id="parametre10" name="titre" required>
                                </div>
                                <div class="pictos">
                                    <a class="picto-item" id="pdt" href="#" aria-label="Saisissez le titre, c'est à dire la phrase qui décrira le bien">?</a>
                                </div>
                            </div>     
                    </div>


                    <div id="formulairelogin">
                        <input type="submit" value="Ajouter le bien à la base de données">
                    </div>
                </form>

            </div>               
        </div>

    	<?php
        include('../inc/piedDePage.inc');
    	?> 

</body>
	
</html>
