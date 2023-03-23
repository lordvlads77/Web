<?php
namespace Router;

class Router
{
    private $route;
    private $default;
    private $ignore;

    public function __construct($default = "index",$ignore = "")
    {
        $this->default = $default;
        $this->ignore = $ignore;
        $this->route = $_SERVER["REQUEST_URI"];
        $this->mapRoute();
    }

    public function mapRoute()
    {
        $this->route = str_replace($this->ignore,"",$this->route);
        $splitRoute = explode("/",$this->route);
        if(!empty($splitRoute)){
            $i = 0;
            $params = [];
            foreach ($splitRoute as $key => $fragment) {
                if($i == 0 & $fragment != ""){
                    $controller = $fragment;
                }elseif($i == 1 & $fragment != ""){
                    $method = $fragment;
                }
                else{
                    $params[] = $fragment;
                }
                $i++;
            }
        }
    }

    public function getRoute()
    {
        return $this->route;
    }


}
