<?php
/* Smarty version 3.1.30, created on 2017-04-20 03:19:35
  from "D:\wampserver\wamp\www\MVC\template\index\showart.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58f80ca73ca4e6_29396257',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '03900697438ece24cefa0b72ae28d9c3275394c0' => 
    array (
      0 => 'D:\\wampserver\\wamp\\www\\MVC\\template\\index\\showart.html',
      1 => 1492651044,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index/header.html' => 1,
    'file:index/foot.html' => 1,
  ),
),false)) {
function content_58f80ca73ca4e6_29396257 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:index/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

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
	<form action="index.php?m=index&f=art&a=showart1" method="post" class="form-group">
<div class="container">
<div class="row center-block">
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
 id="editor" type="text/plain" style="width:1140px;height:500px;" name="scon"><?php echo '</script'; ?>
>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
</form>
</div>
</div>

	<?php echo '<script'; ?>
 type="text/javascript">
    var ue = UE.getEditor('editor');
    <?php echo '</script'; ?>
>
 <?php $_smarty_tpl->_subTemplateRender("file:index/foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
       <?php }
}
