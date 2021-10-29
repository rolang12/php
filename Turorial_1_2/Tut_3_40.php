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
        $ancho=100;
        $alto=30;
        $imagen=imagecreate(100, 30);
        $amarillo=imagecolorallocate($imagen, 255, 255, 0);
        imagefill($imagen, 0, 0, $amarillo);
        $rojo=imagecolorallocate($imagen, 255, 0, 0);
        $valoraleatorio=rand(100000,999999);
        imagestring($imagen,5, 25, 5, $valoraleatorio, $rojo);
        for($c=0;$c<=5;$c++)
        {
            $x1=rand(0,$ancho);
            $y1=rand(0,$alto);
            $x2=rand(0,$ancho);
            $y2=rand(0,$alto);
            imageline($imagen, $x1, $y1,$x2, $y2, $rojo);
            
        }
        header ("content-type: image/jpeg");
        imagejpeg($imagen);
        imagedestroy($imagen);


        ?>




</body>
</html>