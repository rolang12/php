<?php 
    include 'conexion.php';
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/icono.png">
    <script src="https://kit.fontawesome.com/6628fdf66e.js" crossorigin="anonymous"></script>

    <title>Recibir los datos</title>
</head>
<body>
    <?php
        echo '<link rel="stylesheet" href="final.css">';
        echo '<link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">';

        $conexion = mysqli_connect("localhost","root",null,"mydb","3305");
        if (mysqli_connect_errno($conexion)){
            echo "Fallo al conectar a MySQL.". mysqli_connect_error();

        } else{
            $name_con=mysqli_get_host_info($conexion);
            echo '<div class="bg-green-500 text-center p-4 text-xl text-white font-light z-50" >¡Te has conectado correctamente!</div>' ;
        
           
            
                // move_uploaded_file($_FILES['avatar']['tmp_name'], 'images/default.png');
                    // $sqlImage = 'images/default.png';
                
                if (count($_FILES) > 0){

                    if (file_exists('images')){

                        $name = uniqid();

                        switch ($_FILES['avatar']['type']) {
                            case 'image/png':
                                $name .= '.png';
                                break;
                            
                            default:
                                $name .= '.jpg';
                                break;
                            
                        }
                        move_uploaded_file($_FILES['avatar']['tmp_name'], 'images/'.$name);
                        $sqlImage = 'images/'.$name;
                    }
                }

                
                $pass = password_hash($_POST['password'], PASSWORD_BCRYPT);
                

                $result3 = mysqli_query($conexion, "INSERT INTO users (nickName,passwor,avatar,email,countriesId,createdAt ) VALUES ('$_POST[nickname]','$pass','$sqlImage','$_POST[email]','$_POST[pais]', default)") or die ("Problemas en la insercion".mysqli_error($conexion));

                $id = mysqli_query($conexion, "SELECT MAX(iduser) FROM users") or die ("problemas en el select".mysqli_error($conexion));
                
                $idus = mysqli_fetch_array($id, MYSQLI_NUM);
                
                $result4 = mysqli_query($conexion, "INSERT INTO addresses (street,usersIduser) VALUES ('$_POST[direccion]',$idus[0])") or die ("problemas_ en la insercion".mysqli_error($conexion));
                
                echo ' <div class="text-center text-2xl font-bold my-auto p-5 bg-white">¡Sucess!</div> ';
                echo ' <br>';
                echo ' <div class="text-center text-lg font-light   my-auto p-3 bg-white">Your Account has been created</div> ';
                echo '<br> <br>';
                echo '<svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="check-circle" class="svg-inline--fa fa-check-circle fa-w-16 flex  m-auto h-32 w-32 text-green-500" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 48c110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200-110.532 0-200-89.451-200-200 0-110.532 89.451-200 200-200m140.204 130.267l-22.536-22.718c-4.667-4.705-12.265-4.736-16.97-.068L215.346 303.697l-59.792-60.277c-4.667-4.705-12.265-4.736-16.97-.069l-22.719 22.536c-4.705 4.667-4.736 12.265-.068 16.971l90.781 91.516c4.667 4.705 12.265 4.736 16.97.068l172.589-171.204c4.704-4.668 4.734-12.266.067-16.971z"></path></svg>';
                
                echo '<br> <br>';
                echo '<a href="blog_REG1.php" > <button class="m-auto  flex bg-green-500 text-white font-bold py-2 px-8 rounded-md text-center hover:bg-green-700">Log-In  </button></a> ';

        }
    

    ?>
    
</body>
</html>