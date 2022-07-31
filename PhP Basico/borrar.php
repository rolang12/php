
<?php 
    $conexion = mysqli_connect("localhost","root",null,"mydb","3305") or die ("Problema de conexion");
    $user = mysqli_query($conexion, "SELECT avatar from usuarios where idusuarios = $_REQUEST[idusuarios]");
    if (mysqli_connect_errno()){
        echo "Fallo al conectar a MySQL.". mysqli_connect_error();
    }


    $user_data = mysqli_fetch_array($user);
    if ($user_data['avatar'] != NULL){
        if (unlink($user_data['avatar'])) {
            echo "file was successfully deleted";
    } 
}

?>