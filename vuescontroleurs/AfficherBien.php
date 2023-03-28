<?php
    session_start();
?>

<?php
    include('../inc/entete.inc');
?>

<?php
    include_once '../autres/RechercheInformation.php';
    $testPage = $_GET['id'];
    $bdd = connexionBDD();
    $lesIds = get_all_id($bdd);
    if(!in_array($testPage, $lesIds)){
        header('Location: formRechercheBien.php');
        exit;
    }
    //Les Images
    $image1 = '../img/img-biens/'.$desInformations['idBien'].'-1.jpg';
    $image2 = '../img/img-biens/'.$desInformations['idBien'].'-2.jpg';
    $image3 = '../img/img-biens/'.$desInformations['idBien'].'-3.jpg';
    $image4 = '../img/img-biens/'.$desInformations['idBien'].'-4.jpg';
    $image5 = '../img/img-biens/'.$desInformations['idBien'].'-5.jpg';
    $image6 = '../img/img-biens/'.$desInformations['idBien'].'-6.jpg';
    $image7 = '../img/img-biens/'.$desInformations['idBien'].'-7.jpg';
    if (!file_exists($image1)){
        $image1 = '../img/img-biens/alt1.jpg';
    }
    if (!file_exists($image2)){
        $image2 = '../img/img-biens/alt2.jpg';
    }
    if (!file_exists($image3)){
        $image3 = '../img/img-biens/alt3.jpg';
    }
    if (!file_exists($image4)){
        $image4 = '../img/img-biens/alt4.jpg';
    }
    if (!file_exists($image5)){
        $image5 = '../img/img-biens/alt5.png';
    }
    if (!file_exists($image6)){
        $image6 = '../img/img-biens/alt6.png';
    }
    if (!file_exists($image7)){
        $image7 = '../img/img-biens/alt7.jpg';
    }
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Page bien </title>
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
		            $image1 = '../img/img-biens/'.$desInformations['idBien'].'-1.jpg';
		            echo "<img src='$image1' alt='Emplacement pour une image'>";
	            ?>
                </div>
                <div class="image-secondaires">
                    <div class="row1">

                    <?php
		        echo "<img src='$image2' alt='Emplacement pour une image'>";
                        echo "<img src='$image3' alt='Emplacement pour une image'>";
                        echo "<img src='$image4' alt='Emplacement pour une image'>";

	                 ?>
                    </div>
                    
                    <div class="row2">

                    <?php
		        echo "<img src='$image5' alt='Emplacement pour une image'>";
                        echo "<img src='$image6' alt='Emplacement pour une image'>";
                        echo "<img src='$image7' alt='Emplacement pour une image'>";
	                 ?>

                    </div>
                    
                </div>
            </div>
        </div>
        <div class="dessous">
            <div class="description">
                <br>
                <div class="caracs">
                <div class="un"><img src="../img/pictos/chambres picto.png" alt="">
                <?php
                    echo '<h4> ' . $desInformations['nbPièce'] .' Pièces </h4>';
                ?>
                </div>
                <div class="deux">
                    <img src="../img/pictos/sdb picto.png" alt="">
                    <?php
                     echo '<h4> ' . $desInformations['surfBien'] .' m² de surface habitable </h4>';
                    ?>
                </div>
                <div class="trois">
                    <img src="../img/pictos/surface picto.png" alt="">
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
		<div id="pdf">
                <button onclick="window.location.href = '../autres/bienPdf.php?id=<?php echo $_GET['id']; ?>';">Télécharger cette annonce en pdf</button>
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

