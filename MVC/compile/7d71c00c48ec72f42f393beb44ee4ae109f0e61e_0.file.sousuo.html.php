<?php
/* Smarty version 3.1.30, created on 2017-04-27 17:39:03
  from "D:\wampserver\wamp\www\MVC\template\index\sousuo.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_590210977f8394_13925287',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7d71c00c48ec72f42f393beb44ee4ae109f0e61e' => 
    array (
      0 => 'D:\\wampserver\\wamp\\www\\MVC\\template\\index\\sousuo.html',
      1 => 1493307538,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index/header.html' => 1,
    'file:index/foot.html' => 1,
  ),
),false)) {
function content_590210977f8394_13925287 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:index/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo JS_PATH;?>
/index.js"><?php echo '</script'; ?>
> 
<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>
/index.css"/>   
<div class="container w">
	<div class="row">
		<div class="lunbo">
		</div>
	</div>
</div> 
<div class="container">
	<div class="row">
		    <div class="col-sm-8 main-left">
		    	<h3 class="bt">文章类型</h3>
		    	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result00']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
		    	<?php if (count($_smarty_tpl->tpl_vars['v']->value) > 0) {?>
		     <ul>	   
			    <li class="li">
			        <h1>
			            <a href="index.php?m=index&f=show&a=show&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['sid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value["stitle"];?>
</a>
			        </h1>
			        <div class="img"><img src="<?php echo IMG_PATH;?>
/xh.jpg" alt="" /></div>
			        <div class="time"><?php echo $_smarty_tpl->tpl_vars['v']->value['stime'];?>
</div>
			        <div class="dianji"></div>
			        <div class="dianjishu"><?php echo $_smarty_tpl->tpl_vars['v']->value["hits"];?>
</div>
			        <a href="index.php?m=index&f=show&a=show&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['sid'];?>
"><div class="huifu"></div></a>
			    </li>
			</ul>
			   <?php } else { ?>
			   <div>没有相关内容~</div>
			   <?php }?>
			    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

			</div>
		</div>
	</div>
 <?php $_smarty_tpl->_subTemplateRender("file:index/foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
       
        
        
        
        
<?php }
}
