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
    ?>
    <?php
    if ($_SESSION['numeroaleatorio']==$_REQUEST['numero'])
    echo "Ingresó el valor correcto";
    else
    echo "Incorrecto";
    ?>
</body>
</html>