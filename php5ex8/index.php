<?php
//déclaration du tableau
$months = array('janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'aout', 'septembre', 'octobre', 'novembre', 'décembre');
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <title>PHP 5EX8</title>
    </head>
    <body>
        <?php foreach ($months as $element) { //foreach = pour chaque
            ?>
            <p><?php echo $element; ?></p>
            <?php } ?>
    </p>
</body>
</html>
