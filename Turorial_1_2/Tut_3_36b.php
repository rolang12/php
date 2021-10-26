<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php 
    include_once 'Tut_3_36.php';
    $all_reg = mysqli_query($conexion, "SELECT * from alumnos");
    ?>
    <table>
    <tr>
        <td>Codigo</td>
        <td>Nombre</td>
        <td>Email</td>
        <td>Codigo de Curso</td>
    </tr>
    <?php while ($data = mysqli_fetch_array($all_reg)){ ?>
    <tr>
        <td><?php echo $data['codigo'] ?></td>
        <td><?php echo $data['nombre'] ?></td>
        <td><?php echo $data['mail'] ?></td>
        <td><?php echo $data['codigocurso'] ?></td>
    </tr>
    <?php } ?>


    </table>



</body>
</html>