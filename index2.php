<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
        <link rel="stylesheet" href="final.css">
        <link rel="stylesheet" href="est.css"> 
        <link rel="stylesheet" href="./public/tailwind.css" />
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet"> 
        <link rel="shortcut icon" href="images/icono.png">
        <script src="https://kit.fontawesome.com/6628fdf66e.js" crossorigin="anonymous"></script>
        <title>Blog Personal</title>
    </head>

    
    <body class="bg-white " >
        
        
        <div class="container-fluid h-full  bg-white">
           <!-- Barra de navegacion -->
            
            <div class="flex py-2 bg-gray-900 fixed w-screen -mx-3 shadow-2xl items-center z-40 " > 
                <div class="xs-ml:hidden " >
                    <svg aria-hidden="true"  focusable="false" data-prefix="fab" data-icon="artstation" class="svg-inline--fa fa-artstation hover:filter hover:brightness-200  ml-5 w-10 h-10 fa-w-16  " role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="gray" d="M2 377.4l43 74.3A51.35 51.35 0 0 0 90.9 480h285.4l-59.2-102.6zM501.8 350L335.6 59.3A51.38 51.38 0 0 0 290.2 32h-88.4l257.3 447.6 40.7-70.5c1.9-3.2 21-29.7 2-59.1zM275 304.5l-115.5-200L44 304.5z"></path></svg>
                </div>

                <div class="flex-1 xs-ml:hidden font-bold text-lg text-gray-400 px-3 hover:filter hover:brightness-200  " > Blog Bepet</div>
            
                <div class="mx-2   w-auto" >
                <h4 class="hover:border-gray-200 font-bold hover:border-b  border-gray-900  border-b text-gray-300 hover:text-gray-400 p-3 transition ease-in duration-500 focus:bg-gray-200 focus:text-gray-900 ">Home</h4> 
                </div>

                <div class="mx-2  w-auto">
                    <h4 class="hover:border-gray-200 font-bold focus:bg-gray-200 focus:text-gray-900 hover:border-b border-gray-900  border-b  transition ease-in duration-500 text-gray-300 hover:text-gray-400  p-3 "><a href="#pintu" class="">Articles</h4> </a>
                </div>
                
                <div class="mx-2 w-auto">
                    <a href="Controllers/HomeController.php"   ><h4 class="hover:border-gray-200 font-bold  hover:border-b border-gray-900  border-b focus:bg-gray-200 focus:text-gray-900 transition ease-in duration-500 text-gray-300 hover:text-gray-400  p-3  ">Login </h4></a>
                    
                    
                </div>
                <div class="mx-2 w-auto">
                    <a href="C:\Users\Rolan\Desktop\BePet\Proyecto\public\blogREG.html"><h4 class="hover:border-gray-200 font-bold  hover:border-b border-gray-900  border-b focus:bg-gray-200 focus:text-gray-900 transition ease-in duration-500 animate-pulse text-gray-300 hover:text-gray-400  p-3 "  >Register</h4></a>
                </div>
               


            </div>

           
            <!-- Fin de Barra de Navegación -->

            <!-- INICIO de SLIDER -->
            <style>
                .carousel-open:checked + .carousel-item {
                    position: static;
                    opacity: 100;
                }
                .carousel-item {
                    -webkit-transition: opacity 0.6s ease-out;
                    transition: opacity 0.6s ease-out;
                }
                #carousel-1:checked ~ .control-1,
                #carousel-2:checked ~ .control-2,
                #carousel-3:checked ~ .control-3 {
                    display: block;
                }
                .carousel-indicators {
                    list-style: none;
                    margin: 0;
                    padding: 0;
                    position: absolute;
                    bottom: 2%;
                    left: 0;
                    right: 0;
                    text-align: center;
                    z-index: 10;
                }
                #carousel-1:checked ~ .control-1 ~ .carousel-indicators li:nth-child(1) .carousel-bullet,
                #carousel-2:checked ~ .control-2 ~ .carousel-indicators li:nth-child(2) .carousel-bullet,
                #carousel-3:checked ~ .control-3 ~ .carousel-indicators li:nth-child(3) .carousel-bullet {
                    color: #2b6cb0;  
                }
            </style>
    
            <div class="carousel relative grid-cols-1 h-screen shadow-2xl bg-white">
                <div class="carousel-inner  h-screen relative overflow-hidden w-full">
                  <!--Slide 1-->
                    <input class="carousel-open" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden="" checked="checked">
                    <div class="carousel-item absolute opacity-0" style="height:50vh;">
                        <div class="block h-screen w-full bg-gray-500 text-white text-5xl text-center"><img src="images/fanart3.png" alt=""></div>
                    </div>
                    <label for="carousel-3" class="prev control-1 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-gray-900 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
                    <label for="carousel-2" class="next control-1 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-gray-900 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>
                    
                    <!--Slide 2-->
                    <input class="carousel-open" type="radio" id="carousel-2" name="carousel" aria-hidden="true" hidden="">
                    <div class="carousel-item absolute opacity-0" style="height:50vh;">
                        <div class="block h-screen w-full bg-gray-900 text-white text-5xl text-center"> <img src="images/fanart2.jpg" alt=""></div>
                    </div>

                    <label for="carousel-1" class="prev control-2 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-gray-900 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
                    <label for="carousel-3" class="next control-2 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-gray-900 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label> 
                    
                    <!--Slide 3-->
                    <input class="carousel-open" type="radio" id="carousel-3" name="carousel" aria-hidden="true" hidden="">
                    <div class="carousel-item absolute opacity-0" style="height:50vh;">
                        <div class="block h-screen w-full bg-green-500 text-white text-5xl text-center"><img src="images/fanart1.jpg" alt=""></div>
                    </div>
                    <label for="carousel-2" class="prev control-3 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-gray-900 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
                    <label for="carousel-1" class="next control-3 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-gray-900 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>
            
                    <!-- Puntos de posición de usuario-->
                    <ol class="carousel-indicators">
                        <li class="inline-block mr-3">
                            <label for="carousel-1" class="carousel-bullet cursor-pointer block text-4xl  text-gray-400 hover:text-gray-600">•</label>
                        </li>
                        <li class="inline-block mr-3">
                            <label for="carousel-2" class="carousel-bullet cursor-pointer block text-4xl  text-gray-400 hover:text-gray-600">•</label>
                        </li>
                        <li class="inline-block mr-3">
                            <label for="carousel-3" class="carousel-bullet cursor-pointer block text-4xl  text-gray-400 hover:text-gray-600">•</label>
                        </li>
                    </ol>
                    
                </div>
            </div>
            
            <!-- Fin de SLIDER -->
         
            <!-- Inicio de Tarjetas -->
            <div class="grid grid-cols-3 xs-ml:grid-cols-1 mt-14 mx-3 h-full shadow-xl text-center">
                
                    <div class="col text-justify font-thin text-lg p-2  mx-3 shadow-2xl ">
                        <img src="images/abbey.jpg" alt="" class="w-full h-72 rounded  ">
                        Abbey Road entered the British album chart at no.1 in October and stayed there for a total of seventeen of its 81 weeks in the chart. In the US, it spent eleven weeks at #1 during its initial chart stay of 83 weeks.
                    </div>
                    <div class="col  "> <img src="images/beat.jpg" alt="" class="rounded hover:filter hover:brightness-125 animate-pulse " > </div>

                    <div class="col text-justify p-2 font-thin text-lg  mx-3 shadow-2xl ">
                        <img src="images/fanart.jpg" alt="" class="w-full h-72  rounded ">
                        Abbey Road entered the British album chart at no.1 in October and stayed there for a total of seventeen of its 81 weeks in the chart. In the US, it spent eleven weeks at #1 during its initial chart stay of 83 weeks.
                    </div>

            </div>
            
        </div>
            <!-- Inicio de Tarjetas -->
        <div class="container-fluid xs-ml:w-screen " ><a name="pintu" ></a> 
            <div class="grid grid-cols-4 xs-ml:grid xs-ml-grid-cols-1 py-auto mx-3 shadow-xl text-center">
                
                <div class="col my-10 text-justify p-2 mx-3 shadow-2xl  ">
                    <img src="images/A Hard Days Night.jpg" alt="" class="w-full h-72 rounded hover:filter hover:brightness-125 ">
                    <div class="flex flex-row " >
                        <div class="flex-1 my-2  font-bold transform scale-100  " >A Hard Day's Night</div>
                        <div class="flex-row-reverse my-3  text-right font-light text-sm inline text-gray-500 text-right my-2 hover:text-gray-800 " >Rolan - 18/May/2021 </div>

                    </div>
                    
                        <p class="font-light text-lg " > Released on 10th July, 1964, the Beatles third album in less than eighteen months was timed to coincide with the cinema opening of their first movie.</p>
                        
                        <div class="my-2  font-light  " >
                            <p class="inline mx-1  hover:text-white hover:bg-red-600 rounded transition ease-in duration-500 " >#album</p>
                            <p class="inline mx-1  hover:text-white hover:bg-blue-600 rounded transition ease-in duration-500" >#thebeatles </p>
                            <p class="inline mx-1  hover:text-white hover:bg-green-600 rounded transition ease-in duration-500 " >#AHDN </p>
                            <p class="inline mx-1  hover:text-white hover:bg-yellow-600 rounded transition ease-in duration-500 " >#music</p>
                            <p class="inline mx-1  hover:text-white hover:bg-indigo-600 rounded transition ease-in duration-500 " >#rocknroll</p>
                            <p class="inline mx-1  hover:text-white hover:bg-pink-600 rounded transition ease-in duration-500 " >#england</p>
                            <p class="inline mx-1  hover:text-white hover:bg-danger rounded transition ease-in duration-500 " >#rock</p>
                            <p class="inline mx-1  hover:text-white hover:bg-purple-600 rounded transition ease-in duration-500 " >#old </p>
                            <p class="inline mx-1  hover:text-white hover:bg-yellow-900 rounded transition ease-in duration-500 " >#lennon</p>

                        </div>
                </div>

                <div class="col my-10 text-justify h-auto p-2 mx-3 shadow-2xl ">
                    <img src="images/Rubber Soul.jpg" alt="" class="w-full h-72 rounded hover:filter hover:brightness-125 ">
                    <div class="flex flex-row " >
                        <div class="flex-1 my-2  font-bold  " >Rubber Soul</div>
                        <div class="flex-row-reverse my-3  text-right font-light text-sm inline text-gray-500 text-right my-2 hover:text-gray-800 " >Mike - 06/Jan/2020 </div>

                    </div>
                    
                        <p class="font-light text-lg " >Rubber Soul was another album for Christmas - released on 3rd December, 1965 just two weeks after final mixing had taken place.</p>
                        
                        <div class="mt-9  font-light" >
                            <p class="inline mx-1  hover:text-white hover:bg-red-600    rounded transition ease-in duration-500 " >#1965</p>
                            <p class="inline mx-1  hover:text-white hover:bg-blue-600   rounded transition ease-in duration-500" >#thebeatles </p>
                            <p class="inline mx-1  hover:text-white hover:bg-green-600  rounded transition ease-in duration-500 " >#RB </p>
                            <p class="inline mx-1  hover:text-white hover:bg-yellow-600 rounded transition ease-in duration-500 " >#music</p>
                            <p class="inline mx-1  hover:text-white hover:bg-indigo-600 rounded transition ease-in duration-500 " >#rocknroll</p>
                            <p class="inline mx-1  hover:text-white hover:bg-pink-600   rounded transition ease-in duration-500 " >#england</p>
                            <p class="inline mx-1  hover:text-white hover:bg-danger     rounded transition ease-in duration-500 " >#rock</p>
                            <p class="inline mx-1  hover:text-white hover:bg-purple-600 rounded transition ease-in duration-500 " >#old </p>
                            <p class="inline mx-1  hover:text-white hover:bg-yellow-900 rounded transition ease-in duration-500 " >#lennon</p>

                        </div>
                </div>
                <div class="col my-10 text-justify bo p-2 mx-3 shadow-2xl ">
                    <img src="images/Revolver.jpg" alt="" class="w-full h-72 rounded hover:filter hover:brightness-125  ">
                    <div class="flex flex-row " >
                        <div class="flex-1 my-2  font-bold  " >Revolver</div>
                        <div class="flex-row-reverse my-3  text-right font-light text-sm inline text-gray-500 text-right my-2 hover:text-gray-800  " >Rob - 10/Jul/2019 </div>

                    </div>
                    
                        <p class="font-light text-lg " >Released on 10th July, 1964, the Beatles third album in less than eighteen months was timed to coincide with the cinema opening of their first movie.</p>
                        
                        <div class="my-2  font-light  " >
                            <p class="inline mx-1  hover:text-white hover:bg-red-600 rounded transition ease-in duration-500 " >#classic</p>
                            <p class="inline mx-1  hover:text-white hover:bg-blue-600 rounded transition ease-in duration-500" >#thebeatles </p>
                            <p class="inline mx-1  hover:text-white hover:bg-green-600 rounded transition ease-in duration-500 " >#Revolver </p>
                            <p class="inline mx-1  hover:text-white hover:bg-yellow-600 rounded transition ease-in duration-500 " >#music</p>
                            <p class="inline mx-1  hover:text-white hover:bg-indigo-600 rounded transition ease-in duration-500 " >#rocknroll</p>
                            <p class="inline mx-1  hover:text-white hover:bg-pink-600 rounded transition ease-in duration-500 " >#england</p>
                            <p class="inline mx-1  hover:text-white hover:bg-danger rounded transition ease-in duration-500 " >#rock</p>
                            <p class="inline mx-1  hover:text-white hover:bg-purple-600 rounded transition ease-in duration-500 " >#old </p>
                            <p class="inline mx-1  hover:text-white hover:bg-yellow-900 rounded transition ease-in duration-500 " >#lennon</p>

                        </div>
                </div>
                <div class="col my-10 text-justify  p-2 mx-3 shadow-2xl ">
                    <img src="images/Sgt Pepper.jpg" alt="" class="w-full h-72 rounded hover:filter hover:brightness-125  ">
                    <div class="flex flex-row " >
                        <div class="flex-1 my-2  font-bold  " >Sgt. Pepper</div>
                        <div class="flex-row-reverse my-3  text-right font-light text-sm inline text-gray-500 text-right my-2 hover:text-gray-800 " >Brad - 18/May/2021 </div>

                    </div>
                    
                        <p class="font-light text-lg " > Released on 1st June, 1967, Sgt. Pepper's Lonely Hearts Club Band, the band's eighth album became the soundtrack to the "summer of love" but its appeal is timeless.</p>
                        
                        <div class="my-2  font-light  " >
                            <p class="inline mx-1  hover:text-white hover:bg-red-600 rounded transition ease-in duration-500 " >#Pepper</p>
                            <p class="inline mx-1  hover:text-white hover:bg-blue-600 rounded transition ease-in duration-500" >#thebeatles </p>
                            <p class="inline mx-1  hover:text-white hover:bg-green-600 rounded transition ease-in duration-500 " >#SPLHCB </p>
                            <p class="inline mx-1  hover:text-white hover:bg-yellow-600 rounded transition ease-in duration-500 " >#music</p>
                            <p class="inline mx-1  hover:text-white hover:bg-danger rounded transition ease-in duration-500 " >#rock</p>


                            <p class="inline mx-1  hover:text-white hover:bg-indigo-600 rounded transition ease-in duration-500 " >#rocknroll</p>
                            <p class="inline mx-1  hover:text-white hover:bg-pink-600 rounded transition ease-in duration-500 " >#unitedkingdom</p>
                            <p class="inline mx-1  hover:text-white hover:bg-danger rounded transition ease-in duration-500 " >#rock</p>
                            <p class="inline mx-1  hover:text-white hover:bg-purple-600 rounded transition ease-in duration-500 " >#old </p>
                            <p class="inline mx-1  hover:text-white hover:bg-yellow-900 rounded transition ease-in duration-500 " >#ringostar</p>
                            <p class="inline mx-1  hover:text-white hover:bg-danger rounded transition ease-in duration-500 " >#applecorps</p>


                        </div>
                </div>
                <div class="col my-10 text-justify xs-ml:col-12 p-2 mx-3 shadow-2xl ">
                    <img src="images/Magical-Mystery-Tour.jpg" alt="" class="w-full h-72 rounded hover:filter hover:brightness-125  ">
                    <div class="flex flex-row " >
                        <div class="flex-1 my-2  font-bold  " >Magycal Mystery</div>
                        <div class="flex-row-reverse my-3  text-right font-light text-sm inline text-gray-500 text-right my-2 hover:text-gray-800 " >Walrus - 25/Aug/2020 </div>

                    </div>
                    
                        <p class="font-light text-lg " > The Beatles devised, wrote and directed a television film called Magical Mystery Tour which was broadcast on BBC Television at Christmas, 1967</p>
                        
                        <div class="my-2  font-light  " >
                            <p class="inline mx-1  hover:text-white hover:bg-red-600 rounded transition ease-in duration-500 " >#McCartney</p>
                            <p class="inline mx-1  hover:text-white hover:bg-blue-600 rounded transition ease-in duration-500" >#thebeatles </p>
                            <p class="inline mx-1  hover:text-white hover:bg-green-600 rounded transition ease-in duration-500 " >#MMT </p>
                            <p class="inline mx-1  hover:text-white hover:bg-yellow-600 rounded transition ease-in duration-500 " >#music</p>
                            <p class="inline mx-1  hover:text-white hover:bg-indigo-600 rounded transition ease-in duration-500 " >#LSD</p>
                            <p class="inline mx-1  hover:text-white hover:bg-pink-600 rounded transition ease-in duration-500 " >#england</p>
                            <p class="inline mx-1  hover:text-white hover:bg-danger rounded transition ease-in duration-500 " >#Psychledelyc</p>
                            <p class="inline mx-1  hover:text-white hover:bg-purple-600 rounded transition ease-in duration-500 " >#old </p>
                            <p class="inline mx-1  hover:text-white hover:bg-yellow-900 rounded transition ease-in duration-500 " >#john</p>
                            <p class="inline mx-1  hover:text-white hover:bg-indigo-600 rounded transition ease-in duration-500 " >#rainbow</p>

                        </div>
                </div>
                <div class="col my-10 text-justify  p-2 mx-3 shadow-2xl ">
                    <img src="images/White.jpg" alt="" class="w-full h-72 rounded hover:filter hover:brightness-125  ">
                    <div class="flex flex-row " >
                        <div class="flex-1 my-2  font-bold  " >The White Album</div>
                        <div class="flex-row-reverse my-3  text-right font-light text-sm inline text-gray-500 text-right my-2 hover:text-gray-800 " >Prudence - 12/Dec/2021 </div>

                    </div>
                    
                        <p class="font-light text-lg " >The White album was released on 22nd November, 1968. A total of 34 new tracks were released in 1968 and 30 were contained on this one double-LP.</p>
                        
                        <div class="my-2  font-light  " >
                            <p class="inline mx-1  hover:text-white hover:bg-red-600 rounded transition ease-in duration-500 " >#whitealbum</p>
                            <p class="inline mx-1  hover:text-white hover:bg-blue-600 rounded transition ease-in duration-500" >#thebeatles </p>
                            <p class="inline mx-1  hover:text-white hover:bg-green-600 rounded transition ease-in duration-500 " >#TWA </p>
                            <p class="inline mx-1  hover:text-white hover:bg-yellow-600 rounded transition ease-in duration-500 " >#music</p>
                            <p class="inline mx-1  hover:text-white hover:bg-indigo-600 rounded transition ease-in duration-500 " >#rocknroll</p>
                            <p class="inline mx-1  hover:text-white hover:bg-pink-600 rounded transition ease-in duration-500 " >#clapton</p>
                            <p class="inline mx-1  hover:text-white hover:bg-danger rounded transition ease-in duration-500 " >#rock</p>
                            <p class="inline mx-1  hover:text-white hover:bg-purple-600 rounded transition ease-in duration-500 " >#conceptual</p>
                            <p class="inline mx-1  hover:text-white hover:bg-yellow-900 rounded transition ease-in duration-500 " >#india</p>

                        </div>
                </div>
                <div class="col my-10 text-justify  p-2 mx-3 shadow-2xl ">
                    <img src="images/Abbey Road.jpg" alt="" class="w-full h-72 rounded hover:filter hover:brightness-125  ">
                    <div class="flex flex-row " >
                        <div class="flex-1 my-2  font-bold  " >Abbey Road</div>
                        <div class="flex-row-reverse my-3  text-right font-light text-sm inline text-gray-500 text-right my-2 hover:text-gray-800 " >Geral - 05/Nov/2020 </div>

                    </div>
                    
                        <p class="font-light text-lg " >First issued on 26th September, 1969 Abbey Road was the final Beatles album to be recorded but not their last to be released. Let It Be,  was finally released in May, 1970.</p>
                        
                        <div class="my-2  font-light  " >
                            <p class="inline mx-1  hover:text-white hover:bg-red-600 rounded transition ease-in duration-500 " >#last</p>
                            <p class="inline mx-1  hover:text-white hover:bg-blue-600 rounded transition ease-in duration-500" >#thebeatles </p>
                            <p class="inline mx-1  hover:text-white hover:bg-green-600 rounded transition ease-in duration-500 " >#AROAD </p>
                            <p class="inline mx-1  hover:text-white hover:bg-yellow-600 rounded transition ease-in duration-500 " >#music</p>
                            <p class="inline mx-1  hover:text-white hover:bg-indigo-600 rounded transition ease-in duration-500 " >#apple</p>
                            <p class="inline mx-1  hover:text-white hover:bg-pink-600 rounded transition ease-in duration-500 " >#england</p>
                            <p class="inline mx-1  hover:text-white hover:bg-danger rounded transition ease-in duration-500 " >#rock</p>
                            <p class="inline mx-1  hover:text-white hover:bg-purple-600 rounded transition ease-in duration-500 " >#iconic  </p>
                            <p class="inline mx-1  hover:text-white hover:bg-yellow-900 rounded transition ease-in duration-500 " >#ringo</p>
                            <p class="inline mx-1  hover:text-white hover:bg-yellow-600 rounded transition ease-in duration-500 " >#harrison</p>
                        </div>
                </div>
                <div class="col my-10 text-justify  p-2 mx-3 shadow-2xl ">
                    <img src="images/Let it be.jpg" alt="" class="w-full h-72 rounded hover:filter hover:brightness-125  ">
                    <div class="flex flex-row " >
                        <div class="flex-1 my-2  font-bold  " >Let It Be</div>
                        <div class="flex-row-reverse my-3  text-right font-light text-sm inline text-gray-500 text-right my-2 hover:text-gray-800 " >George - 18/Oct/2019 </div>

                    </div>
                    
                    <p class="font-light text-lg " >The final Beatles album was first released on 8th May, 1970, just prior to the launch of the cinema film of the same name.Recording sessions for the album had taken place in January</p>
                    
                    <div class="my-2  font-light  " >
                        <p class="inline mx-1  hover:text-white hover:bg-red-600 rounded transition ease-in duration-500 " >#classicrock</p>
                        <p class="inline mx-1  hover:text-white hover:bg-blue-600 rounded transition ease-in duration-500" >#thebeatles </p>
                        <p class="inline mx-1  hover:text-white hover:bg-green-600 rounded transition ease-in duration-500 " >#LIB </p>
                        <p class="inline mx-1  hover:text-white hover:bg-yellow-600 rounded transition ease-in duration-500 " >#music</p>
                        <p class="inline mx-1  hover:text-white hover:bg-indigo-600 rounded transition ease-in duration-500 " >#mccartney</p>
                        <p class="inline mx-1  hover:text-white hover:bg-pink-600 rounded transition ease-in duration-500 " >#england</p>
                        <p class="inline mx-1  hover:text-white hover:bg-danger rounded transition ease-in duration-500 " >#rock</p>
                        <p class="inline mx-1  hover:text-white hover:bg-purple-600 rounded transition ease-in duration-500 " >#1970</p>
                        <p class="inline mx-1  hover:text-white hover:bg-yellow-900 rounded transition ease-in duration-500 " >#letitbe</p>

                    </div>

                    
                </div>

                
                <!-- INICIO REDES SOCIALES -->

                <a href="#" class="hover:scale-110 motion-reduce:transform-none transform btn-flotante durantion-500"><svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="facebook" class="svg-inline--fa h-8 w-8 fa-facebook fa-w-16 transform durantion-500" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z"></path></svg>
                </a>

                <a href="#" class="hover:scale-110 motion-reduce:transform-none transform btn-flotante2 durantion-500" ><svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="instagram" class="svg-inline--fa fa-instagram  h-8 w-8 fa-w-14 durantion-500" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"></path></svg></a>
                <!-- FIN REDES SOCIALES -->
            </div>
            
            <div class="grid grid-cols-2 p-4 my-10 bg-gradient-to-b from-black via-gray-800 to-gray-600 ">
                <!-- INICIO FORMULARIO -->
                    
                <div class="col my-auto mx-auto xs-ml:w-screen ">

                    <div class="font-bold text-white text-center text-3xl" >Write your Article</div>
                    
                    <form   action="data_com.php" method="post" >
                        <div class="grid grid-cols-2 p-3 ">


                        <input type="text" name="titulo" required class="col-span-2 text-gray-500 p-2 font-extralight focus:ring-2 focus:ring-red-500    rounded-md my-2 " placeholder="Titulo" >

                        <input type="date" name="fecha" required class="p-2 text-gray-500 text-gray-400 font-extralight focus:ring-2 focus:ring-blue-600  mr-2 my-2  rounded-md  "  >

                            <select  name="categoria" required class="text-gray-400 font-extralight text-gray-500 p-2 my-2 rounded-md "  >
                                
                                <option value="null">-- Choose a Category --</option>

                                
                                <option value="1" class="font-light p-2">Albums</option>
                                <option value="2" class="font-light p-2">News</option>
                                <option value="3" class="font-light p-2">Songs</option>
                                <option value="4" class="font-light p-2">John</option>
                                <option value="5" class="font-light p-2">Paul</option>
                                <option value="6" class="font-light p-2">George</option>
                                <option value="7" class="font-light p-2">Ringo</option>

                                
                            </select>


                        <textarea type="text" required name="comentario" class="p-2 col-span-2  rounded-md  my-2  " placeholder="Mensaje" ></textarea>
                        <input type="file"  name="archivo" class="p-2 col-span-2  rounded-md  my-2  font-light text-gray-400 bg-white "  >
                        <button id="submit" name="publicar" class="modal-open transform hover:scale-110 motion-reduce:transform-none duration-500 p-2 m-auto bg-gradient-to-r from-black  via-purple-900 to-blue-900 text-white font-bold w-full my-2  rounded-md  text-center col-span-2 " >Publicar</button>
                        </div>

                        
                    </form>
                </div>

                <div class="col m-auto xs-ml:hidden ">
                    <img class="rounded-md " src="/images/be.jpg " alt="">
                </div>

 
            </div>
   
        </div>
        
    </body>
    
</html>
