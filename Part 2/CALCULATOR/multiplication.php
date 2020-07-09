<?php
class MULTIPLICATION
{
	var $a,$b,$c;
	function multi($x,$y)
	{
		$this->a=$x;
		$this->b=$y;
	}
	function mul()
	{
		$this->c=$this->a*$this->b;
		echo "MULTIPLICATION=".$this->c;
	}
}
?>