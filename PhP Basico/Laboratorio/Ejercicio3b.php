<!-- Realizar la codificación necesaria para que se calcule y muestre el índice de masa corporal
junto con la categoría en la cual se encuentra el individuo.
Nombre del paciente:
Peso en kilogramos:
Estatura en metros: 
-->

<?php

    $array = [];

    foreach ($_POST as $key => $value) {
        $array[] = $value;   
    }

    $val = intval($array[1],10);
    $val2 = floatval($array[2]);
    $ope =  $val / ($val2 * $val2);
    $imc = number_format($ope,2,'.');

    if ($imc < 18.5 ){
        echo "Su Indice de Masa Corporal es: ".$imc." Estás por debajo del peso";

    }elseif ($imc > 18.5 && $imc <= 24.9 ){
        echo "Su Indice de Masa Corporal es: ".$imc." Estás saludable";

    }elseif ($imc > 24.9 && $imc <= 29.9 ){
        echo "Su Indice de Masa Corporal es: ".$imc." Estás con Sobrepeso";

    }elseif ($imc > 29.9 && $imc <= 39.9 ){
        echo "Su Indice de Masa Corporal es: ".$imc." Estás obeso";

    }elseif ($imc > 40){
        echo "Su Indice de Masa Corporal es: ".$imc." Estás obeso mórbido";
    }
    
?>