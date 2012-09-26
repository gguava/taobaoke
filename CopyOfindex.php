<?php
define("iBasePath", dirname(__FILE__) );
//echo iBasePath;

set_include_path(iBasePath."/app/lib/");
include_once 'rb.php';
R::setup('mysql:host=localhost;dbname=gdcxkjco_guava',
'gdcxkjco_guava','guavaguava00');
//echo iBasePath."/system/Router.php";
include_once iBasePath."/system/Router.php";
$router=new Router();
// 关于http根目录请看Router.php
// define("iDomain", "http://".$HTTP_HOST.$root."/"); 

//print_r($router->uri_array);

$o_name=$router->uri_array[1];
$o_method=$router->uri_array[2];
// echo $o_method."-";
// echo iBasePath.'/app/ic/'.$o_name.".php";
include_once iBasePath.'/app/ic/'.$o_name.".php";

$o=new $o_name();

$o_argv=null;
if(count($router->uri_array)==4){
	$o_argv=$router->uri_array[3];
	$o->$o_method($o_argv);
}else{
	$o->$o_method();
}


