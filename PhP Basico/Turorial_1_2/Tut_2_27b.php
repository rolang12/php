<html>

<head>
  <title>Problema</title>
</head>

<body>
  <?php
  $conexion=mysqli_connect("localhost","root","","base1","3307")
  or die ("Problema de conexion");

  $registros = mysqli_query($conexion, "SELECT nombre,mail,codigocurso, cursos.nombre_c  FROM alumnos INNER JOIN cursos ON cursos.codigocurso_c=alumnos.codigocurso where alumnos.codigocurso='$_REQUEST[codigo]'") or
    die("Problemas en el select:" . mysqli_error($conexion));

  if ($reg = mysqli_fetch_array($registros)) {
    echo "Nombre: " . $reg['nombre_c'] . "<br>";
    echo "Mail: " . $reg['mail'] . "<br>";
    echo "Curso: " . $reg['nombre'] . "<br>";
  } else {
    echo "No existe un alumno con ese código.";
  }
  mysqli_close($conexion);
  ?>
</body>

</html>