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

    $registro=mysqli_query($conexion,"DELETE  FROM alumnos")
    or die ("Problema en el Delete".mysqli_error($conexion));

    if($registro){
        echo "Se han borrado todos los registros";
    }



    mysqli_close($conexion);

    

    ?>
</body>
</html>