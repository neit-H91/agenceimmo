<?php
session_start();
// On teste si la variable de session existe et contient une valeur
if(empty($_SESSION['login'])) 
{
  // Si inexistante ou nulle, on redirige vers le formulaire de login
  header('Location: login.php');
  exit();
}
?>
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
                <h1>Formulaire d'édit de biens</h1>
		 <p>Bienvenue sur votre formulaire d'édit des biens, ce formulaire vous permets d'éditer les informations d'un bien de la base de donées ,
                 une fois édité les informations seront  automatiquement mise à jour sur la page du bien, afin d'être sûr des valeurs à éditer vous pouvez survolez ou cliquez sur les 
                 bulles informations "?" à droite des zones de saisie, pour ne rien changer, laissez la zone de texte vide.</p>
                <form action="../autres/editerBien.php" method="POST">
                    <div id="formulaire">
                        
                    <!-- A faire, vérifier si les valeurs son vide, les autoriser-->
                    <div class="blocfin">
                                <div class="colonne1">
                                    <label for="parametreid">Saisissez l'id du bien à éditer :</label>      
                                    </br>                   
                                    <input type="text" id="parametreid" name="idB" required>
                                </div>
                                <div class="pictos">
                                    <a class="picto-item" id="pdt" href="#" aria-label="Saisissez l'id, il ne peut pas être changé">?</a>
                                </div>
                            </div>  

                            <div class="bloc">
                                <div class="colonne1">
                                    <label for="parametre1">Saisissez la nouvelle description  du bien :</label>
                                    </br>  
                                    <input type="text" id="parametre1" name="description" >
                                </div>    
                                <div class="pictos">
                                    <a class="picto-item" id="pdt" href="#" aria-label="Saisissez la description du bien">?</a>
                                </div>
                            </div>

                            <div class="bloc">
                                <div class="colonne1">
                                    <label for="parametre2">Saisissez le nouveau prix de bien :</label>      
                                    </br>                    
                                    <input type="text" id="parametre2" name="prix" >
                                </div>        
                                <div class="pictos">
                                    <a class="picto-item" id="pdt" href="#" aria-label="Saisissez un nombre">?</a>
                                </div>
                            </div>

                            <div class="bloc">
                                <div class="colonne1">
                                    <label for="parametre3">Saisissez  la nouvelle adresse :</label>
                                    </br>
                                    <input type="text" id="parametre3" name="adresse" >
                                </div>    
                                <div class="pictos">
                                    <a class="picto-item" id="pdt" href="#" aria-label="Saisissez l'adresse, numero et rue">?</a>
                                </div>
                            </div>

                            <div class="bloc">
                                <div class="colonne1">
                                    <label for="parametre4">Saisissez la nouvelle ville du bien :</label>    
                                    </br>                        
                                    <input type="text" id="parametre4" name="ville" >
                                </div>
                                <div class="pictos">
                                    <a class="picto-item" id="pdt" href="#" aria-label="Saisissez la ville du bien en toute lettre">?</a>
                                </div>
                            </div>

                            <div class="bloc">
                                <div class="colonne1">
                                    <label for="parametre5">Saisissez le nouveau Code Postal de la ville du bien:</label>
                                    </br>
                                    <input type="text" id="parametre5" name="codepostal" >
                                </div>
                                <div class="pictos">
                                    <a class="picto-item" id="pdt" href="#" aria-label="Saisissez un nombre">?</a>
                                </div>
                            </div>
                               
                            <div class="bloc">
                                <div class="colonne1">
                                    <label for="parametre6">Saisissez la nouvelle surface du bien :</label>
                                    </br>
                                    <input type="text" id="parametre6" name="surfacebien" >
                                </div>
                                <div class="pictos">
                                    <a class="picto-item" id="pdt" href="#" aria-label="Saisissez la surface du bien, ou du terrain sous forme de nombre en m2">?</a>
                                </div>
                            </div>

                            <div class="bloc">
                                <div class="colonne1">
                                    <label for="parametre7">Saisissez la nouvelle surface du jardin :</label>
                                    </br>  
                                    <input type="text" id="parametre7" name="surfacejardin">
                                </div>
                                <div class="pictos">
                                    <a class="picto-item" id="pdt" href="#" aria-label="Saisissez la surface du bien, ou du terrain sous forme de nombre en m2</br>Cette valeur peut être nulle, auquel cas ne -saisissez rien">?</a>
                                </div>
                            </div>

                            <div class="bloc">
                                <div class="colonne1">
                                    <label for="parametre8">Saisissez le nouveau nombre de pièces du bien :</label> 
                                    </br> 
                                    <input type="text" id="parametre8" name="nbpiece" >
                                </div>
                                <div class="pictos">
                                    <a class="picto-item" id="pdt" href="#" aria-label="Saisissez le nombre de pièces du bien</br>Cette valeur peut être nulle, auquel cas ne -saisissez rien">?</a>
                                </div>                       
                            </div>

                            <div class="blocfin">
                                <div class="colonne1">
                                    <label for="formAjoutTypeBien">Choisissez le nouveau type de bien :</label>
                                    </br>
                                    <select name="idType" id="idType">
                                        <option value="">ne rien changer</option>
                                        <option value="1">Maison</option>
                                        <option value="2">Appartement</option>
                                        <option value="3">Terrain</option>
                                        <option value="4">Local</option>
                                        <option value="5">Immeuble</option>   
                                    </select>                                
                                </div>
                                <div class="pictos">
                                    <a class="picto-item" id="pdt" href="#" aria-label="-Saisissez 1 pour une maison \n -Saisissez 2 pour un appartement</br>-Saisissez 3 pour un terrain</br>-Saisissez 4 pour un local</br>-Saisissez 5 pour un immeuble</br>">?</a>
                                </div>
                            </div>

                            <div class="blocfin">
                                <div class="colonne1">
                                    <label for="parametre10">Saisissez le nouveau titre d'affichage du bien :</label>      
                                    </br>                   
                                    <input type="text" id="parametre10" name="titre" >
                                </div>
                                <div class="pictos">
                                    <a class="picto-item" id="pdt" href="#" aria-label="Saisissez le titre, c'est à dire la phrase qui décrira le bien">?</a>
                                </div>
                            </div>    

			   <div class="blocfin">
                                <div id="btnEnregistrer">
                                    </br>               
                                    <input type="submit" value="Enregistrer les nouvelles informations">
                                </div>
                            </div>  

                    </div>

                </form>

            </div>               
        </div>

    	<?php
        include('../inc/piedDePage.inc');
    	?> 

</body>
	
</html>

