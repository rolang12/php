<!-- Realizar la codificación necesaria para dar solución al siguiente requerimiento:
Una compañía de venta de automóviles paga a su personal de ventas un salario básico
de $737.000 mensuales más una comisión de $50.000 por cada automóvil vendido más
el 5% del valor de la venta. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>
    <div class="contenedor bg-gray-800">
</body>
</html>

<?php
    $com = 0;
    $ven = 0;
    $aum = 0;

    $array = [];
    foreach ($_POST as $key => $value) {
        $array[] = $value;   
        
    }
    $basic = 737000;
    $name = $array[0];
    $cant = $array[1];
    $prec = $array[2];
    
    $com = $cant * 50000;

    
    if ($prec > 0){
        $aum =( $prec * 5 )/ 100;
    }
   
    
    $suel_f = $basic + $com + $aum;
    
?>
<?php if ($com>0){ ?>
    <div class="bg-gray-400 border text-left  text-light p-5 text-lg text-white" > <?php echo "Comisión por carro vendido:  = ".$com;?></div>
<?php } ?>
<?php if ($aum>0){ ?>
    <div class="bg-gray-400 border text-left text-light p-5  text-lg text-white" > <?php echo "5% del valor de la(s) venta(s) = ".$aum;?></div>
<?php } ?>

<div class="bg-green-500 text-light p-5 text-right text-lg text-white" > <?php echo "Su sueldo final es: ".$suel_f; ?></div></div>
