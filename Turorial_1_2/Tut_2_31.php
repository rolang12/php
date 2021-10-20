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

        $registros2 = mysqli_query($conexion, "SELECT nombre_c from cursos ") or die("Problemas en el select:" . mysqli_error($conexion));
        echo "<h2>Cursos: </h2> ";
        echo "<hr> ";
        while ($nam=mysqli_fetch_array($registros2)){
            echo "<a href='Tut_2_31b.php?name=$nam[nombre_c]' >$nam[nombre_c]</a>";
            ECHO "<BR>";
        }



    ?>  

</body>
</html>