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
        or die ("Problemas con la conexion");

        // $registros=mysqli_query($conexion,"select codigo, nombre, mail, codigocurso
        // from alumnos " ) or die ("problemas en el select: ".mysqli_error($conexion));

        $registros=mysqli_query($conexion,"SELECT codigocurso,nombre from cursos " ) 
        or die ("problemas en el select: ".mysqli_error($conexion));

    while ($reg=mysqli_fetch_array($registros)){

         echo "Codigo: ".$reg['codigocurso']."<br>";
         echo "Nombre: ".$reg['nombre']."<br>";
         echo "Curso: ";
         switch ($reg['codigocurso']){
            case 1:echo "PHP";
                break;
            case 2:echo "ASP";
                break;
            case 3:echo "JSP";
                break;
        }
         echo "<br>";
         echo "<hr>";

    }

        mysqli_close($conexion);
    ?>



</body>
</html>