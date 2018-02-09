<?php
/* Smarty version 3.1.30, created on 2017-03-23 03:51:20
  from "D:\wampserver\wamp\www\MVC\template\admin\message.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58d338282111c7_54133914',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c21afa4de409557ca1e9190f13c790f48d2f81e9' => 
    array (
      0 => 'D:\\wampserver\\wamp\\www\\MVC\\template\\admin\\message.html',
      1 => 1490237461,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58d338282111c7_54133914 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>提示信息</title>
		<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo JS_PATH;?>
/jquery.min.js"><?php echo '</script'; ?>
>
		<style type="text/css">
		html,body,h3,h2,h4{
				margin: 0;
				padding: 0;
				
			}
			.message{
				width: 400px;
				height: 300px;
				position: fixed;
				top:0;
				left: 0;
				right: 0;
				bottom:0;
				margin: auto;
				border: 2px solid #C8C7CC;
				text-align: center;
				border-radius:25px;
				background:#EFEFF4;
			}
			h3{
				height:40px;
				text-align: center;
				line-height: 40px;
				background: orange;
				margin-bottom: 80px;
				border-radius:20px;
				color: white;
				box-shadow:0px 0px 20px gainsboro inset;
			}
			.m{
				width: 100%;
				height: 40px;
			}
			.m span {
				color: red;
			}
		</style>
	</head>
	<?php echo '<script'; ?>
 type="text/javascript">
		$(function(){
			var t=setInterval(mm,1000)
			var url=$("a").attr("href")
			var num=3
			function mm(){
					num--
					$(".m span").html(num)
					if(num==0){
					clearInterval(t)
					location.href=url	
					}
			}
		})
	<?php echo '</script'; ?>
>
	<body>
		<div class="message">
			<h3>提示信息</h3>
			<?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</br>
			<div class="m"><span>3</span>秒后返回登录页.</div>
			<h4>如果没有跳转，请<a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
">点击</a>此处</h4>
		</div>
	</body>
</html>
<?php }
}
