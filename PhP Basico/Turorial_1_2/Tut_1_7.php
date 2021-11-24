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
    $ran=rand(1,3);
    echo $ran," ";

    if ($ran==1){
        echo "Uno";

    
    }
    elseif($ran==2){
        echo "Dos";
    }
    else{
        echo "Tres";
    }


    ?>
    
</body>
</html>