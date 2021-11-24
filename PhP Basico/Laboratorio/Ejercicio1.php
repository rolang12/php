<!-- Realizar la codificación necesaria para calcular la nota final de una materia teniendo en
cuenta la siguiente ponderación:
35% del promedio de los 3 parciales.
35% de la calificación del examen final.
30% de la calificación de un trabajo final.
La materia se aprueba con una nota promedio mínimo de 3, debe mostrar la nota final y
el mensaje de “Aprobó” o “No aprobó” de acuerdo al resultado. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <form action="Ejercicio1b.php" class="" method="post">
        <div class="container m-auto " > 
        
            <div class=" grid grid-cols-2 bg-blue-200 text-center  " >
            
                <div class="grid-col mr-9- text-left" >
                    <div class="p-4" >Parcial 1:</div>
                    <div class="p-4" >Parcial 2:</div>
                    <div class="p-4" >Parcial 3:</div>
                    <div class="p-4" >Examen Final:</div>
                    <div class="p-4" >Trabajo Final:</div>
                    

                    <button class="p-1 ml-2  bg-blue-300 mb-2 w-1/2 ">Enviar <input type="submit" value=""> </button>
                     
                                        
                </div>
                
            <div class="grid-col text-left">

                <div class="p-4" ><input class="text-light text-left " name="par_1 " type="number"></div>
                <div class="p-4" ><input class="text-light text-left " name="par_2 " type="number"></div>
                <div class="p-4" ><input class="text-light text-left" name="par_3 " type="number"></div>
                <div class="p-4" ><input class="text-light text-left" name="exa " type="number"></div>
                <div class="p-4" ><input class="text-light text-left" name="tra " type="number"></div>
                                
               
            </div>

              
            
        </div>


    </form>    


</body>
</html>