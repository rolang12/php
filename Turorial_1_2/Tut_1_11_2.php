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
    $i=0;
    if(isset($_REQUEST['check1'])){
        $i+=1;
    }
    if(isset($_REQUEST['check2'])){
        $i+=1;
    }
    if(isset($_REQUEST['check3'])){
        $i+=1;
    }
    if(isset($_REQUEST['check4'])){
        $i+=1;
    }

    echo $_REQUEST['nombre']," Juega $i Deportes";

    ?>
</body>
</html>