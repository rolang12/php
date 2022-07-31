<?php
	include 'conexion.php';
	
	if (isset($_GET['idusuarios'])){
		echo $id = $_REQUEST['idusuarios'];
        $sql3 = "DELETE  FROM direcciones WHERE usuarios_idusuarios = $id";
        $sql2 = "DELETE  FROM articulos WHERE usuarios_idusuarios = $id";
		

        $avat = mysqli_query($conexion, "SELECT avatar from usuarios where idusuarios=$_REQUEST[newidusuarios]");
        $ava = mysqli_fetch_array($avat);
        $img = $ava['avatar'];

        if (unlink($img)) {
            $delimg = mysqli_query($conexion, "DELETE avatar from usuarios where idusuarios=$_REQUEST[newidusuarios]");
            echo "File and user was successfully deleted";
        } 

        $sql = "DELETE  FROM usuarios WHERE idusuarios = $id";

        $result3 = mysqli_query($conexion, $sql3) or die (mysqli_error($conexion));
		$result = mysqli_query($conexion, $sql2) or die (mysqli_error($conexion));
		$result2 = mysqli_query($conexion, $sql) or die (mysqli_error($conexion));
	}
	
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Delete</title>
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="">

  <!-- Font Awesome if you need it
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
  -->
  <link rel="stylesheet" href="https://unpkg.com/tailwindcss/dist/tailwind.min.css"> 
  <!--Replace with your tailwind.css once created-->

</head>

<body >

    <?php if($result2 && $result){
        echo "El usuario ha sido eliminado";
        
    }else{
        echo "Problema en el borrado";
    }
     ?>


	
</body>

</html>


 