<?php
class route{
	private static $module;  //声明模块
	private static $file;    //声明文件
	private static $action;  //声明方法    
	function info(){
		$this->getInfo();
	}
	function getInfo(){
		self::$module=isset($_REQUEST["m"]) && !empty($_REQUEST["m"])?$_REQUEST["m"]:"index";//$_REQUEST可以接受get，post 接受请求m=某个模块  例如admin或者index模块
		self::$file=isset($_REQUEST["f"]) && !empty($_REQUEST["f"])?$_REQUEST["f"]:"index";//接受请求f=某个模块文件夹  默认为index文件
		self::$action=isset($_REQUEST["a"]) && !empty($_REQUEST["a"])?$_REQUEST["a"]:"init";  //接受请求a=某个方法  默认init方法
		$file="module/".self::$module."/".self::$file.".class.php";  //组合请求路径
		if(is_file($file)){ //判断请求文件存在与否
			include  $file;  //进入文件
			if(class_exists(self::$file)){  //class_exists  判断该文件中是否存在某个类
				$obj=new self::$file();  //如果存在某个类  new实例化这个类 
				if(method_exists($obj,self::$action)){ //判断这个类中是否存在某个方法，参数为实例化对象，和某个方法此处为   self::$action或者写为obj::$action
					$method=self::$action;
					$obj->$method();
				}else{
					echo self::$action."方法不存在";
				}
			}else{
				echo "类不存在";
			}
		}else{
			 echo self::$file."文件不存在";
		}
	}
}
?>