<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div style="background-color: #ff12;" >
    <?php
    $mul=1;
    echo "Con While <br> ";
    while($mul<=10){

        echo "2 x ",$mul," = ", $mul*2,"<br>";
        $mul++; 
    }

    echo "<br> Con For: ";

    for($i=2;$i<=20;$i+=2){
        echo $i;
        echo " ";
    }

    echo "<br> Con Do While: ";
    $num=1;

    do
    {   echo $num*2;
        echo " ";
        $num++;
    }while($num<=10);
    


    ?>
    </div>
    
</body>
</html>