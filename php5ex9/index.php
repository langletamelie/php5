<?php
//déclaration des keys et valeurs du tableau
$hautsDeFrance = array(
    '02' => 'Aisne',
    '60' => 'Oise',
    '80' => 'Somme',
    '59' => 'Nord',
    '62' => 'Pas de Calais'
);
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <title>PHP 5EX9</title>
    </head>
    <body>
        <?php foreach ($hautsDeFrance as $element) { 
        //pour chaque element du tableau 
            ?>
            <p><?php echo $element; ?></p>
            <?php } ?>
    </body>
</html>
