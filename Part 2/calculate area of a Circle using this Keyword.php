<?php
class area
{
	var $r1;
	var $r2;
	var $r3;
	function SetArea($par)
	{
		$this->r1=$par;
		$this->r2=(3.14)*$par*$par;
		$this->r3=(2*3.14)*$par;
	}
	function getArea()
	{
		echo "Radius=".$this->r1."<br>";
		echo "AREA of Circle=".$this->r2."<br>";
		echo "CIRCUMFERANCE of Circle=".$this->r3;
	}
}
$maths=new area;
$maths->setArea("5");
$maths->getArea();
?>