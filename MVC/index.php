<?php
//单入口页面 ，所有的页面从index.php进入  为了安全而定义


define("MVC","yes");
define("ROOTURL",__DIR__);//DIR获取当前文件路径
define("LIBS_URL",ROOTURL."/libs");//定义libs路径
define("TINDEX_URL",ROOTURL."/template/index");//前台根目录
define("TADMIN_URL",ROOTURL."/template/admin");//后台根目录
define("HTTP_URL","http://".$_SERVER["SERVER_NAME"].substr($_SERVER["SCRIPT_NAME"],0,strrpos($_SERVER["SCRIPT_NAME"],"/")));//动态获取当前服务器根目录
define("FILE_URL",$_SERVER["SCRIPT_NAME"]);//入口文件位置
define("CSS_PATH",HTTP_URL."/static/css");
define("JS_PATH",HTTP_URL."/static/js");
define("CODE",ROOTURL."/static/font/");  
define("IMG_PATH",HTTP_URL."/static/imgs");
include LIBS_URL."/code.class.php";//引入生成图片函数
include  LIBS_URL."/route.class.php";//引入路由函数
include LIBS_URL."/functions.php";//引入post,get函数
include  LIBS_URL."/db.class.php";//引入数据库操作函数
require LIBS_URL."/smarty/Smarty.class.php";//引入smarty模板引擎
include LIBS_URL."/session.class.php";//引入session
include LIBS_URL."/infinite.class.php";//引入无限极分类
include LIBS_URL."/indexmain.class.php";//引入main类，封装了smarty属性及smarty对象
include LIBS_URL."/main.class.php";//引入main类，封装了smarty属性及smarty对象
include LIBS_URL."/pages.class.php";//引入分页函数
$obj=new route();
$obj->info();
?>

