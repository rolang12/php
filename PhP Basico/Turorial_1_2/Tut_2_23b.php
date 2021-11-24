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

    $registro=mysqli_query($conexion,"SELECT nombre FROM cursos WHERE nombre='$_REQUEST[curso]'")
    or die ("Problema en el Insert".mysqli_error($conexion));


    if($reg=mysqli_fetch_array($registro)){
        mysqli_query($conexion, "DELETE FROM cursos WHERE nombre ='$_REQUEST[curso]'") or die ("Problema en el Insert".mysqli_error($conexion));
        echo "Se ha efectuado el borrado Correctamente";
    }else{
        echo "El curso digitado no exxiste";
    }


    mysqli_close($conexion);

    

    ?>
</body>
</html>