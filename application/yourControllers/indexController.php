<?php

/**
* just one class
*/

class indexController extends baseController
{
	
	function index()
	{
		$this->assign( array(

			'cssPath' => BASE_URL . 'application' . DS . 'public' . DS . 'css',
			'jsPath' => BASE_URL . 'application' . DS . 'public' . DS . 'js',
			'imgPath' => BASE_URL . 'application' . DS . 'public' . DS . 'imgs',
			'viewsPath' => BASE_URL . 'application' . DS . 'yourviews',
			'ctrlPath' => BASE_URL ));

		$this->display('template.tpl');
	}

	public function left(){

		$this->display('left.tpl');
		
	}

}

?>