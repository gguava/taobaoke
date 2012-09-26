<?php
class iSmarty{
	var $smarty;
	function __construct(){
		include_once(iBasePath."/app/lib/smarty/Smarty.class.php");
		$this->smarty = new Smarty(); 
		$this->smarty->template_dir=iBasePath."/app/iv";//模板存放目录 
		$this->smarty->compile_dir =iBasePath."/templates_c"; //编译目录 
		$this->smarty->cache_dir=iBasePath."/cache";//设置缓存目录
		$this->smarty->left_delimiter = "<!--{"; //左定界符 
		$this->smarty->right_delimiter = "}-->"; //右定界符
		
		$this->smarty->cache_lifetime = 0; //缓存时间
		$this->smarty->caching = true; //缓存方式
		}
	function assign($name,$value){
		$this->smarty->assign($name,$value);
	}
	function display($name){
		$this->smarty->display($name.'.html');
	}
}