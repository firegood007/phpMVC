<?php
class category extends main{
	 function __construct(){
	 	parent::__construct();
	 	$this->chekLogin();
	 	$this->db=new db("user");
	 	$this->db1=new db("category");
	 	$this->db2=new db("shows");
	 	$this->in=new infinite();
	 }
	 function adduser(){ //进入添加用户页
	 	$this->smarty->display("admin/user.html");	
	 }
	 function adduser1(){ //添加用户
	 	    $name=P("aname");
	 		$pass=md5(P("apass"));
	 		$pass1=md5(P("apass1"));
	 		if($pass==$pass1){
	 			$result=$this->db->filed("username='$name';userpassword='$pass'")->insert();
	 		}else{
	 			$this->jump("index.php?m=admin&f=category&a=adduser","密码输入不一致");
	 		}
	 		if($result>0){
	 			$this->jump("index.php?m=admin&f=category&a=adduser","添加成功");
	 		}else{
	 			$this->jump("index.php?m=admin&f=category&a=adduser","添加失败");
	 		} 	
	 }
	 function setuser(){//进入管理用户页
	 	$result=$this->db->select();
	 	$this->smarty->assign("result",$result);
	 	$this->smarty->display("admin/usergl.html");
	 }
	  function setuser1(){//进入编辑页
	 	$id=$_GET["id"];
	 	$result=$this->db->where("id=".$id)->select();
	 	$this->smarty->assign("result",$result);
	 	$this->smarty->display("admin/userbj.html");
	 }
	 function setuser2(){ //修改用户信息
	 	$id=$_POST["id"];
	 	$name=$_POST["aname"];
	 	$pass=md5($_POST["apass"]);
	 	$result=$this->db->where("id=".$id)->update("username='$name',userpassword='$pass'");
	 	if($result>0){
	 		$this->jump("index.php?m=admin&f=category&a=setuser","修改成功");
	 	}else{
	 		$this->jump("index.php?m=admin&f=category&a=setuser","修改失败");
	 	}
	 }
	 function deluser(){ //删除用户
	 	$id=$_GET["id"];
	 	$result=$this->db->delete("id=".$id);
	 	if($result>0){
	 		$this->jump("index.php?m=admin&f=category&a=setuser","删除成功");
	 	}else{
	 		$this->jump("index.php?m=admin&f=category&a=setuser","删除失败");
	 	}
	 }
	 function cateadd(){ //进入添加栏目页
	 	$this->in->tree(0,"-",$this->db1->connect,"category");
	 	$this->smarty->assign("tree",$this->in->str);	
	 	$this->smarty->display("admin/cateadd.html");	
	 }
	 function cateadd1(){  //添加栏目
	 	$cid=$_POST["pid"];
	 	$val=$_POST["cname"];
	 	$result=$this->db1->filed("pid='$cid';cname='$val'")->insert();
	 	if($result>0){
	 		$this->jump("index.php?m=admin&f=category&a=cateadd","添加成功");
	 	}else{
	 		$this->jump("index.php?m=admin&f=category&a=cateadd","添加失败");
	 	}
	 }
	 function cateset(){ //管理栏目
	 	$this->in->table(0,"-",$this->db1->connect,"category");
	 	$this->smarty->assign("table",$this->in->str);	
	 	$this->smarty->display("admin/cateset.html");	
	 }
	 function cateset1(){ //进入编辑栏目
	 	$id=$_GET["id"];
	 	$this->in->tree(0,"-",$this->db1->connect,"category",$id);
	 	$this->smarty->assign("tree",$this->in->str);
	    $result=$this->db1->where("cid=".$id)->select("cname");
	 	$this->smarty->assign("value",$result[0]["cname"]);
	 	$this->smarty->assign("yvalue",$id);
	 	$this->smarty->display("admin/catebj.html");	
	 }
	 function cateset2(){  //修改栏目信息
	 	$id=$_POST["pid"];//选好的父的id
	 	$result1=$this->db1->where("cid=".$_POST["yid"])->select("pid");
	 	$pid=$result1[0]["pid"];//原来的父pid
	 	$cate=$_POST["cname"];
	 	$result=$this->db1->where("pid=".$pid)->update("cname='$cate',pid='$id'");
	 	if($result>0){
	 		$this->jump("index.php?m=admin&f=category&a=cateset","修改成功");
	 	}else{
	 		$this->jump("index.php?m=admin&f=category&a=cateset","修改失败");
	 	}
	 }
	 function catedel(){ //删除栏目
	 	$this->del($_GET["id"],$this->db1->connect,"category");
	 }
     function  del($id,$db,$table){
	    $sql="select * from $table where pid=".$id;
	    $result=$db->query($sql);
	    if($result->fetch_assoc()){
	        $this->jump("index.php?m=admin&f=category&a=cateset","包含子类，不能删除，请先删除子类");
	    }else{
	        $sql="delete from $table where cid=".$id;
	        $db->query($sql);
	        if($db->affected_rows>0){
	        $this->jump("index.php?m=admin&f=category&a=cateset","删除分类成功");
	        }
	    }

    }
    function showadd(){ //跳到添加内容页
//  	$result=$this->db2->select();
	 	$this->in->tree(0,"-",$this->db1->connect,"category");
	 	$this->smarty->assign("tree",$this->in->str);
//	 	$this->smarty->assign("result",$result);
	 	$this->smarty->display("admin/showadd.html");
    }
    function showadd1(){
    	$cid=$_POST["cid"];//所属分类id
    	$stitle=$_POST["stitle"];//标题
    	$scon=$_POST["scon"];//内容
    	$result=$this->db1->where("cid=".$cid)->select();
    	$cname=$result[0]["cname"];
 	    $result1=$this->db2->filed("scate='$cname';stitle='$stitle';scon='$scon';cid='$cid'")->insert();
        if($result1>0){
	 		$this->jump("index.php?m=admin&f=category&a=showadd","添加内容成功");	
        }else{
	 		$this->jump("index.php?m=admin&f=category&a=showadd","添加内容失败");	
        }
    }
     function showgl(){//跳到内容管理页
          $result=$this->db2->select();
          $obj=new pages(count($result),5);
          $this->smarty->assign("pages",$obj->out());
          $result1=$this->db2->select("select * from shows,user,category where shows.uid=user.id and shows.cid=category.cid order by statu asc");
          $this->smarty->assign("result",$result1);
          $this->smarty->display("admin/showgl.html");
      }
      function showdel(){//删除当前一条内容
      	$result=$this->db2->delete("sid=".$_GET["sid"]);
      	if($result>0){
            $this->jump("index.php?m=admin&f=category&a=showgl","删除成功");
      	}else{
            $this->jump("index.php?m=admin&f=category&a=showgl","删除失败");
      	}
      }
      function info(){
        $sid=$_GET["sid"];
        $result=$this->db2->where("sid=$sid")->select();
        $this->smarty->assign("result",$result);
        $this->smarty->display("admin/info.html");
      }
      function editinfo(){
        $statu=$_POST["statu"];
        $sid=$_POST["sid"];
        if($this->db2->where("sid=".$sid)->update("statu='$statu'")){
            $this->jump("index.php?m=admin&f=category&a=showgl","审核完成");
        }else{
            $this->jump("index.php?m=admin&f=category&a=showgl","审核失败");
        }
      }
}
?>