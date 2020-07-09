<?php
class DIVITION
{
	var $a,$b,$c1,$c2;
	function devine($x,$y)
	{
		$this->a=$x;
		$this->b=$y;
	}
	function div()
	{
		$this->c1=$this->a/$this->b;
		$this->c2=$this->a%$this->b;
		echo "DIVITION=".$this->c1."<br>";
		echo "REMAINDER=".$this->c2;
	}
}
?>