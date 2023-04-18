<?php
namespace System;
Use \System\Load;
class Core
{
    private static $instance;
    public $load;

    public function __construct()
	{
		$this->load = Load::getInstance();
	}


    public static function getInstance(){
		try {
			if (!isset(self::$instance)) {
				$miclase = __CLASS__;
				self::$instance = new $miclase();
			}
			return self::$instance;
			
		} catch (Exception $ex) {
			//crearLog($ex,ERROR_NO,DEV_ENV);
		}
	}
}
?>
