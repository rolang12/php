<?php
    require_once '..\..\Models\User.php';
    require_once '..\..\Models\Conexion.php';

    // var_dump($_POST);
    $a = new User();
    $a = $a->crudCreate($_POST);
    
    if ($a == true) {
        echo "El registro ha sido exitoso";
    } else {
        echo "Hubo un error en el registro";
    }