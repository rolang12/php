<?php 
    include 'conexion.php';
    require 'validation.php';

    if ($_SESSION['session'] == 'active'){

        $avat = mysqli_query($conexion, "SELECT avatar from usuarios where idusuarios=$_REQUEST[newidusuarios]");
        $ava = mysqli_fetch_array($avat);
        $img = $ava['avatar'];

        if (unlink($img)) {
            $delimg = mysqli_query($conexion, "DELETE avatar from usuarios where idusuarios=$_REQUEST[newidusuarios]");
            echo "file was successfully deleted";
        } 


        if ($_REQUEST['newidusuarios']){

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
            
            if (isset($_POST['newpassword']) && !empty($_POST['newpassword'])) {
                $pass = password_hash($_POST['newpassword'], PASSWORD_BCRYPT);
            }
            $sql1 = "UPDATE usuarios SET nickname = '$_REQUEST[newnickname]', passwor = '$pass', email = '$_REQUEST[newemail]',avatar = '$sqlImage' WHERE idusuarios = $_REQUEST[newidusuarios]";
            $modify = mysqli_query($conexion, $sql1) or die ("Problemas en el update".mysqli_error($conexion));

            if ($modify){
                echo "Data updated successfull";
            }else{
                echo "Error update";
            }

        }
    }else{
        header("Location: view.php");
    }
?>