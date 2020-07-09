<?php
$object=new Identity;
$object->name();
$object->roll();
$object->dept("C.S.E");
$object2=new clg;
$object2->name();
class Identity
{
	function name()
	{
		echo "SHUBHAM<br>";
	}
	function roll()
	{
		echo "32<br>";
	}
	function dept($x)
	{
		echo "$x<br>";
	}
}
class clg
{
	function name()
	{
		echo "S.K.F.G.I";
	}
}
?>
	