<html>

<head>
  <title>Problema</title>
</head>
<?php 
$conexion=mysqli_connect("localhost","root","","base1","3307")
or die ("Problema de conexion");
?>
<body>
  <form action="Tut_2_26b.php" method="post">
        Ingrese nombre:
        <input type="text" name="nombre"><br>
        Ingrese mail:
        <input type="text" name="mail"><br>
        Seleccione el curso:<br>
        <?php
        $registros = mysqli_query($conexion, "SELECT codigocurso,nombre FROM cursos") or die("Problemas en el select:".mysqli_error($conexion));
            while ($reg = mysqli_fetch_array($registros)) {
            echo "<input type=\"radio\" name=\"radio1\" value=\"$reg[codigocurso]\">" . $reg['nombre'] . "<br>";
            }
        ?>
        <input type="submit" value="Registrar">
        
    </form>
</body>

</html>