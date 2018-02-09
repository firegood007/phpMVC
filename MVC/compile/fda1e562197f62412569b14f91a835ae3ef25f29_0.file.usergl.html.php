<?php
/* Smarty version 3.1.30, created on 2017-04-02 14:15:15
  from "D:\wampserver\wamp\www\MVC\template\admin\usergl.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58e0eb53432979_68506438',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fda1e562197f62412569b14f91a835ae3ef25f29' => 
    array (
      0 => 'D:\\wampserver\\wamp\\www\\MVC\\template\\admin\\usergl.html',
      1 => 1491135312,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58e0eb53432979_68506438 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>管理用户</title>
		<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>
/bootstrap.min.css"/>
		
			<style type="text/css">
	 		body{
	 			background: rgba(0,0,0,.4);
	 			color:white;
	 			font-size: 18px;
	 		}
	 	</style>
	</head>
	<body>
		<table border="" cellspacing="0" cellpadding="0" class="table">
			<tr>
				<th>id</th>
				<th>username</th>
				<th>userpassword</th>
				<th>姓名</th>
				<th>操作</th>
			</tr>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
			<tr>
				<td><?php echo $_smarty_tpl->tpl_vars['v']->value["id"];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['v']->value["username"];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['v']->value["userpassword"];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['v']->value["xingming"];?>
</td>
				<td><a href="index.php?m=admin&f=category&a=setuser1&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">编辑</a> &nbsp;<a href="index.php?m=admin&f=category&a=deluser&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">删除</a></td>
			</tr>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

		</table>
	</body>
</html>
<?php }
}
