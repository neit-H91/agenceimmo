<?php
session_start();
?>
<html>

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulaire de Recherche</title>
        <link rel="stylesheet" href="../css/style-rechercheBien.css">
    </head>

    <body>

        <?php
        include('../inc/entete.inc');
        ?>

        <div id="page">
            <div id="contenu">
                <div id="formulaire">
                    <h1>Formulaire de recherche</h1>
                    <?php
                    include_once '../modeles/mesFonctionsAccesBDD.php';
                    $bdd = connexionBDD();
                    ?>
                    <form method="post">
                        <div id="champs">

                            <div id=haut>

                            <div id="champ1" class="entree">
                                <label for="ville">Ville</label>
                                <select name="ville" id="ville">
                                    <option value=""> </option>
                                    <?php
                                    $reponse = $bdd->query('SELECT distinct ville FROM biens');
                                    while ($donnes = $reponse->fetch()) {
                                        ?>
                                        <option value="<?php echo $donnes['ville']; ?>"><?php echo $donnes['ville']; ?></option>;
                                        <?php
                                    }
                                    $reponse->closeCursor();
                                    ?>
                                </select>
                            </div>
                            <div id="champ2" class="entree">
                                <label for="type">Choisissez le type de bien</label>
                                <select name="type" id="type">
                                    <option value=""> </option>
                                    <?php
                                    $reponse = $bdd->query('SELECT distinct libelle FROM biens INNER JOIN types ON idType = idTypes');
                                    while ($donnes = $reponse->fetch()) {
                                        ?>
                                        <option value="<?php echo $donnes['libelle']; ?>"><?php echo $donnes['libelle']; ?></option>;
                                        <?php
                                    }
                                    $reponse->closeCursor();
                                    ?>
                                </select>
                            </div>
                            <div id="champ3" class="entree">
                                <label for="parametre1">Saisissez prix minimum :</label>
                                <input type="text" id="parametre1" name="prixMin">
                            </div>

                            <div id="champ3" class="entree">
                                <label for="parametre1">Saisissez prix maximum:</label>
                                <input type="text" id="parametre1bis" name="prixMax">
                            </div>

                            </div>

                            <div id=bas>

                            <div id="champ4" class="entree">
                                <label for="jardin">Présence d'un jardin : </label>
                                <select name="jardin" id ="jardin">
                                    <option value="peuImporte"> Peu Importe</option>
                                    <option value="">Non</option>
                                    <option value="oui">Oui</option>
                                </select>
                            </div>

                            <div id="champ5" class="entree">
                                <label for="parametre2">Saisissez la surface minimum du bien en m² :</label>
                                <input type="text" id="parametre2" name="surfaceMini">
                            </div>

                            <div id="champ6" class="entree">
                                <label for="parametre3">Saisissez le nombre de pièces minimum :</label>
                                <input type="text" id="parametre3" name="piecesMini">
                            </div>

                            <div id="champ7" class="entree">
                                <label for="parametre3">Saisisez l'Id de référence :</label>
                                <input type="text" id="parametre4" name="idChoix">
                            </div>

                            </div>

                        </div>
                        <div id="formulairelogin">
                            <input type="submit" value="Rechercher">
                        </div>
                    </form>

                </div>
                <div id="recherche">
                <?php
                if (isset($_POST["ville"]) || isset($_POST["type"]) || isset($_POST["jardin"]) || isset($_POST["prix"])){                    
                    include('../autres/rechercheBien.php');
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
