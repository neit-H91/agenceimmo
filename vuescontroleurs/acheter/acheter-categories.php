<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acheter</title>
    <link rel="stylesheet" href="../../css/style-acheter.css">
</head>
<body>
    
    <?php
	include('../../inc/entete.inc');
	?>

    <section class="acheter-links">
        <button onclick="window.location.href = 'acheter-appartements.php';">Appartements</button>
        <button onclick="window.location.href = 'acheter-immeubles.php';">Immeubles</button>
        <button onclick="window.location.href = 'acheter-locaux.php';">Locaux</button>
        <button onclick="window.location.href = 'acheter-maisons.php';">Maisons</button>
        <button onclick="window.location.href = 'acheter-terrain.php';">Terrains-nus</button>
    </section>

    <?php
	include('../../inc/piedDepage.inc');
	?>
    
</body>
</html>
