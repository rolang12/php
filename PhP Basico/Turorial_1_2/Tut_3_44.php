<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="Tut_3_44b.php" method="post">
        Dia: 
        <select name="dia" id="">
        <?php for ($a=1; $a<=12; $a++){ ?> 
            <option value="<?php echo $a; ?>"><?php echo $a;} ?></option>
        </select>

        Mes: 
        <select name="mes" id="">
        <?php for ($e=1; $e<=12; $e++){ ?> 
            <option value="<?php echo $e; ?>"><?php echo $e;} ?></option>
        </select>

        Año:
        <select name="anio" id="">
            <?php for ($i=1900; $i<=2015; $i++){ ?> 
            <option value="<?php echo $i; ?>"><?php echo $i;} ?></option>
        </select>

        <input type="submit" value="enviar">
    </form>    

</body>
</html>