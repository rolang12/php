<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>Insert</title>
    <style>
        .note
{
    text-align: center;
    height: 80px;
    background: -webkit-linear-gradient(left, #0072ff, #8811c5);
    color: #fff;
    font-weight: bold;
    line-height: 80px;
}
.form-content
{
    padding: 5%;
    border: 1px solid #ced4da;
    margin-bottom: 2%;
}
.form-control{
    border-radius:1.5rem;
}
.btnSubmit
{
    border:none;
    border-radius:1.5rem;
    padding: 1%;
    width: 20%;
    cursor: pointer;
    background: #0062cc;
    color: #fff;
}
    </style>
</head>
<body>
    <?php

    $conexion=mysqli_connect("localhost","root","","base1","3307")
    or die ("Problema de conexion");

    if ($_POST>0){
        mysqli_query($conexion, "INSERT INTO alumnos (nombre,mail,codigocurso,fechanac) values '$_POST[nombre]','$_POST[nombre]','$_POST[mail]',$_POST[codigocurso],'$_POST[fecha]'") or die ("Error de insert " ) ;
    }
    ?>


<!------ Include the above in your HEAD tag ---------->

<div class="container register-form mt-5 ">
            <div class="form">
                <div class="note">
                    <p>Registrar Alumno</p>
                </div>

                <div class="form-content">
                    <div class="row">
                        
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Name " value=""/>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Mail" value=""/>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="date" class="form-control" placeholder="Date" value=""/>
                            </div>
                            <select name="course" id="">
                                <option value="1">PHP</option>
                                <option value="3">Python</option>
                                

                            </select>
                        </div>
                    </div>
                    <button type="button" class="btnSubmit">Submit</button>
                </div>
            </div>
        </div>
    
</body>
</html>