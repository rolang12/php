<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="stylecrud.css" rel="stylesheet">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
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
    
    if ($_POST){
        $insert = mysqli_query($conexion, "INSERT INTO alumnos (nombre,mail,codigocurso,fechanac) VALUES ('$_POST[nombre]','$_POST[mail]',$_POST[course],'$_POST[date]')") or die ("Error de insert".mysqli_error($conexion));
        if ($insert){
            header("Location: registrado.html");
        }else
            header("Location: error.html");
    }
    ?>




<div class="container">


<div class="card bg-light">
<article class="card-body mx-auto" style="max-width: 400px;">
	<h4 class="card-title mt-3 mb-6 text-center">Register Student</h4>
	
	<form action="insert.php" method="POST" >
        <div class="form-group input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"> <i class="fa fa-user"></i> </span>
            </div>
            <input name="nombre" class="form-control" placeholder="Name" type="text">
        </div> <!-- form-group// -->
        <div class="form-group input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
            </div>
            <input name="mail" class="form-control" placeholder="Email address" type="email">
        </div> <!-- form-group// -->


        <div class="form-group input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"> <i class="fa fa-book"></i> </span>
            </div>
            <select name="course" id="" required class="w-85 rounded " >

                <option value="1">PHP</option>
                <option value="3">Python</option>

            </select>
        </div> 


        <div class="form-group input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"> <i class="fa fa-calendar"></i> </span>
            </div>
        
            <input name="date" class="form-control"  type="date">
        </div> 

        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block"> Create Account  </button>
        </div>
                                                                     
    </form>
</article>
</div> 

</div> 


