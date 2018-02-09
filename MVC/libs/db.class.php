<?php
//class db{
//  public $hostname="localhost";
//  public $dbname="test";
//  public $tablename;
//  private $username="root";
//  private $password="";
//  public $fileds; //字段
//  public $connect; //相当于sq 链接成功对象;
//  function __construct($tablename=""){
//      $this->tablename=$tablename;
//      $this->connect=new mysqli($this->hostname,$this->username,$this->password,$this->dbname);
//      $this->connect->query("set names utf8");
//      $this->fileds["filed"]=$this->fileds["filed"]?$this->fileds["filed"]:"*";
//      $this->fileds["where"]=$this->fileds["order"]=$this->fileds["limit"]="";//order排序 
//  }
//  public function select($opt=""){
//      $sql=$opt?$opt:"select ".$this->fileds["filed"]." from ".$this->tablename;
//      $result=$this->connect->query($sql);
//      $arr=array();
//      while($row=$result->fetch_assoc()){
//          $arr[]=$row;
//      }
//      return $arr;
//  }
//  public function filed($opt=""){
//      $sql=$opt?$opt:"*";
//      $this->fileds["filed"]=$sql;
//      return $this;
//  }
//  public function condition($opt=""){
//      $this->fileds["where"]=" where ";
//  }
//}
//$db=new db("category");
////$dbname="test";
//echo dbname;
//var_dump($db->filed("cname")->select());
class db{
    public $hostname="localhost";
    public $dbname="mvc";
    public $tablename;
    private $username="root";
    private $password="root";
    public $fileds; //字段
    public $connect; //相当于sq 链接成功对象;
    function __construct($tablename=""){
//  	if($dbname==""||$tablename==""){
//  		echo "请输入正确的数据库名和表名";
//  		exit;
//  	}
//  	$this->dbname=$dbname;
    	$this->tablename=$tablename;
    	$this->connect=new mysqli($this->hostname,$this->username,$this->password,$this->dbname);
    	$this->config();
    }
    public function config(){
    	if(mysqli_connect_errno($this->connect)){
    		echo "数据库连接失败";
    		$this->connect->close();
    		exit;
    	}
    	$this->connect->query("set names utf8");
    	$this->fileds["filed"]="*";
    	$this->fileds["where"]=$this->fileds["order"]=$this->fileds["limit"]="";
    }
    public function where($opt=""){
    	$sql=empty($opt)?"":" where ".$opt; //empty参数有值为false;
    	$this->fileds["where"]=$sql;
    	return $this; 
    }
    public function order($opt=""){
    	$sql=empty($opt)?$opt:" order by ".$opt; //opt格式为id=2 asc或者desc; order排序
    	$this->fileds["order"]=$sql;
    	return $this;
    }
    public function limit($opt=""){
    	$sql=empty($opt)?$opt:" limit ".$opt;//opt格式为0,1 第一个值为开始位置第二个为几条；limit截取
    	$this->fileds["limit"]=$sql;
    	return $this;
    }
    public function select($opt=""){ //只能传字段
    	if(strpos($opt,"elect")){
          $sql=$opt;
      }else{
    	$str=empty($opt)?"*":$opt;
    	$this->fileds["filed"]=$str;
    	$sql="select ".$this->fileds["filed"]." from ".$this->tablename." ".$this->fileds["where"]." ".$this->fileds["order"]." ".$this->fileds["limit"];
    	}
    	$result=$this->connect->query($sql);
    	$arr=array();
    	while($row=$result->fetch_assoc()){
    		$arr[]=$row;
    	}
    	return $arr;
    }
     public function delete($opt=""){
    	$str=empty($opt)?"":" where ".$opt;//格式id=3;
    	$this->fileds["where"]=$str;
    	$sql="delete from ".$this->tablename." ".$this->fileds["where"];
    	$this->connect->query($sql);
    	return $this->connect->affected_rows;
    }
     public function update($opt=""){
    	$str=empty($opt)?"":"update ".$this->tablename." set ".$opt." ".$this->fileds["where"];//opt格式name='sss'
    	$sql=$this->fileds["filed"]=$str;
    	$this->connect->query($sql);
    	return $this->connect->affected_rows;
    }
     public function insert($opt=""){  //之前必须写filed
     	$str=empty($opt)?$this->opt["fileds"]:$opt;
     	$sql="insert into ".$this->tablename." ".$str;
    	$this->connect->query($sql);
    	return $this->connect->affected_rows;
    }
     public function filed($sql="",$type="insert"){//获取字段
    	$str=empty($sql)?"*":$sql;
    	$keys="";
    	$value="";
    	if(strpos($str,";")){
    		$arr=explode(";",$str);
    		foreach($arr as $k=>$v){
    			$newarr=explode("=",$v);
    			$keys.=$newarr[0].",";
    			$value.=$newarr[1].",";
    		}
    		$keys=substr($keys,0,-1);
    		$value=substr($value,0,-1);
    		$str="(".$keys.") values (".$value.")";
    	}else{
    		$newarr=explode("=",$str);
    		$keys=$newarr[0];
    		$value=$newarr[1];
    		$str="(".$keys.") values (".$value.")";
    	}
    	echo $str;
    	$this->opt["fileds"]=$str;
    	return $this;
    }
}
//$db=new db("test","'show'");
//var_dump($db->select());


//class ab{
//	public $tablename="";
//	public $ku="test";
//	private $username="root";
//	private $password="";
//	public $fileds;
//	public $opts;
//	public $connect;
//	function __construct($ku="",$tablename=""){
//		
//	}
//}

?>
