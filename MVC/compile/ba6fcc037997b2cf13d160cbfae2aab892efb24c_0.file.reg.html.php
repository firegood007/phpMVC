<?php
/* Smarty version 3.1.30, created on 2017-03-18 02:39:01
  from "D:\wampserver\wamp\www\MVC\template\index\reg.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58cc8fb5c7d320_25035993',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ba6fcc037997b2cf13d160cbfae2aab892efb24c' => 
    array (
      0 => 'D:\\wampserver\\wamp\\www\\MVC\\template\\index\\reg.html',
      1 => 1488854124,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58cc8fb5c7d320_25035993 (Smarty_Internal_Template $_smarty_tpl) {
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>注册用户</title>
	 <link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>
/reg_login.css"/>
	 <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo JS_PATH;?>
/jquery.min.js"><?php echo '</script'; ?>
>
	 <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo JS_PATH;?>
/jquery.validate.js"><?php echo '</script'; ?>
>
	 <?php echo '<script'; ?>
>
	 	$(function(){
				$("#form").validate({
				rules: {
					aname: {
						required: true,
						minlength:5,
						remote:{
							url:"index.php?m=index&f=index&a=checkname",
							type:"post",
							dataType:"json",
							data:{
								 aname:function(){
								 return $("input[name=aname]").val()
								}
							}
						}
					},
					apass: {
						required: true,
						minlength: 5,
					},
					apass1: {
						required: true,
						minlength: 5,
						equalTo:"#apass"
					},
				},
				messages: {
					aname: {
						required: "请输入用户名",
						minlength: "长度必须大于五位",
						remote:"账户名已存在"
					},
					apass: {
						required: "请输入密码",
						minlength: "长度必须大于五位"
					},
					apass1: {
						required: "请再次输入密码",
						minlength: "长度必须大于五位",
						equalTo:"密码输入不一致"
					},
					
				}
			});
		})
	 <?php echo '</script'; ?>
>
	</head>
	<body>
		<div class="login">
			<h3>新用户注册</h3>
			<form action="index.php?m=index&f=index&a=newreg" name="login" method="post" id="form">
				用户名：<input type="text" name="aname" placeholder="请输入用户名"/>
				<p><label id="aname-error" class="error" for="aname"></label></p>
				密&nbsp;&nbsp;&nbsp;&nbsp;码：<input type="text" name="apass" placeholder="请输入密码" id="apass"/>
				<p><label id="apass-error" class="error" for="apass"></label></p>
				再次输入密码：<input type="text" name="apass1" placeholder="请输入密码"/>
				<p><label id="apass1-error" class="error" for="apass1"></label></p>
				<div class="yzm">
				请输入验证码:<input type="text" name="code" id="imgcode" value="" />
				<img src="index.php?m=index&f=index&a=code" alt="" onclick='this.src="index.php?m=index&f=index&a=code&"+Math.random()'/><span class="imgcodet"></span></br></div>
				<input type="submit" name="submit" value="注册" class="btn"/></br>
			</form>
			<a href="index.php?m=index&f=index&a=login" style="display: block;margin-top: 4px;">返回首页</a>
		</div>
	</body>
</html>
<?php }
}
