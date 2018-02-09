<?php
/* Smarty version 3.1.30, created on 2017-03-20 01:51:11
  from "D:\wampserver\wamp\www\MVC\template\admin\cateadd.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58cf277f7bd888_65424975',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4a46dca843c57218eb470e32f10e370af5fb052c' => 
    array (
      0 => 'D:\\wampserver\\wamp\\www\\MVC\\template\\admin\\cateadd.html',
      1 => 1488934874,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58cf277f7bd888_65424975 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/bootstrap.min.css">
    <style type="text/css">
	 		body{
	 			background: rgba(0,0,0,.4);
	 			color:white;
	 			font-size: 18px;
	 		}
	 	</style>
</head>
<body>
<form action="index.php?m=admin&f=category&a=cateadd1" method="post">
    <div class="form-group">
        <label for="pid">选择分类</label>
        <select class="form-control" name="pid" id="pid">
            <option value="0">一级分类</option>
            <?php echo $_smarty_tpl->tpl_vars['tree']->value;?>

        </select>
    </div>
    <div class="form-group">
        <label for="cname">分类名称</label>
        <input type="text" class="form-control" id="cname" name="cname" placeholder="标题">
    </div>
    <button type="submit" class="btn btn-default">提交</button>
</form>
</body>
</html><?php }
}
