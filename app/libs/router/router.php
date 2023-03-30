<?php
namespace Router;

class Router 
{
    private $route;
    private $default;
    private $ignore;
    private $controller;
    private $method;
    private $params = [];

    public function __construct($default = "index",$ignore = "")
    {
        $this->default = $default;
        $this->ignore = $ignore;
        $this->route = $_SERVER["REQUEST_URI"]; 
        $this->mapRoute();   
    }   

    public function mapRoute()
    {
        $controller = $method = "";
        $params = [];
        $this->route = str_replace($this->ignore,"",$this->route);
        if(substr($this->route,0,1) == "/"){
          $this->route = substr($this->route,1,strlen($this->route)-1);
        }
        $splitRoute = explode("/",$this->route);
        if(!empty($splitRoute)){
            $i = 0;
            $params = [];
            foreach ($splitRoute as $key => $fragment) {
                if($i == 0 and $fragment != ""){
                    $controller = $fragment;
                }elseif($i == 1 and $fragment != ""){
                    $method = $fragment;
                }else{
                    $params[] = $fragment;
                }
                $i++;
            }
            $this->setData($controller,$method,$params);
        }
    }

    public function setData($controller,$method,$params)
    {
        if($controller == ""){
            $this->controller = $this->default;
        }else {
            $this->controller = $controller;
            
        }
        $this->method = $method;
        $this->params = $params;
        
    }
    public function getRoute()
    {
        return $this->route;
    }
    public function getController()
    {
        return $this->controller;
    }
    public function getMethod()
    {
        return $this->method;
    }
    public function getParams()
    {
        return $this->params;
    }
}
