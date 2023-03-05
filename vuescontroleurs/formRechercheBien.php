<html>
	
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de Recherche</title>
    <link rel="stylesheet" href="/agenceimmo/css/style-rechercheBien.css">
</head>
	
<body>

	<?php
	include('../inc/entete.inc');
	?>

	<div id="page">
            <div id="contenu">
                <h1>Formulaire de recherche</h1>
                <form method="POST">
                    <div id="formulaire">
                        <div id="formulairegauche">
                            <label for="parametre1">Saisissez ville :</label>
                            <label for="parametre2">Saisissez le type de bien :</label>
                        </div>
                        <div id="formulairedroite">
                            <input type="text" id="parametre1" name="parametre1">
                            <input type="text" id="parametre2" name="parametre2">
                        </div>
                    </div>
                    <div id="formulairelogin">
                        <input type="submit" value="Rechercher">
                    </div>
                </form>
            </div>               
        </div>


    	<?php
        include('../autres/rechercheBien.php');
    	?>

    	<?php
        include('../inc/piedDePage.inc');
    	?> 

</body>
	
</html>
