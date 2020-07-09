<?php
if($_POST)
{
	$r=$_POST['n1'];
	include_once("student.php");
	$s=new student();
	$s->delete($r);
}
?>