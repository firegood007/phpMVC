<?php
/* Smarty version 3.1.30, created on 2018-01-19 08:09:39
  from "E:\wamp\www\MVC\template\index\login.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a6199b3e02b88_58274090',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2f3d929dbea8775889640d2fe8e8f488433eb9d4' => 
    array (
      0 => 'E:\\wamp\\www\\MVC\\template\\index\\login.html',
      1 => 1516345584,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a6199b3e02b88_58274090 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>音悦，聆听属于你的世界</title>
	<link href="favicon.ico" rel="shortcut icon"/>
	<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>
/index_login.css">
	<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jquery.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/index_login.js"><?php echo '</script'; ?>
>
</head>
<body>
     <div class="dlk">
     <form action="index.php?m=index&f=index&a=check" method="post" autocomplete="on" name="denglu" id="denglu" class="mudwnpbutton">
     <div class="logo"><img src="<?php echo IMG_PATH;?>
/3.png" alt=""></div>
     <div class="wenzi">————无节操工作室出品————</div>
        <div class="zhwz">账户名：<input type="text" name="username" class="yhm" placeholder="请输入用户名" maxlength="10"> </div> 
        <div class="mmwz">密码： <input type="password" name="userpassword" class="mm" placeholder="请输入密码" maxlength="12"></div>
        <div class="yzmd">验证码：<input type="text" name="code" class="mm" placeholder="请输入验证码" maxlength="4"> <img src="index.php?m=index&f=index&a=code" alt="" onclick='this.src="index.php?m=index&f=index&a=code&"+Math.random()' title="点击更换验证码"/></div>
         <div class="wjmm"><a href="">忘记密码？</a></div><br>
         <input type="submit" value="立即登录" name="dlan" class="dlan0">
         <input type="reset" value="重新填写" name="tuichu" class="tuichu0">
         <a href="index.php?m=index"><input type="button" value="访客登录" name="fkdl" class="fkdl0 blue"></a>
         <div class="zc">新用户点击 <a href="index.php?m=index&f=index&a=reg">注册</a></div>
         <ul class="hzlj">
            <li class="tubiao0"></li>
            <li class="tubiao1"></li>
            <li class="tubiao2"></li>
            <li class="tubiao3"></li>
         </ul>
     </form>
     </div>
</body>
</html><?php }
}
