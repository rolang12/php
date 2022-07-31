<?php
    require_once '../Models/Conexion.php';
    require_once '../Models/User.php';
//    require_once '../autoload.php';

  use Models\User;
    
    // $auto = new Autoload();
    // $auto = $auto->autoload(require '../autoload.php',$dir);



    $canti = new User();
    $action = new User();    
    
        if (isset($_GET)) {

            if (($_GET['action']) == 'show') {

                // Verify if user has articles associated

                $canti->countArt($_GET['iduser']);

                if ($canti->cantidad == 0 ) {

                    $action->crudShow($_GET['iduser']);
                    $c=0;
                    require_once '..\Views\users\ShowProfile.php';
                    
                } else {
                    
                    $action->crudShowAll($_GET['iduser']);
                    $c=1;
                    require_once '..\Views\users\ShowProfile.php';
                }                

            } elseif (($_GET['action']) == 'edit') {


                $action->crudEdit($_GET['iduser']);
                include_once '..\Views\users\editProfile.php';


            } elseif (($_GET['action']) == 'delete') {
               
                $action->crudDelete($_GET['iduser']);
                include_once '..\Views\users\deleProfile.php';

            } elseif (($_GET['action']) == 'create') {
                
                include_once '..\Views\users\regProfile.php';
                
            }

        } else {
            echo "No entre a la condicion";
        }

    
    
    
