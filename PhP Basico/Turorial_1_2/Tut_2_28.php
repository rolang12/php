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
        $conexion=mysqli_connect("localhost","root","","base1","3307")
        or die ("Problema de conexion");

        $registros = mysqli_query($conexion, "SELECT nombre_c FROM cursos") or
            die("Problemas en el select:" . mysqli_error($conexion));

        while ($reg = mysqli_fetch_array($registros)) {
            echo "Nombre del curso:" . $reg['nombre_c'] . "<br>";
            echo "<hr>";
        }

        $registros = mysqli_query($conexion, "SELECT COUNT(*) AS cantidad FROM cursos") or
            die("Problemas en el select:" . mysqli_error($conexion));

        $reg = mysqli_fetch_array($registros);
        echo "La cantidad de cursos son :" . $reg['cantidad'];

        mysqli_close($conexion);
  ?>


</body>
</html>