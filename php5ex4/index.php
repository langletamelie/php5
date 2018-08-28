<?php
//déclaration du tableau
$months = array('janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'aout', 'septembre', 'octobre', 'novembre', 'décembre');
$months[7] = 'août'; //ajout de l'accent du mois aout
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <title>PHP 5EX4</title>
    </head>
    <body>
        <p>
            <?php
            echo $months[7]; //afficher changement du mois d'aout
            ?>
        </p>
    </body>
</html>
