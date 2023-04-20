<?php

class Index extends System\Core
{
    public function __construct()
    {
        parent::__construct();
    }

    public function main()
    {
        $pdo = new \Db\ConexionBD();
        $data = [
            "test" => "hola"
        ];
        $this->load->view("general/top");
        $this->load->view("general/header");
        $this->load->view("index",$data,);
        $this->load->view("general/bottom");
    }

    public function hola()
    {
        print('helo');
    }
}

?>