<!DOCTYPE html>

<?php

    $conexion=mysqli_connect("localhost","root","","base1","3307")
    or die ("Problema de conexion");

    $registros = mysqli_query($conexion, "SELECT * from alumnos INNER JOIN cursos on alumnos.codigocurso = cursos.codigocurso_c ") or die ("Problemas en el select:" . mysqli_error($conexion));
    
?>


<html lang="sp">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>CRUD</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="stylecrud.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
    

</style>
<script>
$(document).ready(function(){
	$('[data-toggle="tooltip"]').tooltip();
});
</script>
</head>
<body>
<div class="container-xl">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-5">
                        <h2>Users</h2>
                    </div>
                    <div class="col-sm-7">
                        <a href="insert.php" class="btn btn-secondary"><i class="material-icons">&#xE147;</i> <span>Add New User</span></a>
                    </div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Code</th>
                        <th>Name</th>						
                        <th>Birth Date </th>
                        <th>Mail</th>
                        <th>Course</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                        <?php for ($i = 0; $i < mysqli_num_rows($registros); $i++) {
                        	$usuario = mysqli_fetch_assoc($registros); 
						?>
                    <tr>
                        <td><?php echo $usuario['codigo'] ?></td>
                        <td><?php echo $usuario['nombre'] ?></td>                        
                        <td><?php if ($usuario['fechanac']){ echo $usuario['fechanac'];}else{ echo "NULL";} ?></td>
                        <td><?php echo $usuario['mail'] ?></td>
                        <td><?php echo $usuario['nombre_c'] ?></td>
                        <td>
                            <a href="<?php echo 'Update.php?codigo='.$usuario['codigo'] ?> " class="settings" title="Settings" data-toggle="tooltip"><i class="material-icons">&#xE8B8;</i></a>
                        </td> 
                        <td><a href="<?php echo 'delete.php?codigo='.$usuario['codigo'] ?>"  class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE5C9;</i></a></td>
                    </tr>
                   <?php } ?>
                </tbody>
            </table>
            <div class="clearfix">
                <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
                <ul class="pagination">
                    <li class="page-item disabled"><a href="#">Previous</a></li>
                    <li class="page-item"><a href="#" class="page-link">1</a></li>
                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                    <li class="page-item active"><a href="#" class="page-link">3</a></li>
                    <li class="page-item"><a href="#" class="page-link">4</a></li>
                    <li class="page-item"><a href="#" class="page-link">5</a></li>
                    <li class="page-item"><a href="#" class="page-link">Next</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>     
</body>
</html>