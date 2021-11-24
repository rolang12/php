<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php $conexion=mysqli_connect("localhost","root","","base1","3307")
    or die ("Problemas con la conexion"); 
    
     $cursos = $_REQUEST['curso']; 

     $registro = mysqli_query($conexion, "SELECT nombre FROM alumnos INNER JOIN cursos on alumnos.codigocurso=cursos.codigocurso_c where cursos.nombre_c = '$_REQUEST[curso] '");

     while ($curso = mysqli_fetch_array($registro )){
        echo "$curso[nombre]";
        ECHO "<BR>";
     }

    ?>




</body>
</html>