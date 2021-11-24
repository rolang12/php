<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Alta de alumnos</h1>
    <form action="Tut_2_20b.php" method="post" >
        Ingrese su nombre: 
        <input type="text" name="nombre" required placeholder="Nombre" >
        <br> <br>
        Ingrese su Email:
        <input type="email" required name="mail" placeholder="E-mail" >
        <br> <br>
        Seleccione el curso:
        <select name="codigocurso" required >
            <option value="">--Seleccionar--</option>
            <option value="1">Php</option>
            <option value="2">ASP</option>
            <option value="3">JSP</option>
        </select>
        <br> <br>
        <input type="submit" value="registrar">
    </form>
        
</body>
</html>