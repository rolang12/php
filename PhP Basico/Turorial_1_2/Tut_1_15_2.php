<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    $pizzas = array (($_REQUEST['jamon'] and $_REQUEST['cant_jamon']),
        ($_REQUEST['napolitana'] and $_REQUEST['cant_napolitana']),($_REQUEST['mexicana'] 
        and $_REQUEST['cant_mexicana']),
    );

    $datos = array (
        $_REQUEST['nombre'],$_REQUEST['direccion'],$_REQUEST['confirmar']
    );
   
    if ($pizzas = 1 && $datos = 1){

        echo "Nombre: ",$_REQUEST['nombre'],"<BR> <BR> Dirección: ",$_REQUEST['direccion'],"<BR> <BR>";

        if (isset($_REQUEST['jamon']) && ($_REQUEST['cant_jamon'])){
            echo $jam = "Jamon y queso  -  Cantidad: ";
            echo $jamc=$_REQUEST['cant_jamon'],"<BR> <BR>"; 
        }else{
            $jam = NULL;
            $jamc = NULL;
        }
        if (isset($_REQUEST['napolitana']) && ($_REQUEST['cant_napolitana'])){
            echo $nap= "napolitana  -  Cantidad: "; 
            echo $napc=$_REQUEST['cant_napolitana'],"<BR> <BR>"; 
        }else{
            $nap = NULL;
            $napc= NULL;
        }
        if (isset($_REQUEST['mexicana']) && ($_REQUEST['cant_mexicana'])){
            echo $mex = "mexicana -  Cantidad: "; 
            echo $mexc=$_REQUEST['cant_mexicana'],"<BR> <BR>"; 
        }else{
            $mex = NULL;
            $mexc= NULL;
        }

    }
    
    $ar= fopen("pedidos.txt","a") or die("problemas en la creacion");
    fputs($ar,$_REQUEST['nombre']);
    fputs($ar,"\n");
    fputs($ar,$_REQUEST['direccion']);
    fputs($ar,"\n");
    fputs($ar,"\n");
    fputs($ar,"---------------------------------------------------");
    fputs($ar,"\n");
    
    if ($jam != NULL && $jamc !=  NULL ){
        fputs($ar,$jam);
        fputs($ar,$jamc);
        fputs($ar,"\n");
        fputs($ar,"---------------------------------------------------");
        fputs($ar,"\n");
    }
    
    
    
    if ($nap != NULL && $napc != NULL ){
        fputs($ar,$nap);
        fputs($ar,$napc);
        fputs($ar,"\n");
        fputs($ar,"---------------------------------------------------");
        fputs($ar,"\n");
    }
    
    if ($mex != NULL && $mexc !=NULL ){
        fputs($ar,$mex);
        fputs($ar,$mexc);
    }
    fputs($ar,"\n");
    fclose($ar);
    echo "Los datos se cargaron correctamente. ";


    ?>
</body>
</html>