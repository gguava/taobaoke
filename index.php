<?php
define("iBasePath", dirname(__FILE__) );
//echo iBasePath;

set_include_path(iBasePath."/app/lib/");
include_once 'rb.php';
R::setup('mysql:host=127.0.0.1;dbname=taobaoke',
'root','');

include_once iBasePath."/system/Router.php";
$router=new Router();
// 关于http根目录请看Router.php
// define("iDomain", "http://".$HTTP_HOST.$root."/"); 

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


