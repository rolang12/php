<?php
if ($_REQUEST['opcion']=="recordar")
    setcookie("politica",$_REQUEST['politica'],time()+(60*60*24*365),"/");

    
?>