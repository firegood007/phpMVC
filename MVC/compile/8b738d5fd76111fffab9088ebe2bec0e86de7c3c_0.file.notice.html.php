<?php
/* Smarty version 3.1.30, created on 2017-03-20 04:14:26
  from "D:\wampserver\wamp\www\MVC\template\index\notice.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58cf4912b978d7_66804619',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8b738d5fd76111fffab9088ebe2bec0e86de7c3c' => 
    array (
      0 => 'D:\\wampserver\\wamp\\www\\MVC\\template\\index\\notice.html',
      1 => 1489221557,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58cf4912b978d7_66804619 (Smarty_Internal_Template $_smarty_tpl) {
?>
<style>
    .notice-login{
        padding:30px 0;
        width:200px;
        background: #ccc;
        border-radius: 10px;
        text-align: center;
        line-height: 20px;
        position: fixed;
        left:0;top:40%;right:0;bottom: 40%;
        margin:auto;
        display: none;
    }
</style>
<div class="notice-login">
    请先 <a href="index.php?m=index&f=index&a=login">登录</a>
    再进行操作<br>
    <a href="javascript:;" class="btn btn-danger quxiao" style="margin-top:5px;">取消登陆</a>
</div><?php }
}
