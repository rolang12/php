<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quejas y Reclamos</title>
</head>
<body>
<?php
  if (isset($_REQUEST['enviar'])){

    header("Location: Tut_3_42c.php");
    $ar= fopen("quejas.txt","a") or die("problemas en la creacion");
    fputs($ar, "Nombre: ");
    fputs($ar,$_REQUEST['nombre']);
    fputs($ar,"\n");
    fputs($ar, "Queja: ");
    fputs($ar,$_REQUEST['queja']); echo "<br>";
    fputs($ar,"\n");
    $fecha=date("d/m/y");
    $hora=date("H:i:s");
    fputs($ar, "Fecha: ");
    fputs($ar, $fecha);
    fputs($ar, " - Hora: ");
    fputs($ar, $hora);
    fputs($ar,"\n");
    fputs($ar,"-------------------------------------------------------------------------");

  }
    ?>
</body>
</html>