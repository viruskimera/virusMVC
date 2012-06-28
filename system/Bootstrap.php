<?php

/**
* checking for correct functions 
*/

class bootstrap
{
	public static function run(Request $req){

		$controller = $req->getController();
		//$controller = $req->getController();
		$pathController = APP_PATH . 'yourcontrollers'. DS . $controller . '.php';
		$method = $req->getMethod();
		$params = $req->getParams();

		if(is_readable($pathController)){
			require_once $pathController;
			$controller = new $controller;'';

			if(is_callable(array($controller, $method))){
				$method = $req->getMethod();
			}else{
				$method = 'index';
			}
			if(isset($params)){
				call_user_func_array(array($controller, $method), $params);
			}else{
				call_user_func(array($controller, $method));
			}

		}else{
			throw new Exception('not found');
		}
	}
}


?>