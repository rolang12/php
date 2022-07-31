<?php
    $conexion = mysqli_connect("localhost","root",null,"mydb","3305") or die ("Problema de conexion");
    if (mysqli_connect_errno()){
        echo "Fallo al conectar a MySQL.". mysqli_connect_error();
    }
?>