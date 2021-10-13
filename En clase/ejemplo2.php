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

    // $num=rand(1,100);
    // echo $num;
   //IF 
    // if ($num>50){
    //     echo $num."Es mayor a 50";
    // }
    // elseif ($num==50) {
    //     echo $num."Es igual a 50";
    // }
    // else{
    //     echo $num."Es menor  a 50";
    // }

    // for($f=1;$f<=100;$f++){
    //     echo $f;
    //     echo "<br>";
    // }


    // While

        $valor=rand(1,30);

        // echo "termina".$valor;
        $inicio=1;

        // while($inicio<=$valor){
        //     echo $inicio;
        //     echo "<br>";
        //     $inicio++;
        // }


    echo $valor;
    echo "<hr>";


    do{

        echo $inicio;
        echo "<br>";
        $inicio++;

    }while($inicio<=$valor);




    ?>
</body>
</html>