<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

    <title>Document</title>
</head>
<body>
    
</body>
</html>

<?php
    
    $array = [];
     foreach ($_POST as $key => $value) {
        $array[] = $value;       
    }

    $par1 = $array[0];
    $par2 = $array[1];
    $par3 = $array[2];
    $exa = $array[3];
    $tra = $array[4];
    
    $par = ($par1+$par2+$par3)/3;

    $par_f = ($par*35)/100;
    $exa_f = ($exa*35)/100;
    $tra_f = ($tra*30)/100;

    $fin = $par_f + $exa_f + $tra_f;
    $final = number_format($fin,1,'.');

  


?>
    <?php
    if ($final >= 3 ){ ?>
        <div class="bg-green-500 text-light p-5 text-center text-lg text-white" > <?php echo "Aprobó con una nota de: ".$final; ?></div>
    <?php }else{ ?>
        <div class="bg-red-500 text-light p-5 text-center text-lg text-white" ><?php echo "Reprobó con una nota de: ".$final; ?> </div>
    <?php } ?>