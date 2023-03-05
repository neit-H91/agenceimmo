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
	
	<div id=Aligne-choix>
		<h1>Formulaire de recherche</h1>
		<form method="post" action="../autres/rechercheBien.php">
			<label for="parametre1">Paramètre 1 :</label>
			<input type="text" id="parametre1" name="parametre1"><br><br>

			<label for="parametre2">Paramètre 2 :</label>
			<input type="text" id="parametre2" name="parametre2"><br><br>
			<div id=Boite-bouton>
				<input type="submit" value="Rechercher">
			</div>
		</form>
	</div>
	
    <?php
        include('../inc/piedDePage.inc');
    ?> 

</body>
	
</html>
