<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="Tut_3_35b.php" method="POST">
    Noticia Politica:
    <input type="radio" name="politica" value="<?php if(isset($_COOKIE['politica'])) echo ($_COOKIE['politica']);?>"> <br> <br>
    Noticia Economica:
    <input type="radio" name="economica" value="<?php if(isset($_COOKIE['politica'])) echo ($_COOKIE['economica']);?>" > <br> <br>
    Noticia Deportiva:
    <input type="radio" name="deportiva" value="<?php if(isset($_COOKIE['politica'])) echo ($_COOKIE['deportiva']);?>" > <br> <br> <br>
    Recordar Noticia:
    <input type="radio" name="opcion" value="recordar" > <br> <br>
    NO Recordar Noticia:
    <input type="radio" name="opcion" value="norecordar" > <br> <br>

    <input type="submit" name="enviar" >



    </form>
</body>
</html>