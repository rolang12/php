<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
  <form action="Tut_3_34b.php" method="post">
    Ingrese su nombre:<br>
    <input type="text" value="<?php if (isset($_COOKIE['nombre'])){ echo $_COOKIE['nombre'];} ?>" name="nombre"><br>
    
    <input type="submit" value="Crear_cookie">
  </form>

</body>
</html>