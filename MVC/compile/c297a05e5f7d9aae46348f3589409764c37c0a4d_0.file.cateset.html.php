<?php
/* Smarty version 3.1.30, created on 2017-03-19 15:53:43
  from "D:\wampserver\wamp\www\MVC\template\admin\cateset.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58ce9b77c98b21_10655190',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c297a05e5f7d9aae46348f3589409764c37c0a4d' => 
    array (
      0 => 'D:\\wampserver\\wamp\\www\\MVC\\template\\admin\\cateset.html',
      1 => 1488943957,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58ce9b77c98b21_10655190 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
		<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>
/bootstrap.min.css"/>
		<style type="text/css">
	 		body{
	 			background: rgba(0,0,0,.4);
	 			color:white;
	 			font-size: 18px;
	 		}
	 		th{
	 			text-align: center;
	 		}
	 	</style>
	</head>
	<body>
		<table border="" cellspacing="" cellpadding="" class="table text-center">
			<tr>
				<th>cid</th>
				<th>cname</th>
				<th>pid</th>
				<th>操作</th>
			</tr>
			<?php echo $_smarty_tpl->tpl_vars['table']->value;?>

		</table>	
	</body>
</html>
<?php }
}
