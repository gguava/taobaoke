<?php /* Smarty version Smarty-3.1.11, created on 2012-09-26 04:45:01
         compiled from "/Library/WebServer/Documents/tbk/app/iv/fushi2012.html" */ ?>
<?php /*%%SmartyHeaderCode:707587793506217cdbb2442-79913197%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5544dc9381eb36b4c76093fe2a851cff232f0bef' => 
    array (
      0 => '/Library/WebServer/Documents/tbk/app/iv/fushi2012.html',
      1 => 1348605319,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '707587793506217cdbb2442-79913197',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'baseurl' => 0,
    'itemsArray' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_506217cdc8d137_25929363',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_506217cdc8d137_25929363')) {function content_506217cdc8d137_25929363($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>

<link href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
assets/yaml/core/base.css" rel="stylesheet"
	type="text/css" />
<link href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
assets/yaml/screen/typography.css"
	rel="stylesheet" type="text/css" />
<link href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
assets/yaml/forms/gray-theme.css"
	rel="stylesheet" type="text/css" />
<!--[if lte IE 7]>
            <link href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>

assets/yaml/core/iehacks.css" rel="stylesheet" type="text/css" />
<![endif]-->
<!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js">
            </script>
        <![endif]-->
<link href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
assets/style.css" rel="stylesheet"
	type="text/css" />


</head>
<body>
	搜罗2012秋季流行服饰，根据国际流行搭配，搜刮美丽说蘑菇街女装男装最受欢迎款式，淘宝最热买的秋季服装，尽在HYD网站<br>
	<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['itemsArray']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
		
			<a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
items/show_itmes/<?php echo $_smarty_tpl->tpl_vars['item']->value["id"];?>
.html" target="_blank">
				
				<?php echo $_smarty_tpl->tpl_vars['item']->value["k"];?>

				
			</a>
		

	<?php } ?>
	
	<script language="javascript" type="text/javascript" src="http://js.users.51.la/14976182.js"></script>
<noscript><a href="http://www.51.la/?14976182" target="_blank"><img alt="我要啦免费统计" src="http://img.users.51.la/14976182.asp" style="border:none" /></a></noscript>
</body>
</html><?php }} ?>