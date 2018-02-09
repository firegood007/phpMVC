<?php
class index extends indexmain{
  function	init(){
  	if($this->session->get("username")){
       $this->smarty->assign("username",$this->session->get("username"));//保存用户名
       $this->session->set("coming1","yes"); //给session一个yes值    
  	} 
  	  $this->db=new db("shows");
      $this->db1=new db("user");
	    $result=$this->db->where("statu=3")->order("sid desc")->select();
      $this->smarty->assign("result",$result);
		 //打开前台首页 
		  $result9=$this->db->where("statu=3")->order("hits desc")->limit("0,7")->select();//点击排行榜
      $result10=$this->db->select("select * from shows,love where shows.sid=love.sid order by shows.hits desc");
      $this->smarty->assign("result9",$result9);
      $this->smarty->assign("result10",$result10);
      $this->smarty->display("index/index.html");
  }
  function reg(){
  	$this->smarty->display("index/reg.html");
  }
  function login(){
  	  if($this->session->get("coming1")){
		                header("location:index.php?m=index"); //没有值继续到登录首页
		                exit;
         }
           $this->smarty->display("index/login.html");
  }
  function code(){
  	$img=new code();
  	$img->output();
  	$session=$this->session;
  	$session->set("code",$img->resultfont);
  }
  function check(){
        $code=@strtolower($_POST["code"]);//接受input发来的code码
        $session=$this->session;
        if($code!==$session->get("code")){
            $this->jump("index.php?m=index&f=index&a=login","验证码错误");
            exit;
        }
        $aname=P("username");
        $apass=md5(P("userpassword"));
        $db=new db("user");
        $result=$db->select();
       foreach ($result as $v){
            if($v["username"]==$aname){
                if($v["userpassword"]==$apass){
                    $session->set("login1","yes"); //验证都通过给login赋值yes
                    $session->set("username",$v["username"]);// 给aname赋值当前用户名
                    $session->set("id",$v["id"]); //保存当前id
                    if($session->get("near")){
                    	$this->jump($session->get("near"),"登录成功");
                    	exit;
                    }
                    $this->jump("index.php?m=index","登陆成功");//登录注册控制
                    exit;
                }
            }
       }
          $this->jump("index.php?m=index&a=login","登陆失败");
      }
      function logout(){
          $this->session->del("coming1");
          $this->session->clear();         
          $this->jump("index.php?m=index&f=index&a=init","退出成功");
      }
      function newreg(){
      	$db=new db("user");
      	$name=P("aname");
      	$pass=md5(P("apass"));
      	$pass1=md5(P("apass1")); 	
        $f=$this->session->get("code");
        $f1=$_POST["code"];
        if($pass!=$pass1){
        	$this->jump("index.php?m=index&f=index&a=reg","密码输入不一致");
        	exit;
        }
        if($f!=$f1){
        	$this->jump("index.php?m=index&f=index&a=reg","验证码错误");
        	exit;
        }else{
        	$result=$db->filed("username='$name';userpassword='$pass'")->insert();
        }
      	if($result>0){
      		$this->jump("index.php?m=index&f=index&a=login","注册成功");
      	}else{
      		$this->jump("index.php?m=index&f=index&a=reg","注册失败");
      	}
      }
      function checkname(){
        $db=new db("user");
        $result=$db->select();
        $a=$_POST["aname"];
       foreach($result as $v){
	        if($v["username"]==$a){
	        	echo 'false';
	        	exit;
	        } 	
        }
        echo 'true';  
      }
      function fl(){
      	$cid=$_GET["id"];
        $db=new db("shows");
        $db2=new db("category");
        $result3=array();
        $result1=$db2->select("select * from category where pid=".$cid);
        foreach($result1 as $r){
        	$cid=$r['cid'];
      	  $result3[]=$db->select("select * from shows where cid='$cid'");
      	  
        };
        $this->smarty->assign("result3",$result3);
        $this->smarty->display("index/index1.html");      	
      }
      function sousuo(){
      	$value=$_POST["value"];
      	$db=new db('shows');
//    	$a=array();
      	$result00=$db->select("select * from shows where scon like '%$value%'");
//      foreach($result00 as $c){
//      	$a[]=$db->select("select * from shows where sid=".$c['sid']);
//      }
        $this->smarty->assign("result00",$result00);
        $this->smarty->display("index/sousuo.html");  
//      var_dump($result00);
      }
}
?>