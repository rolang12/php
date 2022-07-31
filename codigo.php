<?php 
    include('conexion.php');

    $consulta = mysqli_query($conexion, "SELECT * FROM $tabla_db1");
    while($query = mysqli_fetch_array($consulta))
    {
        echo $query['nickName'];
    }
    // echo "Hola". $_POST["nombre"];

?>