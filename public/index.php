<?php

namespace ABI;
use \ABI\controller\Router;



require '../Autoloader.php';


Autoloader::register();

// le routeur 

if(isset($_GET['page']))
{
    $page=$_GET['page'];
}
else
{
    $page='home';
}

   $request= new Router($page);
   echo $request->route();

?>