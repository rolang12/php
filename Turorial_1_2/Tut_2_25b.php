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

    $registro=mysqli_query($conexion,"SELECT * FROM cursos WHERE codigocurso=$_REQUEST[codigo]")
    or die ("Problema en el Insert".mysqli_error($conexion));

    if ($reg=mysqli_fetch_array($registro))
    {
    ?>

    <form action="Tut_2_25c.php" method="POST">
    
    Ingrese El nuevo nombre del Curso:
    <input type="text" name="cursonuevo" value="<?php echo $reg['cursonuevo']?>" >
    <br>
    <input type="hidden" name="codigo" value="<?php echo $reg['codigo'] ?>">
    <input type="submit" value="modificar">
    </form>
    <?php
    }
    else{

    
        echo "No existe curso con ese nombre";
    }
    ?>

</body>
</html>