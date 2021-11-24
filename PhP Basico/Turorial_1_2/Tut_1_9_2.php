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
    echo "El nombre ingresado es: ";
    echo $_REQUEST["nombre"]," <br> ";
    if ($_REQUEST["edad"]>=18){
        echo "Eres mayor de edad";
    }
    else{
        echo "Eres menor de edad";

    }

    ?>
</body>
</html>