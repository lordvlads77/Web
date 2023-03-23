<?php
    define("SUBDIR", "/practica1");
    define("URL", 'http://'.$_SERVER["SERVER_NAME"].SUBDIR);

    define('DOCUMENT_ROOT', $_SERVER["DOCUMENT_ROOT"].SUBDIR);
    define('APPLICATION', DOCUMENT_ROOT.'/app');


?>