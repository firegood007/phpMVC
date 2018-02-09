<?php
/* Smarty version 3.1.30, created on 2017-03-20 01:44:36
  from "D:\wampserver\wamp\www\MVC\template\admin\login.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58cf25f48509c5_14828447',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ba411514b823babd1288ce21ce8aadbc42c14d9d' => 
    array (
      0 => 'D:\\wampserver\\wamp\\www\\MVC\\template\\admin\\login.html',
      1 => 1488854450,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58cf25f48509c5_14828447 (Smarty_Internal_Template $_smarty_tpl) {
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>登录</title>
	 <link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>
/reg_login.css"/>
	 <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo JS_PATH;?>
/jquery.min.js"><?php echo '</script'; ?>
>
	</head>
	<body>
		<div class="login">
			<h3>登录后台管理系统</h3>
			<form action="index.php?m=admin&f=index&a=check" name="login" method="post" id="form">
				用户名：<input type="text" name="aname" placeholder="请输入用户名"/><span class="usert"></span></br>
				密&nbsp;&nbsp;&nbsp;&nbsp;码：<input type="text" name="apass" placeholder="请输入密码"/><span class="passwordt"></span></br>
				<div class="yzm">
				请输入验证码:<input type="text" name="code" id="imgcode" value="" />
				<img src="index.php?m=admin&f=index&a=code" alt="" onclick='this.src="index.php?m=admin&f=index&a=code&"+Math.random()'/><span class="imgcodet"></span></br></div>
				<input type="submit" name="submit" value="登录" class="btn"/></br>
			</form>
		</div>
	</body>
</html>
<?php }
}
