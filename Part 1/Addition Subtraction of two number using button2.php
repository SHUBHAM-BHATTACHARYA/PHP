<!DOCTYPE html>
<html>
<title> SKFGI </title>
<head><h1 align="center"> Addition Subtraction of Two Number</h1></head>
<body bgcolor="white">
<br>
<form method="GET">
ENTER FIRST NO:<input type="text" name="first">
<br>
ENTER SECOND NO:<input type="text" name="second">
<br>
<input type="submit" name="add" value="add">
<input type="submit" name="sub" value="sub">
</form>
</body>
</html>
<?php
function add($x,$y)
{
	$sum=$x+$y;
	echo "Sum of two Numbers is=$sum <br/><br/>";
}
function sub($x,$y)
{
	$diff=$x-$y;
	echo "Difference of two Numbers is=$diff <br><br>";
}
if(isset($_GET['add']))
{
	add($_GET['first'],$_GET['second']);
}
if(isset($_GET['sub']))
{
	sub($_GET['first'],$_GET['second']);
}
?>