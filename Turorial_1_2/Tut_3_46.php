<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    


  <?php
  $tabla = "";
  for ($f = 32; $f <= 255; $f++) {
    $tabla = $tabla . sprintf("%c", $f);
  }
  echo $tabla;
  ?>



</body>
</html>