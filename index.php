<?php


//ini_set('display_errors', 1);
error_reporting(E_ALL);

define( DS, DIRECTORY_SEPARATOR);
define( BASE_PATH, realpath(dirname(__FILE__)) . DS );
define( APP_PATH, BASE_PATH . 'application' . DS );
define( SYS_PATH, BASE_PATH . 'system' . DS );

require_once SYS_PATH . 'Config.php';
require_once SYS_PATH . 'Request.php';
require_once SYS_PATH . 'Bootstrap.php';
require_once SYS_PATH . 'BaseController.php';
require_once SYS_PATH . 'BaseModel.php';
require_once SYS_PATH . 'View.php';
require_once SYS_PATH . 'Registry.php';

try{
	Bootstrap::run(new Request);
}
catch(Exception $e){
	echo $e->getMessage();
}

?>