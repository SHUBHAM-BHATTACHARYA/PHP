<?php
class ADDITION
{
	var $a,$b,$c;
	function add($x,$y)
	{
		$this->a=$x;
		$this->b=$y;
	}
	function sum()
	{
		$this->c=$this->a+$this->b;
		echo "ADDITION=".$this->c;
	}
}
?>