<?php
/* Smarty version 3.1.30, created on 2017-04-20 03:18:17
  from "D:\wampserver\wamp\www\MVC\template\index\grzx.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58f80c590a1e76_84428375',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a5d4116e71e3b7c0422bef05a03ada65dd3a5bec' => 
    array (
      0 => 'D:\\wampserver\\wamp\\www\\MVC\\template\\index\\grzx.html',
      1 => 1492650973,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index/header.html' => 1,
    'file:index/foot.html' => 1,
  ),
),false)) {
function content_58f80c590a1e76_84428375 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:index/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo JS_PATH;?>
/grzx.js"><?php echo '</script'; ?>
>
<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/grzx.css">
<div class="container modal-header kk">
    <div class="row bg">
        <div class="col-sm-8 main-left">
            <!--头像部分-->
            <div class="container-fluid">
                 <div class="row text-center">
                     <div class="col-sm-3 text-center">
                     <div class="t">
                     <a href="index.php?m=index&f=grzx&a=bjzl"><img src="<?php if ($_smarty_tpl->tpl_vars['result8']->value['toux'] == '') {
echo HTTP_URL;?>
/upload/2.jpg<?php } else {
echo $_smarty_tpl->tpl_vars['result8']->value['toux'];
}?>" alt="" width="80"/></a>
                     </div>
                     </div>
                      <div class="col-sm-2 mar">
                          <a href="">关注数量 <span><?php echo count($_smarty_tpl->tpl_vars['result4']->value);?>
</span></a><!--查询uid2为我关注谁-->
                      </div>
                     <div class="col-sm-2 mar">
                         <a href=""> 粉丝数量<span><?php echo count($_smarty_tpl->tpl_vars['result']->value);?>
</span></a><!--查询uid1知道粉丝有哪些-->
                     </div>
                     <div class="col-sm-2 mar">
                         <a href="">文章数量<span><?php echo count($_smarty_tpl->tpl_vars['result2']->value);?>
</span></a>
                     </div>
                     <div class="col-sm-2 mar">
                          <a href="">留言数量<span><?php echo count($_smarty_tpl->tpl_vars['result3']->value);?>
</span></a>
                     </div>
                 </div>
            </div>
            <div class="line"></div>
            <!--菜单部分-->
            <div class="container-fluid">
            	
                <div class="row">
                    <div class="col-sm-4 cont" sname="">
                                                           收藏的内容
                    </div>
                    <div class="col-sm-4 cont">   
                                                           发表的内容
                    </div>
                    <div class="col-sm-4 cont">
                                                           未审核的内容
                    </div>
                </div>
            </div>
            <!--具体的内容-->
            <ul class="mui-table-view scnr xs">
            	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result5']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                <li class="mui-table-view-cell mui-media">
                    <a href="index.php?m=index&f=show&a=show&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['sid'];?>
">
                        <img class="mui-media-object mui-pull-left" src="<?php echo $_smarty_tpl->tpl_vars['result8']->value['toux'];?>
">
                        <div class="mui-media-body">
                            <p class="title"><?php echo $_smarty_tpl->tpl_vars['v']->value['stitle'];?>
</p>
                            <div class="mui-ellipsis nr"><?php echo $_smarty_tpl->tpl_vars['v']->value['scon'];?>
</div>
                        </div>
                    </a>
                </li>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </ul>
            <ul class="mui-table-view scnr">
            	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result6']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                <li class="mui-table-view-cell mui-media">
                    <a href="index.php?m=index&f=show&a=show&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['sid'];?>
">
                        <img class="mui-media-object mui-pull-left" src="<?php echo $_smarty_tpl->tpl_vars['result8']->value['toux'];?>
">
                        <div class="mui-media-body">
                            <p class="title"><?php echo $_smarty_tpl->tpl_vars['v']->value['stitle'];?>
</p>
                            <div class="mui-ellipsis nr"><?php echo $_smarty_tpl->tpl_vars['v']->value['scon'];?>
</div>
                        </div>
                    </a>
                </li>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </ul>
            <ul class="mui-table-view scnr">
            	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result7']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                <li class="mui-table-view-cell mui-media">
                    <a href="index.php?m=index&f=show&a=show&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['sid'];?>
">
                        <img class="mui-media-object mui-pull-left" src="<?php echo $_smarty_tpl->tpl_vars['result8']->value['toux'];?>
">
                        <div class="mui-media-body">
                            <p class="title"><?php echo $_smarty_tpl->tpl_vars['v']->value['stitle'];?>
</p>
                            <div class="mui-ellipsis nr"><?php echo $_smarty_tpl->tpl_vars['v']->value['scon'];?>
</div>
                        </div>
                    </a>
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
