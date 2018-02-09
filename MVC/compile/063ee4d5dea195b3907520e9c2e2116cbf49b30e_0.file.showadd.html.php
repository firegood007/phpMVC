<?php
/* Smarty version 3.1.30, created on 2017-03-29 17:13:07
  from "D:\wampserver\wamp\www\MVC\template\admin\showadd.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58dbcf03ca9f65_29947826',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '063ee4d5dea195b3907520e9c2e2116cbf49b30e' => 
    array (
      0 => 'D:\\wampserver\\wamp\\www\\MVC\\template\\admin\\showadd.html',
      1 => 1488990083,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58dbcf03ca9f65_29947826 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
    <?php echo '<script'; ?>
 type="text/javascript" charset="utf-8" src="<?php echo JS_PATH;?>
/edit/ueditor.config.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" charset="utf-8" src="<?php echo JS_PATH;?>
/edit/ueditor.all.min.js"> <?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" charset="utf-8" src="<?php echo JS_PATH;?>
/edit/lang/zh-cn/zh-cn.js"><?php echo '</script'; ?>
>
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
		<form action="index.php?m=admin&f=category&a=showadd1" method="post">
    <div class="form-group">
        <label for="cid">选择分类</label>
        <select class="form-control" name="cid" id="cid">
            <option value="0">一级分类</option>
            <?php echo $_smarty_tpl->tpl_vars['tree']->value;?>

        </select>
    </div>
    <div class="form-group">
        <label for="stitle">文章标题</label>
        <input type="text" class="form-control" id="stitle" name="stitle" placeholder="标题">
    </div>

    <div class="form-group">
        <label for="scon">文章内容</label>
        <?php echo '<script'; ?>
 id="editor" type="text/plain" style="width:1024px;height:500px;" name="scon"><?php echo '</script'; ?>
>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
</form>
	</body>
	<?php echo '<script'; ?>
 type="text/javascript">
    var ue = UE.getEditor('editor');
    <?php echo '</script'; ?>
>
</html>
<?php }
}
