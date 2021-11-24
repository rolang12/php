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
    $l = 2;
    $number = 9;
    $string = substr(str_repeat(0, $l).$number, - $l);
    echo $string;

    ?>
</body>
</html>