<?php
if (isset($_REQUEST['pos']))
  $inicio = $_REQUEST['pos'];
else
  $inicio = 0;
?>
<html>

<head>
  <title>Problema</title>
</head>

<body>

  <?php
    $conexion=mysqli_connect("localhost","root","","base1","3307")
    or die ("Problemas con la conexion"); 

    $registros = mysqli_query($conexion, "SELECT alu.codigo as  
                                                codigo,
                                                nombre,
                                                mail,
                                                codigocurso, 
                                                nombre_c
                                                from alumnos as alu
                                            inner join cursos as cur on cur.codigocurso_c=alu.codigocurso
                                            limit $inicio,3") or
        die("Problemas en el select:" . mysqli_error($conexion));
    $impresos = 0;
    while ($reg = mysqli_fetch_array($registros)) {
        $impresos++;
        echo "Codigo: ".$reg['codigo']."<br>";
        echo "Nombre: ".$reg['nombre']."<br>";
        echo "Mail: ".$reg['mail']."<br>";
        echo "Curso: ".$reg['nombre_c']."<br>";
        echo "<hr>";
    }
    if ($inicio == 0)
        echo "anteriores ";
    else {
        $anterior = $inicio - 3;
        echo "<a href=\"Tut_2_32.php?pos=$anterior\">Anteriores </a>";
    }
    if ($impresos == 3) {
        $proximo = $inicio + 3;
        echo "<a href=\"Tut_2_32.php?pos=$proximo\">Siguientes</a>";
    } else
        echo "siguientes";
    mysqli_close($conexion);
  ?>

</body>

</html>