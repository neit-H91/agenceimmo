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
                                <select name="idVille" id="idVille">
                                    <option value="">Peu Importe</option>
                                    <?php          
                                    include_once '../modeles/mesFonctionsAccesBDD.php';
                                    $bdd = connexionBDD();                         
                                    $reponse = getAllVille($bdd);
                                    foreach($reponse as $donnes){
                                        ?>
                                        <option value="<?php  echo $donnes['idVille']; ?>"><?php echo $donnes['libelleVille']; ?></option>;
                                        <?php
                                    }
                                    ?>
                                </select>
                            </div>

                            <div id="champ2" class="entree">
                                <label for="type">Choisissez le type de bien</label>
                                <select name="type" id="type">
                                    <option value="">Peu importe</option>
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
                                <label for="prix">Saisissez une tranche de prix </label>
                                <select name="prix" id ="prix">
                                    <option value="">Aucune</option>
                                    <option value="1"> 0 - 100 000 €</option>
                                    <option value="2">100 000 - 150 000 €</option>
                                    <option value="3">150 000 - 200 000 €</option>
                                    <option value="4">200 000 - 250 000 €</option>
                                    <option value="5">250 000 - 300 000 €</option>
                                    <option value="6">300 000 - 350 000 €</option>
                                    <option value="7">350 000 - 400 000 €</option>
                                    <option value="8">400 000 - 500 000 €</option>
                                    <option value="9">500 000 - 600 000 €</option>
                                    <option value="10">600 000 - 700 000 €</option>
                                    <option value="11">700 000 - 800 000 €</option>
                                </select>
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
                
                if (!empty($_POST["idVille"]) || !empty($_POST["surfaceMini"]) || !empty($_POST["prix"])){
                    include('../autres/insertstats.php');
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

