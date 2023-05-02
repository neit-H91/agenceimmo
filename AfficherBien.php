<?php
    session_start();
?>
<html>
<?php
            include('../inc/entete.inc');
            ?>
    <?php
        include_once '../autres/RechercheInformation.php'; 
    ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Page bien</title>
    <link rel="stylesheet" href="../css/style-biens.css">
</head>

<div class="Page">
    <div class="contenu">
        <div class="presentation">
            <div class="texte">
                <div class="titre">
                    <?php
                    echo '<h1>' . $desInformations['titre'] .  '</h1>'  
                    ?>
                </div>
                <div class="location">
                    <img src="https://cdn-icons-png.flaticon.com/512/2838/2838912.png" alt="">
                    <?php
                    echo '<h3> ' .$desInformations['adresse']. ' à ' .$desInformations['ville'] . ' ( ' .$desInformations['codeP'] .' ) </h3>';
                    ?>
                   
                </div>
                <div class="prix">
                    <?php
                    echo '<h3> ' .$desInformations['prix'] . ' € </h3>';
                    ?>
                </div>
            </div>
            <div class="photos">
                <div class="image-principale">

                <?php
		            $image1 = '../img/img-biens/'.$desInformations['id'].'-1.jpg';
		            echo "<img src='$image1' alt='Mon image'>"; // Utilisez la balise <img> pour insérer l'image
	            ?>
                </div>
                <div class="image-secondaires">
                    <div class="row1">

                    <?php
		                $image2 = '../img/img-biens/'.$desInformations['id'].'-2.jpg';
                        $image3 = '../img/img-biens/'.$desInformations['id'].'-3.jpg';
                        $image4 = '../img/img-biens/'.$desInformations['id'].'-4.jpg';
		                echo "<img src='$image2' alt='Mon image'>";
                        echo "<img src='$image3' alt='Mon image'>";
                        echo "<img src='$image4' alt='Mon image'>";
	                 ?>
                    </div>
                    
                    <div class="row2">

                    <?php
		                $image5 = '../img/img-biens/'.$desInformations['id'].'-5.jpg';
                        $image6 = '../img/img-biens/'.$desInformations['id'].'-6.jpg';
                        $image7 = '../img/img-biens/'.$desInformations['id'].'-7.jpg';
		                echo "<img src='$image5' alt='Mon image'>";
                        echo "<img src='$image6' alt='Mon image'>";
                        echo "<img src='$image7' alt='Mon image'>";
	                 ?>

                    </div>
                    
                </div>
            </div>
        </div>
        <div class="dessous">
            <div class="description">
                <br>
                <div class="caracs">
                <div class="un"><img src="../../img/pictos/chambres picto.png" alt="">
                <?php
                    echo '<h4> ' . $desInformations['nbPièce'] .' Pièces </h4>';
                ?>
                </div>
                <div class="deux">
                    <img src="../../img/pictos/sdb picto.png" alt="">
                    <?php
                     echo '<h4> ' . $desInformations['surfBien'] .' m² de surface habitable </h4>';
                    ?>
                </div>
                <div class="trois">
                    <img src="../../img/pictos/surface picto.png" alt="">
                    <?php
                        echo '<h4> ' . $desInformations['surfJardin'] .' m²  de jardin </h4>';
                    ?>
                </div>    
                </div>
            </div>
            <div class="Avis">
                <h3> Description </h3>
                    <?php
                        echo '<h2> ' . $desInformations['descript'] . ' </h2>';
                    ?>
            </div>
            <!---
            <div class="bilan-energetique">
                <h3>Bilan energetique</h3><br><br><br>
                <div class="consomation">
                    <div class="Chauffage">
                        <p>Diagnostique de performances énergétique (DPE)</p><br>
                        POST
                        <img src="../../img/consos/perfEnergie/conso B.png" alt="">
                    </div>
                    <div class="Effet-de-Serre">
                        <p>Indice d'emission à effet de serre (GES)</p><br>
                        POST
                        <img src="../../img/consos/effetSerre/effet de serre C.png" alt="">
                    </div>
                </div>
            </div>
            --->
        </div>
</div>
</div>


<?php
            include('../inc/piedDePage.inc');
            ?>
</html>