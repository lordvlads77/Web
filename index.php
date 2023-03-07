<?php
    if(isset($_GET["file"]) and trim($_GET["file"]) !=""){
        $section = $_GET["file"];
    }else{
        $section = "index";
    }
    //echo '<pre>'.print_r($_SERVER,true).'</pre>';
    $dir = $_SERVER["DOCUMENT_ROOT"]."/practica1/content/";
    $file = $dir."$section.php";
    if(file_exists($file) and is_file($file)){
        include($dir.'general/top.php');
        include($file);
        include($dir.'general/header.php');
        include($dir.'general/bottom.php');
    }else{
        echo '404 archivo no encontrado';
    }


?>