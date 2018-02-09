<?php
/* Smarty version 3.1.30, created on 2017-04-27 17:57:14
  from "D:\wampserver\wamp\www\MVC\template\index\bjzl.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_590214da18bf70_67188691',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '80e6bebf322f89024dba56f508ba2e49c64d19f6' => 
    array (
      0 => 'D:\\wampserver\\wamp\\www\\MVC\\template\\index\\bjzl.html',
      1 => 1493308631,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index/header.html' => 1,
    'file:index/foot.html' => 1,
  ),
),false)) {
function content_590214da18bf70_67188691 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:index/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo JS_PATH;?>
/upload.js"><?php echo '</script'; ?>
>
<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>
/bjzl.css"/>
<div class="container modal-header kk">
    <div class="row bg">
        <div class="col-sm-8 main-left">
            <!--头像部分-->
            <h3 class="h3 text-center">个人资料</h3>
            <div class="container-fluid">
                 <div class="row">
                 	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result1']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                    <form action="index.php?m=index&f=grzx&a=zlsc&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" class="form-group" method="post">                   	
                    	姓名：<input type="text" name="name" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['xingming'];?>
"/>
                    	性别：
                    	<label for="in">男：<input type="radio" name='sex' value='0' id="in" <?php if ($_smarty_tpl->tpl_vars['v']->value['sex'] == "0") {?>checked<?php }?>/></label>
                    	<label for="in1">女：<input type="radio" name='sex' value='1' id="in1" <?php if ($_smarty_tpl->tpl_vars['v']->value['sex'] == "1") {?>checked<?php }?>/></label></br>
                    	邮箱:<input type="email" name="email" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['email'];?>
"/>
                                                           个人简介:<textarea name="grjj" rows="" cols="" value=""><?php echo $_smarty_tpl->tpl_vars['v']->value['grjj'];?>
</textarea>                          
                        <input type="submit" value="保存"/>
                        <input type="reset" name="" id="" value="重置"/>
                    </form> 
                 </div>
            </div>

            <div class="line"></div>
    </div> 
    <div class="box" style="overflow: hidden;margin-top:100px;">
         		<img src="<?php ob_start();
echo $_smarty_tpl->tpl_vars['v']->value['toux'];
$_prefixVariable1=ob_get_clean();
if ($_prefixVariable1 != '') {
echo $_smarty_tpl->tpl_vars['v']->value['toux'];
} else { ?>upload/2.jpg<?php }?>" alt="头像" title="用户头像" class="img1 main-right" width="200" height="200"/>
         		 <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
     
         			<div class="son">
         				
         			</div>
  	
    </div>
    <input type="file" name="file" id="fileimg"  multiple="multiple" class="file"/>
</div>
 <?php $_smarty_tpl->_subTemplateRender("file:index/foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
       

<?php }
}
