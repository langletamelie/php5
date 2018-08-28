<?php
//déclaration du tableau
$hautsDeFrance = array(
  '02' => 'Aisne',
  '60' => 'Oise',
  '80' => 'Somme',
  '59' => 'Nord',
  '62' => 'Pas de Calais'
);
$hautsDeFrance[51] = 'Marne'; //ajout d'une ligne au tableau
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>PHP 5EX7</title>
</head>
<body>
  <p>
  <?php
echo $hautsDeFrance[51]; //appel de la key 51
  ?>
</p>
</body>
</html>
