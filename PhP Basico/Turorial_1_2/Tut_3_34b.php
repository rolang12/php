
<?php
if ($_REQUEST['nombre'])
  setcookie("nombre",time() + 60 * 60 * 24 * 365, "/");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Problema</title>
</head>

<body>
  Se creó la cookie.
  <br>
  <a href="Tut_3_34.php">Ir a la otra página</a>
</body>


</html>