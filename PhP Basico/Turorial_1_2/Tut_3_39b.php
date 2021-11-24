<?php 

if ($_REQUEST['passwor']=="z80"){
    echo "Bienvenido";
}else{
    echo "contraseña incorrecta";
    header("Location: Tut_3_39.php");
}

?>