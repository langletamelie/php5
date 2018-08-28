<?php
//déclaration des keys et elements du tableau
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
  <title>PHP 5EX10</title>
</head>
<body>
    <?php foreach ($hautsDeFrance as $number => $element){
//pour chaque key du tableau l'element a la valeur correspondante
      ?>
    <p><?php echo 'Le département ' . $element . ' a le numéro ' . $number; ?></p>
      <?php } ?>
</body>
</html>
