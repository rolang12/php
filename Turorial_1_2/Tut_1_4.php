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
    $dia=date("d"); //Y-m-d
    echo $dia;
    
    if ($dia<=10){
        echo "Sitio Activo";
    }
    else{
        echo "Sitio Inactivo";
    }
    
    $num=rand(1,100);
    echo $num;

    if ($num>50){
        echo $num."Es mayor a 50";
    }
    elseif ($num==50) {
        echo $num."Es igual a 50";
    }
    else{
        echo $num."Es menor  a 50";
    }

    ?>
</body>
</html>