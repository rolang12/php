<?php 
    session_start();
    session_unset();
    setcookie(session_name(), 0, 1, ini_get("session.cookie_path"));
    session_destroy();

    header("Location: login.php");


?>