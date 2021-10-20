<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php $conexion=mysqli_connect("localhost","root","","base1","3307")
    or die ("Problemas con la conexion"); 
        
        $cur=$_REQUEST['name'];
        echo "<a href='Tut_2_31c.php?curso=$_REQUEST[name]' >$cur</a>";
        ECHO "<BR>";
     

    ?>




</body>
</html>