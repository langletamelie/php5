<?php
//déclaration du tableau
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
  <title>PHP 5EX6</title>
</head>
<body>
  <p>
  <?php
echo $hautsDeFrance['59'];//appel de la key 59
  ?>
</p>
</body>
</html>
