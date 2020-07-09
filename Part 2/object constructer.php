<?php
$object=new Identity();
$object->name();
$object->roll();
$object->dept("C.S.E");
$object=new Identity();
$object2=new clg;
$object2->name();
class Identity
{
	function __construct()
	{
		echo "Construct<br>";
	}
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
	function __destruct()
	{
		echo "Destruct<br>";
	}
	
}
class clg
{
	function name()
	{
		echo "S.K.F.G.I<br>";
	}
}
?>
