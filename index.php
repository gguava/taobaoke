<?php
define("iBasePath", dirname(__FILE__) );
//echo iBasePath;
include_once iBasePath."/system/Router.php";
$router=new system\Router();
//print_r($router->uri_array);

$o_name=$router->uri_array[1];
$o_method=$router->uri_array[2];

include_once 'app/ic/'.$o_name.".php";
$o=new $o_name();

$o_argv=null;
if(count($router->uri_array)==4){
	$o_argv=$router->uri_array[3];
	$o->$o_method($o_argv);
}else{
	$o->$o_method();
}


