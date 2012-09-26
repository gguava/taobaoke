<?php /* Smarty version Smarty-3.1.11, created on 2012-09-26 18:15:06
         compiled from "/Library/WebServer/Documents/tbk/app/iv/items.html" */ ?>
<?php /*%%SmartyHeaderCode:17899162035061f2e2d23f57-69464791%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1e1cd7c57fc2d8ef3cf17b91e3cecf6f8bd79ed7' => 
    array (
      0 => '/Library/WebServer/Documents/tbk/app/iv/items.html',
      1 => 1348608733,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17899162035061f2e2d23f57-69464791',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5061f2e2d6d805_71771438',
  'variables' => 
  array (
    'title' => 0,
    'baseurl' => 0,
    'itemsArray' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5061f2e2d6d805_71771438')) {function content_5061f2e2d6d805_71771438($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
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
<script type="text/javascript">
function goto($o){
	window.open("http://s.click.taobao.com/t?e="+$o);
	/* window.location.href="http://s.click.taobao.com/t?e="+$o; */
	/* alert("http://s.click.taobao.com/t?e="+$o); */
}
</script>

</head>
<body style="background-image: url(http://s.mogujie.cn/img/bg-v3.png);">
	<script type="text/javascript"> 
alimama_pid="mm_16491655_3345898_10878295"; 
alimama_width=950; 
alimama_height=90; 
</script> 
<script src="http://a.alimama.cn/inf.js" type="text/javascript"> 
</script>
<br>
<div>
	<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['itemsArray']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
		<div style="float:left;width:280px;padding:20px;display: block; height:380px;">
			<a onclick="goto('<?php echo $_smarty_tpl->tpl_vars['item']->value["click_url"];?>
')" target="_blank">
				<img width=260px src='<?php echo $_smarty_tpl->tpl_vars['item']->value["pic_url"];?>
' >
				<br>
				<img src=http://www.mogujie.com/img/taobao.gif width=16px height=16px><?php echo $_smarty_tpl->tpl_vars['item']->value["title"];?>

				<br>				
			</a>
			<span style="color:white;background-color: #FF6600;font-size:16px;padding:0 3px">￥<?php echo $_smarty_tpl->tpl_vars['item']->value["price"];?>
 去淘宝购买</span>
				
		</div>

	<?php } ?>
	</div>
	<div style="clear:both;">
	<script language="javascript" type="text/javascript" src="http://js.users.51.la/14976182.js"></script>
<noscript><a href="http://www.51.la/?14976182" target="_blank"><img alt="我要啦免费统计" src="http://img.users.51.la/14976182.asp" style="border:none" /></a></noscript>
</div>
</body>
</html><?php }} ?>