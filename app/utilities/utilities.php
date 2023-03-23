<?php 
namespace Utilities;
class Utilities
{
    function __construct()
    {
        
    }

    public static function print($data,$die = false)
    {
        echo '<pre>'.print_r($data, true).'</pre>';
        if($die === true)
        {
            die();
        }
    }
}