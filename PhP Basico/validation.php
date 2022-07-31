<?php
    require 'conexion.php';
    
    session_start();

    if (isset($_SESSION['session']) && $_SESSION['session'] == 'active') {
         header('Location: List.php');
    }

    if (count($_POST) > 0) {
        

        $sql = "SELECT idusuarios, passwor, email FROM usuarios WHERE email = '$_POST[email]'";

        $resp = mysqli_query($conexion, $sql) or die ("f".mysqli_error($conexion));

        $user = mysqli_fetch_assoc($resp);

        if ($_POST['password'] == $user['passwor'] &&  $_POST['email'] == $user['email']) {
            $_SESSION['session'] = 'active';

            header('Location: List.php');
        }else{
            header("Location: login.php");
        }
        
    }
    








?>