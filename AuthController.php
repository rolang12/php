<?php 
    namespace Controllers;
    use Models\User;
    require_once '../vendor/autoload.php';
    // require_once '../autoload.php';
    
    if(isset($_GET['out'])) 
    {
        $out = new AuthController();
        $out = $out->logout();
    }
    
    class AuthController{
        
        public function login($Data) 
        {

            $user = new User();
            $user = $user->findByEmail($Data['email']);
            
            if (password_verify($Data['password'], $user->passwor)) {
               
                $_SESSION['session'] = 'active';
                $_SESSION['user'] = $user;
                header('location: ../Views/users/crud.php?page=users-index.php&log=1');
                
            } else {

                header('location: ../Views/login.php'); 

            }

        }

        public function logout()
        {

            session_start();

            session_unset();
            setcookie(session_name(), 0, 1, ini_get("session.cookie_path"));
            session_destroy();
            header("Location: ../index.php?page=login");
        }
        
    }
    
    session_start();
    $sessionInac = !isset($_SESSION['session']) || $_SESSION['session'] != 'active';
    $auth = new AuthController();

    if ($sessionInac && isset($_POST) && isset($_POST['email']) 
        && isset($_POST['password'])){
       
        $auth->login($_POST);
            
    } elseif (!$sessionInac) {
        
        $auth->logout();
    }