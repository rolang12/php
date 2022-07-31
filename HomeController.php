<?php
    namespace Controllers\HomeController;

    // require_once 'autoload.php';
    use Models\User;
    use Models\Conexion;

    class HomeController
    {

        public function pages() 
        {

            $page = isset($_GET['page']) ? $_GET['page'] : 'login';
            $page = explode('-',$page);
            $pageformat = NULL;
            
            for ($i=0; $i < count($page); $i++) {
                $pageformat .= ($i == 0) ? $page[0] : ucfirst($page[$i]);
            }

            $this->__call($pageformat);
        }

        public function login() 
        {

            $conex = new Conexion();
            include '.\Views\login.php';

        }
        
        public function usersIndex() 
        {

            $users = new User();
            $Datausers = $users->listing();
           
            include_once '.\Views\users\crud.php?a=1';  
        }  
        
        public function __call($name, $arguments = []) 
        {

            if (method_exists($this,$name)) {
                return $this->$name(...$arguments);
            } else {
                echo "La pagina a la que intentas acceder, no existe";
            }

        }



    }