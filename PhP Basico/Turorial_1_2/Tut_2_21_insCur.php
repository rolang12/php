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

    mysqli_query($conexion,"INSERT INTO cursos (nombre)   
    VALUES ('$_REQUEST[nombre]')") or die ("Problema en el Insert".mysqli_error($conexion));
    mysqli_close($conexion);

    echo "El Curso fue registrado";
    ?>

</body>
</html>