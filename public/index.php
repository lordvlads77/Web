<?php


use Utilities\Utilities;
use Router\Router;

    include("../config/config.php");
    include(APPLICATION.'/utilities/utilities.php');
    include('../app/libs/router.php');
    //Utilities::print("HELLO",true);
    $router = new Router("index",SUBDIR);
    Utilities::print($router,true);

?>