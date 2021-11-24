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

    mysqli_query($conexion,"INSERT INTO alumnos (nombre,mail,codigocurso) 
    VALUES ('$_REQUEST[nombre]','$_REQUEST[mail]',$_REQUEST[codigocurso])") or die ("Problema en el Insert".mysqli_error($conexion));
    mysqli_close($conexion);

    echo "El Aprendiz fue registrado";
    echo "<br> <br>";
    echo "<a href='Tut_2_20.php'>Volver</a> ";

    ?>
</body>
</html>