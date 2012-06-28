<?php

require_once APP_PATH . 'libs' . DS . 'Smarty' . DS . 'libs' . DS . 'Smarty.class.php';


abstract class baseController extends Smarty
{
	function __construct(){

		parent::__construct();
		$this->setSmarty();
	}

	function setSmarty(){
		
		$this->template_dir = APP_PATH . 'yourviews' . DS;
		$this->cache_dir = APP_PATH . 'tmp' . DS . 'cache' . DS;
		$this->compile_dir = APP_PATH . 'tmp' . DS . 'template' . DS;
	}


	abstract public function index();
}

?>