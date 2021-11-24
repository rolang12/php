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
    $ar=fopen("datos.txt","a") or die("problemas en la creacion");
    fputs($ar,$_REQUEST['nombre']);
    fputs($ar,"\n");
    fputs($ar,$_REQUEST['comentarios']);
    fputs($ar,"\n");
    fputs($ar,"---------------------------------------------------");
    fputs($ar,"\n");
    fclose($ar);
    echo "Los datos se cargaron correctamente. ";
    ?>
</body>
</html>