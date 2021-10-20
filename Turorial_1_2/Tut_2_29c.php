<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
        $conexion=mysqli_connect("localhost","root","","base1","3307") or die ("Problema de conexion");
        $registros = mysqli_query($conexion, "UPDATE alumnos SET codigocurso = '$_REQUEST[codigocurso]', nombre = '$_REQUEST[nombre]', mail='$_REQUEST[mail]' WHERE codigo = $_REQUEST[codigo]") or die("Problemas en el select:".mysqli_error($conexion));
        echo "El curso fue modificado con exito";
    ?>
</body>

</html>