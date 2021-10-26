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
    session_start();

    $_SESSION['email'] = $_REQUEST['email'];
    
    echo "Se almacenó el Email";

    
    
    ?>    
    <a href="Tut_3_35c.php">Ir a la pagina donde se recuperan los datos.</a>    


</body>
</html>