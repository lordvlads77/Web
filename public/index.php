<?php


//use Utilities\Utilities;
//use Router\Router;

    include("../config/config.php");
    //include(APPLICATION.'/utilities/utilities.php');
    //include('../app/libs/router.php');
    include("../config/autoload.php");
    //Utilities::print("HELLO",true);
    $router = new \router\Router("index",SUBDIR);
    //\Utilities\Utilities::print($router->getController(),true);
    $load = \System\load::getInstance();
    $controller = $load->controller($router->getController());
    $notfound = true;
    if (is_object($controller))
    {
        if ($router->getMethod() == "")
        {
            $section = "main";
        }
        else{
            $section = $router->getMethod();
        }
        if (method_exists($controller,$section))
        {
            $notfound = false;
            $params = $router->getParams();
            call_user_func_array(array($controller,$section), $params);
        }
    }

    if ($notfound)
    {
        echo '404';
    }

?>