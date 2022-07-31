<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Truncate Table</title>
</head>
<body>
    <?php
        $conexion = mysqli_connect("localhost","root",null,"mydb","3305");
        if (mysqli_connect_errno($conexion)){
            echo "Fallo al conectar a MySQL.". mysqli_connect_error();

        } else{
            $trun=mysqli_query($conexion, "TRUNCATE TABLE usuarios") or die ("Problema en el truncate <br> <br>".mysqli_error($conexion));
       
        }





    ?>



</body>
</html>