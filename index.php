<!-- <form  action="autoload.php"

method="GET">
<input type="hidden" name="Controllers" value="Controllers" >
</form> -->

<?php

require 'Controllers/HomeController.php';
require 'vendor/autoload.php';
use Controllers\HomeController;

   $view = new HomeController();
   $view->pages();


