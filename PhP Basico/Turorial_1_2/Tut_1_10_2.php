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
        echo $_REQUEST["nombre"];
        if ($_REQUEST["radio1"]==1){
            echo "1- No tiene estudios ";

        }
        else{
            if ($_REQUEST["radio1"]==2){

                echo "2- Estudios Primarios";
            }
            else{
                echo "3- Estudios Secundarios";
            }
    

        }
       


    ?>
</body>
</html>