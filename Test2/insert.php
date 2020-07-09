<?php
if($_POST)
		{
			$r=$_POST['n1'];
			$n=$_POST['n2'];
			$a=$_POST['n3'];
			$e=$_POST['n4'];
		
include_once("student.php");
$s=new student();
$s->assign($r,$n,$a,$e);
$s->insert();
}
?>