<html>

<head>
  <title>Problema</title>
</head>

<body>
  <?php
    $conexion=mysqli_connect("localhost","root","","base1","3307")
    or die ("Problemas con la conexion");

        $registros = mysqli_query($conexion, "SELECT count(alu.codigo) as cantidad, nombre_c, nombre, codigocurso_c from alumnos as alu
                                                inner join cursos as cur on cur.codigocurso_c=alu.codigocurso
                                                group by alu.codigocurso") or die("Problemas en el select:" . mysqli_error($conexion));

        $registros2 = mysqli_query($conexion, "SELECT nombre from alumnos where codigocurso=$reg[codigocurso_c]") or die("Problemas en el select:" . mysqli_error($conexion));

        while ($reg = mysqli_fetch_array($registros)) {
                echo "Nombre del curso: " . $reg['nombre_c'] . "<br>";
                echo "Cantidad de inscriptos: " . $reg['cantidad'] . "<br>";


                while ($reg1 = mysqli_fetch_array($registros2)) {
                    echo "Nombre del Alumno: " . $reg1['nombre'] . "<br>";
        }
        echo "<hr>";
    }
    mysqli_close($conexion);
  ?>
</body>

</html>