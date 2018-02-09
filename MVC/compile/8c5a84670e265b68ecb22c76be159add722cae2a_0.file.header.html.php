<?php
/* Smarty version 3.1.30, created on 2018-01-19 08:09:32
  from "E:\wamp\www\MVC\template\index\header.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a6199ac146f40_93814998',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8c5a84670e265b68ecb22c76be159add722cae2a' => 
    array (
      0 => 'E:\\wamp\\www\\MVC\\template\\index\\header.html',
      1 => 1516345584,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a6199ac146f40_93814998 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>每日一博</title>
        <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/mui.min.css">	
		<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>
/bootstrap.min.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>
/header.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>
/foot.css" />	
		<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo JS_PATH;?>
/jquery.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo JS_PATH;?>
/hearder.js"><?php echo '</script'; ?>
>
	</head>
	<body>
		<div class="navbar navbar-default" role="navigation">
			<div class="container">
				<div class="row center-block">
					<div class="navbar-header">
						<a href="##" class="navbar-brand">每日一博</a>
					</div>
					<ul class="nav navbar-nav">
						<li class="active">
							<a href="index.php?m=index">博客首页</a>
						</li>
						<li class="dropdown">
							<a href="#" data-toggle="dropdown" class="dropdown-toggle">文章类型<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result111']->value, 'q');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['q']->value) {
?>
								<li>
									<?php if ($_smarty_tpl->tpl_vars['q']->value['pid'] == 0) {?>
									<a href="index.php?m=index&f=index&a=fl&id=<?php echo $_smarty_tpl->tpl_vars['q']->value['cid'];?>
"><?php echo $_smarty_tpl->tpl_vars['q']->value["cname"];?>
 </a>
									<?php }?>	   		
  									<!--<ul class="dropdown-menu-left">
										 <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result111']->value, 'j');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['j']->value) {
?>
									     <?php if ($_smarty_tpl->tpl_vars['q']->value['cid'] == $_smarty_tpl->tpl_vars['j']->value['pid']) {?>
										 <li><a href="index"><?php echo $_smarty_tpl->tpl_vars['j']->value["cname"];?>
</a></li>
										 <?php }?>
									     <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

									</ul>-->
								</li>		
								<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

							</ul>
						</li>
						<li><form action="index.php?m=index&f=index&a=sousuo" class="navbar-form navbar-left" rol="search" method="post">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="请输入关键词" name='value'/>
						</div>
						<button type="submit" class="btn btn-warning">搜索</button>
					   </form>
					   </li>
					   <?php if (!empty($_smarty_tpl->tpl_vars['login']->value)) {?>
					   <li><a href="index.php?m=index&f=grzx&a=bjzl">欢迎回来, <?php echo $_smarty_tpl->tpl_vars['username']->value;?>
 <a href=""><img src="" alt="" /></a> </a></li>
						<li>
							<a href="index.php?m=index&f=grzx&a=grzx">个人中心</a>
						</li>
						<li>
							<a href="index.php?m=index&f=art&a=showart">发表文章</a>
						</li>
						<li>
							<a href="index.php?m=index&f=index&a=logout">退出登录</a>
						</li>
						<?php } else { ?>
						<li class="denglu">
							<a href="index.php?m=index&f=index&a=login">登录</a>
						</li>
						<li>
							<a href="index.php?m=index&f=index&a=reg">注册</a>
						</li>
						<li>
							<a href="index.php?m=index&f=art&a=showart">发表文章</a>
						</li>
						<?php }?>
					</ul>
				</div>
			</div>
		</div><?php }
}
