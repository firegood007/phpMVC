<?php
/* Smarty version 3.1.30, created on 2017-04-20 03:17:39
  from "D:\wampserver\wamp\www\MVC\template\index\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58f80c33958c05_09159587',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f265002b187b3beb01e8b62996091d671e8fbfc2' => 
    array (
      0 => 'D:\\wampserver\\wamp\\www\\MVC\\template\\index\\index.html',
      1 => 1492650945,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index/header.html' => 1,
    'file:index/foot.html' => 1,
  ),
),false)) {
function content_58f80c33958c05_09159587 (Smarty_Internal_Template $_smarty_tpl) {
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
		    	<h3 class="bt">最新文章</h3>
		     <ul>
			    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
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
			    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

			</ul>
			</div>
			 <div class="col-sm-4 main-right">
            <div class="list-group">
                <a href="#" class="list-group-item active">
                    浏览排行榜
                </a>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result9']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                <a href="index.php?m=index&f=show&a=show&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['sid'];?>
" class="list-group-item"><?php echo $_smarty_tpl->tpl_vars['v']->value["stitle"];?>
</a>
               <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </div>
            <div class="list-group">
                <a href="#" class="list-group-item active">
                   收藏排行榜
                </a>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result10']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                <a href="index.php?m=index&f=show&a=show&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['sid'];?>
" class="list-group-item"><?php echo $_smarty_tpl->tpl_vars['v']->value["stitle"];?>
</a>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </div>
       </div>
	</div>
</div> 
 <?php $_smarty_tpl->_subTemplateRender("file:index/foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
       
        
        
        
        
<?php }
}
