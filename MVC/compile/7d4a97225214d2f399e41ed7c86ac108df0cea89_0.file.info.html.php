<?php
/* Smarty version 3.1.30, created on 2017-03-19 15:54:13
  from "D:\wampserver\wamp\www\MVC\template\admin\info.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58ce9b95384573_74003541',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7d4a97225214d2f399e41ed7c86ac108df0cea89' => 
    array (
      0 => 'D:\\wampserver\\wamp\\www\\MVC\\template\\admin\\info.html',
      1 => 1489058634,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58ce9b95384573_74003541 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style type="text/css">
    	body,h1,p{
    		color: white;
    	}
    </style>
</head>
<body>
    <h1>
        <?php echo $_smarty_tpl->tpl_vars['result']->value[0]["stitle"];?>

    </h1>
    <p>
        <?php echo $_smarty_tpl->tpl_vars['result']->value[0]["scon"];?>

    </p>
   <form action="index.php?m=admin&f=category&a=editinfo" method="post">
       未审核:<input type="radio" value="0" name="statu"><br>
       审核中:<input type="radio" value="1" name="statu"><br>
       未通过:<input type="radio" value="2" name="statu"><br>
       通过:<input type="radio" value="3" name="statu"><br>
       <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['result']->value[0]['sid'];?>
" name="sid">
       <input type="submit" value="提交">

   </form>
</body>
</html><?php }
}
