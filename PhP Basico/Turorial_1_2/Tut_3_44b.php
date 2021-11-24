<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enviar Fecha</title>
</head>
<body>
    
    <?php
        if ($_REQUEST['mes']<=9){
            echo $mes = '0'.$_REQUEST['mes'];
        }else{
            $mes =$_REQUEST['mes'];
        }

        if ($_REQUEST['dia']<=9){
            echo $dia = '0'.$_REQUEST['dia'];
        }else{
            $dia = $_REQUEST['dia'];
        }

        
        $conexion=mysqli_connect("localhost","root","","base1","3307") or die ("Problema de conexion");
        $fecha=$_REQUEST['anio']."-".$mes."-".$dia;
        mysqli_query($conexion, "INSERT INTO alumnos (nombre,mail,codigocurso,fechanac) VALUES ('rolandasdaso','rolanasdasdpm123@example.com',1,'$fecha')")  or die ("Problema de conexion ".mysqli_error($conexion)); 
        
    ?>
</body>
</html>