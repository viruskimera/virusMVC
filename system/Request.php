<?php

class Request{

	private $_controller;
	private $_method;
	private $_params;

	public function __construct(){

		if(isset($_GET['url'])){
			$url = filter_input(INPUT_GET, 'url', FILTER_SANITIZE_URL );
			$url = explode(DS , $url );
			$url = array_filter($url);

			$this->_controller = strtolower(array_shift( $url ));
			$this->_method = strtolower(array_shift( $url ));
			$this->_params = $url;
		}

		

		if(!$this->_controller){
			$this->_controller = DEFAULT_CONTROLLER;
		}
		if(!$this->_method){
			$this->_method = 'index';
		}
		if(!isset($this->_params)){
			$this->_params = array();
		}
	}

	public function getController(){
		return $this->_controller;
	}

	public function getMethod(){
		return $this->_method;
	}

	public function getParams(){
		return $this->_params;
	}

}

?>