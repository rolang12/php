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

    session_start();

    $query_email = mysqli_query($conexion, "SELECT mail from alumnos WHERE mail = '$_SESSION[email]'") or die ("Problemas en el select".mysqli_error($conexion));

    $result = mysqli_fetch_array($query_email);

    if ($result){
        echo "Si existe dicho mail.";
    }else{
        echo "No existe dicho mail";
    }

    ?>

</body>
</html>