<?php
if($_POST)
		{
			$r=$_POST['n1'];
			$n=$_POST['n2'];
			$a=$_POST['n3'];
		
include_once("student.php");
$s=new student();
$s->update($r,$n,$a);
}
?>