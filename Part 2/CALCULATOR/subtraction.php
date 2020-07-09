<?php
class SUBTRACTION
{
	var $a,$b,$c;
	function diff($x,$y)
	{
		$this->a=$x;
		$this->b=$y;
	}
	function sub()
	{
		$this->c=$this->a-$this->b;
		echo "SUBTRACTION=".$this->c;
	}
}
?>