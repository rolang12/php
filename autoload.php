<?php 

require 'config.php';

function autoload($class) {
    
    $url = "Controllers/".str_replace("\\","/",$class.".php") ;
       echo $url;
        if (is_file($url)){
            require_once "$url";
        } else {
            echo "No se encontró la url: $url ";
        }
}

spl_autoload_register('autoload');

// Funcion recibiendo la carpeta padre
// function __autoload($class, $dir){
//     $url = $dir."/".str_replace("\\","/",$class.".php") ;
//     echo $url;
//      if (is_file($url)){
//          require_once "$url";
//      } else {
//          echo "No se encontró la url: $url ";
//      }
//  }

// spl_autoload_register('autoload');

