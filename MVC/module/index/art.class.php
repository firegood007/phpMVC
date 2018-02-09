<?php
class art extends indexmain{
	function __construct(){
		parent::__construct();
         $this->db=new db("category");
		 $this->db1=new db("shows");
	}                                            //发表文章功能实现
     function showart(){  
       if($this->chekLogin()){
       	   $obj=new infinite();
           $obj->tree(0, 0, $this->db->connect, "category");
           $this->smarty->assign("tree",$obj->str);
           $this->smarty->display("index/showart.html");
       }else{
	 		$this->jump("index.php?m=index&f=index&a=login","请先登录");	
       }
     }
     function showart1(){
        $cid=$_POST["cid"];//所属分类id
    	$stitle=$_POST["stitle"];//标题
    	$scon=$_POST["scon"];//内容
    	$result=$this->db->where("cid=".$cid)->select();
    	$cname=$result[0]["cname"];
    	$uid=$this->session->get("id");
    	$sname=$this->session->get("username");
 	    $result1=$this->db1->insert("(scate,stitle,scon,uid,cid,sname) values ('$cname','$stitle','$scon','$uid','$cid','$sname')");
        if($result1>0){       
	 		$this->jump("index.php?m=index&f=art&a=showart","添加内容成功");	
        }else{
	 		$this->jump("index.php?m=index&f=art&a=showart","添加内容失败");	
        }
     }
}
?>