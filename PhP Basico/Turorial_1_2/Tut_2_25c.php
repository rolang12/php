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

    mysqli_query($conexion,"UPDATE cursos SET nombre ='$_REQUEST[cursonuevo]' WHERE codigocurso=$_REQUEST[codigo]")
    or die ("Problema en el Update".mysqli_error($conexion));
    echo "El nombre del curso ha sido actualizado";

    
    

    ?>
</body>
</html>