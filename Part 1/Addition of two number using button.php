<!DOCTYPE html>
<html>
<title> SKFGI </title>
<head> Addition Subtraction of Two Number</head>
<body bgcolor="green">
<br>
<form method="POST">
NUMBER1<input type=text name=n1>
<br>
NUMBER2<input type=text name=n2>
<br>
<input type=submit value=add>
<input type=submit value=subtraction>
</form>
</body>
</html>
<?php
if($_POST)
{
	$a=$_POST['n1']+$_POST['n2'];
     echo "$a<br>";
}
if($_POST)
{
	$b=$_POST['n1']-$_POST['n2'];
     echo "$b";
}
?>

