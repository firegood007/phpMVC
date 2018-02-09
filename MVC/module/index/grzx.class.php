<?php
  class grzx extends indexMain{
      function __construct(){
          parent::__construct();
          $this->db=new db("user");
          $this->db1=new db("shows");
          $this->db2=new db("message");
          $this->db3=new db("love");
          $this->db4=new db("guanzhu");
      }
      function init(){
      	    if($this->chekLogin()){
      	    	 $this->smarty->display("index/grzx.html");
      	    }else{
      	    	$this->jump("index.php?m=index&f=index&a=login","请先登录");	
      	    }   
      }
      function grzx(){
      	  $id=$this->session->get("id");
      	  $result=$this->db4->where("uid2=".$id)->select();
      	  $result4=$this->db4->where("uid1=".$id)->select();
      	  $result2=$this->db1->where("uid=".$id)->select();
      	  $result3=$this->db2->where("uid2=".$id)->select();
      	  $result5=$this->db3->select("select * from love,shows where love.uid='$id' and love.sid=shows.sid");//查询收藏文章 
      	  $result6=$this->db1->where("uid=".$id." and statu=3")->select();
      	  $result7=$this->db1->where("uid=".$id." and statu=0")->select();
      	  $result8=$this->db->select("select * from user where user.id='$id'");//收藏内容查询
      	  $result11=$this->db->select("select toux from user,love where user.username=love.sname");//查询内容用户头像
      	  $result9=$this->db1->where("statu=3")->order("hits desc")->limit("0,7")->select();//点击排行榜
      	  $result10=$this->db1->select("select * from shows,love where shows.sid=love.sid order by shows.hits desc");
      	  $this->smarty->assign("result",$result);
      	  $this->smarty->assign("result4",$result4);
      	  $this->smarty->assign("result2",$result2);
      	  $this->smarty->assign("result3",$result3);
      	  $this->smarty->assign("result5",$result5);
      	  $this->smarty->assign("result6",$result6);
      	  $this->smarty->assign("result7",$result7);
      	  $this->smarty->assign("result8",$result8[0]);
      	  $this->smarty->assign("result9",$result9);
      	  $this->smarty->assign("result10",$result10);
      	  $this->smarty->display("index/grzx.html");//粉丝数查完
      }
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      //取头像
      function bjzl(){ //获取页面数据
      	if($this->session->get("username")){
      		$result1=$this->db->where("id=".$this->session->get("id"))->select();
      		$this->smarty->assign("result1",$result1);
      		$this->smarty->display("index/bjzl.html");
      	}else{
      		$this->jump("index.php?m=index&f=index&a=login","请先登录");	
      	}	
      }
      function txsc(){  //头像无页面刷新 上传
				date_default_timezone_set("Asia/Shanghai");
				$time=time();
				$showtime=date("Y-m-d");
				if(is_uploaded_file($_FILES["file"]["tmp_name"])){
					$name=$_FILES["file"]["name"];
					if(!file_exists("upload/".$showtime)){
						$wenjian=mkdir("upload/".$showtime,0777,true);
					}
					$url="upload/".$showtime."/".$time.$name;
					move_uploaded_file($_FILES["file"]["tmp_name"],$url); 
				} 
				$url=HTTP_URL."/".$url;
				$result=$this->db->where("id=".$this->session->get("id"))->update("toux='$url'");
				if($result>0){
					echo HTTP_URL."/upload/".$showtime."/".$time.$name;
				}else{
					echo HTTP_URL."/upload/3.jpg";
				}
		  }
		  function zlsc(){//上传用户修改资料
		  	$id=$_GET["id"];
		  	$name=$_POST["name"];
		  	$sex=$_POST["sex"];
		  	$email=$_POST["email"];
		  	$grjj=$_POST["grjj"];
		  	$result2=$this->db->where("id=".$id)->update("xingming='$name',sex='$sex',email='$email',grjj='$grjj'");
		  	if($result2>0){
      		$this->jump("index.php?m=index&f=grzx&a=grzx","已保存");	    	
		  	}else{
      		$this->jump("index.php?m=index&f=grzx&a=grzx","保存失败");	    	
		  	}
		  }

     
  }
?>