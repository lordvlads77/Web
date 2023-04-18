<?php
/*if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start();*/

/**
 * Auto Loader
 *
 */
function autoloadbtsys($class_name){
    $data = str_replace("_", "/", strtolower($class_name)); 
    $file = APPLICATION."/libs/".$data.".php";
    if(is_file($file) && file_exists($file)){
        require_once($file);
    }else{
        $file = APPLICATION."/".$data.".php";
        if(is_file($file) && file_exists($file)){
            require_once($file);
        }else{
            return;
        }
    }
}

function autoloadbtsysNameSpaces($class_name){
    $data = strtolower($class_name); 
    $data = str_replace('\\', '/', $data);
    $base_dir = APPLICATION . '/';
    $file = $base_dir . $data . '.php';
    $loadFile = false;
    if(is_file($file) && file_exists($file)){
        $loadFile = true;
    }else{
        $file = APPLICATION."/libs/".$data.".php";
        if(is_file($file) && file_exists($file)){
            $loadFile = true;
        }
    }

    if($loadFile == true){
        require_once($file);
    }else{
        return;
    }
}

if (version_compare(PHP_VERSION, '5.1.2', '>=')) {
    //SPL autoloading was introduced in PHP 5.1.2
    if (version_compare(PHP_VERSION, '5.3.0', '>=')) {
        spl_autoload_register('autoloadbtsys', true, false);
        spl_autoload_register('autoloadbtsysNameSpaces', true, false);
    } else {
        spl_autoload_register('autoloadbtsys');
        spl_autoload_register('autoloadbtsysNameSpaces');
    }
} 

/* Manejo de Errores a Excepciones */
function exception_error_handler($errno, $errstr, $errfile, $errline ) {
    throw new ErrorException($errstr, 0, $errno, $errfile, $errline);
}

set_error_handler( "exception_error_handler");



?>