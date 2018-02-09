<?php
class show extends indexmain{
	   function __construct(){
	   	parent::__construct();
	   	$this->db=new db("shows"); 
	   	$this->db1=new db("guanzhu");
	   	$this->db2=new db("user");
	   	$this->db3=new db("love");
	   	$this->db4=new db("message");
	   	$this->db5=new db("huifu");
	   }
	   function show(){	//文章详情页功能
	   	 $sid=$_GET["id"];          //获取当前文章sid
	   	 $result1=$this->db1->select("select * from shows,user where shows.uid=user.id and sid=".$sid);
	   	if($this->session->get("username")){	
	   	 $uid1=$result1[0]["uid"];//当前打开文章作者uid
	   	 $uid2=$this->session->get("id");//当前登录用户id
         	  if($uid1==$uid2){
         	  	 $guanzhu="self";
         	  }else if($uid1!=$uid2){         	  
	         	  $result=$this->db1->where("uid1=".$uid2)->select();//查询当前登录用户的所有id
		         	  if(count($result)){   //关注功能
			         	  	foreach($result as $v){
			         	  		if($v["uid2"]==$uid1){
			         	  				$guanzhu="true";
			         	  				break;
			         	  		}else{//如果没有执行false并且可以关注他
						         	  	 $guanzhu="false";
						        }  
			         	    }
		         	     }else{
		         	     	 $guanzhu="false";
		         	     }
		         	$result3=$this->db3->where("uid=".$uid2)->select();
			         	if(count($result3)){
				         	  	foreach($result3 as $v1){
				         	  		if($v1["sid"]==$sid){
				         	  				$love="true";
				         	  				break;
				         	  		}else{//如果没有执行false并且可以收藏他
							         	  	 $love="false";
							        }  
				         	    }
			         	     }else{
			         	     	 $love="false";
			         	     }
         	   }
         }else{
         	$guanzhu="nosession";
         	$love="nosession";
         }
	   	$this->smarty->assign("guanzhu",$guanzhu);
	   	$this->smarty->assign("love",@$love);
	   	$this->smarty->assign("dangqian",@$this->session->get("username"));
	  	$result2=$this->db->where("sid=".$sid)->select();
	    $this->smarty->assign("result",$result2[0]);
	    $result4=$this->db4->select("select * from user,message where user.id=message.uid1 and sid='$sid' order by mid desc");//留言表里查找当前那篇文章
	    foreach($result4 as $t){
	    	if($t["pid"]==0){
	    		$liuyanArr[]=$t;
	    	}
	    }
        $this->smarty->assign("arr",$result4);
        $this->smarty->assign("liuyanArr",@$liuyanArr);
        $result5=$this->db5->select("select * from message,huifu where huifu.mid=message.mid");
        $this->smarty->assign("result5",$result5);
        $this->smarty->display("index/show.html");
	   }
	   function guanzhu(){
        $this->session->set("near",$_GET["near"]);
		   	if($this->session->get("username")){  //判断如果登录执行的代码
			       	   $uid1=$this->session->get("id");      //当前登录的用户用户
					   $uid2=$_GET["uid2"]; //原创文章用户
			          if($uid1!=$uid2){//判断是不是自己的文章
				       	  if($this->db1->filed("uid1='$uid1';uid2='$uid2'")->insert()){
				       	  	echo "yes";
				       	  	}      //如果没有关注输出yes	     	    
					    }                   
		       }else{                            //如果没有登录执行的代码
		       	   $guanzhu="nosession";
		       	   echo "no";   
		       }
	   }
	   function quxiaoguanzhu(){
	   	 $uid1=$this->session->get("id");
         $uid2=$_GET["uid2"];
         if($this->db1->delete("uid1={$uid1} and uid2={$uid2}")){
             echo "ok";
         }else{
             echo "no";
         }
	   }
	   function shoucang(){
        $this->session->set("near",$_GET["near"]);
        if($this->session->get("login1")){
            $uid=$this->session->get("id");
            $sid=$_GET["sid"];
            $sname=$this->db->where("sid=".$sid)->select();
            $sname0=$sname[0]["sname"];
            if($this->db3->filed("uid='$uid';sid='$sid';sname='$sname0'")->insert()){
                echo "yes";
            }
        }else{
            echo "no";
        }
    }
    function lovecancel(){
        $uid=$this->session->get("id");
        $sid=$_GET["sid"];
        if($this->db3->delete("uid='$uid' and sid='$sid'")){
            echo "ok";
        }else{
            echo "no";
        }

    }
    
    
    
//  留言开始
    function add(){
        $this->session->set("near",$_GET["near"]);
        if($this->session->get("id")){
            $uid1=$this->session->get("id"); //留言者id
            $uid2=$_GET["uid2"];  //作者的id
            $sid=$_GET["sid"];    //文章id
            $mcon=$_GET["mcon"];
            if($this->db4->insert("(uid1,uid2,sid,mcon,pid) values ('$uid1','$uid2','$sid','$mcon','0')")){
                $arr["mid"]=$this->db4->connect->insert_id; //返回上一条insert产生的mid
                $arr["uid"]=$this->session->get("id"); //当前登录用户
                $arr["message"]="ok";
                 echo json_encode($arr);
            }
        }else{
            $arr["message"]="no";
            echo json_encode($arr);
        }
    }
    /*回复的数据的处理*/
    function reply(){
        $this->session->set("near",$_GET["near"]);
        if($this->session->get("id")){
            $sid=$_GET["sid"];
            $uid1name=$this->session->get("username");
            $uid1=$this->session->get("id");//留言用户(id)
            $uid2=$_GET["uid2"];//被回复用户的id
            $uid1name0=$this->db2->where("id=".$uid2)->select();
            $uid2name=$uid1name0[0]["username"];
            $pid=$_GET["pid"];//哪个用户(id)留言下面的回复   (留言组)
            $mcon=$_GET["mcon"];//回复内容
            if($this->session->get("id")==$uid2||$pid==0){
            	$arr["er"]="er";
            	echo json_encode($arr);
            }else{             
	            if($this->db5->insert("(uid1name,uid2name,sid,uid1,uid2,mid,hcon) values ('$uid1name','$uid2name','$sid','$uid1','$uid2','$pid','$mcon')")){
	                $arr["uid"]=$this->session->get("id");
	                $arr["mid"]=$pid;
	                $arr["message"]="ok";
	                $arr["other"]=$uid2name;
	                echo json_encode($arr);
	            }
            }
        }else{
            $arr["message"]="no";
            echo json_encode($arr);
        }
    }
    /*操作点击量*/
    function hit (){
       $sid=$_GET["sid"];
       if($this->db->where("sid=".$sid)->update("hits=hits+1")){
           echo "ok";
       }else{
           echo "no";
       }
    }
}

?>