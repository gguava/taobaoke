<?php
namespace system;
class Router{
	private $uri;
	public $uri_array;
	function __construct(){
		//print_r($_SERVER);
		//get uri path
		$path = (isset($_SERVER['PATH_INFO'])) ? $_SERVER['PATH_INFO'] : @getenv('PATH_INFO');
		$this->uri=$path;
		//echo $path;
		//$HTTP_HOST=$_SERVER['HTTP_HOST'];
		//$REQUEST_URI=$_SERVER['REQUEST_URI'];		
		$this->split_uri();	
	}
	public function split_uri(){
		$this->uri_array=explode("/",$this->uri);		
	}
}