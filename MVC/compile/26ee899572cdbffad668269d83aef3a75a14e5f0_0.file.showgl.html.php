<?php
/* Smarty version 3.1.30, created on 2017-03-20 01:50:31
  from "D:\wampserver\wamp\www\MVC\template\admin\showgl.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58cf27573274b3_45904030',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '26ee899572cdbffad668269d83aef3a75a14e5f0' => 
    array (
      0 => 'D:\\wampserver\\wamp\\www\\MVC\\template\\admin\\showgl.html',
      1 => 1489971027,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58cf27573274b3_45904030 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>管理用户发布内容</title>
		<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>
/bootstrap.min.css"/>
		
			<style type="text/css">
	 		body{
	 			background: rgba(0,0,0,.4);
	 			color:white;
	 			font-size: 18px;
	 		}
	 		th,td{
	 			text-align: center;
	 			font-size: 13px;
	 		}
	 	</style>
	</head>
	<body>
		<table border="" cellspacing="0" cellpadding="0" class="table">
			<tr>
				<th>sid</th>
				<th>scate(所属分类)</th>
				<th>stitle(标题)</th>
				<th>scon(内容)</th>
				<th>sname(作者)</th>
				<th>hits(点击数)</th>
				<th>good(点赞数)</th>
				<th>stime(发布时间)</th>
				<th>statu(发布状态)</th>
				<th>uid(用户ID)</th>
			</tr>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
			<tr>
				<td><?php echo $_smarty_tpl->tpl_vars['v']->value["sid"];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['v']->value["scate"];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['v']->value["stitle"];?>
</td>
				<td><a href="index.php?m=admin&f=category&a=info&sid=<?php echo $_smarty_tpl->tpl_vars['v']->value['sid'];?>
">点击查看</a></td>
				<td><?php echo $_smarty_tpl->tpl_vars['v']->value["sname"];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['v']->value["hits"];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['v']->value["good"];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['v']->value["stime"];?>
</td>
				<td><?php if ($_smarty_tpl->tpl_vars['v']->value["statu"] == 0) {?>
                未审核
                <?php } elseif ($_smarty_tpl->tpl_vars['v']->value["statu"] == 1) {?>
                审核中
                <?php } elseif ($_smarty_tpl->tpl_vars['v']->value["statu"] == 2) {?>
                审核未通过
                <?php } elseif ($_smarty_tpl->tpl_vars['v']->value["statu"] == 3) {?>
                审核通过
                <?php }?>
            </td>
				<td><?php echo $_smarty_tpl->tpl_vars['v']->value["uid"];?>
</td>
				<td> &nbsp;<a href="index.php?m=admin&f=category&a=showdel&sid=<?php echo $_smarty_tpl->tpl_vars['v']->value['sid'];?>
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
