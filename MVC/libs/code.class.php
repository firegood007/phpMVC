<?php
class code{
	private $letter="abcdefg347AxaBCaDdfEFfdGjidJ3d6K7IU6h6J6yH4k5R6b5Jr3Hj4Rf"; 
	public $width=80;
	public $height=40;
	public $lineNum=5;
	public $imgType="png";
	public $img;
	public $resultfont;
	public $fonturl="static/font/x.ttf";
	private function getBgcolor(){
		$arr[0]=mt_rand(0,128);
		$arr[1]=mt_rand(0,128);
		$arr[2]=mt_rand(0,128);
		return $arr;
	}
	private function getfontcolor(){
		$arr4[0]=mt_rand(129,255);
		$arr4[1]=mt_rand(129,255);
		$arr4[2]=mt_rand(129,255);
		return $arr4;
	}
	private function getdegree(){ //角度获取
		$arr1[0]=mt_rand(0,20);
		return $arr1[0];
	}
	private function getfont(){
		$fontlength=strlen($this->letter);
		$startrand=rand(0,$fontlength-4);
		$data=substr($this->letter,$startrand,4);
		$this->resultfont=strtolower($data);
		return $data;
	}
	
	public function output(){
		header("content-type:image/".$this->imgType." charset=UTF-8");
		$out="image".$this->imgType;
//		1.创建画布-》填充颜色；
		$this->create();
//		2.创建文字-》随机-》颜色；
		$this->createText();
		
		//3.创建干扰线-》随机-》颜色;
		for($x=0; $x<=$this->lineNum; $x++) {
           $this->createLine();
       } 
		$out($this->img);
		$this->resultfont;
		imagedestroy($this->img);
	}
	private function create(){
		$this->img=imagecreatetruecolor($this->width,$this->height);
		$colorArr=$this->getBgcolor();
		$bgcolor=imagecolorallocate($this->img,$colorArr[0],$colorArr[1],$colorArr[2]);
		imagefill($this->img,0,0,$bgcolor);	
	}
	private function createText(){
		$fontyz=$this->getfont();
		$xyz=imagettfbbox(20,$this->getdegree(),$this->fonturl,$fontyz);
		$colorArr=$this->getfontcolor();
		$fontcolor=imagecolorallocate($this->img,$colorArr[0],$colorArr[1],$colorArr[2]);
		imagettftext($this->img,20,$this->getdegree(),($this->width-$xyz[2]-$xyz[0])/2,($this->height-$xyz[7]-$xyz[1])/2,$fontcolor,$this->fonturl,$this->getfont());
	}
	private function jd(){
		$arr3[0]=mt_rand(0,100);
		$arr3[1]=mt_rand(0,100);
		$arr3[2]=mt_rand(0,100);
		$arr3[3]=mt_rand(0,100);
		return $arr3;
	}
	private function createLine(){
		$colorArr=$this->getBgcolor();
		$jd1=$this->jd();
		$linecolor=imagecolorallocate($this->img,$colorArr[1],$colorArr[0],$colorArr[2]);
		imageline($this->img,$jd1[0],$jd1[1],$jd1[2],$jd1[3],$linecolor);
	}
}
//$img=new code();
////$img->output;
//$img->getfont();
//echo $img->resultfont;
?>
