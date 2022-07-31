<?php
    include 'conexion.php';
    require 'validation.php';
    

    if ( isset($_GET['idusuarios']) && $_SESSION['session'] == 'active'){

        $iduser = $_GET['idusuarios'];

        $sql = "SELECT avatar,idusuarios, usuarios.nickname as 'nickname', usuarios.passwor as 'password', usuarios.email as email, direcciones.calle as direcciones FROM usuarios INNER JOIN direcciones WHERE idusuarios = $iduser";
        $result2 = mysqli_query($conexion, $sql);
        $result2 = mysqli_fetch_assoc($result2);

        
        
    }else{
        header("Location: login.php");
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="final.css">
    <link rel="stylesheet" href="est.css">
    <link rel="stylesheet" href="./public/tailwind.css" />
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet"> 
    <link rel="shortcut icon" href="images/icono.png">
    <script src="https://kit.fontawesome.com/6628fdf66e.js" crossorigin="anonymous"></script>
    <title>Register</title>
    
</head>
    <body class="bg-image " >

        <div class="container-fluid   ">

            <div class="min-h-screen  justify-center  flex items-center text-center  ">
                <div class="max-w-md   w-96 border border-separate bg-gray-100 rounded-2xl border-gray-200 p-7 space-y-8">
                <div>
                    <svg aria-hidden="true"  focusable="false" data-prefix="fab" data-icon="artstation" class="mx-auto animate-pulse svg-inline--fa fa-artstation text-center h-10 w-10 fa-w-16  " role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="gray" d="M2 377.4l43 74.3A51.35 51.35 0 0 0 90.9 480h285.4l-59.2-102.6zM501.8 350L335.6 59.3A51.38 51.38 0 0 0 290.2 32h-88.4l257.3 447.6 40.7-70.5c1.9-3.2 21-29.7 2-59.1zM275 304.5l-115.5-200L44 304.5z"></path></svg>
                    
                    <h2 class="mt-6 text-center text-4xl font-bold text-gray-500">Create Account</h2>

                    <p class="mt-2 text-center text-sm text-gray-600">
                        Or
                        <a href="#" class="font-medium  text-gray-700 hover:text-gray-500">
                            free premium for 15 days
                        </a>
                    </p>
                </div>
                <form class="mt-8 space-y-6" method="POST" action="confirm_update.php" enctype="multipart/form-data" >
                        
                    <input type="hidden" name="newidusuarios" value=" <?php echo $result2['idusuarios'] ?> ">

                        
                    <div class="rounded-md shadow-sm ">

                        <div class=" my-2 ">
                            <input <?php echo isset($result2) ? 'value="'.$result2['nickname'].'"' : ''; ?> type="text" name="newnickname" class="  block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-gray-500 focus:border-gray-500 focus:z-10 sm:text-sm" placeholder="Nickname" required >
                        </div>

                        <div class=" my-2 ">
                            <input <?php echo isset($result2) ? 'value="'.$result2['password'].'"' : ''; ?> type="password" name="newpassword" class=" block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-gray-500 focus:border-gray-500 focus:z-10 sm:text-sm" placeholder="Password" required >
                        </div>

                        <div class=" my-2 ">
                            <input <?php echo isset($result2) ? 'value="'.$result2['email'].'"' : ''; ?> type="email" name="newemail"  class="  block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-gray-500 focus:border-gray-500 focus:z-10 sm:text-sm" placeholder="Email" required >
                        </div>

                        <div class=" my-2 ">
                            <select type="text" name="pais" disabled class=" block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-gray-500 focus:border-gray-500 focus:z-10 sm:text-sm" placeholder="Pais" required >

                            <option value="1" class="font-light">USA</option>
                            <option value="2" class="font-light p-2">Argentina</option>
                            <option value="3" class="font-light p-2">Bolivia</option>
                            <option value="4" class="font-light p-2">Colombia</option>
                            <option value="5" class="font-light p-2">Ecuador</option>
                            <option value="6" class="font-light p-2">Panama</option>
                            <option value="7" class="font-light p-2">Mexico</option>
                            <option value="8" class="font-light p-2">Other</option>

                            </select>
                       
                        </div>

                        <div class=" my-2 ">
                            <input disabled <?php echo isset($result2) ? 'value="'.$result2['direcciones'].'"' : ''; ?> type="direccion" name="direccion" class=" block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-gray-500 focus:border-gray-500 focus:z-10 sm:text-sm" placeholder="Dirección" required >
                        </div>

                        <div class=" my-2 ">
                            <input  <?php echo isset($result2) ? 'value="'.$result2['avatar'].'"' : ''; ?> type="file" name="avatar" accept="image/png, image/jpeg" class=" block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-gray-500 focus:border-gray-500 focus:z-10 sm:text-sm" >
                        </div>



                        <div class="bg-gray-500 text-gray-800">
                            
                            
                            
                        </div>
                        
                    </div>
            
           
            
                    <div>
                        <button type="submit"  value="registrar" class="group relative modal-open w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-gray-600 hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
                            <span class="absolute left-0 inset-y-0 flex items-center pl-3">
                                <svg class="h-5 w-5 text-gray-500 group-hover:text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"><path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" /></svg>
                            </span>
                            
                            Edit Account
                        </button>
                    </div>
                </form>
                </div>
            
            </div>


            </button> -->
            <!-- INICIO REDES SOCIALES -->
            <a href="#" class="btn-flotante"><svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="facebook" class="svg-inline--fa h-8 w-8 fa-facebook fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z"></path></svg></a>

            <a href="#" class="btn-flotante2" ><svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="instagram" class="svg-inline--fa fa-instagram  h-8 w-8 fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"></path></svg></a>
            <!-- FIN REDES SOCIALES  -->
        </div>

    
    </body>
</html>


