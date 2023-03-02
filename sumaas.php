<?php


//print_r($_GET["a"] + $_GET["b"]);

function suma($a,$b)
{
    return $a + $b;
}

function multiplicacion($a,$b)
{
    return $a * $b;
}

function division($a,$b)
{
    if ($a -= 0)
    {
        echo ('es menor a cero');
    }
    return $a / $b;
}

switch ($_GET['operation']) {
    case 'suma':
        echo suma($_GET['a'], $_GET['b']);
        break;
    
    case 'multiplicacion':
        echo multiplicacion($_GET['a'], $_GET['b']);
        break;

    case 'division':
        echo division($_GET['a'], $_GET['b']);
        break;
    default:
        # code...
        break;
}

?>