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


    copy($_FILES['foto']['tmp_name'], $_FILES['foto']['name']);
    $nom = $_FILES['foto']['name'];
    copy($_FILES['foto2']['tmp_name'], $_FILES['foto2']['name']);
    $nom2 = $_FILES['foto2']['name'];
    copy($_FILES['foto3']['tmp_name'], $_FILES['foto3']['name']);
    $nom3 = $_FILES['foto3']['name'];

    
    echo "<img src=\"$nom\">";
    echo "<img src=\"$nom2\">";
    echo "<img src=\"$nom3\">";


    
    
    
    ?>
</body>
</html>