<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/agenceimmo/css/style-listerBiens.css" media="screen" type="text/css" />
</head>
<body>

        <?php
          include('../inc/entete.inc');
        ?>

  
        <div id="page">
            <div id="contenu">
                <h1>Liste des biens</h1>
                <div id="liste">
                  <?php
                  include('../autres/listerBiens.php');
    	            ?>
                </div>
            </div>
        </div>
  

        <?php
          include('../inc/piedDePage.inc');
        ?> 

</body>
</html>
