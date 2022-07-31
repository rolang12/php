<?php
        require_once '..\..\Models\User.php';
        require_once '..\..\Models\Conexion.php';
         
    
            $users = new User();
            $userUpdt = $users->updateProfile($_POST);
        
            if ($userUpdt){
                echo "Los datos se actualizaron correctamente";
            } else {
                echo "hubo un problema en la actualización de los datos";
            }