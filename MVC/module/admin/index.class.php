<?php
class index extends main{
	function init(){
//		1进入登录首页
        if($this->chekLogin()){ //总的判断session里login有没有值如果有的话为true
        	$this->smarty->assign("aname",$this->session->get("aname"));//保存用户名
        	$this->session->set("coming","yes"); //给session一个yes值
        	$this->smarty->display("admin/index.html");//打开后台首页
        }
	}
//	2检测是否有权限
	function login(){
//		3判断有没有登过,没有登录将调到login页，如果有coming就会调到后台首页
		if($this->session->get("coming")){
		                header("location:index.php?m=admin"); //没有值继续到登录首页
		                exit;
            }
           $this->smarty->display("admin/login.html");
//		$this->smarty->display(TADMIN_URL."/login.html"); //去到后台登录页s
	}
	function reg(){
          $this->smarty->display("admin/reg.html");
      }
	function code(){
//		验证是不是可以登录
		$img=new code();
        $img->output();
        $session=$this->session;
        $session->set("code",$img->resultfont);
         //将验证码保存到code上
	}
	function check(){
        $code=@strtolower($_POST["code"]);//接受input发来的code码
        $session=$this->session;
        if($code!==$session->get("code")){
            $this->jump("index.php?m=admin&f=index&a=login","验证码错误");
            exit;
        }
        $aname=P("aname");
        $apass=md5(P("apass"));
        $db=new db("adminuser");
        $result=$db->select();
       foreach ($result as $v){
            if($v["aname"]==$aname){
                if($v["apass"]==$apass){
                    $session->set("login","yes"); //验证都通过给login赋值yes
                    $session->set("aname",$aname);// 给aname赋值当前用户名
                    $session->set("aid",$v["aid"]); //保存当前id
                    $this->jump("index.php?m=admin","登录成功");
                    exit;
                }
            }
       }
          $this->jump("index.php?m=admin&a=login","登录失败");
      }
      function logout(){
          $this->session->del("coming");
          $this->session->clear();
          $this->jump("index.php?m=admin&f=index&a=login","退出成功");
      }
}

?>