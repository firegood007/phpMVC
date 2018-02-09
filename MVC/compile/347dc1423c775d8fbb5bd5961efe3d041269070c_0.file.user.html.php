<?php
/* Smarty version 3.1.30, created on 2017-03-29 17:12:26
  from "D:\wampserver\wamp\www\MVC\template\admin\user.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58dbceda4d8f68_62829232',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '347dc1423c775d8fbb5bd5961efe3d041269070c' => 
    array (
      0 => 'D:\\wampserver\\wamp\\www\\MVC\\template\\admin\\user.html',
      1 => 1488870994,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58dbceda4d8f68_62829232 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>内容管理系统</title>
		<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>
/bootstrap.min.css"/>
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
	 	<style type="text/css">
	 		label{
	 			color: orangered;
	 		}
	 		body{
	 			background: rgba(0,0,0,.4);
	 			color:white;
	 			font-size: 18px;
	 		}
	 	</style>
	</head>
	<body>
		<form action="index.php?m=admin&f=category&a=adduser1" id="form" class=".form-inline" method="post"/>
			用户名:<input type="text" name="aname" value="" class="form-control"/></br>
			密码:<input type="text" name="apass" id="apass" value="" class="form-control"/></br>
			再次输入密码:<input type="text" name="apass1" id="" value="" class="form-control"/></br>
			<input type="submit" name="" id="" value="提交" style="color: #000000;" class="btn btn-default"/></br>
		</form>
	</body>
</html>
<?php }
}
