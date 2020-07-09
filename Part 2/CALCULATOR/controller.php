<?php
if(isset($_GET['ADD']))
{
	include_once("addition.php");
	$ob=new ADDITION;
	$ob->add($_GET['n1'],$_GET['n2']);
	$ob->sum();
}
if(isset($_GET['DIFF']))
{
	include_once("subtraction.php");
	$ob=new SUBTRACTION;
	$ob->diff($_GET['n1'],$_GET['n2']);
	$ob->sub();
}
if(isset($_GET['MUL']))
{
	include_once("multiplication.php");
	$ob=new MULTIPLICATION;
	$ob->multi($_GET['n1'],$_GET['n2']);
	$ob->mul();
}
if(isset($_GET['DIV']))
{
	include_once("divition.php");
	$ob=new DIVITION;
	$ob->devine($_GET['n1'],$_GET['n2']);
	$ob->div();
}
?>