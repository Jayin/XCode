<?php
	class A{
		public function __construct($name,$age){
			$this->iAge=$age;
			$this->sName=$name;
			$this->sNation="中国";
		}
		public $sName;
		public $iAge;
		private $sNation;
	}
	abstract class B{
		public function a();
	}
	$a=new A("JIANZHIYAO","20");
	echo json_encode($a);
?> 