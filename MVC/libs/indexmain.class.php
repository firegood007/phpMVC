<?php
class indexmain{
	 function __construct(){
		$this->smarty=new Smarty();
		$this->smarty->setCompileDir("compile");
		$this->smarty->setTemplateDir("template");
        $this->session=new session();
        $this->smarty->assign("login",$this->session->get("login1"));
        $this->smarty->assign("username",$this->session->get("username"));
        $this->db2=new db("category");
        $result111=$this->db2->where("pid=0")->select();
        $this->smarty->assign("result111",$result111); 	
		}
		function chekLogin(){
			$session=$this->session;
			if(!($session->get("login1")&&MVC=="yes")){
				$this->jump("index.php?m=index&f=index&a=login","请登录");
				exit;
			}else{
				return true;
			}
		}
			function jump($url,$message){
			$this->smarty->assign("url",$url);
			$this->smarty->assign("message",$message);
			$this->smarty->display("admin/message.html");
		}
}
?>