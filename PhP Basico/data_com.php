<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recibir Datos Comentario</title>
</head>
<body>
    <?php

        echo '<link rel="stylesheet" href="final.css">';
        echo '<link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">';

        $conexion = mysqli_connect("localhost","root",null,"mydb","3305");
        if (mysqli_connect_errno($conexion)){
            echo "Fallo al conectar a MySQL.". mysqli_connect_error();

        } else{

            echo '<div class="bg-green-500 text-center p-4 text-xl text-white font-light z-50" >¡Te has conectado correctamente!</div>';

            mysqli_query($conexion , "INSERT INTO media (archivos) VALUES ('$_REQUEST[archivo]')") or die ("Problema en la insersión <br> <br>".mysqli_error($conexion));



            $insert=mysqli_query($conexion , "INSERT INTO articulos (titulo,contenido,fecha,usuarios_idusuarios,media_idmultimedia,idcategorias ) VALUES ('$_REQUEST[titulo]','$_REQUEST[comentario]','$_REQUEST[fecha]',2,1,'$_REQUEST[categoria]')") or die ("Problema en la insersión <br> <br>".mysqli_error($conexion));

            if ($insert){
                echo ' <div class="text-center text-2xl font-bold my-auto p-5 bg-white">¡Sucess!</div> ';
            echo ' <br>';
            echo ' <div class="text-center text-lg font-light   my-auto p-3 bg-white">¡Your Article has been published?</div> '; 
            echo '<br> <br>';
            echo '<svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="comment-dots" class="svg-inline--fa fa-comment-dots fa-w-16 flex m-auto h-32 w-32 text-green-600 " role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M144 208c-17.7 0-32 14.3-32 32s14.3 32 32 32 32-14.3 32-32-14.3-32-32-32zm112 0c-17.7 0-32 14.3-32 32s14.3 32 32 32 32-14.3 32-32-14.3-32-32-32zm112 0c-17.7 0-32 14.3-32 32s14.3 32 32 32 32-14.3 32-32-14.3-32-32-32zM256 32C114.6 32 0 125.1 0 240c0 47.6 19.9 91.2 52.9 126.3C38 405.7 7 439.1 6.5 439.5c-6.6 7-8.4 17.2-4.6 26S14.4 480 24 480c61.5 0 110-25.7 139.1-46.3C192 442.8 223.2 448 256 448c141.4 0 256-93.1 256-208S397.4 32 256 32zm0 368c-26.7 0-53.1-4.1-78.4-12.1l-22.7-7.2-19.5 13.8c-14.3 10.1-33.9 21.4-57.5 29 7.3-12.1 14.4-25.7 19.9-40.2l10.6-28.1-20.6-21.8C69.7 314.1 48 282.2 48 240c0-88.2 93.3-160 208-160s208 71.8 208 160-93.3 160-208 160z"></path></svg>';
            
            echo '<br> <br>';
            echo '<a href="blog_REG1.php" > <button class="m-auto  flex bg-green-500 text-white font-bold py-2 px-8 rounded-md text-center hover:bg-green-700">Back</button></a> ';

            }else{
                echo "Insersion incorrecta";
            }
            
        }


    ?>


</body>
</html>