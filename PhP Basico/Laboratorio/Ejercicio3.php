

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
    <form action="Ejercicio3b.php" class="" method="post">
        <div class="container m-auto " > 
        
            <div class=" grid grid-cols-2 bg-blue-200 text-center mt-20 " >
            
                <div class="grid-col mr-9- text-left" >
                    <div class="p-4" >Nombre del Paciente:</div>
                    <div class="p-4" >Peso en Kilogramos:</div>
                    <div class="p-4" >Estatura en Metros:</div>
                 
                    <button class="p-1 ml-2 hover:bg-blue-400  bg-blue-300 mb-2 w-1/2 ">Enviar <input type="submit" value=""> </button>
                                            
                </div>
                
            <div class="grid-col text-left">

                <div class="p-4" ><input class="text-light text-left " name="name "  type="text"></div>
                <div class="p-4" ><input class="text-light text-left " name="cant " type="text"></div>
                <div class="p-4" ><input class="text-light text-left" name="prec " type="text"></div>
                
                                
               
            </div>

              
            
        </div>


    </form>    


</body>
</html>