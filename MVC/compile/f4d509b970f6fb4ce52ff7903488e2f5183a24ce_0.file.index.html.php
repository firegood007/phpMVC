<?php
/* Smarty version 3.1.30, created on 2017-03-19 15:53:35
  from "D:\wampserver\wamp\www\MVC\template\admin\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58ce9b6f1e1ba4_61858022',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f4d509b970f6fb4ce52ff7903488e2f5183a24ce' => 
    array (
      0 => 'D:\\wampserver\\wamp\\www\\MVC\\template\\admin\\index.html',
      1 => 1488986625,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58ce9b6f1e1ba4_61858022 (Smarty_Internal_Template $_smarty_tpl) {
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>内容管理系统</title>
	<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>
/admin_index.css"/>
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo JS_PATH;?>
/jquery.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript">
		$(document).ready(function(){
			$(".yj").click(function(){
				$(this).find(".ej").toggle(100)
			})
			$("a").click(function(e){
				e.stopPropagation();
			})
		})
	<?php echo '</script'; ?>
>
</head>
<body>
	<div class="header"><h1><?php echo $_smarty_tpl->tpl_vars['aname']->value;?>
,欢迎来到内容管理系统</h1></div>
	<div class="main">
		<div class="left">
			<ul class="menu">
				<li class="yj">
					用户管理
					<ul class="ej">
						<li><a href="index.php?m=admin&f=category&a=adduser" target="right">添加用户</a></li>
						<li><a href="index.php?m=admin&f=category&a=setuser" target="right">管理用户</a></li>
					</ul>
				</li>
			</ul>
			<ul class="menu">
				<li class="yj">
					分类管理
					<ul class="ej">
						<li><a href="index.php?m=admin&f=category&a=cateadd" target="right">添加分类</a></li>
						<li><a href="index.php?m=admin&f=category&a=cateset" target="right">管理分类</a></li>
					</ul>
				</li>
			</ul>
			<ul class="menu">
				<li class="yj">
					内容管理
					<ul class="ej">
						<li><a href="index.php?m=admin&f=category&a=showadd" target="right">添加内容</a></li>
						<li><a href="index.php?m=admin&f=category&a=showgl" target="right">管理内容</a></li>
					</ul>
				</li>
			</ul>
			<ul class="menu">
				<li class="yj">
					推介位管理
					<ul class="ej">
						<li><a href="addtjw.php" target="right">添加推介位</a></li>
						<li><a href="settjw.php" target="right">管理推介位</a></li>
					</ul>
				</li>
			</ul>
			<ul class="menu">
				<li class="yj">
					<a href="index.php?m=admin&f=index&a=logout" style="color:pink;">退出登录</a>
				</li>
			</ul>
		</div>
		<div class="right">
			<iframe src="" width="100%" height="100%" name="right" >
				
			</iframe>
		</div>
	</div>
</body>
</html><?php }
}
