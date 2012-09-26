<?php
class Router{
	private $uri;
	public $uri_array;
	function __construct(){
		//print_r($_SERVER);
		//get uri path
		//echo @getenv('PATH_INFO');
		$path = (isset($_SERVER['PATH_INFO'])) ? $_SERVER['PATH_INFO'] : $_SERVER['ORIG_PATH_INFO'];
		$this->uri=$path;
		//echo $path."fuckyou";
		//$HTTP_HOST=$_SERVER['HTTP_HOST'];
		//$REQUEST_URI=$_SERVER['REQUEST_URI'];		
		
		$root=str_replace($_SERVER['PATH_INFO'],"", $_SERVER['REQUEST_URI']);
		$HTTP_HOST=$_SERVER['HTTP_HOST'];
		//define("iDomain", "http://www.holdyourdream.com/clothe/");
		define("iDomain", "http://localhost/tbk/");
		
		$this->split_uri();	
	}
	public function split_uri(){
		$this->uri_array=explode("/",$this->uri);		
	}
}